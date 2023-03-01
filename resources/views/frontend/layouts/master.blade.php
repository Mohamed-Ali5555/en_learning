<!DOCTYPE html>
<html lang="en">
<head>
@include('frontend.layouts.head')
</head>
<body class="home1">

@include('frontend.layouts.header')

	<div id="main" class="slideshow">
		<div id="sync10" class="owl-carousel owl-theme">
		     	<div class="item" style="background-image: url(images/bg_slide.jpg); width: 100%;">
		       		<div class="container">
		       			<div class="text_zz">
		       				<h3>Please help African<br> children make them<br> a better life.</h3>
		       				<div class="donate">
								<div class="button_donate">
									<a href="pages/campaigns/campaigns-detail.html">Donate Now</a>
								</div>
							</div>
			       		</div>
		       		</div>
		     	</div>
		     	<div class="item" style="background-image: url(images/bg_slide.jpg); width: 100%;">
		       		<div class="container">
		       			<div class="text_zz">
		       				<h3>Please help African<br> children make them<br> a better life.</h3>
		       				<div class="donate">
								<div class="button_donate">
									<a href="pages/campaigns/campaigns-detail.html">Donate Now</a>
								</div>
							</div>
			       		</div>
		       		</div>
		     	</div>
		</div>
	</div>
	 @yield('content')


    @include('frontend.layouts.footer')
	
    @include('frontend.layouts.script')

</body>
</html>