<?php

namespace App\Livewire\Section;

use App\Models\Expertise;
use Livewire\Component;

class RequestCallback extends Component
{
    public $advice_full_name;
    public $advice_category;
    public $advice_mobile;
    public $advice_date;

    public $expertises;

    public function sendRequest()
    {
        dd('s');
    }
    public function render()
    {
         $this->expertises = Expertise::where("is_active",1)->get();
        return view('livewire.section.request-callback');
    }
}
