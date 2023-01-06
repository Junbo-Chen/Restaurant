<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
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
Route::get('bestellen', [OrderController::class , 'index'])->name('bestellen');
Route::post('order', [OrderController::class , 'store'])->name('store');
Route::post('payment', [PaymentController::class, 'index'])->name('payment');


Route::middleware('auth')->group(function(){
    Route::get('kitchen', [OrderController::class , 'kitchen'])->name('kitchen');
    Route::get('bar', [OrderController::class , 'bar'])->name('bar');
    Route::put('order/{kitchen}', [OrderController::class , 'update'])->name('order.update');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
