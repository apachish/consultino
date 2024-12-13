<?php

namespace App\Orchid\Layouts\Slider;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
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

        return [
            Input::make('slider.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Title'))
            ->placeholder(__('Name')),
            Input::make('parameter.subtitle.value')
                ->type('text')
                ->max(255)
                ->title(__('Subtitle'))
                ->placeholder(__('Subtitle')),
            Input::make('parameter.description.value')
                ->type('text')
                ->max(255)
                ->title(__('Description'))
                ->placeholder(__('Description')),
            Input::make('parameter.button1_text.value')
                ->type('text')
                ->max(255)
                ->title(__('Button Text First'))
                ->placeholder(__('Button Text First')),
            Input::make('parameter.button1_link.value')
                ->type('text')
                ->max(255)
                ->title(__('Button Link First'))
                ->placeholder(__('Button Link First')),
            Input::make('parameter.button2_text.value')
                ->type('text')
                ->max(255)
                ->title(__('Button Text Second'))
                ->placeholder(__('Button Text Second')),
            Input::make('parameter.button2_link.value')
                ->type('text')
                ->max(255)
                ->title(__('Button Link Second'))
                ->placeholder(__('Button Link Second')),
//            Picture::make('slider.image')
//                ->title('Upload Image')
//
//                ->storage('images')
//                ->accept('image/*')
//                ->required()
//                //                    ->multiple()
//                ->help('Select an image file. You can upload files in any image format, such as JPG, PNG.'),


            Input::make('slider.image')
                ->type('file')
                ->title('Upload Image')
                ->accept('image/*')
                ->horizontal()
                ->required(!$this->query->has('slider.image') )
                ->help('Select an image file. You can upload files in any image format, such as JPG, PNG.')
            ,
            Input::make('parameter.video.value')
                ->type('file')
                ->title('Upload video')
                ->horizontal()
                ->accept('video/*')
                ->help('Select an video file. You can upload files in any video format, such as Mp4.')
            ,
            Select::make('slider.status')
                ->options([
                    true=> __("Active"),
                    false => __("Deactivate"),
                ])
                ->title('Status')

        ];
    }
}
