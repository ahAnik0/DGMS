<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WcMsg extends Model
{
    use HasFactory;

    protected $table = 'wc_msg';
    protected $guarded  = [];

    public static function updateWc($request)
    {
        $wc = WcMsg::get()->first();
        $wc->msg = $request->msg;
        $wc->save();
    }
}
