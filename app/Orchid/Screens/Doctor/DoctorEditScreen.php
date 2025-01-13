<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Doctor;

use App\Models\Doctor;
use App\Models\DoctorDate;
use App\Models\TimeSlot;
use App\Orchid\Layouts\Doctor\DoctorDateEditLayout;
use App\Orchid\Layouts\Role\RolePermissionLayout;
use App\Orchid\Layouts\Doctor\DoctorEditLayout;
use App\Orchid\Layouts\Doctor\DoctorPasswordLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use App\Orchid\Layouts\User\UserPasswordLayout;
use App\Orchid\Layouts\User\UserRoleLayout;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;
use Morilog\Jalali\Jalalian;
use Orchid\Access\Impersonation;
use App\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class DoctorEditScreen extends Screen
{
    /**
     * @var Doctor
     */
    public $doctor;
    public $user;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Doctor $doctor): iterable
    {

        return [
            'doctor'       => $doctor,
            'user'       => $doctor->user,
            'property' => $doctor->property(),
            'expertises' => $doctor->expertises,
            'date' => $doctor->doctorDates,
            'permission' => $doctor->getStatusPermission(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->doctor->id ? 'Edit Doctor' : 'Create Doctor';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'You can enter additional information for the doctor.';
    }

    public function permission(): ?iterable
    {
        return [
            'platform.systems.users',
        ];
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [

            Button::make(__('Remove'))
                ->icon('bs.trash3')
                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                ->method('remove')
                ->canSee($this->doctor->id?true:false),

            Button::make(__('Save'))
                ->icon('bs.check-circle')
                ->method('save'),
        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {

        return [
            Layout::block(UserEditLayout::class)
                ->title(__('Profile Information'))
                ->description(__('Update your account\'s profile information and email address.')),

            Layout::block(UserPasswordLayout::class)
                ->title(__('Password'))
                ->description(__('Ensure your account is using a long, random password to stay secure.')),

            Layout::block(DoctorEditLayout::class)
                ->title(__('Doctor Information'))
                ->description(__('Add a doctor or edit doctor information.'))
                ,
            Layout::block(DoctorDateEditLayout::class)
                ->title(__('Visiting times'))
                ->description(__('Enter your visit times.'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DARK)
                        ->icon('bs.check-circle')
                        ->canSee($this->doctor?true:false)
                        ->method('save')
                ),


        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Doctor $doctor, Request $request)
    {

        $data_user = $request->get('user');
        $user = User::where("email",data_get($data_user,'email'))->first();
        if(!$user)
            $user = $doctor->user?: new User();
        $hasImage = $doctor && $doctor->avatar;
        $request->validate([
            'user.name'=>"required",
            'doctor.avatar'=>"required",
            'doctor.avatar' => $hasImage ? ['nullable', 'file', 'mimes:jpg,png,jpeg,webp'] : ['required', 'file', 'mimes:jpg,png,jpeg,webp'],

            'doctor.national_code'=>["required","melli_code",Rule::unique(Doctor::class, 'national_code')->ignore($doctor)],
            'doctor.mobile'=>"required|iran_mobile",
            'user.email' => [
                'required','email',
            ],
        ]);

        $permissions = [
            "platform.systems.doctors" => "1"

        ];


        $user->when($request->filled('user.password'), function (Builder $builder) use ($request) {
            $builder->getModel()->password = Hash::make($request->input('user.password'));
        });

        $user = $user
            ->fill($request->collect('user')->except(['password', 'permissions', 'roles'])->toArray())
            ->forceFill(['permissions' => $permissions]);
        if($user->id)
            $user->update;
        else
           $user->save();

        $data = $request->collect('doctor')->only(['mobile', 'national_code'])->toArray();

        $image = $request->file('doctor.avatar');
        if ($image) {
            // بررسی نوع MIME فایل
            $mimeType = $image->getMimeType();

            $manager = new ImageManager(new Driver());
            $filename = time() . '_doctor.' . $image->getClientOriginalExtension();

            // مسیر ذخیره‌سازی کامل در دیسک خارجی
            $externalPath = Storage::disk('external_uploads_images')->path("doctors/".$filename);

            $img =$manager->read($image);

            $img->scale(width: 1792,height: 1024);

            $img->save($externalPath);
            $data["avatar"] = url('/images/doctors/'.$filename);
        }

        $doctor = $doctor->updateOrCreate(['user_id' => $user->id],$data);

        $parameters =  $request->collect('property');
        $expertises =  $request->collect('expertises');
        $date =  $request->collect('date');

        if($expertises->count()) {
            $ids = collect($expertises)->pluck("id")->toArray();
            $olds = $doctor->expertises->pluck('id')->toArray();
            $id_detach = array_diff($olds, $ids);
            if ($id_detach)
                $doctor->expertises()->detach($id_detach);

            $doctor->expertises()->syncWithoutDetaching($ids);
        }
        foreach ($parameters as $key => $value) {
                if ($key == "birthday" && data_get($value, "value"))
                    $value = toGregorian(data_get($value, "value"), "Y/m/d");
                else
                    $value = data_get($value, "value");
                if ($value) {
                    $doctor->properties()->updateOrCreate([
                        'doctor_id' => $doctor->id,
                        'key' => $key,
                    ], [
                        'value' => $value,
                    ]);
                }
        }
        if($date){
            foreach ($date as $key => $value) {
                if(data_get($value,"start_time") && data_get($value,"end_time")) {
                    $day = (new Jalalian((int)data_get($value, 'year'), (int)data_get($value, 'month'), (int)data_get($value, 'day'), 0, 0, 0))
                        ->toCarbon()->toDateTimeString();
                    $doctor_date = DoctorDate::updateOrCreate(["doctor_id" => $doctor->id, "date" => $day], ["is_available" => true]);
                    if ($doctor_date) {
                        TimeSlot::updateOrCreate([
                            "date_id" => $doctor_date->id,
                            "start_time" => data_get($value,"start_time"),
                            "end_time" => data_get($value,"end_time"),
                        ], ["is_available" => true]);
                    }
                }
            }
        }

        Toast::info(__('Doctor was saved.'));

        return redirect()->route('platform.systems.doctors');
    }

    /**
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Doctor $doctor)
    {
        $doctor->delete();

        Toast::info(__('Doctor was removed'));

        return redirect()->route('platform.systems.doctors');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAs(Doctor $doctor)
    {
        Impersonation::loginAs($doctor);

        Toast::info(__('You are now impersonating this doctor'));

        return redirect()->route(config('platform.index'));
    }

    public function loadDay(Request $request)
    {
        $month = (int)$request->get('month');
        $year = (int)$request->get('year');
        $day = (new Jalalian($year, $month, 15))->getMonthDays();
        $days = [];
        for ($i = 1; $i <= $day; $i++) {
            $days[$i] = $i;
        }
        // بازگرداندن مقادیر به‌صورت JSON
        return response()->json($days);
    }
}
