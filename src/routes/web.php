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
Route::post("/advance", ['as' => 'check.puzzle-advance', 'uses' => 'App\Http\Controllers\PasswordController@advancePuzzle']);

Route::get("/cipher", ['as' => 'question1.question', 'uses' => 'App\Http\Controllers\PuzzleController@question1']);

Route::fallback(function () {
    return view("404"); // template should exists
});