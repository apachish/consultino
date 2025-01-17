<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimeSlot extends Model
{
    use SoftDeletes;

    protected $fillable = ["date_id", "start_time",'end_time','is_available'];

    public function date()
    {
        return $this->belongsTo(DoctorDate::class, 'date_id');
    }
}
