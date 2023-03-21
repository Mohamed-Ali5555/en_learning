@extends('frontend.layouts.master')
@section('content')

<div class="bg_full_cp">
	<div class="bg_full" style="background-image: url({{ asset("storage/$detail->image") }}); background-repeat: no-repeat; background-position: center center;height:500px;">
		<div class="container">
			<div class="ct">
				<h2 class="page_title">
					<span>Careers Page</span>
				</h2>
				<div class="breadcrumb-links">
					<a href="../../index.html">Home</a>
					<span> / Careers Page</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="cosl col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="image-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img src="../../images/careers1.jpg" alt="">
        </div>
        <div class="content-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>
</div>

@endsection
