<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function () {
    Route::view('/', 'dashboard')->name('home');
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
});

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::post("/login", [AuthController::class, "loginPost"])->name("login.post");

Route::get("/register", [AuthController::class, "register"])->name("register");
Route::post("/register", [AuthController::class, "registerPost"])->name("register.post");

Route::get("/category", [CategoryController::class, "index"])->name("category.index");
Route::get("/category/create", [CategoryController::class, "create"])->name("category.create");
Route::post("/category", [CategoryController::class, "store"])->name("category.store");
Route::get("/category/{category}/edit", [CategoryController::class, "edit"])->name("category.edit");
Route::put("/category/{category}/update", [CategoryController::class, "update"])->name("category.update");
Route::delete("/category/{category}/destroy",[CategoryController::class, "destroy"])->name("category.destroy");
