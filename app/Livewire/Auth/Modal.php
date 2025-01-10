<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\On;

class Modal extends Component
{
    public $email_mobile;
    public $type;


    #[On('post-created')]
    public function updatePostList($email_mobile,$type)
    {
       $this->email_mobile = $email_mobile;
       $this->type = $type;
    }

    public function render()
    {

        return view('livewire.auth.modal');
    }
}
