@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>about</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2 table-responsive">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>All aboutus</h2>
                    </div>
                    <div class="pull-right mb-2">
                        @if ($aboutuss->count() > 0)
                        <a class="btn btn-success" href="#"> edit aboutus</a>

                        @else
                        <a class="btn btn-success" href="{{ route('aboutUs.create') }}"> Create aboutuss</a>
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
                        <th>about heading</th>
                        <th>about content</th>
                        <th>about Photo</th>
                           <th>about size_guid</th>

                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($aboutuss->count() > 0)
                        @foreach ($aboutuss as $about)
                            <tr>
                                <td>{{ $about->id }}</td>
                                <td>{{ $about->heading }}</td>
                                <td>{{ $about->content }}</td>
                                <td> <img src="{{ asset("storage/$about->image") }}"width="100px"> </td>
                                <td> <img src="{{ asset("storage/$about->size_guid") }}"width="100px"> </td>

                                <td>
                                    <form action="{{ route('aboutUs.destroy', $about->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('aboutUs.edit', $about->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <div class="alert alert-danger m-1">
                            there is no data......
                            </div>
                    @endif
                </tbody>
            </table>
            {{-- {!! $aboutuss->links() !!} --}}
        </div>
    </body>

    </html>
@endsection
