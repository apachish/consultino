<?php

namespace App\Livewire\Section;

use App\Models\Expertise;
use App\Models\RequestAdvice;
use Carbon\Carbon;
use Livewire\Component;

class RequestCallback extends Component
{
    public $advice = [];
    public $datepickerDate;
    public $expertises =[];

    public function sendRequest()
    {
        logger("22",[$this->advice,$this->datepickerDate]);

        $this->validate([
            'advice.full_name' => 'required|min:1|max:100',
            'advice.expertise_id' => 'required|exists:expertises,id',
            'advice.mobile' => 'required|iran_mobile',
            'advice.date' => 'required',
        ]);
        data_set($this->advice,'date',Carbon::parse((int)data_get($this->advice,"date"))->format('Y-m-d'));
        RequestAdvice::create($this->advice);
        session()->flash('message-call-back', __('Your request has been registered. Wait for our colleagues to contact you.'));
        $this->advice = [];

    }

    protected $listeners = ['updateNiceSelect','dateUpdated'];

    public function updateNiceSelect($value)
    {
        data_set($this->advice,'expertise_id' , $value);
    }
    public function dateUpdated($data)
    {
        data_set($this->advice,'date', $data);
    }
    public function render()
    {
         $this->expertises = Expertise::where("is_active",1)->get();
        return view('livewire.section.request-callback');
    }
}
