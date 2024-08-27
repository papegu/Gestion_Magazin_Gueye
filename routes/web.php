<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
use App\Http\Controllers\ClientController;

Route::resource('clients', ClientController::class);


Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
use App\Http\Controllers\SaleController;

Route::resource('sales', SaleController::class);
use App\Http\Controllers\ContactController;

Route::resource('contacts', ContactController::class);



