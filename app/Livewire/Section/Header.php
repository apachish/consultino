<?php

namespace App\Livewire\Section;

use App\Models\Setting;
use Livewire\Component;

class Header extends Component
{
    public  $settings;
    public function render()
    {
        $this->settings = Setting::where("status", 1)->get()->keyBy('key');
        return view('livewire.section.header');
    }
}
