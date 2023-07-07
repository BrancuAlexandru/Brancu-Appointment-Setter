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

Route::get('/', function () {
    return view('/front-office.welcome');
})->name('makeAppointment');

Route::post('/', App\Http\Controllers\Authentication\AppointmentController::class)->name('makeAppointment');
Route::put('/', [App\Http\Controllers\Authentication\AppointmentController::class, 'edit'])->name('editAppointment');

Route::get('/management', function () {
  return view('./back-office.management');
})->name('makeAppointmentManagement')->middleware('auth');

Route::get('/register', App\Http\Controllers\Authentication\RegistrationController::class)->name('register');
Route::post('/register', [App\Http\Controllers\Authentication\RegistrationController::class, 'store']);

Route::get('/login', App\Http\Controllers\Authentication\LoginController::class)->name('login');
Route::post('/login', [App\Http\Controllers\Authentication\LoginController::class, 'authenticate']);

Route::post('/logout', App\Http\Controllers\Authentication\LogoutController::class)->name('logout');