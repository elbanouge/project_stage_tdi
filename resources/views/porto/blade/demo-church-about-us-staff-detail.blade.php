@extends('porto.app')
@section('header')
@include('porto.partials.header.header-47')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-96')

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 mb-4 mb-lg-0">
								@include('porto.partials.thumb-info.thumb-info-34')
								<ul class="social-icons custom-social-icons-3">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
	 								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-8">
								<h2 class="font-weight-bold mb-1">Joe Albert Doe</h2>
								<p class="lead text-4">The Reverend</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum felis ac turpis consectetur molestie. Donec rutrum nibh ac felis convallis tempor. Nunc non consequat lorem. Duis a porta sapien. Aliquam erat volutpat. Suspendisse aliquam, mi in elementum lacinia, orci erat hendrerit sem, eget varius elit magna sagittis velit. Proin posuere malesuada sem, nec venenatis justo sodales eget. Nunc imperdiet.</p>
								<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis mauris urna. Donec pellentesque eros non sapien malesuada, at facilisis diam interdum. Praesent non cursus dui, et consectetur risus. Pellentesque eu arcu sollicitudin, viverra neque ut, facilisis ligula. In faucibus tellus ac metus ullamcorper aliquet. Aliquam sem dui, cursus quis magna vitae, convallis malesuada tellus. Nam malesuada.</p>
								<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis mauris urna. Donec pellentesque eros non sapien malesuada, at facilisis diam interdum. Praesent non cursus dui, et consectetur risus. Pellentesque eu arcu sollicitudin, viverra neque ut, facilisis ligula. In faucibus tellus ac metus ullamcorper aliquet. Aliquam sem dui, cursus quis magna vitae, convallis malesuada tellus. Nam malesuada.</p>
								
								<h6 class="custom-primary-font font-weight-bold mt-4">History
								<ul class="list list-unstyled list-primary list-borders">
									<li class="pt-2 pb-2">
										<strong class="text-color-dark">2021 - </strong> History fact 1 lorem ipsum dolor ametorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium.
									</li>
									<li class="pt-2 pb-2">
										<strong class="text-color-dark">2014 - </strong> History fact 2 lorem ipsum dolor ametorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium lorem ipsum dolor ametorem ipsum dolor sit amet, consectetur addis.
									</li>
									<li class="pt-2 pb-2">
										<strong class="text-color-dark">2006 - </strong> History fact 3 lorem ipsum dolor sit.
									</li>
								</ul>
							</h6></div>
						</div>
					</div>
				</section>

				<section class="section section-tertiary section-no-border m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-10">
								<span class="custom-secondary-font font-weight-bold custom-text-color-1 text-4">First time visitor</span>
								<h2 class="font-weight-bold custom-text-color-1 m-0">Find out more about the Church. <span class="font-weight-normal custom-secondary-font custom-font-italic">You belong here</span></h2>
							</div>
							<div class="col-lg-2 mt-4 mt-lg-0">
								<a href="demo-church-about-us.html" class="btn btn-primary custom-btn-style-1 text-uppercase">Visitors Guide</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border custom-position-relative custom-overflow-hidden p-0 m-0">
					<div class="custom-view-our-location text-center">
						<img src="img/demos/church/others/view-our-location.png" alt>
						<a href="#" onclick="initMapAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)" class="custom-view-location custom-secondary-font font-weight-bold text-color-light">View Our Location</a>
					</div>
					@include('porto.partials.google-map.google-map-9')
				</section>

			@include('porto.partials.footer.footer-92')
		</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-92')
@endsection
