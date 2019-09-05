import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import {BrowserRouter, Link} from 'react-router-dom';

export default class Allproperties extends Component {
	
	constructor()
	{
		super();
		this.state={
			properties:[]
		}
		this.handleDelete = this.handleDelete.bind(this);
	}
	componentDidMount(){
	 axios.get('http://localhost:8000/property1')
    .then(response=>{
        this.setState({properties:response.data});
    });
}
	
	
handleDelete(id) {
        // remove from local state
        const isNotId = properties => properties.id !== id;
        const updatedTasks = this.state.properties.filter(isNotId);
       this.setState({ properties: updatedTasks });
        // make delete request to the backend
        axios.delete(`/property1/${id}`);
    }
	
	// handle update
    handleUpdate(id) {
        axios.put(`/properties/${id}`).then(response => {
            this.getProperties();
        });
    }
	
	
    render() {
//         return(<div>
// 			  <table>
//         <thead>
// <tr>
// <th>title</th>
// <th>accomodation_type</th> 
// <th>number_of_rooms</th>
// </tr>
// </thead>
// <tbody>
//   {
//        this.state.properties.map(properties=>{
//         return(
//             <tr key={properties.id}>
// <td>{properties.title}</td>
// <td>{properties.accomodation_type}</td> 
// <td>{properties.number_of_rooms}</td>

			   
// <td><button onClick={() => this.handleDelete(properties.id)} className="btn btn-sm btn-warning float-right"> Delete</button></td>
// </tr>

/* <button onClick={() => this.handleDelete(properties.id)} className="btn btn-sm btn-warning float-right"> Delete</button> */

    // );
    // })

    return(<div>
			
        <form>
        <div className="form-row">
        
			
          {
               this.state.properties.map(properties=>{
                return(
                   
                    <div className="col-md-6" key="{properties.id}">
                    <div className="card">

                     <div className="card-body">
                    
                     <p className="card-text"><strong>Property Title: </strong> {properties.title}</p>
		   				<p className="card-text"><strong>Address: </strong>{properties.street_no}</p>
                     <p className="card-text"><strong>Street Name: </strong>{properties.street_name}</p>
                     <p className="card-text"><strong>City: </strong>{properties.city}</p>
                     
                   
		   <BrowserRouter><Link className="btn btn-dark float-left" to={'/edit/${properties.id}'}>
    Edit
</Link></BrowserRouter>
                    <button onClick={() => this.handleDelete(properties.id)} className="btn  btn-dark float-right"> Delete</button>
          
        </div>
             </div>   
        </div>
                );

})
          }
          </div>
 
 </form> 

</div>
    );
        }
        
        }