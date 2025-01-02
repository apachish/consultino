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
        $doctors = Doctor::where("status","active")->with(["expertises","properties"])->paginate(9);

//        $doctors = $doctors->map(function($doctor){
//            data_set($doctor,'properties' , $doctor->properties->keyBy("key"));
//           return $doctor;
//        });
        $doctors->setCollection(
            $doctors->getCollection()->map(function ($doctor) {
                $doctor["properties"] = $doctor->properties->keyBy('key');
                return $doctor;
            })
        );



        return view('livewire.doctors',compact('doctors'));
    }
}
