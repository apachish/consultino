<?php

namespace App\Livewire;

use App\Models\Doctor;
use App\Models\File;
use Livewire\Component;

class Doctors extends Component
{
    public  $file_id;

    public function orderBy()
    {

    }
    public function render()
    {
        $file = File::findOrFail($this->file_id);
        $doctors = Doctor::where("status",1)->paginate(9);
        return view('livewire.doctors',compact('doctors'));
    }
}
