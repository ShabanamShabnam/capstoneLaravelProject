@extends('layouts.app')

@section('content')
<div class="container">
	<p>
  <a class="btn btn-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    <label><Strong>Filter</Strong></label>
  </a>	
	</p>
	<br/>
	<div class="collapse" id="collapseExample">
<form action="{{URL::current()}}">

  <div class="card card-body">
    
	  <label for="">Price</label>
  <div class="form-row">
  <div class="col-sm-3">
	Min: <input class="form-control" type="text" name="min_price" value="{{Request::get('min_price')}}">
	  </div>
   <div class="col-sm-3">
	Max: <input class="form-control" type="text" name="max_price" value="{{Request::get('max_price')}}">
	  </div>

</div>
	<?php $city = Request::has('city') ? Request::get('city'): [] ?>

	<br>
	  <div class="form-row">
  <div class="col-sm-3">
	<input type="checkbox" name="city[]" value="kitchener" {{in_array(1, $city ) ? 'checked' :'' }}>
	kitchener
	<input type="checkbox" name="city[]" value="cambridge" {{in_array(2, $city ) ? 'checked' :'' }}>
	cambridge
		  </div>
	  </div>
	<br>

	<button class="btn btn-dark btn-md">Go</button>

	  
	</div>

	
</form>
	</div>
<hr>



<div class="form-row">
	@if(!$students->isEmpty())
@foreach($students as $student)
 <div class="col-sm-4">
<div class="card" style="width: 300px;">
  <img class="card-img-top" src="{{ URL::to('/') }}/images/{{$student->image_upload}}" style="width:298px;height:200px;"alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$student->title}}</h5>
    <p class="card-text"><strong>Price: ${{$student->price}}</strong>
	 </p>
	  <p class="card-text"><strong>City: </strong>{{$student->city}}, {{$student->state}}</p>
    <a href="{{ route('student.show', $student->id) }}" class="btn btn-dark btn-md center-block ">Show</a>
  </div>
</div>
</div>
 @endforeach
	@else
	<h1 class="blankpage">No poperty for rent </h1>
	@endif
</div>

</div>
@endsection

