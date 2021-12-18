<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarshareController;


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

Route::get('/', [EventController::class,'showDashboard']);

Route::get('/dashboard', [EventController::class,'showDashboard'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/profile',[ProfileController::class,'index'])->name('profile');

Route::get('/event/{id}/detail',[EventController::class,'showEvent']);

Route::post('/event/create',[EventController::class,'create'])->name('createEvent');

Route::post('/event/{id}/participate',[EventController::class,'add_participate']);

Route::delete('/event/{id}/participate/delete',[EventController::class,'cancel_participate']);

Route::post('/event/carshare/create',[CarshareController::class,'create'])->name('createCarshare');

Route::post('/event/carshare/add',[CarshareController::class,'joinCarshare'])->name('joinCarshare');


Route::get('/private-event', function () {
    return view('private-event');
})->name('private-event');
