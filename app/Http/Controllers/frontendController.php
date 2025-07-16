<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
     public function homePage(){
        return view('include');
    }
}
