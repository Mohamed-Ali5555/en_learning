<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactus = contactus::all();
        return view('backend.contactus.index', compact('contactus'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contactus.create');
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
            'desc' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|numeric',

            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);
      $data['logo'] = Storage::putFile("contactus",$data['logo']);
    //   $data['size_guid'] = Storage::putFile("contactus",$request->input['size_guid']);


        contactus::create([
            'desc'=>$request->desc,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'logo'=>$data['logo'],
        ]);;

        return redirect()->route('contactus.index')->with('success','contactus has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(contactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $contactus = contactus::find($id);

        return view('backend.contactus.edit',compact('contactus'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data = $request->validate([
            'desc' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|numeric',

            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);
        $contactus = contactus::findOrFail($id);

        if ($request->has("logo")) {
            Storage::delete($contactus->logo);
            $data['logo'] = Storage::putFile("contactus",$data['logo']);

        }
        $contactus->update([
            'desc'=>$request->desc,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'logo'=>$data['logo'],
        ]);
        // $contactus->update($data);


        return redirect()->route('contactus.index')->with('success','contactus has been updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $contactus = contactus::find($id);
        Storage::delete($contactus->logo);

        $contactus->delete();
        return redirect()->route('contactus.index')->with('success','contactus has been deleted successfully');
    }
}