<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affdl extends Model
{
    use HasFactory;

    private static $affdl,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_affdl_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/institution/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$affdl = new Affdl();
        self::$affdl->content = $request->content;
        self::$affdl->image = self::imageUpload($request);
        self::$affdl->save();
    }

    public static function up($request)
    {
        self::$affdl = Affdl::get()->first();
        self::$affdl->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$affdl->image)){
                unlink(self::$affdl->image);
            }
            self::$affdl->image = self::imageUpload($request);
        } 
        
        self::$affdl->save();
    }
}
