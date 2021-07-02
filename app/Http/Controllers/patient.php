<?php

namespace App\Http\Controllers;

use App\Doctorinfos;
use App\Patientinfos;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\organs;
use Illuminate\Support\Facades\Input;




class patient extends Controller
{
    public function index()
    {
        return view('patient.info');
    }

    public function formsubmit(Request $req)
    {
        $this->validate($req,[

            "email"=>"required|max:30|min:8|email|unique:patientinfos",
            "mobile"=>"required",
            "age"=>"required",
            "address"=>"required",
            "blood"=>"required",
            "gender"=>"required",
            "image"=>"required",

        ]);
        $file = $req->file('image');
        // dd($file);
        // exit;
        $filename = 'image'. time().'.'.$req->image->extension();
        // dd($filename);
        // exit;

        $file->move("upload/",$filename);
        //dd(

        //echo "hdsagh";
        $data=new Patientinfos;

        $data->email =$req->email;
        $data->mobile =$req->mobile;
        $data->age =$req->age;
        $data->address =$req->address;
        $data->blood =  $req->blood;
        $data->gender =$req->gender;
        $data->image = $filename;

        $data->save();

        $emailID = Auth::user()->email;
        $data1 = User::where('email', '=',  $emailID)->first();
        $data1->avatar= $filename;
        $data1->save();


        if($data)
        {
            return redirect('/dashboard/info')->with('message','Data successfully Added');
            //flash messag e session

        }

    }
    public function view()
    {
        $emailID = Auth::user()->email;
        $data = Patientinfos::where('email',$emailID)->get();
        return view('patient.view',compact('data'));
    }

    public function donor()
    {
        $emailID = Auth::user()->email;
        $data = Patientinfos::where('email',$emailID)->get();
        return view('patient.donor',compact('data'));
    }
    public function submitorgan(Request $req)
    {
        $this->validate($req,[

            "name"=>"required",
            "email"=>"required|max:30|min:8|email|",
            "mobile"=>"required",
            "age"=>"required",
            "address"=>"required",
            "blood"=>"required",
            "gender"=>"required",
            "organ"=>"required",

        ]);

        //echo "hdsagh";
        $data=new organs;

        $data->name =$req->name;
        $data->email =$req->email;
        $data->mobile =$req->mobile;
        $data->age =$req->age;
        $data->address =$req->address;
        $data->blood =  $req->blood;
        $data->gender =$req->gender;
        $data->organ = $req->organ;

        $data->save();


        if($data)
        {
            return redirect('/dashboard/donor')->with('message','Thanks for Donating , Data successfully Added');
            //flash messag e session

        }

    }
    public function searchdoc()
    {
        return view('search.sdoc');
    }
    public function sdoc(Request $req)
    {
        $q = $req->q;
        $user = Doctorinfos::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'chname', 'LIKE', '%' . $q . '%' )->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->orWhere ( 'specialization', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $user ) > 0)
            return view ( 'search.sdoc' )->withDetails ( $user )->withQuery ( $q );
        else
            return view ( 'search.sdoc' )->withMessage ( 'No Details found. Try to search again !' );
    }
    public function searchdor()
    {
        return view('search.sdor');
    }
    public function sdor(Request $req)
    {
        $q = $req->q;
        $user = organs::where ( 'organ', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $user ) > 0)
            return view ( 'search.sdor' )->withDetails ( $user )->withQuery ( $q );
        else
            return view ( 'search.sdor' )->withMessage ( 'No Details found. Try to search again !' );
    }

    public function profile()
    {
        $emailID = Auth::user()->email;
        $data = Patientinfos::where('email',$emailID)->get();
        return view('patient.profile',compact('data'));


    }
    public function check()
    {
        $emailID = Auth::user()->email;
        $data = Patientinfos::where('email',$emailID)->get();
        return view('patient.info',compact('data'));


    }





}


