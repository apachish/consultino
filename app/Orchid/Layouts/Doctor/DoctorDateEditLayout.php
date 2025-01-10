<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Doctor;

use App\Models\Expertise;
use App\Orchid\Fields\DatePicker;
use Morilog\Jalali\Jalalian;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
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
        $now_date = convertNumber(toJalali(now(),"Y-m-d"));
        $array_date = explode('-',$now_date);
        $year   = (int)data_get($array_date,0);
        $month   = (int)data_get($array_date,1);
        $day   = (int)data_get($array_date,2);
        $date = (new Jalalian($year, $month, $day)) ;
        $next_year = $date->addYears(1)->format('Y');
        $date_now["year"]= $year;
        $date_now["month"]= $month;
        $date_now["day"]= $day;
        $i=0;
        foreach ($this->query->get("date") as $date_selected) {
            $array = explode("-",convertNumber(toJalali(data_get($date_selected,"date"),"Y-m-d")));
            $day_s["year"] = data_get($array,"0");
            $day_s["month"] = data_get($array,"1");
            $day_s["day"] = data_get($array,"2");
            foreach ($date_selected->times as $time) {
                $day_s["start_time"]= data_get($time,"start_time");
                $day_s["end_time"]= data_get($time,"end_time");
                $this->query->set("date.".$i, $day_s);
                $i++;
            }
        }
        $this->query->set("date.".$i, $date_now);
        $day = (new Jalalian($year, $month, 15))->getMonthDays();
        $days = [];
        for ($i = 1; $i <= $day; $i++) {
            $days[$i] = $i;
        }
        return [
            Matrix::make("date")
                ->columns([
                    "year",
                    "month",
                    "day",
                    "start_time",
                    "end_time"
                ])
                ->fields([
                    "year" => Select::make('year')
                        ->options([
                            data_get($array_date,0)=>data_get($array_date,0),
                            $next_year   => $next_year,
                        ]),
                    "month" => Select::make('month')
                        ->class("month_select")
                        ->options([
                            1=>1,
                            2=>2,
                            3=>3,
                            4=>4,
                            5=>5,
                            6=>6,
                            7=>7,
                            8=>8,
                            9=>9,
                            10=>10,
                            11=>11,
                            12=>12,
                        ])->onChange('loadDay'),
                    "day" => Select::make('day')
                        ->options($days),
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
