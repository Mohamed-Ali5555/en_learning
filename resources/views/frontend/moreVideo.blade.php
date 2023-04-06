@extends('frontend.layouts.master')
@section('content')
    <div class="container">
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
    </div>
    <!-- END gallery-image -->
    <!-- END gallery -->
@endsection
