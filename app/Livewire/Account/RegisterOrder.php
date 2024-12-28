<?php

namespace App\Livewire\Account;

use App\Models\File;
use Livewire\Component;

class RegisterOrder extends Component
{
    public $files = [];
    public $file = [
        "gender"=>false
    ];

    public $firstName;
    public $customer ;

    public function getRules()
    {
        return [
            "file.national_code" => "required|melli_code|unique:files,national_code",
            'file.firstName' => 'required|string|max:80',
            'file.lastName' => 'required|string|max:80',
            "file.accept" => "required",
        ];
    }
    public function save()
    {
        $this->validate();
        $data = collect($this->file)->only(["national_code","firstName","lastName","gender",'address'])->toArray();
        $data["user_id"] = $this->customer->id;
        $file = File::create($data);
        return redirect(route("doctors",["file_id"=>$file->id]));
    }

    public function render()
    {
        $this->files = File::where("user_id",$this->customer->id)->get();
        return view('livewire.account.register-order');
    }
}
