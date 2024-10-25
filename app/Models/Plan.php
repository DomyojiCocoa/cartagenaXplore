<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'categories_id',
        'url_img',
    ];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
