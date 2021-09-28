@extends('layouts.app')

@section('content')
<style type="text/css">
    .b {
    white-space: nowrap; 
    width: 120px; 
    overflow: hidden;
    text-overflow: ellipsis; 
   
}
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
<div class="">
<table id="table" class="table table-hover table-bordered table-striped datatable">
	
	<thead>
		<tr class="bg-navy">
			<td>ID</td>
			<td>NAME</td>
			<td>PHONE</td>
			<td>EMAIL</td>
			<td>SUBJECT</td>
			<td>MESSAGE</td>
			<td>CRETED_AT</td>
			<td>ACTION</td>
		</tr>
	</thead>
	<tbody>
		@foreach($queries as $query)
		  <tr>
		  	<td>{{$query->id}}</td>
		  	<td>{{$query->name}}</td>
		  	<td>{{$query->phone}}</td>
		  	<td>{{$query->email}}</td>
		  	<td>{{$query->subject}}</td>
		  	
		  	<td><p class="b" title="{{$query->msg}}">{{$query->msg}}</p></td>
		  	<td>{{$query->created_at}}</td>
		  	<td>
		  		
			<label>
				<input type="checkbox" id="status" onclick="changeStatus('{{$query->id}}');" class="js-switch" {{($query->is_completed==1)?'checked':''}} /> Completed
			</label>
		  	</td>
		  	
		  </tr>
		@endforeach
	</tbody>
	
</table>
</div>
<script type="text/javascript">


	function changeStatus(id){
		var ischecked = $("#status").is(":checked");
		if (ischecked) {
			status=1;
		}
		else{
			 status=0;
		}

		$.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf_token"]').attr('content')
            }
        });

           $.ajax({
               type:'POST',
              
               url:'{{url("/ajaxchangepoststatus")}}',
              
               data: {
                     "_token": "{{ csrf_token() }}",
                     status:status,
                     id:id 
                     },

               success:function(data) { 
               		
               		  //location.href="/job/viewpost";
               }
               
             });
       
    }
		//alert(id+"---"+status);
	
</script>
@endsection