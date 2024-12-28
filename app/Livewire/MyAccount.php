<?php

namespace App\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyAccount extends Component
{
    public $files = [];
    public $order;
    public $file_id;

    public function newOrder()
    {
        dd($this->order);
        $this->validate([
            "order.national_code" => "required|melli_code|unique:files,national_code",
            "order.firstName" => "required",
            "order.lastName" => "required",
            "order.accept" => "required",
        ]);
        $file = File::create($this->order->only(["national_code","firstName","lastName","gender"])->toArray());
        return redirect(route("doctors",["file_id"=>$file->id]));

    }
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
