<?php

use App\Http\Controllers\OpenSearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get('/opensearch/test', [OpenSearchCtrl::class, 'testConnection']);
// Route::get('/getLogs',[OpenSearchCtrl::class,'getLogs']);

Route::get('/search', [OpenSearchController::class, 'search']);

