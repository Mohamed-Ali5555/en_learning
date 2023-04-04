@extends('frontend.layouts.master')
@section('content')
    <div class="page_about pages_item">

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
                @foreach ($galaryBanners as $galaryBanner)
                    
               
                    <ul class="gallery-image-list">
                        <li><a href="javascript:;" data-pswp-src="{{ asset('assets/uploads') . '/' . $galaryBanner->image }}" data-pswp-width="752"
                                data-pswp-height="500"><img src="{{ asset('assets/uploads') . '/' . $galaryBanner->image }}" alt="Random Image 1"
                                    class="img-portrait"></a></li>
                     
                    
                    </ul> @endforeach
                </div>
                <!-- END gallery-image -->
            </div>
            <!-- END gallery -->
        </div>


    </div>
@endsection
