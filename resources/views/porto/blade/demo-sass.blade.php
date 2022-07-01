@extends('porto.app')
@section('header')
@include('porto.partials.header.header-187')
@endsection

@section('main')
<div role="main" class="main">
				
				<section class="section bg-primary curved-border position-relative border-0 m-0" style="height: 100vh;" id="intro">
					
					<div class="appear-animation position-absolute" data-appear-animation="zoomIn" data-appear-animation-delay="1400" style="top: 25%; left: 16%;">
						<img src="img/demos/sass/icons/icon-1.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}">
					</div>
					<div class="appear-animation position-absolute" data-appear-animation="zoomIn" data-appear-animation-delay="2000" style="top: 42%; left: 10%;">
						<img src="img/demos/sass/icons/icon-2.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3.5, 'transition': true, 'horizontal': true}">
					</div>
					<div class="appear-animation position-absolute" data-appear-animation="zoomIn" data-appear-animation-delay="800" style="top: 60%; left: 20%;">
						<img src="img/demos/sass/icons/icon-3.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 2.5, 'transition': true}">
					</div>
					<div class="appear-animation position-absolute" data-appear-animation="zoomIn" data-appear-animation-delay="1100" style="top: 22%; right: 25%;">
						<img src="img/demos/sass/icons/icon-4.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 2, 'transition': true, 'horizontal': true}">
					</div>
					<div class="appear-animation position-absolute" data-appear-animation="zoomIn" data-appear-animation-delay="1700" style="top: 49%; right: 16%;">
						<img src="img/demos/sass/icons/icon-5.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}">
					</div>
					<div class="appear-animation position-absolute" data-appear-animation="zoomIn" data-appear-animation-delay="2300" style="top: 71%; right: 13%;">
						<img src="img/demos/sass/icons/icon-6.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 2.5, 'transition': true, 'horizontal': true}">
					</div>

					<div class="container pt-5 mt-5">
						<div class="row justify-content-center pt-5 mt-5">
							<div class="col-lg-7 text-center pt-3">
								<h1 class="text-color-light font-weight-extra-bold text-12 line-height-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">The Dashboard to Manage All your Projects</h1>
								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
									<p class="text-color-light opacity-6 text-5 pb-3 mb-4">Porto is used by several companies to manage their projects.</p>
								</div>
								<a href="#" class="btn btn-light text-color-dark custom-secondary-font font-weight-bold text-3 px-5 py-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900">GET STARTED</a>
								<a href="#" class="btn btn-dark custom-secondary-font font-weight-bold text-3 px-5 py-3 ml-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="900">VIEW OUR PLANS</a>
							</div>
						</div>
					</div>

					<div class="custom-animated-circles">
						<div class="circle"></div>
						<div class="circle"></div>
						<div class="circle"></div>
						<div class="circle"></div>
					</div>

				</section>

				<div class="custom-screens-carousel">
					<div class="container">
						<div class="row justify-content-center text-center">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<div class="carousel-ipad">
									<div class="carousel-ipad-camera"></div>
									@include('porto.partials.owl-carousel.owl-carousel-139')
									<div class="carousel-ipad-home"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container my-5">
					<div class="row text-center py-5">
						<div class="col px-5">
							<h1 class="word-rotator-title font-weight-bold text-9 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
								Porto is Incredibly Powerful and Easy-to-Use
							</h1>
							<p class="lead px-5 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="divider">
								<div class="divider-small-text">
									As Seen On
								</div>
							</div>
						</div>
					</div>
					<div class="row text-center mt-5 pb-3">
						@include('porto.partials.owl-carousel.owl-carousel-140')
					</div>
				</div>

				<section class="section m-0 mt-4 border-0 p-relative" id="features">
					<div class="container">
						<div class="row py-2 align-items-center justify-content-center">
							<div class="col-lg-6 text-center">
								<img class="img-fluid" src="img/demos/sass/features/feature-1.gif" alt="">
							</div>
							<div class="col-lg-6 text-center text-lg-left">
								<h2 class="text-color-dark font-weight-bold text-6 mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">Manage any Project is Easy</h2>
								<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc. </p>
								<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis.</p>
								<a href="#" class="btn btn-dark custom-secondary-font font-weight-bold text-3 px-5 py-3 mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">VIEW OUR PLANS</a>
							</div>
						</div>
					</div>

					<div class="custom-animated-circles custom-animated-circles-primary custom-animated-circles-pos-3 d-none d-block-md">
						<div class="circle"></div>
						<div class="circle"></div>
						<div class="circle"></div>
						<div class="circle"></div>
					</div>
				</section>

				<section class="section bg-transparent m-0 border-0">
					<div class="container">
						<div class="row py-2 align-items-center justify-content-center">
							<div class="col-lg-6 text-center text-lg-left">
								<h2 class="text-color-dark font-weight-bold text-6 mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">Drag n’ Drop Features</h2>
								<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
								<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
								<a href="#" class="btn btn-dark custom-secondary-font font-weight-bold text-3 px-5 py-3 mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">VIEW OUR PLANS</a>
							</div>
							<div class="col-lg-6 text-center">
								<img class="img-fluid" src="img/demos/sass/features/feature-2.gif" alt="">
							</div>
						</div>
					</div>
				</section>

				<section class="section m-0 border-0">
					<div class="container">
						<div class="row py-2 align-items-center justify-content-center">
							<div class="col-lg-6 text-center">
								<img class="img-fluid" src="img/demos/sass/features/feature-3.gif" alt="">
							</div>
							<div class="col-lg-6 text-center text-lg-left">
								<h2 class="text-color-dark font-weight-bold text-6 mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">Advanced Reporting Features</h2>
								<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim.</p>
								<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc.</p>
								<a href="#" class="btn btn-dark custom-secondary-font font-weight-bold text-3 px-5 py-3 mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">VIEW OUR PLANS</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-dark section-height-3 m-0 border-0" id="overview">
					<div class="container-fluid">
						<div class="row">
							<div class="col text-center">
								<h2 class="text-color-light font-weight-bold text-7 mb-1">Control your Business like a Pro</h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-11 py-4">
							
							@include('porto.partials.owl-carousel.owl-carousel-141')

						</div>
					</div>

				</section>

				<section class="section section-height-3 m-0 border-0" id="reviews">
					<div class="container">
						<div class="row py-2">
							<div class="col text-center">
								<h2 class="text-color-dark font-weight-bold text-7 mb-1">User Reviews</h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
								@include('porto.partials.testimonial.testimonial-76')
							</div>
							<div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
								@include('porto.partials.testimonial.testimonial-77')
							</div>
							<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
								@include('porto.partials.testimonial.testimonial-78')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-3 bg-transparent m-0 border-0" id="pricing">
					<div class="container">
						<div class="row py-2">
							<div class="col text-center">
								<h2 class="text-color-dark font-weight-bold text-7 mb-1">Pricing</h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim.</p>
							</div>
						</div>

						@include('porto.partials.pricing-table.pricing-table')

					</div>
				</section>

				<section class="section section-height-3 curved-border m-0 border-0" id="faqs">
					<div class="container">
						<div class="row py-2">
							<div class="col text-center">
								<h2 class="text-color-dark font-weight-bold text-7 mb-1">Frequent Asked Questions</h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim.</p>
							</div>
						</div>
						<div class="row py-3 align-items-center justify-content-center">
							<div class="col-sm-9">
								
								@include('porto.partials.toggle.toggle-18')

							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-3 bg-transparent m-0 border-0">
					<div class="container">
						<div class="row justify-content-center counters counters-lg pt-2">
							<div class="col-md-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
								@include('porto.partials.counter.counter-73')
							</div>
							<div class="col-md-4 col-lg-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
								@include('porto.partials.counter.counter-74')
							</div>
							<div class="col-md-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
								@include('porto.partials.counter.counter-75')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-5 bg-primary curved-border curved-border-top overflow-hidden border-0 m-0" id="trial">
					<div class="custom-animated-circles custom-animated-circles-pos-2">
						<div class="circle"></div>
						<div class="circle"></div>
						<div class="circle"></div>
						<div class="circle"></div>
					</div>

					<img src="img/demos/sass/icons/icon-2.png" class="img-fluid position-absolute" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}" style="top: 29%; left: 26%;">
					<img src="img/demos/sass/icons/icon-5.png" class="img-fluid position-absolute" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3.5, 'transition': true, 'horizontal': true}" style="top: 36%; left: 80%;">
					<img src="img/demos/sass/icons/icon-6.png" class="img-fluid position-absolute" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 2.5, 'transition': true}" style="top: 57%; left: 73%;">

					<div class="container pb-5 mb-5">
						<div class="row pb-2 mb-4">
							<div class="col text-center">
								<h2 class="text-color-light font-weight-bold text-10 mb-2">Start Free Trial Now - 30 Days</h2>
								<p class="text-color-light opacity-6 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<form class="contact-form custom-form-style-1 form-errors-light" action="php/contact-form.php" method="POST">
									<div class="contact-form-success alert alert-success d-none mt-4">
										<strong>Success!</strong> Your message has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none mt-4">
										<strong>Error!</strong> There was an error sending your message.
										<span class="mail-error-message text-1 d-block"></span>
									</div>
									
									<input type="hidden" name="subject" id="subject" value="Contact Form - Start Free Trial">
									<div class="form-row">
										<div class="form-group col mb-2">
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col mb-2">
											<input type="text" value="" data-msg-required="Please enter the phone." maxlength="100" class="form-control" name="phone" id="phone" placeholder="Phone" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col mb-5">
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col text-center">
											<input type="submit" value="GET STARTED" class="btn btn-dark btn-modern custom-secondary-font text-3 px-5 py-3" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row" style="margin-top: -130px;">
						
						<div class="col-md-4">
							<a href="#" class="text-decoration-none">
								<div class="card border-0 border-radius-0 custom-box-shadow-1">
									<div class="card-body text-center p-5 my-2">
										<i class="icon-screen-smartphone icons text-color-dark text-11 mb-3 d-block"></i>
										<h4 class="text-color-primary font-weight-bold text-4 pb-1 mb-2">APP AVAILABLE</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" class="text-decoration-none">
								<div class="card border-0 border-radius-0 custom-box-shadow-1">
									<div class="card-body text-center p-5 my-2">
										<i class="icon-magnifier icons text-color-dark text-11 mb-3 d-block"></i>
										<h4 class="text-color-primary font-weight-bold text-4 pb-1 mb-2">KNOWLEDGE BASE</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" class="text-decoration-none">
								<div class="card border-0 border-radius-0 custom-box-shadow-1">
									<div class="card-body text-center p-5 my-2">
										<i class="icon-screen-desktop icons text-color-dark text-11 mb-3 d-block"></i>
										<h4 class="text-color-primary font-weight-bold text-4 pb-1 mb-2">USERS FORUM</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus.</p>
									</div>
								</div>
							</a>
						</div>

					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-light border-0">
				<div class="container my-4">
					<div class="row py-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<a href="#" class="text-decoration-none">
								<img class="mt-4" alt="Porto Website Template" src="img/logo-footer-dark.png" height="42">
							</a>
						</div>
						<div class="col-6 col-lg-2 mb-5 mb-lg-0">
							<ul class="list list-icons list-icons-sm">
								<li><i class="fas fa-angle-right text-color-default"></i><a href="page-services.html" class="link-hover-style-1 text-color-default ml-1"> Our Services</a></li>
								<li><i class="fas fa-angle-right text-color-default"></i><a href="about-us.html" class="link-hover-style-1 text-color-default ml-1"> About Us</a></li>
								<li><i class="fas fa-angle-right text-color-default"></i><a href="contact-us.html" class="link-hover-style-1 text-color-default ml-1"> Contact Us</a></li>
							</ul>
						</div>
						<div class="col-6 col-lg-2 mb-5 mb-lg-0">
							<ul class="list list-icons list-icons-sm">
								<li><i class="fas fa-angle-right text-color-default"></i><a href="page-faq.html" class="link-hover-style-1 text-color-default ml-1"> FAQ's</a></li>
								<li><i class="fas fa-angle-right text-color-default"></i><a href="sitemap.html" class="link-hover-style-1 text-color-default ml-1"> Sitemap</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-5">
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 1, 'iconColor': 'text-color-primary'}">
								<p>Please wait...</p>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-37', ['key' => 'footer-copyright.footer-copyright-37'])
			</footer>
@endsection
