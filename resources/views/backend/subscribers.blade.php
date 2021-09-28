@extends('layouts.app')

@section('content')

<div class="">
<table id="table" class="table table-hover table-bordered table-striped datatable">
	
	<thead>
		<tr class="bg-navy">
			<td>ID</td>
			<td>EMAIL</td>
            <td>CREATED_AT</td>
		</tr>
	</thead>
	<tbody>
		@foreach($subscribers as $subscriber)
		  <tr>
		  	<td>{{$subscriber->id}}</td>
		  	<td>{{$subscriber->email}}</td>
		  	<td>{{$subscriber->created_at}}</td>
		  	
		  	
		  </tr>
		@endforeach
	</tbody>
	
</table>
</div>

@endsection