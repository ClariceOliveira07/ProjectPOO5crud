<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ClientController, ServiceController, AppointmentController};

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clients', ClientController::class);
Route::resource('services', ServiceController::class);
Route::resource('appointmentss', AppointmentController::class);