<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = ['activity_id', 'description'];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
