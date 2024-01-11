<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DG extends Model
{
    use HasFactory;
    private static $dg,$image,$imageName,$directory,$imageUrl;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand(1,999).'_'.self::$image->getClientOriginalName();
        self::$directory = 'public/front_end/assets/images/dg/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newDG($request)
    {
        self::$dg = new DG();
        self::$dg->name = $request->name;
        self::$dg->rank = $request->rank;
        self::$dg->join_date = $request->join_date;
        self::$dg->dg_id = $request->dg_id;
        self::$dg->image = self::imageUpload($request);
        self::$dg->message = $request->message;
        self::$dg->save();
    }

    public static function updateDG($request)
    {
        self::$dg = DG::get()->first();
        self::$dg->name = $request->name;
        self::$dg->rank = $request->rank;
        self::$dg->dg_id = $request->dg_id;
        self::$dg->join_date = $request->join_date;
        
        if ($request->file('image')){
            if (file_exists(self::$dg->image)){
                unlink(self::$dg->image);
            }
            self::$dg->image = self::imageUpload($request);
        } 
        
        self::$dg->message = $request->message;
        self::$dg->save();
    }
}
