<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ImpLink;
use App\Models\PeaceKeeping;
use Illuminate\Http\Request;

class OthersController extends Controller
{
    public function pkEdit()
    {
        return view('admin.peace-keeping.edit',[
            'pk' => PeaceKeeping::get()->first()
        ]);
    }

   
    public function pkUpdate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        PeaceKeeping::up($request);
        return redirect('/dashboard')->with('message','Peace Keeping Updated Successfully');
    }

    public function contactEdit()
    {
        return view('admin.contact.edit',[
            'con' => Contact::get()->first()
        ]);
    }

   
    public function contactUpdate(Request $request)
    {
        
        Contact::up($request);
        return redirect('/dashboard')->with('message','Contact Updated Successfully');
    }

    public function linkIndex()
    {
        return view('admin.impLink.index',[
            'links' => ImpLink::all()
        ]);
    }

    public function linkEdit($id)
    {
        return view('admin.impLink.edit',[
            'link' => ImpLink::find($id)
        ]);
    }

   
    public function linkUpdate(Request $request,$id)
    {
        // return $request;
        ImpLink::up($request,$id);
        return to_route('imp-link-manage')->with('message','Important Link Updated Successfully');
    }
}
