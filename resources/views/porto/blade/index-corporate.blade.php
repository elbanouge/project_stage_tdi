@extends('porto.app')
@section('header')
@include('porto.partials.header.header-345')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.owl-carousel.owl-carousel-344')

				<div class="home-intro mb-0" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">
								<p>
									The fastest way to grow your business with the leader in <span class="highlighted-word highlighted-word-animation-1 text-color-primary font-weight-semibold text-5">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-left text-lg-right">
									<a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now!</a>
									<div class="learn-more">or <a href="index.html">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<section class="section section-parallax section-height-3 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 7, 'parallaxHeight': '150%', 'offset': 100}" data-image-src="img/parallax/parallax-corporate-1-1.jpg">
					<div class="container pb-5 mb-5">
						<div class="row text-center pb-5 mb-5">
							<div class="col-md-10 mx-md-auto pb-5 mb-5">
								<h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
									<span>Porto is </span>
									<span class="word-rotator-words bg-dark">
										<b class="is-visible">incredibly</b>
										<b>especially</b>
										<b>extremely</b>
									</span>
									<span> beautiful and fully responsive.</span>
								</h1>
								<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
								</p>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-normal text-center text-6 pb-3">Our <strong class="font-weight-extra-bold">Services</strong></h2>
							</div>
						</div>
						<div class="row mb-lg-4">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								@include('porto.partials.feature-box.feature-box-234')
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								@include('porto.partials.feature-box.feature-box-235')
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								@include('porto.partials.feature-box.feature-box-236')
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								@include('porto.partials.feature-box.feature-box-237')
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								@include('porto.partials.feature-box.feature-box-252')
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								@include('porto.partials.feature-box.feature-box-253')
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row counters counters-sm py-4 mt-5">
						<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
							@include('porto.partials.counter.counter-29')
						</div>
						<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
							@include('porto.partials.counter.counter-30')
						</div>
						<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
							@include('porto.partials.counter.counter-31')
						</div>
						<div class="col-sm-6 col-lg-3">
							@include('porto.partials.counter.counter-32')
						</div>
					</div>

					<hr class="solid my-5">

					<div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="col-md-4 mb-4 mb-md-0">
							<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="img/layout-styles.png" alt="layout styles">
						</div>
						<div class="col-md-8 pl-md-5">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Layout</strong> Styles &amp; Variants</h2>
							<p class="text-4">There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template, navigate in our preview and see the header variations, the colors, and the page content types that you will be able to use.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
						</div>
					</div>

					<hr class="solid my-5">

					<div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Exclusive</strong> Style Switcher</h2>
							<p class="text-4">With our exlusive Style Switcher you will be able to choose any color you want for your website, choose the layout style (wide / boxed), website type (one page / normal), then generate the css that will be compiled by a {less} proccessor.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
						</div>
						<div class="col-md-4 px-5 px-md-3">
							<img class="img-fluid scale-2 my-4" src="img/style-switcher.png" alt="style switcher">
						</div>
					</div>

					<hr class="solid my-5">

					<div class="row text-center">
						<div class="col">
							<h2 class="font-weight-normal text-6 mt-4">Our <strong class="font-weight-extra-bold">Portfolio</strong></h2>
						</div>
					</div>
				</div>

				<div class="image-gallery sort-destination full-width mb-0">
					<div class="isotope-item">
						<div class="image-gallery-item mb-0">
							<a href="portfolio-single-wide-slider.html">
								@include('porto.partials.thumb-info.thumb-info-390')
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0">
							<a href="portfolio-single-wide-slider.html">
								@include('porto.partials.thumb-info.thumb-info-391')
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0">
							<a href="portfolio-single-wide-slider.html">
								@include('porto.partials.thumb-info.thumb-info-392')
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0">
							<a href="portfolio-single-wide-slider.html">
								@include('porto.partials.thumb-info.thumb-info-393')
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0">
							<a href="portfolio-single-wide-slider.html">
								@include('porto.partials.thumb-info.thumb-info-394')
							</a>
						</div>
					</div>
				</div>

				<section class="section section-height-3 section-background section-text-light section-center overlay overlay-show overlay-op-9 overlay-color-primary m-0 appear-animation" data-appear-animation="fadeIn" style="background-image: url(img/bg-corporate-1-1.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								@include('porto.partials.owl-carousel.owl-carousel-345')
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row text-center pt-4 mt-5">
						<div class="col">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2">
								<span>We're not the only ones </span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
								<span> about Porto Template...</span>
							</h2>
							<h4 class="text-primary lead tall text-4">40,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4>
						</div>
					</div>

					<div class="row text-center mt-5 pb-5 mb-5">
						@include('porto.partials.owl-carousel.owl-carousel-346')
					</div>
				</div>

				@include('porto.partials.call-to-action.call-to-action-33')

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-0" style="background: url('img/parallax/parallax-8.jpg'); background-size:cover; background-position: 0 100%;">
				<div class="container py-4">
					<div class="row justify-content-md-center py-5 mt-3">
						<div class="col-md-12 col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start mb-5 mb-lg-0">
							<a href="index.html"><img src="img/logo-flat-light.png" alt="Logo" class="img-fluid" style="max-width: 100px;"></a>
						</div>
						<div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
							<ul class="list list-unstyled">
								<li class="mb-1"><a href="page-services.html" class="link-hover-style-1"> Our Services</a></li>
								<li class="mb-1"><a href="about-us.html" class="link-hover-style-1"> About Us</a></li>
								<li class="mb-1"><a href="contact-us.html" class="link-hover-style-1"> Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Links</h5>
							<ul class="list list-unstyled">
								<li class="mb-1"><a href="page-faq.html" class="link-hover-style-1"> FAQ's</a></li>
								<li class="mb-1"><a href="sitemap.html" class="link-hover-style-1"> Sitemap</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-5 text-center text-lg-left">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
									</span>
								</div>
							</form>
                            <p class="mt-3 mb-0 text-center text-lg-left">
                                <i class="fab fa-whatsapp text-color-primary"></i><span class="text-color-light opacity-7 pl-2">(800) 123-4567</span>
                                <i class="far fa-envelope text-color-primary ml-4"></i><a href="mailto:mail@example.com" class="opacity-7 pl-2 text-color-light">mail@example.com</a>
                            </p>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-60', ['key' => 'footer-copyright.footer-copyright-60'])
			</footer>
@endsection
