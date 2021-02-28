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


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){

	Route::get('/home',[App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');

	Route::prefix('products')->group(function(){
		Route::get('/view',[App\Http\Controllers\Backend\ProductController::class, 'view'])->name('view-product');
		Route::get('/add',[App\Http\Controllers\Backend\ProductController::class, 'add'])->name('add-product');
		Route::post('/store',[App\Http\Controllers\Backend\ProductController::class, 'store'])->name('store-product');
		Route::get('/edit/{id}',[App\Http\Controllers\Backend\ProductController::class, 'edit'])->name('edit-product');
		Route::post('/update/{id}',[App\Http\Controllers\Backend\ProductController::class, 'update'])->name('update-product');
		Route::get('/delete/{id}',[App\Http\Controllers\Backend\ProductController::class, 'delete'])->name('delete-product');
	});

});
