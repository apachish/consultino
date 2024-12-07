<?php

namespace App\Orchid\Layouts\Link;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class LinkEditLayout extends Rows
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
        return [ Input::make('link.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Title'))
            ->placeholder(__('Name')),
            Input::make('link.url')
                ->type('text')
                ->max(255)
                ->title(__('Url'))
                ->placeholder(__('Url')),
            Input::make('link.sort_order')
                ->type('number')
                ->max(255)
                ->title(__('sort Order'))
                ->placeholder(1),
            Picture::make('link.image')
                ->title('Upload Image')
                ->minCanvas(500)
                ->maxWidth(102)
                ->maxHeight(78)
                ->storage('images')
                ->accept('image/*')
                ->required()
                //                    ->multiple()
                ->help('Select an image file. You can upload files in any image format, such as JPG, PNG, or GIF.'),
            Select::make('link.status')
                ->options([
                    true=> __("Active"),
                    false => __("Deactivate"),
                ])
                ->title('Status')

        ];
    }
}
