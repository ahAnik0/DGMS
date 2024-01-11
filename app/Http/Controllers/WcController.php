<?php

namespace App\Http\Controllers;

use App\Models\MedicalCollege;
use App\Models\News;
use App\Models\WcMsg;
use Illuminate\Http\Request;

class WcController extends Controller
{
    public function edit()
    {
        return view('admin.wc.edit',[
            'wc' => WcMsg::get()->first()
        ]);
    }

   
    public function update(Request $request)
    {
        
        WcMsg::updateWc($request);
        return redirect('/dashboard')->with('message','Msg Updated Successfully');
    }

    public function newsEdit()
    {
        return view('admin.news.edit',[
            'news' => News::get()->first()
        ]);
    }

   
    public function newsUpdate(Request $request)
    {
        
        News::updateNews($request);
        return redirect('/dashboard')->with('message','Msg Updated Successfully');
    }




    public function mcIndex()
    {
        // return MedicalCollege::all();
        return view('admin.medical-college.index', [
            'mc' =>MedicalCollege::all()
        ]);
    }
    public function mcEdit($id)
    {
        return view('admin.medical-college.edit',[
            'mc' => MedicalCollege::find($id)
        ]);
    }

   
    public function mcUpdate(Request $request, $id)
    {
        
        MedicalCollege::updateMc($request,$id);
        return redirect('/mc-manage')->with('message','Mediacal College Updated Successfully');
    }
}
