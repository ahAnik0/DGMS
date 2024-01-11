<?php

namespace App\Http\Controllers;

use App\Models\DG;
use Illuminate\Http\Request;

class DgController extends Controller
{
    public function index()
    {
        return view('admin.dg.index', [
            'dgs' =>DG::all()
        ]);
    }

    public function add()
    {
        return view('admin.dg.add');
    }

    public function store(Request $r)
    {
        
        DG::newDG($r);
        return back()->with('message','DG Added Successfully');
    }

    public function edit()
    {
        return view('admin.dg.edit',[
            'dg' => DG::get()->first()
        ]);
    }

   
    public function update(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        DG::updateDG($request);
        return to_route('dashboard')->with('message','DG Updated Successfully');
    }


}
