<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WarehouseController;
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

Route::get("/supplier", [SupplierController::class, "index"])->name("supplier.index");
Route::get("/supplier/create", [SupplierController::class, "create"])->name("supplier.create");
Route::post("/supplier", [SupplierController::class, "store"])->name("supplier.store");
Route::get("/supplier/{supplier}/edit", [SupplierController::class, "edit"])->name("supplier.edit");
Route::put("/supplier/{supplier}/update", [SupplierController::class, "update"])->name("supplier.update");
Route::delete("/supplier/{supplier}/destroy",[SupplierController::class, "destroy"])->name("supplier.destroy");

Route::get("/warehouse", [WarehouseController::class, "index"])->name("warehouse.index");
Route::get("/warehouse/create", [WarehouseController::class, "create"])->name("warehouse.create");
Route::post("/warehouse", [WarehouseController::class, "store"])->name("warehouse.store");
Route::get("/warehouse/{warehouse}/edit", [WarehouseController::class, "edit"])->name("warehouse.edit");
Route::put("/warehouse/{warehouse}/update", [WarehouseController::class, "update"])->name("warehouse.update");
Route::delete("/warehouse/{warehouse}/destroy",[WarehouseController::class, "destroy"])->name("warehouse.destroy");
