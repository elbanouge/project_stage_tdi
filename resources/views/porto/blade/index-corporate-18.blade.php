@extends('porto.app')
@section('header')
@include('porto.partials.header.header-252')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.owl-carousel.owl-carousel-320')

				<div class="home-intro bg-color-grey-scale-1 my-0 py-0" id="home-intro">
					<div class="container">

						<div class="row justify-content-center">
							<div class="col-lg-8 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
								<div class="card bg-transparent border-0">
									<div class="card-body my-2">
										@include('porto.partials.lightbox.lightbox-67')
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container container-lg-custom py-5 my-5">
					<div class="row text-center text-lg-left">
						<div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<p class="font-weight-semibold mb-1 mt-2 text-uppercase">Lorem ipsum dolor sit amet</p>
							<p class="text-7 text-color-dark font-weight-bold negative-ls-2">Get in touch with us and let us help you</p>
							<p class="pr-lg-5 mb-4 opacity-7 text-4 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa enim. Nullam id varius nunc. Vivamus bibendum mex, et bibendum mex, et faucibus lacus venena bibendum mex faucibus lacus venena bibendum mex, et faucibus lacus ve  bibendum mex et faucibus lacus venenanena.</p>

							<a class="btn btn-outline btn-modern btn-gradient text-color-dark font-weight-extra-bold mb-2">CONTACT US NOW</a>

						</div>
						<div class="col-md-6 col-lg-3 text-center px-2 mt-3 mt-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
							<img src="img/projects/project-44.jpg" class="img-fluid" alt="">
						</div>
						<div class="col-md-6 col-lg-3 px-5 px-lg-4 mt-3 mt-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
							<div class="row bg-color-primary px-3 px-md-4 px-lg-0">
								<div class="col py-1">
									<p class="text-4 text-center text-color-light line-height-9 my-3 py-5 px-md-3">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa enim. Nullam id varius nunc. Vivamus bibendum mex.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-default border-0 my-0">
					<div class="container">
						<div class="row">
							<div class="col mt-5 mb-2">

								@include('porto.partials.process.process-17')

							</div>
						</div>
					</div>
				</section>

				<section class="parallax section section-text-light section-parallax section-center overlay overlay-show overlay-op-8 my-0" data-plugin-parallax data-plugin-options="{'speed': 2.0}" data-image-src="img/parallax/parallax-corporate-18.jpg">
					<div class="container py-5 my-3">
						<div class="row justify-content-center text-center">
							<div class="col">
								<h4 class="text-11 font-weight-extra-bold mb-1 line-height-2">The Easiest Way</h4>
								<p class="text-4 opacity-7 mb-4">Porto is a huge success, learn more about us.</p>
	
								<a class="btn btn-gradient btn-xl font-weight-bold text-color-light py-3 text-2">GET STARTED NOW</a>
							</div>
						</div>
					</div>
				</section>

				<div class="container container-lg-custom py-5 my-2">
					<div class="row text-center text-md-left">
						<div class="col-lg-4 mt-5 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
							<p class="font-weight-semibold mb-1 text-uppercase">THE PERFECT WAY</p>
							<p class="text-7 gradient-text-color font-weight-bold line-height-5 negative-ls-2">Get in touch with us and let us help you, amazing projects can be build.</p>
						</div>
						<div class="col-lg-8">
							<div class="row featured-boxes featured-boxes-style-4">
								<div class="col-md-6">
									@include('porto.partials.featured-box.featured-box-465', ['key' => 'featured-box.featured-box-465'])
								</div>
								<div class="col-md-6">
									@include('porto.partials.featured-box.featured-box-466', ['key' => 'featured-box.featured-box-466'])
								</div>
							</div>
						</div>
					</div>
				</div>

				<hr class="my-0">

				<div class="container">
					<div class="row py-5 my-5">
						<div class="col">
					
							@include('porto.partials.owl-carousel.owl-carousel-321')
							
						</div>
					</div>
				</div>

				<section class="section section-background section-background-change-anim my-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row py-5">
							<div class="col text-center">
								<div class="mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
									<h2 class="text-7 font-weight-normal text-color-light mb-2">Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website!</h2>
									<p class="text-4 text-color-light font-weight-light opacity-7 mb-0">The best HTML template for your new website.</p>
								</div>
								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
									<a class="btn btn-light btn-xl font-weight-bold text-color-dark py-3 text-2">GET STARTED NOW <i class="fa fa-arrow-right  ml-2 pl-3 text-3"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-0 mt-0">
				@include('porto.partials.footer-copyright.footer-copyright-48', ['key' => 'footer-copyright.footer-copyright-48'])
			</footer>
@endsection
