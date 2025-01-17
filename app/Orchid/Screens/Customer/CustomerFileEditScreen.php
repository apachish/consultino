<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Customer;

use App\Models\Customer;
use App\Models\Doctor;
use App\Models\DoctorDate;
use App\Models\File;
use App\Models\TimeSlot;
use App\Orchid\Layouts\Customer\CustomerEditLayout;
use App\Orchid\Layouts\Customer\CustomerFileEditLayout;
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

class CustomerFileEditScreen extends Screen
{
    /**
     * @var File
     */
    public $file;
    public $customer;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Customer $customer,File $file): iterable
    {

        return [
            'file'       => $file,
            'customer'       => $customer,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->file->id ? 'Edit File' : 'Create File';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return "You can edit customer's File information.";
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
                ->canSee($this->file->id?true:false),

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
            Layout::block(CustomerFileEditLayout::class)
                ->title(__('Customer Information'))
                ->description(__("Edit customer file information.")),


        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(File $file, Request $request)
    {
        $request->validate([
            "file.national_code" => ["required","melli_code"],
            "file.firstName" => ["required","string","max:80"],
            "file.lastName" => ["required","string","max:80"],
            "file.address" => ["required","string","max:250"],
        ]);

        $file->fill($request->get('file'))->update();

        Toast::info(__('File was updated.'));

        return redirect()->route('platform.systems.customers.files',$this->customer);
    }

    /**
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(File $file)
    {
        $file->delete();

        Toast::info(__('File was removed'));

        return redirect()->route('platform.systems.customers.files',$this->customer);
    }
}
