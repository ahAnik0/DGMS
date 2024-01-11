<?php

namespace App\Http\Controllers;

use App\Models\Affdl;
use App\Models\Afip;
use App\Models\Afmi;
use App\Models\Afmsd;
use App\Models\CMHs;
use App\Models\Ambulance;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
  public function afip()
  {
    return view('front_end.institution.afip', [
      'afip' => Afip::get()->first()
    ]);
  }
  public function afmi()
  {
    return view('front_end.institution.afmi', [
      'afmi' => Afmi::get()->first()

    ]);
  }

  public function afmsd()
  {
    return view('front_end.institution.afmsd', [
      'afmsd' => Afmsd::get()->first()
    ]);
  }
  public function affdl()
  {
    return view('front_end.institution.affdl', [
      'affdl' => Affdl::get()->first()
    ]);
  }
  public function cmhs()
  {
    return view('front_end.institution.cmhs', [
      'cmhs' => Cmhs::get()->first()
    ]);
  }
  public function ambulance()
  {
    return view('front_end.institution.ambulance', [
      'ambulance' => Ambulance::get()->first()
    ]);
  }



  // Admin Panel 

  public function afipEdit()
  {
    return view('admin.institution.afip-edit', [
      'afip' => Afip::get()->first()
    ]);
  }

  public function afipUpdate(Request $request)
  {
    $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
    ]);
    Afip::up($request);
    return to_route('dashboard')->with('message', 'AFIP Updated Successfully');
  }

  public function afmiEdit()
  {
    return view('admin.institution.afmi-edit', [
      'afmi' => Afmi::get()->first()
    ]);
  }

  public function afmiUpdate(Request $request)
  {
    $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
    ]);
    Afmi::up($request);
    return to_route('dashboard')->with('message', 'AFMI Updated Successfully');
  }

  public function afmsdEdit()
  {
    return view('admin.institution.afmsd-edit', [
      'afmsd' => Afmsd::get()->first()
    ]);
  }

  public function afmsdUpdate(Request $request)
  {
    $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
    ]);
    Afmsd::up($request);
    return to_route('dashboard')->with('message', 'AFMSD Updated Successfully');
  }

  public function cmhsEdit()
  {
    return view('admin.institution.cmhs-edit', [
      'cmhs' => Cmhs::get()->first()
    ]);
  }

  public function cmhsUpdate(Request $request)
  {
    $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
    ]);
    Cmhs::up($request);
    return to_route('dashboard')->with('message', 'CMHs Updated Successfully');
  }

  public function affdlEdit()
  {
    return view('admin.institution.affdl-edit', [
      'affdl' => Affdl::get()->first()
    ]);
  }

  public function affdlUpdate(Request $request)
  {
    $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
    ]);
    Affdl::up($request);
    return to_route('dashboard')->with('message', 'AFFDL Updated Successfully');
  }

  public function ambulanceEdit()
  {
    return view('admin.institution.ambulance-edit', [
      'ambulance' => Ambulance::get()->first()
    ]);
  }

  public function ambulanceUpdate(Request $request)
  {
    $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg', // Adjust mime types and max size as needed
    ]);
    Ambulance::up($request);
    return to_route('dashboard')->with('message', 'Field Ambulance Updated Successfully');
  }
}
