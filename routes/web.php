<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;

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
    // return redirect()->route('home');
    return view('frontend.home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::prefix('/admin')->group(function (){
    Route::middleware(['checkadmin'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.home');
        Route::resource('/category',CategoryController::class);
        Route::resource('/subcategory',SubCategoryController::class);
        Route::resource('/brand',BrandController::class);
        Route::resource('/product',ProductController::class);
        Route::get('/subcategory/by/category',[ProductController::class,'subcat'])->name('subcat.by.cat');
    });
});
