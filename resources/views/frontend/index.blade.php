@extends('frontend.layouts.master')
@section('content')
    <div id="content">





        <div id="main" class="slideshow">
            <div id="sync10" class="owl-carousel owl-theme">
                @foreach ($banners as $banner)
                    <div class="item" style="background-image: url({{ asset("storage/$banner->image") }}); width: 100%;">
                        <div class="container">
                            <div class="text_zz">
                                <h3>{{ $banner->title }}</h3>
                                <p style="color:white;">{{ $banner->desc }}</p>

                                <div class="donate">
                                    <div class="button_donate">
                                        <a href="#">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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


        {{-- end section banner --}}
        <div class="static_donate">
            <div class="container">
                <div class="row">

                    <div class="title col-md-7 col-sm-8 col-xs-12">
                        <h3>Make a diffirence in the life of a child</h3>
                        <p>Please help us change lives around the word!</p>
                    </div>
                    <div class="donate col-md-5 col-sm-4 col-xs-12">
                        <div class="button_donate">
                            <a href="pages/campaigns/campaigns-detail.html">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="help">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <span>We're helping hand on</span>
                        <h3><b>80.593 Children</b> in <b>125</b> Countries</h3>
                    </div>
                    <div class="left col-md-9">
                        <div class="list-item">
                            <div class="item col-md-6 col-sm-6 col-xs-12">
                                <div class="icon col-md-2">
                                    <i class="material-icons">collections_bookmark</i>
                                </div>
                                <div class="text_show col-md-10">
                                    <h3>Education</h3>
                                    <p>Praesent vestibulum aenean nommy eros hendrerit mauris. Cum sociis natoqueing
                                        patibuset mgnis parturient.</p>
                                </div>
                            </div>
                            <div class="item col-md-6 col-sm-6 col-xs-12">
                                <div class="icon col-md-2">
                                    <i class="material-icons">local_cafe</i>
                                </div>
                                <div class="text_show col-md-10">
                                    <h3>Help $ Support</h3>
                                    <p>Praesent vestibulum aenean nommy eros hendrerit mauris. Cum sociis natoqueing
                                        patibuset mgnis parturient.</p>
                                </div>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="item col-md-6 col-sm-6 col-xs-12">
                                <div class="icon col-md-2">
                                    <i class="material-icons">favorite_border</i>
                                </div>
                                <div class="text_show col-md-10">
                                    <h3>Volunteering</h3>
                                    <p>Praesent vestibulum aenean nommy eros hendrerit mauris. Cum sociis natoqueing
                                        patibuset mgnis parturient.</p>
                                </div>
                            </div>
                            <div class="item col-md-6 col-sm-6 col-xs-12">
                                <div class="icon col-md-2">
                                    <i class="material-icons">person_add</i>
                                </div>
                                <div class="text_show col-md-10">
                                    <h3>Adoption</h3>
                                    <p>Praesent vestibulum aenean nommy eros hendrerit mauris. Cum sociis natoqueing
                                        patibuset mgnis parturient.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right col-md-3">
                        <img src="images/img_static_01.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>




        {{-- section company --}}

        <div class="campaigns">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h3>Latest <b>Campaigns</b></h3>
                    </div>
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
                                            <h3><a href="pages/campaigns/campaigns-detail.html"> {{ $company->title }}</a>
                                            </h3>
                                            <p>{{ $company->desc }}
                                            </p>
                                        </div>
                                        <div class="donate">
                                            <div class="button_donate">
                                                <a href="pages/campaigns/campaigns-detail.html">Donate Now</a>
                                            </div>
                                            <p>57 Day left</p>
                                        </div>
                                        <div class="raised">
                                            <p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


        {{-- end section company --}}
        <div class="recent">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h3>Recent <b>New</b> & <b>Video</b></h3>
                    </div>
                    <div class="left col-md-6 col-sm-12 col-xs-12">
                        <img src="images/stories_img_01.jpg" alt="">
                        <a href="#">STORY</a>
                        <p>A girl's father shows charity by helping another girl feel included at a birthday party.</p>
                    </div>
                    <div class="right col-md-6 col-sm-12 col-xs-12">
                        <div class="item col-md-12 col-sm-4 col-xs-12">
                            <div class="row">
                                <div class="img col-md-5">
                                    <img src="images/stories_img_02.jpg" alt="">
                                </div>
                                <div class="txt col-md-7">
                                    <a href="#">STORY</a>
                                    <p>BGEA Chaplains Aim to Share Place, Hope in Midst of Civil Unrest in Milwaukee</p>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12 col-sm-4 col-xs-12">
                            <div class="row">
                                <div class="img col-md-5">
                                    <img src="images/stories_img_03.jpg" alt="">
                                </div>
                                <div class="txt col-md-7">
                                    <a href="#">VIDEO</a>
                                    <p>Get a free ride to the Aquarium aboard the MST Trolley</p>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12 col-sm-4 col-xs-12">
                            <div class="row">
                                <div class="img col-md-5">
                                    <img src="images/stories_img_04.jpg" alt="">
                                </div>
                                <div class="txt col-md-7">
                                    <a href="#">STORY</a>
                                    <p>Watch! Viggo Mortensen Celebrates 100 years of National Parks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- first section presendent --}}
        @foreach ($presedents as $presedent)
            <div class="join" 
             {{-- style="background-image: url({{ asset("storage/$presedent->image") }}); width: 100%;" --}}
             >
                <div class="container">
                    <div class="row">
                        <div class="text_show col-md-6">
                            <h3>{{$presedent->title}}</h3>
                            <p>{{$presedent->desc}}</p>
                            <div class="donate">
                                <div class="button_donate">
                                    <a href="pages/campaigns/campaigns-detail.html">Join Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                          <img src="{{ asset("storage/$presedent->image") }}"alt="">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- end section presedent --}}
        <div class="meet">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h3>Meet Our <b>Volunteers</b></h3>
                    </div>
                    <div id="sync2" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="img">
                                <img src="images/meet_img_01.jpg" alt="">
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
                                <h3><a href="#">Michale Blacksun</a></h3>
                                <p>Duis elentum sapien neque Habitant morbi trique</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="images/meet_img_02.jpg" alt="">
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
                                <h3><a href="#">Gareth Sougate</a></h3>
                                <p>Duis elentum sapien neque Habitant morbi trique</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="images/meet_img_01.jpg" alt="">
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
                                <h3><a href="#">Michale Blacksun</a></h3>
                                <p>Duis elentum sapien neque Habitant morbi trique</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="images/meet_img_03.jpg" alt="">
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
                                <h3><a href="#">Jessica Albalis</a></h3>
                                <p>Duis elentum sapien neque Habitant morbi trique</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="images/meet_img_04.jpg" alt="">
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
                                <h3><a href="#">Maria Okazaki</a></h3>
                                <p>Duis elentum sapien neque Habitant morbi trique</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="images/meet_img_05.jpg" alt="">
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
                                <h3><a href="#">Tran Tuan Tu</a></h3>
                                <p>Duis elentum sapien neque Habitant morbi trique</p>
                            </div>
                        </div>
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
        <div class="tt_images">
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
        <div class="global">
            <div class="container">
                <div class="title">
                    <h3>Global <b>Partners</b></h3>
                </div>
                <div class="content">
                    <ul id="sync5" class="owl-carousel owl-theme">
                        <li class="item">
                            <div class="bl_image">
                                <img src="images/global_01.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="bl_image">
                                <img src="images/global_02.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="bl_image">
                                <img src="images/global_03.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="bl_image">
                                <img src="images/global_04.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="bl_image">
                                <img src="images/global_05.png" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="instagram">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h3>Follow us on Instagram <a href="#">@CharityPlus</a></h3>
                    </div>
                    <div class="content">
                        <ul id="sync6" class="owl-carousel owl-theme">
                            <li class="item">
                                <img src="images/i_img1.jpg" alt="">
                            </li>
                            <li class="item">
                                <img src="images/i_img2.jpg" alt="">
                            </li>
                            <li class="item">
                                <img src="images/i_img3.jpg" alt="">
                            </li>
                            <li class="item">
                                <img src="images/i_img4.jpg" alt="">
                            </li>
                            <li class="item">
                                <img src="images/i_img5.jpg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ready">
            <div class="container">
                <div class="left col-md-6 col-sm-12 col-xs-12">
                    <h3>Are you ready to volunteer?</h3>
                </div>
                <div class="right col-md-6 col-sm-12 col-xs-12">
                    <div class="b">
                        <div class="button_donate btn-1"">
                            <a href="#">Become a Volunteer</a>
                        </div>
                        <div class="button_donate btn-2">
                            <a href="#">Make a Donation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
