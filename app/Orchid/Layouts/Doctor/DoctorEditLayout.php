<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Doctor;

use App\Models\Expertise;
use App\Orchid\Fields\DatePicker;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Layouts\Rows;

class DoctorEditLayout extends Rows
{
    /**
     * The screen's layout elements.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('doctor.avatar')
                ->type('file')
                ->size("2mb")
                ->required()
                ->title(__('Avatar'))
                ->placeholder(__('Avatar')),

            Input::make('doctor.national_code')
                ->type('number')
                ->required()
                ->title(__('National Code'))
                ->placeholder(__('National Code')),

            Input::make('doctor.mobile')
                ->type('number')
                ->required()
                ->title(__('Mobile'))
                ->placeholder(__('Mobile')),


            DatePicker::make('doctor.birthday')
                ->setWithTime(false)
                ->title('تاریخ تولد')
                ->name('doctor.birthday')
                ->showFormat("jYYYY/jMM/jDD")
                ->required(false)
                ->defaultDate(date('Y-m-d H:i:s'))
                ->setNullInput()
                ->ignoreWire(true)
                ->withTimeSeconds(false),
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
            Matrix::make('doctor.expertise')
                ->columns([
                    'expertise',
                ])
                ->fields([
                    'expertise' =>
                        Relation::make('expertise')
                        ->fromModel(Expertise::class, 'name')
                       ,
                ]),
        ];
    }
}
