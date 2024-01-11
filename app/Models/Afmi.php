<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afmi extends Model
{
    use HasFactory;

    private static $afmi,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_afmi_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/institution/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$afmi = new Afmi();
        self::$afmi->content = $request->content;
        self::$afmi->image = self::imageUpload($request);
        self::$afmi->save();
    }

    public static function up($request)
    {
        self::$afmi = Afmi::get()->first();
        self::$afmi->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$afmi->image)){
                unlink(self::$afmi->image);
            }
            self::$afmi->image = self::imageUpload($request);
        } 
        
        self::$afmi->save();
    }
}
