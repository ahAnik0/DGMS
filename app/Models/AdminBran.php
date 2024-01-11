<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBran extends Model
{
    use HasFactory;

    private static $admin,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_admin_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/branches/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function new($request)
    {
        self::$admin = new AdminBran();
        self::$admin->content = $request->content;
        self::$admin->image = self::imageUpload($request);
        self::$admin->save();
    }

    public static function up($request)
    {
        self::$admin = AdminBran::get()->first();
        self::$admin->content = $request->content;

        if ($request->file('image')){
            if (file_exists(self::$admin->image)){
                unlink(self::$admin->image);
            }
            self::$admin->image = self::imageUpload($request);
        } 
        
        self::$admin->save();
    }
}
