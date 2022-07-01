@extends('porto.app')
@section('header')
@include('porto.partials.header.header-56')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-107')

				<section class="section border-0 pb-0 pb-lg-5 m-0">
					<div class="container my-lg-4">
						<div class="row">
							<div class="col-lg-8 mb-5 mb-lg-0">
								@include('porto.partials.owl-carousel.owl-carousel-38')

								<h2 class="text-color-dark font-weight-bold text-6 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Description</h2>
								<p class="custom-font-secondary text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. </p>
								<p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt id enim sodales, rhoncus malesuada ligula. </p>

								<div class="row">
									<div class="col-sm-6">
										<ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-0">
											<li class="font-weight-semibold text-color-dark mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Pellentesque ultricies nibh</li>
											<li class="font-weight-semibold text-color-dark mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Ultricies nibh pellen</li>
										</ul>
									</div>
									<div class="col-sm-6">
										<ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-0">
											<li class="font-weight-semibold text-color-dark mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Ultricies nibh pellen</li>
											<li class="font-weight-semibold text-color-dark mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Pellentesque ultricies nibh</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card custom-border-radius-1 box-shadow-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
									<div class="card-body py-5 my-3">
										<ul class="list list-unstyled mb-0">
											<li class="text-5 mb-4"><strong class="text-color-dark">Client:</strong> Okler Themes</li>
											<li class="custom-font-size-3 mb-4"><strong class="text-color-dark">Date:</strong> May 2020</li>
											<li class="custom-font-size-3 mb-4"><strong class="text-color-dark">Timeframe:</strong> 2 days</li>
											<li class="custom-font-size-3 mb-0"><strong class="text-color-dark">Services:</strong> Home, Office</li>
										</ul>
									</div>
								</div>
								<div class="card custom-border-radius-1 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
									<div class="card-body py-5">
										<h2 class="text-color-secondary font-weight-bold text-6 line-height-1 pb-1 mb-2">Request a Callback</h2>
										<p class="custom-font-secondary text-4 pb-1 mb-4">Enter your details in the form and we will call you back.</p>
										<form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
											<div class="contact-form-success alert alert-success d-none mt-4">
												<strong>Success!</strong> Your request has been sent to us.
											</div>

											<div class="contact-form-error alert alert-danger d-none mt-4">
												<strong>Error!</strong> There was an error sending your request.
												<span class="mail-error-message text-1 d-block"></span>
											</div>
											
											<div class="form-row">
												<div class="form-group col pb-1 mb-3">
													<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Your Name" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col pb-1 mb-3">
													<input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control" name="phone" placeholder="Your Phone Number" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col pb-1 mb-3">
													<div class="custom-select-1">
														<select data-msg-required="Please select a service." class="form-control" name="service" required>
															<option value="" selected>Select Service</option>
															<option value="Build Services">Building Services</option>
															<option value="Post Construction">Post Construction</option>
															<option value="Office Cleaning">Office Cleaning</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<button type="submit" class="btn btn-primary btn-modern font-weight-bold text-3 px-5 py-3" data-loading-text="Loading...">CALL ME BACK</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-with-shape-divider section-height-3 bg-tertiary border-0 m-0">
					<div class="shape-divider" style="height: 116px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1920 116" preserveaspectratio="xMinYMin">
							<path class="custom-svg-fill-color-tertiary-darken" d="M0,24c2.86,0.42,7.41,1.1,13,2c6.13,0.98,10.67,1.77,12,2c11.67,2.01,42.24,7.05,68,11
								c7.79,1.2,22.72,3.48,41,6c20.75,2.86,38.83,5.06,74,9c41.19,4.61,62.09,6.95,93,10c57.4,5.66,101.17,9.03,114,10
								c9.13,0.69,40.29,3.02,109,7c48.33,2.8,87.04,5.04,132,7c76.86,3.35,135.02,4.27,184,5c104.27,1.56,187.39,0.71,234,0
								c21.92-0.34,91.62-1.5,183-5c50.62-1.94,106.43-4.12,181-9c57.01-3.73,108.05-7.94,152-12c94.91-8.78,162.37-17.44,182-20
								c41.76-5.45,72.06-10.09,96-14c21.23-3.47,39.04-6.63,52-9c0-11.67,0-23.33,0-35C1279-11,638-11-3-11C-2,0.67-1,12.33,0,24z"></path>
							<path fill="#F7F7F7" d="M-7,23c1.59,0.23,4.03,0.58,7,1c82.06,11.6,145.17,16.35,182,19c244.62,17.62,377,23,377,23
								c157.86,6.42,277.64,7.71,308,8c75.8,0.73,232.89,1.31,438-6c0,0,137.72-4.66,358-19c42.98-2.8,104.01-7.03,183-16
								c33.26-3.78,60.85-7.38,80-10c0-9.01,0-18.01,0-27.02c-644,0-1288,0-1932,0C-6.33,4.99-6.67,13.99-7,23z"></path>
						</svg>
					</div>
					<div class="container pt-4 pb-3 mt-5">
						<div class="row align-items-center justify-content-center pt-3">
							<div class="col-md-9 col-lg-7 col-xl-9 text-center text-xl-left mb-4 mb-xl-0">
								<h2 class="text-color-light font-weight-medium line-height-4 text-9 negative-ls-1 mb-2">For <span class="font-weight-extra-bold custom-highlight-1 p-1 appear-animation" data-appear-animation="customHighlightAnim" data-appear-animation-delay="300">Residential and Commercial</span> Cleaning</h2>
								<p class="custom-font-secondary custom-font-size-1 font-weight-light text-color-light opacity-8 mb-0">Our Staff is trained to clean everything you need!</p>
							</div>
							<div class="col-xl-3 text-center text-xl-right">
								<div class="position-relative">
									<a href="demo-cleaning-services-contact.html" class="btn btn-secondary btn-modern font-weight-bold text-3 btn-px-4 py-3">BOOK NOW IN 60 SECONDS</a>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="footer-reveal bg-color-secondary border-0 mt-0">
				<div class="container container-lg-custom pt-4 pb-3">
					<div class="row py-5">
						<div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-bold ls-0">Our Address</h4>
							<ul class="list list-unstyled mb-0">
								<li class="mb-1">
									12345  Porto Blvd.
								</li>
								<li class="mb-1">
									Suite 1500
								</li>
								<li class="mb-0">
									Los Angeles, California 90000
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-bold ls-0">Our Contacts</h4>
							@include('porto.partials.feature-box.feature-box-37')
							<a href="demo-cleaning-services-contact.html" class="btn btn-primary font-weight-bold px-5 py-3 mb-2">BOOK NOW</a>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="font-weight-bold ls-0">Our Services</h4>
							<ul class="list-unstyled mb-0">
								<li class="mb-1">
									<a href="demo-cleaning-services-services-detail.html">Building Services</a>
								</li>
								<li class="mb-1">
									<a href="demo-cleaning-services-services-detail.html">Post Construction</a>
								</li>
								<li class="mb-0">
									<a href="demo-cleaning-services-services-detail.html">Office Cleaning</a>
								</li>
							</ul>
							<a href="demo-cleaning-services-services.html" class="btn btn-link font-weight-bold text-decoration-none pl-0">VIEW MORE</a>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="font-weight-bold ls-0">About</h4>
							<ul class="list-unstyled mb-0">
								<li class="mb-1">
									<a href="demo-cleaning-services-about-us.html">About Us</a>
								</li>
								<li class="mb-0">
									<a href="demo-cleaning-services-contact.html">Send a Message</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h4 class="font-weight-bold ls-0">Follow Us</h4>
							<ul class="social-icons social-icons-clean social-icons-medium">
								<li>
									<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-10', ['key' => 'footer-copyright.footer-copyright-10'])
			</footer>
@endsection
