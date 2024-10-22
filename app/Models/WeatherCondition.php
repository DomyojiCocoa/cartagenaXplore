<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherCondition extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function sites()
    {
        return $this->belongsToMany(Site::class, 'site_weather');
    }
}
