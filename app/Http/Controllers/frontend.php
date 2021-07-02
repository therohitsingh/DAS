<?php

namespace App\Http\Controllers;

use App\contact;
use App\Join;
use Illuminate\Http\Request;

class frontend extends Controller
{
   public function index()
   {
       return view('frontend.index');
   }




   public function contact()
   {
       return view('frontend.contact');
   }
   public function submit(Request $req)
   {
       $this->validate($req,[


           "fullname"=>"required",
           "subject"=>"required",
           "email"=>"required",
           "message"=>"required",

       ]);
       $data=new contact;


       $data->fullname =$req->fullname;
       $data->email =$req->email;
       $data->subject =$req->subject;
       $data->message =$req->message;


       $data->save();
       if($data)
       {
           return redirect('/contact')->with('message','Thanks For Contacting Us We will be back to you soon with Your Solution !');
           //flash messag e session

       }

   }
   public function join()
   {
       return view('frontend.joinus');
   }
   public function joinsubmit(Request $req)
   {
       $this->validate($req,[


           "name"=>"required",
           "email"=>"required|max:30|min:8|email|unique",
           "special"=>"required",
           "chname"=>"required",

       ]);
       $data = new Join;

       $data->name = $req->name;
       $data->email = $req->email;
       $data->special = $req->special;
       $data->chname = $req->chname;

       $data->save();
       if($data)
       {
           return redirect('/join')->with('message','We will Verify Details And Revert You Back Soon !');
           //flash messag e session

       }
   }
}
