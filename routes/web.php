<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', [
        'name' => 'Muhammad Firdaus Banjar',
        'location' => 'Makassar, Sulawesi Selatan',
    ]);
});

Route::get('/profile', [ProductController::class, 'ckeditorTest']);
Route::post('/profile', [ProductController::class, 'ckeditorData'])->name('ckeditor.data');

Route::resource('products', ProductController::class);
