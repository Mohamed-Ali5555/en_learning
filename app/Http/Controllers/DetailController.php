<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::all();
        return view('backend.detail.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.detail.create');

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
        //     'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'title' => 'required|string',
        //     'desc' => 'required|string',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);
        // $data['banner_img'] = Storage::putFile("details",$data['banner_img']);
        // $data['image'] = Storage::putFile("details",$data['image']);
        // Detail::create([
        //     'banner_img'=>$data['banner_img'],
        //     'title'=>$request->title,
        //     'desc'=>$request->desc,
        //     'image'=>$data['image']
        // ]);

        // return redirect()->route('detail.index')->with('success','Detail has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $detail = Detail::find($id);

        // return view('backend.detail.edit',compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $data = $request->validate([
        //     'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'title' => 'required|string',
        //     'desc' => 'required|string',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);
        // $detail = Detail::findOrFail($id);

        // if ($request->has("image")) {
        //     Storage::delete($detail->image);
        //     $data['banner_img'] = Storage::putFile("details",$data['banner_img']);
        //     $data['image'] = Storage::putFile("details",$data['image']);

        // }
        // $detail->update([
        //     'banner_img'=>$data['banner_img'],
        //     'title'=>$request->title,
        //     'desc'=>$request->desc,
        //     'image'=>$data['image']
        // ]);
        // // $aboutus->update($data);


        // return redirect()->route('detail.index')->with('success','Detail has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Detail::find($id);

        $detail->delete();
        Storage::delete($detail->image);

        return redirect()->route('detail.index')->with('success','Details has been deleted successfully');
    }
}
