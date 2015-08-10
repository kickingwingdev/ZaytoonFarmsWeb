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
get('about', 'PagesController@about');
get('services', 'PagesController@services');

get('food-safety', 'PagesController@serviceFoodSafety');
get('food-safety-01', 'PagesController@serviceFoodSafety01');
get('food-safety-02', 'PagesController@serviceFoodSafety02');
get('halaal', 'PagesController@serviceHalaal');
get('dispatch-and-transport', 'PagesController@serviceDispatchAndTransport');
get('quality-control', 'PagesController@serviceQualityControl');
get('packaging', 'PagesController@servicePackaging');
get('custom-orders', 'PagesController@serviceCustomOrders');

