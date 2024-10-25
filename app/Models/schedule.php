<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'date',
        'plan_id',
        'user_id',
        'activities_id',
    ];

    protected $dates = ['deleted_at'];

    public function activity()
    {
        return $this->belongsTo(Activities::class, 'activities_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Asegúrate de usar el modelo correcto
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }
}
