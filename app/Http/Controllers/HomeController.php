<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\contactus;
use App\Models\query;
use App\Models\subscriber;
use App\Models\termsandcondition;
use App\Models\aboutus;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.home');     
    }
    public function contactus(){
        $contactus=contactus::where('id','>',0)->first();
        return view('backend.contactus',compact('contactus'));
    }
    public function updatecontact(Request $request)
    {
       $contact=contactus::first();
       if($contact){
          $contactus=contactus::find($contact->id);
       }
       else{
        $contactus=new contactus();
       }
       
       $contactus->companyname=$request->companyname;
       $contactus->gstno=$request->gstno;
       $contactus->panno=$request->panno;
       $contactus->regno=$request->regno;
       $contactus->tagline=$request->tagline;
       $contactus->projectdone=$request->projectdone;
       $contactus->noofclients=$request->noofclients;
       $contactus->noofawards=$request->noofawards;
       $contactus->email=$request->email;
       $contactus->supportmobile=$request->supportmobile;
       $contactus->mobile=$request->mobile;
       $contactus->mondaytofridaytiming=$request->mondaytofridaytiming;
       $contactus->saturdaytiming=$request->saturdaytiming;
       $contactus->sundaytiming=$request->sundaytiming;
       $contactus->fblink=$request->fblink;
       $contactus->twitterlink=$request->twitterlink;
       $contactus->instalink=$request->instalink;
       $contactus->address=$request->address;
       $rarefile = $request->file('companylogo');    
        if($rarefile!=''){
        $raupload = public_path() .'/logo/';
        $rarefilename=time().'.'.$rarefile->getClientOriginalName();
        $success=$rarefile->move($raupload,$rarefilename);
        $contactus->logo = $rarefilename;
        }
       $contactus->save();

       return back();
    }
    public function allquery(){

         $queries=query::all();
         return view('backend.queries',compact('queries'));
    } 
    public function allsubscribers(){

         $subscribers=subscriber::all();
         return view('backend.subscribers',compact('subscribers'));
    }
    public function termsandconditions(){
         $termsandcondition=termsandcondition::first();
       

       return view('backend.termsandconditions',compact('termsandcondition'));

    }
    public function updatetermsandconditions(Request $request)
    {
        $termsandcondition=termsandcondition::first();
        if($termsandcondition){
          $termsandcondition=termsandcondition::find($termsandcondition->id);
       }
       else{
        $termsandcondition=new termsandcondition();
       }
       
       $termsandcondition->termsandconditions=$request->termsandconditions;
       $termsandcondition->save();
       return back();
    }

    public function aboutus(){
       $aboutus=aboutus::first();
       

       return view('backend.aboutus',compact('aboutus'));
    }

  
}
