<?php

namespace App\Livewire\Account;

use Livewire\Component;

class Profile extends Component
{
    public $user =[];

    public function mount()
    {
        $this->user = auth()->guard("customer")->user()->toArray();

    }

    public function getRules()
    {
        return [
          "user.firstname" => "required|max:80",
          "user.lastname" => "required|max:80",
          "user.mobile" => "required|iran_mobile",
          "user.email" => "required|email",
        ];
    }

    public function send()
    {
        $this->validate();
        auth()->user()->update($this->user);
        session()->flash('message-profile', __('Information updated.'));

    }
    public function render()
    {
        return view('livewire.account.profile');
    }
}
