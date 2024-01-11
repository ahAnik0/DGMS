<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeaceKeeping extends Model
{
    use HasFactory;

    private static $pk,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/pk/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$pk = new PeaceKeeping();
        self::$pk->content = $request->content;
        self::$pk->title = $request->title;
        self::$pk->image = self::imageUpload($request);
        self::$pk->save();
    }

    public static function up($request)
    {
        self::$pk = PeaceKeeping::get()->first();
        self::$pk->content = $request->content;
        self::$pk->title = $request->title;
        if ($request->file('image')){
            if (file_exists(self::$pk->image)){
                unlink(self::$pk->image);
            }
            self::$pk->image = self::imageUpload($request);
        } 
        
        self::$pk->save();
    }
}
