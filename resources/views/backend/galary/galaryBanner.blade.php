 @extends('backend.layouts.master')
 @section('content')

     <div class="container mt-2 ">
         <div class="row">


             <div class="col-md-12">
                 @if ($message = Session::get('success'))
                     <div class="alert alert-success" id="alert">
                         <p>{{ $message }}</p>
                     </div>
                 @endif
             </div>


             <div class="col-md-12">
                 <div class="pull-right mb-5">
                     <a class="btn btn-primary" href="{{ route('galary.index') }}" enctype="multipart/form-data">Back</a>
                 </div>
                 {{-- @if ($versionMesAtrrs->count() < 4) --}}
                     <form action="{{ route('galary.galaryBanner', $galarys->id) }}" method="post"
                         enctype="multipart/form-data">
                         @csrf

                         <div id="product_attribute" class="content"
                             data-mfield-options='{"section": ".group","btnAdd":"#btnAdd-1","btnRemove":".btnRemove"}'>
                             <div class="row">

                             </div>
                             <div class="row group">

                          


                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                     <div class="form-group">
                                         <strong> image</strong>
                                         <input type="file" name="image" class="form-control">
                                         @error('image')
                                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>

                             </div>

                         </div><button class="btn btn-sm btn-info mt-3" type="submit">create</button>
                     </form>
                 {{-- @endif --}}
             </div>

             <br>
             <hr>
             <hr>


             <div
                 class="col-md-12"style=" background: #00000036; padding: 30px;text-align: center;margin: 20px;color: white;border-radius: 30px;">
                 show</div>


             <div class="col-md-12 ">
                 <div class="table-responsive">
                     <table  class="table table-bordered table-striped table-hover dataTable ">
                         <thead>
                             <tr>
                                 <th>S.N.</th>
                            

                                 <th>image</th>

                                 <th>Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             @if ($galaryBanners->count() > 0)
                                 <?php $i = 0; ?>
                                 @foreach ($galaryBanners as $galaryBanner)
                                     <?php $i++; ?>

                                     <tr>
                                         <td>{{ $i }}</td>
                     
                                         <td><img src="{{ asset('assets/uploads') . '/' . $galaryBanner->image }}"
                                                 width="100px">
                                         </td>

                                         <td>
                                             <form action="{{ route('galary.galaryBannerDelete', $galaryBanner->id) }}"
                                                 method="Post">
                                                 <a class="btn btn-primary"
                                                     href="{{ route('galary.editGalaryBanner', $galaryBanner->id) }}">Edit</a>

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



 @endsection
 @section('scripts')
     <script src="{{ asset('backend/assets/Admin/js/jquery.multifield.min.js') }}"></script>
     <script>
         $('#product_attribute').multifield();
     </script>
 @endsection
