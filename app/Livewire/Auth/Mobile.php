<?php

namespace App\Livewire\Auth;

use App\Jobs\VerifySendSms;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Mobile extends Component
{
    #[Validate('required|iran_mobile')]
    public $mobile;

    public $password_confirmation;

    public function send()
    {

        $this->validate();
        dispatch(new VerifySendSms($this->mobile,"sms"));
        $this->dispatch('post-created',email_mobile:$this->mobile)->to(Modal::class);

        session()->flash('message', 'You have successfully registered & logged in!');

    }




    public function render()
    {
        return view('livewire.auth.mobile');
    }
}
