<?php

namespace App\Http\Controllers;

use App\Models\galary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galarys = galary::all();
        return view('backend.galary.index',compact('galarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galary.create');
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
          
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data['image'] = Storage::putFile("galary",$data['image']);

        galary::create($data);

        return redirect()->route('galary.index')->with('success','galary has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galary  $galary
     * @return \Illuminate\Http\Response
     */
    public function show(galary $galary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galary  $galary
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $galary = galary::find($id);

        return view('backend.galary.edit',compact('galary'));

    }


    public function update(Request $request,  $id)
    {
        $data = $request->validate([
      
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $galary = galary::findOrFail($id);

        if ($request->has("image")) {
            Storage::delete($galary->image);
            $data['image'] = Storage::putFile("galary",$data['image']);


        }
        $galary->update([      
            'image'=>$data['image'],
        ]);
        // $galary->update($data);


        return redirect()->route('galary.index')->with('success','galary has been updated successfully.');
    }
    






    public function destroy( $id)
    {
        $galary = galary::find($id);

        $galary->delete();
        Storage::delete($galary->image);

        return redirect()->route('galary.index')->with('success','galary has been deleted successfully');
    }
}
