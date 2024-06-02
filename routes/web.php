<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

 Route::get('/admin', function () {
   
})->middleware(['auth', 'verified'])->name('admin-dashboard');

Route::middleware('auth')->group(function () {

Route::get('/', [ProductController::class, 'logView']);    
Route::get('/admin', [ProductController::class, 'logIn'])->name('admin-dashboard');
Route::get('/add', [ProductController::class, 'create'])->name('add') ; 
Route::post('/add_product', [ProductController::class, 'newProduct'])->name('add_products') ;
Route::get('/product', [ProductController::class, 'Show'])->name('product') ; 
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit') ; 
Route::post('/edit{product}', [ProductController::class, 'update'])->name('updated_post') ;
Route::delete('/deleteUrl/{product}', [ProductController::class, 'destroy'])->name('cart.destroy');


});


 
require __DIR__.'/auth.php';


 
