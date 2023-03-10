@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>contact</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>All contactus</h2>
                    </div>

                    <div class="pull-right mb-2">
                    @if ($contactus->count() > 0)
                            <a class="btn btn-success" href="#"> edit contact</a>
                        @else
                            <a class="btn btn-success" href="{{ route('contactus.create') }}"> create contact</a>
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
                        <th>contact desc</th>
                        <th>contact email</th>
                        <th>contact phone</th>
                        <th>contact photo</th>

                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($contactus->count() > 0)
                        @foreach ($contactus as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->desc }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>

                                <td> <img src="{{ asset("storage/$contact->logo") }}"width="100px"> </td>

                                <td>
                                    <form action="{{ route('contactus.destroy', $contact->id) }}" method="Post">
                                        <a class="btn btn-primary"
                                            href="{{ route('contactus.edit', $contact->id) }}">Edit</a>
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
            {{-- {!! $contactuss->links() !!} --}}
        </div>
    </body>

    </html>
@endsection
