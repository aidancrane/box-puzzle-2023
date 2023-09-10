<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", ['as' => 'welcome', 'uses' => 'App\Http\Controllers\PasswordController@welcome'])->withoutMiddleware('password');

Route::post("/password", ['as' => 'check.password', 'uses' => 'App\Http\Controllers\PasswordController@checkPassword'])->withoutMiddleware('password');



Route::fallback(function () {
    return view("404"); // template should exists
});