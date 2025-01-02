<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Rate extends Model
{
    protected $fillable = [
        "rateable_id",
        "rateable_type",
        "value"
    ];

    public function rateable(): MorphTo
    {
        return $this->morphTo();
    }
}
