<?php

namespace App\Http\Controllers;

use App\Models\video;
use App\Models\v_new;
use App\Models\Detail;

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

    // return $request->all();
    $data = $request->validate([
        'desc' => 'required|string',
        'title' => 'required|string',
        'desc_detail' => 'required|string',
        'title_detail' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

    ]);


    $data['image'] = Storage::putFile("companies",$data['image']);
    $data['banner_img'] = Storage::putFile("companies",$data['banner_img']);
    $data['img'] = Storage::putFile("companies",$data['img']);


    v_new::create([
          'video_id'  =>$id,
          'desc'=>$request->desc,
          'title'=>$request->title,
          'desc_detail'=>$request->desc_detail,
          'title_detail'=>$request->title_detail,
          'image'=>$data['image'],
          'banner_img'=>$data['banner_img'],
          'img'=>$data['img'],

      ]);


      $v_new_id = v_new::latest()->first()->id;  // this code give invoices id to invoices details
      Detail::create([
        'new_id'=>$v_new_id,
        'title_detail'  =>$request->title_detail,
        'desc_detail'  =>$request->desc_detail,
        'banner_img'=>$data['banner_img'],
        'img'=>$data['img'],

    ]);


  
    return redirect()->back()->with('success','product attribute successfuly add');


}
public function editProductAtrr(v_new $v_new,$id){
    // return $id;
    $v_new = v_new::find($id);

    return view('backend.video.edit_news',compact('v_new'));
   }

public function updateNews(Request $request,$id){
// return $request->all();/

$data = $request->validate([
           'desc' => 'required|string',
            'title' => 'required|string',
            'desc_detail' => 'required|string',
            'title_detail' => 'required|string',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $request->all();

    $v_new = v_new::findOrFail($id);



    
    

    if ($request->has("image")) {
        Storage::delete($v_new->image);

        $data['image'] = Storage::putFile("companies",$data['image']);

  
        $v_new->update([
            'desc'=>$request->desc,
            'title'=>$request->title,
            'desc_detail'=>$request->desc_detail,
            'title_detail'=>$request->title_detail,

            'image'=>$data['image'],
            // 'size_guid'=>$data['size_guid'],
        ]);
            // $aboutus->update($data);
        } else{
            $v_new->update([
                'desc'=>$request->desc,
                'title'=>$request->title,
                'desc_detail'=>$request->desc_detail,
                'title_detail'=>$request->title_detail,
            
            ]);
            }
        
        if($request->has("banner_img")){
            Storage::delete($v_new->banner_img);

            $data['banner_img'] = Storage::putFile("companies",$data['banner_img']);
    
    
            $v_new->update([
            'desc'=>$request->desc,
            'title'=>$request->title,
            'desc_detail'=>$request->desc_detail,
            'title_detail'=>$request->title_detail,
            'banner_img'=>$data['banner_img'],
            ]);

        } else{
            $v_new->update([
                'desc'=>$request->desc,
                'title'=>$request->title,
                'desc_detail'=>$request->desc_detail,
                'title_detail'=>$request->title_detail,
            
            ]);
            }
        
        if($request->has("img")){
            Storage::delete($v_new->img);

            $data['img'] = Storage::putFile("companies",$data['img']);
    
    
            $v_new->update([
            'desc'=>$request->desc,
            'title'=>$request->title,
            'desc_detail'=>$request->desc_detail,
            'title_detail'=>$request->title_detail,
            'img'=>$data['img'],
            ]);
        }
        else{
        $v_new->update([
            'desc'=>$request->desc,
            'title'=>$request->title,
            'desc_detail'=>$request->desc_detail,
            'title_detail'=>$request->title_detail,
        
        ]);
        }



     



        return  redirect()->route('video.index')->with('success','video attr attr has been updated successfully.');

}
public function attributeDelete($id)
{
    // dd($id);
    $news = v_new::find($id);
    Storage::delete($news->image);
    Storage::delete($news->banner_img);
    Storage::delete($news->img);
              $status = $news->delete();

                  return redirect()->back()->with('success','news Attribute successfuly deleted');

   }
}
