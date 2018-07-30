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
})->name('index');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/foo', function(){
	return view('foo');
})->name('foo');

Route::get('/bar', function(){
	return view('bar');
})->name('bar');

Route::get('/shoutout/{text}', function($text){
	$colors = array(
					"red",
					 "green",
					 "blue",
					 "white",
					 "black"

					);


	return view('shoutout', 
		array(
			'text' => $text,
			'colors' => $colors
		));


})->name('shoutout');

Route::get('/middleware/{age}', function($age){
	return view('age', array('age'=>$age));
})->middleware('age');

Route::get('/pages/contact', 'PagesController@contactPage');

Route::get('/pages/middleware/{age}', 'PagesController@middlewareAgePage');


Route::get('/pages/shoutout/{text}', 'PagesController@shoutoutPage')->name('shoutout');


	
// Route::get('/basic-arithmetic/{tax?}/{tex?}/{tox?}/{ans?}', function($tax = null, $tex = null,$tox = null, $ans = null){

// 	return view('basic-arithmetic',array('tax'=>$tax,
// 										 'tex'=>$tex,
// 										 'tox'=>$tox,
										 
// 						 				));
// })->name('basic-arithmetic');



Route::get('/basic-arithmetic/{tax?}/{tex?}/{tox?}', function($tax = null, $tex = null,$tox = null){

	return view('basicarithmetic/'.$tax, array('tax'=>$tax,
											  'tex'=>$tex,
											  'tox'=>$tox,
										 
						 				));
})->name('basicarithmetic');