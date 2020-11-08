<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\Http\Controllers\CandidateController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('candidates', 'App\Http\Controllers\CandidateController@index');
Route::get('candidates/{id}', 'App\Http\Controllers\CandidateController@show');
Route::post('candidates', 'App\Http\Controllers\CandidateController@store');
Route::put('candidates/{id}', 'App\Http\Controllers\CandidateController@update');
Route::delete('candidates/{id}', 'App\Http\Controllers\CandidateController@delete');