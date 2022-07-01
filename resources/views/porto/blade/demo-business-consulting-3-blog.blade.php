@extends('porto.app')
@section('header')
@include('porto.partials.header.header-33')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-78')

				<div class="container pt-4 pb-5 my-5">
					<div class="row">
						<div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">

							<article class="mb-5">
								<div class="card bg-transparent border-0 custom-border-radius-1">
									<div class="card-body p-0 z-index-1">
										<a href="demo-business-consulting-3-blog-post.html" data-cursor-effect-hover="plus">
											<img class="card-img-top custom-border-radius-1 mb-2" src="img/demos/business-consulting-3/blog/blog-1.jpg" alt="Card Image">
										</a>
										<p class="text-uppercase text-color-default text-1 my-2">
											<time pubdate datetime="2021-01-10">10 Jan 2021</time> 
											<span class="opacity-3 d-inline-block px-2">|</span> 
											3 Comments 
											<span class="opacity-3 d-inline-block px-2">|</span> 
											John Doe
										</p>
										<div class="card-body p-0">
											<h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="demo-business-consulting-3-blog-post.html">An Interview with John Doe</a></h4>
											<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem , consectetur adipiscing elit...</p>
											<a href="demo-business-consulting-3-blog-post.html" class="text-decoration-none custom-link-hover-effects">
												<span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
													Read More
													<img width="27" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ml-2'}" style="width: 27px;">
												</span>
											</a>
										</div>
									</div>
								</div>
							</article>

							<article class="mb-5">
								<div class="card bg-transparent border-0 custom-border-radius-1">
									<div class="card-body p-0 z-index-1">
										<a href="demo-business-consulting-3-blog-post.html" data-cursor-effect-hover="plus">
											<img class="card-img-top custom-border-radius-1 mb-2" src="img/demos/business-consulting-3/blog/blog-2.jpg" alt="Card Image">
										</a>
										<p class="text-uppercase text-color-default text-1 my-2">
											<time pubdate datetime="2021-01-10">10 Jan 2021</time> 
											<span class="opacity-3 d-inline-block px-2">|</span> 
											3 Comments 
											<span class="opacity-3 d-inline-block px-2">|</span> 
											John Doe
										</p>
										<div class="card-body p-0">
											<h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="demo-business-consulting-3-blog-post.html">How to Grow your Business</a></h4>
											<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem , consectetur adipiscing elit...</p>
											<a href="demo-business-consulting-3-blog-post.html" class="text-decoration-none custom-link-hover-effects">
												<span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
													Read More
													<img width="27" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ml-2'}" style="width: 27px;">
												</span>
											</a>
										</div>
									</div>
								</div>
							</article>

							@include('porto.partials.pagination.pagination-4')

						</div>
						<div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">
							@include('porto.partials.sidebar.sidebar-4')
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0 m-0 lazyload" data-bg-src="img/demos/business-consulting-3/backgrounds/background-4.jpg" style="background-size: cover; background-position: center; background-repeat: no-repeat;">
				<div class="container pt-3">
					<div class="row justify-content-between align-items-center py-5 mb-3">
						<div class="col-auto mb-4 mb-lg-0">
							<h2 class="font-weight-semibold text-color-light text-10 ls-0 mb-0">Porto Business Consulting Group</h2>
						</div>
						<div class="col-auto">
							<a href="demo-business-consulting-3-contact.html" class="btn btn-primary custom-btn-style-1 font-weight-medium btn-px-4 btn-py-2 text-4" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
								<span class="text-color-light">Contact Us</span>
							</a>
						</div>
					</div>
					<hr class="bg-color-light opacity-1 my-0">
					<div class="row pt-3 mt-5">
						<div class="col-lg-3 mb-4 mb-lg-0">
							<a href="demo-business-consulting-3.html" class="text-decoration-none">
								<img src="img/demos/business-consulting-3/logo-footer.png" class="img-fluid mb-4" width="123" height="33" alt="">
							</a>
							<p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur fel. </p>
							<ul class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter mx-2"><a href="http://www.twitter.com/" target="_blank" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin" data-cursor-effect-hover="fit"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<ul class="list list-icons list-icons-lg">
								<li class="d-flex px-0 mb-1">
									<img width="25" src="img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}">
									<a href="tel:8001234567" class="text-color-light font-weight-semibold text-3-4 ml-2">(800) 123-4567</a>
								</li>
								<li class="d-flex px-0 my-3">
									<img width="25" src="img/demos/business-consulting-3/icons/email.svg" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}">
									<a href="mailto:porto@consulting.com" class="text-color-light font-weight-semibold text-3-4 ml-2">porto@consulting.com</a>
								</li>
								<li class="d-flex font-weight-semibold text-color-light px-0 mb-1">
									<img width="25" src="img/demos/business-consulting-3/icons/map-pin.svg" alt="Location" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light mr-2'}">
									1234 Street Name, New York, NY 10000, USA
								</li>
							</ul>
						</div>
						<div class="col-lg-4 mb-4 mb-lg-0">
							<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
							@include('porto.partials.google-map.google-map-5')
						</div>
						<div class="col-lg-2">
							<h4 class="font-weight-bold text-5">Useful Links</h4>
							<ul class="list list-icons list-icons-sm">
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="demo-business-consulting-3-contact.html" class="link-hover-style-1 ml-1"> Contact Us</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="demo-business-consulting-3-services.html" class="link-hover-style-1 ml-1"> Our Services</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> Payment Methods</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> Services Guide</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> FAQs</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-9', ['key' => 'footer-copyright.footer-copyright-9'])
			</footer>
@endsection
