<footer id="footer" class="bg-secondary border-0 mt-0">
				<div class="container-fluid py-4 px-5">
					<div class="row justify-content-center justify-content-md-between align-items-center py-5">
						<div class="col-auto mb-4 mb-md-0">
							<a href="demo-band.html">
								<img src="img/demos/band/logo.png" class="img-fluid" alt="" width="112" height="30">
							</a>
						</div>
						<div class="col-auto">
							<ul class="list list-inline list-unstyled text-center text-md-left mb-0">
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#home" class="text-color-light font-weight-bold">HOME</a></li>
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#tour" class="text-color-light font-weight-bold">TOUR</a></li>
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#about" class="text-color-light font-weight-bold">ABOUT</a></li>
								<li class="list-inline-item px-2 mx-3 mb-0"><a data-hash data-hash-offset="70" href="#news" class="text-color-light font-weight-bold">NEWS</a></li>
								<li class="list-inline-item pl-2 ml-3 mb-0"><a href="#hiddenContactForm" data-toggle="collapse" aria-controls="hiddenContactForm" onclick="scrollAndFocus(this, '#contact', '#name', 70, true);" class="text-color-light font-weight-bold">CONTACT</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="contact" class="footer-contact-form">
					<div id="hiddenContactForm" class="collapse">
						<div class="container container-lg-custom">
							<div class="row my-5">
								<div class="col text-center">
									<svg class="mb-4" width="20" height="72" viewbox="0 0 10 40">
										<line x1="5" x2="5" y1="0" y2="40" stroke="#909294" stroke-width="1" class="appear-animation" data-appear-animation="customSVGLineAnim"></line>
									</svg>
									<div class="overflow-hidden">
										<span class="d-block text-color-light font-weight-bold d-block appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">GET IN TOUCH</span>
									</div>
									<div class="overflow-hidden mb-3">
										<h2 class="font-weight-bold text-9 pb-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Contact Us</h2>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="font-weight-bold text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col">
									<form class="contact-form form-style-4 form-errors-light appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block"></span>
										</div>
										
										<div class="form-row">
											<div class="form-group col-md-4">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name" required>
											</div>
											<div class="form-group col-md-4">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="E-mail" required>
											</div>
											<div class="form-group col-md-4">
												<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" placeholder="Subject" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-6', ['key' =&gt; 'footer-copyright.footer-copyright-6'])
			</footer>