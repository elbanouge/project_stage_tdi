@extends('porto.app')
@section('header')
@include('porto.partials.header.header-63')
@endsection

@section('porto.partials
<div role="main" class="main">
@include('porto.partials.page-header.page-header-113')

				<div class="container container-lg-custom pt-4">
					<div class="row">
						<div class="col">
							<p class="mb-1">GET IN TOUCH</p>
							<h3 class="text-secondary font-weight-bold text-capitalize text-7 mb-3">Send Us a Message</h3>
						</div>
					</div>
					<div class="row pb-4">
						<div class="col-lg-7 pb-5">

							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie purus eget placerat viverra.
							</p>

							<form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control bg-color-tertiary" name="name" id="name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="email" placeholder="E-mail Address" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control bg-color-tertiary" name="email" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Phone Number" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control bg-color-tertiary" name="phone" id="phone" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control bg-color-tertiary" name="subject" id="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control bg-color-tertiary" name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="SEND MESSAGE" class="btn btn-outline btn-primary rounded-0 py-3 px-5 font-weight-semibold" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
						<div class="col-lg-5">
							<div class="custom-card-style-2 card-contact-us mb-5">
								<div class="m-4">
									<div class="row flex-column px-5 pt-3 pb-4">
										<div class="row px-3 mb-3">
											<h3 class="text-secondary font-weight-bold text-capitalize my-3">Contact Info</h3>
											<p>Lorem inpsum dolor sit amet, consectetur adipiscing elit. Sed eget risus pora, tincidunt turpis at, intermedum tortor.</p>
										</div>
										<div class="row px-lg-3 pb-2 align-items-center">
											<div class="col-2 col-lg-1 px-1 text-center">
												<i class="fas fa-map-marker-alt text-8 text-secondary"></i>
											</div>
											<div class="col-10 col-lg-11">
												<h4 class="text-secondary font-weight-bold text-capitalize mb-1">Adress</h4>
												<p class="mb-0">123 Street Name, City, England</p>
											</div>
										</div>
										<hr>
										<div class="row px-lg-3 py-2 align-items-center">
											<div class="col-2 col-lg-1 px-1 text-center">
												<i class="fas fa-mobile-alt text-8 text-secondary"></i>
											</div>
											<div class="col-10 col-lg-11">
												<h4 class="text-secondary font-weight-bold text-capitalize mb-1">Phone Number</h4>
												<p class="mb-0"><a href="#" class="text-color-default">(800) 123-4567</a></p>
											</div>
										</div>
										<hr>
										<div class="row px-lg-3 py-2 align-items-center">
											<div class="col-2 col-lg-1 px-1 text-center">
												<i class="far fa-envelope text-7 text-secondary"></i>
											</div>
											<div class="col-10 col-lg-11">
												<h4 class="text-secondary font-weight-bold text-capitalize mb-1">E-mail Address</h4>
												<p class="mb-0"><a class="px-0 text-default" href="mailto:mail@domain.com">porto@construction.com</a></p>
											</div>
										</div>
										<hr>
										<div class="row px-lg-3 pt-2 align-items-center">
											<div class="col-2 col-lg-1 px-1 text-center">
												<i class="far fa-calendar-alt text-7 text-secondary"></i>
											</div>
											<div class="col-10 col-lg-11">
												<h4 class="text-secondary font-weight-bold text-capitalize mb-1">Working days/Hours</h4>
												<p class="mb-1">Mon - Sun / 9:00AM - 8:00PM</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-12')
			   
			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-color-secondary border-top-0 mt-0 custom-footer">
				<div class="container container-lg-custom py-md-4">
					<div class="row justify-content-md-center py-5">
						<div class="col-md-12 col-lg-2 d-flex align-items-center justify-content-center justify-content-lg-start mb-5 mb-lg-0">
							<a href="#"><img src="img/demos/construction-2/logo-1.png" alt="Logo" class="img-fluid logo"></a>
						</div>
						<div class="col-md-3 text-center text-md-left">
							<p class="text-5 text-color-light font-weight-bold mb-3 mt-4 mt-lg-0">Get in Touch</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">ADDRESS</p>
							<p class="text-3 mb-2 text-color-light">123 Street name, City, USA.</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">PHONE</p>
							<p class="text-3 mb-2 text-color-light">Toll Free <a href="tel:+1234567890" class="text-color-light">(123) 456-7890</a></p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">EMAIL</p>
							<p class="text-3 mb-2 "><a href="mailto:info@porto.com" class="text-color-light">mail@example.com</a></p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">Working Days/Hours</p>
							<p class="text-3 mb-3 text-color-light">Mon - Sun / 9:00AM - 8:00PM</p>
							<ul class="social-icons social-icons-dark social-icons-clean">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" target="_blank" title="Instagram">
										<i class="fab fa-instagram font-weight-semibold"></i>
									</a>
								</li>
								<li class="social-icons-twitter">
									<a href="http://www.twitter.com/" target="_blank" title="Twitter">
										<i class="fab fa-twitter font-weight-semibold"></i>
									</a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" target="_blank" title="Facebook">
										<i class="fab fa-facebook-f font-weight-semibold"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 text-center text-md-left mt-5 mt-md-0 mb-5 mb-lg-0">
							<p class="text-5 text-color-light font-weight-bold mb-3 mt-4 mt-lg-0">Useful links</p>
							<div class="row opacity-7">
								<div class="col-md-5">
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Contact Us</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Our Services</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Payment Methods</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Services Guide</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">FAQs</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Service Support</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Privacy</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">About Porto</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Our Guarantees</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Terms And Conditions</a></p>
								</div>
								<div class="col-md-5">
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Privacy Policy</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Return Policy</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Intellectual Property</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Site Map</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-3 text-center text-md-left">
							<p class="text-5 text-color-light font-weight-bold mb-3 mt-4 mt-lg-0">Latest Projects</p>

							<p class="text-3 mb-0 text-color-light opacity-7">Painting, Plumbing</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light">House Renovation - New York / NY</p>
							<p class="text-3 mb-4 font-weight-bold"><a href="#" class="link-hover-style-1 text-primary">VIEW MORE+</a></p>

							<p class="text-3 mb-0 text-color-light opacity-7">Eletrical Maitenance</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light">Building Repair - Detroit / MI</p>
							<p class="text-3 mb-4 font-weight-bold"><a href="#" class="link-hover-style-1 text-primary">VIEW MORE+</a></p>

							<p class="text-3 mb-0 text-color-light opacity-7">Flooring</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light">House Repair - New York / NY</p>
							<p class="text-3 font-weight-bold"><a href="#" class="link-hover-style-1 text-primary">VIEW MORE+</a></p>
						</div>
					</div>
				</div>porto.partials
				<div class="container container-lg-custom">
					@include('porto.partials.footer-copyright.footer-copyright-12', ['key' => 'footer-copyright.footer-copyright-12'])
				</div>
				<div class="container-fluid bg-light">
					<div class="container container-lg-custom py-5">
						<div class="row flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between px-3">
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-1.png" alt="Brand" class="img-fluid">
							</span>
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-2.png" alt="Brand" class="img-fluid">
							</span>
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-3.png" alt="Brand" class="img-fluid">
							</span>
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-4.png" alt="Brand" class="img-fluid">
							</span>
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-5.png" alt="Brand" class="img-fluid">
							</span>
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-6.png" alt="Brand" class="img-fluid">
							</span>
						</div>
					</div>
				</div>
			</footer>
@endsection
