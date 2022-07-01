@extends('porto.app')
@section('header')
@include('porto.partials.header.header-10')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-50')

				<div class="custom-page-wrapper pt-5 pb-1">
					<div class="spacer py-4 my-5"></div>
					<div class="container container-lg-custom">
						<div class="row">
							<div class="col-lg-8 col-xl-9 order-1 order-lg-2">
								<div class="float-right pl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900">
									<img width="137" src="img/demos/architecture-2/icons/house-plant.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}">
								</div>
								<p class="custom-font-tertiary text-5 line-height-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
								<p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1700">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<img src="img/demos/architecture-2/generic/generic-14.jpg" class="img-fluid mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2100" alt="">
								<img src="img/demos/architecture-2/generic/generic-15.jpg" class="img-fluid appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" alt="">
							</div>
							<div class="col-lg-4 col-xl-3 order-2 order-lg-1">
								@include('porto.partials.sidebar.sidebar-6')
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
