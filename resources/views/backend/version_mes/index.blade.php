@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>banner</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>All versions</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('version_mes.create') }}"> Create version_mes</a>
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
                        <th>Banner Title</th>
                        <th>Banner Photo</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($versions as $version)
                        <tr>
                            <td>{{ $version->id }}</td>
                            <td>{{ $version->main_title }}</td>
                            <td> <img src="{{ asset("storage/$version->image") }}"width="100px"> </td>
                            <td>
                                <form action="{{ route('version_mes.destroy', $version->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('version_mes.edit', $version->id) }}">Edit</a>

                                    <a class="btn btn-primary" href="{{ route('version_mes.show', $version->id) }}">show</a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {!! $versions->links() !!} --}}
        </div>
    </body>

    </html>
@endsection
