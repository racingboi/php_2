<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CouponsController;
use App\Http\Controllers\admin\SubcategoryController;
use App\Http\Controllers\admin\crawl_data;
use App\Http\Controllers\admin\DashbardController;
use  App\Http\Controllers\web\index;
use  App\Http\Controllers\web\CartController;
use  App\Http\Controllers\GHNController;
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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// route dashboard
Route::prefix('admin')->name('admin.')->middleware(['auth', 'CheckAdminRole'])->group(function () {
    Route::get('dashboard', [DashbardController::class, 'index'])->middleware(['auth', 'verified'])
        ->name('dashboard');
    // Routing product
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('list', [ProductController::class, 'index'])->name('list');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('/', [ProductController::class, 'store'])->name('store');
        Route::get('{id}', [ProductController::class, 'show'])->name('show');
        Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
        Route::post('list', [ProductController::class, 'search'])->name('search');
    });
    //Routing Categories
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('list', [CategoriesController::class, 'index'])->name('list');
        Route::get('create', [CategoriesController::class, 'create'])->name('create');
        Route::post('/', [CategoriesController::class, 'store'])->name('store');
        // Route::get('{id}', [CategoriesController::class, 'show'])->name('show');
        Route::get('{id}/edit', [CategoriesController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [CategoriesController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [CategoriesController::class, 'destroy'])->name('destroy');
        Route::post('list', [CategoriesController::class, 'search'])->name('search');
    });
    //Routing sub Categories
    Route::prefix('subcategories')->name('subcategories.')->group(function () {
        Route::get('list', [SubcategoryController::class, 'index'])->name('list');
        Route::get('create', [SubcategoryController::class, 'create'])->name('create');
        Route::post('/', [SubcategoryController::class, 'store'])->name('store');
        // Route::get('{id}', [SubcategoryController::class, 'show'])->name('show');
        Route::get('{id}/edit', [SubcategoryController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [SubcategoryController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [SubcategoryController::class, 'destroy'])->name('destroy');
        Route::post('list', [SubcategoryController::class, 'search'])->name('search');
    });
    //Routing Coupons
    Route::prefix('coupons')->name('coupons.')->group(function () {
        Route::get('list', [CouponsController::class, 'index'])->name('list');
        Route::get('create', [CouponsController::class, 'create'])->name('create');
        Route::post('/', [CouponsController::class, 'store'])->name('store');
        // Route::get('{id}', [CouponsController::class, 'show'])->name('show');
        Route::get('{id}/edit', [CouponsController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [CouponsController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [CouponsController::class, 'destroy'])->name('destroy');
        Route::post('list', [CouponsController::class, 'search'])->name('search');
    });
    //Routing orders
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('list', [OrderController::class, 'index'])->name('list');
        Route::get('create', [OrderController::class, 'create'])->name('create');
        Route::post('/', [OrderController::class, 'store'])->name('store');
        Route::get('{id}', [OrderController::class, 'show'])->name('show');
        Route::get('{id}/edit', [OrderController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [OrderController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [OrderController::class, 'destroy'])->name('destroy');
    });
    //Routing Posts

    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('list', [PostsController::class, 'index'])->name('list');
        Route::get('create', [PostsController::class, 'create'])->name('create');
        Route::post('/', [PostsController::class, 'store'])->name('store');
        Route::get('{id}', [PostsController::class, 'show'])->name('show');
        Route::get('{id}/edit', [PostsController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [PostsController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [PostsController::class, 'destroy'])->name('destroy');
    });

    //Routing User
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/list', [UserController::class, 'index'])->name('list');
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('{id}', [UserController::class, 'show'])->name('show');
        Route::put('{id}', [UserController::class, 'Status'])->name('status');
        Route::get('{id}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('destroy');
        Route::post('list', [UserController::class, 'search'])->name('search');
    });
});
Route::get('crawlDataProducts', [crawl_data::class, 'crawlDataProducts']);
Route::get('crawlDataCategory', [crawl_data::class, 'crawlDataCategory']);
Route::get('/', [index::class, 'home'])->name('home');
// Route::match(['get', 'post'], 'detail/{id}', [index::class, 'detail'])->name('detail');
Route::get('detail/{id}', [index::class, 'detail'])->name('detail');

// cart
Route::prefix('cart')->middleware('auth')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'cart'])->name('list');
    Route::delete('delete/{id}', [CartController::class, 'deleteCartItem'])->name('delete');
    Route::post('deleteTC', [CartController::class, 'deleteTC'])->name('deleteTC');
    Route::post('{productId}/{quantity}', [CartController::class, 'addCart'])->name('add');
    Route::post('add', [CartController::class, 'detail_add'])->name('detail_add');
    Route::post('update', [CartController::class, 'updateCartItem'])->name('update');
});
// Route::get('cart', [CartController::class, 'cart'])->name('list');
route::get('api', [GHNController::class, 'createShippingOrder']);
