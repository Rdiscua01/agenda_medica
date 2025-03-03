<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/historial', [AuthController::class, 'showC_historialForm'])->name('Chistorial');
Route::get('/pacientebienvenido', [AuthController::class, 'showClandingForm'])->name('Clanding');
Route::get('/doctorbienvenido', [AuthController::class, 'showDlandingForm'])->name('Dlanding');
Route::get('/dbabienvenido', [AuthController::class, 'showDBAlandingForm'])->name('DBAlanding');


Route::get('/historialdoctor', [AuthController::class, 'showD_historialForm'])->name('D_historial');
Route::get('/reservadoctor', [AuthController::class, 'showD_reservaForm'])->name('D_reserva');



Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

