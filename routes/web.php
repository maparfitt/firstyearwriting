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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('appointments', AppointmentsController::class);

Route::resource('timeslots', TimeslotsController::class);

Route::resource('students', StudentsController::class);

Route::get('signups/create', 'SignupsController@create')->middleware('auth')->name('signups.create');
Route::post('signups', 'SignupsController@store')->middleware('auth')->name('signups');

Route::get('payments/create', 'PaymentsController@create')->middleware('auth')->name('payments.create');
Route::post('payments', 'PaymentsController@store')->middleware('auth')->name('payments');

Route::get('notifications', 'UserNotificationsController@show')->middleware('auth');