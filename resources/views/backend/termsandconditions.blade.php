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
<form action="/updatetermsandconditions" method="post" enctype="multipart/form-data">
	{{csrf_field()}}

	<table class="table">


    <tr>
     <td><strong>TERMS AND CONDITIONS<span style="color: red"> *</span></strong></td>
     <td>
      <textarea name="termsandconditions" id="editor" cols="30" rows="10" required="">{{($termsandcondition)?$termsandcondition->termsandconditions:''}}</textarea>
     
     </td>

   </tr>
   
   
	 <tr>
	 	<td colspan="2" style="text-align: right;"><button type="submit" class="btn btn-success">Update</button></td>
	 </tr>
</table>
</form>
</div>



@endsection