<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afip extends Model
{
    use HasFactory;

    private static $afip,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_afip_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/institution/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$afip = new Afip();
        self::$afip->content = $request->content;
        self::$afip->image = self::imageUpload($request);
        self::$afip->save();
    }

    public static function up($request)
    {
        self::$afip = Afip::get()->first();
        self::$afip->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$afip->image)){
                unlink(self::$afip->image);
            }
            self::$afip->image = self::imageUpload($request);
        } 
        
        self::$afip->save();
    }
}
