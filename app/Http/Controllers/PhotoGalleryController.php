<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    
    public function gallery()
    {
    //    return $photos = Spottlight::paginate();
        return view('front_end.pGallery.index',[
            'photos' => PhotoGallery::paginate(12)
        ]);
    }





    public function index()
    {
        return view('admin.gallery.index', [
            'photos' => PhotoGallery::paginate(5)
        ]);
    }
    public function add()
    {
        return view('admin.gallery.add');
    }

    public function store(Request $r)
    {
        // return $r;
        $r->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        PhotoGallery::new($r);
        return to_route('photo-manage')->with('message','Photo Added Successfully');
    }

    public function edit(string $id)
    {
        // return $id;
        return view('admin.gallery.edit',[
            'photo' => PhotoGallery::find($id)
        ]);
    }

   
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        PhotoGallery::up($request,$id);
        return to_route('photo-manage')->with('message','Photo Updated Successfully');
    }

    public function destroy(string $id)
    {
        PhotoGallery::del($id);

        return to_route('photo-manage')->with('message','Photo Deleted Successfully');
    }
}
