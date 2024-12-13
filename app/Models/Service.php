<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Orchid\Access\UserAccess;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\WhereDateStartEnd;
use Orchid\Screen\AsSource;

class Service extends Model
{
    use  Filterable,UserAccess,AsSource;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'image',
        'slug',
        'icon',
        'description',
        'body',
        'sort_order',
        'status',
    ];
    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'title'       => Like::class,
        'updated_at' => WhereDateStartEnd::class,
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'title',
        'updated_at',
    ];

    public function faqs(): MorphToMany
    {
        return $this->morphToMany(Faq::class, 'faqable')->withTimestamps();
    }
}
