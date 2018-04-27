<?php

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->resource('seo', 'SeoController');

Route::post('/test', function (Request $request) {

});
*/

Route::get('/test', function (Request $request) {
    return json_encode('Esta Funcionando', 1);
});

Route::post('/seo', 'SeoController@store');
