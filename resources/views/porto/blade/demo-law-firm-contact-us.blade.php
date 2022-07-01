@extends('porto.app')
@section('header')
@include('porto.partials.header.header-142')
@endsection

@section('main')
<div role="main" class="main">
				<div class="container">
					<div class="row pt-5">
						<div class="col-lg-7">
							<h1 class="mb-0">Contact Us</h1>
							<div class="divider divider-primary divider-small mb-4">
								<hr class="mr-auto">
							</div>
							<p class="lead mb-5 mt-4">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

							<form class="contact-form" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-5" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
						<div class="col-lg-4 col-lg-offset-1">

							<h4 class="mb-0">Our Office</h4>
							<div class="divider divider-primary divider-small mb-4">
								<hr class="mr-auto">
							</div>

							<ul class="list list-icons list-icons-style-3 mt-4 mb-4">
								<li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street Name, City Name</li>
								<li><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
								<li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>

							<h4 class="pt-4 mb-0">Business Hours</h4>
							<div class="divider divider-primary divider-small mb-4">
								<hr class="mr-auto">
							</div>

							<ul class="list list-icons list-dark mt-4">
								<li><i class="far fa-clock"></i> Monday - Friday - 9am to 5pm</li>
								<li><i class="far fa-clock"></i> Saturday - 9am to 2pm</li>
								<li><i class="far fa-clock"></i> Sunday - Closed</li>
							</ul>

						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-20')
			</div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0">
				<div class="container py-4">
					<div class="row py-5">
						<div class="col-md-6 mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3 mb-3">
								<img alt="Porto Website Template" src="img/demos/law-firm/logo-law-firm-footer.png" class="opacity-7 top-auto bottom-10" height="32">
							</a>
							<p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">CONTACT US</h5>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
								<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h5 class="text-3 mb-3">FOLLOW US</h5>
							@include('porto.partials.header-social-icons.header-social-icons-13')
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-23', ['key' => 'footer-copyright.footer-copyright-23'])
			</footer>
@endsection
