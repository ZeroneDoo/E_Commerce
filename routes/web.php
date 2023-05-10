<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/home', function () {
    return view('frontend.Homepage');
});

Route::controller(AdminController::class)->group(function(){
    Route::get("/admin", "viewHome")->name("view.home");
    Route::get("/create", "viewBarang")->name("view.barang");
    Route::post("/create", "postBarang")->name("post.barang");
    Route::get("/edit/{id}", "editBarang")->name("edit.barang");
    Route::post("/edit/{id}", "putBarang")->name("put.barang");
    Route::get("/delete/{id}", "deleteBarang")->name("delete.barang");
});