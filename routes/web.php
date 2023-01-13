<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\GroupController;


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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/store-group',[GroupController::class,'store']);
Route::post('/store-leader',[LeaderController::class,'store'])->name('store-leader');