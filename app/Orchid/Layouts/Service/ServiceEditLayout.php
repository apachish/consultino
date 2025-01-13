<?php

namespace App\Orchid\Layouts\Service;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class ServiceEditLayout extends Rows
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
        return [Input::make('service.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Title'))
            ->placeholder(__('Name')),
            Input::make('service.icon')
                ->type('file')
                ->title('Upload icon')
                ->accept('image/*')
                ->horizontal()
                ->required(!$this->query->has('service.icon') )
                ->help('Select an image file. You can upload files in any image format, such as JPG, PNG.'),
            TextArea::make('service.description')
                ->title(__('Description'))
                ->required()
                ->rows(6),
            Quill::make('service.body')
                ->title(__('Body'))
                ->popover('Quill is a free, open source WYSIWYG editor built for the modern web.'),

            Input::make('service.sort_order')
                ->type('number')
                ->max(255)
                ->title(__('sort Order'))
                ->placeholder(1),
//            Picture::make('service.image')
//                ->title('Upload Image')
//                ->minCanvas(500)
//                ->maxWidth(102)
//                ->maxHeight(78)
//                ->storage('images')
//                ->accept('image/*')
//                ->required()
//                //                    ->multiple()
//                ->help('Select an image file. You can upload files in any image format, such as JPG, PNG, or GIF.'),
            Input::make('service.image')
                ->type('file')
                ->title('Upload Image')
                ->accept('image/*')
                ->horizontal()
                ->required(!$this->query->has('service.image'))
                ->help('Select an image file. You can upload files in any image format, such as JPG, PNG.')
            ,
            Select::make('service.status')
                ->options([
                    true => __("Active"),
                    false => __("Deactivate"),
                ])
                ->title('Status'),
            Matrix::make('service.faqs')
                ->columns([
                    'question',
                    'answer',
                ])
                ->fields([
                    'question' => Input::make()->type('question.'),
                    'answer' => Input::make()->type('answer.'),
                ])

        ];
    }
}
