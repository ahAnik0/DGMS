<?php

namespace App\Http\Controllers;

use App\Models\CDSGen;
use App\Models\CH;
use App\Models\ExDG;
use App\Models\CPGen;
use App\Models\CSGen;
use App\Models\DG;
use App\Models\DyDGMS;
use App\Models\FunText;
use App\Models\History;
use App\Models\Martyre;
use Illuminate\Http\Request;
use App\Models\LiberationWar;
use App\Models\Mission;

class AboutController extends Controller
{
    public function history()
    {
        return view('front_end.about.history',[
            
            'history' => History::get()->first()
        ]);
    }
    public function martyres()
    {
        return view('front_end.about.martyres',[
            'martyres' => Martyre::all(),
            'lw'   => LiberationWar::get()->first()
        ]);
    }
    public function function()
    {
        return view('front_end.about.function',[
            'dy_dgs' => DyDGMS::all(),
            'ex_dgs' => ExDG::all(),
            'cs'  => CSGen::all(),
            'cp'  => CPGen::all(),
            'cds' =>CDSGen::all(),
            'msg' => FunText::get()->first(),
            'dg' => DG::get()->first()
        ]);
    }
    public function charter()
    {
        return view('front_end.about.charter',[
            'ch' => CH::get()->first()
        ]);
    }
    public function mission()
    {
        return view('front_end.about.mission',[
            'mission' => Mission::get()->first()
        ]);
    }
}
