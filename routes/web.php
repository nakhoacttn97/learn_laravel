<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

// Router Method
Route::get('/', function () {
    return view('welcome');
});
// Router = Dinh tuyen => Route::get('/path_view', [NameController::class, 'actionName']);
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/add', [BrandController::class, 'add']);
Route::get('/brand/details/{id}', [BrandController::class, 'details']);
Route::post('/brand/add', [BrandController::class, 'add']);
Route::get('/brand/delete/{id}', [BrandController::class, 'delete']);