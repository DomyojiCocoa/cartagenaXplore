<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activities extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'title',
        'rating',
        'information_below',
        'start',
        'end',
        'url_img',
    ];

    protected $dates = ['deleted_at'];



    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('rating');  
    }
}
