@extends('porto.app')
@section('header')
@include('porto.partials.header.header-119')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-150')

				<section class="section section-with-shape-divider border-0 pb-2 pb-lg-5 m-0">
					<div class="shape-divider shape-divider-bottom" style="height: 120px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 2000 120" preserveaspectratio="xMinYMin">
							<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 "></polygon>
						</svg>
					</div>
					<div class="container pt-3 pb-5 mb-5">
						<div class="row pb-1 pb-lg-3 mb-lg-4">
							<div class="col">
								@include('porto.partials.thumb-info.thumb-info-162')
								<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">WHAT WE DO</h2>
								<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Automotive</h3>
								<p class="custom-font-secondary custom-font-size-1 line-height-7 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod.</p>
								<p class="pr-lg-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui.</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-7 col-xl-6 pr-lg-5 mb-4 mb-lg-0">
								<img src="img/demos/industry-factory/generic/generic-3.jpg" class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000" alt="">
							</div>
							<div class="col-lg-5 col-xl-6">
								<p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui. </p>
								<p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum. </p>
								<ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
									<li class="font-weight-semibold text-color-dark appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Pellentesque ultricies nibh</li>
									<li class="font-weight-semibold text-color-dark appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="350"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Ultricies nibh pellen</li>
									<li class="font-weight-semibold text-color-dark appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Ultricies nibh pellen</li>
									<li class="font-weight-semibold text-color-dark appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="650"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Pellentesque ultricies nubh</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container pt-2">
					<div class="row justify-content-center pt-4 mt-5">
						<div class="col-lg-8 text-center">
							<div class="overflow-hidden">
								<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">HOW WE WORK</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Top Working Process</h3>
							</div>
							<p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							@include('porto.partials.process.process-2')

						</div>
					</div>
				</div>

				<section class="section section-height-3 overlay overlay-show overlay-color-primary overlay-op-8 border-0 m-0" style="background-image: url(img/demos/industry-factory/backgrounds/background-2.jpg); background-size: cover; background-position: center;">
					<div class="container py-3">
						<div class="row align-items-center justify-content-center text-center text-lg-left">
							<div class="col-md-8 col-lg-9 mb-4 mb-lg-0">
								<h2 class="text-color-light font-weight-bold custom-positive-ls-5px mb-0">Get Your Next Project Done!</h2>
							</div>
							<div class="col-lg-3 text-lg-right">
								<a href="demo-industry-factory-contact.html" class="btn custom-svg-btn-style-1 custom-svg-btn-style-1-light custom-svg-btn-style-1-light-solid text-color-dark">
									<svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 210 70" preserveaspectratio="none">
										<polygon fill="transparent" stroke="#FFF" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 "></polygon>
									</svg>
									GET A QUOTE
								</a>
							</div>
						</div>
					</div>
				</section>

				<div class="container pt-4 my-5">
					<div class="row">
						<div class="col-lg-6 col-xl-5 mb-5 mb-lg-0">
							<div class="overflow-hidden pt-lg-3 mb-2 mt-lg-4">
								<h2 class="font-weight-bold text-11 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Related Services</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<h3 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">THE LARGEST METALS MANUFACTURING</h3>
							</div>
							<p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
						</div>
						<div class="col-lg-6 col-xl-7 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
							@include('porto.partials.owl-carousel.owl-carousel-71')
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="section section-with-shape-divider border-0 custom-bg-lighten-grey-1 pt-5 pb-0 m-0">
				<div class="shape-divider shape-divider-reverse-x" style="height: 120px;">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 2000 120" preserveaspectratio="xMinYMin">
						<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 "></polygon>
					</svg>
				</div>
				<div class="container pt-lg-5 mt-5">
					<div class="row">
						<div class="col-lg-3 mb-5 mb-lg-0">
							<a href="demo-industry-factory.html">
								<img src="img/demos/industry-factory/logo-light.png" class="img-fluid mt-5 mb-4" alt="Demo Industry &amp; Factory">
							</a>
							<p class="mb-0"><strong class="text-color-light">Porto Industrial, Factory, Manufacturing</strong></p>
							<p>Advanced Template LTD.</p>
							<ul class="social-icons social-icons-medium">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter mx-2"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-4 offset-lg-1 mb-5 mb-lg-0">
							<h4 class="text-color-light font-weght-bold positive-ls-2 custom-font-size-2">USEFUL LINKS</h4>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li class="mb-0"><a href="#">Contact Us</a></li>
										<li class="mb-0"><a href="#">Our Services</a></li>
										<li class="mb-0"><a href="#">Payment Methods</a></li>
										<li class="mb-0"><a href="#">Services Guide</a></li>
										<li class="mb-0"><a href="#">FAQs</a></li>
										<li class="mb-0"><a href="#">Service Support</a></li>
										<li class="mb-0"><a href="#">Privacy</a></li>
										<li class="mb-0"><a href="#">About Porto</a></li>
										<li class="mb-0"><a href="#">Our Guarantees</a></li>
										<li class="mb-0"><a href="#">Terms And Conditions</a></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li class="mb-0"><a href="#">Privacy Policy</a></li>
										<li class="mb-0"><a href="#">Return Policy</a></li>
										<li class="mb-0"><a href="#">Intellectual Property Claims</a></li>
										<li class="mb-0"><a href="#">Sitemap</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 offset-lg-1 mb-5 mb-lg-0">
							<h4 class="text-color-light font-weght-bold positive-ls-2 custom-font-size-2">OPENING HOURS</h4>
							<ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
								<li><a href="#">Mon - Fri: 8:30 am to 5:00 pm</a></li>
								<li><a href="#">Saturday: 9:30 am to 1:00 pm</a></li>
								<li><a href="#">Sunday: Closed</a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-18', ['key' => 'footer-copyright.footer-copyright-18'])
			</footer>
@endsection
