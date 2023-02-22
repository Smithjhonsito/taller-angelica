<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;



Route::get('/', function () {
    return view('home');
});

Route::get('/menu' ,[SessionsController::class,'menu'])->name('menu.menu');

Route::get('/reclutamientos' ,[SessionsController::class,'reclutar'])->name('reclutamientos.reclutar');

Route::get('/register' ,[RegisterController::class,'create'])->name('register.index');
Route::get('/envio' ,[RegisterController::class,'envio'])->name('envio.envio');
Route::post('/register' ,[RegisterController::class,'store'])->name('register.store');
Route::get('/login' ,[SessionsController::class,'create'])->name('login.index');
Route::get('/respuestas' ,[SessionsController::class,'respuesta'])->name('respuestas.respuesta');
Route::post('/login' ,[SessionsController::class,'store'])->name('login.store');

Route::get('/aspirantes' ,[RegisterController::class,'aspirantes'])->name('aspirantes.aspirantes');
