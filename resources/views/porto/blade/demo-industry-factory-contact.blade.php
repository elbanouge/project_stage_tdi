@extends('porto.app')
@section('header')
@include('porto.partials.header.header-117')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-148')

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-19')

				<div class="container py-5 my-4">
					<div class="row">
						<div class="col-lg-6 mb-5 mb-lg-0">
							<h2 class="font-weight-bold text-transform-none text-8 pb-2 mb-4">Contact Us</h2>
							<div class="row">
								<div class="col">
									@include('porto.partials.feature-box.feature-box-69')
								</div>
							</div>
							<div class="row py-3 my-4">
								<div class="col">
									@include('porto.partials.feature-box.feature-box-70')
								</div>
							</div>
							<div class="row">
								<div class="col">
									@include('porto.partials.feature-box.feature-box-71')
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h2 class="font-weight-bold text-transform-none text-8 pb-2 mb-4">Send Us a Message</h2>
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
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Your Name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email Address" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" placeholder="Your Message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<button type="submit" class="btn custom-svg-btn-style-1 custom-svg-btn-style-1-solid text-color-light text-uppercase" data-loading-text="Loading...">
											<svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 210 70" preserveaspectratio="none">
												<polygon fill="none" stroke="#D4D4D4" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 "></polygon>
											</svg>
											Send Message
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="section section-with-shape-divider border-0 custom-bg-lighten-grey-1 pt-5 pb-0 m-0">
				<div class="shape-divider shape-divider-reverse-x" style="height: 120px;">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 2000 120" preserveaspectratio="xMinYMin">
						<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 "></polygon>
					</svg>
				</div>
				<div class="container pt-lg-5 mt-5">
					<div class="row">
						<div class="col-lg-3 mb-5 mb-lg-0">
							<a href="demo-industry-factory.html">
								<img src="img/demos/industry-factory/logo-light.png" class="img-fluid mt-5 mb-4" alt="Demo Industry &amp; Factory">
							</a>
							<p class="mb-0"><strong class="text-color-light">Porto Industrial, Factory, Manufacturing</strong></p>
							<p>Advanced Template LTD.</p>
							<ul class="social-icons social-icons-medium">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter mx-2"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-4 offset-lg-1 mb-5 mb-lg-0">
							<h4 class="text-color-light font-weght-bold positive-ls-2 custom-font-size-2">USEFUL LINKS</h4>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li class="mb-0"><a href="#">Contact Us</a></li>
										<li class="mb-0"><a href="#">Our Services</a></li>
										<li class="mb-0"><a href="#">Payment Methods</a></li>
										<li class="mb-0"><a href="#">Services Guide</a></li>
										<li class="mb-0"><a href="#">FAQs</a></li>
										<li class="mb-0"><a href="#">Service Support</a></li>
										<li class="mb-0"><a href="#">Privacy</a></li>
										<li class="mb-0"><a href="#">About Porto</a></li>
										<li class="mb-0"><a href="#">Our Guarantees</a></li>
										<li class="mb-0"><a href="#">Terms And Conditions</a></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li class="mb-0"><a href="#">Privacy Policy</a></li>
										<li class="mb-0"><a href="#">Return Policy</a></li>
										<li class="mb-0"><a href="#">Intellectual Property Claims</a></li>
										<li class="mb-0"><a href="#">Sitemap</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 offset-lg-1 mb-5 mb-lg-0">
							<h4 class="text-color-light font-weght-bold positive-ls-2 custom-font-size-2">OPENING HOURS</h4>
							<ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
								<li><a href="#">Mon - Fri: 8:30 am to 5:00 pm</a></li>
								<li><a href="#">Saturday: 9:30 am to 1:00 pm</a></li>
								<li><a href="#">Sunday: Closed</a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-18', ['key' => 'footer-copyright.footer-copyright-18'])
			</footer>
@endsection
