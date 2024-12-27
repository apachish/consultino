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

        if($this->query->get("property.expertise"))
        {
            $property = $this->query->get("property");
            $property["expertise"] = json_decode($this->query->get("property.expertise.value"),true);
            $property["birthday"]['value'] = convertNumber(toJalali($this->query->get("property.birthday.value"),"Y/m/d"));
            $this->query->set("property", $property);
        }

        return [
            Input::make('doctor.avatar')
                ->type('file')
                ->size("2mb")
                ->accept('image/*')
                ->required(!$this->query->has('doctor.avatar') )
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


            DatePicker::make('property.birthday.value')
                ->setWithTime(false)
                ->title(__('Date of birth'))
                ->placeholder(__('Date of birth'))

                ->name('property.birthday.value')
                ->required(false),
            Input::make('property.degree.value')
                ->type('text')
                ->required(false)
                ->title(__('Degree'))
                ->placeholder(__('Degree')),
            Input::make('property.university.value')
                ->type('text')
                ->required(false)
                ->title(__('University'))
                ->placeholder(__('University')),
            Matrix::make("property.expertise")
                ->columns([
                    "value"
                ])
                ->fields([
                    "value" =>
                        Relation::make()

                        ->fromModel(Expertise::class, 'name')->required(false)
                       ,
                ]),
        ];
    }
}
