<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\Detail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $companies = Company::all();
        return view('backend.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.company.create');
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
            'name' => 'required|string',
            'location' => 'required|string',
            'desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        $data['image'] = Storage::putFile("companies",$data['image']);

        $data['banner_img'] = Storage::putFile("companies",$data['banner_img']);
        // $data['img'] = Storage::putFile("companies",$data['img']);
        // company::create($data);
        Company::create([
            'name' => $request->name,
            'location' => $request->location,
            'desc' => $request->desc,
            'image'=>$data['image'],
            'title_detail' => $request->title_detail,
            'desc_detail' => $request->desc_detail,
            'banner_img'=>$data['banner_img'],
            // 'img'=>$data['img'],

        ]);


        $company_id = company::latest()->first()->id;  // this code give invoices id to invoices details
      
       
     
        Detail::create([
            'company_id'=>$company_id,
            'title_detail' => $request->title_detail,
            'desc_detail' => $request->desc_detail,
            'banner_img'=>$data['banner_img'],
            // 'img'=>$data['img'],

        ]);

        return redirect()->route('company.index')->with('success','Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(company $company)
    {
        return view('backend.company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'title_detail' => 'required|string',
            'desc_detail' => 'required|string',

            'location' => 'required|string',
            'desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $company = company::findOrFail($id);

        if ($request->has("image")) {
            Storage::delete($company->image);
            $data['image'] = Storage::putFile("companies",$data['image']);
        }
        if ($request->has("banner_img")) {
            Storage::delete($company->banner_img);
            $data['banner_img'] = Storage::putFile("companies",$data['banner_img']);
        }
        // if ($request->has("img")) {
        //     Storage::delete($company->img);
        //     $data['img'] = Storage::putFile("companies",$data['img']);
        // }

        $company->update($data);

      //  $company_id = company::latest()->first()->id;  
        $detail = Detail::where('company_id',$id);  
        $company_id = company::latest()->first()->id;  // this code give invoices id to invoices details

        $detail->update([
            'company_id'=>$company_id,
            'title_detail' => $request->title_detail,
            'desc_detail' => $request->desc_detail,
            'banner_img'=>$data['banner_img'],
            // 'img'=>$data['img'],
        ]);


    //     $company_id = company::latest()->first()->id;  // this code give invoices id to invoices details
    //     if ($request->has("banner_img")) {
    //         Storage::delete($company->banner_img);
    //     $data['banner_img'] = Storage::putFile("details",$data['banner_img']);
    // }

    // if ($request->has("img")) {
    //     Storage::delete($company->img);
    //     $data['img'] = Storage::putFile("details",$data['img']);
    // }
    //     Detail::create([
    //         'company_id'=>$company_id,
    //         'title' => $request->title,
    //         'desc_detail' => $request->desc_detail,
    //         'banner_img'=>$data['banner_img'],
    //         'img'=>$data['img'],

    //     ]);
        return redirect()->route('company.index')->with('success','Company has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        Storage::delete($company->image);
        Storage::delete($company->banner_img);
        // Storage::delete($company->img);

        $company->delete();
        return redirect()->route('company.index')->with('success','Company has been deleted successfully');
    }
}
