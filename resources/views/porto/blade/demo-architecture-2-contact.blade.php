@extends('porto.app')
@section('header')
@include('porto.partials.header.header-8')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-47')

				<div class="custom-page-wrapper pt-5 pb-1">
					<div class="spacer py-4 my-5"></div>
					<div class="container container-lg-custom pb-5 mb-5">
						<div class="row pb-3">
							<div class="col-lg-6">
								<div class="position-absolute z-index-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="3000" style="top: 110px; left: -206px;">
									<h2 class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">YOUR PLACE</h2>
								</div>
								<div class="overflow-hidden mb-2">
									<h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1500">WE'RE HERE TO HELP</h2>
								</div>
								<div class="overflow-hidden mb-4">
									<h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1700">Get Your Project Done</h3>
								</div>
								<img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mb-4 mt-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1900" alt="">
								<p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
								<p class="text-3-5 pb-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<div class="row">
									<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2500">
										<h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mb-0">Work Inquiries</h4>
										<a href="tel:1234567890" class="text-decoration-none text-color-default text-color-hover-primary">(800) 123-4567</a>
										<h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mb-0">Careers &amp; Press</h4>
										<a href="tel:1234567890" class="text-decoration-none text-color-default text-color-hover-primary">(800) 123-4567</a>
									</div>
									<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2700">
										<h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mt-lg-0 mb-0">Address</h4>
										<p class="mb-0">12345 Porto Blvd.<br>Suite 1500<br>Los Angeles, California 90000</p>
										<h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mb-0">Email</h4>
										<a href="mailto:mail@example.com" class="text-decoration-none text-color-default text-color-hover-primary">mail@example.com</a>
									</div>
									<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2900">
										<h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mt-lg-0 mb-0">Business Hours</h4>
										<p class="mb-0">Mon - Sat 9:00am - 6:00pm<br>Sunday - CLOSED</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="overflow-hidden mb-4 mt-4">
									<h3 class="text-transform-none text-color-dark font-weight-black text-7 line-height-2 mb-0 pt-3 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="2600">Send a Message</h3>
								</div>
								<form class="contact-form custom-form-style-1 appear-animation" action="php/contact-form.php" method="POST" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2800">
	                                <div class="contact-form-success alert alert-success d-none mt-4">
	                                    <strong>Success!</strong> Your message has been sent to us.
	                                </div>

	                                <div class="contact-form-error alert alert-danger d-none mt-4">
	                                    <strong>Error!</strong> There was an error sending your message.
	                                    <span class="mail-error-message text-1 d-block"></span>
	                                </div>
	                                
	                                <div class="form-row">
	                                    <div class="form-group col mb-3">
	                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-radius-0" name="name" id="name" required placeholder="Name *">
	                                    </div>
	                                </div>
	                                <div class="form-row">
	                                    <div class="form-group col mb-3">
	                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-radius-0" name="email" id="email" required placeholder="E-mail *">
	                                    </div>
	                                </div>
	                                <div class="form-row">
	                                    <div class="form-group col mb-3">
	                                        <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-radius-0" name="phone" id="phone" required placeholder="Phone *">
	                                    </div>
	                                </div>
	                                <div class="form-row">
	                                    <div class="form-group col mb-4">
	                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control border-radius-0" name="message" id="message" required placeholder="Message *"></textarea>
	                                    </div>
	                                </div>
	                                <div class="form-row">
	                                    <div class="form-group col mb-0">
	                                        <button type="submit" class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3" data-loading-text="Loading...">SUBMIT</button>
	                                    </div>
	                                </div>
	                            </form>
							</div>
						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-2')

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-primary border-0 mt-0">
				<div class="container container-lg-custom pt-5 pb-3">
					<div class="row py-5">
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="font-weight-extra-bold text-5 ls-0">Address</h4>
							<ul class="list list-unstyled">
								<li class="mb-1">
									12345  Porto Blvd.
								</li>
								<li class="mb-1">
									Suite 1500
								</li>
								<li>
									Los Angeles, California 90000
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="font-weight-extra-bold text-5 ls-0">Contacts</h4>
							<ul class="list-unstyled">
								<li>
									<span class="d-block line-height-2 mb-1">OFFICE</span>
									<a href="tel:+1234567890" class="text-color-light text-6 text-lg-4 text-xl-6 font-weight-bold">800-123-4568</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="font-weight-extra-bold text-5 ls-0">Useful Links</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-architecture-2-services.html">Our Services</a>
								</li>
								<li class="mb-1">
									<a href="#">Payment Methods</a>
								</li>
								<li class="mb-1">
									<a href="#">Services Guide</a>
								</li>
								<li>
									<a href="#">FAQs</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="font-weight-extra-bold text-5 ls-0">Services</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-architecture-2-services-detail.html">Design &amp; Planning</a>
								</li>
								<li class="mb-1">
									<a href="demo-architecture-2-services-detail.html">Interior Design</a>
								</li>
								<li class="mb-1">
									<a href="demo-architecture-2-services-detail.html">Exerior Design</a>
								</li>
								<li>
									<a href="demo-architecture-2-services-detail.html">Construction Drawings</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="font-weight-extra-bold text-5 ls-0">About</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-architecture-2-about-us.html">About Us</a>
								</li>
								<li>
									<a href="demo-architecture-2-contact.html">Send a Message</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h4 class="font-weight-extra-bold text-5 ls-0">Follow Us</h4>
							<ul class="social-icons social-icons-clean social-icons-icon-light">
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
				@include('porto.partials.footer-copyright.footer-copyright-4', ['key' => 'footer-copyright.footer-copyright-4'])
			</footer>
@endsection
