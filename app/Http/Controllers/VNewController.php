<?php

namespace App\Http\Controllers;

use App\Models\v_new;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $v_new = v_new::all();
        // return view('backend.Vnew.index',compact('v_new'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.Vnew.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'title' => 'required|string',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'desc'  => 'required|string'
        // ]);
        // $data['image'] = Storage::putFile("news",$data['image']);
        // v_new::create($data);
        // return redirect()->route('new.index')->with('success','New has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\v_new  $v_new
     * @return \Illuminate\Http\Response
     */
    public function show(v_new $v_new)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\v_new  $v_new
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $new = v_new::findOrfail($id);
        // return view('backend.Vnew.edit',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\v_new  $v_new
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        // $data = $request->validate([
        //     'title' => 'required|string',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'desc' => 'required|string',
        // ]);
        // $v_new = v_new::findOrFail($id);

        // if ($request->has("image")) {
        //     Storage::delete($v_new->image);
        //     $data['image'] = Storage::putFile("news",$data['image']);
        // }
        // $v_new->update([
        //     'title'=>$request->title,
        //     'image'=>$data['image'],
        //     'desc'=>$request->desc
        // ]);
        // // $banner->update($data);
        // return redirect()->route('new.index')->with('success','New has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\v_new  $v_new
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $v_new = v_new::find($id);
        // Storage::delete($v_new->image);
        // $v_new->delete();
        // return redirect()->route('new.index')->with('success','New has been deleted successfully');
    }
}
