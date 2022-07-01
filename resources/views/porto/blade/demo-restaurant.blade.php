@extends('porto.app')
@section('header')
@include('porto.partials.header.header-184')
@endsection

@section('main')
<div role="main" class="main">
				<div class="owl-carousel-wrapper" style="height: 650px;">
					@include('porto.partials.owl-carousel.owl-carousel-130')
				</div>

				<section class="pt-5">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="mt-4 mb-2">Enjoy <strong>Your Meal</strong></h2>
								<p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

								<hr class="custom-divider">
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-md-4 pb-5">

								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
									@include('porto.partials.thumb-info.thumb-info-348')
								</div>

							</div>
							<div class="col-md-4 pb-5">

								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
									@include('porto.partials.thumb-info.thumb-info-349')
								</div>

							</div>
							<div class="col-md-4 pb-5">

								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
									@include('porto.partials.thumb-info.thumb-info-350')
								</div>

							</div>
						</div>
					</div>
				</section>

				<section class="section section-background section-center" style="background-image: url(img/demos/restaurant/parallax-restaurant.jpg); background-position: 50% 100%; min-height: 615px;">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<hr class="custom-divider">
								@include('porto.partials.owl-carousel.owl-carousel-131')
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-8">

							</div>
						</div>
					</div>
				</section>
				<section class="pt-3 pb-3">
					<div class="container">
						<div class="row mb-5">
							<div class="col-lg-12 text-center">
								<h4 class="mt-4 mb-2">Our <strong>Gallery</strong></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

								<hr class="custom-divider">

								@include('porto.partials.lightbox.lightbox-56')
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">
					<div class="row mt-5">

						<div class="col-lg-6 p-0">
							<section class="section section-quaternary section-no-border h-100 mt-0">
								<div class="row justify-content-end">
									<div class="col-half-section col-half-section-right">
										<div class="text-center">
											<h4 class="mt-3 mb-0 heading-dark">Our <strong>Blog</strong></h4>
											<p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

											<hr class="custom-divider m-0">
										</div>
										
										@include('porto.partials.owl-carousel.owl-carousel-132')

									</div>
								</div>
							</section>
						</div>

						<div class="col-lg-6 p-0">
							<section class="section section-tertiary section-no-border h-100 mt-0">
								<div class="row">
									<div class="col-half-section">
										<div class="text-center">
											<h4 class="mt-3 mb-0 heading-dark">Our <strong>Team</strong></h4>
											<p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

											<hr class="custom-divider m-0">
										</div>

										@include('porto.partials.owl-carousel.owl-carousel-133')
									</div>
								</div>
							</section>
						</div>

					</div>
				</div>

				<section id="menu" style="background-image: url(img/demos/restaurant/background-restaurant.png); background-position: 50% 100%; background-repeat: no-repeat;">
					<div class="container">
						<div class="row mt-3">
							<div class="col-lg-12 text-center">
								<h4 class="mt-4 mb-2">Special <strong>Menu</strong></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

								<hr class="custom-divider">

								<ul class="special-menu pb-4">
									<li>
										<img src="img/demos/restaurant/products/product-1.jpg" class="img-fluid" alt="">
										<h3>Monday <em>Special</em></h3>
										<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.</span></p>
										<strong class="special-menu-price text-color-dark">$29</strong>
									</li>
									<li>
										<img src="img/demos/restaurant/products/product-2.jpg" class="img-fluid" alt="">
										<h3>Tuesday <em>Special</em></h3>
										<p><span>Lorem ipsum dolor sit amet. Donec eu pulvinar magna.</span></p>
										<strong class="special-menu-price text-color-dark">$39</strong>
									</li>
									<li>
										<img src="img/demos/restaurant/products/product-3.jpg" class="img-fluid" alt="">
										<h3>Wednesday <em>Special</em></h3>
										<p><span>Lorem ipsum dolor sit amet.</span></p>
										<strong class="special-menu-price text-color-dark">$24</strong>
									</li>
									<li>
										<img src="img/demos/restaurant/products/product-4.jpg" class="img-fluid" alt="">
										<h3>Thursday <em>Special</em></h3>
										<p><span>Lorem ipsum dolor sit amet magna.</span></p>
										<strong class="special-menu-price text-color-dark">$39</strong>
									</li>
									<li>
										<img src="img/demos/restaurant/products/product-5.jpg" class="img-fluid" alt="">
										<h3>Friday <em>Special</em></h3>
										<p><span>Lorem ipsum dolor sit amet adipiscing elit. Donec eu pulvinar magna.</span></p>
										<strong class="special-menu-price text-color-dark">$59</strong>
									</li>
								</ul>

							</div>
						</div>
						<div class="row mb-0 mt-5">
							<div class="col-lg-12 text-center">
								<a href="demo-restaurant-menu.html" class="btn btn-primary btn-lg mb-5">Full Menu</a>
							</div>
						</div>
					</div>
				</section>
			</div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0 bg-color-secondary mt-0">
				<div class="container">
					<div class="row py-5">
						<div class="col text-center">
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-32', ['key' => 'footer-copyright.footer-copyright-32'])
			</footer>
@endsection
