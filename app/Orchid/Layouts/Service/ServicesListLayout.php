<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Service;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Color;

class ServicesListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'services';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('image', __('Title'))
                ->sort()
                ->cantHide()
                ->render(function ($model) {
                    return "<img src='{$model->image}' alt='{$model->title}' style='width: 50px; height: 50px; object-fit: cover;'>";
                })->width('100px'),
            TD::make('title', __('Title'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),
            TD::make('url', __('Url'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),

            TD::make('status', __('Status'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn($slider) => e($slider->status?
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
                ->render(fn (\App\Models\Link $link) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.systems.sliders.edit', $link->id)
                            ->icon('bs.pencil'),
                    ])),
        ];
    }
}
