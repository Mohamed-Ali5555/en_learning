 @extends('backend.layouts.master')
 @section('content')

     <div class="container mt-2 table-responsive">
         <div class="row">


             <div class="row">
                 <div class="col-md-12">
                     @if ($message = Session::get('success'))
                         <div class="alert alert-success" id="alert">
                             <p>{{ $message }}</p>
                         </div>
                     @endif
                 </div>
                 <div class="col-md-12">
                     <form action="{{ route('video.news', $videos->id) }}" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}

                         <div id="product_attribute" class="content"
                             data-mfield-options='{"section": ".group","btnAdd":"#btnAdd-1","btnRemove":".btnRemove"}'>
                             <div class="row">
                                 {{-- <div class="col-md-12"><button type="button" id="btnAdd-1" class="btn btn-primary"> <i
                                             class="ti-plus"></i>
                                     </button></div> --}}
                             </div>
                             <div class="row group">

                                 <div class="col-md-6 mt-3">
                                     <label for="">title</label>
                                     <input class="form-control form-control-sm" placeholder="title" name="title"
                                         type="text">
                                     @error('title')
                                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                     @enderror
                                 </div>

                                 <div class="col-md-6 v">
                                     <label for="">desc</label>
                                     <input class="form-control form-control-sm" placeholder="desc" name="desc"
                                         type="text">
                                     @error('desc')
                                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                     @enderror
                                 </div>

                                 <div class="col-md-6">
                                     <label for="">image</label>
                                     <input class="form-control form-control-sm" placeholder="image" name="image"
                                         type="file">
                                     @error('image')
                                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                     @enderror
                                 </div>



                                 <div class="col-md-6 mt-3">
                                     <label for="">detail title:</label>
                                     <input class="form-control form-control-sm" placeholder="desc" name="title_detail"
                                         type="text">
                                     @error('title_detail')
                                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                     @enderror
                                 </div>


                                 <div class="col-md-12 mt-3">
                                     <label for="">detail body</label>
                                     <textarea required="required" name="desc_detail" id="desc_detail" cols="30" rows="10"
                                         class="form-control form-control-sm ckeditor"></textarea>

                                     {{-- <textarea id="description" class="form-control" placeholder="" name="desc_detail[]">{{ old('desc_detail') }}</textarea> --}}
                                     @error('desc_detail')
                                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                     @enderror
                                 </div>





                                 <div class="col-md-6 mt-3">
                                     <label for="">banner_img</label>
                                     <input class="form-control form-control-sm" placeholder="banner_img" name="banner_img"
                                         type="file">
                                     @error('banner_img')
                                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                     @enderror
                                 </div>


                                 <div class="col-md-6 mt-3">
                                     <label for="">img</label>
                                     <input class="form-control form-control-sm" placeholder="image" name="img"
                                         type="file">
                                     @error('img')
                                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                     @enderror
                                 </div>


                                 <div class="col-md-2 mt-3">
                                     <button type="button" class="btn btn-danger btnRemove mt-4"><i
                                             class="ti-trash"></i></button>
                                 </div>
                             </div>

                         </div><button class="btn btn-sm btn-info" type="submit">Submit</button>
                     </form>
                 </div>

                 <br>
                 <hr>
                 <hr>
                 <div
                     class="col-md-12"style=" background: #00000036; padding: 30px;text-align: center;margin: 20px;color: white;border-radius: 30px;">
                     show</div>
                 <div class="col-md-12 ">
                     <div class="table-responsive">
                         <table
                             class="table table-bordered table-striped table-hover js-basic-example dataTable table-responsive">
                             <thead>
                                 <tr>
                                     <th>S.N.</th>
                                     <th>title</th>
                                     <th>desc</th>
                                     <th>image</th>
                                     <th>detail title_detail</th>
                                     <th>detail body</th>
                                     <th>detail banner</th>
                                     <th>detail Photo</th>

                                     <th>Actions</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @if ($video_news->count() > 0)
                                     <?php $i = 0; ?>
                                     @foreach ($video_news as $video_new)
                                         <?php $i++; ?>

                                         <tr>
                                             <td>{{ $i }}</td>
                                             <td>{{ $video_new->title }}</td>
                                             <td>{{ $video_new->desc }}</td>
                                             <td> <img src="{{ asset("storage/$video_new->image") }}" alt=""
                                                     style="width:100px;height:100px;">
                                             </td>
                                             <td>{{ $video_new->title_detail }}</td>

                                             <td>{!! html_entity_decode($video_new->desc_detail) !!}</td>
                                             <td> <img src="{{ asset("storage/$video_new->banner_img") }}"width="100px">
                                             </td>
                                             <td> <img src="{{ asset("storage/$video_new->img") }}"width="100px"> </td>
                                             {{-- <td><img src="{{ asset('frontend/assets/uploads') . '/' . $video_new->image }}"/>  </td> --}}
                                             {{-- <td><img src="{{ asset('backend/assets/uploads' . '/' . $video_new->image) }}"
                                                     style="width:100px;height:100px;" alt="multiple image" /></td> --}}


                                             <td>
                                                 <form action="{{ route('video.deleteAtrr', $video_new->id) }}"
                                                     method="Post">

                                                     @csrf
                                                     @method('DELETE')
                                                     <button type="submit" class="btn btn-danger">Delete</button>
                                                 </form>
                                             </td>



                                         </tr>
                                     @endforeach
                                 @endif

                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
 @section('scripts')
     <script src="{{ asset('backend/assets/Admin/js/jquery.multifield.min.js') }}"></script>
     <script>
         $('#product_attribute').multifield();
     </script>

     <script>
         $(document).ready(function() {
             $('#description').summernote();
         });
     </script>
 @endsection
