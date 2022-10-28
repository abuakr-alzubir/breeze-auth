<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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
})->middleware(['auth', 'verified'])->name('dashboard');



// Route::get('/', function () {
    //     return view('welcomeform');
    // });
    Route::get('/create_product', function () {
        return view('create_product');
    });
    Route::get('/search', [productController::class, "search"]);
    Route::get('/create', [productController::class, "create"]);

    require __DIR__.'/auth.php';
