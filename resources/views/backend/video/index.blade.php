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
                        <h2>All videos</h2>
                    </div>
                    <div class="pull-right mb-2">

                     @if ($videos->count() > 0)
                        <a class="btn btn-success" href="#"> edit videos</a>

                        @else
                        <a class="btn btn-success" href="{{ route('video.create') }}"> Create videos</a>
                        @endif
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
                        <th>videos Title</th>
                        <th>videos Photo</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <td>{{ $video->id }}</td>
                            <td>{{ $video->title }}</td>
                            <td>
                                <iframe width="420" height="315" src="{{ $video->video }}">
                                </iframe>
                            </td>
                            <td>
                                <form action="{{ route('video.destroy', $video->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('video.edit', $video->id) }}">Edit</a>
                                    @if ($video->v_news->count() < 3)
                                    <a class="btn btn-primary" href="{{ route('video.show', $video->id) }}">show</a>
                                    @endif
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
