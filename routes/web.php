<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/debug', function(){
    dd(config('database.opensearch.hosts'));
});