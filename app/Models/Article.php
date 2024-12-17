<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Morilog\Jalali\Jalalian;
use Orchid\Access\UserAccess;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\Where;
use Orchid\Filters\Types\WhereDateStartEnd;
use Orchid\Screen\AsSource;

class Article extends Model
{
    use  Filterable,UserAccess,AsSource;
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'category',
        'slug',
        'body',
        'author_id',
        'is_published',
        'type',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id'         => Where::class,
        'title'       => Like::class,
        'author_id'      => Like::class,
        'updated_at' => WhereDateStartEnd::class,
        'created_at' => WhereDateStartEnd::class,
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'title',
        'author_id',
        'updated_at',
        'created_at',
    ];


    // Scope to group by category
    public function scopeGroup(Builder $query)
    {
        return $query->groupBy('category')->orderBy('sort_order');
    }
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function parameters()
    {
        return $this->hasMany(ArticleParameter::class,"article_id");
    }

    public function parameter()
    {
        return $this->parameters()
            ->get() // داده‌ها را به‌صورت Collection دریافت می‌کند
            ->keyBy('key');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }

    public function previous()
    {
        return self::where('id', '<', $this->id)
            ->where('category',$this->category)
            ->orderBy('id', 'desc')
            ->first();
    }

    public function next()
    {
        return self::where('id', '>', $this->id)
            ->where('category',$this->category)
            ->orderBy('id', 'asc')
            ->first();
    }

    // اسکوپ برای فیلتر مقالات بر اساس سال و ماه شمسی
    public function scopeByShamsiMonth($query, $year, $month)
    {
        $between_month = $this->getBetweenMonth($year, $month);

        return $query->whereBetween('created_at',$between_month);
    }

    function getBetweenMonth($year,$month): array
    {
//        if($month==12)
//            $year = convertNumber(toJalali(now()->subYear(1), "Y"));
//        else
//            $year = convertNumber(toJalali(now(), "Y"));
        $days = (new Jalalian($year, $month, 15))->getMonthDays();
        $date_between[] = (new Jalalian($year, $month, 1))->toCarbon()->format("Y-m-d"); // [2016, 5, 7]
        $date_between[] = (new Jalalian($year, $month, $days))->toCarbon()->format("Y-m-d"); // [2016, 5, 7]
        return  $date_between;
    }

}
