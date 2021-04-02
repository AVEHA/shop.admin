<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'brief_description',
        'full_description',
        'price',
        'thumbnail',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function uploadImage(Request $request, $image = null)
    {
        if($request->hasFile('thumbnail')) {
            if($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("uploads/{$folder}");
        }
        return null;
    }

    public function getImage()
    {
        if($this->thumbnail) {
            return asset('no-image.png');
        }
        return asset("uploads/{$this->thumbnail}");
    }
}
