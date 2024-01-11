<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExDG extends Model
{
    use HasFactory;

    protected $table = 'ex_dgs';
    protected $guarded  = [];
    private static $dg;

    public static function newExDg($request)
    {
        self::$dg = new ExDG();
        self::$dg->ba_no = $request->ba_no;
        self::$dg->rank = $request->rank;
        self::$dg->name = $request->name;
        self::$dg->from = $request->from;
        self::$dg->to = $request->to;
        self::$dg->save();
    }

    public static function upExDg($request,$id)
    {
        self::$dg = ExDG::find($id);
        self::$dg->ba_no = $request->ba_no;
        self::$dg->rank = $request->rank;
        self::$dg->name = $request->name;
        self::$dg->from = $request->from;
        self::$dg->to = $request->to;
        self::$dg->save();
    }
}
