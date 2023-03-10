@extends('frontend.layouts.master')
@section('content')
    <div class="page_about pages_item">

        @foreach ($aboutus as $about)
            <div class="bg_full_cp">


                <div class="bg_full"
                    style="background-image: url({{ asset("storage/$about->image") }}); background-repeat: no-repeat; background-position: ;">
                    <div class="container">
                        <div class="ct">
                            <h2 class="page_title">
                                <span>About Us</span>
                            </h2>
                            <div class="breadcrumb-links">
                                <a href="../../index.html">Home</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="who-about">
                <div class="container">
                    <div class="row">
                        <div class="about_left col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="content-inner">
                                <div class="content">
                                    <h2 class="title">
                                        <span><strong>Who</strong> We Are ?</span>
                                    </h2>
                                    <div class="desc">
                                        <p>{{$about->heading}} </p>
                                        <p>{{$about->content}}</p>
                                    </div>
                                </div>
                                <div class="button-readmore">
                                    <div class="button_donate">
                                        <a href="#">Readmore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about_right col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="content">
                                <img src="{{ asset("storage/$about->size_guid") }}"alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach



        <div class="home4_help">
            <div class="container">
                <div class="row">
                    <div class="gsc-heading">
                        <h2 class="title">
                            <span>
                                How Can You <strong>Help ?</strong>
                            </span>
                        </h2>
                    </div>
                    <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="gsc-image-content">
                            <div class="image">
                                <a href=""><img src="../../images/image-1.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a>
                                        <i class="material-icons">card_giftcard</i>Make a Gift
                                    </a>
                                </h4>
                                <div class="desc">
                                    <p>Proin porta facilisis pretium. Elements sapien mentm sapien neque lobortis laoreet
                                    </p>
                                </div>
                                <div class="readmore">
                                    <div class="button_donate green">
                                        <a href="#">Join us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="gsc-image-content">
                            <div class="image">
                                <a href=""><img src="../../images/image-2.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a>
                                        <i class="material-icons">favorite_border</i>Become a Volunteer
                                    </a>
                                </h4>
                                <div class="desc">
                                    <p>Proin porta facilisis pretium. Elements sapien mentm sapien neque lobortis laoreet
                                    </p>
                                </div>
                                <div class="readmore">
                                    <div class="button_donate green">
                                        <a href="#">Join us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="gsc-image-content">
                            <div class="image">
                                <a href=""><img src="../../images/image-3.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a>
                                        <i class="material-icons">attach_money</i>Send Donation
                                    </a>
                                </h4>
                                <div class="desc">
                                    <p>Proin porta facilisis pretium. Elements sapien mentm sapien neque lobortis laoreet
                                    </p>
                                </div>
                                <div class="readmore">
                                    <div class="button_donate green">
                                        <a href="#">Join us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="meet">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h3>Meet Our <b>Volunteers</b></h3>
                    </div>
                    <div id="sync2" class="owl-carousel owl-theme">
                        @foreach ($products as $product )

                        <div class="item">
                            <div class="img">
                                <img src="{{ asset("storage/$product->image") }}"alt="">
                                <div class="social">
                                    <span>
                                        <a href=""><i class="fa fa-facebook"></i></a><br>
                                        <a href=""><i class="fa fa-twitter"></i></a><br>
                                        <a href=""><i class="fa fa-dribbble"></i></a><br>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
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
                </div>
            </div>
        </div>
        <div class="people_say">
            <div class="container">
                <div class="row">
                    <div class="wrap">
                        <div class="title">
                            <h3>What people <b>Say?</b></h3>
                        </div>
                        <div id="sync4" class="owl-carousel owl-theme">
                            <div class="item">
                                <p><span>"</span> I go to many land, meet many people and know that there are many<br> poor
                                    people that need our help. <span>"</span></p>
                                <h4>John Doe</h4>
                                <p class="l">Ceo of MediaLeak - <a href="#">www.medialeak.com</a></p>
                            </div>
                            <div class="item">
                                <p><span>"</span> I go to many land, meet many people and know that there are many<br> poor
                                    people that need our help. <span>"</span></p>
                                <h4>John Doe</h4>
                                <p class="l">Ceo of MediaLeak - <a href="#">www.medialeak.com</a></p>
                            </div>
                            <div class="item">
                                <p><span>"</span> I go to many land, meet many people and know that there are many<br> poor
                                    people that need our help. <span>"</span></p>
                                <h4>John Doe</h4>
                                <p class="l">Ceo of MediaLeak - <a href="#">www.medialeak.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tt_images" style="padding-bottom: 100px; background-color: #EFF1F2;">
            <div class="container">
                <div class="row">
                    <div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="content_block">
                            <span class="zmdi zmdi-favorite-outline" style="color: #ff9800;"></span>
                            <h3 class="i1" style="color: #ff9800;">60,875</h3>
                            <p>Volunteer Helper</p>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="content_block">
                            <span class="zmdi zmdi-card-giftcard" style="color: rgb(139, 202, 78);"></span>
                            <h3 class="i2" style="color: rgb(139, 202, 78);">682,345</h3>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
