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
use App\Models\say;

use App\Models\contactus;
use App\Models\Detail;
use App\Models\Mainbanner;
use App\Models\galaryBanner;

use App\Models\score;
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
        $says    = say::all();
        $scores  = score::all();
        $mainbanner = Mainbanner::first();

        // $id = VersionMesid;

        $VersionMes = VersionMes::first();
        if($VersionMes !=null){
            $versionMesAtrrs=versionMesAtrr::where('version_m_id',$VersionMes->id)->orderBy('id','DESC')->get();

        }else{
            $versionMesAtrrs=versionMesAtrr::get();

        }



        $videos = video::first();
        if($videos !=null){
            $video_news=v_new::where('video_id',$videos->id)->orderBy('id','DESC')->limit(3)->get();

        }else{
            $video_news=v_new::get();

        }


// return $banners;
        return view('frontend.index', compact('banners','companies','presedents','contactus',
        'news','products','versionMesAtrrs','VersionMes','galarys','settings','videos','video_news','says','scores','mainbanner'));


    }



    public function aboutus(){
        $aboutus = aboutUs::all();
        $products = product::all();
        $contactus = contactus::all();
        $says    = say::all();
        $scores  = score::all();

        return view('frontend.aboutus', compact('aboutus','products','contactus','says','scores'));
    }

    // public function detail(){
    //     $detail = Detail::all();
    //     return view('frontend.company_details', compact('detail'));
    // }



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


    public function companyDetail($id){
        // return $id;
        $company=Company::where('id',$id)->first();
        // $new_id = v_new::select();
        $detail=Detail::where('new_id',$id)->orWhere('company_id',$id)->first();
        // return $detail;

        $contactus = contactus::all();
        $banners = banner::all();

        // return $company;
            return view('frontend.company_details',compact('company','contactus','banners','detail'));

      }


      public function galaryBanner($id){
        // $categories = Category::with(['products'])->where('slug', $slug)->first();
        $contactus = contactus::all();
        $galary=galary::with('galaryBanner')->where('id',$id)->first();
        $galaryBanners = galaryBanner::where(['galary_id'=>$galary->id])->get();;

            return view('frontend.galaryBannerFront',compact('galaryBanners','contactus'));
   
      }
}
