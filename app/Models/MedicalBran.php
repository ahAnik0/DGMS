<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalBran extends Model
{
    use HasFactory;

    private static $medical,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_medical_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/branches/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$medical = new MedicalBran();
        self::$medical->content = $request->content;
        self::$medical->image = self::imageUpload($request);
        self::$medical->save();
    }

    public static function up($request)
    {
        self::$medical = MedicalBran::get()->first();
        self::$medical->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$medical->image)){
                unlink(self::$medical->image);
            }
            self::$medical->image = self::imageUpload($request);
        } 
        
        self::$medical->save();
    }
}
