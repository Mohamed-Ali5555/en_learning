@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Edit news</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit news</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('version_mes.index') }}"
                            enctype="multipart/form-data">Back</a>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('video.update_news', $v_new->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="product_attribute" class="content"
                    data-mfield-options='{"section": ".group","btnAdd":"#btnAdd-1","btnRemove":".btnRemove"}'>
                    <div class="row">

                    </div>
                    <div class="row group">

                        <div class="col-md-6 mt-3">
                            <label for="">Title</label>
                            <input class="form-control form-control-sm" placeholder="title" name="title" type="text"
                                value="{{ $v_new->title }}">
                            @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="">Description</label>
                            <input class="form-control form-control-sm" placeholder="desc" name="desc" type="text"
                                value="{{ $v_new->desc }}">
                            @error('desc')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <strong> Photo</strong>
                                <img src="{{ asset("storage/$v_new->image") }}" style="width: 191px; height: 75px;">
                                <input type="file" name="image" value="" class="form-control">
                                @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6 mt-6" style="margin-top: 64px;">
                            <label for="">detail title:</label>
                            <input class="form-control form-control-sm" placeholder="desc" name="title_detail"
                                value="{{ $v_new->title_detail }}" type="text">
                            @error('title_detail')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-md-12 mt-3">
                            <label for="">detail body</label>
                            <textarea required="required" name="desc_detail" id="desc_detail" cols="30" rows="10"
                                class="form-control form-control-sm ckeditor"> {{ $v_new->title }}</textarea>

                            {{-- <textarea id="description" class="form-control" placeholder="" name="desc_detail[]">{{ old('desc_detail') }}</textarea> --}}
                            @error('desc_detail')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>






                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <strong> detail banner</strong>
                                <img src="{{ asset("storage/$v_new->banner_img") }}" style="width: 191px; height: 75px;">
                                <input type="file" name="banner_img" value="" class="form-control">
                                @error('banner_img')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <strong> detail Photo</strong>
                                <img src="{{ asset("storage/$v_new->img") }}" style="width: 191px; height: 75px;">
                                <input type="file" name="img" value="" class="form-control">
                                @error('img')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-2 mt-3">
                            <button type="submit" class="btn btn-primary ml-3">Update</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </body>

    </html>
@endsection
