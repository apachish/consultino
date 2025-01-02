<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Doctor;

use App\Models\Expertise;
use App\Orchid\Fields\DatePicker;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Layouts\Rows;

class DoctorDateEditLayout extends Rows
{
    /**
     * The screen's layout elements.
     *
     * @return Field[]
     */
    public function fields(): array
    {


        return [
            Matrix::make("date")
                ->columns([
                    "date",
                    "start_time",
                    "end_time"
                ])
                ->fields([
                    "date" => DateTimer::make('open')
                        ->title('Opening date')
                        ->enableTime(false)
                        ->help('The opening event will take place'),
                    "start_time" => Input::make('time')
                        ->type('time')
                        ->required(false)
                        ->title(__('Time'))
                        ->placeholder(__('Start time')),
                    "end_time" => Input::make('time')
                        ->type('time')
                        ->required(false)
                        ->title(__('Time'))
                        ->placeholder(__('End time')),
                ]),
        ];
    }
}
