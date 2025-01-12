<?php

namespace App\Livewire\Account;

use App\Models\File;
use Livewire\Attributes\On;
use Livewire\Component;

class ListFile extends Component
{

    public $files;
    #[On('reload-file')]
    public function reloadFile()
    {
    }
    public function render()
    {
        $this->files =  File::where("user_id",auth()->id())->get();
        return view('livewire.account.list-file');
    }
}
