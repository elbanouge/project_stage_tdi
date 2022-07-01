<footer id="footer" class="mt-0 py-5">
				<div class="container py-5">
					<div class="row justify-content-between">
						<div class="col-sm-12 col-lg-6 col-xl-6">
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
								<h4 class="custom-font-primary custom-newsletter-title font-weight-bold mb-4 custom-text-7">Join for Company Updates</h4>
								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
								<div class="alert alert-danger d-none" id="newsletterError"></div>
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mr-0 mb-3 mb-md-0 opacity-10">
									<div class="input-group custom-newsletter">
										<input class="form-control form-control-sm custom-newsletter-input rounded-0 bg-transparent border-0 pl-0 custom-text-2 text-color-light box-shadow-none" placeholder="Your E-mail Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-append">
											<button class="btn text-color-light custom-text-4 font-weight-semibold custom-btn-with-arrow custom-btn-with-arrow-light" type="submit">Sign Up</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6 col-xl-4 col-info-footer mt-4 mt-sm-5 mt-lg-0">
							<div class="row">
								<div class="col-md-6">
									<span class="d-block text-left text-lg-right text-color-light font-weight-semibold text-5 pb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Los Angeles</span>
									<p class="mb-0 text-left text-lg-right text-4 font-weight-medium appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="150">123 The Main Street</p>
									<p class="mb-0 text-left text-lg-right text-4 font-weight-medium appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Los Angeles, CA 1000</p>
									<p class="mb-0 text-left text-lg-right text-4 font-weight-medium appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"><a href="tel:+1234567890" class="text-color-default">(123) 456-7890</a></p>
								</div>
								<div class="col-md-6 mt-3 mt-md-0">
									<span class="d-block text-left text-lg-right text-color-light font-weight-semibold text-5 pb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">New York</span>
									<p class="mb-0 text-left text-lg-right text-4 font-weight-medium appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="150">123 The Main Street</p>
									<p class="mb-0 text-left text-lg-right text-4 font-weight-medium appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">New York, NY 1000</p>
									<p class="mb-0 text-left text-lg-right text-4 font-weight-medium appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"><a href="tel:+1234567890" class="text-color-default">(123) 456-7890</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-between">
						<div class="col-sm-12 col-lg-7 col-xl-6 d-none d-sm-flex">
							<div class="nav-footer w-100 pt-5 mt-0 mt-lg-4">
								<div class="row justify-content-between">
									<div class="col-auto mr-auto">
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
											<div class="footer-nav footer-nav-links">
												<nav>
													<ul class="nav" id="footerNav">
														<li>
															<a class="text-color-hover-primary font-weight-semibold custom-text-2 text-capitalize" href="demo-digital-agency-2-our-services.html">Our Services</a>
														</li>
														<li>
															<a class="text-color-hover-primary font-weight-semibold custom-text-2 text-capitalize" href="demo-digital-agency-2-our-work.html">Our Work</a>
														</li>
														<li>
															<a class="text-color-hover-primary font-weight-semibold custom-text-2 text-capitalize" href="demo-digital-agency-2-contact-us.html">Contact Us</a>
														</li>
													</ul>
												</nav>
											</div>			porto.partials
										</div>							
									</div>
									<div class="col-auto">
										<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
											@include('porto.partials.header-social-icons.header-social-icons-8')
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-5 col-xl-6">
							<div class="d-flex justify-content-end custom-footer-copywriting pt-5 mt-0 mt-lg-4">
								<p class="mb-0 text-left text-lg-right d-block w-100 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">Porto Digital Agency. ©  2021.  All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</footer>