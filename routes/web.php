<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentsController;

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

Route::get('appointments/create/{user}', 'AppointmentsController@create')->name('appointments.create');
Route::get('appointments/show', 'AppointmentsController@show')->name('appointments.show');
Route::post('appointments/show', 'AppointmentsController@store')->name('appointments.store');