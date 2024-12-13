<?php

namespace App\Livewire;

use Livewire\Component;

class Slider extends Component
{
    public $type = "Default";//Default,textslider,videobg,ripplebg
    public $sliders;
    public function render()
    {
        $this->sliders = \App\Models\Slider::where('status', 1)->with("parameters");
        switch ($this->type) {
            case "ripplebg":
                $this->sliders->limit(1);
                break;
            case "videobg":
                $this->sliders->whereHas('parameters', function ($query) {
                    $query->where("key", "video");
                })
                ->limit(1);
                break;
        }
        $this->sliders = $this->sliders->get()
            ->map(function ($slider) {
                return ["slider"=>$slider,"parameters"=>$slider->parameters->keyBy('key')];
            })
        ;


        return view('livewire.slider');
    }
}
