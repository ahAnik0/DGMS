<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afmsd extends Model
{
    use HasFactory;

    private static $afmsd,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_afmsd_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/institution/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$afmsd = new Afmsd();
        self::$afmsd->content = $request->content;
        self::$afmsd->image = self::imageUpload($request);
        self::$afmsd->save();
    }

    public static function up($request)
    {
        self::$afmsd = Afmsd::get()->first();
        self::$afmsd->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$afmsd->image)){
                unlink(self::$afmsd->image);
            }
            self::$afmsd->image = self::imageUpload($request);
        } 
        
        self::$afmsd->save();
    }
}
