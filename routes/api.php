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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

/*sequence*/
Route::get('sequence', 'App\Http\Controllers\SequenceController@index');
Route::get('sequence/{sequence}', 'App\Http\Controllers\SequenceController@show');
Route::post('sequence', 'App\Http\Controllers\SequenceController@store');
Route::put('sequence/{sequence}', 'App\Http\Controllers\SequenceController@update');
Route::delete('sequence/{sequence}', 'App\Http\Controllers\SequenceController@delete');

/*emailSequence*/
Route::get('emailSequence', 'App\Http\Controllers\EmailSequenceController@index');
Route::get('emailSequence/{emailSequence}', 'App\Http\Controllers\EmailSequenceController@show');
Route::post('emailSequence', 'App\Http\Controllers\EmailSequenceController@store');
Route::put('emailSequence/{emailSequence}', 'App\Http\Controllers\emailSequenceController@update');
Route::delete('emailSequence/{emailSequence}', 'EmailSequenceController@delete');

/*taskSequence*/
Route::get('taskSequence', 'App\Http\Controllers\TaskSequenceController@index');
Route::get('taskSequence/{taskSequence}', 'App\Http\Controllers\TaskSequenceController@show');
Route::post('taskSequence', 'App\Http\Controllers\TaskSequenceController@store');
Route::put('taskSequence/{taskSequence}', 'App\Http\Controllers\TaskSequenceController@update');
Route::delete('taskSequence/{taskSequence}', 'App\Http\Controllers\TaskSequenceController@delete');
