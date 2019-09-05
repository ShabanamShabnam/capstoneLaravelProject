<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- Font Awesome -->

    <!-- Scripts -->
	
	
	
	
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	
	
	
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	  <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" id="navv" href="{{ url('/') }}"><img id="logo" src="{{asset('images/logo9.png')}}" alt="Third slide">
                    Conestoga student housing
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link btn btn-outline-light" href="{{ url('/student/') }}" > &nbsp; Houses for rent </a></li>
						
						<li class="nav-item"><a class="nav-link btn btn-outline-light" href="{{ url('/landlord') }}" ><i class="fas fa-home"></i> Add Post </a></li>
                        <!-- Authentication Links -->
                        @guest
						
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
		  <!-- Footer -->
<footer class="bg-dark text-white, page-footer font-small teal pt-4">

<!-- Footer Text -->
<div class="container-fluid text-center text-md-left" style="padding-left:30px;">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase font-weight-bold" style="padding-left:30px">About CSH</h5>
      <p>We are providing a platform for students to search for their home and also for 
      landlord to make a post about their home</p>

    </div>
    <!-- Grid column -->
    <div class="col-md-2 mt-md-0 mt-3">

<!-- Content -->
<h5 class="text-uppercase font-weight-bold">For Students</h5>
<ul style="list-style-type:none">
<li>Internet and TV Services</li>
<li>Delivery Services</li>
<li>Electronics</li>
<li>Furniture Stores</li>
</ul>

</div>

<div class="col-md-2 mt-md-0 mt-3">

<!-- Content -->
<h5 class="text-uppercase font-weight-bold">For Landlords</h5>
<ul style="list-style-type:none">
<li>Cleaning and Restoration Services</li>
<li>Real Estate and Leasing Professionals</li>
<li>Pest Controls</li>
<li>Insurance</li>
</ul>

</div>
    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-2 mb-md-0 mb-3">

      <!-- Content -->
      
       <h6>Social Links</h6>
          
            <a href="#!"></a>
          
         
            <a href="https://www.facebook.com/lang=en" target="blank"><i class="fab fa-facebook fa-2x"></i></a>
        
            <a href="https://www.instagram.com" target="blank"><i class="fab fa-instagram fa-2x"></i></a>
         
            <a href="https://www.twitter.com" target="blank"><i class="fab fa-twitter-square fa-2x"></i></a>


    </div>
    <!-- Grid column -->
    <div class="col-md-2 mt-md-0 mt-3">

      <!-- Material input -->
<div class="md-form" >
  <input type="text" id="form1" class="form-control">
  <label for="form1">SignUp for Newsletters</label><a style="padding-left:30px" href="https://www.gmail.com/lang=en" target="blank"><i class="fas fa-envelope fa-2x"></i></a>
	<br>
	<p>Created my free logo at<a href="https://logomakr.com/"> LogoMakr.com</a></p>
</div>

    </div>
  </div>
  <!-- Grid row -->

</div>
<!-- Footer Text -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/"> Conestoga Student Housing</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    </div>

</body>
</html>
