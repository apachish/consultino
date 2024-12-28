<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyAccount extends Component
{

    public $customer;
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect(route("home"));
    }
    public function render()
    {
        $this->customer = Auth::guard("customer")->user();
        return view('livewire.my-account');
    }
}
