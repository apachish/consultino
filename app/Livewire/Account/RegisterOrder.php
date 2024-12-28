<?php

namespace App\Livewire\Account;

use App\Models\File;
use Livewire\Component;

class RegisterOrder extends Component
{
    public $files = [];
    public $order;
    public $customer ;

    public function newOrder()
    {
        $this->validate([
           "order.national_code" => "required|melli_code|unique:files,national_code",
           "order.firstName" => "required",
           "order.lastName" => "required",
            "order.accept" => "required",
        ]);
        File::create($this->order->only(["national_code","firstName","lastName","gender"])->toArray());
        return redirect(route("doctors"));

    }
    public function render()
    {
        return view('livewire.account.register-order');
    }
}
