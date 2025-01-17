<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Customer;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class CustomerFileEditLayout extends Rows
{
    /**
     * The screen's layout elements.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('file.firstName')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Firstname'))
                ->placeholder(__('Firstname')),
            Input::make('file.lastName')
                ->type('text')
                ->required()
                ->title(__('Lastname'))
                ->placeholder(__('Lastname')),

            Input::make('file.national_code')
                ->type('numeric')
                ->required()
                ->title(__('National Code'))
                ->placeholder(__('National Code')),

            Input::make('file.address')
                ->type('text')
                ->required()
                ->title(__('Address'))
                ->placeholder(__('Address')),
            Select::make('file.gender')
                ->title(__('Gender'))
                ->options([
                    0 => __("Male"),
                    1 => __("Female"),
                ])
        ];
    }
}
