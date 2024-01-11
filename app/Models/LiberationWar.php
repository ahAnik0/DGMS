<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiberationWar extends Model
{
    use HasFactory;

    private static $lw,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/lw/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

   
    public static function upLw($request)
    {
        self::$lw = LiberationWar::get()->first();
        self::$lw->title = $request->title;
        if ($request->file('image')){
            if (file_exists(self::$lw->image)){
                unlink(self::$lw->image);
            }
            self::$lw->image = self::imageUpload($request);
        } 
        
        
        self::$lw->save();
    }
}
