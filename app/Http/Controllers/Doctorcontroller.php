<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctorinfos;
use App\organs;
use App\Patientinfos;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Doctorcontroller extends Controller
{



   public function info()
   {
       return view('doctor.info');
   }
    public function formsubmit(Request $req)
    {
        $this->validate($req,[
            "name"=>"required",
            "email"=>"required|max:30|min:8|email|unique:doctorinfos",
            "mobile"=>"required",
            "specialization"=>"required",
            "age"=>"required",
            "address"=>"required",
            "chname"=>"required",
            "gender"=>"required",
            "fees"=>"required",
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
        $data=new Doctorinfos;

        $data->name =$req->name;
        $data->email =$req->email;
        $data->specialization =$req->specialization;
        $data->mobile =$req->mobile;
        $data->age =$req->age;
        $data->address =$req->address;
        $data->chname =  $req->chname;
        $data->gender =$req->gender;
        $data->fees =$req->fees;
        $data->image = $filename;

        $data->save();

        $emailID = auth('admin')->user()->email;
         DB::table('admins')->where('email', '=',  $emailID)->update(['avatar' => $filename]);

        if($data)
        {
            return redirect('/doctor/info')->with('message','Data successfully Added');
            //flash messag e session

        }

    }
    public function searchpat()
    {
        return view('doctor.searchpat');
    }
    public function spat(Request $req)
    {
        $q = $req->q;
        $user = Patientinfos::where ( 'email', 'LIKE', '%' . $q . '%' )->orWhere ( 'mobile', 'LIKE', '%' . $q . '%' )->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $user ) > 0)
            return view ( 'doctor.searchpat' )->withDetails ( $user )->withQuery ( $q );
        else
            return view ( 'doctor.searchpat' )->withMessage ( 'No Details found. Try to search again !' );
    }

    public function searchdor()
    {
        return view('doctor.searchdor');
    }
    public function sdor(Request $req)
    {
        $q = $req->q;
        $user = organs::where ( 'organ', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $user ) > 0)
            return view ( 'doctor.searchdor' )->withDetails ( $user )->withQuery ( $q );
        else
            return view ( 'doctor.searchdor' )->withMessage ( 'Sorry, No Data Found Try Again !' );
    }
    public function profile()
    {
        $emailID = auth('admin')->user()->email;
        $data = Doctorinfos::where('email',$emailID)->get();
        return view('doctor.profile',compact('data'));
    }

    public function picture()
    {
        $emailID = auth('admin')->user()->email;
        $images = Doctorinfos::where('email',$emailID)->get();
        return view('multiauth::layouts.masterhome',compact('images'));
    }


}
