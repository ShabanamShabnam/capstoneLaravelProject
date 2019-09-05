@extends('layouts.app')
@section('content')

<!--Carousel Wrapper-->

<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{asset('images/house3.jpg')}}"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
		  <h1 class="headingSlider">Conestoga Student Housing</h1>
        <h3 class="h3-responsive"></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{asset('images/house4.jpg')}}" alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
		  <h1 class="headingSlider">Finding your house near Conestoga</h1>
        <h3 class="h3-responsive"></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{asset('images/house5.jpg')}}"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
		  <h1 class="headingSlider">Property on Rent</h1>
        <h3 class="h3-responsive"></h3>
        <p></p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>

<!--/.Carousel Wrapper-->
<!-- Jumbotron -->
<div class="jumbotron text-center blue-grey lighten-5">

  <!-- Title -->
  <h2 class="card-title h2">Conestoga Student Housing</h2>

  <!-- Subtitle -->
  <p class="indigo-text my-4 font-weight-bold">Lets make finding Tenant and Landlords</p>

  <!-- Grid row -->
  <div class="row d-flex justify-content-center">

    <!-- Grid column -->
    <div class="col-xl-7 pb-2">

      <p class="card-text">In conestoga student housing we provide the opportunity to student to find all the houses available for students near all campuses of conestoga college. All the landloards can also post their properties available for rent in very easy way. It is a medium to connect students and landlords.</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-4 pb-2">

	<a class="btn btn-dark btn-rounded" href="{{ url('/student/') }}" ><i class="fas fa-home"></i> &nbsp;See all Houses </a>
 

</div>
<!-- Jumbotron -->

<div class="row">
	
<!-- Card1 -->

<div class="card col-lg-3 card-image" style="background-image: url(../images/house1.jpg)">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
    <div>
      <h5 class="text-warning"><i class="fas fa-chart-pie"></i> Kitchener</h5><br>
		<br>
      <h3 class="card-title pt-2"><strong>Houses near Doon campus (Kitchener)</strong></h3>
		
    <br>
		
		<br>
		<form action="{{action('StudentPortalController@student')}}" >
                    {{csrf_field()}}
                    <input name="singleCity" type="hidden" value="kitchener">
		<button class="btn btn-warning" type="submit"><i class="fas fa-home left"></i> Houses</button>
		</form>
		<br>
    </div>
  </div>

</div>
<!-- Card -->
	
	<!-- 2Card -->

<div class="card col-lg-3 card-image" style="background-image: url(../images/house1.jpg)">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
    <div>
      <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Cambridge</h5>
		<br>
      <br>
      <h3 class="card-title pt-2"><strong>Houses near cambridge campus </strong></h3>
      <br><br>
     <form action="{{action('StudentPortalController@student')}}" >
                    {{csrf_field()}}
                    <input name="singleCity" type="hidden" value="cambridge">
		<button class="btn btn-pink" type="submit"><i class="fas fa-home left"></i> Houses</button>
		</form>
		<br>
    </div>
  </div>

</div>
<!-- Card -->
	<!-- 3Card -->

<div class="card col-lg-3 card-image" style="background-image: url(../images/house1.jpg)">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
    <div>
      <h5 class="text-warning"><i class="fas fa-chart-pie"></i> Waterloo</h5>
		<br>
      <h3 class="card-title pt-2"><strong>Houses near Waterloo campus </strong></h3>
     
		
		<br><br><br>
		
      <form action="{{action('StudentPortalController@student')}}" >
                    {{csrf_field()}}
                    <input name="singleCity" type="hidden" value="waterloo">
		<button class="btn btn-warning" type="submit"><i class="fas fa-home left"></i> Houses</button>
		</form>
		<br>
    </div>
  </div>

</div>
<!-- Card -->
	<!-- 4Card -->

<div class="card col-lg-3 card-image" style="background-image: url(../images/house1.jpg)">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
    <div>
      <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Guelph</h5>
      <br>
      <h3 class="card-title pt-2"><strong>Houses near Guelph campus </strong></h3>
      <br><br>
		
		<br>
		
     <form action="{{action('StudentPortalController@student')}}" >
                    {{csrf_field()}}
                    <input name="singleCity" type="hidden" value="guelph">
		<button class="btn btn-pink" type="submit"><i class="fas fa-home left"></i> Houses</button>
		</form>
		<br>
    </div>
  </div>

</div>
<!-- Card -->
	<!-- 5Card -->

<div class="card col-lg-3 card-image" style="background-image: url(../images/house1.jpg)">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
    <div>
      <h5 class="text-warning"><i class="fas fa-chart-pie"></i> Brantford</h5>
		<br>
      <h3 class="card-title pt-2"><strong>Houses near Brantford campus </strong></h3>
      <br><br>
		
		<br>
		
     <form action="{{action('StudentPortalController@student')}}" >
                    {{csrf_field()}}
                    <input name="singleCity" type="hidden" value="brantford">
		<button class="btn btn-warning" type="submit"><i class="fas fa-home left"></i> Houses</button>
		</form>
		<br>
    </div>
  </div>

</div>
<!-- Card -->
<!-- 6Card -->

<div class="card col-lg-3 card-image" style="background-image: url(../images/house1.jpg)">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
    <div>
      <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Stratford</h5>
      <br>
      <h3 class="card-title pt-2"><strong>Houses near Stratford campus </strong></h3>
      
		<br><br><br>
		
     <form action="{{action('StudentPortalController@student')}}" >
                    {{csrf_field()}}
                    <input name="singleCity" type="hidden" value="stratford">
		<button class="btn btn-pink" type="submit"><i class="fas fa-home left"></i> Houses</button>
		</form>
		<br>
    </div>
  </div>

</div>
<!-- Card -->
	
	
	

	
	</div>


@endsection
