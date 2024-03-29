<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductManagingController;

Route::get('/', function () {
    return view('welcome')->with('header', view('header'));
})->name('welcome');

Route::get('/connection', [ConnectionController::class, 'displayConnectionForm'])->name('connection.form');

Route::post('/connection/check', [ConnectionController::class, 'checkConnection'])->name('connection.check');

Route::post('/connection/signin', [ConnectionController::class, 'signIn'])->name('connection.signin');
Route::post('/connection/signInValidate', [ConnectionController::class, 'signInValidate'])->name('connection.signinvalidate');

Route::get('/connection/deconnection', [ConnectionController::class, 'deconnection'])->name('connection.deconnection');

Route::get('/products/display', [ProductsController::class, 'products'])->name('products.products');
Route::get('/products/addBasket', [ProductsController::class, 'addBasket'])->name('products.addBasket');

Route::get('/productManaging/addForm', [ProductManagingController::class, 'add'])->name('productManaging.add');

Route::post('/productManaging/addProduct', [ProductManagingController::class, 'store'])->name('productManaging.addProduct');

Route::put('/productManaging/update/{product}', [ProductManagingController::class, 'update'])->name('productManaging.update');

Route::delete('/productManaging/delete/{product}', [ProductManagingController::class, 'destroy'])->name('productManaging.delete');
