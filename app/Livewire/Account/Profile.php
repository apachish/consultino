<?php

namespace App\Livewire\Account;

use Livewire\Component;

class Profile extends Component
{
    public $user;

    public function getRules()
    {
        return [
          "user.name" => "required",
          "user.mobile" => "required",
          "user.email" => "required",
        ];
    }

    public function render()
    {
        $this->user = auth()->guard("customer")->user();
        return view('livewire.account.profile');
    }
}
