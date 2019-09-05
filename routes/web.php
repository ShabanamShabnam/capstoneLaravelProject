<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::get('/property', function () {
    return view('addproperty');
});
Route::get('/landlordadminpage', function () {
    return view('landlordadminpage');
});
Route::get('/edit/{id}', function () {
    return view('updatepage');
});
Route::get('/landlordcreatepage', function () {
    return view('landlordcreatepage');
});

Route::resource('property1', 'Api\PropertyController');
//Route::post('/store', 'Api\PropertyController@store');


Route::get('/edit/landlord/{id}','landlordController@edit');
Route::post('/edit/landlord/{id}','landlordController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('studentportal');
Route::get('/student/studentportal/', 'StudentPortalController@student')->name('studentportal');

Route::resource('student', 'StudentPortalController');


Route::resource('landlord', 'landlordController');
Route::post('/create/landlord','landlordController@store');

Route::delete('/delete/landlord/{id}','landlordController@destroy');
