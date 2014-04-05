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

Route::get('new-snack', function(){
	return View::make('new-snack')->with('shops',Shop::all());
});
Route::get('new-shop', function(){
	return View::make('new-shop')->with('snacks',Snack::all());
});
Route::post('new-shop', function(){
	return json_encode(Input::all());
});

Route::get('shops',function(){
	$shops = Shop::all();
	return View::make('shops')->with('shops',$shops);
});
Route::get('snacks',function(){
	$snacks = Snack::all();
	return View::make('snacks')->with('snacks',$snacks);
});



App::missing(function($exception)
{
   $view_name = 'pages/'.Request::path();
   $view_file = __DIR__."/views/{$view_name}.blade.php";
   if(file_exists($view_file)){
   	return View::make($view_name);
   }
   else{
   	return Response::view('errors/404', array(), 404);
   }
});
