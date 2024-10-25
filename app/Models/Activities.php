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
        'categories_id',
        'rating',
        'information_below',
        'start',
        'end',
        'url_img',
    ];

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
    
}
