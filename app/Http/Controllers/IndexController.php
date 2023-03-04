<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;
use App\Models\Company;
use App\Models\presedent;

class IndexController extends Controller
{
    public function index(Request $request){
        $banners = banner::all();
        $companies = Company::all();
        $presedents = presedent::all();

// return $banners;
        return view('frontend.index', compact('banners','companies','presedents'));


    }
}
