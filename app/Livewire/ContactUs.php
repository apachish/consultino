<?php

namespace App\Livewire;

use Livewire\Component;

class ContactUs extends Component
{
    public $contactus = [];

    public function sendContact()
    {
        $this->validate([
            'contactus.fullName'=>'required|max:150',
            'contactus.email'=>'required|email|max:100',
            'contactus.subject'=>'required|max:200',
            'contactus.message'=>'required:max:1000',
        ]);
        \App\Models\contactUs::create(
            [
                "fullName"=>$this->contactus['fullName'],
                "email"=>$this->contactus['email'],
                "subject"=>$this->contactus['subject'],
                "message"=>$this->contactus['message'],
            ]
        );
        session()->flash('message_contact_us', __('Message successfully sent.'));
        $this->contactus = [];
    }
    public function render()
    {
        return view('livewire.contact-us');
    }
}
