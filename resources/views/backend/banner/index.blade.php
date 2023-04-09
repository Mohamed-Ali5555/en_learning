@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>banner</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2 table-responsive">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>All banners</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('banner.create') }}"> Create Banner</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" id="alert">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Banner Dsecraption</th>
                        <th>Banner Title</th>
                        <th>Banner Photo</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banners as $banner)
                        <tr>
                            <td>{{ $banner->id }}</td>
                            <td>{{ $banner->desc }}</td>
                            <td>{{ $banner->title }}</td>
                            <td> <img src="{{ asset("storage/$banner->image") }}"width="100px"> </td>
                            <td>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-1">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" data-toggle="switchbutton"
                                                data-id="{{ $banner->id }}" name="status"
                                                {{ $banner->status == 1 ? 'checked' : '' }} data-onlabel="نشط"
                                                data-offlabel="غير نشط" data-size="sm"data-onstyle="success"
                                                data-offstyle="danger" />
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <form action="{{ route('banner.destroy', $banner->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('banner.edit', $banner->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {!! $banners->links() !!} --}}
        </div>
    </body>

    </html>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.form-check-input').change(function() {
                let status = $(this).prop('checked') === true ? 1 : 0;
                let unitId = $(this).data('id');
                // alert(unitId);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "{{ route('banner.status') }}",
                    data: {
                        'status': status,
                        'id': unitId
                    },
                    success: function(data) {
                        console.log(data.message);
                    }
                });
            });
        });
    </script>
@endsection
