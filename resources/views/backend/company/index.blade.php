@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Company</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Companies</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('company.create') }}"> Create Company</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" id="alert">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Company Name</th>
                        <th>Company Location</th>
                        <th>Company Descraption</th>
                        <th>Company Photo</th>
                        <th>detail title</th>

                        <th>detail body</th>
                        <th>detail banner</th>
                        <th>detail Photo</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->location }}</td>
                            <td>{{ $company->desc }}</td>
                            <td><img src="{{ asset("storage/$company->image") }}"width="100px"></td>


                            <td>{{ $company->title }}</td>
                            <td>{!! html_entity_decode($company->desc_detail) !!}</td>
                            <td> <img src="{{ asset("storage/$company->banner_img") }}"width="100px"> </td>
                            <td> <img src="{{ asset("storage/$company->img") }}"width="100px"> </td>


                            <td>
                                <form action="{{ route('company.destroy', $company->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('company.edit', $company->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {!! $companies->links() !!} --}}
        </div>
    </body>

    </html>
@endsection
