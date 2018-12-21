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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('author', 'Api\AuthorController@get');
Route::post('author', 'Api\AuthorController@create');
Route::put('author/{id}', 'Api\AuthorController@update');
Route::delete('author/{id}', 'Api\AuthorController@remove');

Route::get('book', 'Api\BookController@get');
Route::post('book', 'Api\BookController@create');
Route::put('book/{id}', 'Api\BookController@update');
Route::delete('book/{id}', 'Api\BookController@remove');
