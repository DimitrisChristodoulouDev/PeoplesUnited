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

header('Access-Control-Allow-Origin: *');
header( 'Access-Control-Allow-Headers: Authorization, Content-Type' );

use \Illuminate\Support\Facades\Route;


Route::post('/authenticate/login', 'LoginController@login');
Route::post('/authenticate/register', 'LoginController@register');
Route::post('/authenticate/forgot', 'LoginController@forgot');
Route::get('/test', function (){
    return 'sadasdaad0';
});

