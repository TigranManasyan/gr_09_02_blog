<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function() {
    Route::get('/register',[AuthController::class, "register_view"])->name("register_view");
    Route::post('/register/store',[AuthController::class, "register"])->name("register");
    Route::get('/login',[AuthController::class, "login_view"])->name("login_view");
    Route::post('/login/store',[AuthController::class, "login"])->name("login");
});


Route::middleware(['auth'])->group(function() {
    Route::get('/logout',[AuthController::class, "logout"])->name("logout");
    Route::get('/home', function() {
        return view("dash.index");
    })->name("home");


    Route::prefix("products")->group(function() {
        Route::get("/", [ProductController::class, "index"])->name("product-list");
        Route::get("/new", [ProductController::class, "create"])->name("product-create");
        Route::post("/new/store", [ProductController::class, "store"])->name("product-store");
    });

});


Route::get('/del/{id}', [ProductController::class, "delete"]);
