<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::controller(UserController::class)->group(function(){
    Route::middleware(['isLogin'])->group(function(){
        Route::get('/', 'viewMain')->name('home');
        Route::get('/detail/{id}', 'detail')->name('detail');
        Route::get('/cart', 'cart')->name('cart');
    });
});

Route::controller(AdminController::class)->group(function(){
    Route::middleware(['auth', 'isLoginAdmin'])->group(function(){
        Route::get("/admin", "viewHome")->name("view.home");
        Route::get("/create", "viewBarang")->name("view.barang");
        Route::post("/create", "postBarang")->name("post.barang");
        Route::get("/edit/{id}", "editBarang")->name("edit.barang");
        Route::post("/edit/{id}", "putBarang")->name("put.barang");
        Route::get("/delete/{id}", "deleteBarang")->name("delete.barang");
    });
});

Route::controller(AuthController::class)->group(function(){
    Route::middleware(['guest'])->group(function(){
        Route::get('/login', 'viewLogin')->name('view.login');
        Route::post('/login', 'postLogin')->name('post.login');
    });
    Route::post('/logout', 'postLogout')->name('logout');
});
