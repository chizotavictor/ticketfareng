<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MapController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleLogin as GoogleController;
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
})->name('welcome');

Route::get('/find', function() {
  return view('find-events');
})->name('look.for-events');

Route::post('/lookup/find/places', [MapController::class, 'findPlaces'])
  ->name('gmap.location.place.search');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])
  ->name('google.signIn');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function() {
  Route::get('/home', [HomeController::class, 'index'])->name('home');

  Route::group(['prefix' => 'office'], function() {

    Route::get('events/create', [EventController::class, 'createEventPage'])->name('office.event.create.page');
  });

  Route::get('logout', [HomeController::class, 'logout'])->name('logout');
});
