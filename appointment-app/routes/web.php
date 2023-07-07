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
})->name('home');

Route::post('/', App\Http\Controllers\Authentication\AppointmentController::class)->name('clientMakeAppointment');

Route::get('/management', function () {
  return view('./back-office.management');
})->name('appointmentManagement')->middleware('auth');

Route::post('/management', [App\Http\Controllers\Authentication\AppointmentController::class, 'addedByManagement'])->name('managementMakeAppointment');
Route::put('/management', [App\Http\Controllers\Authentication\AppointmentController::class, 'update'])->name('updateAppointment');
Route::delete('/management', [App\Http\Controllers\Authentication\AppointmentController::class, 'delete'])->name('deleteAppointment');

Route::get('/register', App\Http\Controllers\Authentication\RegistrationController::class)->name('register');
Route::post('/register', [App\Http\Controllers\Authentication\RegistrationController::class, 'store']);

Route::get('/login', App\Http\Controllers\Authentication\LoginController::class)->name('login');
Route::post('/login', [App\Http\Controllers\Authentication\LoginController::class, 'authenticate']);

Route::post('/logout', App\Http\Controllers\Authentication\LogoutController::class)->name('logout');