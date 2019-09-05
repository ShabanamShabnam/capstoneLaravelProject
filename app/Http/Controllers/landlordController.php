<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Property;
class landlordController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Property $property)
    {		
		$allproperties = $property->whereIn('user_id', $request->user())->with('user');
		$properties = $allproperties->orderBy('created_at', 'desc')->take(10)->get();
		// return json response
		return view('landlordmainpage',['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
		 $image = $request->file('image_upload');
		$new_name =  rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
		
       $property = new Property([
		   'user_id' =>auth()->user()->id,
          'title' => $request->get('title'),
			'street_no' => $request->get('street_no'),
			'street_name' => $request->get('street_name'),
			'city' => $request->get('city'),
			'state' => $request->get('state'),
			'zip' => $request->get('zip'),
			'country' => $request->get('country'),
			'price' => $request->get('price'),
			'available_from' => $request->get('available_from'),
			'email' => $request->get('email'),
			'image_upload' => $new_name,
			'description' => $request->get('description'),
		   'updated_at' => $request->get('updated_at'),
			'created_at' => $request->get('created_at')
		   
        ]);
	
        $property->save();


        return redirect('/landlord')->with('success', 'Property added');
    }   
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        
        return view('landlordshowproperty', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::where('user_id', auth()->user()->id)
                        ->where('id', $id)
                        ->first();
        return view('landlordupdate', compact('property','id')); 
		
	

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'title'=>'required',
            'street_no'=>'required',
            'street_name'=>'required',
			 'city'=>'required',
			 'state'=>'required',
            'zip'=>'required',
            'country'=>'required',
			 'street_name'=>'required',
			 'price'=>'required',
            'available_from'=>'required',
            'email'=>'required',
			 'image_upload'=>'required',
			 'description'=>'required'
			 
        ]);
$image = $request->file('image_upload');
		$new_name =  rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
		
        $property = Property::find($id);
		 $property->user_id = auth()->user()->id;
        $property->title =  $request->get('title');
        $property->street_no = $request->get('street_no');
        $property->street_name = $request->get('street_name');
        $property->city = $request->get('city');
        $property->state = $request->get('state');
        $property->zip = $request->get('zip');
		$property->country = $request->get('country');
        $property->price = $request->get('price');
        $property->available_from = $request->get('available_from');
        $property->email = $request->get('email');
		$property->image_upload = $new_name;
        $property->description = $request->get('description');
        
        $property->save();
		
        return redirect('/landlord')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $property = Property::find($id);
        $property->delete();

        return redirect('/landlord')->with('success', 'Property deleted!');
		
	}
}
