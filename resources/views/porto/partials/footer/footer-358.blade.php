<footer id="footer">
				<div class="container">
					<div class="row justify-content-center py-5">
						<div class="col-lg-5 text-center pt-5">
							<p class="text-2 font-weight-semibold mb-0 pb-0">LET'S TALK ABOUT YOUR PROJECT</p>
							<h2 class="text-8 line-height-4 text-lg-10 line-height-lg-1 font-weight-semibold">Send us a Message</h2>
							<p class="text-4 font-weight-normal px-3 mb-3">Enter your personal info below and let's start talking about your new websit or customized project.</p>
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
										<input type="submit" value="SUBMIT" class="btn btn-primary font-weight-semi-bold mb-lg-5 px-5 py-3" data-loading-text="Loading...">
									</div>
								</div>
							</form>porto.partials
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-49', ['key' =&gt; 'footer-copyright.footer-copyright-49'])
			</footer>