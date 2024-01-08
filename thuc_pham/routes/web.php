<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CouponsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('/a', function () {
    return view('admin.users.show');
});
// route dashboard
Route::prefix('admin')->name('admin.')->group(function () {
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
    //Routing Coupons
    Route::prefix('coupons')->name('coupons.')->group(function () {
        Route::get('list', [CouponsController::class, 'index'])->name('list');
        Route::get('create', [CouponsController::class, 'create'])->name('create');
        Route::post('/', [CouponsController::class, 'store'])->name('store');
        // Route::get('{id}', [CouponsController::class, 'show'])->name('show');
        Route::get('{id}/edit', [CouponsController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [CouponsController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [CouponsController::class, 'destroy'])->name('destroy');
        Route::post(
            'list',
            [CategoriesController::class, 'search']
        )->name('search');
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
