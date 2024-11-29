<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\On;

class Modal extends Component
{
    public $email_mobile;


    #[On('post-created')]
    public function updatePostList($email_mobile)
    {
       $this->email_mobile = $email_mobile;
       logger($this->email_mobile );
    }

    public function render()
    {

        return view('livewire.auth.modal');
    }
}
