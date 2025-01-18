<?php

namespace App\Orchid\Layouts\Doctor;

use App\Models\Doctor;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Color;

class DocterDateListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'doctors';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('user.name', __('Full Name'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),

            TD::make('national_code', __('National Code'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),
            TD::make('mobile', __('Mobile'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),

            TD::make('status', __('Status'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn($doctor) => e($doctor->status?
                    Button::make('Active')->method('buttonClickProcessing')->type(Color::SUCCESS):
                    Button::make('Deactivate')->method('buttonClickProcessing')->type(Color::DANGER)
                )),
//
//            TD::make('updated_at', __('Last edit'))
//                ->usingComponent(DateTimeSplit::class)
//                ->align(TD::ALIGN_RIGHT)
//                ->sort(),
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Doctor $doctor) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.systems.doctors.edit', $doctor->id)
                            ->icon('bs.pencil'),
                        Button::make(__('Delete'))
                            ->icon('bs.trash3')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $doctor->id,
                            ]),
                    ])),
        ];
    }
}
