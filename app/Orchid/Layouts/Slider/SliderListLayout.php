<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Slider;

use App\Models\Setting;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Color;

class SliderListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'settings';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('title', __('Title'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),

            TD::make('status', __('Status'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn($setting) => e($setting->status?
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
                ->render(fn (Setting $setting) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.systems.settings.edit', $setting->id)
                            ->icon('bs.pencil'),
                    ])),
        ];
    }
}
