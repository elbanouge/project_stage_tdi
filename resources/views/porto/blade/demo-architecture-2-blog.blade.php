@extends('porto.app')
@section('header')
@include('porto.partials.header.header-7')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-46')

				<div class="custom-page-wrapper pt-5">
					<div class="spacer py-4 my-5"></div>
					<div class="container container-lg-custom">
						<div class="row">
							<div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">

								<article class="mb-5">
									<div class="card border-0 border-radius-0">
										<div class="card-body p-0 z-index-1">
											<a href="demo-architecture-2-blog-post.html">
												<img class="card-img-top border-radius-0 hover-effect-2" src="img/blog/wide/blog-37.jpg" alt="Card Image">
											</a>
											<p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
												<time pubdate datetime="2021-01-10">10 Jan 2021</time> 
												<span class="opacity-3 d-inline-block px-2">|</span> 
												3 Comments 
												<span class="opacity-3 d-inline-block px-2">|</span> 
												John Doe
											</p>
											<div class="card-body p-0">
												<h4 class="card-title mb-3 text-5 font-weight-semibold"><a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3-5" href="demo-architecture-2-blog-post.html">Lorem ipsum dolor sit a met</a></h4>
												<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...</p>
												<a href="demo-architecture-2-blog-post.html" class="custom-read-more d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none pl-0">
													READ MORE +
												</a>
											</div>
										</div>
									</div>
								</article>

								<hr class="mb-5">

								<article class="mb-5">
									<div class="card border-0 border-radius-0">
										<div class="card-body p-0 z-index-1">
											<a href="demo-architecture-2-blog-post.html">
												<img class="card-img-top border-radius-0 hover-effect-2" src="img/blog/wide/blog-11.jpg" alt="Card Image">
											</a>
											<p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
												<time pubdate datetime="2021-01-10">10 Jan 2021</time> 
												<span class="opacity-3 d-inline-block px-2">|</span> 
												3 Comments 
												<span class="opacity-3 d-inline-block px-2">|</span> 
												John Doe
											</p>
											<div class="card-body p-0">
												<h4 class="card-title mb-3 text-5 font-weight-semibold"><a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3-5" href="demo-architecture-2-blog-post.html">Lorem ipsum dolor sit a met</a></h4>
												<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...</p>
												<a href="demo-architecture-2-blog-post.html" class="custom-read-more d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none pl-0">
													READ MORE +
												</a>
											</div>
										</div>
									</div>
								</article>

								@include('porto.partials.pagination.pagination-1')

							</div>
							<div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">
								@include('porto.partials.sidebar.sidebar-4')
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
