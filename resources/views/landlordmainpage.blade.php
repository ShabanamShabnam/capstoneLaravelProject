
@extends('layouts.app')

@section('content')

<div class="container">

	<p>
  <a class="btn btn-dark  btn-rounded" href="{{ url('/landlordcreatepage') }}" >
    <label><i class="fas fa-home"></i> Add new</label>
  </a>
		
	</p>
	<br/>
		@if(!$properties->isEmpty())
	<h2 style="text-align:center">Your Properties</h2>
	<div class="form-row">
		
@foreach($properties as $property)
	
 <div class="col-md-4 col-sm-4" >
<div class="card" style="width: 330px;" >
  <img class="card-img-top" src="{{ URL::to('/') }}/images/{{$property->image_upload}}" style="width:330px;height:200px;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$property->title}}</h5>
	  <p class="card-text"><strong>Price: $ {{$property->price}}</strong>
    <p class="card-text"><strong>City: </strong>{{$property->city}}, {{$property->state}}</p>
	  <div class="form-row">
    <a href="{{ route('landlord.show', $property->id) }}" class="btn btn-dark btn-md ">Show</a>
	  <a href="{{ route('landlord.edit', $property->id) }}" class="btn btn-dark btn-md ">Edit</a>
	  
		 <form action="{{action('landlordController@destroy', $property->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-dark btn-md" type="submit">Delete</button>
		  </form></div>
  </div>
</div>
</div>
 @endforeach
		</div>
		@else
		<h1 class="blankpage">You donot have any property advertised yet.</h1>
		@endif


</div>
@endsection

