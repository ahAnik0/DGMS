<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CDSGen extends Model
{
    use HasFactory;

    protected $table = 'cds_gens';
    protected $guarded  = [];

    private static $cdsg;

    public static function newCDS($request)
    {
        self::$cdsg = new CDSGen();
        self::$cdsg->ba_no = $request->ba_no;
        self::$cdsg->rank = $request->rank;
        self::$cdsg->name = $request->name;
        self::$cdsg->from = $request->from;
        self::$cdsg->to = $request->to;
        self::$cdsg->save();
    }

    public static function upCDS($request,$id)
    {
        self::$cdsg = CDSGen::find($id);
        self::$cdsg->ba_no = $request->ba_no;
        self::$cdsg->rank = $request->rank;
        self::$cdsg->name = $request->name;
        self::$cdsg->from = $request->from;
        self::$cdsg->to = $request->to;
        self::$cdsg->save();
    }
}
