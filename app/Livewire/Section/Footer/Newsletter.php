<?php

namespace App\Livewire\Section\Footer;

use Livewire\Component;

class Newsletter extends Component
{
    public $email_newsletter;

    public function getRules()
    {
        return[
            'email_newsletter' => 'required|email|unique:newsletters',
        ];
    }
    public function getNewsletter()
    {

    }

    public function render()
    {
        return view('livewire.section.footer.newsletter');
    }
}
