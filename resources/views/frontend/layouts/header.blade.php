	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 content-inner">
					<div class="logo">
						<a href=""><img src="{{asset('frontend/assets/images/logo.png')}}" alt=""></a>
					</div>
					<div class="main_menu">
						<a id="setting"><i class="fa fa-bars fa-2x"></i></a>
						<ul class="menu">
							<li style="margin-bottom: 30px; border-bottom: none;"><a id="close"><i class="fa fa-times"></i></a></li>
							<li>
								<a href="{{ route('index') }}">Home<span id="sub_1" class="icaret nav-plus"></span></a>

							</li>
							<li>
								<a href="pages/campaigns/campaigns.html">Campaigns<span id="sub_2" class="icaret nav-plus"></span></a>
							</li>
							<li>
								<a href="pages/event/event.html">Events</a>
							</li>
					
							<li>
								<a href="{{route('boutusFront')}}">aboutus<span id="sub_6" class="icaret nav-plus fa fa-angle-down"></span></a>

							</li>

						
							<li><a href="pages/about/contact.html">Contact</a></li>
							<li>
								<a id="quick-menu"><i class="fa fa-ellipsis-h"></i></a>
								<ul class="sub_menu sub9">
									<li class="inputt"><input class="box_search" type="text" name="search"><input class="btn_submit" type="submit" name="sub" value="Search"></li>
									<li><a href="pages/login/login.html">Login</a></li>
									<li><a href="pages/login/register.html">Register</a></li>
								</ul>
							</li>
						</ul>
						<div class="button_donate">
							<a href="pages/campaigns/campaigns-detail.html">Donate Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
