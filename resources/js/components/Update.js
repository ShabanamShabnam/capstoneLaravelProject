import React, { Component } from 'react';

import ReactDOM from 'react-dom';
import {BrowserRouter as Router, Link, Route} from'react-router-dom';


export default class Update extends Component {
    render() {
        return (			
			<div>
            <form className="needs-validation"  >
			<div className="form-row">
			<div className="col-md-4 mb-3"></div>
			<div className="col-md-3 mb-3">
			<label htmlFor="inlineRadioOptions"><h2>Post your ad</h2></label>
			</div>
			</div>
			<div className="form-row">
			<div className="col-md-4 mb-3"></div>
			 <div className="col-md-4 mb-3">
      <label htmlFor="title">Ad Title</label>
      <input type="text" className="form-control" id="title"  placeholder="Ad Title" 
        required />
			</div>
			</div>
			
			<hr /><br/>
  <div className="form-row">
    <div className="col-md-2 mb-3">
      <label htmlFor="validationCustom01">Street Number</label>
      <input type="text" className="form-control" id="street_no"placeholder="Street Number" 
        required />
      <div className="valid-feedback">
        Looks good!
      </div>
	</div>
			
    <div className="col-md-6 mb-3">
      <label htmlFor="validationCustom02">Street name</label>
      <input type="text" className="form-control" id="street_name" placeholder="Street name"
        required />
      <div className="valid-feedback">
        Looks good!
      </div>
    </div>
		
			
     <div className="col-md-4 mb-3">
    <label htmlFor="exampleFormControlSelect1"> Select City</label>
    <select className="form-control" id="exampleFormControlSelect1" required>
	<option value="">choose..</option>
      <option value="Kitchener">Kitchener</option>
      <option value="Cambridge">Cambridge</option>
      <option value="Waterloo">Waterloo</option>
      <option value="Guelph">Guelph</option>
      <option value="Brantford">Brantford</option>
	  <option value="Stratford">Stratford</option>
			
    </select>
  </div>
   
  </div>
  <div className="form-row">
    
    <div className="col-md-4 mb-3">
      <label htmlFor="validationCustom04">State</label>
      <input type="text" className="form-control" id="state" placeholder="State" required />
      <div className="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div className="col-md-4 mb-3">
      <label htmlFor="validationCustom05">Zip</label>
      <input type="text" className="form-control" id="zip"  placeholder="Zip" required />
      <div className="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
			<div className="col-md-4 mb-3">
      <label htmlFor="validationCustom03">Country</label>
      <input type="text" className="form-control" id="country"  placeholder="Country" required />
      <div className="invalid-feedback">
        Please provide a valid Country.
      </div>
    </div>
  </div>
			<br/><hr /><br/>
			
		
			<div className="form-row">
    <div className="col-md-4 mb-3">
      <label htmlFor="validationCustom">Price</label>
      <input type="number" className="form-control" id="price" placeholder="Price" min="1"
        required />
      <div className="valid-feedback">
        Looks good!
      </div>
	</div>
			<div className="col-md-4 mb-3">
      <label htmlFor="validationCustom">Accomodation Available From</label>
      <input type="date" className="form-control" id="available_from" placeholder="Availablefrom" 
        required />
      <div className="valid-feedback">
        Looks good!
      </div>
	</div>
			<div className="col-md-4 mb-3">
      <label htmlFor="validationCustom03">Phone Number</label>
      <input type="text" className="form-control" id="phone"  placeholder="phone"  />
      
    </div>
			</div>
			<hr />
			
			<label><h5>About Accomodation: </h5></label>
			<div className="form-row">
			
			<div className="col-md-3 mb-3">
			
			<div className="form-check form-check-inline">
  <input className="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
  <label className="form-check-label" htmlFor="inlineCheckbox1">Furnished</label>
</div></div>
			<div className="col-md-3 mb-3">
<div className="form-check form-check-inline">
  <input className="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
  <label className="form-check-label" htmlFor="inlineCheckbox2">Not furnished</label>
</div></div>
			<div className="col-md-3 mb-3">
<div className="form-check form-check-inline">
  <input className="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"  />
  <label className="form-check-label" htmlFor="inlineCheckbox3">Pets allowed</label>
</div></div>
			<div className="col-md-3 mb-3">
			<div className="form-check form-check-inline">
  <input className="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
  <label className="form-check-label" htmlFor="inlineCheckbox1">Pets not allowed</label>
</div></div>
			<div className="col-md-3 mb-3">
<div className="form-check form-check-inline">
  <input className="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
  <label className="form-check-label" htmlFor="inlineCheckbox2">Laundry included in rent</label>
</div></div>
			<div className="col-md-3 mb-3">
<div className="form-check form-check-inline">
  <input className="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"  />
  <label className="form-check-label" htmlFor="inlineCheckbox3">Paid Laundry</label>
</div></div>
			<div className="col-md-3 mb-3">
		<div className="form-check form-check-inline">
  <input className="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
  <label className="form-check-label" htmlFor="inlineCheckbox1">Wifi included in rent</label>
</div></div>
			<div className="col-md-3 mb-3">
<div className="form-check form-check-inline">
  <input className="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
  <label className="form-check-label" htmlFor="inlineCheckbox2">Wifi not included in rent</label>
</div></div>
			<div className="col-md-3 mb-3">
<div className="form-check form-check-inline">
  <input className="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"  />
  <label className="form-check-label" htmlFor="inlineCheckbox3">Utilities included in rent</label>
</div></div>
			<div className="col-md-3 mb-3">
			<div className="form-check form-check-inline">
  <input className="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"  />
  <label className="form-check-label" htmlFor="inlineCheckbox3">Utilities not included in rent</label>
</div></div>
		</div>
			<hr />
		<label><h5>Image upload: </h5></label>
			<div className="form-row">
			<div className="col-md-6 mb-3">
<input type="file" id="image_upload"  className="form-control" name="img" multiple required/>
  
</div>
	</div>
			<hr />
			<label><h5>Description: </h5></label>
			<div className="form-row">
    <textarea className="form-control" id="description"rows="3"></textarea>
  </div>
		
			
  <div className="form-group">
    <div className="form-check">
      <input className="form-check-input" type="checkbox" value="" id="invalidCheck" required />
      <label className="form-check-label" htmlFor="invalidCheck">
        Agree to terms and conditions
      </label>
      <div className="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button className="btn btn-dark btn-sm" type="submit">Submit form</button>
</form>
			</div>
        );
    }
}