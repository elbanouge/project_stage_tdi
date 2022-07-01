@extends('porto.app')
@section('header')
@include('porto.partials.header.header-130')
@endsection

@section('main')
<div role="main" class="main">

                @include('porto.partials.page-header.page-header-160')

                <section class="section border-0 py-0 m-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-5 px-0">
                                <div class="d-flex flex-column justify-content-center bg-color-dark h-100 p-5">
                                    <div class="row justify-content-center pt-2 mt-5">
                                        <div class="col-md-9">
                                            @include('porto.partials.feature-box.feature-box-82')
                                        </div>
                                        <div class="col-md-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                                            <hr class="bg-color-light opacity-2">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center py-2">
                                        <div class="col-auto text-center mb-4 mb-sm-0 mb-lg-4 mb-xl-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
                                            <span class="d-block font-weight-semibold text-center">SUPPORT</span>
                                            <a href="tel:+1234567890" class="text-color-light font-weight-bold text-6">800-123-4567</a>
                                        </div>
                                        <div class="col-auto text-center ml-xl-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200">
                                            <span class="d-block font-weight-semibold text-center">SALES</span>
                                            <a href="tel:+1234567890" class="text-color-light font-weight-bold text-6">800-123-4567</a>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center pt-2 pb-3 mb-5">
                                        <div class="col-md-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                                            <hr class="bg-color-light opacity-2">
                                        </div>
                                        <div class="col-md-12 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                                            <span class="d-block font-weight-semibold text-center">SEND AN EMAIL</span>
                                            <a href="mailto:mail@domain.com" class="text-color-light font-weight-bold text-decoration-underline text-5">mail@domain.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 px-0">
                                
                                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                                @include('porto.partials.google-map.google-map-21')

                            </div>
                        </div>
                    </div>
                </section>

                <section class="section custom-section-full-width bg-color-transparent border-0 mt-1 mb-1" style="background-image: url(img/demos/it-services/backgrounds/dots-background-4.png); background-repeat: no-repeat; background-position: top right;">
                    <div class="container container-lg-custom mt-3">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="overflow-hidden mb-2">
                                    <span class="d-block font-weight-bold custom-text-color-grey-1 text-center line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">GET IN TOUCH</span>
                                </div>
                                <div class="overflow-hidden mb-4">
                                    <h2 class="text-color-dark font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">How Can We Help?</h2>
                                </div>
                                <p class="custom-text-size-1 text-center mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Contact us to request a quote or to schedule a consultation with our team.</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                                <form class="contact-form" action="php/contact-form.php" method="POST">
                                    <div class="contact-form-success alert alert-success d-none mt-4">
                                        <strong>Success!</strong> Your message has been sent to us.
                                    </div>

                                    <div class="contact-form-error alert alert-danger d-none mt-4">
                                        <strong>Error!</strong> There was an error sending your message.
                                        <span class="mail-error-message text-1 d-block"></span>
                                    </div>
                                    
                                    <div class="form-row row-gutter-sm">
                                        <div class="form-group col-lg-6 mb-4">
                                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="name" id="name" required placeholder="Your Name">
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="phone" id="phone" required placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="form-row row-gutter-sm">
                                        <div class="form-group col-lg-6 mb-4">
                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="email" id="email" required placeholder="Your Name">
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="subject" id="subject" required placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col mb-4">
                                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="message" id="message" required placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col mb-0">
                                            <button type="submit" class="btn btn-secondary btn-outline text-color-dark font-weight-semibold border-width-4 custom-link-effect-1 text-1 text-xl-3 d-inline-flex align-items-center px-4 py-3" data-loading-text="Loading...">SUBMIT <i class="custom-arrow-icon ml-5"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-color-primary border-0 mt-0">
				<div class="container container-lg-custom pt-4 pb-3">
					<div class="row py-5">
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="ls-0">OUR ADDRESS</h4>
							<ul class="list list-unstyled">
								<li class="mb-1">
									12345  Porto Blvd.
								</li>
								<li class="mb-1">
									Suite 1500
								</li>
								<li>
									Los Angeles, California 90000
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="ls-0">OUR CONTACTS</h4>
							<ul class="list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block line-height-2">SUPPORT</span>
									<a href="tel:+1234567890" class="text-color-light text-6 text-lg-4 text-xl-6 font-weight-bold">800-123-4567</a>
								</li>
								<li>
									<span class="d-block line-height-2">SALES</span>
									<a href="tel:+1234567890" class="text-color-light text-6 text-lg-4 text-xl-6 font-weight-bold">800-123-4568</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="ls-0">USEFUL LINKS</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-it-services-services.html">Our Services</a>
								</li>
								<li class="mb-1">
									<a href="#">Payment Methods</a>
								</li>
								<li class="mb-1">
									<a href="#">Services Guide</a>
								</li>
								<li>
									<a href="#">FAQs</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="ls-0">OUR SERVICES</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-it-services-services-detail.html">Cloud Services</a>
								</li>
								<li class="mb-1">
									<a href="demo-it-services-services-detail.html">Tech Support</a>
								</li>
								<li class="mb-1">
									<a href="demo-it-services-services-detail.html">Data Security</a>
								</li>
								<li>
									<a href="demo-it-services-services-detail.html">Software Dev</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="ls-0">ABOUT</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-it-services-about-us.html">About Us</a>
								</li>
								<li>
									<a href="demo-it-services-contact.html">Send a Message</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h4 class="ls-0">SOCIAL MEDIA</h4>
							<ul class="social-icons social-icons-clean custom-social-icons-icon-light">
								<li>
									<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-21', ['key' => 'footer-copyright.footer-copyright-21'])
			</footer>
@endsection
