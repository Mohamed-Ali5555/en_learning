@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>MainBanner</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2 table-responsive">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>All MainBanner</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('mainbanner.create') }}"> Create MainBanner</a>
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
                        <th>MainBanner Title</th>
                        <th>MainBanner Dsecraption</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mainbanners as $mainbanner)
                        <tr>
                            <td>{{ $mainbanner->id }}</td>
                            <td>{{ $mainbanner->title }}</td>
                            <td>{{ $mainbanner->desc }}</td>
                            {{-- <td> <img src="{{ asset("storage/$banner->image") }}"width="100px"> </td> --}}
                            <td>
                                <form action="{{ route('banner.destroy', $mainbanner->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('mainbanner.edit', $banner->id) }}">Edit</a>
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
