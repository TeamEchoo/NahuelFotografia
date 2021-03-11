<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category'
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function getCoverImage()
    {
        return $this->photos->where('cover_image', true)->first();
    }

}
