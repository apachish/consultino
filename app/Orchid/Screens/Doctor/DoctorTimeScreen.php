<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Doctor;

use App\Models\Doctor;
use App\Models\DoctorDate;
use App\Models\TimeSlot;
use App\Orchid\Layouts\Doctor\DocterDateListLayout;
use App\Orchid\Layouts\Doctor\DocterListLayout;
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
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class DoctorTimeScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'doctors' => Doctor::with(['user'])
                ->defaultSort('id', 'desc')
                ->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Consultation hours';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'The times you have set for your consultation';
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
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add'))
                ->icon('bs.plus-circle')
                ->route('platform.systems.doctor.appointment.time.create'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
//            DoctorFiltersLayout::class,
            DocterListLayout::class,

            Layout::modal('editDoctorModal', DoctorEditLayout::class)
                ->deferred('loadUserOnOpenModal'),
        ];
    }

    /**
     * Loads user data when opening the modal window.
     *
     * @return array
     */
    public function loadUserOnOpenModal(User $user): iterable
    {
        return [
            'user' => $user,
        ];
    }

    public function saveUser(Request $request, User $user): void
    {
        $request->validate([
            'user.email' => [
                'required',
                Rule::unique(User::class, 'email')->ignore($user),
            ],
        ]);

        $user->fill($request->input('user'))->save();

        Toast::info(__('User was saved.'));
    }

    public function remove(Request $request): void
    {
        User::whereHas("doctor",function ($query) use ($request){
            $query->where("id",$request->input('id'));
        })->first()->delete();

        Toast::info(__('Doctor was removed'));
    }
}
