<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthBran extends Model
{
    use HasFactory;

    private static $health,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_health_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/branches/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$health = new HealthBran();
        self::$health->content = $request->content;
        self::$health->image = self::imageUpload($request);
        self::$health->save();
    }

    public static function up($request)
    {
        self::$health = HealthBran::get()->first();
        self::$health->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$health->image)){
                unlink(self::$health->image);
            }
            self::$health->image = self::imageUpload($request);
        } 
        
        self::$health->save();
    }
}
