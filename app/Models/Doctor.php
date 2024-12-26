<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Access\UserAccess;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\Where;
use Orchid\Filters\Types\WhereDateStartEnd;
use Orchid\Screen\AsSource;

class Doctor extends Model
{
    use  Filterable,UserAccess,AsSource;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar',
        'national_code',
        'mobile',
        'user_id',
        "status"
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'permissions'          => 'array',
        'email_verified_at'    => 'datetime',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id'         => Where::class,
        'national_code'       => Like::class,
        'mobile'      => Like::class,
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
        'national_code',
        'mobile',
        'updated_at',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function properties()
    {
        return $this->hasMany(DoctorProperty::class,"doctor_id");
    }

    // تعریف مقادیر ENUM به صورت کانستنت
    public const STATUS_PENDING = 'pending';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_REJECTED = 'rejected';
    public const STATUS_HOLIDAY  = 'holiday';

    public static function getStatus(): array
    {
        return [
            self::STATUS_PENDING ,
            self::STATUS_ACTIVE,
            self::STATUS_REJECTED,
            self::STATUS_HOLIDAY ,
        ];
    }
    // متدی برای نگاشت مقادیر به نمایش کاربرپسند
    public static function getStatusLabels(): array
    {
        return [
            self::STATUS_PENDING => 'در انتظار',
            self::STATUS_ACTIVE => 'فعال',
            self::STATUS_REJECTED => 'رد شده',
            self::STATUS_HOLIDAY => 'تعطیلات',
        ];
    }

    // متدی برای نمایش وضعیت
    public function getStatusLabel(): string
    {
        return self::getStatusLabels()[$this->status] ?? 'نامشخص';
    }

    public function property()
    {
        return $this->properties()
            ->get() // داده‌ها را به‌صورت Collection دریافت می‌کند
            ->keyBy('key');
    }
}
