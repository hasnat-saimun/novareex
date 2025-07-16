<?php

use App\Http\Controllers\frontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


