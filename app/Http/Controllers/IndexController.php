<?php

namespace App\Http\Controllers;

use App\Models\v_new;
use App\Models\banner;
use App\Models\aboutus;
use App\Models\Company;
use App\Models\product;
use App\Models\setting;
use App\Models\presedent;
use App\Models\versionMesAtrr;
use App\Models\VersionMes;
use App\Models\video;
use App\Models\galary;

use App\Models\contactus;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        $banners = banner::all();
        $companies = Company::all();
        $presedents = presedent::all();
        $news  = v_new::all();
        $products = product::all();
        $settings = setting::all();
        $galarys = galary::all();
        $contactus = contactus::all();

        // $id = VersionMesid;

        $VersionMes = VersionMes::first();
        if($VersionMes !=null){
            $versionMesAtrrs=versionMesAtrr::where('version_m_id',$VersionMes->id)->orderBy('id','DESC')->get();

        }else{
            $versionMesAtrrs=versionMesAtrr::get();

        }



        $videos = video::first();
        if($videos !=null){
            $video_news=v_new::where('video_id',$videos->id)->orderBy('id','DESC')->get();

        }else{
            $video_news=v_new::get();

        }


// return $banners;
        return view('frontend.index', compact('banners','companies','presedents','contactus',
        'news','products','versionMesAtrrs','VersionMes','galarys','settings','videos','video_news'));


    }



    public function aboutus(){
        $aboutus = aboutUs::all();
        $products = product::all();
        $contactus = contactus::all();
        return view('frontend.aboutus', compact('aboutus','products','contactus'));
    }



    public function showAttributeFront( $id)
    {

        $VersionMes = VersionMes::find($id);
        $versionMesAtrrs=versionMesAtrr::where('version_m_id',$id)->orderBy('id','DESC')->get();

            return view('frontend.index',compact('VersionMes','versionMesAtrrs'));

    }

    // public function company(){
    //     $companys = company::all();

    //     return view('frontend.aboutus', compact('companys'));
    // }
}
