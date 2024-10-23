<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivitiesPlan extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'plan_id',
    ];

    protected $dates = ['deleted_at'];

    public function activity()
    {
        return $this->belongsTo(Activities::class, 'activity_id');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }
}
