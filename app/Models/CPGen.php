<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPGen extends Model
{
    use HasFactory;

    protected $table = 'cp_gens';
    protected $guarded  = [];

    private static $cpg;

    public static function newCPG($request)
    {
        self::$cpg = new CPGen();
        self::$cpg->ba_no = $request->ba_no;
        self::$cpg->rank = $request->rank;
        self::$cpg->name = $request->name;
        self::$cpg->from = $request->from;
        self::$cpg->to = $request->to;
        self::$cpg->save();
    }

    public static function upCPG($request,$id)
    {
        self::$cpg = CPGen::find($id);
        self::$cpg->ba_no = $request->ba_no;
        self::$cpg->rank = $request->rank;
        self::$cpg->name = $request->name;
        self::$cpg->from = $request->from;
        self::$cpg->to = $request->to;
        self::$cpg->save();
    }
}
