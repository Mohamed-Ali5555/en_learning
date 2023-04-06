@extends('backend.layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>galarys</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2 table-responsive">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>All galary</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('galary.create') }}"> Create galarys</a>
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
                    <th>galary Photo</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galarys as $galary)
                    <tr>
                        <td>{{ $galary->id }}</td>
                        <td><img src="{{asset("storage/$galary->image")}}"width="100px"></td>
                        <td style=" display: contents;">
                            <form action="{{ route('galary.destroy',$galary->id) }}" method="Post" class="mt-2">
                                <a class="btn btn-primary" href="{{ route('galary.edit',$galary->id) }}">Edit</a>
                               <a class="btn btn-primary" href="{{ route('galary.show', $galary->id) }}">Add Gallary Banner</a>

                               
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{-- {!! $galary->links() !!} --}}
    </div>
</body>
</html>


@endsection


