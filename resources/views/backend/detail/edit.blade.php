@extends('backend.layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Detail</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('detail.index') }}" enctype="multipart/form-data">Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('detail.update',$detail->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>detail title</strong>
                        <input type="text" name="title" value="{{ $detail->title }}" class="form-control"
                            placeholder="detail title">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>detail Description</strong>
                        {{-- <input type="text" name="desc" class="form-control" placeholder="detail Description" --}}
                        <textarea required="required" name="desc" id="desc" cols="30" rows="10" class="@error('description') is-invalid @enderror form-control ckeditor">{{ $detail->desc }}</textarea>
                            {{-- value="{{ $detail->desc }}"> --}}
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail banner</strong>
                        <img src="{{ asset("storage/$detail->image") }}" width="100px">
                        <input type="file" name="banner_img" value="" class="form-control">
                        @error('banner_img')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>detail Photo</strong>
                        <img src="{{ asset("storage/$detail->image") }}" width="100px">
                        <input type="file" name="image" value="" class="form-control">
                        @error('image')
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
