<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleParameter extends Model
{
    protected $fillable = [
        "key",
        "value",
        "article_id"
    ];

    public function article(){
        return $this->belongsTo(Article::class, "article_id");
    }
}
