<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('hello');
});

Route::get('butt', function(){
	return 'butt';
});

Route::get('shops',function(){
	$shops = Shop::all();
	return View::make('shops')->with('shops',$shops);
});

