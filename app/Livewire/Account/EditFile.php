<?php

namespace App\Livewire\Account;

use App\Models\File;
use Livewire\Attributes\On;
use Livewire\Component;

class EditFile extends Component
{
    public $file = [
        "gender" => false
    ];

    public $file_id;


    #[On('set-file')]
    public function updateFile($file_id)
    {
        $this->file_id = $file_id;
    }


    public function getRules()
    {
        return [
            "file.national_code" => [$this->file_id?"nullable":"required","melli_code","unique:files,national_code,{$this->file_id},id"],
            "file.firstName" => [$this->file_id?"nullable":"required","string","max:80"],
            "file.lastName" => [$this->file_id?"nullable":"required","string","max:80"],
            "file.accept" => [$this->file_id?"nullable":"required"],
            "file_id" => [$this->file_id?"required":"nullable","exists:files,id"],
        ];
    }

    public function save()
    {
        $this->validate();

            $data = collect($this->file)->only(["national_code", "firstName", "lastName", "gender", 'address'])->toArray();
        $file = File::find($this->file_id);

        $file->update($data);
        session()->flash('message-edit', __('Updated successfully!'));
        $this->dispatch("file-updated");
        $this->dispatch("reload-file");

    }

    public function render()
    {
        $this->file = File::find($this->file_id);
        if($this->file){
            $this->file =  $this->file->toArray();
        }
        return view('livewire.account.edit-file');
    }
}
