<?php

namespace App\Livewire\Section;

use App\Models\Customer;
use App\Models\Doctor;
use Livewire\Component;

class Container extends Component
{
    public $count_customer = 1;
    public $count_doctor = 1;
    public $count_appointment = 1;
    public function render()
    {
        $this->count_customer = cache()->remember('count_customer', 60 * 24, function () {
            return round(Customer::count()+23);
        });
        $this->count_doctor = cache()->remember('count_doctor', 60 * 24, function () {
            return round(Doctor::count()+10);
        });
        $this->count_appointment = cache()->remember('count_appointment', 60 * 24, function () {
            return round(9);
        });

        return view('livewire.section.container');
    }
}
