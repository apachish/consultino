<?php

namespace App\Orchid\Layouts\Customer;

use App\Models\Customer;
use App\Models\File;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CustomerFileLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'files';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('full_name',__('Full Name'))
                ->render(fn($file) => e($file->firstName . ' ' . $file->lastName)),
            TD::make('national_code', __('National Code'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ,
            TD::make('address', __('Address'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ,
            TD::make('gender', __('Gender'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ,
            TD::make('status', __('status'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ,
            TD::make('created_at', __('Created'))
                ->usingComponent(DateTimeSplit::class)
                ->align(TD::ALIGN_RIGHT)
                ->defaultHidden()
                ->sort(),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (File $file) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.systems.files.edit', ["customer"=>$file->customer,"file"=>$file])
                            ->icon('bs.pencil'),

                        Link::make(__('Doctor appointment list'))
                            ->route('platform.systems.files.appointment', ["customer"=>$file->user_id,"file"=>$file->id])
                            ->icon('bs.file-earmark'),

                        Button::make(__('Delete'))
                            ->icon('bs.trash3')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $file->id,
                            ]),
                    ])),
        ];

    }
}
