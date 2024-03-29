<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with('header', view('header'));
})->name('welcome');
