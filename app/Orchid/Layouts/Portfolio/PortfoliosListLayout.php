<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Portfolio;

use App\Models\Portfolio;
use App\Models\Service;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Color;

class PortfoliosListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'portfolios';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('file', __('File'))
                ->sort()
                ->cantHide()
                ->render(function ($model) {
                    return "<img src='{$model->file}' alt='{$model->title}' style='width: 50px; height: 50px; object-fit: cover;'>";
                })->width('100px'),
            TD::make('title', __('Title'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),
            TD::make('category', __('Category'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),

            TD::make('status', __('Status'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn($portfolio) => e($portfolio->status?
                    Button::make('Active')->method('buttonClickProcessing')->type(Color::SUCCESS):
                    Button::make('Deactivate')->method('buttonClickProcessing')->type(Color::DANGER)

                )),

            TD::make('updated_at', __('Last edit'))
                ->usingComponent(DateTimeSplit::class)
                ->align(TD::ALIGN_RIGHT)
                ->sort(),
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Portfolio $portfolio) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.systems.portfolios.edit', $portfolio->id)
                            ->icon('bs.pencil'),
                        Button::make(__('Delete'))
                            ->icon('bs.trash3')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $portfolio->id,
                            ]),
                    ])),
        ];
    }
}
