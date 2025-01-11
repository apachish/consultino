<?php

namespace App\Livewire\Account;

use App\Models\File;
use Livewire\Component;

class ListFile extends Component
{
    public function render()
    {
        $files =  File::where("user_id",auth()->id())->get();
        return view('livewire.account.list-file',compact('files'));
    }
}
