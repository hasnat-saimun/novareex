<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
     public function homePage(){
        return view('frontend.dashboard.homePageTrade');
    }
    
     public function contactPage(){
        return view('frontend.dashboard.contactPage');
    }

    
     public function service(){
        return view('frontend.dashboard.service');
    }


     public function serviceDetails(){
        return view('frontend.dashboard.serviceDetails');
    }

     public function aboutUs(){
        return view('frontend.dashboard.aboutUs');
    }

}
