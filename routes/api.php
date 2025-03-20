<?php

use App\Http\Controllers\OpenSearchCtrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/opensearch/test', [OpenSearchCtrl::class, 'testConnection']);
Route::get('/getLogs',[OpenSearchCtrl::class,'getLogs']);
