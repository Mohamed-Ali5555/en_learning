<?php

namespace App\Http\Controllers;

use App\Models\Say;
use Illuminate\Http\Request;

class SayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $says = Say::all();
        return view('backend.say.index',compact('says'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.say.create');
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
            "desc" => 'required|string'
        ]);
        Say::create($data);
        return redirect()->route('say.index')->with('success','Say has been created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Say  $say
     * @return \Illuminate\Http\Response
     */
    public function show(Say $say)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Say  $say
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $say = Say::find($id);

        return view('backend.say.edit',compact('say'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Say  $say
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "desc" => 'required|string'
        ]);
        $say = Say::findOrFail($id);
        $say->update($data);
        return redirect()->route('say.index')->with('success','say has been updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Say  $say
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $say = Say::find($id);

        $say->delete();
        return redirect()->route('say.index')->with('success','say has been deleted successfully');
    }
}
