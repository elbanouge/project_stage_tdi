@extends('porto.app')
@section('header')
@include('porto.partials.header.header-159')
@endsection

@section('main')
<div role="main" class="main">

				
				@include('porto.partials.owl-carousel.owl-carousel-97')

				<section id="who-we-are" class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2>Who We Are</h2>
								<p class="custom-section-sub-title">ABOUT PORTO AGENCY</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<p>
									<strong class="font-weight-semibold text-color-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas alias id hic odit accusamus veniam illum.</strong><br>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio excepturi voluptatibus ipsum natus molestiae blanditiis pariatur est molestias ex nostrum. Nobis veritatis, deserunt sint! Ipsa labore aliquam, adipisci minus ex, temporibus aliquid, sapiente aspernatur id, facere dolorem magni placeat cum consectetur officiis ducimus.
								</p>
							</div>
							<div class="col-lg-6 custom-margin-3 custom-height text-center">
								<svg id="curved-line-1" class="d-none d-md-block" x="0px" y="0px" width="545px" height="305px" viewbox="0 0 545 305" enable-background="new 0 0 545 305" xml:space="preserve" data-appear-animation-svg="true">
									<circle class="circle appear-animation" data-appear-animation="circle-anim" fill="none" stroke="#231F20" stroke-miterlimit="10" stroke-dasharray="2.0106,1.0053" cx="10.206" cy="9.91" r="8.167"></circle>
									<circle class="circle-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" cx="10.206" cy="9.91" r="8.167"></circle>
									<path class="path appear-animation" data-appear-animation="line-anim" data-appear-animation-delay="800" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2.0024,2.0024" d="M11.469,21.046
										c3.191,19.81,32.779,130.736,292.756,87.863c280.979-46.337,240.717,145.948,212.215,185.401"></path>
									<path class="path-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" d="M11.469,21.046
											c3.191,19.81,32.779,130.736,292.756,87.863c280.979-46.337,240.717,145.948,212.215,185.401"></path>
								</svg>
								<img src="img/demos/one-page-agency/who-we-are/who-we-are-1.jpg" alt class="custom-image-style-1 _left appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="1300">
								<img src="img/demos/one-page-agency/who-we-are/who-we-are-2.jpg" alt class="custom-image-style-1 _middle appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="1800">
								<img src="img/demos/one-page-agency/who-we-are/who-we-are-3.jpg" alt class="custom-image-style-1 _right appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="2300">
							</div>
						</div>
					</div>
				</section>

				<section class="section parallax section-parallax section-no-border custom-z-index m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/one-page-agency/parallax/parallax-1.jpg">
					<div class="container">
						<div class="row counters custom-counters">
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.counter.counter-69')
							</div>
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.counter.counter-70')
							</div>
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.counter.counter-71')
							</div>
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.counter.counter-72')
							</div>
						</div>
					</div>
				</section>

				<section id="what-we-do" class="section section-no-border bg-color-light m-0 pb-0">
					<div class="container custom-pos-rel">
						<svg id="curved-line-2" class="d-none d-lg-block" x="0px" y="0px" width="132px" height="225px" viewbox="0 0 132 225" enable-background="new 0 0 132 225" xml:space="preserve" data-appear-animation-svg="true">
							<circle class="circle" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2,2" data-appear-animation="circle-anim" data-appear-animation-delay="1200" cx="120.888" cy="214.023" r="7.688"></circle>
							<circle class="circle-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" cx="120.888" cy="214.023" r="7.688"></circle>
							<path class="path" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2,2" data-appear-animation="line-anim-2" d="M113.812,209.406c0,0-193-54.125-72.5-206.125"></path>
							<path class="path-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" d="M113.812,209.406c0,0-193-54.125-72.5-206.125"></path>
						</svg>
						<div class="row text-center">
							<div class="col">
								<h2>What We Do</h2>
								<p class="custom-section-sub-title">OUR AMAZING SERVICES</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="pr-4">
									@include('porto.partials.feature-box.feature-box-118')
		 							@include('porto.partials.feature-box.feature-box-119')
		 							@include('porto.partials.feature-box.feature-box-120')
		 							<a class="btn custom-btn-style-1 custom-margin-1 text-color-dark" href="#contact-us" data-hash>CONTACT US</a>
		 						</div>
							</div>
							<div class="col-lg-6">
								<img src="img/demos/one-page-agency/what-we-do/what-we-do-2.jpg" alt class="custom-image-style-2 _big appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1500" data-appear-animation-duration="100">
								<img src="img/demos/one-page-agency/what-we-do/what-we-do-1.jpg" alt class="custom-image-style-2 _small appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1900" data-appear-animation-duration="100" data-plugin-options="{'accY': 100}">
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border bg-color-tertiary m-0">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2>Testimonials</h2>
								<p class="custom-section-sub-title">HAPPY CLIENTS</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-98')
							</div>
						</div>
					</div>
				</section>

				<section id="portfolio" class="section section-no-border bg-color-light m-0 pb-4">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2>Portfolio</h2>
								<p class="custom-section-sub-title">OUR WORKS</p>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row justify-content-center">
							<div class="col">
								@include('porto.partials.nav-pills.nav-pills-13')
								<div class="sort-destination-loader sort-destination-loader-showing">
									@include('porto.partials.lightbox.lightbox-54')
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="container">
							<div id="LoadMoreBtnWrapper" class="row text-center mt-4 pt-4 mb-4">
								<div class="col">
									<div id="loadMoreLoader" class="load-more-loader">
										<div class="bounce-loader">
											<div class="bounce1"></div>
											<div class="bounce2"></div>
											<div class="bounce3"></div>
										</div>
									</div>
									<button id="loadMore" type="button" class="btn custom-btn-style-1 text-color-dark">LOAD MORE</button>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="cases" class="section section-no-border bg-color-tertiary m-0">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2>Cases</h2>
								<p class="custom-section-sub-title">SUCCESFULL PROJECTS</p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-99')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-primary section-no-border m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 mb-5 mb-lg-0">
								<img src="img/demos/one-page-agency/purchase/purchase-1.png" alt class="img-fluid">
							</div>
							<div class="col-lg-5">
								<h2 class="text-color-light">Purchase Porto</h2>
								<p class="custom-section-sub-title text-color-light">GET READY NOW</p>
								<p class="text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore iure, incidunt, in aspernatur error nostrum obcaecati velit doloremque praesentium soluta est. Atque, esse expedita, dicta, possimus voluptate alias porro pariatur beatae.</p>
								<a href="#" class="btn custom-btn-style-1 _color-2 text-color-light mt-4">PURCHASE NOW</a>
							</div>
						</div>
					</div>
				</section>

				<section id="our-team" class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2>Our Team</h2>
								<p class="custom-section-sub-title">THE DREAM TEAM</p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-100')
							</div>
						</div>
					</div>
				</section>

				<section id="blog" class="section section-no-border bg-color-tertiary m-0">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2>Our Blog</h2>
								<p class="custom-section-sub-title">RECENT POSTS</p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-101')
							</div>
						</div>
						<div class="row text-center">
							<div class="col">
								<a href="#" class="btn custom-btn-style-1 text-color-dark">VIEW OUR BLOG</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row">
							<div class="col-6 col-md-4 col-lg-2 custom-margin-4-sm">
								<img src="img/logos/logo-1.png" alt class="img-fluid">
							</div>
							<div class="col-6 col-md-4 col-lg-2 custom-margin-4-sm">
								<img src="img/logos/logo-2.png" alt class="img-fluid">
							</div>
							<div class="col-6 col-md-4 col-lg-2 custom-margin-4-sm">
								<img src="img/logos/logo-3.png" alt class="img-fluid">
							</div>
							<div class="col-6 col-md-4 col-lg-2 custom-margin-4-sm">
								<img src="img/logos/logo-4.png" alt class="img-fluid">
							</div>
							<div class="col-6 col-md-4 col-lg-2">
								<img src="img/logos/logo-5.png" alt class="img-fluid">
							</div>
							<div class="col-6 col-md-4 col-lg-2">
								<img src="img/logos/logo-6.png" alt class="img-fluid">
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-23')

				<section class="section section-no-border bg-color-quaternary m-0 p-0">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-lg-5 custom-contact-box custom-contact-pos bg-color-quaternary">
								<h2 class="text-color-light">Contact Us</h2>
								@include('porto.partials.feature-box.feature-box-121')
								@include('porto.partials.feature-box.feature-box-122')
								<h5 class="text-color-light">SEND A MESSAGE</h5>
								<form class="contact-form custom-contact-form-style-1" action="php/contact-form.php" method="POST">
									<div class="contact-form-success alert alert-success d-none mt-4">
										<strong>Success!</strong> Your message has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none mt-4">
										<strong>Error!</strong> There was an error sending your message.
										<span class="mail-error-message text-1 d-block"></span>
									</div>

									<input type="hidden" name="subject" value="Contact Message Received">
									<div class="form-row _divider">
										<div class="form-group col-sm-6">
											<input type="text" value="" maxlength="100" class="form-control" name="name" placeholder="YOUR NAME" required>
										</div>
										<div class="form-group col-sm-6">
											<input type="text" value="" maxlength="100" class="form-control" name="phone" id="phone" placeholder="PHONE" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="email" value="" maxlength="100" class="form-control" name="email" placeholder="EMAIL ADDRESS" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<textarea maxlength="5000" rows="5" class="form-control custom-textarea-style" name="message" id="message" placeholder="COMMENT" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="col">
											<input type="submit" value="SUBMIT" class="btn btn-primary custom-btn-style-2 text-color-light custom-margin-2 float-right mt-2" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>

		</div>
@endsection

@section('footer')
<footer id="footer" class="m-0 p-0">
			@include('porto.partials.footer-copyright.footer-copyright-27', ['key' => 'footer-copyright.footer-copyright-27'])
		</footer>
@endsection
