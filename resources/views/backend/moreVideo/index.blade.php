@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>vision</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2 table-responsive">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>All moreVideo</h2>
                    </div>
                    <div class="pull-right mb-2">


                        <a class="btn btn-success" href="{{ route('moreVideo.create') }}"> Create moreVideo</a>

                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" id="alert">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>moreVideo Title</th>
                        <th>moreVideo link</th>
                        <th>moreVideo category_video</th>
                        <th>moreVideo image</th>

                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($moreVideos as $moreVideo)
                        <tr>
                            <td>{{ $moreVideo->id }}</td>
                            <td>{{ $moreVideo->title }}</td>
                            <td>
                                <iframe width="420" height="315" src="{{ $moreVideo->link }}">
                                </iframe>
                            </td>
                            <td>{{ $moreVideo->categoryVideo->title }}</td>


                            <td><img src="{{ asset("storage/$moreVideo->image") }}"width="100px"></td>

                            <td>
                                <form action="{{ route('moreVideo.destroy', $moreVideo->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('moreVideo.edit', $moreVideo->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger ">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {!! $versions->links() !!} --}}
        </div>
    </body>

    </html>
@endsection
