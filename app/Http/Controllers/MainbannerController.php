<?php

namespace App\Http\Controllers;

use App\Models\Mainbanner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainbannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainbanners = Mainbanner::all();
        return view('backend.mainbanner.index', compact('mainbanners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mainbanner.create');
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
            'title' => 'required|string',
            'desc' => 'required|string'
        ]);

        Mainbanner::create($data);

        return redirect()->route('mainbanner.index')->with('success','Mainbanner has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mainbanner  $mainbanner
     * @return \Illuminate\Http\Response
     */
    public function show(Mainbanner $mainbanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mainbanner  $mainbanner
     * @return \Illuminate\Http\Response
     */
    public function edit(Mainbanner $mainbanner)
    {
        return view('backend.mainbanner.edit',compact('mainbanner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mainbanner  $mainbanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'desc' => 'required|string',
        ]);
        $mainbanner = Mainbanner::findOrFail($id);
        $mainbanner->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
        ]);
        // $banner->update($data);


        return redirect()->route('mainbanner.index')->with('success','mainbanner has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mainbanner  $mainbanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mainbanner $mainbanner)
    {
        $mainbanner->delete();
        return redirect()->route('mainbanner.index')->with('success','mainbanner has been deleted successfully');
    }
}
