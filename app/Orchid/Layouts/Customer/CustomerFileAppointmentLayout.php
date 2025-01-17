<?php

namespace App\Orchid\Layouts\Customer;

use App\Models\Customer;
use App\Models\File;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CustomerFileAppointmentLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'appointments';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', 'File ID'),
            TD::make('firstName', 'Patient First Name'),
            TD::make('lastName', 'Patient Last Name'),

            TD::make('doctor', 'Doctor')
                ->render(function (File $file) {
                    return $file->doctors->map(function ($doctor) {
                        return $doctor->user->name;
                    })->implode(', ');
                }),

            TD::make('appointment_date', 'Appointment Date')
                ->render(function (File $file) {
                    return $file->doctors->map(function ($doctor) {
                        $timeSlot = $doctor->pivot->time_id
                            ? $doctor->timeslots->find($doctor->pivot->time_id)
                            : null;

                        if ($timeSlot) {
                            return $timeSlot->date->date;
                        }

                        return 'N/A';
                    })->implode('<br>');
                }),
            TD::make('appointment_time', 'Appointment Time')
                ->render(function (File $file) {
                    return $file->doctors->map(function ($doctor) {
                        $timeSlot = $doctor->pivot->time_id
                            ? $doctor->timeslots->find($doctor->pivot->time_id)
                            : null;

                        if ($timeSlot) {
                            return getYourTimeColumnAttribute($timeSlot->start_time) . ' - ' . getYourTimeColumnAttribute($timeSlot->end_time);
                        }

                        return 'N/A';
                    })->implode('<br>');
                }),

            TD::make('status', 'Status')
                ->render(function (File $file) {
                    return $file->doctors->map(function ($doctor) {
                        return $doctor->pivot->status;
                    })->implode('<br>');
                }),
        ];

    }
}
