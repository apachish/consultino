<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoctorDate extends Model
{
    use SoftDeletes;
    protected $fillable = ["doctor_id", "date",'is_available'];

    public function doctor()
    {
        $this->belongsTo(Doctor::class);
    }

    public function times()
    {
        return $this->hasMany(TimeSlot::class,'date_id');
    }
}
