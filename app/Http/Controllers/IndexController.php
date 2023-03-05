<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;
use App\Models\Company;
use App\Models\presedent;
use App\Models\aboutus;

class IndexController extends Controller
{
    public function index(Request $request){
        $banners = banner::all();
        $companies = Company::all();
        $presedents = presedent::all();


// return $banners;
        return view('frontend.index', compact('banners','companies','presedents'));


    }



    public function aboutus(){
        $aboutus = aboutUs::all();

        return view('frontend.aboutus', compact('aboutus'));
    }


    // public function company(){
    //     $companys = company::all();

    //     return view('frontend.aboutus', compact('companys'));
    // }
}
