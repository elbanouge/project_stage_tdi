@extends('porto.app')
@section('header')
<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 164, 'stickySetTop': '-164px', 'stickyChangeLogo': false}">
				<div class="header-body border-0">
					<div class="header-top header-top-default border-bottom-0 bg-color-primary">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills text-uppercase text-2">
												<li class="nav-item nav-item-anim-icon">
													<a class="nav-link pl-0 text-light opacity-7" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
												</li>
												<li clasporto.partials-anim-icon">
													<a class="nav-link text-light opacity-7 pr-0" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										@include('porto.partials.header-social-icons.header-social-icons-15')
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row py-3">
							<div class="header-column justify-content-start w-50 order-md-1 d-none d-md-flex">
								<div class="header-row">
									<ul class="header-extra-info">
										<li class="m-0">
											<div class="feature-box feature-box-style-2 align-items-center">
												<div class="feature-box-icon">
													<i class="far fa-clock text-7 p-relative"></i>
												</div>
												<div class="feature-box-info">
													<p claporto.partials-semibold line-height-5 text-2">MON - FRI: 10:00 - 18:00<br>SAT - SUN: 10:00 - 14:00</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="header-column justify-content-start justify-content-md-center order-1 order-md-2">
								<div class="header-row">
									@include('porto.partials.header-logo.header-logo-46')
								</div>
							</div>
							<div class="header-column justify-content-end w-50 order-2 order-md-3">
								<div class="header-row">
									<ul class="header-extra-info">
										<li class="m-0">
											<div class="feature-box reverse-allres feature-box-style-2 align-items-center">
												<div class="feature-box-icon">
													<i class="fab fa-whatsapp text-7 p-relative" style="top: -2px;"></i>
												</div>
												<div class="feature-box-info">
													<p class="pb-0 font-weight-semibold line-height-5 text-2">(123) 456-7890<br>(123) 456-7891</p>
												</div>
											</div>
										</li>
									</ul>
								</div>porto.partials
							</div>
						</div>
					</div>
					<div class="header-nav-bar header-nav-bar-top-border bg-light">
						<div class="header-container container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										@include('porto.partials.header-nav.header-nav-302')
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
@endsection

