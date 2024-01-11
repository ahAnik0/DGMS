<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    use HasFactory;

    private static $ambulance,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'ambulance'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/institution/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$ambulance = new Ambulance();
        self::$ambulance->content = $request->content;
        self::$ambulance->image = self::imageUpload($request);
        self::$ambulance->save();
    }

    public static function up($request)
    {
        self::$ambulance = Ambulance::get()->first();
        self::$ambulance->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$ambulance->image)){
                unlink(self::$ambulance->image);
            }
            self::$ambulance->image = self::imageUpload($request);
        } 
        
        self::$ambulance->save();
    }
}
