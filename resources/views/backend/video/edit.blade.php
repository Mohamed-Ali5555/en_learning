@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Edit Banner</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit version_mes</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('video.index') }}" enctype="multipart/form-data">Back</a>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('video.update', $videos->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>versionMes title</strong>
                            <input type="text" name="title" class="form-control" placeholder="version_mes main_title"
                                value="{{ $videos->title }}">
                            @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>BanversionMesner Photo</strong>
                            <video width="320" height="240" controls>
                                <source src="{{ $videos->video }}" type="video/mp4">
                                {{-- <source src="movie.ogg" type="video/ogg"> --}}
                                {{-- Your browser does not support the video tag. --}}
                            </video> <input type="file" name="video" value="" class="form-control">
                            @error('video')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-3">Update</button>
                </div>
            </form>
        </div>
    </body>

    </html>
@endsection
