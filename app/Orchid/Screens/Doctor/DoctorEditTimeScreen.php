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

class DoctorEditTimeScreen extends Screen
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
    public function query(): iterable
    {

        $user =  auth()->user();
        $doctor = data_get($user, 'doctor');
        if (!$doctor) return [];
        return [
            'doctor'       => $doctor,
            'user'       =>$user,
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
        return 'Add Doctor appointment';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'You can enter times that may apply to you here.';
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
        if($this->doctor)
        return [

            Button::make(__('Remove'))
                ->icon('bs.trash3')
                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                ->method('remove')
                ->canSee(($this->doctor->id)?true:false),

            Button::make(__('Save'))
                ->icon('bs.check-circle')
                ->method('save'),
        ];
        else
            return [];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {

        if($this->doctor)
            return [
                Layout::block(DoctorDateEditLayout::class)
                    ->title(__('Visiting times'))
                    ->description(__('Enter your visit times.'))
                    ->commands(
                        Button::make(__('Save'))
                            ->type(Color::DARK)
                            ->icon('bs.check-circle')
                            ->method('save')
                    )
            ];
        else
                return [];




    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Doctor $doctor, Request $request)
    {
        $request->validate([
            "data"=>"required|array",
        ]);
        $date =  $request->collect('date');

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

        Toast::info(__('Doctor Time added successfully.'));

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
