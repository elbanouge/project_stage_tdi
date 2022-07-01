<footer id="footer" class="border-0 bg-dark mt-0">
				<div class="container-fluid px-0">
					<div class="row">
						<div class="col-lg-4 px-0">
							@include('porto.partials.google-map.google-map-4')
						</div>
						<div class="col-m-6 col-lg-4 px-0">
							<div class="card bg-secondary border-0 h-100">
								<div class="card-body text-center p-5 my-3">
									<img src="img/demos/barber/bar-sm.png" class="img-fluid position-relative bottom-2 d-none d-xl-inline-block" alt="">
									<span class="text-color-light font-weight-semibold text-4 mx-2">PORTO'S AMAZING</span>
									<img src="img/demos/barber/bar-sm.png" class="img-fluid position-relative bottom-2 d-none d-xl-inline-block" alt="">
									
									<h2 class="font-weight-semibold text-color-light line-height-1 custom-fs-2 ls-0 mb-3">BARBER SHOP</h2>
									<div class="bg-primary d-inline-flex custom-side-dots custom-side-dots-outside py-2 px-4">
										<span class="text-color-light">LOS ANGELES / CA</span>
										<span class="vertical-divider mx-3 border-color-light opacity-3 my-1"></span>
										<span class="text-color-light">EST 1999</span>
									</div>
									<hr class="bg-primary mt-5 mb-4">
									<ul class="list list-unstyled text-color-light font-weight-semibold custom-fs-1 py-2 m-0">
										<li>123, Porto Blvd</li>
										<li>Los Angeles, CA</li>
										<li class="mb-0"><a href="mailto:mail@domain.com" class="text-color-light">info@porto.com</a></li>
									</ul>
									<hr class="bg-primary mt-4 mb-4">
									<h3 class="text-color-dark font-weight-bold custom-tertiary-font text-5 mb-3">RESERVATION? CALL US</h3>
									<a href="tel:+0123456789" class="text-color-light custom-primary-font font-weight-bold text-12">123-456-7890</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 px-0 d-flex align-items-center">
							<div class="w-100 p-5 mx-3 my-5">
								<h3 class="text-color-primary font-weight-bold negative-ls-05 custom-side-dots custom-side-dots-rm-right text-8 mb-3">CONTACT US</h3>
								<p class="font-weight-semibold text-3 pb-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
								<form class="contact-form form-style-4 form-errors-light custom-form-style-1" action="php/contact-form.php" method="POST">
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
										<div class="form-group col-lg-6">
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control py-2" placeholder="Name" name="name" id="name" required>
										</div>
										<div class="form-group col-lg-6">
											<input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control py-2" placeholder="Phone" name="phone" id="phone" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control py-2" placeholder="E-mail" name="email" id="email" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" placeholder="Message" name="message" id="message" required></textarea>
										</div>
									</div>
									<input type="submit" value="SEND" class="custom-btn-style-1 btn btn-dark font-weight-bold text-uppercase btn-px-5 py-3" data-loading-text="Loading...">
								</form>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-7', ['key' =&gt; 'footer-copyright.footer-copyright-7'])
			</footer>