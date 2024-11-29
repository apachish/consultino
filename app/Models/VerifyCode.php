<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerifyCode extends Model
{
    protected $fillable = [
        'code',
        'used',
        'mobile_email',
        'expires_at',
    ];
}
