@extends('layouts.app')
@section('content')

<!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 offset-md-1 mx-3 my-3">

      <!-- Featured image -->
      <div class="view overlay">
        <img src="{{ URL::to('/') }}/images/{{$student->image_upload}}" style="width:400px;height:400px;">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">

      <!-- Excerpt -->
      <a href="#!" class="black-text">
        <h6 class="h6 pb-1"><i class="fas fa-home pr-1"></i> Accommodation</h6>
      </a>

      <h4 class="h4 mb-4">{{$student->Title}}</h4>
		<h5 class="font-weight-normal">Price:  ${{$student->price}}</h5>
		<h6>Address:</h6>
<p  class="font-weight-normal">{{$student->street_no}}{{$student->street_name}}</p>
      <p class="font-weight-normal"><strong>City: </strong>{{$student->city}}{{$student->state}}</p>
	  <p class="font-weight-normal"><strong>ZipCode: </strong>{{$student->zip}}</p>
		<p class="font-weight-normal"><strong>Description: </strong>{{$student->description}}</p>
     
@if(Auth::check()) 
     <a class="btn btn-dark" href="mailto:{{$student->email}}" target="_top">Contact to landlord</a>

		@else
		 <a class="btn btn-dark" href="{{ route('login') }}" target="_top">Contact to landlord</a>
		
		@endif
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- News jumbotron -->
@endsection

                    