@extends('porto.app')
@section('header')
@include('porto.partials.header.header-18')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-62')

				<div class="shop container py-4 my-5">
					<div class="row align-items-center justify-content-between mb-4">
						<div class="col-auto mb-3 mb-md-0 order-md-2">
							<div class="d-flex align-items-center">
								<span>Showing 1-8 of 24 products</span>
								<a href="#" class="text-color-dark text-3 ml-2" data-toggle="tooltip" data-placement="top" title="Grid"><i class="fas fa-th"></i></a>
								<a href="#" class="text-color-dark text-3 ml-2" data-toggle="tooltip" data-placement="top" title="List"><i class="fas fa-list-ul"></i></a>
							</div>
						</div>
						<div class="col-md-6 order-md-1">
							<form method="get">
								<div class="custom-select-1" style="max-width: 280px;">
									<select class="form-control border px-3 py-2 h-auto">
										<option value="popularity">Sort by popularity</option>
										<option value="rating">Sort by average rating</option>
										<option value="date" selected>Sort by newness</option>
										<option value="price">Sort by price: low to high</option>
										<option value="price-desc">Sort by price: high to low</option>
									</select>
								</div>
							</form>
						</div>
					</div>
					<div class="products row row-gutter-sm mb-4">
						<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
							@include('porto.partials.product.product')
						</div>
						<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
							@include('porto.partials.product.product-1')
						</div>
						<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
							@include('porto.partials.product.product-2')
						</div>
						<div class="col-lg-3 col-sm-6">
							@include('porto.partials.product.product-3')
						</div>

						<div class="col-lg-3 col-sm-6">
							@include('porto.partials.product.product-3')
						</div>
						<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
							@include('porto.partials.product.product-2')
						</div>
						<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
							@include('porto.partials.product.product-1')
						</div>
						<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
							@include('porto.partials.product.product')
						</div>
					</div>
					<div class="row align-items-center justify-content-md-between mt-4">
						<div class="col-md-auto mb-3 mb-md-0">
							<p class="mb-0">Showing 1-8 of 24 products</p>
						</div>
						<div class="col-md-auto">
							@include('porto.partials.pagination.pagination-2')
						</div>
					</div>
				</div>

				<section class="section border-0 m-0">
					<div class="container pb-3 my-5">
						<div class="row justify-content-center pb-3 mb-4">
							<div class="col text-center">
								<div class="overflow-hidden">
									<h2 class="font-weight-bold text-color-dark line-height-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">See What Clients Are Saying</h2>
								</div>
								<div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
									<hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
								</div>
								<p class="font-weight-bold text-3-5 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="500">We are very proud of the service we provide and stand by every product we carry.</p>
								<p class="font-weight-light text-3-5 mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="750">Read our testimonials from our happy customers.</p>
							</div>
						</div>
						<div class="row appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-15')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-3 bg-primary border-0 m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-xl-7 text-center text-lg-left mb-4 mb-lg-0">
								<h2 class="text-color-light font-weight-medium text-3-5 line-height-2 line-height-sm-1 ls-0 mb-2 mb-lg-2">LOOKING FOR HONEST AND RELIABLE SERVICES?</h2>
								<h3 class="font-weight-bold text-color-light text-transform-none text-8 line-height-2 line-height-lg-1 mb-1">Best Mechanics Downtown Los Angeles CA</h3>
								<p class="font-weight-bold text-color-light text-4 opacity-7 mb-0">Make An Appointment Today With Our Online Form</p>
							</div>
							<div class="col-lg-6 col-xl-5">
								<div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
									@include('porto.partials.feature-box.feature-box-8')
									<a href="demo-auto-services-appointment.html" class="btn btn-light btn-outline custom-btn-border-radius font-weight-bold text-color-light text-color-hover-dark bg-color-hover-light btn-px-5 btn-py-3">MAKE AN APPOINTMENT</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-transparent position-relative border-0 z-index-1 m-0 p-0">
					<div class="container py-4">
						<div class="row align-items-center text-center py-5">
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-8.png" alt class="img-fluid" style="max-width: 90px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-9.png" alt class="img-fluid" style="max-width: 140px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-10.png" alt class="img-fluid" style="max-width: 140px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
								<img src="img/logos/logo-11.png" alt class="img-fluid" style="max-width: 140px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
								<img src="img/logos/logo-12.png" alt class="img-fluid" style="max-width: 100px;">
							</div>
							<div class="col-sm-4 col-lg-2">
								<img src="img/logos/logo-13.png" alt class="img-fluid" style="max-width: 100px;">
							</div>
						</div>
					</div>
					<svg class="custom-svg-3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 193 495">
						<path fill="#1C5FA8" d="M193,25.73L18.95,247.93c-13.62,17.39-10.57,42.54,6.82,56.16L193,435.09V25.73z"></path>
						<path fill="none" stroke="#FFF" stroke-width="1.5" stroke-miterlimit="10" d="M196,53.54L22.68,297.08c-12.81,18-8.6,42.98,9.4,55.79L196,469.53V53.54z"></path>
					</svg>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-0 mt-0">
				<div class="container py-5">
					<div class="row py-3">
						<div class="col-md-4 mb-5 mb-md-0">
							@include('porto.partials.feature-box.feature-box-9')
						</div>
						<div class="col-md-4 mb-5 mb-md-0">
							@include('porto.partials.feature-box.feature-box-10')
						</div>
						<div class="col-md-4">
							@include('porto.partials.feature-box.feature-box-11')
						</div>
					</div>
				</div>
				<hr class="bg-light opacity-2 my-0">
				<div class="container pb-5">
					<div class="row text-center text-md-left py-4 my-5">
						<div class="col-md-6 col-lg-3 align-self-center text-center text-md-left text-lg-center mb-5 mb-lg-0">
							<a href="demo-auto-services.html" class="text-decoration-none">
								<img src="img/demos/auto-services/logo-light.png" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">About Us</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">ADDRESS</span> 
									<a href="demo-auto-services-contact.html#get-direction" class="text-color-light custom-text-underline-1 font-weight-medium text-3-5">GET DIRECTIONS</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5 mb-1">PHONE</span>
									<ul class="list list-unstyled font-weight-light text-3-5 mb-0">
										<li class="text-color-light line-height-3 mb-0">
											Sales: <a href="tel:+1234567890" class="text-decoration-none text-color-light text-color-hover-default">+123 4567 890</a>
										</li>
										<li class="text-color-light line-height-3 mb-0">
											Services: <a href="tel:+1234567890" class="text-decoration-none text-color-light text-color-hover-default">+123 4567 890</a>
										</li>
									</ul>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">EMAIL</span>
									<a href="mailto:mail@example.com" class="text-decoration-none font-weight-light text-3-5 text-color-light text-color-hover-default">mail@example.com</a>
								</li>
							</ul>
							<ul class="social-icons social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-2">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 mb-5 mb-md-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Auto Services</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Brake Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Check Engine</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Suspension Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Transmission Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">A/C Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Oil Change</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Electrical Diagnostics</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Tune Up</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Fuel System Repair</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 offset-lg-1">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Opening Hours</h5>
							<ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
								<li>Mon - Fri: 8:30 am to 5:00 pm</li>
								<li>Saturday: 9:30 am to 1:00 pm</li>
								<li>Sunday: Closed</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-5', ['key' => 'footer-copyright.footer-copyright-5'])
			</footer>
@endsection
