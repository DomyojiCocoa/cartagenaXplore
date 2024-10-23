<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'name',
        'eslogan',
        'introduction',
        'history',
        'extra',
        'url_img',
    ];

    protected $dates = ['deleted_at'];
}
