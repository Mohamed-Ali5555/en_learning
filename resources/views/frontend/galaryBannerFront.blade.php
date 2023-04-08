@extends('frontend.layouts.master')
@section('content')
    {{-- <div class="page_about pages_item">

        <div class="gallery-content">


            <!-- BEGIN gallery -->
            <div class="gallery">
                <!-- BEGIN gallery-header -->
                <div class="d-flex align-items-center mb-3">
                    <!-- BEGIN gallery-title -->
                    <div class="gallery-title mb-0">
                        <a href="#">
                            Random <i class="fa fa-chevron-right"></i>
                            <small>May 1, 2022</small>
                        </a>
                    </div>
                    <!-- END gallery-title -->

                    <!-- BEGIN btn-group -->

                    <!-- END btn-group -->
                </div>
                <!-- END gallery-header -->

                <!-- BEGIN gallery-image -->
                <div class="gallery-image">



                    <ul class="gallery-image-list">
                        @foreach ($galaryBanners as $galaryBanner)
                            <li><a href="javascript:;"
                                    data-pswp-src="{{ asset('assets/uploads') . '/' . $galaryBanner->image }}"
                                    data-pswp-width="752" data-pswp-height="500"><img
                                        src="{{ asset('assets/uploads') . '/' . $galaryBanner->image }}"
                                        alt="Random Image 1" class="img-portrait"></a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- END gallery-image -->
            </div>
            <!-- END gallery -->
        </div>


    </div> --}}


    {{-- 
<div class="bg_full_cp">
	<div class="bg_full" style="background-image: url(../../images/breadcrumb.jpg); background-repeat: no-repeat; background-position: center center;">
		<div class="container">
			<div class="ct">
				<h2 class="page_title">
					<span>Shop</span>
				</h2>
				<div class="breadcrumb-links">
					<a href="../../index.html">Home</a>
					<span> / Shop</span>
				</div>
			</div>
		</div>
	</div>
</div> --}}
    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="list-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @foreach ($galaryBanners as $galaryBanner)
                        <div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="item_product">

                                <div class="image_cart">
                                    <div class="image_i">
                                        <img src="{{ asset('assets/uploads') . '/' . $galaryBanner->image }}" style=" height: 186px; width: 256px;">
                                    </div>
                                    <div class="image_hover">
                                        <div class="icon_hover">
                                            <a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                            <a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            <a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            <a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
                                        </div>
                                        {{-- <div class="star_shop">
                                            <img src="{{asset('frontend/assets/images/breadcrumb.jpg')}}">
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="content_cart">
                                    <h3 class="title"><a href="product-detail.html">{{ $galaryBanner->title }}</a></h3>
                                    {{-- <div class="price">
                                        <span>$280.00</span>
                                    </div> --}}
                                </div>


                            </div>

                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

   

@endsection
