<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontendController;

Route::get('/', function () {
    return view('include');
});


Route::get('/view',[
    frontendController::class,
    'homePage'
])->name('homePage');


