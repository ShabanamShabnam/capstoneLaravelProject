<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
class StudentPortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Property::all();
        return view('studentportal',['students' => $students]);
        
    }
	 public function student()
    {
        $students = Property::where(function($query){
		$min_price = Request('min_price') ?  Request('min_price') : null;
		$max_price = Request('max_price') ? Request('max_price') : $max_price = null;
		$city = Request('city') ? Request('city') : null;
			$singleCity = Request('singleCity') ?  Request('singleCity') : null;
		if(isset($min_price) && isset($max_price)){
			if(isset($city)){
				foreach ($city as $c) {
					$query-> orWhere('price','>=',$min_price);
					$query-> where('price','<=',$max_price);
					$query->where('city','=', $c);
				}
			}
			$query-> where('price','>=',$min_price);
			$query-> where('price','<=',$max_price);
		}
			else if(isset($city)){
				foreach ($city as $c) {
					
					$query->where('city','=', $c);
				}
				}
			
			else if(isset($min_price) && isset($max_price)){
			
			$query-> where('price','>=',$min_price);
			$query-> where('price','<=',$max_price);
		}
			if(isset($singleCity)){
				$query->where('city','=', $singleCity);
			}
			
			
	})->get();
	return View('studentportal',['students'=>$students]);
		}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $student = Property::find($id);
        
        return view('show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
