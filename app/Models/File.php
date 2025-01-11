<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class,'doctor_file','file_id','doctor_id');
    }
}
