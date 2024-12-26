<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorProperty extends Model
{
    protected $fillable = [
        "key",
        "value",
        "doctor_id"
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class, "doctor_id");
    }
}
