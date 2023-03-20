@extends('frontend.layouts.master')
@section('content')
<div id="content">
    <div id="main" class="slideshow">
        <div id="sync10" class="owl-carousel owl-theme">
            {{-- @if ($banners->count() > 0) --}}

            @foreach ($banners as $banner)
                <div class="item" style="background-image: url({{ asset("storage/$banner->image") }}); width: 100%;">
                    <div class="container">
                        {{-- <div class="row"> --}}
                        <div class="text_zz">

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
            {{-- @else
<span>not added</span>
@endif --}}
        </div>
    </div>

    <div class="careers">
        <div class="container">
            <div class="title">
                <h3>Careers</h3>
            </div>
            <div class="row">
                <div class="cosl col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="image-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <img src="{{ asset("storage/$company->image") }}" alt="">
                        </div>
                        <div class="content-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h4>{{ $company->name }}</h4>
                            <p>{{ $company->desc }}</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="cosl col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="content-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h4>{{ $company->name }}</h4>
                            <p>{{ $company->desc }}</p>
                        </div>
                        <div class="image-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <img src="{{ asset("storage/$company->image") }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="cosl col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="image-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <img src="{{ asset("storage/$company->image") }}" alt="">
                        </div>
                        <div class="content-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h4>{{ $company->name }}</h4>
                            <p>{{ $company->desc }}</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
