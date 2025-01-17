<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Customer;

use App\Models\Customer;
use App\Models\User;
use App\Orchid\Layouts\Customer\CustomerEditLayout;
use App\Orchid\Layouts\Customer\CustomerFiltersLayout;
use App\Orchid\Layouts\Customer\CustomerListLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ClientListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'customers' => Customer::filters(CustomerFiltersLayout::class)->withCount('files')
                ->defaultSort('id', 'desc')
                ->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Customer Management';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'A list of all clients who request advice.';
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
            CustomerListLayout::class,

            Layout::modal('editUserModal', CustomerEditLayout::class)
                ->deferred('loadUserOnOpenModal'),
        ];
    }

    /**
     * Loads user data when opening the modal window.
     *
     * @return array
     */
    public function loadUserOnOpenModal(Customer $customer): iterable
    {
        return [
            'customer' => $customer,
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
