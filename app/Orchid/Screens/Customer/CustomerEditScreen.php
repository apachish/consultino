<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Customer;

use App\Models\Customer;
use App\Models\Doctor;
use App\Models\DoctorDate;
use App\Models\TimeSlot;
use App\Orchid\Layouts\Customer\CustomerEditLayout;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Morilog\Jalali\Jalalian;
use App\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CustomerEditScreen extends Screen
{
    /**
     * @var Doctor
     */
    public $customer;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Customer $customer): iterable
    {

        return [
            'customer'       => $customer,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->customer->id ? 'Edit Customer' : 'Create Customer';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'You can edit customer information.';
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
                ->canSee($this->customer->id?true:false),

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
            Layout::block(CustomerEditLayout::class)
                ->title(__('Customer Information'))
                ->description(__("Update your customer's  information.")),


        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Customer $customer, Request $request)
    {
        $request->validate([
            'customer.firstname'=>"required",
            'customer.lastname'=>["required"],
            'customer.mobile'=>["required",'iran_mobile',Rule::unique(Customer::class, 'mobile')->ignore($customer)],
            'customer.email' => [
                'required','email',Rule::unique(Customer::class, 'email')->ignore($customer)
            ],
        ]);

        $customer->fill($request->get('customer'))->update();

        Toast::info(__('Customer was updated.'));

        return redirect()->route('platform.systems.customers');
    }

    /**
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Customer $customer)
    {
        $customer->delete();

        Toast::info(__('Doctor was removed'));

        return redirect()->route('platform.systems.customers');
    }
}
