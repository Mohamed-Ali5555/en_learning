@extends('backend.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>report_news</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2 table-responsive">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>report_news</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('report_news.create') }}"> Create report_news</a>
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
                        <th>report_news title</th>
                        <th>report_news Descraption</th>
                        <th>report_news Photo</th>
                        <th>detail title</th>

                        <th>detail body</th>
                        <th>detail banner</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($report_news as $report_new)
                        <tr>
                            <td>{{ $report_new->id }}</td>
                            <td>{{ $report_new->title }}</td>
                            <td>{{ $report_new->desc }}</td>
                            <td><img src="{{ asset("storage/$report_new->image") }}"width="100px"></td>


                            <td>{{ $report_new->title_detail }}</td>
                            <td>{!! html_entity_decode($report_new->desc_detail) !!}</td>
                            <td> <img src="{{ asset("storage/$report_new->banner_img") }}"width="100px"> </td>


                            <td>
                                <form action="{{ route('report_news.destroy', $report_new->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('report_news.edit', $report_new->id) }}">Edit</a>
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
