<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Customer;

use App\Models\Customer;
use App\Models\File;
use App\Models\User;
use App\Orchid\Layouts\Customer\CustomerEditLayout;
use App\Orchid\Layouts\Customer\CustomerFileAppointmentLayout;
use App\Orchid\Layouts\Customer\CustomerFileLayout;
use App\Orchid\Layouts\Customer\CustomerFiltersLayout;
use App\Orchid\Layouts\Customer\CustomerListLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CustomerFileAppointmentListScreen extends Screen
{
    public $customer;
    public $file;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Customer $customer,File $file): iterable
    {
        return [
            'file' => $file,
            'customer' => $customer,
//            "appointments"=> $file->doctors
            'appointments' => File::where("id",$file->id)->with(['doctors' => function ($query) {
                $query->with(['timeslots.date']);
            }])->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return __("Doctor appointment list").' '.data_get($this, 'file.firstName')." ".data_get($this, 'file.lastName');
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'A list customers register in site.';
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
            CustomerFileAppointmentLayout::class,

            Layout::modal('editUserModal', CustomerEditLayout::class)
                ->deferred('loadUserOnOpenModal'),
        ];
    }



    public function saveUser(Request $request, Customer $customer): void
    {
        $request->validate([
            'user.email' => [
                'required',
                Rule::unique(User::class, 'email')->ignore($customer),
            ],
        ]);

        $customer->fill($request->input('customer'))->save();

        Toast::info(__('Customer was saved.'));
    }

    public function remove(Request $request): void
    {
        Customer::findOrFail($request->get('id'))->delete();

        Toast::info(__('Customer was removed'));
    }
}
