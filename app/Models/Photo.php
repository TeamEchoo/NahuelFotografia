<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'epigraph',
        'person',
        'link',
        'filename',
        'cover_image',
        'album_id'
    ];


    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function photoDeleteFromStore(){
        
        $url= str_replace('storage', 'public', $this->filename);

        Storage::delete($url);
    }
}
