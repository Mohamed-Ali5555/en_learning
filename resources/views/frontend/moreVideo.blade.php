@extends('frontend.layouts.master')
@section('content')
    <div id="main" class="slideshow">
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

    <div class="campaigns">
        <div class="container">
            <div class="row">
                <nav class="button_camp col-md-12">
                    <ul>
                        <li class="selected">
                            <a href="{{ route('more.morevideo') }}"><span>All</span></a>
                        </li>
                        @foreach ($categoryVideos as $categoryVideo)
                            <li>
                                <a href="{{ url('/product_by_cat/' . $categoryVideo->id) }}"
                                    data-toggle="tab"><span>{{ $categoryVideo->title }}</span></a>
                            </li>
                        @endforeach

                    </ul>
                </nav>
                <div id="syncz" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @include('frontend.showVideoMore')



                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END gallery-image -->
    <!-- END gallery -->
@endsection
