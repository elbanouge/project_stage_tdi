@extends('porto.app')
@section('header')
@include('porto.partials.header.header-322')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section border-0 m-0" style="background-image: url(img/slides/slide-bg-8.jpg); background-size: cover; background-position: center; height: 600px;">
					<div class="container h-100">
						<div class="row align-items-center h-100">
							<div class="col">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<h1 class="position-relative text-color-dark text-5 line-height-5 font-weight-semibold px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
										<span class="position-absolute right-100pct top-50pct transform3dy-n50">
											<img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
										</span>
										DO YOU NEED A NEW
										<span class="position-absolute left-100pct top-50pct transform3dy-n50">
											<img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
										</span>
									</h1>
									<h1 class="text-color-dark font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">WEB DESIGN?</h1>
									<p class="text-4 text-color-dark font-weight-light mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">Check out our options and features</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="home-intro light border border-bottom-0 mb-0">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">
								<p class="font-weight-bold text-color-dark">
									The fastest way to grow your business with the leader in <span class="highlighted-word highlighted-word-animation-1 text-color-primary font-weight-semibold text-5">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-left text-lg-right">
									<a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold btn-py-2 px-4">Get Started Now</a>
									<div class="learn-more">or <a href="index.html" class="font-weight-bold">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container py-5 my-4">
					<div class="row text-center py-3">
						<div class="col-md-10 mx-md-auto">
							<h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
								<span>Porto is </span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">incredibly</b>
									<b>especially</b>
									<b>extremely</b>
								</span>
								<span> beautiful and fully responsive.</span>
							</h1>
							<p class="lead appear-animation mb-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
							</p>
						</div>
					</div>
				</div>

				<section class="section section-height-5 bg-primary border-0 pt-5 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row mt-4 mt-lg-5">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								@include('porto.partials.feature-box.feature-box-240')
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								@include('porto.partials.feature-box.feature-box-241')
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								@include('porto.partials.feature-box.feature-box-242')
							</div>
						</div>
						<div class="row mt-lg-4">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								@include('porto.partials.feature-box.feature-box-243')
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								@include('porto.partials.feature-box.feature-box-244')
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								@include('porto.partials.feature-box.feature-box-245')
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-color-grey-scale-1 border-0 pt-0 pt-md-5 m-0">
					<div class="container">
						<div class="row align-items-center justify-content-center pb-4 pb-lg-0">
							<div class="col-lg-6 order-2 order-lg-1 pr-5 pt-4 pt-lg-0 mt-md-5 mt-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
								<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Who</strong> We Are</h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id valorem ipsum dolor sit amet, consectetur adipiscinorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<p class="pb-2 mb-4">Phasellus blandit massa enim. Nullam id varius elit. blandit massa enimariusius.</p>
								<a href="#" class="btn btn-dark font-weight-semibold btn-py-2 px-5">Our History</a>
							</div>
							<div class="col-9 col-lg-6 order-1 order-lg-2 scale-6 pb-5 pb-lg-0 mt-0 mt-md-4 mb-5 mb-lg-0">
								<img class="img-fluid appear-animation" src="img/desktop-device-1.png" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" data-plugin-options="{'accY': -400}" alt="">
							</div>porto.partials
						</div>
					</div>
				</section>porto.partials

				<div class="container">
					<div class="fporto.partialst-5 mb-4">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.featured-box.featured-box-440', ['key' => 'featured-box.featured-box-440'])
							</div>
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.featured-box.featured-box-441', ['key' => 'featured-box.featured-box-441'])
							</div>
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.featured-box.featured-box-442', ['key' => 'featured-box.featured-box-442'])
							</div>
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.featured-box.featured-box-443', ['key' => 'featured-box.featured-box-443'])
							</div>
						</div>
					</div>
				</div>porto.partials

				<section class="section section-height-3 section-background border-0 m-0 appear-animation" data-appear-animation="fadeIn" style="background-image: url(img/parallax/parallax-10.jpg); background-size: cover; background-position: center;">
					<div class="conporto.partials
						<div class="row">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

								@include('porto.partials.owl-carousel.owl-carousel-304')

							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row pt-5 mt-4">
						<div class="col">
							<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Latest</strong> Posts</h2>
						</div>
					</div>
					<div class="row recent-posts pb-5 mb-4">
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<article>
								<div class="row">
									<div class="col-auto pr-0">
										<div class="date">
											<span class="day text-color-dark font-weight-extra-bold">15</span>
											<span class="month text-1">JAN</span>
										</div>
									</div>
									<div class="col pl-1">
										<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
											<span class="month text-1">JAN</span>
										</div>
									</div>
									<div class="col pl-1">
										<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
											<span class="month text-1">JAN</span>
										</div>
									</div>
									<div class="col pl-1">
										<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
											<span class="month text-1">JAN</span>
										</div>
									</div>
									<div class="col pl-1">
										<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
									</div>
								</div>
							</article>
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
						<div class="col-md-6 mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3">
								<img alt="Porto Website Template" src="img/logo-footer.png" class="opacity-7 bottom-4" height="32">
							</a>
							<p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-6">
							<h5 class="text-3 mb-3">CONTACT US</h5>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-icons list-icons-lg">
										<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
										<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
										<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-icons list-icons-sm">
										<li>porto.partialsle-right"></i><a href="page-faq.html" class="link-hover-style-1 ml-1"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="link-hover-style-1 ml-1"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-23', ['key' => 'footer-copyright.footer-copyright-23'])
			</footer>
@endsection
