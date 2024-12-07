<?php

namespace App\Orchid\Layouts\Slider;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class SliderEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [ Input::make('slider.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Title'))
            ->placeholder(__('Name')),
            Input::make('slider.key.subtitle')
                ->type('text')
                ->max(255)
                ->title(__('Subtitle'))
                ->placeholder(__('Subtitle')),
            Input::make('slider.key.description')
                ->type('text')
                ->max(255)
                ->title(__('Description'))
                ->placeholder(__('Description')),
            Input::make('slider.key.button1_text')
                ->type('text')
                ->max(255)
                ->title(__('Button Text First'))
                ->placeholder(__('Button Text First')),
            Input::make('slider.key.button1_link')
                ->type('text')
                ->max(255)
                ->title(__('Button Link First'))
                ->placeholder(__('Button Link First')),
            Input::make('slider.key.button2_text')
                ->type('text')
                ->max(255)
                ->title(__('Button Text Second'))
                ->placeholder(__('Button Text Second')),
            Input::make('slider.key.button2_link')
                ->type('text')
                ->max(255)
                ->title(__('Button Link Second'))
                ->placeholder(__('Button Link Second')),
            Picture::make('slider.image')
                ->title('Upload Image')
                ->minCanvas(500)
                ->maxWidth(1000)
                ->maxHeight(800)
                ->storage('images')
                ->accept('image/*')
                ->required()
                //                    ->multiple()
                ->help('Select an image file. You can upload files in any image format, such as JPG, PNG, or GIF.'),
            Select::make('slider.status')
                ->options([
                    true=> __("Active"),
                    false => __("Deactivate"),
                ])
                ->title('Status')

        ];
    }
}
