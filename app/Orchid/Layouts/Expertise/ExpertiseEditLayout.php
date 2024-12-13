<?php

namespace App\Orchid\Layouts\Expertise;

use App\Models\Category;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;

use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class ExpertiseEditLayout extends Rows
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
        return [Input::make('expertise.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Title'))
            ->placeholder(__('Name')),

            Relation::make('expertise.expertise')
                ->fromModel(Category::class, 'name')
                ->title(__('Parent')),
            Select::make('expertise.status')
                ->options([
                    true => __("Active"),
                    false => __("Deactivate"),
                ])
                ->title('Status'),

        ];
    }
}
