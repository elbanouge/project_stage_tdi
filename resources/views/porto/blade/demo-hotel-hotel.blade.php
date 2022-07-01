@extends('porto.app')
@section('header')
@include('porto.partials.header.header-110')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-142')

				<section class="section section-no-background section-no-border m-0">
					<div class="container">
						<div class="row mt-2">
							
							<div class="col-lg-3">
								@include('porto.partials.tabs.tabs-2')

								<a href="demo-hotel-special-offers.html" class="mt-4 mb-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" title="">
									<img alt="" class="img-fluid mt-2 mt-lg-4 mb-4" src="img/demos/hotel/banner-hotel.jpg">
								</a>
							</div>
							<div class="col-lg-9">
								<div class="tab-pane tab-pane-navigation active" id="tabsNavigation1">

									<h3 class="mb-0 pb-0 text-uppercase">Porto Hotel</h3>
									<div class="divider divider-primary divider-small mb-4 mt-0">
										<hr class="mt-2 mr-auto">
									</div>

									<div class="row">
										<div class="col-lg-8">

											<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan.</p>

											<p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut.</p>

										</div>
										<div class="col-lg-4">

											@include('porto.partials.owl-carousel.owl-carousel-67')

										</div>
									</div>

									<div class="row mt-4">
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

									<h4 class="mt-4 mb-4 pb-0 text-uppercase">Complimentary Attractions</h4>

									<div class="row">
										<div class="col-lg-6">

											<ul class="list list-icons list-primary">
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum.</li>
											</ul>

										</div>
										<div class="col-lg-6">

											<ul class="list list-icons list-primary">
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i>Consectetur adipiscing elit.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
											</ul>

										</div>
									</div>

								</div>
								<div class="tab-pane tab-pane-navigation" id="tabsNavigation2">

									<h3 class="mb-0 pb-0 text-uppercase">Services &amp; Amenities</h3>
									<div class="divider divider-primary divider-small mb-4 mt-0">
										<hr class="mt-2 mr-auto">
									</div>

									<div class="row">
										<div class="col">

											<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan.</p>

											<p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut.</p>

										</div>
									</div>

									<h4 class="mt-4 mb-4 pb-0 text-uppercase">Porto Hotel Services</h4>

									<div class="row">
										<div class="col-lg-6">

											<ul class="list list-icons list-primary">
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum.</li>
											</ul>

										</div>
										<div class="col-lg-6">

											<ul class="list list-icons list-primary">
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i>Consectetur adipiscing elit.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
											</ul>

										</div>
									</div>

									<h4 class="mt-4 mb-4 pb-0 text-uppercase">Amenities</h4>

									<div class="row">
										<div class="col-lg-6">

											<ul class="list list-icons list-primary">
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum.</li>
											</ul>

										</div>
										<div class="col-lg-6">

											<ul class="list list-icons list-primary">
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i>Consectetur adipiscing elit.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
												<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
											</ul>

										</div>
									</div>

								</div>
								<div class="tab-pane tab-pane-navigation" id="tabsNavigation3">

									<h3 class="mb-0 pb-0 text-uppercase">Frequently Asked Questions</h3>
									<div class="divider divider-primary divider-small mb-4 mt-0">
										<hr class="mt-2 mr-auto">
									</div>

									<div class="row">
										<div class="col">

											<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non bibendum dolor. Ut vel turpis accumsan.</p>

											<p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan.</p>

										</div>
									</div>

									@include('porto.partials.toggle.toggle-3')

								</div>
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
