<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Expertise;

use App\Models\Expertise;
use App\Models\Service;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Color;

class ExpertiseListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'expertises';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('name', __('Expertise'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),
            TD::make('parent_id', __('Parent Expertise'))
                ->sort()
                ->render(function ($expertise) {
                    return $expertise->parent ? $expertise->parent->name : '-';
                }),
            TD::make('is_active', __('Status'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn($expertise) => e($expertise->is_active ?
                    Button::make('Active')->method('buttonClickProcessing')->type(Color::SUCCESS) :
                    Button::make('Deactivate')->method('buttonClickProcessing')->type(Color::DANGER)

                )),

            TD::make('updated_at', __('Last edit'))
                ->usingComponent(DateTimeSplit::class)
                ->align(TD::ALIGN_RIGHT)
                ->sort(),
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn(Expertise $expertise) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.systems.expertises.edit', $expertise->id)
                            ->icon('bs.pencil'),
                        Button::make(__('Delete'))
                            ->icon('bs.trash3')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $expertise->id,
                            ]),
                    ])),
        ];
    }
}
