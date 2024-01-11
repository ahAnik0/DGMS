<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CH extends Model
{
    use HasFactory;

    private static $ch,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/ch/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newCh($request)
    {
        self::$ch = new CH();
        self::$ch->content = $request->content;
        self::$ch->image = self::imageUpload($request);
        self::$ch->save();
    }

    public static function upCh($request)
    {
        self::$ch = CH::get()->first();
        self::$ch->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$ch->image)){
                unlink(self::$ch->image);
            }
            self::$ch->image = self::imageUpload($request);
        } 
        
        self::$ch->save();
    }
}
