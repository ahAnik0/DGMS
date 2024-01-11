<?php

namespace App\Http\Controllers;

use App\Models\Spottlight;
use Illuminate\Http\Request;

class SpottlightController extends Controller
{
    public function index()
    {
        return view('admin.spottlight.index', [
            'imgs' => Spottlight::all()
        ]);
    }
    public function add()
    {
        return view('admin.spottlight.add');
    }

    public function store(Request $r)
    {
        // return $r;
        $r->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        Spottlight::newSpottlight($r);
        return redirect('/spottlight')->with('message','Image Added Successfully');
    }

    public function edit(string $id)
    {
        // return $id;
        return view('admin.spottlight.edit',[
            'img' => Spottlight::find($id)
        ]);
    }

   
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        Spottlight::updateSpottlight($request,$id);
        return redirect('/spottlight')->with('message','Spottlight Updated Successfully');
    }

    public function destroy(string $id)
    {
        Spottlight::deleteSp($id);

        return redirect('/spottlight')->with('message','Spottlight Deleted Successfully');
    }
}
