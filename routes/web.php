<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/contato', function () {
    return view('contato');
});



