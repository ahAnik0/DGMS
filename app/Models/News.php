<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $guarded  = [];

    public static function updateNews($request)
    {
        $wc = News::get()->first();
        $wc->news = $request->news;
        $wc->save();
    }
}
