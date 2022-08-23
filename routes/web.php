<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/layout', [SiteController::class, 'layout']);
Route::get('/layout2', [SiteController::class, 'layout2']);

Route::get('/components', [SiteController::class, 'components']);
Route::get('/include', [SiteController::class, 'index2']);
Route::get('/', [SiteController::class, 'index']);
Route::get('/exercicio/2', [SiteController::class, 'exercicio2']);