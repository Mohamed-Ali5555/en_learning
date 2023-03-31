<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->validate([
            'title' => 'required|string',
            'desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data['image'] = Storage::putFile("products",$data['image']);
        Product::create($data);
        return redirect()->route('product.index')->with('success','Product has been created successfully.');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('backend.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'desc' => 'required|string',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $Product = Product::findOrFail($id);

        if($request->hasFile('image')) {
            //if you make update for file of image delete the old
            if (File::exists(public_path('assets/uploads/' . $Product->image))) {
                File::delete(public_path('assets/uploads/' . $Product->image));
            } else {
                dd('File does not exists.');
            }
//  $imageNew = '';
        //and add the modern image
            $img = $request->image;
            $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
            $img->move(public_path('assets/uploads') , $imageNew);

            $Product->update([
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
        return redirect()->route('product.index')->with('success','Product has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->image);
        $product->delete();
        return redirect()->route('product.index')->with('success','Product has been deleted successfully');
    }
}
