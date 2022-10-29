<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\forntend\HomeController as Forntend;
use App\Http\Controllers\backend\HomeController as Backend;
use App\Http\Controllers\backend\BlogController as Blog;
use App\Http\Controllers\backend\CommentController as BackendComment;
use App\Http\Controllers\backend\ProductController as Product;
use App\Http\Controllers\backend\CategoryController as Category;
use App\Http\Controllers\backend\ColorController as Color;
use App\Http\Controllers\backend\BrandController as Brand;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\backend\UserController as User;
use App\Http\Controllers\CardController;

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

// forntend........................................
Route::get('/', [Forntend::class, 'index'])->name('home');
Route::get('/categories/{category}/product', [Forntend::class, 'productListCategory'])->name('frontend.products.index');
Route::get('/products/{product}', [Forntend::class, 'productDetails'])->name('frontend.products.show');
Route::get('/productdetels', [Forntend::class, 'productdetels'])->name('productdetels');






require __DIR__ . '/auth.php';


Route::middleware('auth')->group(function () {


    Route::prefix('admin')->group(function () {
        Route::get('/', [Backend::class, 'home'])->name('admin.home');



        Route::resource('product', Product::class);
        Route::resource('users', User::class);
    });
});
Route::fallback(function () {
    dd('paglami bondo koro 😠..... ');
});
