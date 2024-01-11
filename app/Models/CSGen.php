<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CSGen extends Model
{
    use HasFactory;

    protected $table = 'cs_gens';
    protected $guarded  = [];

    private static $csg;

    public static function newCSG($request)
    {
        self::$csg = new CSGen();
        self::$csg->ba_no = $request->ba_no;
        self::$csg->rank = $request->rank;
        self::$csg->name = $request->name;
        self::$csg->from = $request->from;
        self::$csg->to = $request->to;
        self::$csg->save();
    }

    public static function upCSG($request,$id)
    {
        self::$csg = CSGen::find($id);
        self::$csg->ba_no = $request->ba_no;
        self::$csg->rank = $request->rank;
        self::$csg->name = $request->name;
        self::$csg->from = $request->from;
        self::$csg->to = $request->to;
        self::$csg->save();
    }
}
