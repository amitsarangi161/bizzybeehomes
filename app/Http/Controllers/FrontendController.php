<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactus;
use App\Models\query;
use App\Models\subscriber;
use App\Models\termsandcondition;
use Session;

class FrontendController extends Controller
{
    public function index(){
        $contactus=contactus::where('id','>',0)->first();
        return view('frontend.index',compact('contactus'));
    }
      public function sendquery(Request $request){
        $query=new query();
        $query->name=$request->name;
        $query->subject=$request->subject;
        $query->phone=$request->phone;
        $query->email=$request->email;
        $query->msg=$request->msg;
        $query->save();
        Session::flash('message', 'Your Message Has been sent Successfully'); 
        return back();
    }
    public function ajaxchangepoststatus(Request $request)
    {
        $query=query::find($request->id);
        $query->is_completed=$request->status;
        $query->save();

        return response()->json($query);
    }
    public function subscribe(Request $request){
        $subscriber=new subscriber();
        $subscriber->email=$request->email;
        $subscriber->save();
        Session::flash('submessage', 'Your Message Has been sent Successfully'); 
        return back();

    }
    public function termsandconditions(){
        $termsandcondition=termsandcondition::first();
        $contactus=contactus::first();
        return view('frontend.termsandconditions',compact('termsandcondition','contactus'));
    }

}
