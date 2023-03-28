<?php

namespace App\Http\Controllers;

use App\Models\VersionMes;
use App\Models\versionMesAtrr;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class VersionMesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $versions = VersionMes::all();
        return view('backend.version_mes.index', compact('versions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.version_mes.create');
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
            'main_title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      $data['image'] = Storage::putFile("version_mes",$data['image']);

      VersionMes::create([
        'main_title'=>$request->main_title,
        'image'=>$data['image'],
    ]);;

        return redirect()->route('version_mes.index')->with('success','version_mes has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VersionMes  $versionMes
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
       
        $VersionMes = VersionMes::find($id);
        $versionMesAtrrs=versionMesAtrr::where('version_m_id',$id)->orderBy('id','DESC')->get();

            return view('backend.version_mes.verdion_attr',compact('VersionMes','versionMesAtrrs'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VersionMes  $versionMes
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $versionMes = VersionMes::find($id);

        return view('backend.version_mes.edit',compact('versionMes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VersionMes  $versionMes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data = $request->validate([
            'main_title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $versionMes = VersionMes::findOrFail($id);

        if ($request->has("image")) {
            Storage::delete($versionMes->image);
            $data['image'] = Storage::putFile("versionMes",$data['image']);
        }
        $versionMes->update([
            'main_title'=>$request->main_title,
            'image'=>$data['image']
        ]);
        // $banner->update($data);


        return redirect()->route('version_mes.index')->with('success','version_mes has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VersionMes  $versionMes
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $version_mes = VersionMes::find($id);

        $version_mes->delete();
        Storage::delete($version_mes->image);

        return redirect()->route('version_mes.index')->with('success','version_mes has been deleted successfully');
    }


    
    public function addProductAttribute(Request $request,$id){

        
        // $validated = $request->validate([
         
        //     'original_price'=>'required|numeric',
        //     'offer_price'=>'required|numeric',
        //     'size_guide'=>'nullable',
        //     'product_id'=>'required|exists:products,id',
        //     'size'=>'required',


        // ]);
        // $data=$request->all();
        // return $request->all();
        $title = $request->title;
        $desc = $request->desc;
     
        for($i=0; $i < count($desc);$i++){
            $datasave = [
          
                'version_m_id'  =>$id,
                'title'  =>$title[$i],
                'desc'  =>$desc[$i],
            ];
            $datasave1=versionMesAtrr::create($datasave);
        }
                return redirect()->back()->with('success','product attribute successfuly add');

        // foreach($data['original_price'] as $key=>$val){
        //     if(!empty($val)){
        //         $attribute=new ProductAttribute;
        //         $attribute['original_price']=$val;
        //         $attribute['offer_price']=$data['offer_price'][$key];
        //         $attribute['stock']=$data['stock'][$key];
        //         $attribute['product_id']=$id;
        //         $attribute['size']=$data['size'][$key];
        //         $attribute->save();
        //     }
        // }
        // return redirect()->back()->with('success','product attribute successfuly add');
    }


    public function attributeDelete($id)
    {
        // dd($id);
        $versionMesAtrr = versionMesAtrr::find($id);
                  $status = $versionMesAtrr->delete();
                   
                      return redirect()->back()->with('success','product Attribute successfuly deleted');
                 
       }
}
