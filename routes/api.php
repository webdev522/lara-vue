<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['middleware' => 'api'], function() {
	Route::get('cars', function() {
		return App\Cars::latest()->orderBy('created_at', 'desc')->get();
	});
	Route::post('car/store', function(Request $request) {
		return App\Cars::create(['body' => $request->input(['body'])]);
	});
	Route::delete('car/{id}', function($id) {
		return App\Cars::destroy($id);
	});
});