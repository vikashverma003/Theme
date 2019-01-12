@extends('layouts.form')

@section('content')

<table border="1">
	
	<tr>
		
		<td>img</td>


		<td>vid</td>

		<td>view</td>
		<td>Action<td>

	</tr>


	@foreach($image as $images)

	<tr>
		

<td>{{$images->image}}</td>


<td>{{$images->video}}</td>

<td>{{$images->view}}</td>


<td ><a href="/image/{{$images->id}}">image</a></td>

<td> <a href="/video/{{$images->id}}">video</a></td>

<td><a href="/view/{{$images->id}}">view</a></td>




	</tr>
@endforeach

</table>




@endsection
