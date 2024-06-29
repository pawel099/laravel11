<?php

 use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.home');
 });
 


 
Route::middleware(['auth','can:is_admin'])->group(function () {

    
Route::get('/admin', [ProductsController::class, 'index'])->name('admin-dashboard');
Route::get('/add', [ProductsController::class, 'store'])->name('create_product'); 
Route::post('/add_products', [ProductsController::class, 'create'])->name('add') ;
Route::get('/product', [ProductsController::class, 'Show'])->name('product') ; 
Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('edit') ; 
Route::post('/edit{product}', [ProductsController::class, 'update'])->name('updated_post') ;
Route::delete('/deleteUrl/{product}', [ProductsController::class, 'destroy'])->name('cart.destroy');


});


Auth::routes(['verify' => true]);
require __DIR__.'/auth.php';

 
