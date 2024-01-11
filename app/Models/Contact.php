<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    private static $con,$image,$imageName,$directory,$imageUrl;

    
    public static function new($request)
    {
        self::$con = new Contact();
        self::$con->address = $request->address;
        self::$con->number = $request->number;
        self::$con->email = $request->email;
        self::$con->save();
    }

    public static function up($request)
    {
        self::$con = Contact::get()->first();
        self::$con->address = $request->address;
        self::$con->number = $request->number;
        self::$con->email = $request->email;

        self::$con->save();
    }
}
