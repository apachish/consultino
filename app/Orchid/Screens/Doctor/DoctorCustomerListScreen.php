<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Doctor;

use App\Models\Doctor;
use App\Models\File;
use App\Models\User;
use App\Orchid\Layouts\Doctor\DocterCustomerListLayout;
use App\Orchid\Layouts\Doctor\DocterListLayout;
use App\Orchid\Layouts\Doctor\DoctorEditLayout;
use App\Orchid\Layouts\Doctor\DoctorFiltersLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class DoctorCustomerListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'appointments' => File::with(['doctors' => function ($query) {
                $query->with(['timeslots.date']);
            }])->whereHas("doctors",function ($query){
                $query->where("doctor_id",data_get(auth()->user()->doctor,'id'));
            })->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return "Doctor appointment list";
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'List of users who have an appointment';
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
            DocterCustomerListLayout::class,
        ];
    }


    public function remove(Request $request): void
    {
        User::whereHas("doctor",function ($query) use ($request){
            $query->where("id",$request->input('id'));
        })->first()->delete();

        Toast::info(__('Doctor was removed'));
    }
}
