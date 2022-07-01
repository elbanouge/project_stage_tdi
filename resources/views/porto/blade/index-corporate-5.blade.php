@extends('porto.app')
@section('header')
@include('porto.partials.header.header-339')
@endsection

@section('main')
<div role="main" class="main">
				
				<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['700px','700px','700px','550px','500px']" style="height: 700px;">
					<div class="owl-stage-outer">
						<div class=porto.partials
						
							<!-- Carousel Slide 1 -->
							@include('porto.partials.owl-item.owl-item-48')
							
							<!-- Carousel Slide 2 -->
							@include('porto.partials.owl-item.owl-item-49')
						
						</div>
					</div>
					<div class="owl-dots mb-5">
						<button role="button" class="owl-dot active"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
					</div>
				</div>

				<div class="container">
					<div class="row py-5 my-5">
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter">
							<h2 class="font-weight-normal text-6 line-heigh-2 mb-4"><strong class="font-weight-extra-bold">Who</strong> We Are</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id valorem ipsum dolor sit amet, consectetur adipiscinLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<p>Phasellus blandit massa enim. Nullam id varius elit. blandit massa enimariusius.</p>
							<a href="#" class="learn-more text-color-primary font-weight-semibold text-2">VIEW MORE<i class="pl-2 fas fa-chevron-right text-2"></i></a>
						</div>
						<div class="col-lg-8 mt-5 mt-lg-0">
							<div class="row">
								<div class="col-lg-6 mb-4 mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
									@include('porto.partials.feature-box.feature-box-276')
								</div>
								<div class="col-lg-6 mb-4 mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
									@include('porto.partials.feature-box.feature-box-277')
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 mb-4 mb-lg-0">
									@include('porto.partials.feature-box.feature-box-278')
								</div>
								<div class="col-lg-6">
									@include('porto.partials.feature-box.feature-box-279')
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<hr>

				<section class="section bg-color-light border-0 pb-0 m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">
								<h2 class="font-weight-normal text-6 pb-2 mb-4"><strong class="font-weight-extra-bold">Projects</strong> &amp; <strong class="font-weight-extra-bold">Clients</strong></h2>
							</div>
						</div>
					</div>
					<div class="image-gallery sort-destination full-width mb-0">
						<div class="iporto.partials
							<div class="image-gallery-item mb-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="700">
								<a href="portfolio-single-wide-slider.html">
									@include('porto.partials.thumb-info.thumb-info-497')
								</a>
							</div>
						</div>
						<div class="iporto.partials
							<div class="image-gallery-item mb-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
								<a href="portfolio-single-wide-slider.html">
									@include('porto.partials.thumb-info.thumb-info-498')
								</a>
							</div>
						</div>
						<div class="iporto.partials
							<div class="image-gallery-item mb-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
								<a href="portfolio-single-wide-slider.html">
									@include('porto.partials.thumb-info.thumb-info-499')
								</a>
							</div>
						</div>
						<div class="iporto.partials
							<div class="image-gallery-item mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
								<a href="portfolio-single-wide-slider.html">
									@include('porto.partials.thumb-info.thumb-info-500')
								</a>
							</div>
						</div>
						<div class="iporto.partials
							<div class="image-gallery-item mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
								<a href="portfolio-single-wide-slider.html">
									@include('porto.partials.thumb-info.thumb-info-501')
								</a>
							</div>
						</div>
					</div>
				</section>
				
				<div class="container">
					<div class="row py-5 my-5">
						<div class="col">
					
							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
								</div>
							</div>
							
						</div>
					</div>
				</div>

				<section class="section section-height-3 section-text-light bg-color-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								porto.partials
								<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': false, 'autoHeight': true}">
									<div>
										@include('porto.partials.testimonial.testimonial-117')
									</div>
									<div>
										@include('porto.partials.testimonial.testimonial-118')
									</div>
								</div>

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
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="link-hover-style-1 ml-1"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="link-hover-style-1 ml-1"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>porto.partials
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-23', ['key' => 'footer-copyright.footer-copyright-23'])
			</footer>
@endsection
