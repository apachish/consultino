<?php

namespace App\Livewire\Account;

use App\Models\File;
use Livewire\Component;

class RegisterOrder extends Component
{
    public $files = [];
    public $file = [
        "gender" => false
    ];

    public $file_id;
    public $customer;

    public function mount()
    {
        $this->files = File::where("user_id", $this->customer->id)->get();
        $this->file_id = null;
    }

    public function getRules()
    {
        return [
            "file.national_code" => [$this->file_id?"nullable":"required","melli_code","unique:files,national_code"],
            "file.firstName" => [$this->file_id?"nullable":"required","string","max:80"],
            "file.lastName" => [$this->file_id?"nullable":"required","string","max:80"],
            "file.accept" => [$this->file_id?"nullable":"required"],
            "file_id" => [$this->file_id?"required":"nullable","exists:files,id"],
        ];
    }

    protected $listeners = ['updateNiceSelect'];

    public function updateNiceSelect($value)
    {
        $this->file_id = $value;
    }

    public function save()
    {
        $this->validate();
        if($this->file_id)
            return redirect(route("doctors", ["file_id" => $this->file_id]));
        else {
            $data = collect($this->file)->only(["national_code", "firstName", "lastName", "gender", 'address'])->toArray();
            $data["user_id"] = $this->customer->id;
            $file = File::create($data);
            return redirect(route("doctors", ["file_id" => $file->id]));
        }
    }

    public function render()
    {
        return view('livewire.account.register-order');
    }
}
