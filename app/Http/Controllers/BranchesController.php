<?php

namespace App\Http\Controllers;

use App\Models\AdminBran;
use App\Models\HealthBran;
use App\Models\MedicalBran;
use App\Models\TrainingBran;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    // Front end
    public function admin()
    {
        return view('front_end.branches.admin_branch',[
            'admin' => AdminBran::get()->first()
        ]);
    }

    public function training()
    {
        return view('front_end.branches.training_branch',[
            'train' => TrainingBran::get()->first()
        ]);
    }

    public function health()
    {
        return view('front_end.branches.health_branch',[
            'health' => HealthBran::get()->first()
        ]);
    }
    public function medical()
    {
        return view('front_end.branches.medical_branch',[
            'medical' => MedicalBran::get()->first()
        ]);
    }


    // Admin Panel 

    public function adminEdit()
    {
        return view('admin.branches.admin-edit', [
            'admin' => AdminBran::get()->first()
        ]);
    }


    public function adminUpdate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        AdminBran::up($request);
        return redirect('/dashboard')->with('message', 'Administrative Branch Updated Successfully');
    }

    public function trainingEdit()
    {
        return view('admin.branches.training-edit',[
            'train' => TrainingBran::get()->first()
        ]);
    }

   
    public function trainingUpdate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        TrainingBran::up($request);
        return redirect('/dashboard')->with('message','Health Branch Updated Successfully');
    }

    public function healthEdit()
    {
        return view('admin.branches.health-edit',[
            'health' => HealthBran::get()->first()
        ]);
    }

   
    public function healthUpdate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        HealthBran::up($request);
        return redirect('/dashboard')->with('message','Medical Branch Updated Successfully');
    }

    public function medicalEdit()
    {
        return view('admin.branches.medical-edit',[
            'medical' => MedicalBran::get()->first()
        ]);
    }

   
    public function medicalUpdate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
        ]); 
        MedicalBran::up($request);
        return redirect('/dashboard')->with('message','Health Branch Updated Successfully');
    }
}
