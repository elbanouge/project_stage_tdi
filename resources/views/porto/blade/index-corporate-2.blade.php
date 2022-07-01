@extends('porto.app')
@section('header')
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-top">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
												</li>
												<li clasporto.partials-anim-icon d-none d-md-block">
													<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
												</li>
												<li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
													<a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<img src="img/blank.gif" class="flag flag-us" alt="English"> English
														<i class="fas fa-angle-down"></i>
													</a>
													<div class="dropdown-menu" aria-labelledby="dropdownLanguage">
														<a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-us" alt="English"> English</a>
														<a clporto.partialshref="#"><img src="img/blank.gif" class="flag flag-es" alt="English"> Español</a>
														<a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-fr" alt="English"> Française</a>
													</div>
												</li>
												<li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
													<span porto.partials class="fas fa-phone"></i> (123) 456-789</span>
												</li>porto.partialsporto.partials
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										@include('porto.partials.header-social-icons.header-social-icons-5')
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									@include('porto.partials.header-logo.header-logo-2')
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									@include('porto.partials.header-nav.header-nav-242')
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										@include('porto.partials.header-nav-feature.header-nav-feature-3')
										@include('porto.partials.header-nav-feature.header-nav-feature-27')
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
@endsection

@section('main')
<div role="main" class="main">

				<section class="section section-overlay-opacity section-overlay-opacity-scale-7 border-0 m-0" style="background-image: url(img/slides/slide-corporate-2-1.jpg); background-size: cover; background-position: center;">
					<div class="container py-5">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 text-center mb-5 mb-lg-0">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
										<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
											<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
										</span>
										DO YOU NEED A <span class="position-relative">NEW <span class="position-absolute left-50pct transform3dx-n50 top-0 mt-3"><img src="img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="2500" data-plugin-options="{'minWindowWidth': 0}" alt=""></span></span>
										<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
											<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
										</span>
									</h3>
									<h1 class="text-color-light font-weight-extra-bold text-12 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1300" data-plugin-options="{'minWindowWidth': 0}">WEB DESIGN?</h1>
									<p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 3500, 'minWindowWidth': 0}">Check out our options and features</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="slider-contact-form-wrapper bg-primary rounded p-5 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="3000" data-appear-animation-duration="1s">
									<div class="row">
										<div class="col text-center">
											<h2 class="font-weight-semi-bold text-color-light text-6 mb-2">Get a Quote</h2>
											<p class="text-color-light opacity-7 font-weight-light mb-4 px-xl-5">Enter your personal info below and let’s start talking about your new website or customized project.</p>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<form class="contact-form form-style-2 form-errors-light" action="php/contact-form.php" method="POST">
												<div class="contact-form-success alert alert-success d-none mt-4">
													<strong>Success!</strong> Your message has been sent to us.
												</div>
													<div class="contact-form-error alert alert-danger d-none mt-4">
													<strong>Error!</strong> There was an error sending your message.
													<span class="mail-error-message text-1 d-block"></span>
												</div>
												
												<div class="form-row">
													<div class="form-group col-lg-6">
														<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Your Name..." required>
													</div>
													<div class="form-group col-lg-6">
														<input type="tel" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control" name="phone" id="phone" placeholder="Your Phone..." required>
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col mb-4">
														<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" placeholder="Your Message..." required></textarea>
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col text-center">
														<input type="submit" value="SUBMIT" class="btn btn-dark px-4 py-3" data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>
									</div>
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

				@include('porto.partials.call-to-action.call-to-action-31')

				@include('porto.partials.call-to-action.call-to-action-32')
			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0">
				@include('porto.partials.footer-copyright.footer-copyright-49', ['key' => 'footer-copyright.footer-copyright-49'])
			</footer>
@endsection
