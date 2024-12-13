<?php

namespace App\Livewire\Section;

use App\Models\Link;
use Livewire\Component;

class MiniSlider extends Component
{
    public $links;
    public function render()
    {
        $this->links = Link::where("status",1)->orderBy("sort_order","DESC")->get();
        return view('livewire.section.mini-slider');
    }
}
