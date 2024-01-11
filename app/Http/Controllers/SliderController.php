<?php

namespace App\Http\Controllers;

use App\Models\MainSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{

    public function mainSlider()
    {
        return view('admin.main-slide.index', [
            'imgs' => MainSlider::all()
        ]);
    }
    public function addSlider()
    {
        return view('admin.main-slide.add');
    }

    // public function sliderCreate(Request $request)
    // {
    //     // return $request;
    //     MainSlider::saveSlide($request);
    //     return back()->with('message', 'Slide Created Successfully');
    // }

    public function sliderStore(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('front_end/assets/images/main-slider'), $imageName);

        $image = MainSlider::create([
            'image' => 'front_end/assets/images/main-slider/' .  $imageName,


        ]);

        return  back()
            ->with('message', 'Image uploaded successfully.');
    }

    public function editSlider(string $id)
    {
        return view('admin.main-slide.edit', [
            'img' => MainSlider::find($id)
        ]);
    }

    public function updateSlider(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $oldImage = MainSlider::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $destinationPath = public_path('front_end/assets/images/main-slider');
            $request->image->move($destinationPath, $imageName);

            $oldImagePath = public_path($oldImage->image);
            if (File::exists($oldImagePath)) {
                if (File::delete($oldImagePath)) {
                    $oldImage->update([
                        'image' => 'front_end/assets/images/main-slider/' . $imageName
                    ]);
                }
            }
        }

        return redirect('/main-slider')->with('message', 'Image updated successfully.');
    }
}
