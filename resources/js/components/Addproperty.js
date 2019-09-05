import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Addproperty extends Component {
	
	constructor(props){
		super(props);
		
		this.state={
			propertyTitle:'',
//			propertyaccomodation_type:'',
//			propertynumber_of_rooms:'',
			propertystreet_no:'',
			propertystreet_name:'',
			propertycity:'',
			propertystate:'',
			propertyzip:'',
			propertycountry:'',
			propertyprice:'',
			propertyavailable_from:'',
			propertyphone:'',
			propertyabout_accomodation:'',
			propertyimage_upload:'',
			propertydescription:'',
			propertyterms_conditions:''
			
				   };
		this.onChangePropertyName=this.onChangePropertyName.bind(this);
//		this.onChangeaccomodation_type=this.onChangeaccomodation_type.bind(this);
//		this.onChangenumber_of_rooms=this.onChangenumber_of_rooms.bind(this);
		this.onChangestreet_no=this.onChangestreet_no.bind(this);
		this.onChangestreet_name=this.onChangestreet_name.bind(this);
		this.onChangecity=this.onChangecity.bind(this);
		this.onChangestate=this.onChangestate.bind(this);
		this.onChangezip=this.onChangezip.bind(this);
		this.onChangecountry=this.onChangecountry.bind(this);
		this.onChangeprice=this.onChangeprice.bind(this);
		this.onChangeavailable_from=this.onChangeavailable_from.bind(this);
		this.onChangephone=this.onChangephone.bind(this);
		this.onChangeabout_accomodation=this.onChangeabout_accomodation.bind(this);
		this.onChangeimage_upload=this.onChangeimage_upload.bind(this);
		this.onChangedescription=this.onChangedescription.bind(this);
		this.onChangeterms_conditions=this.onChangeterms_conditions.bind(this);
		
		this.handleSubmit = this.handleSubmit.bind(this);
		
	}
	onChangePropertyName(e){
		this.setState({propertyTitle:e.target.value});
		console.log('onChange', this.state.propertyTitle);
	}
	onChangeaccomodation_type(e){
		this.setState({propertyaccomodation_type:e.target.value});
		console.log('onChange', this.state.propertyaccomodation_type);
	}
	onChangenumber_of_rooms(e){
		this.setState({propertynumber_of_rooms:e.target.value});
		console.log('onChange', this.state.propertynumber_of_rooms);
	}
	onChangestreet_no(e){
		this.setState({propertystreet_no:e.target.value});
		console.log('onChange', this.state.propertystreet_no);
	}
	onChangestreet_name(e){
		this.setState({propertystreet_name:e.target.value});
		console.log('onChange', this.state.propertystreet_name);
	}
	onChangecity(e){
		this.setState({propertycity:e.target.value});
		console.log('onChange', this.state.propertycity);
	}
	onChangestate(e){
		this.setState({propertystate:e.target.value});
		console.log('onChange', this.state.propertystate);
	}
	onChangezip(e){
		this.setState({propertyzip:e.target.value});
		console.log('onChange', this.state.propertyzip);
	}
	
	
	onChangecountry(e){
		this.setState({propertycountry:e.target.value});
		console.log('onChange', this.state.propertycountry);
	}
	onChangeprice(e){
		this.setState({propertyprice:e.target.value});
		console.log('onChange', this.state.propertyprice);
	}
	onChangeavailable_from(e){
		this.setState({propertyavailable_from:e.target.value});
		console.log('onChange', this.state.propertyavailable_from);
	}
	onChangephone(e){
		this.setState({propertyphone:e.target.value});
		console.log('onChange', this.state.propertyphone);
	}
	onChangeabout_accomodation(e){
		this.setState({propertyabout_accomodation:e.target.value});
		console.log('onChange', this.state.propertyabout_accomodation);
	}
	onChangeimage_upload(e){
		this.setState({propertyimage_upload:e.target.value});
		console.log('onChange', this.state.propertyimage_upload);
	}
	onChangedescription(e){
		this.setState({propertydescription:e.target.value});
		console.log('onChange', this.state.propertydescription);
	}
	onChangeterms_conditions(e){
		this.setState({propertyterms_conditions:e.target.value});
		console.log('onChange', this.state.propertyterms_conditions);
	}
	
	handleSubmit(e)
	{
	e.preventDefault();
	const property={
		
		title : this.state.propertyTitle,
//		accomodation_type : this.state.propertyaccomodation_type,
//		number_of_rooms : this.state.propertynumber_of_rooms,
		street_no : this.state.propertystreet_no,
		street_name : this.state.propertystreet_name,
		city : this.state.propertycity,
		state : this.state.propertystate,
		zip : this.state.propertyzip,
		country : this.state.propertycountry,
		price : this.state.propertyprice,
		available_from : this.state.propertyavailable_from,
		phone : this.state.propertyphone,
		about_accomodation : this.state.propertyabout_accomodation,
		image_upload : this.state.propertyimage_upload,
		description : this.state.propertydescription,
		terms_conditions : this.state.propertyterms_conditions
	}
	
	axios.post('http://localhost:8000/property1',property)
		.then((response)=> {
		window.location = '/home'})
		.catch(error => {
    console.log(error.response)
});
	}
	
	
    render() {
        return (
			<div>
            <form className="needs-validation" onSubmit={this.handleSubmit} >
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
      <input type="text" className="form-control" id="title" value={this.state.propertyTitle} 
			onChange={this.onChangePropertyName} placeholder="Ad Title" 
        required />
			</div>
			</div>
			<hr/>
			
  <div className="form-row">
    <div className="col-md-2 mb-3">
      <label htmlFor="validationCustom01">Street Number</label>
      <input type="number" className="form-control" id="street_no" value={this.state.propertystreet_no} 
			onChange={this.onChangestreet_no} placeholder="Street Number" 
        required />
      <div className="invalid-feedback">
        Please Enter the Street Number
      </div>
	</div>
			
    <div className="col-md-6 mb-3">
      <label htmlFor="validationCustom02">Street name</label>
      <input type="text" className="form-control" value={this.state.propertystreet_name} 
			onChange={this.onChangestreet_name}id="street_name" placeholder="Street name"
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
      <input type="text" className="form-control" id="state" value={this.state.propertystate} 
			onChange={this.onChangestate} placeholder="State" required />
      <div className="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div className="col-md-4 mb-3">
      <label htmlFor="validationCustom05">Zip</label>
      <input type="text" className="form-control" id="zip" value={this.state.propertyzip} 
			onChange={this.onChangezip} placeholder="Zip" required />
      <div className="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
			<div className="col-md-4 mb-3">
      <label htmlFor="validationCustom03">Country</label>
      <input type="text" className="form-control" id="country" value={this.state.propertycountry} 
			onChange={this.onChangecountry} placeholder="Country" required />
      <div className="invalid-feedback">
        Please provide a valid Country.
      </div>
    </div>
  </div>
			<br/><hr /><br/>
			
		
			<div className="form-row">
    <div className="col-md-4 mb-3">
      <label htmlFor="validationCustom">Price</label>
      <input type="number" className="form-control" id="price" value={this.state.propertyprice} 
			onChange={this.onChangeprice} placeholder="Price" min="1"
        required />
      <div className="valid-feedback">
        Looks good!
      </div>
	</div>
			<div className="col-md-4 mb-3">
      <label htmlFor="validationCustom">Accomodation Available From</label>
      <input type="date" className="form-control" id="available_from" value={this.state.propertyavailable_from} 
			onChange={this.onChangeavailable_from} placeholder="Availablefrom" 
        required />
      <div className="valid-feedback">
        Looks good!
      </div>
	</div>
			<div className="col-md-4 mb-3">
      <label htmlFor="validationCustom03">Phone Number</label>
      <input type="text" className="form-control" id="phone" value={this.state.propertyphone} 
			onChange={this.onChangephone} placeholder="phone"  />
      
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
<input type="file" id="image_upload" value={this.state.propertyimage_upload} 
			onChange={this.onChangeimage_upload} className="form-control" name="img" multiple required/>
  
</div>
	</div>
			<hr />
			<label><h5>Description: </h5></label>
			<div className="form-row">
    <textarea className="form-control" id="description" value={this.state.propertydescription} 
			onChange={this.onChangedescription}rows="3"></textarea>
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



