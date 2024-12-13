<?php

namespace App\Livewire\Section;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public $services;

    public function render()
    {
        $this->services = Service::where("status",1)->orderBy("sort_order","DESC")->get();

        return view('livewire.section.services');
    }
}
