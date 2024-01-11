<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DyDGMS extends Model
{
    use HasFactory;
    protected $table = 'dy_dgms';
    protected $guarded  = [];

    private static $dy_dg;

    public static function newDyDG($request)
    {
        self::$dy_dg = new DyDGMS();
        self::$dy_dg->ba_no = $request->ba_no;
        self::$dy_dg->rank = $request->rank;
        self::$dy_dg->name = $request->name;
        self::$dy_dg->from = $request->from;
        self::$dy_dg->to = $request->to;
        self::$dy_dg->save();
    }

    public static function upDyDG($request,$id)
    {
        self::$dy_dg = DyDGMS::find($id);
        self::$dy_dg->ba_no = $request->ba_no;
        self::$dy_dg->rank = $request->rank;
        self::$dy_dg->name = $request->name;
        self::$dy_dg->from = $request->from;
        self::$dy_dg->to = $request->to;
        self::$dy_dg->save();
    }
   
}

