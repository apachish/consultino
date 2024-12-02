<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Customer;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class CustomerEditLayout extends Rows
{
    /**
     * The screen's layout elements.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('doctor.fullName')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('fullName'))
                ->placeholder(__('fullName')),
            Input::make('doctor.avatar')
                ->type('file')
                ->size("2mb")
                ->required()
                ->title(__('Avatar'))
                ->placeholder(__('Avatar')),

            Input::make('doctor.national_code')
                ->type('text')
                ->required()
                ->title(__('National Code'))
                ->placeholder(__('National Code')),

            Input::make('doctor.mobile')
                ->type('mobile')
                ->required()
                ->title(__('Mobile'))
                ->placeholder(__('Mobile')),

            Input::make('doctor.birthday')
                ->type('date')
                ->required()
                ->title(__('birthday'))
                ->placeholder(__('birthday')),
            Input::make('doctor.degree')
                ->type('text')
                ->required()
                ->title(__('Degree'))
                ->placeholder(__('Degree')),
            Input::make('doctor.university')
                ->type('text')
                ->required()
                ->title(__('University'))
                ->placeholder(__('University')),
        ];
    }
}
