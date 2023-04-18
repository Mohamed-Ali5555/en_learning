@extends('frontend.layouts.master')
@section('content')

    <div id="content mb-4">
        <div id="main" class="slideshow mb-5">
            <div id="sync10" class="owl-carousel owl-theme">
                {{-- @if ($banners->count() > 0) --}}

                @foreach ($report_news as $report_new)
                    <div class="item" style="background-image: url({{ asset("storage/$report_new->image") }}); width: 100%;height: 550px;">
                        <div class="container">
             
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        </div>
        <div class="blogs_grid " style="margin-top:60px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">



                            @if ($report_news != null)
                                {{-- first section presendent --}}
                                @foreach ($report_news as $report_new)
                                    <div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-block">
                                            <div class="post-image">
                                                <a href=""><img src="{{ asset("storage/$report_new->image") }}"
                                                        alt="" style="height:316px;"></a>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-title">
                                                    <a
                                                        href="{{ route('company.detail', $report_new->id) }}"><span>{{ $report_new->title }}</span></a>
                                                </div>
                                                <div class="post-meta">
                                                    <span>
                                                        <a href="">Life Style</a>
                                                        <span> - 29 November 2015 </span>
                                                    </span>
                                                </div>
                                                <div class="post-body">
                                                    <p>{{ $report_new->desc }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <span>not added</span>
                            @endif
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>




    @endsection
