@extends('porto.app')
@section('header')
@include('porto.partials.header.header-92')
@endsection

@section('main')
<div role="maiporto.partials
				
				@include('porto.partials.page-header.page-header-137')

				<section class="section bg-color-tertiary border-0 my-0 pb-4">
					<div class="container">
						<div class="row pt-1 pb-4 mb-3">
							<div class="col-lg-8">

								<h2 class="font-weight-bold mb-4">Send us a message</h2>
								<p class="pb-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam aliquam ultrices quis in purus. Donec volutpat et justo et viverra. Suspendisse id justo a ipsum viverra ultrices quis et quam.</p>

								<form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
									<div class="contact-form-success alert alert-success d-none mt-4">
										<strong>Success!</strong> Your message has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none mt-4">
										<strong>Error!</strong> There was an error sending your message.
										<span class="mail-error-message text-1 d-block"></span>
									</div>
									<div class="form-row">
										<div class="form-group col-lg-6">
											<label>Your name *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
										</div>
										<div class="form-group col-lg-6">
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
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="submit" value="Send Message" class="btn btn-primary custom-btn-style-1 text-uppercase float-right" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							

							</div>
							<div class="col-lg-4">

								<h4 class="text-primary mt-0 pt-0">Get in Touch</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

								<hr class="solid mt-4 mb-4">

								<h4 class="text-primary">The Office</h4>
								<ul class="list list-icons list-icons-style-3 mt-4">
									<li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
									<li><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
									<li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
								</ul>

								<hr class="solid mt-4 mb-4">

								<h4 class="text-primary">Business Hours</h4>
								<ul class="list list-icons list-dark mt-4">
									<li><i class="far fa-clock"></i> Monday - Friday - 9am to 5pm</li>
									<li><i class="far fa-clock"></i> Saturday - 9am to 2pm</li>
									<li><i class="far fa-clock"></i> Sunday - Closed</li>
								</ul>

							</div>

						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-14')

			<footer id="footer" class="bg-color-quaternary border-top-0 mt-0">
				<div class="container">
					<div class="row justify-content-between pt-5 pb-4">
						<div class="col-md-5 col-lg-3 mb-4 mb-lg-0">
							<h2 class="font-weight-semibold text-color-light text-6 mb-3">Contact Details</h2>
							<p>Porto Education 123 <br>Porto Blvd, Suite</p>
							<span class="d-block text-5 mb-2">
								Call: <a href="tel:+1234567890" class="text-3">123-456-7890</a>
							</span>
							<span class="d-block text-5 mb-4">
								Email: <a href="mailto:info@porto.com" class="text-3">info@porto.com</a>
							</span>
							<ul class="social-icons social-icons-transparent social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-md-7 col-lg-4 mb-4 mb-lg-0">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Courses</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="demo-education-courses-detail.html">Archaeology</a></li>
										<li><a href="demo-education-courses-detail.html">Architecture</a></li>
										<li><a href="demo-education-courses-detail.html">Art &amp; Design</a></li>
										<li><a href="demo-education-courses-detail.html">Aural &amp; Oral Sciences</a></li>
										<li><a href="demo-education-courses-detail.html">Biological Sciences</a></li>
										<li><a href="demo-education-courses-detail.html">Building</a></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="demo-education-courses-detail.html">Management Studies</a></li>
										<li><a href="demo-education-courses-detail.html">Celtic Studies</a></li>
										<li><a href="demo-education-courses-detail.html">Chemical Engineering</a></li>
										<li><a href="demo-education-courses-detail.html">Chemistry</a></li>
										<li><a href="demo-education-courses-detail.html">Civil Engineering</a></li>
										<li><a href="demo-education-courses-detail.html" class="text-color-primary">Much More</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Newsletter</h2>
									<div class="newsletter">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam.</p>
					
										<div class="alert alert-success d-none" id="newsletterSuccess">
											<strong>Success!</strong> You've been added to our email list.
										</div>
					
										<div class="alert alert-danger d-none" id="newsletterError"></div>
					
										<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
											<div class="input-group custom-input-group-style-1">
												<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
												<span class="input-group-append">
													<button class="btn btn-primary px-4" type="submit">Subscribe</button>
												</span>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>porto.partials
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-15', ['key' => 'footer-copyright.footer-copyright-15'])
			</footer>
		</div>
@endsection

@section('footer')
<footer id="footer" class="bg-color-quaternary border-top-0 mt-0">
				<div class="container">
					<div class="row justify-content-between pt-5 pb-4">
						<div class="col-md-5 col-lg-3 mb-4 mb-lg-0">
							<h2 class="font-weight-semibold text-color-light text-6 mb-3">Contact Details</h2>
							<p>Porto Education 123 <br>Porto Blvd, Suite</p>
							<span class="d-block text-5 mb-2">
								Call: <a href="tel:+1234567890" class="text-3">123-456-7890</a>
							</span>
							<span class="d-block text-5 mb-4">
								Email: <a href="mailto:info@porto.com" class="text-3">info@porto.com</a>
							</span>
							<ul class="social-icons social-icons-transparent social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-md-7 col-lg-4 mb-4 mb-lg-0">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Courses</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="demo-education-courses-detail.html">Archaeology</a></li>
										<li><a href="demo-education-courses-detail.html">Architecture</a></li>
										<li><a href="demo-education-courses-detail.html">Art &amp; Design</a></li>
										<li><a href="demo-education-courses-detail.html">Aural &amp; Oral Sciences</a></li>
										<li><a href="demo-education-courses-detail.html">Biological Sciences</a></li>
										<li><a href="demo-education-courses-detail.html">Building</a></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="demo-education-courses-detail.html">Management Studies</a></li>
										<li><a href="demo-education-courses-detail.html">Celtic Studies</a></li>
										<li><a href="demo-education-courses-detail.html">Chemical Engineering</a></li>
										<li><a href="demo-education-courses-detail.html">Chemistry</a></li>
										<li><a href="demo-education-courses-detail.html">Civil Engineering</a></li>
										<li><a href="demo-education-courses-detail.html" class="text-color-primary">Much More</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Newsletter</h2>
									<div class="newsletter">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam.</p>
					
										<div class="alert alert-success d-none" id="newsletterSuccess">
											<strong>Success!</strong> You've been added to our email list.
										</div>
					
										<div class="alert alert-danger d-none" id="newsletterError"></div>
					
										<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
											<div class="input-group custom-input-group-style-1">
												<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
												<span class="input-group-append">
													<button class="btn btn-primary px-4" type="submit">Subscribe</button>
												</span>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>porto.partials
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-15', ['key' => 'footer-copyright.footer-copyright-15'])
			</footer>
@endsection
