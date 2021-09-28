@extends('layouts.app')

@section('content')
@if(Session::has('msg'))
   <p class="alert alert-success text-center">{{ Session::get('msg') }}</p>
 @endif
<table class="table">
	 <tr class="bg-navy">
	 	<td class="text-center">CONTACT SETUP</td>
	 </tr>
</table>


<div class="well" >
<form action="/updatecontact" method="post" enctype="multipart/form-data">
	{{csrf_field()}}

	<table class="table">
    <tr>
     <td><strong>COMPANY NAME<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="companyname" placeholder="Enter Company Name" class="form-control" value="{{($contactus)?$contactus->companyname:''}}" required></td>
   </tr>
    <tr>
     <td><strong>COMPANY TAG LINE<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="tagline" placeholder="Enter Tag Line" class="form-control" value="{{($contactus)?$contactus->tagline:''}}" required></td>
   </tr>

   <tr>
     <td><strong>GST NO<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="gstno" placeholder="Enter GST No" class="form-control" value="{{($contactus)?$contactus->gstno:''}}" required></td>
   </tr>
   <tr>
     <td><strong>PAN NO<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="panno" placeholder="Enter PAN No" class="form-control" value="{{($contactus)?$contactus->panno:''}}" required></td>
   </tr>
   <tr>
     <td><strong>REG NO<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="regno" placeholder="Enter REG No" class="form-control" value="{{($contactus)?$contactus->regno:''}}" required></td>
   </tr>
   <tr>
     <td><strong>NO OF PROJECTS<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="projectdone" placeholder="Enter No of PROJECTS" class="form-control" value="{{($contactus)?$contactus->projectdone:''}}" required></td>
   </tr>
   <tr>
     <td><strong>NO OF CLIENTS<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="noofclients" placeholder="Enter No of CLIENTS" class="form-control" value="{{($contactus)?$contactus->noofclients:''}}" required></td>
   </tr>
   <tr>
     <td><strong>NO OF AWARDS<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="noofawards" placeholder="Enter  No of AWARDS" class="form-control" value="{{($contactus)?$contactus->noofawards:''}}" required></td>
   </tr>
	 <tr>
	 	 <td><strong>CONTACT EMAIL<span style="color: red"> *</span></strong></td>
	 	 <td><input type="text" autocomplete="off" name="email" placeholder="Enter Multiple Email Separeted by Comma" class="form-control" value="{{($contactus)?$contactus->email:''}}" required></td>
	 
	 	
	 </tr>
    <tr>
     <td><strong>SUPPORT CONTACT NO<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="supportmobile" placeholder="Enter Support Number" class="form-control" value="{{($contactus)?$contactus->supportmobile:''}}" required></td>
   </tr>
   <tr>
     <td><strong>CONTACT NO<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="mobile" placeholder="Enter Contact Number Separeted By Comma" class="form-control" value="{{($contactus)?$contactus->mobile:''}}" required></td>
   </tr>
   <tr>
     <td><strong>MONDAY TO FRIDAY TIMING<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="mondaytofridaytiming" placeholder="Ex:-10am to 6pm" class="form-control" value="{{($contactus)?$contactus->mondaytofridaytiming:''}}" required></td>
   </tr>
   <tr>
     <td><strong>SATURDAY TIMING<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="saturdaytiming" placeholder="Ex:-10am to 3pm" class="form-control" value="{{($contactus)?$contactus->saturdaytiming:''}}" required></td>
   </tr>
   <tr>
     <td><strong>SUNDAY TIMING<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="sundaytiming" placeholder="Ex:Closed" class="form-control" value="{{($contactus)?$contactus->sundaytiming:''}}" required></td>
   </tr>
  
   <tr>
     <td><strong>FB LINK<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="fblink" placeholder="Enter FB Link" class="form-control" value="{{($contactus)?$contactus->fblink:''}}" required></td>
   </tr> 
    <tr>
     <td><strong>TWITTER LINK<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="twitterlink" placeholder="Enter TWITTER Link" class="form-control" value="{{($contactus)?$contactus->twitterlink:''}}" required></td>
   </tr>
   <tr>
     <td><strong>INSTAGRAM LINK<span style="color: red"> *</span></strong></td>
     <td><input type="text" autocomplete="off" name="instalink" placeholder="Enter TWITTER Link" class="form-control" value="{{($contactus)?$contactus->instalink:''}}" required></td>
   </tr>


    <tr>
     <td><strong>COMPANY ADDRESS<span style="color: red"> *</span></strong></td>
     <td>
      <textarea class="form-control" name="address" required="">{{($contactus)?$contactus->address:''}}</textarea>
     </td>

   </tr>
   <tr>
     <td><strong>COMPANY LOGO<span style="color: red"> *</span></strong></td>
     <td>
      <input type="file" name="companylogo" class="form-control" {{($contactus->logo)?'':'required'}}>
      @if($contactus->logo)
       <img src="{{URL::asset('/logo/'.$contactus->logo)}}" alt="logo" height="100" width="100">
      @endif
     </td>
   
    
   </tr>
   
	 <tr>
	 	<td colspan="2" style="text-align: right;"><button type="submit" class="btn btn-success">Update</button></td>
	 </tr>
</table>
</form>
</div>



@endsection