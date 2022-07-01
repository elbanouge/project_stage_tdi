@extends('porto.app')
@section('header')
@include('porto.partials.header.header-340')
@endsection

@section('main')
<div role="main" class="main">
				<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['650px','650px','650px','550px','500px']" style="height: 650px;">
					<div class="owl-stage-outer">
						<div class=porto.partials
				
							<!-- Carousel Slide 1 -->
							@include('porto.partials.owl-item.owl-item-50')
							
							<!-- Carousel Slide 2 -->
							@include('porto.partials.owl-item.owl-item-51')
						
						</div>
					</div>
					<div class="owl-dots mb-5">
						<button role="button" class="owl-dot active"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
					</div>
				</div>

				<section class="section section-primary section-no-border section-height-4 my-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<span class="lead text-color-light opacity-6 text-2 mb-0">LOREM IPSUM DOLOR SIT</span>
								<h2 class="font-weight-bold line-height-1 text-7 negative-ls-1 mb-3">The Best HTML Template Ever</h2>
								<p class="text-color-light opacity-8 text-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipscing elit massa enim. ullam id varius nunc.</p>
								<p class="text-color-light opacity-8 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget</p>
								<a href="#" class="btn btn-dark font-weight-semibold btn-px-5 btn-py-2 text-2 rounded-0">LEARN MORE</a>
							</div>
							<div class="col-lg-7 mt-5 mt-lg-0">
								<div class="row">
									<div class="col-lg-6 mb-4 mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
										@include('porto.partials.feature-box.feature-box-280')
									</div>
									<div class="col-lg-6 mb-4 mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
										@include('porto.partials.feature-box.feature-box-281')
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6 mb-4 mb-lg-0">
										@include('porto.partials.feature-box.feature-box-282')
									</div>
									<div class="col-lg-6">
										@include('porto.partials.feature-box.feature-box-283')
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-height-3 bg-color-grey-scale-1 section-no-border m-0">
					<div class="container my-2">
						<div class="row">
							<div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">
								<h2 class="font-weight-normal text-6 mb-5">Our <strong class="font-weight-extra-bold">Clients</strong></h2>
							</div>
						</div>porto.partials
						<div class="row">
							<div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								@include('porto.partials.testimonial.testimonial-119')
							</div>
							<div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
								@include('porto.partials.testimonial.testimonial-119')
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row pt-4 mt-5">
						<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
							<h2 class="font-weight-normal text-6">Our <strong class="font-weight-extra-bold">Portfolio</strong></h2>
						</div>
					</div>
					<div class="row pb-4 mb-5">
						<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 0, 'loop': false}">
								<div>
									<a href="portfolio-single-wide-slider.html">
										<img src="img/projects/project-35.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single-wide-slider.html">
										<img src="img/projects/project-36.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single-wide-slider.html">
										<img src="img/projects/project-37.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single-wide-slider.html">
										<img src="img/projects/project-38.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single-wide-slider.html">
										<img src="img/projects/project-36.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single-wide-slider.html">
										<img src="img/projects/project-37.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single-wide-slider.html">
										<img src="img/projects/project-38.jpg" class="img-fluid" alt="">
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
				<section class="section section-height-3 bg-color-grey-scale-1 section-no-border m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="font-weight-normal text-6 mb-5">Our <strong class="font-weight-extra-bold">Blog</strong></h2>
							</div>
						</div>
						<div class="row recent-posts pb-4 mb-5">
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<article>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day text-color-dark font-weight-extra-bold">15</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
											<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<article>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day text-color-dark font-weight-extra-bold">14</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
											<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
								<article>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day text-color-dark font-weight-extra-bold">13</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
											<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3">
								<article>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day text-color-dark font-weight-extra-bold">12</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
											<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col-lg-12 text-center">
								<a href="#" class="btn btn-dark btn-px-5 btn-py-2 font-weight-bold text-color-light rounded-0 text-2">VIEW BLOG</a>
							</div>
						</div>
					</div>
				</section>
			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-7 col-lg-4 mb-5 mb-lg-0 pt-3">
							<h5 class="text-3 mb-3">ABOUT US</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna semper scelerisque.</p>
							<p class="mb-0">Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis ptent taciti sociosqu ad litora...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-5 col-lg-3 mb-5 mb-lg-0 pt-3">
							<h5 class="text-3 mb-3 pb-1">CONTACT US</h5>
							<p class="text-8 text-color-light font-weight-bold">(800) 123-4567</p>
							<p class="mb-2">International: (333) 456-6670</p>
							<p class="mb-2">Fax: (222) 531-8999</p>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>
							<ul class="social-icons mt-4">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-5 pt-3">
							<h5 class="text-3 mb-3 pb-1">SEND US A MESSAGE</h5>
							<form class="contact-form" action="php/contact-form.php" method="POST">
								<input type="hidden" value="Contact Form" name="subject" id="subject">
								<div class="contact-form-success alert alert-success d-none">
									Message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none">
									Error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" placeholder="Your Name..." name="name" id="name" required>
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
										<input type="submit" value="SUBMIT" class="btn btn-xl btn-outline btn-primary text-1 font-weight-bold text-uppercase" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>porto.partials
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-1', ['key' => 'footer-copyright.footer-copyright-1'])
			</footer>
@endsection
