<?php

namespace App\Livewire\Auth;

use App\Jobs\VerifySendSms;
use App\Mail\VerifyCode;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Email extends Component
{
    #[Validate('required|email')]
    public $email;

    public $password_confirmation;

    public function send()
    {

        $this->validate();

        dispatch(new VerifySendSms($this->email,"mail"));
        $this->dispatch('post-created',email_mobile:$this->email,type:"mail")->to(Modal::class);

        session()->flash('message', __('You have successfully registered & logged in!'));

    }

    public function render()
    {
        return view('livewire.auth.email');
    }
}
