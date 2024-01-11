<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\DG;
use App\Models\MainSlider;
use App\Models\MedicalCollege;
use App\Models\News;
use App\Models\PeaceKeeping;
use App\Models\Spottlight;
use App\Models\WcMsg;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('front_end.home.home',[
            'sliders' => MainSlider::all(),
            'dg' => DG::first(),
            'wc' => WcMsg::first(),
            'news' => News::first(),
            'mc' => MedicalCollege::all(),
            'sp' => Spottlight::all(),
        ]);
    }
    public function peaceKeeping()
    {
        return view('front_end.peace-keeping.peace-keeping',[
            'pk' => PeaceKeeping::get()->first(),
        ]);
    }

    public function notice()
    {
        return view('front_end.notice.notice');
    }

   


    public function msg()
    {
        return view('front_end.home.msg',[
            'dg' => DG::first()
        ]);
    }

    public function tender()
    {
        return view('front_end.home.tender-show');
    }
    public function tender1()
    {
        return view('front_end.home.tender-show1');
    }
    public function tender2()
    {
        return view('front_end.home.tender-show2');
    }
}
