<footer id="footer" class="container-fluid border-top-0 mt-5">
				<div class="row">

					<div class="col-lg-6 p-0">
						<section class="section border-top-0 bg-color-dark h-100 m-0">
							<div class="row justify-content-end m-0">
								<div class="col-half-section col-half-section-right pl-4 py-4">
									<p class="text-2 font-weight-semibold mb-0 pb-0">LET'S TALK ABOUT YOUR PROJECT</p>
									<h2 class="text-6 line-height-4 text-lg-8 line-height-lg-1 font-weight-semibold text-color-light mb-3">Send us a Message</h2>
									<form class="contact-form" action="php/contact-form.php" method="POST">
										<input type="hidden" value="Contact Form" name="subject" id="subject">
										<div class="form-group col-lg-12 ml-auto">
											<div class="contact-form-success alert alert-success d-none">
												Message has been sent to us.
											</div>

											<div class="contact-form-error alert alert-danger d-none">
												Error sending your message.
												<span class="mail-error-message text-1 d-block"></span>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-lg-6 pr-lg-2">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" placeholder="Your Name..." name="name" id="name" required>
											</div>
											<div class="form-group col-lg-6 pl-lg-2">
												<input type="text" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control text-3 h-auto py-2" placeholder="Your Phone..." name="phone" id="phone" required>
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
												<input type="submit" value="SUBMIT" class="btn btn-xl btn-outline btn-primary text-2 font-weight-bold text-uppercase" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</section>
					</div>

					<div class="col-lg-6 p-0">
						<section class="section border-top-0 bg-color-primary h-100 m-0">
							<div class="row m-0">
								<div class="col-half-section py-4 pr-5">
									<p class="text-2 font-weight-semibold mb-0 pb-0 text-color-light opacity-6">TALK TO A SPECIALIST</p>
									<h2 class="text-6 line-height-4 text-lg-8 line-height-lg-1 font-weight-semibold text-color-light mb-3">Let's talk business</h2>
									<p class="text-color-light opacity-6">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor.</p>

									<p class="text-2 font-weight-semibold mb-0 pb-0 text-color-light opacity-6 text-uppercase">Call Us Now</p>
									<a href="#" class="text-5 line-height-4 line-height-lg-1 font-weight-semibold text-color-light mb-3">800 123 4567</a>

									<p class="text-2 font-weight-semibold mb-0 pb-0 mt-4 text-color-light opacity-6 text-uppercase">Send us an Email</p>
									<a href="#" class="text-5 line-height-4 line-height-lg-1 font-weight-semibold text-color-light mb-3">you@domain.com</a>

									<p class="text-1 text-color-light opacity-6 pt-4 mt-2">© Copyright 2021. All Rights Reserved.</p>
								</div>
							</div>
						</section>
					</div>

				</div>
			</footer>