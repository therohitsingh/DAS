<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctorinfos;
use App\Patientinfos;
use App\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Appointmentcontrol extends Controller
{
   public function index($id)
   {
       $emailID = Auth::user()->email;
       $data1 = Patientinfos::where('email',$emailID)->get();
       $data=Doctorinfos::find($id);
       return view('patient.appointment',compact('data','data1'));
   }


    public function formsubmit(Request $req)
    {
        $this->validate($req,[

            "docemail"=>"required|max:30|min:8|email|",
            "docname"=>"required",
            "dochname"=>"required",
            "docadd"=>"required",
            "docspel"=>"required",
            "docfee"=>"required",
            "patname"=>"required",
            "patemail"=>"required",
            "patmob"=>"required",
            "patadd"=>"required",
            "patblood"=>"required",
            "appndate"=>"required",
            "appntime"=>"required",

        ]);


        //echo "hdsagh";
        $data=new Appointment;

        $data->docemail =$req->docemail;
        $data->docname =$req->docname;
        $data->dochname =$req->dochname;
        $data->docadd =$req->docadd;
        $data->docspel =  $req->docspel;
        $data->docfee =$req->docfee;
        $data->patname =$req->patname;
        $data->patemail =$req->patemail;
        $data->patmob =$req->patmob;
        $data->patadd =$req->patadd;
        $data->patblood =$req->patblood;
        $data->appndate =$req->appndate;
        $data->appntime =$req->appntime;


        $data->save();


        if($data)
        {
            return redirect('/dashboard/search')->with('message','Great , Appointment successfully Added');
            //flash messag e session

        }

    }
    public function view()
    {
        $emailID = Auth::user()->email;
        $data = Appointment::where('patemail',$emailID)->orderBy('created_at', 'ASC')->get();
        return view('patient.appnhistory',compact('data'));
    }
    public function delete($id)
    {

        //echo $id;
        $data = Appointment::find($id);
        $data->delete();

        $data->delete();
        if ($data) {

            return redirect('/dashboard/appointmenthistory')->with('message', 'Appointment Successfully Deleted');

        }
    }
    public function docview()
    {
        $emailID = auth('admin')->user()->email;
        $data = Appointment::where('docemail',$emailID)->orderBy('created_at', 'ASC')->get();
        return view('doctor.appointmenthist',compact('data'));
    }
    public function updatetime($id)
    {
        $data=Appointment::find($id);
        return view('doctor.updateappn', compact('data'));

    }
    public function updatetimedetials(Request $req)
    {
        $this->validate($req,[

            "appndate"=>"required",
            "appntime"=>"required",
        ]);
        $data = Appointment::find($req->id);
        $data->appndate =$req->appndate;

        $data->appntime = $req->appntime;

        $updated=$data->save();
        if($updated){
            return redirect('/doctor/appointmenthistory')->with('message','Appointment Successfully Updated!');
        }
    }
    public function docdelete($id)
    {

        //echo $id;
        $data = Appointment::find($id);
        $data->delete();

        $data->delete();
        if ($data) {

            return redirect('/doctor/appointmenthistory')->with('message', 'Appointment Successfully Deleted');

        }
    }

    public function totalpayment()
    {
        $emailID = auth('admin')->user()->email;
        $data = Appointment::where('docemail',$emailID)->sum('docfee') ;
        $data1 = Treatment::where('docmail',$emailID)->sum('docfee');

        return view('doctor.totalpayment',compact('data','data1'));
    }
    public function payment()
    {
        $emailID = Auth::user()->email;
        $data = Appointment::where('patemail',$emailID)->sum('docfee');
        $data1 = Treatment::where('patmail',$emailID)->sum('docfee');

        return view('patient.payment',compact('data','data1'));

    }


}
