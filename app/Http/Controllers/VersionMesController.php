<?php

namespace App\Http\Controllers;

use App\Models\VersionMes;
use App\Models\versionMesAtrr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    //   $data['image'] = Storage::putFile("version_mes",$data['image']);

        
      $imageNew = '';
      if($request->hasFile('image')){
          $img = $request->image;
          $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
          $img->move(public_path('assets/uploads') , $imageNew);
  
      }
      VersionMes::create([
        'main_title'=>$request->main_title,
        'image' => $imageNew
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
        // $this->validate($request, [
        //     'main_title' => 'required|string',
        //     // 'image' => 'required',
        // ]);
        $versionMes = VersionMes::findOrFail($id);

    //     $versionMes->main_title = $request->main_title;

    //     $oldphotoPath = $versionMes->image;


    //  if ($request->has('image')) {
    //      $validated = $request->validate([
    //          'image' => 'required|mimes:png,jpg,jpeg|max:2000',
    //      ]);

    //      $the_file_path = uploadImage('backend/assets/uploads', $request->image);
    //      $versionMes->image = $the_file_path;
    //      if (file_exists('backend/assets/uploads/' . $oldphotoPath) and !empty($oldphotoPath)) {
    //         unlink('backend/assets/uploads/' . $oldphotoPath);
    //      }
    //   }

    //     $versionMes->save();


    // if ($request->has("image")) {
        //     Storage::delete($versionMesAtrr->image);
        //     $data['image'] = Storage::putFile("versionMesAtrr",$data['image']);
        // }
       

        if($request->hasFile('image')) {
            //if you make update for file of image delete the old
            if (File::exists(public_path('assets/uploads/' . $versionMes->image))) {
                File::delete(public_path('assets/uploads/' . $versionMes->image));
            } else {
                dd('File does not exists.');
            }
//  $imageNew = '';
            //and add the modern image
                $img = $request->image;
                $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
                $img->move(public_path('assets/uploads') , $imageNew);
        

        $versionMes->update([
            'main_title'=>$request->main_title,

            // 'image'=>$data['image']
            'image' => $imageNew


        ]);
    }else{
        $versionMes->update([
            'main_title'=>$request->main_title,
        ]);
    }

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
        if(File::exists(public_path('assets/uploads/' . $version_mes->image))){
            File::delete(public_path('assets/uploads/' . $version_mes->image));
        }else{
            dd('File does not exists.');
        }
        $version_mes->delete();
        // Storage::delete($version_mes->image);

        return redirect()->route('version_mes.index')->with('success','version_mes has been deleted successfully');
    }


    
    public function addProductAttribute(Request $request,$id){

 
    //   return $request->all();
    $this->validate($request, [

        // $data = $request->validate([
            'desc' => 'required|string',
            'title' => 'required|string',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image'=>'required',
    
        ]);
        // $data['image'] = Storage::putFile("versionMesAtrr",$data['image']);

     
        
        $imageNew = '';
        if($request->hasFile('image')){
            $img = $request->image;
            $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
            $img->move(public_path('assets/uploads') , $imageNew);
    
        }
        // for($i=0; $i < count($desc);$i++){
        //     $datasave = [
          
        //         'version_m_id'  =>$id,
        //         'title'  =>$title[$i],
        //         'desc'  =>$desc[$i],
        //         'image'=>$data['image'],

        //     ];
        //     $datasave1=versionMesAtrr::create($datasave);
        // }

        
        versionMesAtrr::create([
        'version_m_id'  =>$id,
        'desc'=>$request->desc,
        'title'=>$request->title,
        // 'image'=>$data['image'],
        'image' => $imageNew


    ]);
               
    return redirect()->back()->with('success','product attribute successfuly add');

      
    }


    public function attributeDelete($id)
    {
        // dd($id);
        $versionMesAtrr = versionMesAtrr::find($id);
        
        if(File::exists(public_path('assets/uploads/' . $versionMesAtrr->image))){
            File::delete(public_path('assets/uploads/' . $versionMesAtrr->image));
        }else{
            dd('File does not exists.');
        }
                  $status = $versionMesAtrr->delete();
                //   Storage::delete($versionMesAtrr->image);

                      return redirect()->back()->with('success','product Attribute successfuly deleted');
                 
       }


       public function change(versionMesAtrr $versionMesAtrr,$id){
        // return $id;
        $versionMesAtrr = versionMesAtrr::find($id);

        return view('backend.version_mes.attr_edit',compact('versionMesAtrr'));
       }

       public function visionAtrrUpdate(Request $request,$id){
        // return $request->all();
        $this->validate($request, [
            'title' => 'required|string',
            'desc' => 'required|string',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $versionMesAtrr = versionMesAtrr::findOrFail($id);

        // if ($request->has("image")) {
        //     Storage::delete($versionMesAtrr->image);
        //     $data['image'] = Storage::putFile("versionMesAtrr",$data['image']);
        // }
       

        if($request->hasFile('image')) {
            //if you make update for file of image delete the old
            if (File::exists(public_path('assets/uploads/' . $versionMesAtrr->image))) {
                File::delete(public_path('assets/uploads/' . $versionMesAtrr->image));
            } else {
                dd('File does not exists.');
            }
//  $imageNew = '';
            //and add the modern image
                $img = $request->image;
                $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
                $img->move(public_path('assets/uploads') , $imageNew);
        

        $versionMesAtrr->update([
            'title'=>$request->title,
            'desc'=>$request->desc,

            // 'image'=>$data['image']
            'image' => $imageNew


        ]);
        // $banner->update($data);
}else{
    $versionMesAtrr->update([
        'title'=>$request->title,
        'desc'=>$request->desc,
    ]);
}

        return  redirect()->route('version_mes.index')->with('success','vision message attr has been updated successfully.');

       }
}
