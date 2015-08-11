<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.home');
    }

    public function services()
    {
    	return view('pages.services');
    }

    public function serviceFoodSafety()
    {
    	return view('pages.food-safety');
    }

    public function serviceFoodSafety01()
    {
    	return view('pages.food-safety-01');
    }

    public function serviceFoodSafety02()
    {
    	return view('pages.food-safety-02');
    }
    
    public function serviceHalaal()
    {
        return view('pages.halaal');
    }

    public function serviceDispatchAndTransport()
    {
        return view('pages.dispatch-and-transport');
    }

    public function serviceQualityControl()
    {
        return view('pages.quality-control');
    }

    public function servicePackaging()
    {
        return view('pages.packaging');
    }

    public function serviceCustomOrders()
    {
        return view('pages.custom-orders');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function products()
    {
        return view('pages.products');
    }
}
