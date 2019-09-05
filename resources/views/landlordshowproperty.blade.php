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
        <img src="{{ URL::to('/') }}/images/{{$property->image_upload}}" style="width:400px;height:400px;">
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

      <h4 class="h4 mb-4">{{$property->title}}</h4>
		<h5 class="font-weight-normal">Price:  ${{$property->price}}</h5>
		<h6>Address:</h6>
<p  class="font-weight-normal">{{$property->street_no}}{{$property->street_name}}</p>
      <p class="font-weight-normal"><strong>City: </strong>{{$property->city}}{{$property->state}}</p>
	  <p class="font-weight-normal"><strong>ZipCode: </strong>{{$property->zip}}</p>
		<p class="font-weight-normal"><strong>Description: </strong>{{$property->description}}</p>
      


     

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- News jumbotron -->
@endsection

                    