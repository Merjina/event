<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

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
    return view('welcome');
    
});

Route::get('/fejvoks', [EventController::class, 'index'])->name('home');

Route::get('schedule', [EventController::class, 'schedule'])->name('schedule');
Route::get('speaker', [EventController::class, 'speaker'])->name('speaker');
Route::get('venue', [EventController::class, 'venue'])->name('venue');
Route::get('register', [EventController::class, 'register'])->name('register');
Route::post('/submitdata', [EventController::class, 'submitdata'])->name('submitdata');
Route::get('loginpage', [EventController::class, 'loginpage'])->name('loginpage');
Route::post('/checkLogin', [EventController::class, 'checkLogin'])->name('checkLogin');
Route::get('/profile/{unique_id}', [EventController::class, 'profile'])->name('profile');
Route::post('/updateUserdetails', [EventController::class, 'updateUserdetails'])->name('updateUserdetails');
