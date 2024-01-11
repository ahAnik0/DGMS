<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cmhs extends Model
{
    use HasFactory;

    private static $cmhs,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_cmhs_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/institution/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$cmhs = new Cmhs();
        self::$cmhs->content = $request->content;
        self::$cmhs->image = self::imageUpload($request);
        self::$cmhs->save();
    }

    public static function up($request)
    {
        self::$cmhs = Cmhs::get()->first();
        self::$cmhs->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$cmhs->image)){
                unlink(self::$cmhs->image);
            }
            self::$cmhs->image = self::imageUpload($request);
        } 
        
        self::$cmhs->save();
    }
}
