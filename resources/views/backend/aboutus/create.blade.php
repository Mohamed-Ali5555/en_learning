@extends('backend.layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add aboutus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add aboutus</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('aboutUs.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('aboutUs.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>aboutus Seacraption:</strong>
                        <input type="text" name="heading" class="form-control" placeholder="aboutus heading">
                        @error('desc')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>aboutus content:</strong>
                        <input type="text" name="content" class="form-control" placeholder="aboutus content">
                        @error('content')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>aboutus Photo:</strong>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                   <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>size_guid Photo:</strong>
                        <input type="file" name="size_guid" class="form-control">
                        @error('size_guid')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Create</button>
            </div>
        </form>
    </div>
</body>

</html>
@endsection
