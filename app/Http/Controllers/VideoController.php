<?php

namespace App\Http\Controllers;

use App\Models\video;
use App\Models\v_new;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use File;

class VideoController extends Controller
{
    

    public function index(){
        $videos = video::all();
        return view('backend.video.index', compact('videos'));
    }

    public function create()
    {
        return view('backend.video.create');
    }

    public function edit( $id)
    {
        $videos = video::find($id);

        return view('backend.video.edit',compact('videos'));
    }
    public function uploadVideo(Request $request)
    {
       $this->validate($request, [
          'title' => 'required|string|max:255',
          'video' => 'required|file|mimetypes:video/mp4',
    ]);
    $video = new Video;
    $video->title = $request->title;
    if ($request->hasFile('video'))
    {
      $path = $request->file('video')->store('videos', ['disk' =>'my_files']);
     $video->video = $path;
    }
    $video->save();

   return redirect()->route('video.index')->with('success','videos has been created successfully.');


    
   }


   public function destroy( $id)
   {

       $video = video::find($id);

       $image_path = public_path('videos/'.$video->video);
       if(File::exists($image_path)) {
         File::delete($image_path);
       }
       $video->delete();
       return redirect()->route('video.index')->with('success','video has been deleted successfully');
   }


   public function show( $id)
   {
      
       $videos = video::find($id);
       $video_news=v_new::where('video_id',$id)->orderBy('id','DESC')->get();

           return view('backend.video.news',compact('videos','video_news'));
   
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

    // $data = $request->validate([
    //     'title' => 'required|string',
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // ]);
    $title = $request->title;
    $desc = $request->desc;
    // $image = $request->image;


    $data = $request->validate([
        'title' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

  $data['image'] = Storage::putFile("news",$data['image']);
   
  
//   return $request->all();
// $image2 =  Storage::putFile("news",$image);

// $imageNew = '';
// if($request->hasFile('image')){
//     $img = $request->image;
//     $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
//     $img->move(public_path('assets/uploads') , $imageNew);

// }

// $image =  Storage::putFile("news",$request->image);

// Storage::disk('news')->put('file.jpg', file_get_contents($photo));

// return $request->all();


    // $data['image'] = Storage::putFile("news",$data['image']);
// $image =  Storage::putFile("news",$request->image);
//  return $image;
    for($i=0; $i < count($desc);$i++){
        $datasave = [
      
            'video_id'  =>$id,
            'title'  =>$title[$i],
            'desc'  =>$desc[$i],
            'image'  =>$data['image'] [$i],

        ];
 
        $datasave1=v_new::create($datasave);
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
    $news = v_new::find($id);
              $status = $news->delete();
               
                  return redirect()->back()->with('success','news Attribute successfuly deleted');
             
   }
}
