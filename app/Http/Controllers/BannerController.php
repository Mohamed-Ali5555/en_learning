<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = banner::all();
        return view('backend.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     $data = $request->validate([
            'desc' => 'required|string',
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
      $data['image'] = Storage::putFile("banners",$data['image']);

        banner::create($data);

        return redirect()->route('banner.index')->with('success','Banner has been created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(banner $banner)
    {
        return view('backend.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $data = $request->validate([
            'desc' => 'required|string',
            'title' => 'required|string',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data = $request->all();

        $banner = banner::findOrFail($id);



       

// $imageNew = '';
        // if ($request->has("image")) {
        //     // $img = $request->image;
        //     // $imageNew=$img->extension();

        //     Storage::delete($banner->image);
        //     $img= Storage::putFile("banners",$request->image);
        // }
// return $imageNew;
           
        // $imageNew = '';
        // if($request->hasFile('image')){
        //     $img = $request->image;
        //     $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
        //     $img->move(Storage::putFile("banners",$imageNew));
    
        // }
        if ($request->has("image")) {
            Storage::delete($banner->image);
            $data['image'] = Storage::putFile("banners",$data['image']);
        

        $banner->update([
            'desc'=>$request->desc,
            'title'=>$request->title,
            'image'=>$data['image'],
        ]);
        // $banner->update($data);
}else{
    $banner->update([
        'desc'=>$request->desc,
        'title'=>$request->title,
    ]);
}

        return redirect()->route('banner.index')->with('success','Banner has been updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(banner $banner)
    {
        Storage::delete($banner->image);
        $banner->delete();
        return redirect()->route('banner.index')->with('success','banner has been deleted successfully');
    }
}
