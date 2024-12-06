<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderParameter extends Model
{
    protected $fillable = [
        "key",
        "value",
        "slide_id"
    ];

    public function slider(){
        return $this->belongsTo(Slider::class, "slide_id");
    }
}
