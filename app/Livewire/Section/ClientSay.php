<?php

namespace App\Livewire\Section;

use App\Models\Testimonial;
use Livewire\Component;

class ClientSay extends Component
{
    public $testimonials;
    public function render()
    {
        $this->testimonials = Testimonial::where("is_active",1)->get();
        return view('livewire.section.client-say');
    }
}
