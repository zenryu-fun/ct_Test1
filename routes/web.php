<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\SearchController;

Route::get('/', [ContactController::class, 'index']);
Route::post('/check', [ContactController::class, 'check']);
Route::post('/thanks', [CheckController::class, 'create']);
Route::post('/', [ThanksController::class, 'index']); 

Route::get('/search', [SearchController::class, 'search']);
Route::post('/search', [SearchController::class, 'search']);
Route::post('/search_delete', [SearchController::class, 'delete']);
