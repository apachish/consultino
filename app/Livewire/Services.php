<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{

    public $service;
    public $services;
    public $slug;


    public function render()
    {
        $this->service = Service::where("status",1)
            ->where("slug",$this->slug)
            ->orderBy("sort_order","DESC")->firstOrFail();
        $this->services = Service::select("title","slug","status")->where("status",1)->get();
        return view('livewire.services');
    }
}
