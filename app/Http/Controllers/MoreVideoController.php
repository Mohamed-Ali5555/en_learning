<?php

namespace App\Http\Controllers;

use App\Models\moreVideo;
use Illuminate\Http\Request;

class MoreVideoController extends Controller
{
   
    public function index(){
        $moreVideos = moreVideo::all();
        return view('backend.moreVideo.index', compact('moreVideos'));
    }

    public function create()
    {
        return view('backend.moreVideo.create');
    }

    public function edit( $id)
    {
        $moreVideo = moreVideo::find($id);

        return view('backend.moreVideo.edit',compact('moreVideo'));
    }
    public function store(Request $request)
    {


     $data = $request->validate([
        'link' => 'required|string',
        'title' => 'required|string'
    ]);

    moreVideo::create($data);

   return redirect()->route('moreVideo.index')->with('success','moreVideo has been created successfully.');



   }

   public function update(Request $request,  $id)
   {

     $data = $request->validate([
        'link' => 'required|string',
        'title' => 'required|string'
    ]);

    
    $moreVideo = moreVideo::findOrFail($id);

    $moreVideo->update([
        'link'=>$request->link,
        'title'=>$request->title

    ]);

   return redirect()->route('moreVideo.index')->with('success','moreVideos has been updated successfully.');
   }

   public function destroy( $id)
   {

       $moreVideo = moreVideo::find($id);

       
       $moreVideo->delete();
       return redirect()->route('moreVideo.index')->with('success','moreVideo has been deleted successfully');
   }




}
