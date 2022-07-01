@extends('porto.app')
@section('header')
@include('porto.partials.header.header-105')
@endsection

@section('main')
<div role="main" class="main">
				
				<section class="section section-no-border section-light custom-padding-top-1 mb-0">
					<div class="container">
						<div class="row mt-4">
							<div class="col-lg-9 mb-4 mb-lg-0">
								<h1 class="font-weight-bold text-color-primary mb-0">Contact Us</h1>
								<h4 class="font-weight-bold text-color-quaternary">Get in touch</h4>
								<p class="mb-5 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet laoreet lorem, a imperdiet sapien tincidunt at. Vivamus sed libero ut diam feugiat sagittis sit amet in justo.</p>
								<div class="row">
									<div class="col-md-4">
										<div class="custom-location">
											<img src="img/demos/gym/map/pin.png" alt class="img-fluid">
											<h6 class="font-weight-bold text-color-quaternary text-5 mb-1">Los Angeles</h6>
											<p>
												Porto Blvd, Suite 100<br>
												Los Angeles/CA<br>
												<strong>Phone:</strong> <a href="tel:+123456789" class="text-color-dark">123-456-7890</a>
											</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="custom-location">
											<img src="img/demos/gym/map/pin.png" alt class="img-fluid">
											<h6 class="font-weight-bold text-color-quaternary text-5 mb-1">New York</h6>
											<p>
												Porto Blvd, Suite 100<br>
												New York/NY<br>
												<strong>Phone:</strong> <a href="tel:+123456789" class="text-color-dark">123-456-7890</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="custom-join-now-form custom-position-style-2 bg-color-primary p-4">
									<h4 class="font-weight-bold text-color-light mb-0">Try us Out!</h4>
									<p class="font-weight-light text-color-light text-2">Get a free 5 day VIP guest pass.</p>
									<form id="vipRequest" class="contact-form" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4" id="vipRequestSuccess">
											<strong>Success!</strong> Your VIP request has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4" id="vipRequestError">
											<strong>Error!</strong> There was an error sending your VIP request.
											<span class="mail-error-message text-1 mt-2 d-block" id="vipRequestErrorMessage"></span>
										</div>
										
										<input type="hidden" name="subject" value="Vip Request Received">
										<div class="form-row">
											<div class="form-group col">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="vipRequestName" placeholder="Your Name" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="vipRequestEmail" placeholder="Your E-mail" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="text" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control" name="phone" id="vipRequestPhone" placeholder="Your Phone" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col mb-0">
												<input type="submit" value="Join Now!" class="btn btn-quaternary custom-btn-style-2 font-weight-bold" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-quaternary section-text-light m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<h2 class="font-weight-bold text-color-light">Send us a message</h2>
								<form id="contactFormMessage" class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
									<div class="contact-form-success alert alert-success d-none mt-4" id="contactFormMessageSuccess">
										<strong>Success!</strong> Your message has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none mt-4" id="contactFormMessageError">
										<strong>Error!</strong> There was an error sending your message.
										<span class="mail-error-message text-1 mt-2 d-block" id="contactFormMessageErrorMessage"></span>
									</div>
									
									<input type="hidden" name="subject" value="Contact Form Received">
									<div class="form-row">
										<div class="form-group col-lg-4 col-sm-4 custom-xs-margin-3">
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="contactName" placeholder="Your Name" required>
										</div>
										<div class="form-group col-lg-4 col-sm-4 custom-xs-margin-3">
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="contactEmail" placeholder="Your E-mail" required>
										</div>
										<div class="form-group col-lg-4 col-sm-4">
											<input type="tel" value="" data-msg-required="Please enter your phone number" maxlength="100" class="form-control" name="phone" id="contactPhone" placeholder="Your Phone" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="contactMessage" placeholder="Your Message" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="submit" value="Send Message" class="btn btn-primary font-weight-bold custom-btn-style-3 float-right btn-lg" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>
							<div class="col-lg-5">
								<h2 class="font-weight-bold text-color-light mt-2">Why Us?</h2>
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<ul class="list list-icons list-light text-color-light">
											<li><i class="fas fa-check"></i> Fitness Consultation</li>
											<li><i class="fas fa-check"></i> Professionals</li>
											<li><i class="fas fa-check"></i> Zumba</li>
										</ul>
									</div>
									<div class="col-lg-6 col-sm-6">
										<ul class="list list-icons list-light text-color-light">
											<li><i class="fas fa-check"></i> Conditioning</li>
											<li><i class="fas fa-check"></i> Sports</li>
											<li><i class="fas fa-check"></i> Consultation</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 p-0">
							<section class="resources section-background custom-wide-section custom-small-section-padding-2 custom-overlay-style-2" style="background: url('img/demos/gym/carousels/resources.jpg'); background-size: cover;">
								<h2 class="text-color-light font-weight-bold">Resources</h2>
								@include('porto.partials.owl-carousel.owl-carousel-64')
							</section>
						</div>
						<div class="col-lg-4 p-0">
							<section class="working-hours section-background custom-wide-section custom-small-section-padding-2 custom-overlay-style-2" style="background: url('img/demos/gym/carousels/working-hour.jpg'); background-size: cover;">
								<h2 class="text-color-light font-weight-bold">Working Hours</h2>
								<ul class="custom-list-style-1 pl-0">
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">Mon - Fri</span>
										<span class="custom-list-value custom-text-color-1">: 5.30am - 11.00pm</span>
									</li>
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">Saturday</span>
										<span class="custom-list-value custom-text-color-1">: 5.30am - 1.00pm</span>
									</li>
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">Sunday</span>
										<span class="custom-list-value custom-text-color-1">: Closed</span>
									</li>
								</ul>
							</section>
						</div>
						<div class="col-lg-4 p-0">
							<section class="custom-wide-section">
								<a class="instagram-button text-decoration-none text-color-light" href="https://www.instagram.com/" title="Instagram">
									<i class="fab fa-instagram"></i>
								</a>
								@include('porto.partials.owl-carousel.owl-carousel-65')
							</section>
						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-16')

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-155')
@endsection
