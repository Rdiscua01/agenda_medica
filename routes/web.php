<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/historialdoctor', [AuthController::class, 'showD_historialForm'])->name('D_historial');
Route::get('/reservadoctor', [AuthController::class, 'showD_reservaForm'])->name('D_reserva');



Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

