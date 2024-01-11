<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingBran extends Model
{
    use HasFactory;

    private static $train,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_training_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/branches/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$train = new TrainingBran();
        self::$train->content = $request->content;
        self::$train->image = self::imageUpload($request);
        self::$train->save();
    }

    public static function up($request)
    {
        self::$train = TrainingBran::get()->first();
        self::$train->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$train->image)){
                unlink(self::$train->image);
            }
            self::$train->image = self::imageUpload($request);
        } 
        
        self::$train->save();
    }
}
