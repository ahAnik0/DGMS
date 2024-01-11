<?php

namespace App\Http\Controllers;

use App\Models\ExDG;
use App\Models\CPGen;
use App\Models\CSGen;
use App\Models\CDSGen;
use App\Models\DyDGMS;
use App\Models\FunText;
use Illuminate\Http\Request;

class AdminFunController extends Controller
{
    public function index()
    {
        return view('admin.about-fun.index',[
            'fun_msg' =>FunText::get()->first(),
            'ex_dg' =>ExDG::latest()->first(),
            'cs_gen' =>CSGen::latest()->first(),
            'cp_gen' =>CPGen::latest()->first(),
            'cds_gen' =>CDSGen::latest()->first(),
            'dy_dg' =>DyDGMS::orderBy('id','desc')->first()
        ]);
    }

    public function msgEdit()
    {
        return view('admin.about-fun.msg-edit',[
            'fun_msg' =>FunText::get()->first(),
        ]);
    }

    public function msgUpdate(Request $r)
    {
        $fun = FunText::get()->first();
        $fun->msg = $r->msg;
        $fun->save();

        return redirect('/fun-manage');
    }

    // Ex DGMSs

    public function exDGadd()
    {
        return view('admin.about-fun.ex-dg-add');
    }

    public function exDGstore(Request $r)
    {
        ExDG::newExDg($r);

       return redirect('/fun-manage')->with('message','Ex DGMSs Added');
    }

    public function exDGedit($id)
    {
        // return ExDG::find($id);
        return view('admin.about-fun.ex-dg-edit',[
            'dg' => ExDG::find($id)
        ]);
    }

    public function exDGupdate(Request $request,$id)
    {
        ExDG::upExDg($request,$id);

       return redirect('/fun-manage')->with('message','Ex DGMSs Updated');
    }

    // Consultant Surgeon General

    public function csGENadd()
    {
        return view('admin.about-fun.cs-gen-add');
    }

    public function csGENstore(Request $r)
    {
        CSGen::newCSG($r);

       return redirect('/fun-manage')->with('message','Consultant Surgeon General Added');
    }

    public function csGENedit($id)
    {
        // return ExDG::find($id);
        return view('admin.about-fun.cs-gen-edit',[
            'csg' => CSGen::find($id)
        ]);
    }

    public function csGENupdate(Request $request,$id)
    {
        CSGen::upCSG($request,$id);

       return redirect('/fun-manage')->with('message','Consultant Surgeon General Updated');
    }


    // Consultant Physician General

    public function cpGENadd()
    {
        return view('admin.about-fun.cp-gen-add');
    }

    public function cpGENstore(Request $r)
    {
        CPGen::newCPG($r);

       return redirect('/fun-manage')->with('message','Consultant Physician General Added');
    }

    public function cpGENedit($id)
    {
        // return ExDG::find($id);
        return view('admin.about-fun.cp-gen-edit',[
            'cpg' => CPGen::find($id)
        ]);
    }

    public function cpGENupdate(Request $request,$id)
    {
        CpGen::upCPG($request,$id);

       return redirect('/fun-manage')->with('message','Consultant Physician General Updated');
    }

    // Consultant Dental Surgeon General

    public function cdsGENadd()
    {
        return view('admin.about-fun.cds-gen-add');
    }

    public function cdsGENstore(Request $r)
    {
        // return $r;
        CDSGen::newCDS($r);

       return redirect('/fun-manage')->with('message','Consultant Dental Surgeon General Added');
    }

    public function cdsGENedit($id)
    {
        // return ExDG::find($id);
        return view('admin.about-fun.cds-gen-edit',[
            'cdsg' => CDSGen::find($id)
        ]);
    }

    public function cdsGENupdate(Request $request,$id)
    {
        CDSGen::upCDS($request,$id);

       return redirect('/fun-manage')->with('message','Consultant Dental Surgeon General Updated');
    }


     // Dy DGMS

     public function dyDGadd()
     {
         return view('admin.about-fun.dy-dg-add');
     }
 
     public function dyDGstore(Request $r)
     {
        DyDGMS::newDyDG($r);
 
        return redirect('/fun-manage')->with('message','Dy DGMS Added');
     }
 
     public function dyDGedit($id)
     {
         // return ExDG::find($id);
         return view('admin.about-fun.dy-dg-edit',[
             'dy_dg' => DyDGMS::find($id)
         ]);
     }
 
     public function dyDGupdate(Request $request,$id)
     {
         DyDGMS::upDyDG($request,$id);
 
        return redirect('/fun-manage')->with('message','Dy DGMS Updated');
     }

    
}
