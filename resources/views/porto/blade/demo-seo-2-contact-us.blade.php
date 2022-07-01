@extends('porto.app')
@section('header')
@include('porto.partials.header.header-189')
@endsection

@section('main')
<div role="maiporto.partials

				@include('porto.partials.page-header.page-header-200')

				<section class="section bg-color-light position-relative border-0 pt-3 m-0">
					<svg class="custom-page-header-curved-top-1" width="100%" height="700" xmlns="http://www.w3.org/2000/svg">
						<path transform="rotate(-3.1329219341278076 1459.172607421877,783.5322875976566) " d="m-12.54488,445.11701c0,0 2.16796,-1.48437 6.92379,-3.91356c4.75584,-2.42918 12.09956,-5.80319 22.45107,-9.58247c20.70303,-7.55856 53.43725,-16.7382 101.56202,-23.22255c48.12477,-6.48434 111.6401,-10.27339 193.90533,-7.05074c41.13262,1.61132 88.20271,5.91306 140.3802,12.50726c230.96006,32.89734 314.60609,102.57281 635.26547,59.88645c320.65938,-42.68635 452.47762,-118.72154 843.58759,3.72964c391.10997,122.45118 553.23416,-82.15958 698.49814,-47.66481c-76.25064,69.23438 407.49874,281.32592 331.2481,350.5603c-168.91731,29.52009 85.02254,247.61162 -83.89478,277.13171c84.07062,348.27313 -2948.95065,-242.40222 -2928.39024,-287.84045" stroke-width="0" stroke="#000" fill="#FFF" id="svg_2"></path>
					</svg>
					<div class="container pb-2 mb-4">
						<div class="row justify-content-center">
							<div class="col-md-10 col-lg-6 mb-5 mb-lg-0">
								<div class="overflow-hidden mb-1">
									<h2 class="text-color-dark font-weight-semibold text-6 line-height-3 mb-0 pr-5 mr-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">Free Website Audit and Free Proposal</h2>
								</div>
								<div class="overflow-hidden mb-3">
									<span class="d-block mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1400">CONTACT US TODAY</span>
								</div>
								<p class="lead pr-5 mb-4 pb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
								@include('porto.partials.feature-box.feature-box-137')
								@include('porto.partials.feature-box.feature-box-138')
								@include('porto.partials.feature-box.feature-box-139')
							</div>
							<div class="col-md-10 col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="2000">
								<div class="card border-0 custom-border-radius-1 box-shadow-1 p-2">
									<div class="card-body p-4 z-index-1">
										<h4 class="text-color-dark font-weight-semibold text-5 line-height-3 ls-0 mb-1 mt-2 pr-5 mr-5">Send Us a Message</h4>
										<p class="pb-2 mb-4">Pellentesque ultricies nibh gravida, accumsan libero luctus. </p>

										<form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
											<div class="contact-form-success alert alert-success d-none mt-4">
												<strong>Success!</strong> Your message has been sent to us.
											</div>

											<div class="contact-form-error alert alert-danger d-none mt-4">
												<strong>Error!</strong> There was an error sending your message.
												<span class="mail-error-message text-1 d-block"></span>
											</div>
											
											<div class="form-row">
												<div class="form-group col mb-3">
													<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control custom-bg-color-light-1 border-0" name="name" id="name" placeholder="Your Name" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col mb-3">
													<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control custom-bg-color-light-1 border-0" name="email" id="email" placeholder="E-mail Address" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col mb-3">
													<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control custom-bg-color-light-1 border-0" name="message" id="message" placeholder="Your Message" required></textarea>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col mb-3">
													<input type="submit" value="SEND NOW" class="btn btn-gradient btn-rounded font-weight-bold px-5 py-3 text-3" data-loading-text="Loading...">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-3 bg-color-secondary position-relative border-0 m-0">
					<div class="container position-relative z-index-1 pt-2 pb-5 mt-3 mb-5">
						<div class="row justify-content-center mb-3">
							<div class="col-md-8 col-lg-6 text-center">
								<div class="overflow-hidden mb-2">
									<h2 class="font-weight-bold text-color-light text-7 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Get Your Free Instant SEO Audit Now</h2>
								</div>
								<div class="overflow-hidden mb-1">
									<p class="lead custom-text-color-light-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Improve your seo ranking with porto</p>
								</div>
								<div class="overflow-hidden mb-3">
									<p class="custom-text-color-light-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="550">Best SEO Features &amp; Methodologies. Better SEO than your competitors</p>
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col">
								<form class="custom-form-style-1 custom-form-simple-validation form-errors-light" action="/">
									<div class="form-row mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
										<div class="form-group col-md-6 pr-md-2">
											<input type="text" class="form-control" value="" placeholder="Enter URL" required>
										</div>
										<div class="form-group col-md-6 pl-md-2">
											<input type="email" class="form-control" value="" placeholder="Enter E-mail Adress" required>
										</div>
									</div>
									<div class="form-row justify-content-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850">
										<div class="form-group col-auto mb-0">
											<button type="submit" class="btn btn-quaternary btn-rounded font-weight-bold px-5 py-3 text-3">CHECK NOW</button>
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
<footer id="footer" class="bg-color-quaternary position-relative mt-0">
				<svg class="custom-section-curved-top-7" width="100%" height="400" xmlns="http://www.w3.org/2000/svg">
					<path id="svg_2" fill="#171940" stroke="#000" stroke-width="0" d="m-16.68437,95.44889c0,0 5.33335,176.00075 660.00283,93.33373c327.33474,-41.33351 503.33549,15.3334 639.00274,35.66682c135.66725,20.33342 59.66691,9.66671 358.33487,28.33346c298.66795,18.66676 268.66829,-45.00088 382.66831,-112.00048c114.00002,-66.9996 718.31698,-59.48704 1221.66946,95.563c503.35248,155.05004 -221.83202,184.10564 -243.66935,197.60521c-21.83733,13.49958 -3008.67549,-19.83371 -3008.00467,-20.83335c-0.67082,0.99964 -30.00428,-232.33469 -10.00419,-317.66839z" class="svg-fill-color-quaternary"></path>
				</svg>
				<div class="container mt-0 mb-4">
					<div class="row py-5">
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h4 class="font-weight-bold text-color-light text-5 ls-0 pb-1 mb-2">ABOUT US</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
							<a href="demo-seo-2.html">
								<img src="img/demos/seo-2/logo-footer.png" class="img-fluid" alt="Demo SEO 2">
							</a>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-bold text-color-light text-5 ls-0 pb-1 mb-2">USEFUL LINKS</h4>
							<ul class="list list-unstyled">
								<li class="mb-1">
									<a href="#">Features</a>
								</li>
								<li class="mb-1">
									<a href="#">Pages</a>
								</li>
								<li class="mb-1">
									<a href="#">Portfolio</a>
								</li>
								<li class="mb-1">
									<a href="#">About Us</a>
								</li>
								<li class="mb-1">
									<a href="#">Contact Us</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-bold text-color-light text-5 ls-0 pb-1 mb-2">OUR SERVICES</h4>
							<ul class="list list-unstyled">
								<li class="mb-1">
									<a href="demo-seo-2-services-detail.html">Seo Services</a>
								</li>
								<li class="mb-1">
									<a href="demo-seo-2-services-detail.html">Email Marketing</a>
								</li>
								<li class="mb-1">
									<a href="demo-seo-2-services-detail.html">Data Analysis</a>
								</li>
								<li class="mb-1">
									<a href="demo-seo-2-services-detail.html">Digital Marketing</a>
								</li>
								<li class="mb-1">
									<a href="demo-seo-2-services-detail.html">Social Media Marketing</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-3">
							<h4 class="font-weight-bold text-color-light text-5 ls-0 pb-1 mb-2">CONTACT US</h4>
							<ul class="list list-unstyled">
								<li class="mb-1">
									Address: 123 Street Name, City, England
								</li>
								<li class="mb-1">
									Phone: <a href="tel:+1234567890">(123) 456-7890</a>
								</li>
								<li class="mb-1">
									Email: <a href="#">mail@example.com</a>
								</li>
							</ul>
							<ul class="social-icons custom-social-icons-style-1">
								<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							</ul>
						</div>
					</div>porto.partials
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-38', ['key' => 'footer-copyright.footer-copyright-38'])
			</footer>
@endsection
