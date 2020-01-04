<?php
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
Route::prefix('api/v1')
    ->middleware(['bindings'])
    ->namespace('Tdev\CSCAPI\Http\Controllers\Guest')
    ->name('apis.guest.')
    ->group(function(){
        Route::get('countries','CountryController@get_countries')->name('countries');
        Route::get('country/{country}/states','StateController@get_country_states')->name('country_states');
        Route::get('state/{state}/cities','CityController@get_state_cities')->name('state_cities');
});
