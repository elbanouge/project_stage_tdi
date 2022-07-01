@extends('porto.app')
@section('header')
@include('porto.partials.header.header-114')
@endsection

@section('main')
<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 530px;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
						<ul>
							<li data-transition="boxfade">

								<img src="img/demos/hotel/slides/slide-hotel-1.jpg" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							</li>
							<li data-transition="boxfade">

								<img src="img/demos/hotel/slides/slide-hotel-2.jpg" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							</li>
							<li data-transition="boxfade">

								<img src="img/demos/hotel/slides/slide-hotel-3.jpg" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							</li>
						</ul>
					</div>
				</div>

				<section class="section section-no-background section-no-border m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">

								<h3 class="mt-4 mb-0 pb-0 text-uppercase">In the Heart of Porto</h3>
								<div class="divider divider-primary divider-small mb-4 mt-0">
									<hr class="mt-2 mr-auto">
								</div>

								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet. Lorem ipsum dolor sit amet.</p>

								<p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut.</p>

								<a class="btn btn-primary btn-lg text-2 text-uppercase mt-2 mb-4" href="#">Learn More</a>
							</div>
							<div class="col-lg-4">

								<div class="micro-map box-shadow-custom clearfix">
									<div class="micro-map-map">
										@include('porto.partials.google-map.google-map-18')
									</div>
									<div class="micro-map-info">
										<div class="micro-map-info-detail">
											<i class="icon-location-pin icons text-color-primary"></i>
											<label>address</label>
											<strong>1234 Street Name, Porto, Envato</strong>
											<a href="demo-hotel-location.html" title="">(View Location)</a>
										</div>
										<div class="micro-map-info-detail">
											<i class="icon-phone icons text-color-primary"></i>
											<label>call us</label>
											<strong>(800) 1234-5678</strong>
										</div>
									</div>
								</div>

							</div>
								
						</div>
					</div>
				</section>

				<section class="parallax section section-parallax section-center m-0 section-overlay-opacity section-overlay-opacity-scale-4" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/hotel/parallax-hotel.jpg">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h3 class="mb-1 mt-0 text-light text-uppercase">Enjoy the best of Porto</h3>
								<p class="lead text-light mb-4">Make your reservation right now with the best price</p>

								<a class="btn btn-primary btn-lg text-2 text-uppercase mt-2" href="demo-hotel-book.html">Book Now</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-background section-no-border m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">

								@include('porto.partials.owl-carousel.owl-carousel-67')

							</div>
							<div class="col-lg-8">

								<h3 class="mt-4 mb-0 pb-0 text-uppercase">Hotel Overview</h3>
								<div class="divider divider-primary divider-small mb-4 mt-0">
									<hr class="mt-2 mr-auto">
								</div>

								<p class="mt-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut. <a href="demo-hotel-hotel.html" class="custom-rtl-link-fix" title="">(View More...)</a></p>

								<div class="row">
									<div class="col-lg-4">
										<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
											<li><i class="fas fa-check"></i> 24 Rooms, 4 Luxury suites</li>
											<li><i class="fas fa-check"></i> Fitness center</li>
											<li><i class="fas fa-check"></i> Airport transporation</li>
										</ul>
									</div>
									<div class="col-lg-4">
										<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
											<li><i class="fas fa-check"></i> 24-Hour In-Room Dining</li>
											<li><i class="fas fa-check"></i> Cocktail Bar</li>
											<li><i class="fas fa-check"></i> Dog Friendly - Pets Stay Free</li>
										</ul>
									</div>
									<div class="col-lg-4">
										<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
											<li><i class="fas fa-check"></i> Valet car service</li>
											<li><i class="fas fa-check"></i> Pool</li>
											<li><i class="fas fa-check"></i> Free Wi-Fi</li>
										</ul>
									</div>
								</div>

							</div>

								
						</div>
					</div>
				</section>

				<section class="section section-text-light section-background section-center section-overlay-opacity section-overlay-opacity-scale-4 m-0" style="background-image: url(img/demos/hotel/video-cover-bg-1.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-lg-12" style="height: 360px;">
								<a href="https://vimeo.com/178747566" class="play-video-custom"><img src="img/demos/hotel/play-icon.png" class="img-fluid" width="90" height="90"></a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-primary section-no-border m-0" data-plugin-parallax data-plugin-options="{'speed': 6}" data-image-src="img/demos/hotel/parallax-hotel-map.png">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h3 class="mt-4 mb-0 pb-0 text-light text-uppercase">Guest Reviews</h3>
								<div class="divider divider-light divider-small divider-small-center mb-4 mt-0">
									<hr class="mt-2">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								@include('porto.partials.testimonial.testimonial-48')
							</div>
							<div class="col-lg-4">
								@include('porto.partials.testimonial.testimonial-49')
							</div>
							<div class="col-lg-4">
								@include('porto.partials.testimonial.testimonial-50')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-background section-no-border m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">

								<h3 class="mb-0 pb-0 text-uppercase">Special Offers</h3>
								<div class="divider divider-primary divider-small divider-small-center mb-4 mt-0">
									<hr class="mt-2">
								</div>

								<div class="row pt-4">
									<div class="col-lg-6">
										<a href="#" class="text-decoration-none">
											@include('porto.partials.thumb-info.thumb-info-159')
										</a>
									</div>
									<div class="col-lg-6">
										<a href="#" class="text-decoration-none">
											@include('porto.partials.thumb-info.thumb-info-160')
										</a>

										<a href="#" class="text-decoration-none">
											@include('porto.partials.thumb-info.thumb-info-161')
										</a>
									</div>
								</div>

								<a class="btn btn-primary btn-lg text-2 text-uppercase mt-2" href="demo-hotel-special-offers.html">View All</a>

							</div>
								
						</div>
					</div>
				</section>

				<section class="section section-tertiary section-no-border m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-3">

								<p class="lead p-0 m-0 text-3 text-uppercase">Sign Up Now For</p>
								<h4 class="mb-1 mt-0 text-light text-uppercase">Exclusive special offers:</h4>

							</div>
							<div class="col-lg-9">

								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger d-none" id="newsletterError"></div>

								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="form-row">
										<div class="form-group col-md-5">
											<div class="form-control-custom">
												<input type="text" class="form-control form-control-lg text-uppercase text-2 mt-2" id="newsletterName" placeholder="Full Name *" required>
											</div>
										</div>
										<div class="form-group col-md-4">
											<div class="form-control-custom">
												<input type="email" class="form-control form-control-lg text-uppercase text-2 mt-2" id="newsletterEmail" placeholder="Email Address *" required>
											</div>
										</div>
										<div class="form-group col-md-3">
											<button type="submit" class="btn btn-primary btn-lg btn-block text-2 text-uppercase mt-2">Subscribe Now</button>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</section>

				@include('porto.partials.footer.footer-156')

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-156')
@endsection
