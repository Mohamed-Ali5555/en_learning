<?php

namespace App\Http\Controllers;
use App\Models\galaryBanner;
use App\Models\galary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
          
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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
    public function show( $id)
    {
        $galarys = galary::find($id);
        $galaryBanners=galaryBanner::where('galary_id',$id)->orderBy('id','DESC')->get();

            return view('backend.galary.galaryBanner',compact('galarys','galaryBanners'));
    }


    public function galaryBannerStore(Request $request,$id){
        // return $request->all();
         //   return $request->all();
    $this->validate($request, [

      
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image'=>'required',
    
        ]);

     
        
        $imageNew = '';
        if($request->hasFile('image')){
            $img = $request->image;
            $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
            $img->move(public_path('assets/uploads') , $imageNew);
    
        }


            
        galaryBanner::create([
            'galary_id'  =>$id,
            'image' => $imageNew
    
    
        ]);

        return redirect()->back()->with('success','galaryBanner  successfuly add');

    }
  





    
    public function galaryBannerDelete($id)
    {
        // dd($id);
        $galaryBanner = galaryBanner::find($id);
        
        if(File::exists(public_path('assets/uploads/' . $galaryBanner->image))){
            File::delete(public_path('assets/uploads/' . $galaryBanner->image));
        }else{
            dd('File does not exists.');
        }
                  $status = $galaryBanner->delete();
                //   Storage::delete($versionMesAtrr->image);

                      return redirect()->back()->with('success',' galaryBanner successfuly deleted');
                 
       }


       public function editGalaryBanner($id){
        // return $id;
        $galaryBanner = galaryBanner::find($id);

        return view('backend.galary.editGalaryBanner',compact('galaryBanner'));
       }

       public function galaryBannerUpdate(Request $request,$id){
        // return $request->all();

        $galaryBanner = galaryBanner::findOrFail($id);

 

        if($request->hasFile('image')) {
            //if you make update for file of image delete the old
            if (File::exists(public_path('assets/uploads/' . $galaryBanner->image))) {
                File::delete(public_path('assets/uploads/' . $galaryBanner->image));
            } else {
                dd('File does not exists.');
            }

                $img = $request->image;
                $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
                $img->move(public_path('assets/uploads') , $imageNew);
        

                $galaryBanner->update([
                    'image' => $imageNew
                ]);
    }


        return  redirect()->route('galary.index')->with('success','galaryBanner message attr has been updated successfully.');

       }







    public function edit( $id)
    {
        $galary = galary::find($id);

        return view('backend.galary.edit',compact('galary'));

    }


    public function update(Request $request,  $id)
    {
        $data = $request->validate([
      
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

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

       
        Storage::delete($galary->image);
        $galaryBanner = galaryBanner::find($id);
        
        if(File::exists(public_path('assets/uploads/' . $galaryBanner->image))){
            File::delete(public_path('assets/uploads/' . $galaryBanner->image));
        }else{
            dd('File does not exists.');
        } 
        $galary->delete();
        return redirect()->route('galary.index')->with('success','galary has been deleted successfully');
    }
}
