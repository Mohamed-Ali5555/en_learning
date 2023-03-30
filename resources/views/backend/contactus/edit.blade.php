@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Edit contactus</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit contactus</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('contactus.index') }}" enctype="multipart/form-data">Back</a>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('contactus.update', $contactus->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>contactus desc:</strong>
                            <input type="text" name="desc" class="form-control" placeholder="contactus desc"
                                value="{{ $contactus->desc }}">
                            @error('desc')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>contactus email:</strong>
                            <input type="email" name="email" class="form-control" placeholder="contactus email"
                                value="{{ $contactus->email }}">
                            @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>contactus phone:</strong>
                            <input type="number" name="phone" class="form-control" placeholder="contactus phone"
                                value="{{ $contactus->phone }}">
                            @error('phone')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>contactus logo</strong>
                            <img src="{{ asset("storage/$contactus->logo") }}" width="100px"> <input type="file"
                                name="logo" class="form-control">
                            @error('logo')
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
