<?php

namespace App\Http\Controllers;

use App\Models\presedent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use function Ramsey\Uuid\v1;

class PresedentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presedents = presedent::all();
        return view('backend.presedent.index',compact('presedents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.presedent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'desc'  => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        // $data['image'] = Storage::putFile("presedents",$data['image']);

        $imageNew = '';
        if($request->hasFile('image')){
            $img = $request->image;
            $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
            $img->move(public_path('assets/uploads') , $imageNew);
    
        }
        presedent::create([
            'desc'=>$request->desc,
            'title'=>$request->title,
            // 'image'=>$data['image'],
            'image' => $imageNew
        ]);
    
        return redirect()->route('presedent.index')->with('success','Bresedent has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\presedent  $presedent
     * @return \Illuminate\Http\Response
     */
    public function show(presedent $presedent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\presedent  $presedent
     * @return \Illuminate\Http\Response
     */
    public function edit(presedent $presedent)
    {
        return view('backend.presedent.edit',compact('presedent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\presedent  $presedent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        // $this->validate($request, [
        //     'title' => 'required|string',
        //     'desc' => 'required|string',

        //     // 'image' => 'required',
        // ]);
        $presedent = presedent::findOrFail($id);

        if($request->hasFile('image')) {
            //if you make update for file of image delete the old
            if (File::exists(public_path('assets/uploads/' . $presedent->image))) {
                File::delete(public_path('assets/uploads/' . $presedent->image));
            } else {
                dd('File does not exists.');
            }
//  $imageNew = '';
        //and add the modern image
            $img = $request->image;
            $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
            $img->move(public_path('assets/uploads') , $imageNew);

            $presedent->update([
            'title'=>$request->title,
            'desc'=>$request->desc,

            'image' => $imageNew
        ]);
        // $banner->update($data);
     }else{
        $presedent->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
        ]);
    }
        // $banner->update($data);
        return redirect()->route('presedent.index')->with('success','Banner has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\presedent  $presedent
     * @return \Illuminate\Http\Response
     */
    public function destroy(presedent $presedent)
    {
        
        Storage::delete($presedent->image);
        $presedent->delete();
        return redirect()->route('presedent.index')->with('success','presedent has been deleted successfully');
    }
}
