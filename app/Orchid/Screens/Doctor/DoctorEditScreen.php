<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Doctor;

use App\Models\Doctor;
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
use Illuminate\Validation\Rule;
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
            'platform.systems.doctors',
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

        $user = $doctor->user;
        $request->validate([
            'user.name'=>"required",
            'doctor.avatar'=>"required",
            'doctor.national_code'=>"required",
            'doctor.mobile'=>"required",
            'datepickerDate'=>"required",
            'doctor.degree'=>"required",
            'doctor.university'=>"required",
            'doctor.expertise'=>"required",
            'user.email' => [
                'required',
                Rule::unique(User::class, 'email')->ignore($user),
            ],
        ]);
        $data = $request->collect('doctor');

        if ($request->get('datepickerDate')) {
            $data['date'] = ["value" => Carbon::parse((int)$request->get('datepickerDate'))->format('Y-m-d')];
        }
        $data = $request->collect('expertise');


        if($doctor->id)
            $doctor->update($data->toArray());
        else
            $doctor = $doctor->create($data->toArray());

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
}
