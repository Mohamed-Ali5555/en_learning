<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <li>
                        <a href="{{ route('admin') }}"><i class="ti-home"></i><span
                                class="right-nav-text">@lang('site.dashboard')</span> </a>
                    </li>


                    <!-- Sliders -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#slider">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">banner</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="slider" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('banner.index') }}">Home banner</a></li>
                            {{-- <li><a href="{{route('banner.create')}}">create banner</a></li> --}}

                        </ul>
                    </li>


                    <!-- About -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#about">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">presedent </span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="about" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('presedent.index') }}">Home presedent</a></li>
                        </ul>
                    </li>





                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#version-menu">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">version</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="version-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('version_mes.index') }}">Home version</a></li>
                        </ul>
                    </li>



                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#videos-menu">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">videos</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="videos-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('video.index') }}">Home videos</a></li>
                        </ul>
                    </li>


                    <!-- category -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#mainCat-menu">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">company</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="mainCat-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('company.index') }}">Home company</a></li>
                        </ul>
                    </li>
                    <!-- products -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#products">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">aboutus</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="products" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('aboutUs.index') }}">Home about</a></li>
                        </ul>
                    </li>

                    <!-- products -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#ahmed">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">product</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="ahmed" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('product.index') }}">Home product</a></li>
                        </ul>
                    </li>
                       {{-- say --}}
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#say">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">Say</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="say" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('say.index') }}">Home Say</a></li>
                        </ul>
                    </li>

                    {{-- setting --}}
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#setting">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">Setting</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="setting" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('setting.index') }}">Home Setting</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#galary">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">galary</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="galary" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('galary.index') }}">Home galary</a></li>
                        </ul>
                    </li>


                    <!-- users
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#users">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">المستخدمين</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="users" class="collapse" data-parent="#sidebarnav">
                            {{-- <li><a href="{{route('users.index')}}">المستخدمين</a></li> --}}
                        </ul>
                    </li>


                    users -->
                    {{-- NEWS --}}
                    {{-- <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#gallery">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">News</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="gallery" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('new.index') }}">Home New</a></li>
                        </ul>
                    </li> --}}





                    <!-- users -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#contactus">
                            <div class="pull-left">
                                <i class="ti-user"> </i>

                                <span class="right-nav-text"> contactus </span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="contactus" class="collapse" data-parent="#contactus">
                            <li><a href="{{route('contactus.index')}}">contactus  </a></li>


                        </ul>
                    </li>


                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
