import React, { Component } from 'react';

import ReactDOM from 'react-dom';
import {BrowserRouter as Router, Link, Route} from'react-router-dom';
import Update from './Update'
import Addproperty from './Addproperty';
import Allproperties from './Allproperties';

export default class Example extends Component {
    render() {
        return (
			
			<Router>
      <Route path="/" component={Allproperties} >
        <Route path="/add-item" component={Addproperty} />
        
        <Route path="/edit/:id" component={Update} />
        </Route>
        </Router>
			
        );
    }
}

export class Allproperty extends Component {
    render() {
        return (			
			<div><Allproperties />
			</div>
        );
    }
}

export  class Addproperties extends Component {
    render() {
        return (			
			<div><Addproperty />
			</div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
if (document.getElementById('addproperty')) {
    ReactDOM.render(<Addproperties />, document.getElementById('addproperty'));
}
if (document.getElementById('allproperties')) {
    ReactDOM.render(<Allproperty />, document.getElementById('allproperties'));
}
if (document.getElementById('updateProperty')) {
    ReactDOM.render(<Update />, document.getElementById('updateProperty'));
}

