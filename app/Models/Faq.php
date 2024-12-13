<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Faq extends Model
{
    protected $fillable = ["question", "answer"];

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function services(): MorphToMany
    {
        return $this->morphedByMany(Service::class, 'faqable');
    }
}
