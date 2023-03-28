@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Score</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2 table-responsive">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>All Scores</h2>
                    </div>

                    <div class="pull-right mb-2">

                        @if ($scores->count() >= 4)
                        {{-- <a class="btn btn-success" href="#"> edit aboutuss</a> --}}

                        @else
                        <a class="btn btn-success" href="{{ route('score.create') }}"> Create Score</a>
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
                        <th>Score Title</th>
                        <th>Score Count</th>
                        <th>Score Photo</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scores as $score)
                        <tr>
                            <td>{{ $score->id }}</td>
                            <td>{{ $score->title }}</td>
                            <td>{{ $score->score }}</td>
                            <td> <img src="{{ asset("storage/$score->image") }}"width="100px"> </td>
                            <td>
                                <form action="{{ route('score.destroy', $score->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('score.edit', $score->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {!! $banners->links() !!} --}}
        </div>
    </body>

    </html>
@endsection
