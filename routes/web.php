<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;

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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/private-event', function () {
    return view('private-event');
})->name('private-event');

require __DIR__.'/auth.php';

Route::get('/profile',[ProfileController::class,'index'])->name('profile');

Route::post('/event/create',[EventController::class,'create'])->name('createEvent');
