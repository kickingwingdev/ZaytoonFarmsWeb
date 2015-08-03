<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('services', function () {
	return view('pages.services');
});

Route::get('food-safety', function () {
	return view('pages.food-safety');
});

Route::get('food-safety-01', function () {
	return view('pages.food-safety-01');
});