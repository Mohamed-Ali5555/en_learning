@extends('backend.layouts.master')
@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Presedent</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Presedent</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('presedent.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('presedent.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Presedent Name:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Presedent Name">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Presedent Descraption</strong>
                        <input type="text" name="desc" class="form-control" placeholder="Presedent Descraption">
                        {{-- <textarea required="required" name="desc" id="desc" cols="30" rows="10" class="@error('description') is-invalid @enderror form-control ckeditor"></textarea> --}}
                        @error('desc')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Presedent Photo</strong>
                        <input type="file" name="image" class="form-control">
                        @error('image')
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
