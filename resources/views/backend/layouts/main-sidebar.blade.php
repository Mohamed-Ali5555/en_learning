<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <li>
                        <a href="{{ route('admin') }}"><i class="ti-home"></i><span class="right-nav-text">@lang('site.dashboard')</span> </a>
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
                            <li><a href="{{route('banner.index')}}">Home banner</a></li>
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
                            <li><a href="{{route('presedent.index')}}">Home presedent</a></li>
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
                                <li><a href="{{route('company.index')}}">Home company</a></li>
                            </ul>
                        </li>
                    <!-- products -->
                        <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#products">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">Products</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="products" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('product.index')}}">Home products</a></li>
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
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#gallery">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text"> @lang('site.gallery')</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="gallery" class="collapse" data-parent="#sidebarnav">
                            {{-- <li><a href="{{route('gallery.index')}}">@lang('site.gallery') </a></li> --}}
                        </ul>
                    </li>


                     <!-- users -->
                     <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#contact">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text"> @lang('site.contacts') </span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="contact" class="collapse" data-parent="#sidebarnav">
                            {{-- <li><a href="{{route('contact.index')}}">@lang('site.contacts')  </a></li> --}}
                        </ul>
                    </li>


                     <!-- users -->
                     <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#form">
                            <div class="pull-left">
                                <i class="ti-user">  </i>

                                <span class="right-nav-text"> @lang('site.message')   </span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="form" class="collapse" data-parent="#sidebarnav">
                            {{-- <li><a href="{{route('message.index')}}">@lang('site.message')  </a></li> --}}


                        </ul>
                    </li>


                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
