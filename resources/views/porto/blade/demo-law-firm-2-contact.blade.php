@extends('porto.app')
@section('header')
@include('porto.partials.header.header-137')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-168')

				<section class="section border-0 py-0 m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="row py-5 my-5">
									<div class="col-md-6">
										<h2 class="font-weight-bold text-color-dark text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Get In Touch</h2>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
											<h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Work Inquiries</h3>
											<a href="tel:+1234567890" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">(800) 123-4567</a>
										</div>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
											<h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Careers &amp; Press</h3>
											<a href="tel:+1234567890" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">(800) 123-4567</a>										
										</div>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
											<h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Assistance Hours</h3>
											<p>Mon - Sat 9:00am - 8:00pm<br> Sunday - CLOSED</p>
										</div>
									</div>
									<div class="col-md-6">
										<h2 class="font-weight-bold text-color-dark text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Address and Mail</h2>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
											<h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Address</h3>
											<p>12345 Porto Blvd. <br>Suite 1500 <br>Los Angeles, California 90000</p>
										</div>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
											<h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Email</h3>
											<a href="mailto:mail@example.com" class="text-color-default text-color-hover-primary text-decoration-underline mb-4">mail@example.com</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 fluid-col-lg-5 p-0">
								<div class="fluid-col h-100">

									<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
									@include('porto.partials.google-map.google-map-10')

								</div>
							</div>
						</div>
					</div>
				</section>
				
				<div class="container py-5 my-5">
					<div class="row align-items-center">
						<div class="col-lg-6 mb-5 mb-lg-0">
							<div class="card bg-primary border-0 border-radius-0">
								<div class="card-body p-5">
									<h3 class="d-block alternative-font-4 text-color-light font-weight-medium opacity-8 text-4 mb-0">ANY QUESTIONS?</h3>
									<h2 class="text-color-light font-weight-bold text-9 pb-2 mb-4">Frequent Asked Questions</h2>

									<div class="custom-seemore-overlay mb-4" style="max-height: 400px;">
										<div class="custom-accordion-style-1 accordion accordion-modern" id="FAQAccordion">
											<div class="card card-default">
												<div class="card-header">
													<h4 class="card-title m-0">
														<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQOne">
															1- Why choose Porto Law?
														</a>
													</h4>
												</div>
												<div id="collapseFAQOne" class="collapse" data-parent="#FAQAccordion">
													<div class="card-body pl-4 pt-2">
														<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
													</div>
												</div>
											</div>
											<div class="card card-default">
												<div class="card-header">
													<h4 class="card-title m-0">
														<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQTwo">
															2- Why do I need an attorney?
														</a>
													</h4>
												</div>
												<div id="collapseFAQTwo" class="collapse" data-parent="#FAQAccordion">
													<div class="card-body pl-4 pt-2">
														<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
													</div>
												</div>
											</div>
											<div class="card card-default">
												<div class="card-header">
													<h4 class="card-title m-0">
														<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQFour">
															3- Cras a elit sit amet leo accumsan volutpa?
														</a>
													</h4>
												</div>
												<div id="collapseFAQFour" class="collapse" data-parent="#FAQAccordion">
													<div class="card-body pl-4 pt-2">
														<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
													</div>
												</div>
											</div>
											<div class="card card-default">
												<div class="card-header">
													<h4 class="card-title m-0">
														<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQFive">
															4- Integer aliquet ullamcorper dolor?
														</a>
													</h4>
												</div>
												<div id="collapseFAQFive" class="collapse" data-parent="#FAQAccordion">
													<div class="card-body pl-4 pt-2">
														<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
													</div>
												</div>
											</div>
											<div class="card card-default">
												<div class="card-header">
													<h4 class="card-title m-0">
														<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQSix">
															5- Efficitur felis ultrices non?
														</a>
													</h4>
												</div>
												<div id="collapseFAQSix" class="collapse" data-parent="#FAQAccordion">
													<div class="card-body pl-4 pt-2">
														<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
													</div>
												</div>
											</div>
											<div class="card card-default">
												<div class="card-header">
													<h4 class="card-title m-0">
														<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQSeven">
															6- Efficitur sit a met non?
														</a>
													</h4>
												</div>
												<div id="collapseFAQSeven" class="collapse" data-parent="#FAQAccordion">
													<div class="card-body pl-4 pt-2">
														<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
													</div>
												</div>
											</div>
											<div class="card card-default">
												<div class="card-header">
													<h4 class="card-title m-0">
														<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQEight">
															7- Efficitur felis ultrices non dolor sit?
														</a>
													</h4>
												</div>
												<div id="collapseFAQEight" class="collapse" data-parent="#FAQAccordion">
													<div class="card-body pl-4 pt-2">
														<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="custom-seemore-overlay-button text-color-light text-5"><i class="fas fa-chevron-down position-relative z-index-1"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div id="requestConsultation" class="col-lg-6 col-xl-5 offset-xl-1">
							<h3 class="d-block alternative-font-4 text-color-primary font-weight-medium text-4 text-lg-right mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">LET'S TALK</h3>
							<h2 class="text-color-dark font-weight-bold text-9 text-lg-right pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Request Consultation</h2>

							<form class="contact-form custom-form-style-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" action="php/contact-form.php" method="POST">
                                <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your request has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your request.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col mb-3">
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-radius-0" name="name" id="name" required placeholder="Name *">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col mb-3">
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-radius-0" name="email" id="email" required placeholder="E-mail *">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col mb-3">
                                        <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-radius-0" name="phone" id="phone" required placeholder="Phone *">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col mb-4">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="9" class="form-control border-radius-0" name="message" id="message" required placeholder="Message *"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col text-lg-right mb-0">
                                        <button type="submit" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350" data-loading-text="Loading...">REQUEST CONSULTATION</button>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-0 pt-4 mt-0">
				<div class="container py-5">
					<div class="row py-4">
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">About Us</h5>
							<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
							<a href="demo-law-firm-2.html" class="text-decoration-none">
								<img src="img/demos/law-firm-2/logo-light.png" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Useful Links</h5>
							<ul class="list list-unstyled text-3-5 mb-0">
								<li class="mb-2"><a href="#">Features</a></li>
								<li class="mb-2"><a href="#">Pages</a></li>
								<li class="mb-2"><a href="#">Portfolio</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-about.html">About Us</a></li>
								<li class="mb-0"><a href="demo-law-firm-2-contact.html">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Practice Areas</h5>
							<ul class="list list-unstyled text-3-5 mb-0">
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Family Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Capital Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Business Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Accident &amp; Injury Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Health Law</a></li>
							</ul>
							<a href="demo-law-firm-2-practice-areas.html" class="d-inline-flex custom-read-more-link justify-content-center align-items-center font-weight-medium text-color-primary svg-fill-color-primary svg-stroke-color-primary">
								VIEW ALL
								<svg class="ml-2" version="1.1" viewbox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
								</svg>
							</a>
						</div>
						<div class="col-lg-3">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Contact Us</h5>
							<ul class="list list-unstyled mb-4">
								<li>
									<i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 mr-2"></i>
									<a href="tel:0123456789" class="text-color-light font-weight-bold text-decoration-none text-5">(800) 123-4657</a>
								</li>
								<li class="mb-3">
									<i class="icons icon-envelope text-color-primary text-6 position-relative top-6 mr-2"></i>
									<a href="mailto:porto@consulting.com" class="text-color-light text-decoration-none text-4">porto@consulting.com</a>
								</li>
								<li class="text-color-light text-4">
									<i class="icons icon-calendar text-color-primary text-5 position-relative top-3 mr-2"></i>
									Mon - Fri 9am - 6pm
								</li>
							</ul>
							<ul class="custom-social-icons-style-1 social-icons social-icons-clean">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-4">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-22', ['key' => 'footer-copyright.footer-copyright-22'])
			</footer>
@endsection
