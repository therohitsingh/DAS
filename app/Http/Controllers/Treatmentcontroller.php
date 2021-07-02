<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctorinfos;
use App\Patientinfos;
use App\Treatment;
use Barryvdh\DomPDF\Facade as PDF;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class Treatmentcontroller extends Controller
{
    public function addtreat()
    {
        return view('patient.addtreatment');
    }
    public function streat(Request $req)
    {
        $q = $req->q;
        $user = Doctorinfos::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'chname', 'LIKE', '%' . $q . '%' )->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->orWhere ( 'specialization', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $user ) > 0)
            return view ( 'patient.addtreatment' )->withDetails ( $user )->withQuery ( $q );
        else
            return view ( 'patient.addtreatment' )->withMessage ( 'No Details found. Try to search again !' );
    }
    public function treatment($id)
    {
        $emailID = Auth::user()->email;
        $data1 = Patientinfos::where('email',$emailID)->get();
        $data=Doctorinfos::find($id);
        return view('patient.treatment',compact('data','data1'));
    }
    public function treatmentsubmit(Request $req)
    {
        $this->validate($req,[

            "docmail"=>"required|max:30|min:8|email|",
            "docname"=>"required",
            "docspel"=>"required",
            "docfee"=>"required",
            "patname"=>"required",
            "patmail"=>"required",
            "patblood"=>"required",
            "symp"=>"required",


        ]);


        //echo "hdsagh";
        $data=new Treatment;

        $data->docmail =$req->docmail;
        $data->docname =$req->docname;
        $data->docspel =  $req->docspel;
        $data->docfee =$req->docfee;
        $data->patname =$req->patname;
        $data->patmail =$req->patmail;
        $data->patblood =$req->patblood;

        $data->symp =$req->symp;
        $data->medhist =$req->medhist;
        $data->priscrip =$req->priscrip;
        $data->medic =$req->medic;
        $data->gmeetid =$req->gmeetid;




        $data->save();


        if($data)
        {
            return redirect('/dashboard/addtreatment')->with('message','Great , Treatment Request Sent');
            //flash messag e session

        }

    }
    public function docview()
    {
        $emailID = auth('admin')->user()->email;
        $data = Treatment::where('docmail',$emailID)->orderBy('created_at', 'ASC')->get();
        return view('doctor.treatmentlist',compact('data'));
    }
    public function doctreatment($id)
    {
        $data=Treatment::find($id);
        return view('doctor.treatment', compact('data'));

    }
    public function doctreatmentsubmit(Request $req)
    {
        $this->validate($req,[


            "patname"=>"required",
            "patmail"=>"required",
            "patblood"=>"required",
            "symp"=>"required",
            "medic"=>"required",
            "priscrip"=>"required",


        ]);


        //echo "hdsagh";
        $data=Treatment::find($req->id);


        $data->patname =$req->patname;
        $data->patmail =$req->patmail;
        $data->patblood =$req->patblood;

        $data->symp =$req->symp;
        $data->medhist =$req->medhist;
        $data->priscrip =$req->priscrip;
        $data->medic =$req->medic;
        $data->gmeetid =$req->gmeetid;




        $updated=$data->save();
        if($updated){
            return redirect('/doctor/treatmentlist')->with('message','Thanks For The Treatment Doctor');
        }

    }
    public function view()
    {
        $emailID = Auth::user()->email;
        $data = Treatment::where('patmail',$emailID)->orderBy('created_at', 'ASC')->get();
        return view('patient.medicalhistory',compact('data'));
    }
    public function delete($id)
    {

        //echo $id;
        $data = Treatment::find($id);
        $data->delete();

        $data->delete();
        if ($data) {

            return redirect('/dashboard/treatmentresult')->with('message', 'Treatment Ended Hope We Helped You !');

        }
    }

    public function pdf($id)
    {
        $data=Treatment::find($id);
        $emailID = Auth::user()->email;
        $data1 = Patientinfos::where('email',$emailID)->get();

        $pdf = PDF::loadView('patient.treatmentdownload',compact('data','data1'));
        return $pdf->download('medical_report.pdf');
    }



}
