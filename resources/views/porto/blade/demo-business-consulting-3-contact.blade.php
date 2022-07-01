@extends('porto.app')
@section('header')
@include('porto.partials.header.header-35')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-80')

				<section class="section section-height-3 bg-light border-0 pt-4 m-0 lazyload" data-bg-src="img/demos/business-consulting-3/backgrounds/background-6.jpg" style="background-size: 100%; background-repeat: no-repeat;">
					<div class="container py-4">
						<div class="row box-shadow-4 mx-3 mx-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
							<div class="col-lg-6 px-0">
								<div class="bg-light h-100">
									<div class="d-flex flex-column justify-content-center p-5 h-100 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
										<div class="pb-5 mb-4 mt-5 mt-lg-0">
											<div class="d-flex flex-column flex-md-row align-items-center justify-content-center pr-lg-4">
												<img width="105" src="img/demos/business-consulting-3/icons/map-pin.svg" alt="Location" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mb-4 mb-md-0'}" style="width: 105px;">
												<div class="text-center text-md-left pl-md-3">
													<h2 class="font-weight-semibold text-6 mb-1">Porto Business</h2>
													<p class="text-3-5 mb-0">12345 Porto Blvd,<br>Suite 1500<br>Los Angeles, California 9000</p>
												</div>
											</div>
										</div>
										<div class="row justify-content-center mb-5 mb-lg-0">
											<div class="col-auto text-center ml-xl-auto mb-4 mb-xl-0">
												<h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">SUPPORT</h3>
												<div class="d-flex">
													<img width="25" src="img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}">
													<a href="tel:8001234567" class="text-color-dark text-color-hover-primary font-weight-semibold text-decoration-none text-6 ml-2">800-123-4567</a>
												</div>
											</div>
											<div class="col-auto text-center mr-xl-auto">
												<h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">SALES</h3>
												<div class="d-flex">
													<img width="25" src="img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}">
													<a href="tel:8001234567" class="text-color-dark text-color-hover-primary font-weight-semibold text-decoration-none text-6 ml-2">800-123-4567</a>
												</div>
											</div>
											<div class="col-auto text-center pt-4 mt-5">
												<h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">SEND AN EMAIL</h3>
												<div class="d-flex">
													<img width="25" src="img/demos/business-consulting-3/icons/email.svg" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}">
													<a href="mailto:contact@portotheme.com" class="text-color-dark text-color-hover-primary text-decoration-underline font-weight-semibold text-5-5 wb-all ml-2">contact@portotheme.com</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 px-0">
								<div class="bg-dark h-100">
									<div class="text-center text-md-left p-5 h-100 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
										<h2 class="text-color-light font-weight-medium mb-4 mt-5 mt-lg-0">Send Us a Message and Learn More About Our Services</h2>
										<p class="text-3-5 font-weight-medium mb-4">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. </p>
										<form class="contact-form form-style-4 form-placeholders-light form-errors-light mb-5 mb-lg-0" action="php/contact-form.php" method="POST">
											<div class="contact-form-success alert alert-success d-none mt-4">
												<strong>Success!</strong> Your message has been sent to us.
											</div>

											<div class="contact-form-error alert alert-danger d-none mt-4">
												<strong>Error!</strong> There was an error sending your message.
												<span class="mail-error-message text-1 d-block"></span>
											</div>
											
											<div class="form-row">
												<div class="form-group col">
													<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="name" placeholder="* Full Name" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="email" placeholder="* Email Address" required>
												</div>
											</div>
											<div class="form-row mb-4">
												<div class="form-group col">
													<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="message" placeholder="* Message" required></textarea>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<button type="submit" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-loading-text="Loading..." data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
														<span>Send Message</span>
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-6')

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0 m-0 lazyload" data-bg-src="img/demos/business-consulting-3/backgrounds/background-4.jpg" style="background-size: cover; background-position: center; background-repeat: no-repeat;">
				<div class="container pt-3">
					<div class="row justify-content-between align-items-center py-5 mb-3">
						<div class="col-auto mb-4 mb-lg-0">
							<h2 class="font-weight-semibold text-color-light text-10 ls-0 mb-0">Porto Business Consulting Group</h2>
						</div>
						<div class="col-auto">
							<a href="demo-business-consulting-3-contact.html" class="btn btn-primary custom-btn-style-1 font-weight-medium btn-px-4 btn-py-2 text-4" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
								<span class="text-color-light">Contact Us</span>
							</a>
						</div>
					</div>
					<hr class="bg-color-light opacity-1 my-0">
					<div class="row pt-3 mt-5">
						<div class="col-lg-3 mb-4 mb-lg-0">
							<a href="demo-business-consulting-3.html" class="text-decoration-none">
								<img src="img/demos/business-consulting-3/logo-footer.png" class="img-fluid mb-4" width="123" height="33" alt="">
							</a>
							<p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur fel. </p>
							<ul class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter mx-2"><a href="http://www.twitter.com/" target="_blank" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin" data-cursor-effect-hover="fit"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<ul class="list list-icons list-icons-lg">
								<li class="d-flex px-0 mb-1">
									<img width="25" src="img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}">
									<a href="tel:8001234567" class="text-color-light font-weight-semibold text-3-4 ml-2">(800) 123-4567</a>
								</li>
								<li class="d-flex px-0 my-3">
									<img width="25" src="img/demos/business-consulting-3/icons/email.svg" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}">
									<a href="mailto:porto@consulting.com" class="text-color-light font-weight-semibold text-3-4 ml-2">porto@consulting.com</a>
								</li>
								<li class="d-flex font-weight-semibold text-color-light px-0 mb-1">
									<img width="25" src="img/demos/business-consulting-3/icons/map-pin.svg" alt="Location" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light mr-2'}">
									1234 Street Name, New York, NY 10000, USA
								</li>
							</ul>
						</div>
						<div class="col-lg-4 mb-4 mb-lg-0">
							<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
							@include('porto.partials.google-map.google-map-7')
						</div>
						<div class="col-lg-2">
							<h4 class="font-weight-bold text-5">Useful Links</h4>
							<ul class="list list-icons list-icons-sm">
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="demo-business-consulting-3-contact.html" class="link-hover-style-1 ml-1"> Contact Us</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="demo-business-consulting-3-services.html" class="link-hover-style-1 ml-1"> Our Services</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> Payment Methods</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> Services Guide</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> FAQs</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-9', ['key' => 'footer-copyright.footer-copyright-9'])
			</footer>
@endsection
