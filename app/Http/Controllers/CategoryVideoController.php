<?php

namespace App\Http\Controllers;

use App\Models\CategoryVideo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryVideos = CategoryVideo::all();
        return view('backend.category_video.index', compact('categoryVideos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category_video.create');
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
            'title' => 'required|string'

        ]);


        CategoryVideo::create($data);

        return redirect()->route('category_video.index')->with('success','categoryVideo has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryVideo  $categoryVideo
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryVideo $categoryVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryVideo  $categoryVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryVideo $categoryVideo)
    {
        return view('backend.category_video.edit',compact('categoryVideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryVideo  $categoryVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryVideo $categoryVideo)
    {
        $request->validate([
            'title' => 'required|string'
        ]);

        $categoryVideo->update($request->all());

        return redirect()->route('category_video.index')->with('success','categoryVideo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryVideo  $categoryVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryVideo $categoryVideo)
    {
        $categoryVideo->delete();

        return redirect()->route('category_video.index')->with('success','categoryVideo deleted successfully');
    }
}
