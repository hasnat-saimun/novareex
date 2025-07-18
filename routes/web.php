<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontendController;

Route::get('/', function () {
    return view('frontend.dashboard.homePageTrade');
});


Route::get('/view',[
    frontendController::class,
    'homePage'
])->name('homePage');


