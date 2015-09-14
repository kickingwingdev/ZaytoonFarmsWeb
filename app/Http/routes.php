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

/*
Main Pages
 */

get('/', 'PagesController@home');
get('services', 'PagesController@services');
get('products', 'PagesController@products');
get('about', 'PagesController@about');
get('news', 'PagesController@news');

get('contact', 'ContactController@showContact');
post('contact', 'ContactController@sendContact');


/*
Services and Info
 */

get('food-safety', 'PagesController@serviceFoodSafety');
get('food-safety-01', 'PagesController@serviceFoodSafety01');
get('food-safety-02', 'PagesController@serviceFoodSafety02');
get('halaal', 'PagesController@serviceHalaal');
get('dispatch-and-transport', 'PagesController@serviceDispatchAndTransport');
get('packaging', 'PagesController@servicePackaging');
get('partners', 'PagesController@servicePartners');

/*
Fresh Retail Range
 */

get('fresh-retail-whole-bird', 'PagesController@productFreshRetailWholeBird');
get('fresh-retail-drum-6', 'PagesController@productFreshRetailDrum6');
get('fresh-retail-drum-10', 'PagesController@productFreshRetailDrum10');
get('fresh-retail-thigh-4', 'PagesController@productFreshRetailThigh4');
get('fresh-retail-thigh-6', 'PagesController@productFreshRetailThigh6');
get('fresh-retail-fillet-4', 'PagesController@productFreshRetailFillet4');
get('fresh-retail-fillet-10', 'PagesController@productFreshRetailFillet10');
get('fresh-retail-wing-6', 'PagesController@productFreshRetailWing6');
get('fresh-retail-wing-12', 'PagesController@productFreshRetailWing12');
get('fresh-retail-leg-quarter', 'PagesController@productFreshRetailLegQuarter');
get('fresh-retail-breast', 'PagesController@productFreshRetailBreast');
get('fresh-retail-braai-pack', 'PagesController@productFreshRetailBraaiPack');
get('fresh-retail-drum-thigh', 'PagesController@productFreshRetailDrumThigh');

/*
Fresh Added Value Range
 */

get('fresh-added-value-thigh-kebabs', 'PagesController@productFreshAddedValueThighKebabs');
get('fresh-added-value-mini-kebabs', 'PagesController@productFreshAddedValueMiniKebabs');
get('fresh-added-value-buffalo-wings', 'PagesController@productFreshAddedValueBuffaloWings');
get('fresh-added-value-deboned-skewered-thighs', 'PagesController@productFreshAddedValueDebonedSkeweredThighs');
get('fresh-added-value-skewered-thighs', 'PagesController@productFreshAddedValueSkeweredThighs');
get('fresh-added-value-skewered-wings', 'PagesController@productFreshAddedValueSkeweredWings');
get('fresh-added-value-skewered-winglets', 'PagesController@productFreshAddedValueSkeweredWinglets');
get('fresh-added-value-deboned-whole-birds', 'PagesController@productFreshAddedValueDebonedWholeBirds');
get('fresh-added-value-fillet-kebabs', 'PagesController@productFreshAddedValueFilletKebabs');

/*
Fresh Catering Range
 */

get('fresh-catering-fillets', 'PagesController@productFreshCateringFillets');
get('fresh-catering-drumsticks', 'PagesController@productFreshCateringDrumsticks');
get('fresh-catering-thighs', 'PagesController@productFreshCateringThighs');
get('fresh-catering-breasts', 'PagesController@productFreshCateringBreasts');
get('fresh-catering-leg-quarters', 'PagesController@productFreshCateringLegQuarters');
get('fresh-catering-wings', 'PagesController@productFreshCateringWings');
get('fresh-catering-braai-pack', 'PagesController@productFreshCateringBraaiPack');

/*
Giblets Range
 */

get('fresh-retail-gizzards', 'PagesController@productFreshRetailGizzards');
get('fresh-retail-livers', 'PagesController@productFreshRetailLivers');
get('fresh-retail-hearts', 'PagesController@productFreshRetailHearts');
get('fresh-retail-necks', 'PagesController@productFreshRetailNecks');
get('fresh-catering-livers', 'PagesController@productFreshCateringLivers');
get('fresh-catering-hearts', 'PagesController@productFreshCateringHearts');
get('fresh-catering-necks', 'PagesController@productFreshCateringNecks');
get('fresh-catering-gizzards', 'PagesController@productFreshCateringGizzards');


