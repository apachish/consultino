<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Doctor;

use App\Models\Doctor;
use App\Orchid\Layouts\Role\RolePermissionLayout;
use App\Orchid\Layouts\Doctor\DoctorEditLayout;
use App\Orchid\Layouts\Doctor\DoctorPasswordLayout;
use App\Orchid\Layouts\User\UserRoleLayout;
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

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Doctor $doctor): iterable
    {
        $doctor->load(['user']);

        return [
            'doctor'       => $doctor,
            'permission' => $doctor->getStatusPermission(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->doctor ? 'Edit Doctor' : 'Create Doctor';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Doctor profile and privileges, including their associated role.';
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
                ->canSee($this->doctor?true:false),

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
        $request->validate([
            'doctor.email' => [
                'required',
                Rule::unique(Doctor::class, 'email')->ignore($doctor),
            ],
        ]);

        $permissions = collect($request->get('permissions'))
            ->map(fn ($value, $key) => [base64_decode($key) => $value])
            ->collapse()
            ->toArray();

        $doctor->when($request->filled('doctor.password'), function (Builder $builder) use ($request) {
            $builder->getModel()->password = Hash::make($request->input('doctor.password'));
        });

        $doctor
            ->fill($request->collect('doctor')->except(['password', 'permissions', 'roles'])->toArray())
            ->forceFill(['permissions' => $permissions])
            ->save();

        $doctor->replaceRoles($request->input('doctor.roles'));

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
