@extends('porto.app')
@section('header')
@include('porto.partials.header.header-352')
@endsection

@section('main')
<div role="main" class="main">
				<div class="container">
					<div class="row mt-5">
						<div class="col text-center">
							<div class="logo">
								<a href="index.html">
									<img width="100" height="48" src="img/logo-default-slim.png" alt="Porto">
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>
					<div class="row">
						<div class="col text-center">
							<h2 class="font-weight-normal text-7 mb-2"><strong class="font-weight-extra-bold">Our Website is Coming Soon</strong></h2>
							<p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
							<p class="mb-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>
					<div class="row justify-content-center mb-2">
						<div class="col-lg-6">
							<div class="progress-bars mt-4">
								<div class="progress-label text-2">
									<span><strong>Conception:</strong> Finished</span>
								</div>
								@include('porto.partials.progress.progress-74')
								<div class="progress-label text-2">
									<span><strong>Design</strong></span>
								</div>
								@include('porto.partials.progress.progress-75')
								<div class="progress-label text-2">
									<span><strong>Development</strong></span>
								</div>
								@include('porto.partials.progress.progress-76')
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>
					<div class="row justify-content-center pt-2 pb-4">
						<div class="col-lg-6">
							<h5 class="text-dark">Let me know when the site is done</h5>

							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>

							<div class="alert alert-danger d-none" id="newsletterError"></div>

							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="get">
								<div class="input-group input-group-lg">
									<input class="form-control h-auto" placeholder="E-mail Address" name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button type="submit" class="btn btn-primary btn-modern text-1">Subscribe</button>
									</span>
								</div>
							</form>	
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
						<div class="col-md-9 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">ABOUT US</h5>
							<p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos...</p>
							<p><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
							<div class="row pt-3">
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">BLOG</h5>
									<ul class="list list-icons list-icons-sm mb-0">
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-full-width.html">Blog Full Width</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-large-image.html">Blog Large Image</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-medium-image.html">Blog Medium Image</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-post.html">Single Post</a></li>
									</ul>
								</div>
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">PAGES</h5>
									<ul class="list list-icons list-icons-sm mb-0">
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-full-width.html">Full width</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-left-sidebar.html">Left sidebar</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-right-sidebar.html">Right sidebar</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-custom-header.html">Custom Header</a></li>
									</ul>
								</div>
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">PORTFOLIO</h5>
									<ul class="list list-icons list-icons-sm mb-0">
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-2-columns.html">2 Columns</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-3-columns.html">3 Columns</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-4-columns.html">4 Columns</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-single-wide-slider.html">Single Project</a></li>
									</ul>
								</div>
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">EXTRA</h5>
									<ul class="list list-icons list-icons-sm mb-0">
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-team.html">Team</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-services.html">Services</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-careers.html">Careers</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-faq.html">FAQ</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3 pb-1">CONTACT US</h5>
							<p class="text-8 text-color-light font-weight-bold">(800) 123-4567</p>
							<p class="mb-2">International: (333) 456-6670</p>
							<p class="mb-2">Fax: (222) 531-8999</p>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>
							<ul class="footer-social-icons social-icons mt-4">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-1', ['key' => 'footer-copyright.footer-copyright-1'])
			</footer>
@endsection
