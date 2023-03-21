@extends('frontend.layouts.master')
@section('content')

        @if ($detail != null)
            <div class="bg_full_cp">
                <div class="bg_full"
                    style="background-image: url({{ asset("storage/$detail->image") }}); background-repeat: no-repeat; background-position: center center;">
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
        <div class="careers">
	<div class="container">
		<div class="title">
			<h3>Careers</h3>
		</div>
		<div class="row">
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
			<div class="cosl col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="content-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<h4>Launch your career and sharpen your skills with a company that will help you grow.</h4>
						<p>We’re seeking candidates who are ready to test their skills and make an impact in the real world. We are committed to growing and advancing people from within who have demonstrated the ability to deliver excellent results in different ways. Your success is ours, too.</p>
					</div>
					<div class="image-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<img src="../../images/careers2.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="cosl col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="image-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<img src="../../images/careers3.jpg" alt="">
					</div>
					<div class="content-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<h4>Work hard, play hard</h4>
						<p>At Financial Solutions, we honor a work-life balance. We value the importance of your personal life because we’re people too. That’s why we enjoy a generous benefits program, including medical, dental, vision, life insurance, paid time off, and so much more.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
        @else
            <div>not found</div>
        @endif
@endsection


