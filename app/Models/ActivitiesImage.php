<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivitiesImage extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'activities_id',
        'image_id',
    ];

    protected $dates = ['deleted_at'];

    public function activity()
    {
        return $this->belongsTo(Activities::class, 'activities_id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
