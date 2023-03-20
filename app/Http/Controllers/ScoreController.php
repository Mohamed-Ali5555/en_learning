<?php

namespace App\Http\Controllers;

use App\Models\score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores = score::all();
        return view('backend.score.index', compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.score.create');
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
            'score' => 'required|numeric',
            'title' => 'required|string',
        ]);
      $data['image'] = Storage::putFile("scores",$data['image']);

        score::create($data);

        return redirect()->route('score.index')->with('success','Score has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $score = score::find($id);

        return view('backend.score.edit',compact('score'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'score' => 'required|numeric',
            'title' => 'required|string'


        ]);
        $score = score::findOrFail($id);

        if ($request->has("image")) {
            Storage::delete($score->image);
            $data['image'] = Storage::putFile("scores",$data['image']);
        }
        $score->update([
            'image'=>$data['image'],
            'score'=>$request->score,
            'title'=>$request->title
        ]);
        // $score->update($data);


        return redirect()->route('score.index')->with('success','score has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(score $score)
    {
        Storage::delete($score->image);
        $score->delete();
        return redirect()->route('score.index')->with('success','Score has been deleted successfully');
    }
}
