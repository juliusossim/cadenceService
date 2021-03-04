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
Route::patch('sequence/{sequence}', 'App\Http\Controllers\SequenceController@update');
Route::delete('sequence/{sequence}', 'App\Http\Controllers\SequenceController@delete');

/*emailsequence*/
Route::get('emailsequence', 'App\Http\Controllers\EmailSequenceController@index');
Route::get('emailsequence/{emailsequence}', 'App\Http\Controllers\EmailSequenceController@show');
Route::post('emailsequence', 'App\Http\Controllers\EmailSequenceController@store');
Route::patch('emailsequence/{emailsequence}', 'App\Http\Controllers\EmailSequenceController@update');
Route::delete('emailsequence/{emailsequence}', 'EmailSequenceController@delete');

/*tasksequence*/
Route::get('tasksequence', 'App\Http\Controllers\TaskSequenceController@index');
Route::get('tasksequence/{tasksequence}', 'App\Http\Controllers\TaskSequenceController@show');
Route::post('tasksequence', 'App\Http\Controllers\TaskSequenceController@store');
Route::patch('tasksequence/{tasksequence}', 'App\Http\Controllers\TaskSequenceController@update');
Route::delete('tasksequence/{tasksequence}', 'App\Http\Controllers\TaskSequenceController@delete');


/*settings*/
Route::get('settings', 'App\Http\Controllers\SettingsController@index');
Route::get('settings/{settings}', 'App\Http\Controllers\SettingsController@show');
Route::post('settings', 'App\Http\Controllers\SettingsController@store');
Route::patch('settings/{settings}', 'App\Http\Controllers\SettingsController@update');
Route::delete('settings/{settings}', 'App\Http\Controllers\SettingsController@delete');
