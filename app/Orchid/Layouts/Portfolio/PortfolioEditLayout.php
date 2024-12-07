<?php

namespace App\Orchid\Layouts\Portfolio;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class PortfolioEditLayout extends Rows
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
        return [ Input::make('portfolio.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Title'))
            ->placeholder(__('Name')),
            Input::make('portfolio.icon')
                ->type('text')
                ->max(255)
                ->title(__('Icon'))
                ->help(__('You can add icons from https://www.flaticon.com/'))
                ->placeholder(__('Icon')),
            TextArea::make('portfolio.description')
                ->title('Example textarea')
                ->required()
                ->rows(6),
            Quill::make('portfolio.body')
                ->title(__('Body'))
                ->popover('Quill is a free, open source WYSIWYG editor built for the modern web.'),

            Input::make('portfolio.sort_order')
                ->type('number')
                ->max(255)
                ->title(__('sort Order'))
                ->placeholder(1),
            Picture::make('portfolio.image')
                ->title('Upload Image')
                ->minCanvas(500)
                ->maxWidth(102)
                ->maxHeight(78)
                ->storage('images')
                ->accept('image/*')
                ->required()
                //                    ->multiple()
                ->help('Select an image file. You can upload files in any image format, such as JPG, PNG, or GIF.'),
            Select::make('portfolio.status')
                ->options([
                    true=> __("Active"),
                    false => __("Deactivate"),
                ])
                ->title('Status')

        ];
    }
}
