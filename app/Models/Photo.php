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
        'filename',
        'cover_image'
    ];


    public function album()
    {
        return $this->belongsTo(Album::class, 'id');
    }
}
