<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'photo_cover_image'
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function cover_image()
    {
        $photos = $this->photo;
        return $this->photos()->where('cover_image', true);
    }

}
