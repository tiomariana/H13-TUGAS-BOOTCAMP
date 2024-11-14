<?php

use Illuminate\Support\Facades\Route;

Route::get('/table', function () {
    return view('table');
});

Route::get('/data-tables', function () {
    return view('data-tables');
});

Route::get('/index', function () {
    return view('index'); 
});
