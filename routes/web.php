<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with('header', view('header'));
})->name('welcome');

Route::get('/connection', [ConnectionController::class, 'displayConnectionForm'])->name('connection.form');

Route::post('/connection/check', [ConnectionController::class, 'checkConnection'])->name('connection.check');

Route::post('/connection/signin', [ConnectionController::class, 'signIn'])->name('connection.signin');
Route::post('/connection/signInValidate', [ConnectionController::class, 'signInValidate'])->name('connection.signinvalidate');

Route::get('/connection/deconnection', [ConnectionController::class, 'deconnection'])->name('connection.deconnection');
