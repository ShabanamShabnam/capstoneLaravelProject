@extends('layouts.app')

@section('content')
<div class="container">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 <a class="btn btn-dark float-right" href="{{ url('/property') }}"  >Post new Ad</a>
                    <div id="allproperties"></div>
				
     
   
</div>
@endsection
