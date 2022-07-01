@extends('porto.app')
@section('header')
@include('porto.partials.header.header-344')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section overlay overlay-show overlay-op-5 border-0 bgPositionBottomToTop m-0" data-plugin-options="{'minWindowWidth': 0}" style="background-image: url(img/slides/slide-corporate-10.jpg); background-size: 100%; background-position: bottom; animation-duration: 13s; animation-delay: 1500ms; animation-fill-mode: forwards; height: 550px;">
					<div class="container h-100">
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<h3 class="position-relative text-color-light text-5 line-height-5 font-weight-light px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
										<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
											<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
										</span>
										DO YOU NEED A NEW
										<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
											<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
										</span>
									</h3>
									<h1 class="text-color-light font-weight-extra-bold text-14 line-height-1 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">WEB DESIGN?</h1>
									<p class="text-4-5 text-color-light font-weight-light mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Check out our options and features</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<aside class="nav-secondary" id="navSecondary" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 72}}">
					<div class="container">
						<div class="row">
							<div class="col">
								@include('porto.partials.nav-pills.nav-pills-29')
							</div>
						</div>
					</div>
				</aside>

				<section class="section section-no-background section-no-border m-0" id="features">
					<div class="container">
						<div class="row mt-4">
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-298')
							</div>
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-299')
							</div>
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-300')
							</div>
						</div>

						<div class="row mt-lg-3 mb-4">
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-301')
							</div>
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-302')
							</div>
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-303')
							</div>
						</div>

					</div>
				</section>
				<section class="section section-no-border mt-0" id="plans">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="heading-dark mt-4 mb-0">Hosting <strong>Plans</strong></h2>
								<p class="mb-5">Start here and choose the one that is the best for you.</p>
							</div>
						</div>
						<div class="pricing-table pricing-table-no-gap pb-3 mb-5 mt-3">
							<div class="col-md-6 col-lg-3">
								<div class="plan">
									<div class="plan-header">
										<h3>Enterprise</h3>
									</div>
									<div class="plan-price">
										<span class="price"><span class="price-unit">$</span>59</span>
										<label class="price-label">PER MONTH</label>
									</div>
									<div class="plan-features">
										<ul>
											<li>10GB Disk Space</li>
											<li>100GB Monthly Bandwith</li>
											<li>20 Email Accounts</li>
											<li>Unlimited Subdomains</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="#" class="btn btn-dark btn-modern btn-outline rounded-0 py-2 px-4">Choose Plan</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="plan">
									<div class="plan-header">
										<h3>Professional</h3>
									</div>
									<div class="plan-price">
										<span class="price"><span class="price-unit">$</span>29</span>
										<label class="price-label">PER MONTH</label>
									</div>
									<div class="plan-features">
										<ul>
											<li>5GB Disk Space</li>
											<li>50GB Monthly Bandwith</li>
											<li>10 Email Accounts</li>
											<li>Unlimited Subdomains</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="#" class="btn btn-dark btn-modern btn-outline rounded-0 py-2 px-4">Choose Plan</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="plan plan-featured">
									<div class="plan-header bg-primary">
										<h3>Standard</h3>
									</div>
									<div class="plan-price">
										<span class="price"><span class="price-unit">$</span>17</span>
										<label class="price-label">PER MONTH</label>
									</div>
									<div class="plan-features">
										<ul>
											<li>3GB Disk Space</li>
											<li>25GB Monthly Bandwith</li>
											<li>5 Email Accounts</li>
											<li>Unlimited Subdomains</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="#" class="btn btn-primary btn-modern rounded-0 py-2 px-4">Choose Plan</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="plan">
									<div class="plan-header">
										<h3>Basic</h3>
									</div>
									<div class="plan-price">
										<span class="price"><span class="price-unit">$</span>9</span>
										<label class="price-label">PER MONTH</label>
									</div>
									<div class="plan-features">
										<ul>porto.partials
											<li>1GB Disk Space</li>
											<li>10GB Monthly Bandwith</li>
											<li>2 Eporto.partials
											<li>Unlimited Subdomains</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href=porto.partialsark btn-modern btn-outline rounded-0 py-2 px-4">Choose Plan</a>
									</div>
								</div>
							</div>porto.partials
						</div>
					</div>
				</section>
				<section class="section section-no-background section-no-border mt-0 mb-0" id="testimonials">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="heading-dark mb-0">Happy <strong>Customers</strong></h2>
								<p>Trusted by some of the world’s biggest brands.</p>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-lg-6">
								@include('porto.partials.testimonial.testimonial-130')
							</div>
							<div class="col-lg-6">
								@include('porto.partials.testimonial.testimonial-131')
							</div>
						</div>
						<div class="row mt-lg-3 mb-5">
							<div class="col-lg-6">
								@include('porto.partials.testimonial.testimonial-132')
							</div>
							<div class="col-lg-6">
								@include('porto.partials.testimonial.testimonial-133')
							</div>
						</div>
						<div class="row text-center mt-5">
							@include('porto.partials.owl-carousel.owl-carousel-343')
						</div>
					</div>
				</section>
				<section id="search-domain" class="section section-text-light section-center mt-0 mb-0" style="background: url(img/parallax/parallax-4.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8 text-center">
								<h2 class="text-light mb-0">Search <strong>Domain</strong></h2>
								<p class="mb-4">Enter the domain name to register or transfer</p>

								<form action="#" method="post" id="domainSearchForm" class="form-errors-light">
									<div class="form-row">
										<div class="col">
											<div class="input-group">
												<input type="text" name="sld" class="form-control form-control-lg form-control-focused border-top-0 border-bottom-0 border-left-0" aria-label="..." placeholder="Enter your domain" required data-msg-required="Please enter your domain.">
												<input type="hidden" name="tld" value=".com">
												<div class="input-group-btn align-items-stretch">
													<button type="button" class="btn btn-light btn-lg dropdown-toggle h-100 border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="tldBtn">.com</button>
													<ul class="dropdown-menu dropdown-menu-right bclip-border-box" id="tld">
														<li><a class="dropdown-item" href="#">.com</a></li>
														<li><a class="dropdown-item" href="#">.net</a></li>
														<li><porto.partialsem" href="#">.org</a></li>
														<li><a class="dropdown-item" href="#">.eu</a></li>
														<li><a class="dropdown-item" href="#">.us</a></li>
													</ul>
												</div>
											</div>
										</div>porto.partials
									</div>
									<div class="form-row">
										<div class="col">
											<button class="btn btn-lg btn-primary mt-4" href="#">Search Domain</button>
										</div>
									</div>porto.partials
								</form>

							</div>
						</div>
					</div>
				</section>
				<section class="section section-no-background section-no-border section-footer m-0" id="blog">
					<div class="container">
						<div class="row mt-4">
							<div class="col-lg-4">
								<img class="img-fluid" src="img/blog/blog-hosting-1.jpg" alt="Blog">
								<div class="recent-posts mt-3 mb-4">
									@include('porto.partials.post.post-187')
								</div>
							</div>
							<div class="col-lg-4">
								<img class="img-fluid" src="img/blog/blog-hosting-2.jpg" alt="Blog">
								<div class="recent-posts mt-3 mb-4">
									@include('porto.partials.post.post-188')
								</div>
							</div>
							<div class="col-lg-4">
								<img class="img-fluid" src="img/blog/blog-hosting-3.jpg" alt="Blog">
								<div class="recent-posts mt-3 mb-4">
									@include('porto.partials.post.post-189')
								</div>
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
						<div class="col-md-9 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">ABOUT US</h5>
							<p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos...</p>
							<p><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
							<div class="row pt-3">
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">BLOG</h5>
									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-full-width.html">Blog Full Width</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-large-image.html">Blog Large Image</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-medium-image.html">Blog Medium Image</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-post.html">Single Post</a></li>
									</ul>
								</div>
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">PAGES</h5>
									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-full-width.html">Full width</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-left-sidebar.html">Left sidebar</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-right-sidebar.html">Right sidebar</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-custom-header.html">Custom Header</a></li>
									</ul>
								</div>
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">PORTFOLIO</h5>
									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-2-columns.html">2 Columns</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-3-columns.html">3 Columns</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-4-columns.html">4 Columns</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-single-wide-slider.html">Single Project</a></li>
									</ul>
								</div>
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">EXTRA</h5>
									<ul class="list list-icons list-icons-sm">
										<li>porto.partialsle-right top-8"></i> <a class="link-hover-style-1" href="page-team.html">Team</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-services.html">Services</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-careers.html">Careers</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-faq.html">FAQ</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3 pb-1">CONTACT US</h5>
							<p class="text-8 text-color-light font-weight-bold">(800) 123-4567</p>
							<p class="mb-2">International: (333) 456-6670</p>
							<p class="mb-2">Fax: (222) 531-8999</p>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>
							<ul class="footer-social-icons social-icons mt-4">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-1', ['key' => 'footer-copyright.footer-copyright-1'])
			</footer>
@endsection
