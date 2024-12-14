<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Orchid\Access\UserAccess;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\WhereDateStartEnd;
use Orchid\Screen\AsSource;



class Portfolio extends Model
{
    use  Filterable,UserAccess,AsSource;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        "slug",
        'image',
        'category',
        'type',
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

    // Scope to group by category
    public function scopeGroup(Builder $query)
    {
        return $query->groupBy('category')->orderBy('sort_order');
    }

    public function parameters()
    {
        return $this->hasMany(PortfolioParameters::class,"portfolio_id");
    }

    public function parameter()
    {
        return $this->parameters()
            ->get() // داده‌ها را به‌صورت Collection دریافت می‌کند
            ->keyBy('key');
    }
}
