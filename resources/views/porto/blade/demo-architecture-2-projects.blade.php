@extends('porto.app')
@section('header')
@include('porto.partials.header.header-9')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-49')

				<div class="custom-page-wrapper pt-5 pb-1">
					<div class="container container-lg-custom pt-5 mt-5">
						<div class="row py-5 mb-4">
							<div class="col text-center">
								<div class="position-absolute transform3dx-n50 left-50pct z-index-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2000" style="top: 100px;">
									<h2 class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">PROJECTS</h2>
								</div>
								<div class="overflow-hidden mb-2">
									<h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1500">OUR WORK</h2>
								</div>
								<div class="overflow-hidden mb-3">
									<h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1700">Selected Portfolio</h3>
								</div>
								<img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1900" alt="">
							</div>
						</div>
						<div class="row mb-4">
							<div class="col">
								@include('porto.partials.nav-pills.nav-pills')
								<div class="sort-destination-loader sort-destination-loader-showing appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2300">
									<div id="loadMoreWrapper" class="row row-gutter-sm px-0 image-gallery sort-destination" data-sort-id="portfolio" data-total-pages="3">
										<div class="col-sm-6 col-md-4 isotope-item design-planning">
											@include('porto.partials.portfolio-item.portfolio-item-12', ['key' => 'portfolio-item.portfolio-item-12'])
										</div>
										<div class="col-sm-6 col-md-4 isotope-item interior-design">
											@include('porto.partials.portfolio-item.portfolio-item-12', ['key' => 'portfolio-item.portfolio-item-13'])
										</div>
										<div class="col-sm-6 col-md-4 isotope-item exterior-design">
											@include('porto.partials.portfolio-item.portfolio-item-12', ['key' => 'portfolio-item.portfolio-item-14'])
										</div>
										<div class="col-sm-6 col-md-4 isotope-item construction-drawings">
											@include('porto.partials.portfolio-item.portfolio-item-12', ['key' => 'portfolio-item.portfolio-item-15'])
										</div>
										<div class="col-sm-6 col-md-4 isotope-item construction-drawings">
											@include('porto.partials.portfolio-item.portfolio-item-12', ['key' => 'portfolio-item.portfolio-item-16'])
										</div>
										<div class="col-sm-6 col-md-4 isotope-item design-planning">
											@include('porto.partials.portfolio-item.portfolio-item-12', ['key' => 'portfolio-item.portfolio-item-17'])
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center appear-animation" data-appear-animation="fadeInUpShorter">
							<div id="loadMoreBtnWrapper" class="row text-center mt-3">
								<div class="col">
									<div id="loadMoreLoader" class="load-more-loader">
										<div class="bounce-loader">
											<div class="bounce1"></div>
											<div class="bounce2"></div>
											<div class="bounce3"></div>
										</div>
									</div>
									<button id="loadMore" class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3 mb-5">LOAD MORE+
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-primary border-0">
				<div class="container container-lg-custom pt-5 pb-3">
					<div class="row py-5">
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="font-weight-extra-bold text-5 ls-0">Address</h4>
							<ul class="list list-unstyled">
								<li class="mb-1">
									12345  Porto Blvd.
								</li>
								<li class="mb-1">
									Suite 1500
								</li>
								<li>
									Los Angeles, California 90000
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="font-weight-extra-bold text-5 ls-0">Contacts</h4>
							<ul class="list-unstyled">
								<li>
									<span class="d-block line-height-2 mb-1">OFFICE</span>
									<a href="tel:+1234567890" class="text-color-light text-6 text-lg-4 text-xl-6 font-weight-bold">800-123-4568</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="font-weight-extra-bold text-5 ls-0">Useful Links</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-architecture-2-services.html">Our Services</a>
								</li>
								<li class="mb-1">
									<a href="#">Payment Methods</a>
								</li>
								<li class="mb-1">
									<a href="#">Services Guide</a>
								</li>
								<li>
									<a href="#">FAQs</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="font-weight-extra-bold text-5 ls-0">Services</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-architecture-2-services-detail.html">Design &amp; Planning</a>
								</li>
								<li class="mb-1">
									<a href="demo-architecture-2-services-detail.html">Interior Design</a>
								</li>
								<li class="mb-1">
									<a href="demo-architecture-2-services-detail.html">Exerior Design</a>
								</li>
								<li>
									<a href="demo-architecture-2-services-detail.html">Construction Drawings</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-md-0">
							<h4 class="font-weight-extra-bold text-5 ls-0">About</h4>
							<ul class="list-unstyled">
								<li class="mb-1">
									<a href="demo-architecture-2-about-us.html">About Us</a>
								</li>
								<li>
									<a href="demo-architecture-2-contact.html">Send a Message</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h4 class="font-weight-extra-bold text-5 ls-0">Follow Us</h4>
							<ul class="social-icons social-icons-clean social-icons-icon-light">
								<li>
									<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-4', ['key' => 'footer-copyright.footer-copyright-4'])
			</footer>
@endsection
