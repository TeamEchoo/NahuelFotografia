<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'epigraph',
        'person',
        'link',
        'image_path',
        'album_id'
    ];

    public function album()
    {
        return $this->belongsTo('App\Models\Album');
    }
}
