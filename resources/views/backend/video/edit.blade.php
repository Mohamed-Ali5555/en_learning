@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Edit video</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit video</h2>
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
                            <strong>video title</strong>
                            <input type="text" name="title" class="form-control" placeholder="video main_title"
                                value="{{ $videos->title }}">
                            @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>video link</strong>


                            <input type="text" name="video" value="{{ $videos->video }}" class="form-control">
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
