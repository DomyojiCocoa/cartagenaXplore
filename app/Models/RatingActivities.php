<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RatingActivities extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'rating',
        'user_id',
        'activity_id',
    ];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function activity()
    {
        return $this->belongsTo(Activities::class, 'activity_id');
    }
}
