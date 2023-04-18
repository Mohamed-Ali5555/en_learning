@extends('frontend.layouts.master')
@section('content')





   @if ($detail !=null)


<div class="bg_full_cp">
	<div class="bg_full" style="background-image: url({{ asset("storage/$detail->banner_img") }}); background-repeat: no-repeat; background-position: center center;">
		<div class="container">
			<div class="ct">
			
		<div class="breadcrumb-links">
					<a href="{{ route('index') }}">Home</a>
					<span> / Careers Page</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="list_posts">
	<div class="container">
		<div class="row">
			<div class="main-content col-xs-12 col-md-8">
				<div class="main-content-inner">
					<div class="cmp_detail">
						<div class="post-block">
							<div class="post-image">
								<a href=""><img src="../../images/post-9.jpg" alt=""></a>
							</div>
							<div class="post-content">
						
							<h4>{{ $detail->title_detail }}</h4>
								<div class="post-body">
									<p>{!!html_entity_decode($detail->desc_detail)!!}</p>
							
									
									
								</div>
							</div>
						</div>
				
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@else 
<div>there is not added</div>
@endif

@endsection


