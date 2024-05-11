<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendController;
 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



    Route::middleware('auth')->group(function () {
    Route::get('/admin', [ProductController::class, 'logIn'])->name('admin-dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});
Route::get('/contakt', [SendController::class, 'index']);
Route::post('contakt_message', [SendController::class, 'store'])->name('send_post');
 
Route::get('/', [ProductController::class, 'index'])->name('product_key');
 
require __DIR__.'/auth.php';


