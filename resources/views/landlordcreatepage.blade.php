@extends('layouts.app')
@section('content')

<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
	
            <form class="needs-validation" method="post" action="{{url('/landlord')}}" enctype="multipart/form-data">
			<div class="form-row">
			<div class="col-md-4 mb-3"></div>
			<div class="col-md-3 mb-3">
				  <input type="hidden" value="{{csrf_token()}}" name="_token" />
			<label htmlFor="inlineRadioOptions"><h2>Post your ad</h2></label>
			</div>
			</div>
			<div class="form-row">
			<div class="col-md-4 mb-3"></div>
			 <div class="col-md-4 mb-3">
      <label htmlFor="title">Ad Title</label>
      <input type="text" class="form-control" name="title" placeholder="Ad Title" 
        required />
			</div>
				</div>
			
			<hr/>
				
			
  <div class="form-row">
    <div class="col-md-2 mb-3">
      <label htmlFor="validationCustom01">Street Number</label>
      <input type="number" class="form-control" name="street_no"  placeholder="Street Number" 
       min="1" required />
      <div class="invalid-feedback">
        Please Enter the Street Number
      </div>
	</div>
				</div>
			
    <div class="col-md-6 mb-3">
      <label htmlFor="validationCustom02">Street name</label>
      <input type="text" class="form-control" name="street_name" placeholder="Street name"
        required />
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
		
	<div class="col-md-4 mb-3">
      <label htmlFor="validationCustom04">City</label>
      <input type="text" class="form-control" name="city" placeholder="State" required />
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>		
    
   
  </div>
  <div class="form-row">
    
    <div class="col-md-4 mb-3">
      <label htmlFor="validationCustom04">State</label>
      <input type="text" class="form-control" name="state" placeholder="State" required />
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label htmlFor="validationCustom05">Zip</label>
      <input type="text" class="form-control" placeholder="Zip" required />
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
			<div class="col-md-4 mb-3">
      <label htmlFor="validationCustom03">Country</label>
      <input type="text" class="form-control" name="country"  
			 placeholder="Country" required />
      <div class="invalid-feedback">
        Please provide a valid Country.
      </div>
    </div>
  </div>
			<br/><hr /><br/>
			
		
			<div class="form-row">
    <div class="col-md-4 mb-3">
      <label htmlFor="validationCustom">Price</label>
      <input type="number" class="form-control" name="price" placeholder="Price" min="1"
        required />
      <div class="valid-feedback">
        Looks good!
      </div>
	</div>
			<div class="col-md-4 mb-3">
      <label htmlFor="validationCustom">Accomodation Available From</label>
      <input type="date" class="form-control" name="available_from" placeholder="Availablefrom" 
        required />
      <div class="valid-feedback">
        Looks good!
      </div>
	</div>
			<div class="col-md-4 mb-3">
      <label htmlFor="validationCustom03">Email</label>
      <input type="text" class="form-control" name="email"  placeholder="email"  />
      
    </div>
			</div>
			<hr />
		<label><h5>Image upload: </h5></label>
			<div class="form-row">
			<div class="col-md-6 mb-3">
<input type="file" name="image_upload" class="form-control" multiple required/>
  
</div>
	</div>
			<hr />
			<label><h5>Description: </h5></label>
			<div class="form-row">
    <textarea class="form-control" name="description" rows="3"></textarea>
  </div>
		
			
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" name="invalidCheck" required />
      <label class="form-check-label" htmlFor="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-dark btn-sm" type="submit">Submit form</button>
</form>
			</div>

        


@endsection