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

get('/', 'PagesController@home');
get('services', 'PagesController@services');
get('food-safety', 'PagesController@serviceFoodSafety');
get('food-safety-01', 'PagesController@serviceFoodSafety01');
get('food-safety-02', 'PagesController@serviceFoodSafety02');
get('halaal', 'PagesController@serviceHalaal');
