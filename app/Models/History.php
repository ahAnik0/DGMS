<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    private static $history,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/history/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newHistory($request)
    {
        self::$history = new History();
        self::$history->image = self::imageUpload($request);
        self::$history->message = $request->message;
        self::$history->title = $request->title;
        self::$history->save();
    }

    public static function upHistory($request)
    {
        self::$history = History::get()->first();
        self::$history->title = $request->title;
        self::$history->message = $request->message;
        if ($request->file('image')){
            if (file_exists(self::$history->image)){
                unlink(self::$history->image);
            }
            self::$history->image = self::imageUpload($request);
        } 
        
        
        self::$history->save();
    }
}
