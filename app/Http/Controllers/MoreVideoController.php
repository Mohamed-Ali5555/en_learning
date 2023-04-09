<?php

namespace App\Http\Controllers;

use App\Models\moreVideo;
use Illuminate\Http\Request;
use App\Models\CategoryVideo;
use Illuminate\Support\Facades\Storage;

class MoreVideoController extends Controller
{
   
    public function index(){
        $moreVideos = moreVideo::all();
        return view('backend.moreVideo.index', compact('moreVideos'));
    }

    public function create()
    {
        $categoryvideos = CategoryVideo::get();
        return view('backend.moreVideo.create',compact('categoryvideos'));
    }

    public function edit( $id)
    {
        $moreVideo = moreVideo::find($id);
        $categoryvideos = CategoryVideo::get();

        return view('backend.moreVideo.edit',compact('moreVideo','categoryvideos'));
    }
    public function store(Request $request)
    {


     $data = $request->validate([
        'link' => 'required|string',
        'title' => 'required|string',
        'categoryVideo_id'=>'required|exists:category_videos,id',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

    ]);
    $data['image'] = Storage::putFile("moreVideo",$data['image']);

    moreVideo::create($data);

   return redirect()->route('moreVideo.index')->with('success','moreVideo has been created successfully.');



   }

   public function update(Request $request,  $id)
   {

     $data = $request->validate([
        'link' => 'required|string',
        'title' => 'required|string',
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'categoryVideo_id'=>'required|exists:category_videos,id',

    ]);

    
    $moreVideo = moreVideo::findOrFail($id);

    // $moreVideo->update([
    //     'link'=>$request->link,
    //     'title'=>$request->title

    // ]);
    if ($request->has("image")) {
        Storage::delete($moreVideo->image);
        $data['image'] = Storage::putFile("moreVideo",$data['image']);


    
    $moreVideo->update([      
        'image'=>$data['image'],
        'link'=>$request->link,
        'title'=>$request->title,
        'categoryVideo_id'=>$request->categoryVideo_id,
    ]);
}else{
    $moreVideo->update([
        'link'=>$request->link,
        'title'=>$request->title,
        'categoryVideo_id'=>$request->categoryVideo_id,
    ]);
}
   return redirect()->route('moreVideo.index')->with('success','moreVideos has been updated successfully.');
   }

   public function destroy( $id)
   {

       $moreVideo = moreVideo::find($id);
       Storage::delete($moreVideo->image);

       
       $moreVideo->delete();
       return redirect()->route('moreVideo.index')->with('success','moreVideo has been deleted successfully');
   }




}
