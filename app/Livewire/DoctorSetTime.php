<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Doctor;
use App\Models\DoctorDate;
use App\Models\File;
use App\Models\Rate;
use Livewire\Component;

class DoctorSetTime extends Component
{
    public $doctor;
    public $doctor_id;
    public $file_id;
    public $file;
    public $properties;
    public $set_time=false;
    public $times=false;
    public $selected_time=false;
    public $comment =[
        "rate"=>4
    ];

    protected $listeners = ['rateUpdated','date-changed'=>'dataChanged'];

    public function rateUpdated($rate)
    {
        data_set($this->comment,'rate' , $rate);
    }

    public function dataChanged($date)
    {
        $this->set_time=$date;
        $this->times=data_get($date,'times');
    }

    public function setSelectedTime($id)
    {
        $this->selected_time=$id;
    }
    public function sendComment()
    {
        $this->validate([
            'comment.fullName' => 'required',
            'comment.email' => 'required|email',
            'comment.message' => 'required',
            'comment.rate' => 'nullable'

        ]);

        $comment = Comment::create([
            "commentable_id" => $this->doctor->id,
            "commentable_type" => Doctor::class,
            'full_name' => data_get($this->comment,'fullName'),
            'email' => data_get($this->comment,'email'),
            'message' => data_get($this->comment,'message'),
        ]);

        Rate::create([
            "rateable_id" => $comment->id,
            "rateable_type" => Comment::class,
            "value"=>data_get($this->comment,'rate'),
        ]);
        session()->flash('message-comment', __('Your comment was successfully submitted.'));
        $this->comment = [];
    }

    public function appointmentRegistration()
    {
        $this->validate([
            'selected_time' => 'required',
        ]);
        dd($this->selected_time);
    }

    public function render()
    {
        $this->doctor = Doctor::with(["comments.rate", "properties",'doctorDates'=>function ($query) {
            $query->whereDate("date", ">=", now());
        }])
            ->withCount("comments")->findOrFail($this->doctor_id);
        $this->properties = $this->doctor->properties->keyBy('key');

        $this->file = File::findOrFail($this->file_id);
        return view('livewire.doctor-set-time');
    }
}
