<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    private static $mission,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/mission/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$mission = new Mission();
        self::$mission->content = $request->content;
        self::$mission->image = self::imageUpload($request);
        self::$mission->save();
    }

    public static function upMission($request)
    {
        self::$mission = Mission::get()->first();
        self::$mission->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$mission->image)){
                unlink(self::$mission->image);
            }
            self::$mission->image = self::imageUpload($request);
        } 
        
        self::$mission->save();
    }
}
