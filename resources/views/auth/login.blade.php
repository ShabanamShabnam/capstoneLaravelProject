@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card"  style="margin:0px;padding:0px">
                <div class="card-header  white-text text-center py-4">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}"  style="color: #757575;">
                        @csrf

                        <!-- <div class="md-form form-group row"  style="padding-left:35px">
                        <i class="fa fa-user prefix grey-text"  ></i><br/>
                            <label for="materialFormCardEmailEx" style="padding-left:35px" class="col-md-7 "></label>
                           
                            <div class="col-md-9">
                           
                                <input id="materialFormCardEmailEx" style="padding-left:35px"type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->








                        <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input id="materialFormCardEmailEx" 
                type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                required autocomplete="email" placeholder="E-mail"autofocus>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="materialFormCardEmailEx" class="font-weight-light"></label>
            </div>

            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input for="materialFormCardPasswordEx" type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
                required autocomplete="current-password" placeholder="Password">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="materialFormCardPasswordEx" class="font-weight-light"></label>
            </div>
                     <!-- <div class="md-form form-group row" style="padding-left:35px"s>
                            <label for="materialLoginFormEmail" class="col-md-7 "></label>

                            <div class="col-md-9">
                                <input for="materialFormCardPasswordEx" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- <div class="d-flex justify-content-around">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember materialLoginFormRemember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                    <div  class="col-md-2 offset-md-0" style="padding-left:45px">
                                
                               </div>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link"  href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                          </div>  -->

                       

                            <div class="text-center mb-3 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-dark cc btn-block btn-rounded z-depth-1">{{ __('Login') }}</button>
            </div>

      <!--Footer-->
      
 
                        
					</form>
            </div>
        </div>
    </div>
<!-- </div> -->
@endsection
