<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = setting::all();
        return view('backend.setting.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.setting.create');
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
            'link' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
      $data['image'] = Storage::putFile("settings",$data['image']);

        setting::create($data);

        return redirect()->route('setting.index')->with('success','Setting has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = setting::find($id);

        return view('backend.setting.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'link' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'

        ]);
        $setting = setting::findOrFail($id);

        if ($request->has("image")) {
            Storage::delete($setting->image);
            $data['image'] = Storage::putFile("settings",$data['image']);

        }
        $setting->update([
            'title'=>$request->title,
            'link'=>$request->link,
            'image'=>$data['image'],

        ]);
        // $Setting->update($data);


        return redirect()->route('setting.index')->with('success','Setting has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = setting::find($id);
        Storage::delete($setting->image);
        $setting->delete();
        return redirect()->route('setting.index')->with('success','Setting has been deleted successfully');
    }
}
