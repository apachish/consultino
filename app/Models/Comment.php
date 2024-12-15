<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Orchid\Access\UserAccess;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Comment extends Model
{

    use  Filterable,UserAccess,AsSource;

    protected $fillable = [
        "full_name",
        "email",
        "message",
        "status",
        "parent_id",
        "commentable_id",
        "commentable_type",
        "userable_id",
        "userable_type",
    ];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
