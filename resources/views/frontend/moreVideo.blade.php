@extends('frontend.layouts.master')
@section('content')
    {{-- <div class="container">
        <div class="row">
            @if ($moreVideos != null)

                @foreach ($moreVideos as $moreVideo)
                    <div class="col-md-4">


                        <div class="card" style="">
                            <a href="javascript:;" data-pswp-src="{{ $moreVideo->link }}" data-pswp-width="752"
                                data-pswp-height="500"> <iframe height="560px" width="100%" src="{{ $moreVideo->link }}"
                                    class="img-portrait">
                                </iframe>

                            </a>
                            <div class="card-body">
                                <p class="card-text">{{ $moreVideo->title }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

				@else
<div>not found</div>
				@endif

        </div>
    </div> --}}

    <div class="bg_full_cp">
        <div class="bg_full" style="background-image: url(../../images/bg-campaign.jpg); background-repeat: no-repeat; background-position: center center;">
            <div class="content">
                <div class="ct">
                    <h2 class="title">
                        <span>Your kindness might help lots of people have better lives.</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="campaigns">
        <div class="container">
            <div class="row">
                <nav class="button_camp col-md-12">
                    <ul>
                        <li class="selected">
                            <a href=""><span>All</span></a>
                        </li>
                        @foreach ($categoryVideos as $categoryVideo )
                        <li>
                            <a href=""><span>{{ $categoryVideo->title }}</span></a>
                        </li>
                        @endforeach
                        {{-- <li>
                            <a href=""><span>Environment</span></a>
                        </li> --}}
                        {{-- <li>
                            <a href=""><span>Food</span></a>
                        </li> --}}
                        {{-- <li>
                            <a href=""><span>Others</span></a>
                        </li> --}}
                        {{-- <li>
                            <a href=""><span>Water Drinks</span></a>
                        </li> --}}
                    </ul>
                </nav>
                <div id="syncz" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">

                    <div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="z">
                            <div class="img">
                                <div class="img-1">
                                    <img src="../../images/img_01.jpg" alt="">
                                </div>
                                <div class="img-2">
                                    <img src="../../images/62.png" alt="">
                                </div>
                            </div>
                            <div class="ct">
                                <div class="text_show">
                                    <h3><a href="../campaigns/campaigns-detail.html">Vocational training</a></h3>
                                    <p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
                                </div>
                                {{-- <div class="donate">
                                    <div class="button_donate">
                                        <a href="#">Donate Now</a>
                                    </div>
                                </div>
                                <div class="raised">
                                    <p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="z">
                            <div class="img">
                                <div class="img-1">
                                    <img src="../../images/img_02.jpg" alt="">
                                </div>
                                <div class="img-2">
                                    <img src="../../images/35.png" alt="">
                                </div>
                            </div>
                            <div class="ct">
                                <div class="text_show">
                                    <h3><a href="../campaigns/campaigns-detail.html">Education for the Children</a></h3>
                                    <p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
                                </div>
                                {{-- <div class="donate">
                                    <div class="button_donate">
                                        <a href="#">Donate Now</a>
                                    </div>
                                </div>
                                <div class="raised">
                                    <p><span>$32,583</span> Raised of <b>$4879</b> Goal</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="z">
                            <div class="img">
                                <div class="img-1">
                                    <img src="../../images/img_01.jpg" alt="">
                                </div>
                                <div class="img-2">
                                    <img src="../../images/62.png" alt="">
                                </div>
                            </div>
                            <div class="ct">
                                <div class="text_show">
                                    <h3><a href="../campaigns/campaigns-detail.html">Vocational training</a></h3>
                                    <p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
                                </div>
                                <div class="donate">
                                    <div class="button_donate">
                                        <a href="#">Donate Now</a>
                                    </div>
                                </div>
                                <div class="raised">
                                    <p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="z">
                            <div class="img">
                                <div class="img-1">
                                    <img src="../../images/img_03.jpg" alt="">
                                </div>
                                <div class="img-2">
                                    <img src="../../images/86.png" alt="">
                                </div>
                            </div>
                            <div class="ct">
                                <div class="text_show">
                                    <h3><a href="../campaigns/campaigns-detail.html">Education for the Children</a></h3>
                                    <p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
                                </div>
                                <div class="donate">
                                    <div class="button_donate">
                                        <a href="#">Donate Now</a>
                                    </div>
                                </div>
                                <div class="raised">
                                    <p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="z">
                            <div class="img">
                                <div class="img-1">
                                    <img src="../../images/img_01.jpg" alt="">
                                </div>
                                <div class="img-2">
                                    <img src="../../images/62.png" alt="">
                                </div>
                            </div>
                            <div class="ct">
                                <div class="text_show">
                                    <h3><a href="../campaigns/campaigns-detail.html">Vocational training</a></h3>
                                    <p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
                                </div>
                                <div class="donate">
                                    <div class="button_donate">
                                        <a href="#">Donate Now</a>
                                    </div>
                                </div>
                                <div class="raised">
                                    <p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="z">
                            <div class="img">
                                <div class="img-1">
                                    <img src="../../images/img_01.jpg" alt="">
                                </div>
                                <div class="img-2">
                                    <img src="../../images/62.png" alt="">
                                </div>
                            </div>
                            <div class="ct">
                                <div class="text_show">
                                    <h3><a href="../campaigns/campaigns-detail.html">Vocational training</a></h3>
                                    <p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
                                </div>
                                <div class="donate">
                                    <div class="button_donate">
                                        <a href="#">Donate Now</a>
                                    </div>
                                </div>
                                <div class="raised">
                                    <p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END gallery-image -->
    <!-- END gallery -->
@endsection
