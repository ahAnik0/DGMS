<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpLink extends Model
{
    use HasFactory;

    
    private static $link,$image,$imageName,$directory,$imageUrl;

    
    public static function new($request)
    {
        self::$link = new ImpLink();
        self::$link->title = $request->title;
        self::$link->url = $request->url;
        self::$link->save();
    }

    public static function up($request,$id)
    {
        self::$link = ImpLink::find($id);
        self::$link->title = $request->title;
        self::$link->url = $request->url;

        self::$link->save();
    }
}
