<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'opening_time', 'closing_time'];

    public function weathers()
    {
        return $this->belongsToMany(WeatherCondition::class, 'site_weather');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'related');
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'activity_site');
    }
}
