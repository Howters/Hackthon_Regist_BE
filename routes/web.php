<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MemberController;

use Illuminate\Support\Facades\Auth;

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
})->name('homepage');

Route::get('/email', [EmailController::class,'index'])->name('email');
Route::get('/register', function () {
    return view('register');})->name('register');



    Route::middleware(['login'])->group(function () {
        Route::get('/dashboard',function(){

            $group = Auth::user();
            $count =1;
         return view('dashboard', compact('group','count')); })->name('dashboard');
        // Route::get('/dashboard', 'DashboardController@index');
         Route::get('/payment',function(){$group = Auth::user();return view('payment' , compact('group'));})->name('payment');
         Route::get('/timeline',function(){return view('timeline'); })->name('timeline');
         Route::get('/logout',function(){return view('logout'); })->name('logout');              
         Route::post('/log-out',[LoginController::class,'logout'])->name('log-out');
        });
        Route::middleware(['haslogin'])->group(function () {
            Route::post('/store-group',[GroupController::class,'store'])->name('store-group');;
            Route::post('/store-leader',[LeaderController::class,'store'])->name('store-leader');
            Route::post('/store-bukti',[LeaderController::class,'edit'])->name('store-bukti');
            Route::post('/store-member',[MemberController::class,'store'])->name('store-member');
        Route::get('/login',function(){return view('login');})->name('login');
    });
    
    Route::post('/login-auth',[LoginController::class,'login'])->name('login-auth');

