<?php

namespace App\Http\Controllers;

use App\contact;
use App\Doctorinfos;
use App\Join;
use App\Patientinfos;
use Illuminate\Http\Request;

class SuperadminPower extends Controller
{
    public function viewpatient()
    {
        $data = Patientinfos::all();
        $count = Patientinfos::all()->count();
        return view('super.patientinfos',compact('data','count'));
    }
    public function viewdoctor()
    {
        $data = Doctorinfos::all();
        $count = Doctorinfos::all()->count();
        return view('super.doctorinfos',compact('data','count'));
    }
    public function contact()
    {
        $data = contact::all();
        $count = contact::all()->count();
        return view('super.contact',compact('data','count'));

    }
    public function joining()
    {
        $data = Join::all();
        $count = Join::all()->count();
        return view('super.joining',compact('data','count'));
    }
}
