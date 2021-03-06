<footer id="footer" class="bg-color-light border-0 pt-5 mt-0">
				<div class="container pb-5 mb-5">
					<div class="row justify-content-center">
						<div class="col-md-9 col-lg-6">
							<h2 class="font-weight-normal text-color-dark text-center text-8 mb-4"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
							<p class="text-4 opacity-8 text-center mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum</p>
							<form class="contact-form form-style-3" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none">
									Message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none">
									Error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								
								<input type="hidden" value="Contact Form" name="subject" id="subject">
								<div class="form-row">
									<div class="form-group col-md-6 pr-md-2">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control h-auto py-2" placeholder="Your Name..." name="name" id="name" required>
									</div>
									<div class="form-group col-md-6 pl-md-2">
										<input type="text" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control h-auto py-2" placeholder="Your Phone..." name="phone" id="phone" required>
									</div>
								</div>
								<div class="form-group">
									<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control h-auto py-2" placeholder="Your Email Address..." name="email" id="email" required>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" placeholder="Your Message..." name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col text-center">
										<input type="submit" value="SUBMIT" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>porto.partials
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-68', ['key' =&gt; 'footer-copyright.footer-copyright-68'])
			</footer>