<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $variable = 10;
    $variable = $variable + 10;
    return view('welcome');
});
