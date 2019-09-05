<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Property::all();
		return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $property = new properties();
//		$property->title = $request->title;
//		$property->save();
		$property = new Property([
          'title' => $request->get('title'),
			'street_no' => $request->get('street_no'),
			'street_name' => $request->get('street_name'),
			'city' => $request->get('city'),
			'state' => $request->get('state'),
			'zip' => $request->get('zip'),
			'country' => $request->get('country'),
			'price' => $request->get('price'),
			'available_from' => $request->get('available_from'),
			'phone' => $request->get('phone'),
			'image_upload' => $request->get('image_upload'),
			'description' => $request->get('description')
        ]);
        $property->save();


        return response()->json('property Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
		return response()->json([
			'property' => $property,
		]);
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
        // update task
		$input = $request->all();
		$property = Property::findOrFail($id);
		$property->update($input);
		//return response()->json($task->with('user')->find($task->id));
//		return response()->json('property Added Successfully.');
//        
//        $property->save();


        return response()->json('Property Updated Successfully.');
		
		
		
		
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


      return response()->json('Property Deleted Successfully.');
    }
}
