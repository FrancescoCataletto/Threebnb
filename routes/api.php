<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')
    ->prefix('apartments')
    ->group(function(){
    Route::get('/', 'PageController@getApartments');
    Route::get('/paginate', 'PageController@getApartmentsPaginate');
    Route::get('/sponsored', 'PageController@getSponsoredApartments');
    Route::get('/sponsoredPaginate', 'PageController@getSponsoredApartmentsPaginate');
    Route::get('/services', 'PageController@getServices');
    Route::get('/filteredApartments/{rooms}/{beds}/{distance}/{lat}/{lon}', 'PageController@apartmentsWithFilters');
    Route::get('/filteredSponsored/{rooms}/{beds}/{distance}/{lat}/{lon}', 'PageController@sponsoredWithFilters');
    Route::get('/apartment-details/?id={id}', 'PageController@show');
    // Route::get('/prova-1/{services}', 'PageController@apWithServices');
});
