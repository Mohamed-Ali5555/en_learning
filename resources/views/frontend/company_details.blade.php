@extends('frontend.layouts.master')
@section('content')
   @if ($detail !=null)
<div class="bg_full_cp">
	<div class="bg_full" style="background-image: url({{ asset("storage/$detail->img") }}); background-repeat: no-repeat; background-position: center center;">
		<div class="container">
			<div class="ct">
				<h2 class="page_title">
				</h2>
				<div class="breadcrumb-links">
					<a href="{{ route('index') }}">Home</a>
					<span> / Careers Page</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="careers">
	<div class="container">
		<div class="title">
			<h3>Careers</h3>
		</div>
		{{-- <div class="row">
			<div class="cosl col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="image-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<img src="{{ asset("storage/$detail->banner_img") }}" alt="">
					</div>
					<div class="content-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h4>{{ $detail->title }}</h4>
						<td>{!!html_entity_decode($detail->desc)!!}</td>
					</div>
				</div>
			</div> --}}
			<div class="cosl col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="content-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<h4>{{ $detail->title_detail }}</h4>
						<td>{!!html_entity_decode($detail->desc_detail)!!}</td>
					</div>
					<div class="image-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
						{{-- <img src="{{ asset("storage/$detail->banner_img") }}" alt=""> --}}
					</div>
				</div>
			</div>
			{{-- <div class="cosl col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="image-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
						{{-- <img src="{{ asset("storage/$detail->banner_img") }}" alt=""> --}}
					{{-- </div>
					<div class="content-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<h4>{{ $detail->title }}</h4>
						<td>{!!html_entity_decode($detail->desc)!!}</td>
					</div>
				</div> --}}
			{{-- </div> --}}
		</div>
	</div>
</div>
@else 
<div>there is not added</div>
@endif
@endsection


