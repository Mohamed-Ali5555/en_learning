<?php

namespace App\Http\Controllers;
use App\Models\Detail;

use App\Models\report_new;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $report_news = report_new::all();
        return view('backend.report_news.index', compact('report_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.report_news.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // return $request->all();
       $data = $request->validate([
        'title' => 'required|string',
        'desc' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'title_detail' => 'required|string',
        'desc_detail' => 'required|string',
    ]);

    $data['image'] = Storage::putFile("report_news",$data['image']);

    $data['banner_img'] = Storage::putFile("report_news",$data['banner_img']);

    report_new::create([
        'title' => $request->title,
        'desc' => $request->desc,
        'image'=>$data['image'],
        'title_detail' => $request->title_detail,
        'desc_detail' => $request->desc_detail,
        'banner_img'=>$data['banner_img'],
        // 'img'=>$data['img'],

    ]);


    $report_new_id = report_new::latest()->first()->id;  // this code give invoices id to invoices details
  
   
 
    Detail::create([
        'report_new_id'=>$report_new_id,
        'title_detail' => $request->title_detail,
        'desc_detail' => $request->desc_detail,
        'banner_img'=>$data['banner_img'],
        // 'img'=>$data['img'],

    ]);

    return redirect()->route('report_news.index')->with('success','report_new has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\report_new  $report_new
     * @return \Illuminate\Http\Response
     */
    public function show(report_new $report_new)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\report_new  $report_new
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $report_news = report_new::find($id);

        return view('backend.report_news.edit',compact('report_news'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\report_new  $report_new
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'title_detail' => 'required|string',
            'desc_detail' => 'required|string',

            'desc' => 'required|string',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'title_detail' => 'required|string',
            // 'desc_detail' => 'required|string',
        ]);
        $data = $request->all();

        $report_new = report_new::findOrFail($id);

        if ($request->has("image")) {
            Storage::delete($report_new->image);
            $data['image'] = Storage::putFile("report_news",$data['image']);
       
            $report_new->update([
                'title'=>$request->title,
                'title_detail'=>$request->title_detail,
                'desc_detail'=>$request->desc_detail,
                'desc'=>$request->desc,

                'image'=>$data['image'],
            ]);

            
        }else{
            $report_new->update([
                'title'=>$request->title,
                'title_detail'=>$request->title_detail,
                'desc_detail'=>$request->desc_detail,
                'desc'=>$request->desc,
               ]);
        }
        if ($request->has("banner_img")) {
            Storage::delete($report_new->banner_img);
            $data['banner_img'] = Storage::putFile("report_news",$data['banner_img']);
       
            $report_new->update([
                'title'=>$request->title,
                'title_detail'=>$request->title_detail,
                'desc_detail'=>$request->desc_detail,
                'desc'=>$request->desc,

                'banner_img'=>$data['banner_img'],
            ]);

            $detail = Detail::where('report_new_id',$id);  
            $report_new_id = report_new::latest()->first()->id;  // this code give invoices id to invoices details
    
            $detail->update([
                'report_new_id'=>$report_new_id,
                'title_detail' => $request->title_detail,
                'desc_detail' => $request->desc_detail,
                'banner_img'=>$data['banner_img'],
                // 'img'=>$data['img'],
            ]);
        }else{
            
            $report_new->update([
                'title'=>$request->title,
                'title_detail'=>$request->title_detail,
                'desc_detail'=>$request->desc_detail,
                'desc'=>$request->desc,
            ]);
            $detail = Detail::where('report_new_id',$id);  
            $report_new_id = report_new::latest()->first()->id;  // this code give invoices id to invoices details
    
            $detail->update([
                'report_new_id'=>$report_new_id,
                'title_detail' => $request->title_detail,
                'desc_detail' => $request->desc_detail,
                // 'banner_img'=>$data['banner_img'],/
                // 'img'=>$data['img'],
            ]);
        }
     
        return redirect()->route('report_news.index')->with('success','report_new has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\report_new  $report_new
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

        $report_new = report_new::find($id);
        Storage::delete($report_new->image);
        Storage::delete($report_new->banner_img);
        // Storage::delete($company->img);

        $report_new->delete();
        return redirect()->route('report_news.index')->with('success','report_new has been deleted successfully');
    }
}
