<?php

namespace App\Http\Controllers;

use App\Models\CH;
use App\Models\Contact;
use App\Models\History;
use App\Models\ImpLink;
use App\Models\Mission;
use Illuminate\Http\Request;
use App\Models\LiberationWar;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }


    public function historyAdd()
    {
        return view('admin.history.add');
    }

    public function historyStore(Request $r)
    {
        return $r;
        History::newHistory($r);
        return back()->with('message','History Added Successfully');
    }

    public function historyEdit()
    {
        
        return view('admin.history.edit',[
            'history' => History::get()->first()
        ]);
    }

   
    public function historyUpdate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        History::upHistory($request);
        return redirect('/dashboard')->with('message','History Updated Successfully');
    }

    public function lwEdit()
    {
        return view('admin.lw.edit',[
            'lw' => LiberationWar::get()->first()
        ]);
    }

   
    public function lwUpdate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        LiberationWar::upLw($request);
        return redirect('/dashboard')->with('message','Liberation War Updated Successfully');
    }

    public function chAdd()
    {
        return view('admin.ch.add');
    }

    public function chStore(Request $r)
    {
        // return $r;
        ImpLink::new($r);
        return back()->with('message','Citizen Charter Added Successfully');
    }

    public function chEdit()
    {
        return view('admin.ch.edit',[
            'ch' => CH::get()->first()
        ]);
    }

   
    public function chUpdate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        CH::upCh($request);
        return redirect('/dashboard')->with('message','Citizen Charter Updated Successfully');
    }

    public function missionEdit()
    {
        return view('admin.mission.edit',[
            'mission' => Mission::get()->first()
        ]);
    }

   
    public function missionUpdate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        Mission::upMission($request);
        return redirect('/dashboard')->with('message','Mission Updated Successfully');
    }


}
