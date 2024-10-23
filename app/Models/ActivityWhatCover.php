<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityWhatCover extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'info',
        'activity_id',
    ];

    public function activity()
    {
        return $this->belongsTo(Activities::class, 'activity_id');
    }
}
