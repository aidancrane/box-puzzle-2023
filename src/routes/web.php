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

Route::get("/rules", ['as' => 'check.rules', 'uses' => 'App\Http\Controllers\PuzzleController@rules']);


Route::get("/cipher", ['as' => 'question1.question', 'uses' => 'App\Http\Controllers\PuzzleController@question1']);
Route::post("/cipher", ['as' => 'question1.answer', 'uses' => 'App\Http\Controllers\PuzzleController@answer1']);

Route::get("/sstv", ['as' => 'question2.question', 'uses' => 'App\Http\Controllers\PuzzleController@question2']);
Route::post("/sstv", ['as' => 'question2.answer', 'uses' => 'App\Http\Controllers\PuzzleController@answer2']);

Route::get("/maze", ['as' => 'question3.question', 'uses' => 'App\Http\Controllers\PuzzleController@question3']);
Route::post("/maze", ['as' => 'question3.answer', 'uses' => 'App\Http\Controllers\PuzzleController@answer3']);

Route::get("/maze2", ['as' => 'question4.question', 'uses' => 'App\Http\Controllers\PuzzleController@question4']);
Route::post("/maze2", ['as' => 'question4.answer', 'uses' => 'App\Http\Controllers\PuzzleController@answer4']);

Route::get("/box", ['as' => 'question5.question', 'uses' => 'App\Http\Controllers\PuzzleController@question5']);
Route::post("/box", ['as' => 'question5.answer', 'uses' => 'App\Http\Controllers\PuzzleController@answer5']);

Route::fallback(function () {
    return view("404"); // template should exists
});