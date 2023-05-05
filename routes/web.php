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
    Route::get("/admin", "index")->name("admin");
    Route::get("/kategori", "kategori")->name("kategori");

});