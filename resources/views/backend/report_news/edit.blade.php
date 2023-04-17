@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Edit report_news</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit report_news</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('report_news.index') }}"
                            enctype="multipart/form-data">Back</a>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('report_news.update', $report_news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Company Name:</strong>
                            <input type="text" name="title" value="{{ $report_news->title }}" class="form-control"
                                placeholder="title ">
                            @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>report_news Descraption</strong>
                            <input type="text" name="desc" value="{{ $report_news->desc }}" class="form-control"
                                placeholder=" Descraption">
                            @error('desc')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>report_news Photo</strong>
                                <img src="{{ asset("storage/$report_news->image") }}" width="100px">
                                <input type="file" name="image" value="{{ $report_news->image }}"
                                    class="form-control">
                                @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>detail title:</strong>
                                <input type="text" name="title_detail" class="form-control" placeholder="detail title"
                                    value="{{ $report_news->title_detail }}">
                                @error('title_detail')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>detail Description</strong>
                                {{-- <input type="text" name="desc" class="form-control" placeholder="detail Description" --}}
                                <textarea required="required" name="desc_detail" id="desc_detail" cols="30" rows="10"
                                    class="@error('description') is-invalid @enderror form-control ckeditor">{{ $report_news->desc_detail }}</textarea>
                                {{-- value="{{ $detail->desc }}"> --}}
                                @error('desc_detail')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>banner Photo:</strong>
                                <img src="{{ asset("storage/$report_news->banner_img") }}" width="100px">
                                <input type="file" name="banner_img" value="{{ $report_news->banner_img }}"
                                    class="form-control"> @error('banner_img')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    </div>
            </form>
        </div>
    </body>

    </html>
@endsection
