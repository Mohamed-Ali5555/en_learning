 @extends('backend.layouts.master')
 @section('content')

     <div class="container mt-2">
         <div class="row">


             <div class="row">
                 <div class="col-md-7">
                     <form action="{{ route('version.attribute', $VersionMes->id) }}" method="post">
                         @csrf

                         <div id="product_attribute" class="content"
                             data-mfield-options='{"section": ".group","btnAdd":"#btnAdd-1","btnRemove":".btnRemove"}'>
                             <div class="row">
                                 <div class="col-md-12"><button type="button" id="btnAdd-1" class="btn btn-primary"> <i
                                             class="ti-plus"></i>
                                     </button></div>
                             </div>
                             <div class="row group">

                                 <div class="col-md-3">
                                     <label for="">title</label>
                                     <input class="form-control form-control-sm" placeholder="title" name="title[]"
                                         type="text">
                                 </div>

                                 <div class="col-md-3">
                                     <label for="">desc</label>
                                     <input class="form-control form-control-sm" placeholder="desc" name="desc[]"
                                         type="text">
                                 </div>



                                 <div class="col-md-2">
                                     <button type="button" class="btn btn-danger btnRemove mt-4"><i
                                             class="ti-trash"></i></button>
                                 </div>
                             </div>

                         </div><button class="btn btn-sm btn-info" type="submit">Submit</button>
                     </form>
                 </div>

                 <div class="col-md-5">
                     <div class="table-responsive">
                         <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                             <thead>
                                 <tr>
                                     <th>S.N.</th>
                                     <th>title</th>
                                     <th>desc</th>


                                     <th>Actions</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @if ($versionMesAtrrs->count() > 0)
                                     <?php $i = 0; ?>
                                     @foreach ($versionMesAtrrs as $versionMesAtrr)
                                         <?php $i++; ?>

                                         <tr>
                                             <td>{{ $i }}</td>
                                             <td>{{ $versionMesAtrr->title }}</td>
                                             <td>{{ $versionMesAtrr->desc }}</td>



                                             <td>
                                                 <form action="{{ route('version.destroy', $versionMesAtrr->id) }}" method="Post">
                                                     
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
 @endsection
