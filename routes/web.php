<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontendController;

Route::get('/', function () {
    return view('frontend.dashboard.homePageTrade');
})->name('home');


Route::get('/view',[
    frontendController::class,
    'homePage'
])->name('homePage');

Route::get('/contact',[
    frontendController::class,
    'contactPage'
])->name('contactPage');


Route::get('/service',[
    frontendController::class,
    'service'
])->name('service');

Route::get('/service-details',[
    frontendController::class,
    'serviceDetails'
])->name('serviceDetails');

Route::get('/about-us',[
    frontendController::class,
    'aboutUs'
])->name('aboutUs');


