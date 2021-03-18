<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category'
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function getCoverImage()
    {
        $photos = $this->photos;
        return $photos->where('cover_image', true)->first();
    }

    public function deleteAlbumPhotos()
    {
        $photos = $this->photos;
        
        foreach($photos as $photo){
            
            $url= str_replace('storage', 'public', $photo->filename);
            
            Storage::delete($url);
            
            $photo->delete();
        }
        
    }
}
