@extends('backend.layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Presedent</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2 table-responsive">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>All Presedents</h2>
                </div>

                <d class="pull-right mb-2">
                @if ($presedents->count() > 0)
                {{-- <a class="btn btn-success" href="#"> edaboutussit </a> --}}

                @else
                <a class="btn btn-success" href="{{ route('presedent.create') }}"> Create Presedent</a>
                   @endif
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
                    <th>Presedent Name</th>
                    <th>Presedent Descraption</th>
                    <th>Presedent Photo</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presedents as $presedent)
                    <tr>
                        <td>{{ $presedent->id }}</td>
                        <td>{{ $presedent->title }}</td>
                        <td>{!!$presedent->desc!!}</td>
                        <td><img src="{{ asset('assets/uploads') . '/' . $presedent->image }}" width="100px"></td>
                        <td>
                            <form action="{{ route('presedent.destroy',$presedent->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('presedent.edit',$presedent->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{-- {!! $presedent->links() !!} --}}
    </div>
</body>
</html>


@endsection
