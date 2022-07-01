@extends('porto.app')
@section('header')
<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': true}">
				<div class="header-body border-color-primary border-top-0 box-shadow-none">

					<div class="header-top header-top-default border-bottom-0 border-top-0">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills text-uppercase text-2">
												<li class="nav-item nav-item-anim-icon">
													<a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
												</li>
												<li clasporto.partials-anim-icon">
													<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										@include('porto.partials.header-social-icons.header-social-icons-5')
									</div>porto.partials
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container z-index-2">
						<div class="header-row py-2">
							<div class="header-column">
								<div class="header-row">
									@include('porto.partials.header-logo.header-logo-48')
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									@include('porto.partials.header-extra-info.header-extra-info-15')
								</div>porto.partials
							</div>
						</div>
					</div>
					<div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
						<div class="container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										@include('porto.partials.header-nav.header-nav-299')
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
@endsectionporto.partials

@section('main')
<div role="main" porto.partials
				<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['650px','650px','650px','550px','500px']" style="height: 650px;">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							<!-- Carousel Slide 1 -->
							@include('porto.partials.owl-item.owl-item-21')

							<!-- Carousel Slide 2 -->
							@include('porto.partials.owl-item.owl-item-22')

						</div>
					</div>
					<div class="owl-nav">
						<button type="button" role="presentation" class="owl-prev"></button>
						<button type="button" role="presentation" class="owl-next"></button>
					</div>
					<div class="owl-dots mb-5">
						<button role="button" class="owl-dot active"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
					</div>
				</div>
				<section class="section bg-color-light border-0 m-0">
					<div class="container">
						<div class="row text-center text-md-left mt-4">
							<div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="row justify-content-center justify-content-md-start">
									<div class="col-4">
										<img class="img-fluid mb-4" src="img/icons/seo-grey.png" alt="">
									</div>
									<div class="col-lg-8">
										<h2 class="font-weight-bold text-5 line-height-5 mb-1">SEO Optimization</h2>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn">
								<div class="row justify-content-center justify-content-md-start">
									<div class="col-4">
										<img class="img-fluid mb-4" src="img/icons/marketing-grey.png" alt="">
									</div>
									<div class="col-lg-8">
										<h2 class="font-weight-bold text-5 line-height-5 mb-1">Pro Marketing Ads</h2>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="row justify-content-center justify-content-md-start">
									<div class="col-4">
										<img class="img-fluid mb-4" src="img/icons/support-grey.png" alt="">
									</div>
									<div class="col-lg-8">
										<h2 class="font-weight-bold text-5 line-height-5 mb-1">Secure Support</h2>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
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
								<a href="#" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">LEARN MORE</a>
							</div>
							<div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
								<img src="img/generic/generic-corporate-3-1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="">
								<img src="img/generic/generic-corporate-3-2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="">
								<img src="img/generic/generic-corporate-3-3.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="">
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row py-5 my-5">
						<div class="col-md-6 order-2 order-md-1 text-center text-md-left appear-animation mt-2 pt-1" data-appear-animation="fadeInRightShorter">
							<div class="owl-carousel owl-theme nav-style-1 mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
								<div>
									<img class="img-fluid rounded-0 mb-4" src="img/team/team-1.jpg" alt="">
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
									<p class="text-2 mb-0">CEO</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="img/team/team-2.jpg" alt="">
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
									<p class="text-2 mb-0">CEO</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="img/team/team-3.jpg" alt="">
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
									<p class="text-2 mb-0">DEVELOPER</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="img/team/team-4.jpg" alt="">
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
									<p class="text-2 mb-0">SEO ANALYST</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="img/team/team-5.jpg" alt="">
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
									<p class="text-2 mb-0">DESIGNER</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<h2 class="text-color-dark font-weight-normal text-6 mb-2">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
							<a href="page-team.html" class="btn btn-dark font-weight-semibold rounded-0 px-5 btn-py-2 text-2 p-relative bottom-3">LEARN MORE</a>
						</div>
					</div>
				</div>

				<section class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-color-light text-6 mb-4">Latest Posts</h2>
							</div>
						</div>
						<div class="row recent-posts appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<article>
									<div class="row">
										<div class="col">
											<a href="blog-post.html" class="text-decoration-none">
												<img src="img/blog/blog-corporate-3-1.jpg" class="img-fluid hover-effect-2 mb-3" alt="">
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day bg-color-light text-color-dark font-weight-extra-bold">15</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<a href="/" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<article>
									<div class="row">
										<div class="col">
											<a href="blog-post.html" class="text-decoration-none">
												<img src="img/blog/blog-corporate-3-2.jpg" class="img-fluid hover-effect-2 mb-3" alt="">
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day bg-color-light text-color-dark font-weight-extra-bold">14</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<a href="/" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
								<article>
									<div class="row">
										<div class="col">
											<a href="blog-post.html" class="text-decoration-none">
												<img src="img/blog/blog-corporate-3-3.jpg" class="img-fluid hover-effect-2 mb-3" alt="">
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day bg-color-light text-color-dark font-weight-extra-bold">13</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<a href="/" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3">
								<article>
									<div class="row">
										<div class="col">
											<a href="blog-post.html" class="text-decoration-none">
												<img src="img/blog/blog-corporate-3-4.jpg" class="img-fluid hover-effect-2 mb-3" alt="">
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day bg-color-light text-color-dark font-weight-extra-bold">12</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<a href="/" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</section>

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
									<div class=porto.partialsol-md-4">
										<img src="img/logos/logo-3.png" class="img-fluid hover-effect-3" alt="">
									</div>
								</div>porto.partials
								<a href="#" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">LEARN MORE</a>
							</div>
							<div class="col-lg-6">
								<div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
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
<footer id="footer" class="mt-0">
				<div class="container my-4">
					<div class="row py-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Contact Details</h5>
							<p class="text-4 mb-0">Porto Template 123</p>
							<p class="text-4 mb-0">Porto Blvd, Suite</p>
							<p class="text-4 mb-0">New York</p>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Opening Hours</h5>
							<p class="text-4 mb-0">Mon-Fri: <span class="text-color-light">8:30 am to 5:00 pm</span></p>
							<p class="text-4 mb-0">Saturday: <span class="text-color-light">9:30 am to 1:00 pm</span></p>
							<p class="text-4 mb-0">Sunday: <span class="text-color-light">Closed</span></p>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Call Us Now</h5>
							<p class="text-7 text-color-light font-weight-bold mb-2">(800) 123 4567</p>
							<p class="text-4 mb-0">Sales: <span class="text-color-light">(800) 123 4568</span></p>
						</div>
						<div class="col-md-6 col-lg-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Social Media</h5>
							<ul clasporto.partialsns social-icons m-0">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container">
					@include('porto.partials.footer-copyright.footer-copyright-62', ['key' => 'footer-copyright.footer-copyright-62'])
				</div>
			</footer>
@endsection
