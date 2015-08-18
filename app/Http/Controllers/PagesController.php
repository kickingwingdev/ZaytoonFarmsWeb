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

    public function productFreshRetailWholeBird()
    {
        return view('pages.products.fresh-retail-whole-bird');
    }

    public function productFreshRetailDrum6()
    {
        return view('pages.products.fresh-retail-drum-6');
    }

    public function productFreshRetailDrum10()
    {
        return view('pages.products.fresh-retail-drum-10');
    }

    public function productFreshRetailThigh4()
    {
        return view('pages.products.fresh-retail-thigh-4');
    }

    public function productFreshRetailThigh6()
    {
        return view('pages.products.fresh-retail-thigh-6');
    }

    public function productFreshRetailFillet4()
    {
        return view('pages.products.fresh-retail-fillet-4');
    }

    public function productFreshRetailFillet10()
    {
        return view('pages.products.fresh-retail-fillet-10');
    }

    public function productFreshRetailWing6()
    {
        return view('pages.products.fresh-retail-wing-6');
    }

    public function productFreshRetailWing12()
    {
        return view('pages.products.fresh-retail-wing-12');
    }

    public function productFreshRetailLegQuarter()
    {
        return view('pages.products.fresh-retail-leg-quarter');
    }

    public function productFreshRetailBreast()
    {
        return view('pages.products.fresh-retail-breast');
    }

    public function productFreshRetailBraaiPack()
    {
        return view('pages.products.fresh-retail-braai-pack');
    }

    public function productFreshRetailDrumThigh()
    {
        return view('pages.products.fresh-retail-drum-thigh');
    }

    public function productFreshAddedValueThighKebabs()
    {
        return view('pages.products.fresh-added-value-thigh-kebabs');
    }

    public function productFreshAddedValueMiniKebabs()
    {
        return view('pages.products.fresh-added-value-mini-kebabs');
    }

    public function productFreshAddedValueBuffaloWings()
    {
        return view('pages.products.fresh-added-value-buffalo-wings');
    }


    public function productFreshAddedValueDebonedSkeweredThighs()
    {
        return view('pages.products.fresh-added-value-deboned-skewered-thighs');
    }

    public function productFreshAddedValueSkeweredThighs()
    {
        return view('pages.products.fresh-added-value-skewered-thighs');
    }

    public function productFreshAddedValueSkeweredWings()
    {
        return view('pages.products.fresh-added-value-skewered-wings');
    }

    public function productFreshAddedValueSkeweredWinglets()
    {
        return view('pages.products.fresh-added-value-skewered-winglets');
    }

    public function productFreshAddedValueDebonedWholeBirds()
    {
        return view('pages.products.fresh-added-value-deboned-whole-birds');
    }

    public function productFreshAddedValueFilletKebabs()
    {
        return view('pages.products.fresh-added-value-fillet-kebabs');
    }
}
