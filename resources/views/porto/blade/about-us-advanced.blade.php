@extends('porto.app')
@section('header')
@include('porto.partials.header.header-1')
@endsection
porto.partials
@section('main')
<div role="main" class="main">
				@include('porto.partials.page-header.page-header')

				<div class="container">

					<div class="row pt-5">
						<div class="col">

							<div class="row text-center pb-5">
								<div class="col-md-9 mx-md-auto">
									<div class="overflow-hidden mb-3">
										<h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
											<span>We are Porto, We </span>
											<span class="word-rotator-words bg-primary">
												<b class="is-visible">Create</b>
												<b>Build</b>
												<b>Develop</b>
											</span>
											<span> Solutions</span>
										</h1>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
										</p>
									</div>
								</div>
							</div>

							<div class="row mt-3 mb-5">
								<div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
									<h3 class="font-weight-bold text-4 mb-2">Our Mission</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
								</div>
								<div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
									<h3 class="font-weight-bold text-4 mb-2">Our Vision</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
								</div>
								<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
									<h3 class="font-weight-bold text-4 mb-2">Why Us</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel consequat, ante nulla hendrerit arcu.</p>
								</div>
							</div>

						</div>
					</div>

				</div>

				<section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
					<div class="cporto.partials
						<div class="row counters counters-sm pb-4 pt-3">
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								@include('porto.partials.counter.counter')
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								@include('porto.partials.counter.counter-1')
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
								@include('porto.partials.counter.counter-2')
							</div>
							<div class="col-sm-6 col-lg-3">
								@include('porto.partials.counter.counter-3')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc. </p>
								<p class="pr-5 mr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget</p>
							</div>
							<div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
								<img src="img/generic/generic-corporate-3-1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="">
								<img src="img/generic/generic-corporate-3-2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="">
								<img src="img/generic/generic-corporate-3-3.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="">
							</div>
						</div>
					</div>
				</section>

				<div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
					<div class="row pt-5 pb-4 my-5">
						<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
							@include('porto.partials.owl-carousel.owl-carousel-1')
						</div>
						<div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
							<h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
						</div>
					</div>
				</div>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
					<div class="container pb-2">
						<div class="row">
							<div class="col-lg-6 text-center text-md-left mb-5 mb-lg-0">
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Our Clients</strong></h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
								<div class="row justify-content-center my-5">
									<div class="col-8 text-center col-md-4">
										<img src="img/logos/logo-1.png" class="img-fluid hover-effect-3" alt="">
									</div>
									<div class="col-8 text-center col-md-4 my-3 my-md-0">
										<img src="img/logos/logo-2.png" class="img-fluid hover-effect-3" alt="">
									</div>
									<div class="col-8 text-center col-md-4">
										<img src="img/logos/logo-3.png" class="img-fluid hover-effect-3" alt="">
									</div>
								</div>
							</div>
							<div class="cporto.partials
								<div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
									<div>
										@include('porto.partials.testimonial.testimonial')
									</div>
									<div>
										@include('porto.partials.testimonial.testimonial')
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="footer-texts-more-lighten mt-0">
				<div class="container">
					<div class="row py-4 my-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">CONTACT INFO</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span> 
									1234 Street Name, City, State, USA
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
									<a href="tel:+1234567890">Toll Free (123) 456-7890</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
									<a href="mailto:mail@example.com">mail@example.com</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">WORKING DAYS/HOURS </span>
									Mon - Sun / 9:00AM - 8:00PM
								</li>
							</ul>
							<ul class="social-icons social-icons-clean-with-border social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-2">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">USEFUL LINKS</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="contact-us-1.html">Help Center</a></li>
								<li class="mb-0"><a href="about-us.html">About Us</a></li>
								<li class="mb-0"><a href="contact-us.html">Contact Us</a></li>
								<li class="mb-0"><a href="page-careers.html">Careers</a></li>
								<li class="mb-0"><a href="blog-grid-4-columns.html">Blog</a></li>
								<li class="mb-0"><a href="#">Our Location</a></li>
								<li class="mb-0"><a href="#">Privacy Policy</a></li>
								<li class="mb-0"><a href="sitemap.html">Sitemap</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-4 mb-5 mb-md-0">
							<h5 class="text-4 text-color-light mb-3">RECENT NEWS</h5>
							<article class="mb-3">
								<a href="blog-post.html" class="text-color-light text-3-5">Why should I buy a Web Template?</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
							<article class="mb-3">
								<a href="blog-post.html" class="text-color-light text-3-5">Creating Amazing Website with Porto</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
							<article>
								<a href="blog-post.html" class="text-color-light text-3-5">Best Practices for Top UI Design</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
						</div>
						<div class="col-md-6 col-lg-3">
							<h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
							<p class="mb-2">Get all the latest information on events, sales and offers. Sign up for newsletter:</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" class="form-style-5 opacity-10" action="php/newsletter-subscribe.php" method="POST">
								<div class="form-row">
									<div class="form-group col">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<button class="btn btn-primary btn-rounded btn-px-4 btn-py-2 font-weight-bold" type="submit">SUBSCRIBE</button>
									</div>
								</div>
							</form>
						</div>
					</div>porto.partials
				</div>
				<div class="container">
					@include('porto.partials.footer-copyright.footer-copyright', ['key' => 'footer-copyright.footer-copyright'])
				</div>
			</footer>
@endsection
