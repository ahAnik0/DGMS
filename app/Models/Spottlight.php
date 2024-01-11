<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spottlight extends Model
{
    use HasFactory;

    private static $sp,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/spottlight/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newSpottlight($request)
    {
        self::$sp = new Spottlight();
        self::$sp->image = self::imageUpload($request);
        self::$sp->save();
    }

    public static function updateSpottlight($request,$id)
    {
        self::$sp = Spottlight::find($id);
       
        
        if ($request->file('image')){
            if (file_exists(self::$sp->image)){
                unlink(self::$sp->image);
            }
            self::$sp->image = self::imageUpload($request);
        } 
        self::$sp->save();
    }

    public static function deleteSp($id)
    {
        self::$sp = Spottlight::find($id);
        if(file_exists(self::$sp->image)){
            unlink(self::$sp->image);
        }
        
        self::$sp->delete();
    }
  
}
