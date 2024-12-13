<?php

namespace App\Livewire\Section;

use App\Models\Doctor;
use Livewire\Component;

class Doctors extends Component
{
    public $doctors;
    public function render()
    {
        $this->doctors = Doctor::where("status", 1)->get();
        return view('livewire.section.doctors');
    }
}
