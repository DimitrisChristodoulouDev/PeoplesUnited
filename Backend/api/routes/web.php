<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

header('Access-Control-Allow-Origin: *');
header( 'Access-Control-Allow-Headers: Authorization, Content-Type, AuthToken' );

Route::post('/authenticate/login', 'UserLoginController@login');// To add a route to middleware:   ->middleware('authentication');
Route::post('/authenticate/register', 'LoginController@register');
Route::post('/authenticate/forgot', 'LoginController@forgot');
Route::post('/test', function (){
    echo response()->json(['a'=>'asd'], 200);
});

Route::get('/test', function (){
    echo response()->json([],404);
});

