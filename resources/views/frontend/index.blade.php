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
                {{-- @else
<span>not added</span>
@endif --}}
            </div>
        </div>




        {{-- start section banner --}}

        {{-- @foreach ($banners as $banner)
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">

                </div>
                <div class="carousel-inner">




                    <div class="carousel-item ">
                        <img src="{{ asset("storage/$banner->image") }}" class="d-block w-100" alt="...ddddddd">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $banner->title }}</h5>
                            <p>{{ $banner->desc }}</p>
                        </div>
                    </div>

                </div>

            </div>
        @endforeach --}}

        @if ($mainbanner != null)
            {{-- end section banner --}}
            <div class="static_donate">
                <div class="container">
                    <div class="row">
                        {{-- @foreach ($banners as $banner) --}}

                        <div class="title col-md-7 col-sm-8 col-xs-12">
                            <h3>{{ $mainbanner->title }}</h3>
                            <p>{!! $mainbanner->desc !!}</p>
                        </div>
                        {{-- @endforeach --}}
                        <div class="donate col-md-5 col-sm-4 col-xs-12">
                            <div class="button_donate">
                                {{-- <a href="pages/campaigns/campaigns-detail.html">Donate Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div>not fuond</div>
        @endif
        <div class="help">
            <div class="container">
                <div class="row">
                    {{-- @foreach ($VersionMes as $VersionMe) --}}
                    @if ($VersionMes != null)
                        <div class="title">
                            {{-- <span>We're helping hand on</span> --}}
                            <h3><b>{{ $VersionMes->main_title }}</b> </h3>
                        </div>

                        {{-- @endforeach --}}
                        <div class="left col-md-9">
                            <div class="list-item">
                                @foreach ($versionMesAtrrs as $versionMesAtrr)
                                    {{-- <div class="item col-md-6">
                                        <div class="icon col-md-2">
                                            <i class="material-icons">collections_bookmark</i>
                                        </div>
                                        <div class="text_show col-md-10">
                                            <h3>Education</h3>
                                            <p>Praesent vestibulum aenean nommy eros hendrerit mauris. Cum sociis natoqueing
                                                patibuset mgnis parturient.</p>
                                        </div>
                                    </div> --}}



                                    <div class="item col-md-6 col-sm-6 col-xs-12">
                                        <div class="icon col-md-2">
                                            <i class="material-icons"></i>
                                            <img src="{{ asset('assets/uploads') . '/' . $versionMesAtrr->image }}"
                                                style="width:45px;height:50px;" />
                                            {{-- <img src="{{ asset("storage/$versionMesAtrr->image") }}"alt="" style="    height: 294px; --}}

                                        </div>
                                        <div class="text_show col-md-10">
                                            <h3>{{ $versionMesAtrr->title }}</h3>
                                            <p style="width:55px;">{!! $versionMesAtrr->desc !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="right col-md-3">
                            <img src="{{ asset('assets/uploads') . '/' . $VersionMes->image }}"alt=""
                                style="    height: 294px;
">
                        </div>
                    @else
                        <div>not fuond</div>
                    @endif
                </div>
            </div>
        </div>




        {{-- section company --}}

        <div class="campaigns" id="company">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h3>our <b>Companies</b></h3>
                    </div>
                    @if ($companies != null)
                        <div id="sync1" class="owl-carousel owl-theme">

                            @foreach ($companies as $company)
                                <div class="item">
                                    <div class="z">
                                        <div class="img">
                                            <div class="img-1">
                                                <img src="{{ asset("storage/$company->image") }}"alt="">
                                            </div>
                                            <div class="img-2">
                                                <img src="images/62.png" alt="">
                                            </div>
                                        </div>
                                        <div class="ct">
                                            <div class="text_show">
                                                <h3><a href="pages/campaigns/campaigns-detail.html">
                                                        {{ $company->title }}</a>
                                                </h3>
                                                <p>{{ $company->desc }}
                                                </p>
                                            </div>
                                            <div class="donate">
                                                <div class="button_donate">
                                                    <a href="{{ route('company.detail', $company->id) }}">More details </a>
                                                </div>
                                            </div>
                                            <div class="raised">
                                                {{-- <p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    @else
                        <div>not fuond</div>
                    @endif
                </div>
            </div>
        </div>


        {{-- end section company --}}

        {{-- start video section --}}


        <div class="recent">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h3>Recent <b>News</b> & <b>Video</b></h3>
                    </div>

                    @if ($videos != null)
                        <div class="left col-md-6 col-sm-12 col-xs-12">

                            <iframe height="560px" width="100%" src="{{ $videos->video }}">
                            </iframe>


                            <p>{{ $videos->title }}</p>
                            <a href="{{ route('more.morevideo') }}">More morevideo </a>
                        </div>
                    @else
                        <span>not added</span>
                    @endif
                    <div class="right col-md-6 col-sm-12 col-xs-12">
                        @if ($video_news != null)
                            @foreach ($video_news as $video_new)
                                <div class="item col-md-12 col-sm-4 col-xs-12">
                                    <div class="row">
                                        <div class="img col-md-5">
                                            {{-- <img src="{{ asset('backend/assets/uploads' . '/' . $video_new->image) }}"
                                            alt=""> --}}

                                            <img src="{{ asset("storage/$video_new->image") }}" alt="">

                                        </div>
                                        <div class="txt col-md-7">
                                            <h3>{{ $video_new->title }}</h3>
                                            <p>{{ $video_new->desc }}</p>
                                            <a href="{{ route('company.detail', $video_new->id) }}">More details </a>
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
        {{-- start video section --}}




        @if ($presedents != null)
            {{-- first section presendent --}}
            @foreach ($presedents as $presedent)
                <div id="presedent" class="join"
                    style="background-image: url({{ asset('assets/uploads') . '/' . $presedent->image }}); width: 100%;">
                    <div class="container">
                        <div class="row">
                            <div class="text_show col-md-6">
                                <h3 style="color: black !important">{{ $presedent->title }}</h3>
                                <p style="color: black !important">{!! $presedent->desc !!} </p>
                                <div class="donate">
                                    <div class="button_donate">
                                        {{-- <a href="pages/campaigns/campaigns-detail.html">Join Now</a> --}}
                                    </div>
                                </div>
                            </div>
                            {{--
                        <div class="col-md-6">
                          <img src="{{ asset("storage/$presedent->image") }}"alt="">
                        </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <span>not added</span>
        @endif
        {{-- end section presedent --}}
        {{-- start Product --}}
        <div class="meet" id="services">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h3> Our <b>services</b></h3>
                    </div>
                    @if ($products != null)
                        <div id="sync2" class="owl-carousel owl-theme">
                            @foreach ($products as $product)
                                <div class="item">
                                    <div class="img">
                                        <img src="{{ asset("storage/$product->image") }}"alt="">
                                        <div class="social">
                                            <span>
                                                <a href=""><i class="fa fa-facebook"></i></a><br>
                                                <a href=""><i class="fa fa-twitter"></i></a><br>
                                                <a href=""><i class="fa fa-dribbble"></i></a><br>
                                                <a href=""><i class="fa fa-google-plus"></i></a><br>
                                                <a href=""><i class="fa fa-instagram"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text_show">
                                        <h3>{{ $product->title }}</h3>
                                        <p>{{ $product->desc }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <span>not added</span>
                    @endif
                </div>
            </div>
        </div>
        {{-- End product --}}
        <div class="people_say">
            <div class="container">
                <div class="row">
                    <div class="wrap">
                        <div class="title">
                            <h3>Sheikh Abdulaziz <b>Say?</b></h3>
                        </div>
                        @if ($says != null)
                            <div id="sync4" class="owl-carousel owl-theme">

                                @foreach ($says as $say)
                                    <div class="item">
                                        <p><span>"</span> {{ $say->desc }}
                                            <span>"</span>
                                        </p>
                                    </div>
                                @endforeach

                            </div>
                        @else
                            <span>not added</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="tt_images">
            <div class="container">
                <div class="row">
                    @if ($scores != null)
                        @foreach ($scores as $score)
                            <div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="content_block">
                                    <img style="width: 50px; border-radius: 10px;"
                                        src="{{ asset("storage/$score->image") }}"alt="">
                                    {{-- <span class="zmdi zmdi-favorite-outline" style="color: #ff9800;"></span> --}}
                                    <h3 class="i1" style="color: #ff9800;">{{ $score->score }}</h3>
                                    <h3>{{ $score->title }}</h3>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <span>not added</span>
                    @endif
                    {{-- <div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="content_block">
                            <span class="zmdi zmdi-card-giftcard" style="color: rgb(139, 202, 78);"></span>
                            <h3 class="i2" style="color: rgb(139, 202, 78);"></h3>
                            <p>Donated</p>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="content_block">
                            <span class="zmdi zmdi-mood" style="color: #fec501;"></span>
                            <h3 class="i3" style="color: #fec501;">28,374</h3>
                            <p>Happy Children</p>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="content_block">
                            <span class="zmdi zmdi-library" style="color: #5586e8;"></span>
                            <h3 class="i4" style="color: #5586e8;">589</h3>
                            <p>Products & Gifts</p>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
        <div class="global">
            <div class="container">
                <div class="title">
                    <h3>Global <b>Partners</b></h3>
                </div>
                <div class="content">
                    @if ($companies != null)
                        <ul id="sync5" class="owl-carousel owl-theme">
                            @foreach ($companies as $company)
                                <li class="item">
                                    <div class="bl_image">
                                        <img src="{{ asset("storage/$company->image") }}"alt="">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <span>not added</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="instagram">
            <div class="container">
                <div class="row">
                    @if ($settings != null)
                        @foreach ($settings as $setting)
                            <div class="title">
                                <h3>Follow us on {{ $setting->title }} <a href="#">{{ $setting->link }}</a></h3>
                            </div>
                        @endforeach
                    @else
                        <span>not added</span>
                    @endif
                    <div class="content" id="galary">
                        @if ($galarys != null)
                            <ul id="sync6" class="owl-carousel owl-theme">
                                @foreach ($galarys as $galary)
                                    <a class="item" href="{{ route('galaryBannerFront', $galary->id) }}">
                                        <img src="{{ asset("storage/$galary->image") }}"alt=""
                                            style="width:200px;height:300px;">
                                    </a>
                                @endforeach
                            </ul>
                        @else
                            <span>not added</span>
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
