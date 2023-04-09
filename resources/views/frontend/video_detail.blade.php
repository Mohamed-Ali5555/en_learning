@extends('frontend.layouts.master')
@section('content')

    <div id="main" class="slideshow mb-3">
        <div id="sync10" class="owl-carousel owl-theme">
            {{-- @if ($banners->count() > 0) --}}
            @if ($banners != null)
                @foreach ($banners as $banner)
                    <div class="item"
                        style="background-image: url({{ asset("storage/$banner->image") }}); width: 100%;height:550px;">
                        <div class="container">
                            {{-- <div class="row"> --}}
                            <div class="text_zz">


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
            @else
                <div>not fuond</div>
            @endif
        </div>
    </div>

    <div class="list_posts">
        <div class="container">
            <div class="row">
                <div class="main-content col-xs-12 col-md-8">
                    <div class="main-content-inner">
                        <div class="cmp_detail">
                            <div class="media">
                                <div class="item-image mt-5">

                                    <iframe width="616px" height="482px" src="{{ $moreVideos->link }}">
                                    </iframe>
                                    {{-- <img src="{{ asset("storage/$moreVideos->image") }}" alt=""> --}}
                                </div>
                            </div>

                            <div class="content">
                                <h3 class="post_title"> {{ $moreVideos->title }}</h3>
                                <div class="post_content">

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="sidebar-right sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar-inner">
                        <div class="related_camp">
                            <h3 class="title">Related Campaigns</h3>

                            @if (count($moreVideos->rel_videos) > 0)
                                <div class="item">

                                    @foreach ($moreVideos->rel_videos as $item)
                                        @if ($item->id != $moreVideos->id)
                                            <div class="z">
                                                <div class="img">
                                                    <div class="img-1">
                                                        <img src="{{ asset("storage/$item->image") }}" alt="">
                                                    </div>

                                                </div>
                                                <div class="ct">
                                                    <div class="text_show">
                                                        <h3><a
                                                                href="{{ route('video.detail', $item->id) }}">{{ $item->title }}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
