@extends('porto.app')
@section('header')
@include('porto.partials.header.header-332')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.owl-carousel.owl-carousel-317')
				
				<div class="container py-3 my-5">
					<div class="row justify-content-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
						<div class="col">
							<h2 class="text-10 font-weight-normal text-color-dark mb-4 line-height-4"><span class="text-color-primary font-weight-bold ">Porto </span>lorem ipsum dolor sit amet, consectetur adipiscing elit nunc ut finibus erat, a fringilla purus.</h2>
							<p class="text-5 font-weight-normal text-color-dark line-height-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut finibus erat, a fringilla purus. Aliquam consectetur, lorem vitae rhoncus mattis, libero velit hendrerit massa, eu finibus sem eros a odio. </p>

							<div class="row justify-content-center">
								<div class="col-md-2 col-lg-1 text-center mb-3 mb-md-0 mt-md-2 mt-lg-1 px-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
									<img alt="" src="img/logo-red.png" class="img-fluid">
								</div>
								<div class="col-md-10 col-lg-11 d-flex align-items-center justify-content-center justify-content-lg-start line-height-9">
									<p class="opacity-9 pl-lg-2 pr-lg-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut finibus erat, a fringilla purus. Aliquam consectetur, lorem vitae rhoncus mattis, libero velit hendrerit massa, eu finibus sem eros a odio. Nunc posuere dolor id sapien congue, et pretium augue rhoncus. Praesent vulputate vehicula est, ut lobortis metus euismod placerat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-height-3 bg-light border border-bottom-0 m-0" style="background-image: url(img/patterns/tiling.png); background-repeat: repeat;">
					<div class="container">
						<div class="porto.partialseatured-boxes-style-4">
							<div class="col-md-6 col-lg-3">
								@include('porto.partials.featured-box.featured-box-461', ['key' => 'featured-box.featured-box-461'])
							</div>porto.partials
							<div class="col-md-6 col-lg-3">
								@include('porto.partials.featured-box.featured-box-462', ['key' => 'featured-box.featured-box-462'])
							</div>porto.partials
							<div class="col-md-6 col-lg-3">
								@include('porto.partials.featured-box.featured-box-463', ['key' => 'featured-box.featured-box-463'])
							</div>porto.partials
							<div class="col-md-6 col-lg-3">
								@include('porto.partials.featured-box.featured-box-464')
							</div>
						</div>
					</div>
				</section>

				<section class="parallax section section-text-light section-parallax section-center overlay overlay-show overlay-op-8 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/parallax/parallax-corporate-16.jpg">
					<div class="container my-5 py-5">
						<div class="row justify-content-center text-center">
							<div class="col-8 px-0">
								<h4 class="text-9 font-weight-bold mb-4">Lessons for successful project delivery</h4>
								<p class="mb-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat id sapien ac varius. Fusce hendrerit ligula a consectetur ullamcorper. Vestibulum varius pharetra lorem.</p>

								<a class="btn btn-light-2 btn-outline font-weight-semibold px-4 btn-py-2 text-2">LEARN ABOUT US<i class="fas fa-arrow-right ml-2 pl-3 text-3"></i></a>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row py-5 my-5">
						<div class="col">
					
							@include('porto.partials.owl-carousel.owl-carousel-318')
							
						</div>
					</div>
				</div>

				<section class="section section-background-half-primary-half-secondary section-no-border my-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="row text-center">
									<div class="col-md-4">
										<div class="card bg-color-light border-0 py-3">
											<div class="card-body px-5 py-5">
												<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
												<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
												<div class="d-flex justify-content-center align-items-center">
													<img src="img/team/team-1.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="">
													<strong class="text-color-dark text-2">by John Doe</strong>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card bg-color-light border-0 py-3">
											<div class="card-body px-5 py-5">
												<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
												<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
												<div class="d-flex justify-content-center align-items-center">
													<img src="img/team/team-2.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="">
													<strong class="text-color-dark text-2">by Jessica Doe</strong>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card bg-color-light border-0 py-3">
											<div class="card-body px-5 py-5">
												<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
												<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
												<div class="d-flex justify-content-center align-items-center">
													<img src="img/team/team-4.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="">
													<strong class="text-color-dark text-2">by Jennifer Doe</strong>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0 bg-color-grey border-0">
				<div class="container mb-4 pt-4">
					<div class="row py-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-dark mb-4">Contact Details</h5>
							<p class="text-4 mb-0">123 Porto Blvd, Suite 100</p>
							<p class="text-4 mb-0">New York, NY</p>
							<p class="text-4 mb-0">Phone: <a href="tel:+1234567890" class="text-color-hover-primary text-decoration-none">(800) 123 4567</a></p>
							<p class="text-4 mb-0">Email: <a href="mailto:mail@example.com" class="text-color-primary">mail@example.com</a></p>
						</div>
						<div class="col-6 col-lg-2 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-dark mb-4">Pages</h5>
							<ul class="list list-icons list-icons-sm">
								<li><i class="fas fa-angle-right"></i><a href="page-services.html" class="text-color-hover-primary ml-1"> Our Services</a></li>
								<li><i class="fas fa-angle-right"></i><a href="about-us.html" class="text-color-hover-primary ml-1"> About Us</a></li>
								<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="text-color-hover-primary ml-1"> Contact Us</a></li>
							</ul>
						</div>
						<div class="col-6 col-lg-2 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-dark mb-4">Links</h5>
							<ul class="list list-icons list-icons-sm">
								<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="text-color-hover-primary ml-1"> FAQ's</a></li>
								<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="text-color-hover-primary ml-1"> Sitemap</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-5">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-dark mb-4">Latest Tweet</h5>
							<div id="tweet" class="twitter twitter-dark" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 1}">
								<p>Please wait...</p>
							</div>
						</div>
					</div>porto.partials
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-71', ['key' => 'footer-copyright.footer-copyright-71'])
			</footer>
@endsection
