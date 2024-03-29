@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Edit moreVideo</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit moreVideo</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('moreVideo.index') }}" enctype="multipart/form-data">Back</a>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('moreVideo.update', $moreVideo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>moreVideo title</strong>
                            <input type="text" name="title" class="form-control" placeholder="moreVideo title"
                                value="{{ $moreVideo->title }}">
                            @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>moreVideo link</strong>


                            <input type="text" name="link" value="{{ $moreVideo->link }}" class="form-control">
                            @error('link')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                     <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Photo</strong>
                        <img  src="{{asset("storage/$moreVideo->image")}}" width="100px">
                        <input type="file" name="image" value="{{ $moreVideo->image }}" class="form-control">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                
                <div class="col-lg-12  col-sm-12">
                    <label for="">categoryVideo </label>
                    <select name="categoryVideo_id" class="form-control show-tick">
                        <option value="">-- categoryVideo --</option>

                        @foreach ($categoryvideos as $categoryVideo)
                            <option value="{{ $categoryVideo->id }}"
                                {{ $categoryVideo->id == $moreVideo->categoryVideo_id ? 'selected' : '' }}>
                                {{ $categoryVideo->title }}
                            </option>
                        @endforeach
                        </option>
                    </select>
                </div>

                    <button type="submit" class="btn btn-primary ml-3">Update</button>
                </div>
            </form>
        </div>
    </body>

    </html>
@endsection
