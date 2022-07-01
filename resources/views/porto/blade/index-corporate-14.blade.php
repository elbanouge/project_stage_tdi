@extends('porto.app')
@section('header')
@include('porto.partials.header.header-330')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section overlay overlay-show overlay-op-8 border-0 m-0 p-0" style="background-image: url(img/slides/slide-corporate-14-1.jpg); background-size: cover; background-position: center; height: 100vh;">
					<div class="container container-lg-custom pt-5 h-100">
						<div class="row align-items-center pt-5 h-100">
							<div class="col">
								<h1 class="word-rotator letters type type-clean-light text-color-light font-weight-extra-bold text-12 line-height-2 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
									<span>We are the best</span><br> 
									<span class="word-rotator-words waiting">
										<b class="is-visible">and we create websites.</b>
										<b>and we build brands.</b>
										<b>and we make apps.</b>
										<b>and we are awesome.</b>
									</span>
								</h1>
								<p class="text-4-5 text-color-light font-weight-light opacity-9 mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 1500, 'minWindowWidth': 0, 'animationSpeed': 50}">Porto is a huge success, learn more about us.</p>
								<a href="#" class="btn btn-primary btn-modern font-weight-bold text-3 py-3 btn-px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2200" data-appear-animation-duration="1.2s" data-plugin-options="{'minWindowWidth': 0}">GET STARTED NOW <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</section>

				<div class="container container-lg-custom py-5 my-5">
					<div class="row justify-content-center">
						<div class="col-xl-9 text-center">
							<h2 class="font-weight-bold text-11 appear-animation" data-appear-animation="fadeInUpShorter">We are Porto, we are Awesome</h2>
							<p class="line-height-9 text-4 opacity-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat id sapien ac varius. Fusce hendrerit ligula a consectetur ullamcorper. Vestibulum varius pharetra lorem, in maximus libero placerat sed. In a lectus vel mauris tempor lobortis feugiat sed magna.</p>
						</div>
					</div>porto.partials
					<div class="row featured-boxes featured-boxes-style-4">
						<div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
							@include('porto.partials.featured-box.featured-box-456', ['key' => 'featured-box.featured-box-456'])
						</div>
						<div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
							@include('porto.partials.featured-box.featured-box-457', ['key' => 'featured-box.featured-box-457'])
						</div>
						<div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							@include('porto.partials.featured-box.featured-box-458', ['key' => 'featured-box.featured-box-458'])
						</div>
						<div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
							@include('porto.partials.featured-box.featured-box-459', ['key' => 'featured-box.featured-box-459'])
						</div>
					</div>
				</div>

				<section class="section section-parallax bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '116%'}" data-image-src="img/parallax/parallax-corporate-14-1.jpg">
					<div class="container container-lg-custom">
						<div class="row justify-content-between align-items-center">
							<div class="col-md-7 order-2 order-md-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<span class="font-weight-bold text-color-dark opacity-8 text-4">COOL STYLES</span>
								<h2 class="font-weight-bold text-9 mb-4">Layouts Styles &amp; Variants</h2>
								<ul class="list list-icons pb-2 mb-4">
									<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
									<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
									<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Dolor sit amet, lorem ipsum consectetur adipiscing elit.</span></li>
								</ul>
								<a href="#" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">LEARN MORE</a>
							</div>
							<div class="col-md-4 text-center text-md-left order-1 order-md-2 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<img src="img/smartphone-corporate-14-1.png" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-3 section-parallax bg-color-light border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'offset': 70}" data-image-src="img/parallax/parallax-corporate-14-2.jpg">
					<div class="container container-lg-custom">
						<div class="row align-items-center">
							<div class="col-md-6 col-lg-5 col-xl-6 text-center pr-5 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								<img src="img/smartphone-corporate-14-2.png" class="img-fluid" alt="">
							</div>
							<div class="col-md-6 col-lg-7 col-xl-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<span class="font-weight-bold text-color-dark opacity-8 text-4">EXCLUSIVE</span>
								<h2 class="font-weight-bold text-9 mb-4">Customizable Style Switcher</h2>
								<ul class="list list-icons pb-2 mb-4">
									<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
									<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
									<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Dolor sit amet, lorem ipsum consectetur adipiscing elit.</span></li>
								</ul>
								<a href="#" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">LEARN MORE</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-3 section-parallax bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'offset': 70}" data-image-src="img/parallax/parallax-corporate-14-3.jpg">
					<div class="container container-lg-custom">
						<div class="row justify-content-between align-items-center">
							<div class="col-md-7 order-2 order-md-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<span class="font-weight-bold text-color-dark opacity-8 text-4">MODERN</span>
								<h2 class="font-weight-bold text-9 mb-4">Mobile Advanced Apps</h2>
								<ul class="list list-icons pb-2 mb-4">
									<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
									<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
									<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Dolor sit amet, lorem ipsum consectetur adipiscing elit.</span></li>
								</ul>
								<a href="#" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">LEARN MORE</a>
							</div>
							<div class="col-md-4 text-center text-md-left order-1 order-md-2 mb-5 mb-md-0 mr-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<img src="img/smartphone-corporate-14-3.png" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-5 section-background overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" style="background-image: url(img/bg-corporate-14-1.jpg); background-size: cover; background-position: center;">
					<div class="container container-lg-custom my-5">
						<div class="row justify-content-center">
							<div class="col-md-10 col-xl-9 text-center">
								<h2 class="font-weight-bold text-color-light text-11 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Get in touch and learn how we can help</h2>
								<p class="font-weight-light text-color-light line-height-9 text-4 opacity-7 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat id sapien ac varius. Fusce hendrerit ligula a consectetur ullamcorper. Vestibulum varius pharetra lorem.</p>
								<a href="#" class="d-inline-flex align-items-center btn btn-primary font-weight-semibold px-5 btn-py-3 text-3 rounded appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">GET STARTED NOW <i class="fa fa-arrow-right ml-2 pl-1 text-5"></i></a>
							</div>
						</div>
					</div>
				</section>

				<div class="container container-lg-custom py-5 my-5">
					<div class="row mb-3">
						<div class="col text-center">
							<span class="font-weight-bold text-color-dark opacity-8 text-4">OUR BLOG</span>
							<h2 class="font-weight-semibold text-9 mb-3">What's happening</h2>
							<p class="text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="card border-0">
								<div class="card-body px-0 py-5">
									<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
									<div class="d-flex align-items-center">
										<img src="img/team/team-1.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="">
										<strong class="text-color-dark text-2">by John Doe</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="card border-0">
								<div class="card-body px-0 py-5">
									<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
									<div class="d-flex align-items-center">
										<img src="img/team/team-2.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="">
										<strong class="text-color-dark text-2">by Jessica Doe</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="card border-0">
								<div class="card-body px-0 py-5">
									<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
									<div class="d-flex align-items-center">
										<img src="img/team/team-3.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="">
										<strong class="text-color-dark text-2">by John Doe</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="card border-0">
								<div class="card-body px-0 py-5">
									<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
									<div class="d-flex align-items-center">
										<img src="img/team/team-4.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="">
										<strong class="text-color-dark text-2">by Jennifer Doe</strong>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0">
				<div class="container container-lg-custom my-4">
					<div class="row py-5">
						<div class="col-lg-4 mb-5 mb-lg-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Porto Template</h5>
							<p class="text-4 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Cras volutpat id sapien ac varius.</p>
							<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="d-inline-flex align-items-center btn btn-primary font-weight-semibold px-5 btn-py-3 text-3 rounded mt-2">PURCHASE PORTO</a>
						</div>
						<div class="col-lg-2 mb-4 mb-md-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
							<ul class="list list-icons list-icons-sm d-inline-flex flex-column">
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="page-services.html" class="link-hover-style-1 ml-1"> Our Services</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="about-us.html" class="link-hover-style-1 ml-1"> About Us</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contact Us</a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Contact Us</h5>
							<p class="text-4 mb-2"><span class="text-color-light">Address:</span> 1234 Street Name, City Name, USA</p>
							<p class="text-4 mb-2"><span class="text-color-light">Phone:</span> (123) 456-7890</p>
							<p class="text-4 mb-2"><span class="text-color-light">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a></p>
						</div>
						<div class="col-lg-3 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Follow Us</h5>
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-0 mt-lg-3">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>
					</div>porto.partials
				</div>
				<div class="container container-lg-custom">
					@include('porto.partials.footer-copyright.footer-copyright-61', ['key' => 'footer-copyright.footer-copyright-61'])
				</div>
			</footer>
@endsection
