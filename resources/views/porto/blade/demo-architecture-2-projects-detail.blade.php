@extends('porto.app')
@section('header')
@include('porto.partials.header.header-9')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-48')

				<div class="custom-page-wrapper pt-5 pb-1">
					<div class="spacer py-4 my-5"></div>
					<div class="container container-lg-custom">
						<div class="row">
							<div class="col-lg-8 col-xl-9 mb-5 mb-lg-0">
								<p class="custom-font-tertiary text-5 line-height-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
								<p class="text-3-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1700">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<div class="row py-2 my-4">
									<div class="col-md-6">
										<ul class="list list-icons list-icons-style-2 list-icons-lg mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900">
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Pellentesque ultricies nibh
											</li>
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Ultricies nibh pellen
											</li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="list list-icons list-icons-style-2 list-icons-lg mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2100">
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Ultricies nibh pellen
											</li>
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Pellentesque ultricies nibh
											</li>
										</ul>
									</div>
								</div>
								<p class="text-3-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec vestibulum quam. Nullam in ligula dictum, aliquam sem sed, gravida nibh. Ut commodo a turpis at ultricies. Integer vehicula volutpat sem, non pretium quam hendrerit sit amet. Sed molestie orci et sollicitudin gravida. Etiam quis odio erat. Aenean vestibulum sapien in ex sollicitudin fringilla. Curabitur consectetur pharetra arcu id fermentum. Etiam ut egestas ipsum. Donec sagittis diam ac semper tempor. Vestibulum non dolor consequat, ornare arcu vel, fermentum nibh. Praesent id dolor posuere, molestie enim eu, cursus purus.</p>
								<p class="text-3-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec vestibulum quam. Nullam in ligula dictum, aliquam sem sed, gravida nibh. Ut commodo a turpis at ultricies. Integer vehicula volutpat sem, non pretium quam hendrerit sit amet. Sed molestie orci et sollicitudin gravida. Etiam quis odio erat. Integer vehicula volutpat sem, non pretium quam hendrerit sit amet. Sed molestie orci et sollicitudin gravida. Etiam quis odio erat. </p>
								@include('porto.partials.lightbox.lightbox-2')
							</div>
							<div class="col-lg-4 col-xl-3">
								@include('porto.partials.sidebar.sidebar-5')
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
