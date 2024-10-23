<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteImage extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'site_id',
        'image_id',
    ];

    protected $dates = ['deleted_at'];

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
