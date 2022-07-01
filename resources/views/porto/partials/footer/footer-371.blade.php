<footer id="footer" class="border-0" style="background: url('img/parallax/parallax-9.jpg'); background-size:cover; background-position: 0 0;">
				<div class="container py-4">
					<div class="row justify-content-md-center py-5">
						<div class="col-lg-7 mb-5 mb-lg-0">
							<h2 class="text-6 font-weight-bold mb-1">Contact Us</h2>
							<p class="pr-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
							<div class="row mt-3 mt-lg-5">
								<div class="col-md-6 mb-4 mb-md-0">
									<h4 class="mb-2">Call Us</h4>
									<p class="mb-0 font-weight-semibold">PHONE</p>
									<a href="tel:+8001234567" class="text-color-primary text-5 p-relative bottom-3" target="_blank" title="Call Us">(800) 123 4567</a>
								</div>
								<div class="col-md-6">
									<h4 class="mb-2">Our Location</h4>
									<p>Porto Business Consulting 123 Porto Blvd<br>Suite 100 New York, NY</p>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-6 mb-4 mb-md-0">
									<h4 class="mb-2">Mail Us</h4>
									<p class="mb-0 font-weight-semibold">EMAIL</p>
									<a href="mail:porto@domain.com" class="text-color-primary text-5 p-relative bottom-3" target="_blank" title="Mail Us">porto@domain.com</a>
								</div>
								<div class="col-md-6">
									<h4 class="mb-2">Social Media</h4>
									<ul class="footer-social-icons social-icons mt-3">
										<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
										<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
										<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<h2 class="text-6 font-weight-bold mb-1">Send Us a Message</h2>
							<p class="pr-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus.</p>
							<form class="contact-form" action="php/contact-form.php" method="POST">
								<input type="hidden" value="Contact Form" name="subject" id="subject">
								<div class="form-group col-lg-12 ml-auto my-0">
									<div class="contact-form-success alert alert-success d-none">
										Message has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none">
										Error sending your message.
										<span class="mail-error-message text-1 d-block"></span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" placeholder="Your Name..." name="name" id="name" required>
									</div>
								</div>
								<div class="form-group">
									<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" placeholder="Your Email Address..." name="email" id="email" required>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control text-3 h-auto py-2" placeholder="Your Message..." name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="SUBMIT" class="btn btn-primary font-weight-semi-bold px-5 py-3 text-3" data-loading-text="Loading...">
									</div>
								</div>
							</form>porto.partials
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-59', ['key' =&gt; 'footer-copyright.footer-copyright-59'])
			</footer>