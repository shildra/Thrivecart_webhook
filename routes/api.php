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
/*
Route::get('parameters', function (Request $request) {
    return $request->all();
});
*/

Route::get('test', function () {
    return 'hello world';
});

Route::post('/thrivecart', 'ContentController@test');    // Show Splash page

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});