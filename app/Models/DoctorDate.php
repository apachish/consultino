<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorDate extends Model
{
    protected $fillable = ["doctor_id", "date",'is_available'];

    public function doctor()
    {
        $this->belongsTo(Doctor::class);
    }

    public function time()
    {
        return $this->hasMany(TimeSlot::class,'date_id');
    }
}
