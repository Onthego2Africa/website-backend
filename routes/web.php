<?php

use Illuminate\Support\Facades\Route;

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

/**
 * Stale
 * 
 * 
 * @return \Illuminate\Http\Response
 * 
 * @response 200 {
 * "returns": "success page"
 * }
 */
Route::get('/', function () {
    return view('welcome');
});
