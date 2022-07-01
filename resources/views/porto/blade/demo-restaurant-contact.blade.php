@extends('porto.app')
@section('header')
@include('porto.partials.header.header-181')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.page-header.page-header-195')

				<section class="section section-default mb-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="row">
									<div class="col-md-6 col-lg-12">
										<h5 class="mb-1 mt-4">Book Now</h5>
										<p><i class="fas fa-phone"></i> (123) 456-789</p>
		
										<h5 class="mb-1 mt-4">Private Events</h5>
										<p><i class="fas fa-phone"></i> (123) 456-789</p>
		
										<h5 class="mb-1 mt-4">Visit Us</h5>
										<p><i class="fas fa-map-marker-alt"></i> 123 Street Name, Porto</p>
									</div>
									<div class="col-md-6 col-lg-12">
										<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
										@include('porto.partials.google-map.google-map-26')

										<p><a href="http://maps.google.com/" target="_blank">(Get Directions)</a></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="row">
									<div class="col-md-6 col-lg-12">
										<h5 class="mb-1 mt-4">Lunch Hours</h5>
	
										<ul class="list list-icons list-dark mt-3">
											<li><i class="far fa-clock"></i> Monday - Friday - 9am to 5pm</li>
											<li><i class="far fa-clock"></i> Saturday - 9am to 2pm</li>
											<li><i class="far fa-clock"></i> Sunday - Closed</li>
										</ul>
									</div>
									<div class="col-md-6 col-lg-12">
										<h5 class="mb-1 mt-4">Dining Hours</h5>
	
										<ul class="list list-icons list-dark mt-3">
											<li><i class="far fa-clock"></i> Monday - Friday - 9am to 5pm</li>
											<li><i class="far fa-clock"></i> Saturday - 9am to 2pm</li>
											<li><i class="far fa-clock"></i> Sunday - Closed</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<h5 class="mb-3 mt-4">Send a Message</h5>

								<form class="contact-form" action="php/contact-form.php" method="POST">
									<div class="form-row">
										<div class="form-group col">
											<label>Your name *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Your email address *</label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Subject</label>
											<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Message *</label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="submit" value="Send Message" class="btn btn-lg btn-primary" data-loading-text="Loading...">

											<div class="contact-form-success alert alert-success d-none">
												Message has been sent to us.
											</div>

											<div class="contact-form-error alert alert-danger d-none">
												Error sending your message.
												<span class="mail-error-message text-1 d-block"></span>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section></div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0 bg-color-secondary mt-0">
				<div class="container">
					<div class="row py-5">
						<div class="col text-center">
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-32', ['key' => 'footer-copyright.footer-copyright-32'])
			</footer>
@endsection
