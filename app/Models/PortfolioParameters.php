<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioParameters extends Model
{
    protected $fillable = [
        "key",
        "value",
        "portfolio_id"
    ];

    public function portfolio(){
        return $this->belongsTo(Portfolio::class, "portfolio_id");
    }
}
