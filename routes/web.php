<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class]);

Route::get('/series/', [SeriesController::class, 'index']);
Route::get('/series/create', [SeriesController::class, 'create']);

Route::get('/category/', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);