@section('main')
<div role="main" class="main">
				<section class="section bg-color-light-scale-2 position-relative border-0 m-0">
					<div class="position-absolute top-0 left-0 w-50pct w-lg-auto d-none d-xl-block">
						<img src="img/slides/slide-corporate-8-1-1.jpg" class="w-100 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000" data-appear-animation-duration="1s" alt="">
					</div>
					<div class="position-absolute top-0 right-0 w-50pct w-lg-auto d-none d-xl-block">
						<img src="img/slides/slide-corporate-8-1-2.jpg" class="w-100 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000" data-appear-animation-duration="1s" alt="">
					</div>
					<div class="container py-5 my-5">
						<div class="row justify-content-center py-3">
							<div class="col-lg-7 text-center">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<h3 class="position-relative text-color-dark text-5 line-height-5 font-weight-semibold ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
										<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
											<img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
										</span>
										PORTO TEMPLATE
										<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
											<img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
										</span>
									</h3>
									<h1 class="text-color-dark font-weight-extra-bold text-10 text-md-12-13 line-height-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">INCREDIBLE DESIGNS</h1>
									<p class="text-4-5 text-color-dark font-weight-light opacity-7 text-center mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Porto is a huge success in the one of world's largest MarketPlace.</p>
									<a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GET STARTED NOW <i class="fas fa-arrow-right ml-2"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="home-intro home-intro-quaternary" id="home-intro">
					<div class="container">

						<div class="row text-center">
							<div class="col">
								<p class="mb-0">
									The fastest way to grow your business with the leader in <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-light text-color-light font-weight-semibold text-5">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
						</div>

					</div>
				</div>
				<div class="container">
					<div class="row align-items-center mb-5">
						<div class="col-lg-7 pr-5 appear-animation" data-appear-animation="fadeInRightShorter">
							<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Who </strong>We Are</h2>
							<p class="lead pr-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enikklam id valorem ipsum dolor sit amet, consectetur adipiscinLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<p class="mb-4">Phasellus blandit massa enim. Nullam id varius elit. blandit massa enim  d varius blandit massa enimariusi d varius elit. blandit massa enimariud varius elit. blandit massa enimariusisi ariusius.</p>
							<a class="btn btn-light text-uppercase text-primary text-1 py-2 px-4 mb-1" href="#"><strong>VIEW MORE</strong><i class="fas fa-chevron-right text-2 pl-2"></i></a>
						</div>
						<div class="col-lg-5">
							<div class="row mt-5 mt-lg-0">
								<div class="col-md-8 col-lg-6 text-center text-lg-left mx-auto">
									<img class="img-fluid m-3 my-0 mt-lg-5 pt-lg-5 appear-animation" src="img/office/our-office-4.jpg" alt="Office" data-appear-animation="expandIn" data-appear-animation-delay="200">
								</div>
								<div class="col-md-8 col-lg-6 pl-lg-0 text-center text-lg-left mx-auto">
									<img class="img-fluid m-3 my-0 appear-animation" src="img/office/our-office-5.jpg" alt="Office" data-appear-animation="expandIn" data-appear-animation-delay="400">
									<img class="img-fluid m-3 my-0 appear-animation" src="img/office/our-office-7.jpg" alt="Office" data-appear-animation="expandIn" data-appear-animation-delay="200">
								</div>
							</div>
						</div>
					</div>
				</div>
				<section class="section bg-color-grey-scale-1 section-height-3 section-no-border appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row">
							<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-normal text-6 mb-5">Our <strong class="font-weight-extra-bold">Services</strong></h2>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								<div class="feature-box feature-box-secondary feature-box-style-4">
									<div class="feature-box-icon">
										<i class="icon-user-following icons text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 font-weight-bold">Customer Support</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
								<div class="feature-box feature-box-secondary feature-box-style-4">
									<div class="feature-box-icon">
										<i class="icon-layers icons text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 font-weight-bold">Sliders</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="feature-box feature-box-secondary feature-box-style-4">
									<div class="feature-box-icon">
										<i class="icon-calculator icons text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 font-weight-bold">HTML5</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-lg-3">
							<div class="col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								<div class="feature-box feature-box-secondary feature-box-style-4">
									<div class="feature-box-icon">
										<i class="icon-star icons text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 font-weight-bold">Icons</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
								<div class="feature-box feature-box-secondary feature-box-style-4">
									<div class="feature-box-icon">
										<i class="icon-drop icons text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 font-weight-bold">Colors</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="feature-box feature-box-secondary feature-box-style-4">
									<div class="feature-box-icon">
										<i class="icon-mouse icons text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 font-weight-bold">Buttons</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row pt-4 mt-5">
						<div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
							<h2 class="font-weight-normal text-6 mb-5">Our <strong class="font-weight-extra-bold">Prices</strong></h2>
						</div>
					</div>

					@include('porto.partials.pricing-table.pricing-table-8')
					porto.partials
				</div>
				<section class="section bg-color-grey-scale-1 section-height-3 section-no-border section-center my-5 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row justify-content-center">
							<div class="coporto.partialstion" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								@include('porto.partials.owl-carousel.owl-carousel-338')
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row mt-4">
						<div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
							<h2 class="font-weight-normal text-6 mt-3 mb-5">Latest <strong class="font-weight-extra-bold">Posts</strong></h2>
						</div>
					</div>
					<div class="row recent-posts pb-4 mb-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<article>
								<div class="row">
									<div class="col-auto pr-0">
										<div class="date">
											<span class="day text-color-dark font-weight-extra-bold">15</span>
											<span class="month bg-color-primary font-weight-semibold text-color-light text-1">JAN</span>
										</div>
									</div>
									<div class="col pl-1">
										<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
										<a class="btn btn-light text-uppercase text-primary text-1 py-2 px-3 mb-1 mt-2" href="#"><strong>VIEW MORE</strong><i class="fas fa-chevron-right text-2 pl-2"></i></a>
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
											<span class="month bg-color-primary font-weight-semibold text-color-light text-1">JAN</span>
										</div>
									</div>
									<div class="col pl-1">
										<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
										<a class="btn btn-light text-uppercase text-primary text-1 py-2 px-3 mb-1 mt-2" href="#"><strong>VIEW MORE</strong><i class="fas fa-chevron-right text-2 pl-2"></i></a>
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
											<span class="month bg-color-primary font-weight-semibold text-color-light text-1">JAN</span>
										</div>
									</div>
									<div class="col pl-1">
										<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
										<a class="btn btn-light text-uppercase text-primary text-1 py-2 px-3 mb-1 mt-2" href="#"><strong>VIEW MORE</strong><i class="fas fa-chevron-right text-2 pl-2"></i></a>
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
											<span class="month bg-color-primary font-weight-semibold text-color-light text-1">JAN</span>
										</div>
									</div>
									<div class="col pl-1">
										<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
										<a class="btn btn-light text-uppercase text-primary text-1 py-2 px-3 mb-1 mt-2" href="#"><strong>VIEW MORE</strong><i class="fas fa-chevron-right text-2 pl-2"></i></a>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
				<hr>
				<div class="container">
					<div class="row my-5">
						<div class="col my-3">
					
							<div class="row text-center my-3">
								@include('porto.partials.owl-carousel.owl-carousel-339')
							</div>
		
						</div>
					</div>
				</div>
			</div>
@endsection

@section('footer')
<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							<h5 class="text-3 mb-3">ABOUT US</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna semper scelerisque.</p>
							<p class="mb-0">Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis ptent taciti sociosqu ad litora...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-3 mb-3">RECENT POSTS</h5>
							<ul class="list-unstyled mb-0">
								<li class="media mb-3 pb-1">
									<a href="#">
										<img class="mr-3 rounded-circle" src="img/office/our-office-4-square.jpg" alt="" style="max-width: 70px;">
									</a>
									<div class="media-body">
										<a href="#">
											<p class="text-3 text-color-light opacity-8 mb-1">Lorem ipsum dolor sit, consectetur adipiscing elit.</p>
											<p class="text-2 mb-0">12:53 AM Dec 19th</p>
										</a>
									</div>
								</li>
								<li class="media">
									<a href="#">
										<img class="mr-3 rounded-circle" src="img/office/our-office-5-square.jpg" alt="" style="max-width: 70px;">
									</a>
									<div class="media-body">
										<a href="#">
											<p class="text-3 text-color-light opacity-8 mb-1">Lorem ipsum dolor sit, consectetur adipiscing elit.</p>
											<p class="text-2 mb-0">12:53 AM Dec 19th</p>
										</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-md-0">
							<h5 class="text-3 mb-3">RECENT COMMENTS</h5>
							<ul class="list-unstyled mb-0">
								<li class="mb-3 pb-1">
									<a href="#">
										<p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ml-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
										<p class="text-2 mb-0">12:55 AM Dec 19th</p>
									</a>
								</li>
								<li>
									<a href="#">
										<p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ml-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
										<p class="text-2 mb-0">12:55 AM Dec 19th</p>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3">TAGS</h5>
							<p>
								<a hreporto.partialsadge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2">DESIGN</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2">CODE</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2">LIFESTYLE</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2">BRANDS</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2">PROMO</span></a>
							</p>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-1', ['key' => 'footer-copyright.footer-copyright-1'])
			</footer>
@endsection
