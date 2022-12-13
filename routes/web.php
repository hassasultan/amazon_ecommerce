<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\CoupenController;
use App\Http\Controllers\AssignCoupenController;
use App\Http\Controllers\FrontendController;

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

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/product/{slug}', [FrontendController::class, 'details'])->name('product.details');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::prefix('/admin')->group(function (){
    Route::middleware(['checkadmin'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.home');
        Route::resource('/category',CategoryController::class);
        Route::resource('/subcategory',SubCategoryController::class);
        Route::resource('/brand',BrandController::class);
        Route::resource('/product',ProductController::class);
        Route::resource('/section',SectionController::class);
        Route::resource('/coupen',CoupenController::class);
        Route::get('/assign/coupen/{id}',[AssignCoupenController::class,'edit'])->name('assign.coupen.edit');
        Route::post('/assign/coupen/store',[AssignCoupenController::class,'store'])->name('assign.coupen.store');
        Route::get('/subcategory/by/category',[ProductController::class,'subcat'])->name('subcat.by.cat');
    });
});
