<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Home extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subTitle', 'body', 'category', 'file'];

    public static function makeDirectory()
    {

        $subFolder = 'images/' . date('Y/m/d');

        Storage::makeDirectory($subFolder);

        return $subFolder;
    }

    public static function getDimensions($image)
    {
        [$width, $height] = getimagesize(Storage::path($image));

        return $width . 'x' . $height;
    }

    public function scopeBelongToCategory($query)
    {
        return $query->where('category', 'top');
    }

    public function fileUrl(){
        return Storage::url($this->file);
    }
}
