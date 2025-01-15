<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Orchid\Access\UserAccess;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class File extends Model
{
    use  Filterable,UserAccess,AsSource;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        "firstName",
        "lastName",
        'national_code',
        'address',
        'gender',
        'status',
    ];
    public const GENDER_MALE = 0;
    public const GENDER_FEMALE = 1;


    public static function getGender(): array
    {
        return [
            self::GENDER_MALE ,
            self::GENDER_FEMALE,

        ];
    }
    // متدی برای نگاشت مقادیر به نمایش کاربرپسند
    public static function getGenderLabels(): array
    {
        return [
            self::GENDER_MALE => __("Male"),
            self::GENDER_FEMALE =>__("Female"),
        ];
    }

    public function getGenderLabel(): string
    {
        return self::getGenderLabels()[$this->gender] ?? 'نامشخص';
    }

    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class,'doctor_file','file_id','doctor_id')->with(['status','time_id'])->withTimestamps();
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
    public function time()
    {
        return $this->belongsTo(TimeSlot::class,'time_id');
    }
}
