<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $fillable = [
        'url',
    ];

    protected $dates = ['deleted_at'];
}
