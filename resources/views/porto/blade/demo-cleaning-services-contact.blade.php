@extends('porto.app')
@section('header')
@include('porto.partials.header.header-55')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-106')

				<section class="section border-0 py-0 m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="row py-5 my-5">
									<div class="col-md-6">
										<h2 class="font-weight-bold text-color-secondary text-6 text-lg-5 text-xl-6 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Get In Touch</h2>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
											<h3 class="font-weight-bold text-color-secondary text-transform-none text-4 text-lg-3 mb-0">Work Inquiries</h3>
											<a href="tel:+1234567890" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">(800) 123-4567</a>
										</div>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
											<h3 class="font-weight-bold text-color-secondary text-transform-none text-4 text-lg-3 mb-0">Careers &amp; Press</h3>
											<a href="tel:+1234567890" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">(800) 123-4567</a>										
										</div>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
											<h3 class="font-weight-bold text-color-secondary text-transform-none text-4 text-lg-3 mb-0">Assistance Hours</h3>
											<p>Mon - Sat 9:00am - 8:00pm<br> Sunday - CLOSED</p>
										</div>
									</div>
									<div class="col-md-6">
										<h2 class="font-weight-bold text-color-secondary text-6 text-lg-5 text-xl-6 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Post Address and Mail</h2>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
											<h3 class="font-weight-bold text-color-secondary text-transform-none text-4 text-lg-3 mb-0">Address</h3>
											<p>12345 Porto Blvd. <br>Suite 1500 <br>Los Angeles, California 90000</p>
										</div>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
											<h3 class="font-weight-bold text-color-secondary text-transform-none text-4 text-lg-3 mb-0">Email</h3>
											<a href="mailto:mail@example.com" class="text-color-default text-color-hover-primary text-decoration-underline mb-4">mail@example.com</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 fluid-col-lg-5 p-0">
								<div class="fluid-col h-100">

									<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
									@include('porto.partials.google-map.google-map-10')

								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-5 mt-5">
					<div class="row pb-2 mb-4">
						<div class="col">
							<div class="d-flex align-items-center mb-2">
								<span class="custom-line appear-animation" data-appear-animation="customLineAnimation" appear-animation-duration="1s"></span>
								<div class="overflow-hidden ml-3">
									<h2 class="text-color-primary font-weight-semibold line-height-3 text-4 mb-0 appear-animation" data-appear-animation="maskRight" data-appear-animation-delay="1000">GET IN TOUCH</h2>
								</div>
							</div>
							<h3 class="text-color-secondary font-weight-bold text-transform-none line-height-2 text-8 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Send Us a Message</h3>
						</div>
					</div>
					<div class="row pb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
						<div class="col">
							<form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
                                <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>
                                
                                <div class="form-row row-gutter-sm">
                                    <div class="form-group col-lg-6 mb-4">
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required placeholder="Your Name">
                                    </div>
                                    <div class="form-group col-lg-6 mb-4">
                                        <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control" name="phone" id="phone" required placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-row row-gutter-sm">
                                    <div class="form-group col-lg-6 mb-4">
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required placeholder="Your Name">
                                    </div>
                                    <div class="form-group col-lg-6 mb-4">
                                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required placeholder="Subject">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col mb-4">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col mb-0">
                                        <button type="submit" class="btn btn-primary btn-modern font-weight-bold text-3 px-5 py-3" data-loading-text="Loading...">SEND MESSAGE</button>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
				</div>

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
