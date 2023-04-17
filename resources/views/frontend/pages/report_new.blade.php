@extends('frontend.layouts.master')
@section('content')

    <div id="content mb-4">
        <div id="main" class="slideshow mb-5">
            <div id="sync10" class="owl-carousel owl-theme">
                {{-- @if ($banners->count() > 0) --}}

                @foreach ($banners as $banner)
                    <div class="item" style="background-image: url({{ asset("storage/$banner->image") }}); width: 100%;">
                        <div class="container">
                            {{-- <div class="row"> --}}
                            <div class="text_zz">
                                @if ($banner->status == 1)
                                    <div class="card card333" style="width: 22rem;">

                                        <div class="card-body">
                                            <h3 class="card-title">{{ $banner->title }}</h3>
                                            <p class="card-text">{{ $banner->desc }}</p>
                                            <div class="donate">
                                                {{-- <div class="button_donate">
                                                <a href="#">Donate Now</a>
                                            </div> --}}
                                            </div>
                                        </div>

                                    </div>
                                @endif
                                {{-- <h3>{{ $banner->title }}</h3> --}}
                                {{-- <p style="color:white;">{{ $banner->desc }}</p> --}}

                                {{-- <div class="donate">
                                    <div class="button_donate">
                                        <a href="#">Donate Now</a>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- </div> --}}
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
