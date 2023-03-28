@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>detail</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2 table-responsive">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>All Details</h2>
                    </div>
                    <div class="pull-right mb-2">
                        @if ($details->count() > 10)
                            {{-- <a class="btn btn-success" href="#"> edit aboutuss</a> --}}
                        @else
                            {{-- <a class="btn btn-success" href="{{ route('detail.create') }}"> Create Detail</a> --}}
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

                        <th>Detail title</th>
                        <th>detail desc</th>
                        <th>detail banner</th>
                        <th>detail Photo</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @if ($details->count() > 10) --}}
                    @foreach ($details as $detail)
                        <tr>
                            <td>{{ $detail->id }}</td>

                            <td>{{ $detail->title }}</td>
                            <td>{!! html_entity_decode($detail->desc_detail) !!}</td>
                            <td> <img src="{{ asset("storage/$detail->banner_img") }}"width="100px"> </td>
                            <td> <img src="{{ asset("storage/$detail->img") }}"width="100px"> </td>

                            <td>
                                <form action="{{ route('detail.destroy', $detail->id) }}" method="Post">
                                    {{-- <a class="btn btn-primary" href="{{ route('detail.edit', $detail->id) }}">Edit</a> --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    {{-- @else
                        <div class="alert alert-danger m-1">
                            there is no data......
                            </div>
                    @endif --}}
                </tbody>
            </table>
            {{-- {!! $aboutuss->links() !!} --}}
        </div>
    </body>

    </html>
@endsection
