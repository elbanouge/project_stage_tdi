@extends('porto.app')
@section('header')
@include('porto.partials.header.header-118')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-149')

				<section class="section section-with-shape-divider border-0 pb-2 pb-lg-5 m-0">
					<div class="shape-divider shape-divider-bottom" style="height: 120px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 2000 120" preserveaspectratio="xMinYMin">
							<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 "></polygon>
						</svg>
					</div>
					<div class="container pt-3 pb-5 mb-5">
						<div class="row mb-lg-4">
							<div class="col">
								<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">WHAT WE DO</h2>
								<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Automotive</h3>
								<p class="custom-font-secondary custom-font-size-1 line-height-7 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-7 col-xl-6 pr-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
								@include('porto.partials.owl-carousel.owl-carousel-70')
							</div>
							<div class="col-lg-5 col-xl-6">
								<p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui. </p>
								<p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum. </p>
								<ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
									<li class="font-weight-semibold text-color-dark appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Pellentesque ultricies nibh</li>
									<li class="font-weight-semibold text-color-dark appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Ultricies nibh pellen</li>
									<li class="font-weight-semibold text-color-dark appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Ultricies nibh pellen</li>
								</ul>
								<a href="#specifications" data-hash data-hash-offset="100" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none pl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2000" data-plugin-options="{'accY': 100}">
									VIEW SPECIFICATIONS
									<svg class="ml-2" version="1.1" viewbox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</section>

				<div id="specifications" class="container py-4 my-5">
					<div class="row">
						<div class="col">
							<h3 class="font-weight-bold text-transform-none text-9 line-height-2 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Specifications</h3>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="table-responsive appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
								@include('porto.partials.table.table')
							</div>
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
