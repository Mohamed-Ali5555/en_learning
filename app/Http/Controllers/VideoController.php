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


     $data = $request->validate([
        'video' => 'required|string',
        'title' => 'required|string'
    ]);

    video::create($data);

   return redirect()->route('video.index')->with('success','videos has been created successfully.');
//        $this->validate($request, [
//           'title' => 'required|string|max:255',
//           'video' => 'required|file|mimetypes:video/mp4',
//     ]);
//     $video = new Video;
//     $video->title = $request->title;
//     if ($request->hasFile('video'))
//     {
//       $path = $request->file('video')->store('videos', ['disk' =>'my_files']);
//      $video->video = $path;
//     }
//     $video->save();

//    return redirect()->route('video.index')->with('success','videos has been created successfully.');



   }

   public function update(Request $request,  $id)
   {

     $data = $request->validate([
        'video' => 'required|string',
        'title' => 'required|string'
    ]);
    $video = video::findOrFail($id);

    $video->update([
        'video'=>$request->video,
        'title'=>$request->title

    ]);

   return redirect()->route('video.index')->with('success','videos has been updated successfully.');
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
$image=array();
if($files=$request->file('image')){
    foreach($files as $file){
        $name=$file->getClientOriginalName();
        $file->move(public_path('backend/assets/uploads'),$name);
        $image[]=$name;

    }

}


$title = $request->title;
 $desc = $request->desc;
// $image =  Storage::putFile("news",$request->image);

// Storage::disk('news')->put('file.jpg', file_get_contents($photo));

// return $request->all();


// $path = Storage::putFile('news', $request->file('image'));
// $disk = Storage::disk('news');
// Storage::disk('local')->put($path . '/' . $originalName, $request->file);

    // $data['image'] = \Storage::putFile("news",$data['image']);

// $image =  Storage::putFile("news",$request->image);
//  return $image;
    for($i=0; $i < count($desc);$i++){
        $datasave = [

            'video_id'  =>$id,
            'title'  =>$title[$i],
            'desc'  =>$desc[$i],
            // 'image'  =>$imageNew [$i],

            'image' => $image[$i],
            // 'image' => json_encode($image)



        ];

        $datasave1=v_new::create($datasave);
    }





    // foreach($data['desc'] as $key=>$val){
    //     if(!empty($val)){
    //         $attribute=new v_new;
    //         // $attribute['original_price']=$val;
    //         $attribute['title']=$data['title'][$key];
    //         $attribute['desc']=$data['desc'][$key];
    //         $attribute['video_id']=$id;
    //         // $attribute['image']=$data['image'][$key];
    //         $attribute['image']=$imageNew[$val];

    //         $attribute->save();
    //     }
    // }

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
