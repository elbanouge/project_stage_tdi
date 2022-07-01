@extends('porto.app')
@section('header')
@include('porto.partials.header.header-329')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.owl-carousel.owl-carousel-313')

				<div class="home-intro mb-0" id="home-intro">
					<div class="container">

						<div class="row text-center">
							<div class="col">
								<p class="mb-0">
									The fastest way to grow your business with the leader in <span class="highlighted-word text-color-light font-weight-semibold text-5">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
						</div>

					</div>
				</div>

				<div class="container">
					<div class="row justify-content-center py-4 my-5">
						<div class="col-lg-10">

							@include('porto.partials.tabs.tabs-28')

						</div>
					</div>
				</div>

				<hr class="my-0">

				<div class="container">
					<div class="row py-4 my-5">
						<div class="col py-3">
							@include('porto.partials.owl-carousel.owl-carousel-314')
							
						</div>
					</div>
				</div>
				
				<section class="section section-height-3 bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row align-items-center text-center text-md-left">
							<div class="col-md-6 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-7 line-height-1 ls-0 mb-3">About Us</h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc. </p>
								<p class="mb-4 pr-md-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget</p>
								<a href="#" class="btn btn-dark font-weight-semibold rounded-0 text-2 btn-px-5 btn-py-2">LEARN MORE</a>
							</div>
							<div class="col-md-6 col-lg-5 offset-lg-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								@include('porto.partials.owl-carousel.owl-carousel-315')
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">
					<div class="row featured-boxes-full featured-boxes-full-scale">
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="far fa-life-ring"></i>
							<h4>Customer Support</h4>
							<p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
						</div>
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="fas fa-film"></i>
							<h4>Sliders</h4>
							<p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
						</div>
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="far fa-star"></i>
							<h4>Winner</h4>
							<p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. </p>
						</div>
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="far fa-edit"></i>
							<h4>Customizable</h4>
							<p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row py-5 my-5">
						<div class="col-md-6 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
							@include('porto.partials.testimonial.testimonial-112')
						</div>
						<div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
							@include('porto.partials.testimonial.testimonial-113')
						</div>
					</div>
				</div>

				<!-- Go to the bottom of the page to change settings and map location. -->
				<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
					@include('porto.partials.google-map.google-map-42')
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0">
				<div class="container">
					<div class="row py-5 justify-content-center">
						<div class="col-md-9 offset-md-1 offset-lg-0 mb-4 mb-lg-0 d-flex align-items-center">
							<div class="footer-nav footer-nav-links footer-nav-bottom-line">
								<nav>
									<ul class="nav" id="footerNav">
										<li>
											<a href="#">Home</a>
										</li>
										<li>
											<a href="#">Elements</a>
										</li>
										<li>
											<a class="active" href="#">Features</a>
										</li>
										<li>
											<a href="#">Pages</a>
										</li>
										<li>
											<a href="#">Portfolio</a>
										</li>
										<li>
											<a href="#">Blog</a>
										</li>
										<li>
											<a href="#">Shop</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-md-4 col-lg-3 mb-4 mb-lg-0 text-center text-lg-right">
							<h5 class="text-3 mb-0 pb-1 opacity-6">CONTACT US</h5>
							<a href="tel:+1234567890" class="text-8 text-color-light text-decoration-none font-weight-bold pb-1 mb-0">(800) 123-4567</a>
							<p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-50', ['key' => 'footer-copyright.footer-copyright-50'])
			</footer>
@endsection
