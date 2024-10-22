<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'duration', 'average_rating'];

    public function routes()
    {
        return $this->hasMany(Route::class);
    }

    public function covers()
    {
        return $this->hasMany(Cover::class);
    }

    public function sites()
    {
        return $this->belongsToMany(Site::class, 'activity_site');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'related');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
