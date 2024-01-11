<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;

    private static $photo,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/gallery/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$photo = new PhotoGallery();
        self::$photo->title = $request->title;
        self::$photo->image = self::imageUpload($request);
        self::$photo->save();
    }

    public static function up($request,$id)
    {
        self::$photo = PhotoGallery::find($id);
       
        self::$photo->title = $request->title;
        if ($request->file('image')){
            if (file_exists(self::$photo->image)){
                unlink(self::$photo->image);
            }
            self::$photo->image = self::imageUpload($request);
        } 
        self::$photo->save();
    }

    public static function del($id)
    {
        self::$photo = PhotoGallery::find($id);
        if(file_exists(self::$photo->image)){
            unlink(self::$photo->image);
        }
        
        self::$photo->delete();
    }
  
}
