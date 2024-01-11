<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalCollege extends Model
{
    use HasFactory;

    public static function updateMc($request,$id)
    {
        $mc = MedicalCollege::find($id);
        $mc->name = $request->name;
        $mc->url = $request->url;
       
        $mc->save();
    }
}

