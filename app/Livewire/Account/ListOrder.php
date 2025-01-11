<?php

namespace App\Livewire\Account;

use App\Models\File;
use Livewire\Component;

class ListOrder extends Component
{

    public function render()
    {
        $orders = File::where("user_id",auth()->id())->whereHas("doctors")->get();
        return view('livewire.account.list-order',compact('orders'));
    }
}
