<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Patientinfos;
use Illuminate\Http\Request;
use App\User;
class Dashboard extends Controller
{
    public function index()
    {
        $emailID = Auth::user()->email;
        $data = Patientinfos::where('email',$emailID)->get();
        return view('dashboard.index',compact('data'));
    }

}
