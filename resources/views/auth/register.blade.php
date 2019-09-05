@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card"  style="margin:0px;padding:0px">
                <div class="card-header white-text text-center py-4">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- <div class="md-form"  style="padding-left:45px">
                            <label for="name " class="col-md-7 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-9">
                                <input id="materialFormCardNameEx" type="text" class="form-control @error('name') is-invalid @enderror"
                                 name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- <div class=" md-form form-group row"  style="padding-left:45px">
                            <label for="email" class="col-md-7 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-9">
                                <input id="materialFormCardEmailEx"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- Material form register -->
        <form>
           
            <!-- Material input text -->
            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input id="materialFormCardNameEx" type="text"  placeholder="UserName" class="form-control @error('name') is-invalid @enderror"
                                 name="name" value="{{ old('name') }}"required autocomplete="name" autofocus >

                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="materialFormCardNameEx" class="font-weight-light"></label>
            </div>

            <!-- Material input email -->
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                
                                <input id="materialFormCardEmailEx" placeholder="E-mail"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                <label for="materialFormCardEmailEx" class="font-weight-light"></label>
            </div>

            
            <!-- Material input password -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input id="materialFormCardPasswordEx" type="password" placeholder="Password"class="form-control @error('password') is-invalid @enderror" 
                name="password" required autocomplete="new-password">
                
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="materialFormCardPasswordEx" class="font-weight-light"></label>
            </div>


            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
               
                
               
                <label for="materialFormCardPasswordEx" class="font-weight-light"></label>
            </div>

			<div class="form-group row mb-0" style="padding-right:45px">
                            <div class="col-md-5 offset-md-4">
            <div class="text-center mb-3 col-sm-3 col-md-12 ">
            <button type="submit" class="btn btn-dark btn-block btn-rounded z-depth-1">{{ __('Register') }}</button>
			</div>
  

      

      <!--Footer-->
     
				</div></div>
						</form></form></div>
        </div>
    </div>

@endsection





