@extends('porto.app')
@section('header')
@include('porto.partials.header.header-241')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section overlay overlay-show overlay-op-8 border-0 m-0" style="background-image: url(img/slides/slide-corporate-12-1.jpg); background-size: cover; background-position: center; height: 100vh;">
					<div class="container h-100">
						<div class="row align-items-center justify-content-center h-100">
							<div class="col-lg-6 pt-5">
								<div class="d-flex flex-column align-items-center justify-content-center text-center h-100">
									<h1 class="text-color-light font-weight-extra-bold text-12-5 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">WELCOME TO PORTO</h1>
									<p class="text-4-5 text-color-light font-weight-light opacity-7 mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Trusted by over 40,000 satisfied users, Porto is a huge success in the one of largest world's MarketPlace.</p>
									<a href="#" class="btn btn-primary btn-modern font-weight-bold text-3 btn-py-3 px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" data-plugin-options="{'minWindowWidth': 0}">GET STARTED NOW!</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="home-intro" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col text-center">
								<p class="mb-0">
									The fastest way to grow your business with the leader in <span class="highlighted-word highlighted-word-animation-1 text-color-primary font-weight-semibold text-5">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
						</div>

					</div>
				</div>

				<div class="container">

					<div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
						<div class="col-lg-7 pr-lg-5">
							<h2 class="font-weight-normal line-height-1">A place where amazing things <strong class="font-weight-extra-bold">Get Done!</strong></h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat urna arcu, vel molestie nunc commodo non. Nullam vestibulum odio vitae fermentum rutrum.</p>
							<p>Mauris lobortis nulla ut aliquet interdum. Donec commodo ac elit sed placerat. Mauris rhoncus est ac sodales gravida. In eros felis, elementum aliquam nisi vel, pellentesque faucibus nulla.</p>

							<div class="row pt-4 my-5">
								<div class="col-lg-6">
									@include('porto.partials.feature-box.feature-box-206')
									@include('porto.partials.feature-box.feature-box-207')
									@include('porto.partials.feature-box.feature-box-208')
								</div>
								<div class="col-lg-6">
									@include('porto.partials.feature-box.feature-box-209')
									@include('porto.partials.feature-box.feature-box-210')
									@include('porto.partials.feature-box.feature-box-211')
								</div>
							</div>

						</div>
						<div class="col-lg-5">
							<h4 class="font-weight-normal line-height-1 mb-5">Our <strong class="font-weight-extra-bold">Location</strong></h4>

							<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
							@include('porto.partials.google-map.google-map-13')

							<ul class="list list-icons list-icons-style-3 mt-5">
								<li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
								<li><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
								<li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>

							<hr class="my-5">

							<h4 class="font-weight-normal">Business <strong class="font-weight-extra-bold">Hours</strong></h4>
							<ul class="list list-icons list-dark mt-4">
								<li><i class="far fa-clock"></i> Monday - Friday - 9am to 5pm</li>
								<li><i class="far fa-clock"></i> Saturday - 9am to 2pm</li>
								<li><i class="far fa-clock"></i> Sunday - Closed</li>
							</ul>
						</div>
					</div>

				</div>

				@include('porto.partials.call-to-action.call-to-action-28')

				@include('porto.partials.call-to-action.call-to-action-29')
			</div>
@endsection

@section('footporto.partials
<footer id="footer" class="mt-0">
				@include('porto.partials.footer-copyright.footer-copyright-49', ['key' => 'footer-copyright.footer-copyright-49'])
			</footer>
@endsection
