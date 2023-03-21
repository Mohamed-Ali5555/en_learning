<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutuss = aboutus::all();
        return view('backend.aboutus.index', compact('aboutuss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.aboutus.create');

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
            'heading' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size_guid' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
      $data['image'] = Storage::putFile("aboutus",$data['image']);
      $data['size_guid'] = Storage::putFile("aboutus",$data['size_guid']);
    //   $data['size_guid'] = Storage::putFile("aboutus",$request->input['size_guid']);


        aboutus::create([
            'heading'=>$request->heading,
            'content'=>$request->content,
            'image'=>$data['image'],
            'size_guid'=>$data['size_guid'],
        ]);

        return redirect()->route('aboutUs.index')->with('success','aboutus has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(aboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $aboutUs = aboutUs::find($id);

        return view('backend.aboutus.edit',compact('aboutUs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data = $request->validate([
            'heading' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size_guid' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $aboutus = aboutus::findOrFail($id);

        if ($request->has("image")) {
            Storage::delete($aboutus->image);
            $data['image'] = Storage::putFile("aboutus",$data['image']);
            $data['size_guid'] = Storage::putFile("aboutus",$data['size_guid']);

        }
        $aboutus->update([
            'heading'=>$request->heading,
            'content'=>$request->content,
            'image'=>$data['image'],
            'size_guid'=>$data['size_guid'],
        ]);
        // $aboutus->update($data);


        return redirect()->route('aboutUs.index')->with('success','aboutus has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $aboutus = aboutUs::find($id);

        $aboutus->delete();
        return redirect()->route('aboutUs.index')->with('success','aboutus has been deleted successfully');
    }
}
