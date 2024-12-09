<?php

namespace App\Orchid\Layouts\Portfolio;

use App\Models\Portfolio;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
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
        return [
            Input::make('portfolio.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Title'))
            ->placeholder(__('Name')),

            Relation::make('portfolio.category')
                ->fromModel(Portfolio::class, 'category')
                ->allowAdd(true)
                ->applyScope('group') // اعمال scope گروه‌بندی
                ->title(__('Category')),



            Input::make('portfolio.sort_order')
                ->type('number')
                ->max(255)
                ->title(__('sort Order'))
                ->placeholder(1),
            Picture::make('portfolio.file')
                ->title(__('File'))
                ->minCanvas(500)
                ->maxWidth(102)
                ->maxHeight(78)
                ->storage('images')
                ->accept('image/*,video/mp4,video/webm')
                ->required()
                //                    ->multiple()
                ->help('Select an image file. You can upload files in any image format, such as JPG, PNG, or GIF.'),
            Select::make('portfolio.status')
                ->options([
                    true=> __("Active"),
                    false => __("Deactivate"),
                ])
                ->title(__('Status'))

        ];
    }
}
