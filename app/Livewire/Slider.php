<?php

namespace App\Livewire;

use Livewire\Component;

class Slider extends Component
{
    public $type = "textslider";
    public $sliders;
    public function render()
    {
        if(in_array($this->type ,[ "textslider","Default"]))
        $this->sliders = \App\Models\Slider::where('status', 1)->get();
        elseif ($this->type == "ripplebg")
            $this->sliders = \App\Models\Slider::where('status', 1)->first();

        return view('livewire.slider');
    }
}
