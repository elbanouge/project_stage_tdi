<footer id="footer" class="mt-0">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-7 col-lg-4 mb-5 mb-lg-0 pt-3">
							<h5 class="text-3 mb-3">ABOUT US</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna semper scelerisque.</p>
							<p class="mb-0">Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis ptent taciti sociosqu ad litora...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-5 col-lg-3 mb-5 mb-lg-0 pt-3">
							<h5 class="text-3 mb-3 pb-1">CONTACT US</h5>
							<p class="text-8 text-color-light font-weight-bold">(800) 123-4567</p>
							<p class="mb-2">International: (333) 456-6670</p>
							<p class="mb-2">Fax: (222) 531-8999</p>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>
							<ul class="social-icons mt-4">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-5 pt-3">
							<h5 class="text-3 mb-3 pb-1">SEND US A MESSAGE</h5>
							<form class="contact-form" action="php/contact-form.php" method="POST">
								<input type="hidden" value="Contact Form" name="subject" id="subject">
								<div class="contact-form-success alert alert-success d-none">
									Message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none">
									Error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
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
										<input type="submit" value="SUBMIT" class="btn btn-xl btn-outline btn-primary text-1 font-weight-bold text-uppercase" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>porto.partials
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-1', ['key' =&gt; 'footer-copyright.footer-copyright-1'])
			</footer>