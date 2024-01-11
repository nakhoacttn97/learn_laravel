<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;

// Router Method
Route::get('/', function () {
    return view('welcome');
});
// Router = Dinh tuyen => Route::get('/path_view', [NameController::class, 'actionName']);
// Route for brand
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/add', [BrandController::class, 'add']);
Route::get('/brand/details/{id}', [BrandController::class, 'details']);
Route::post('/brand/add', [BrandController::class, 'add']);
Route::get('/brand/delete/{id}', [BrandController::class, 'delete']);
Route::get('/brand/edit/{id}', [BrandController::class, 'edit']);
Route::post('/brand/edit/{id}', [BrandController::class, 'edit']);

//Roue for category
Route::get('/category', [CategoryController::class, 'index']);