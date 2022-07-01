@extends('porto.app')
@section('header')
@include('porto.partials.header.header-135')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-166')

				<div class="container pt-4 pb-5 my-5">
					<div class="row">
						<div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">

							<article class="mb-5">
								<div class="card border-0 border-radius-0 custom-box-shadow-1">
									<div class="card-img-top">
										<a href="demo-law-firm-2-blog-post.html">
											<img class="card-img-top border-radius-0 hover-effect-2" src="img/demos/law-firm-2/blog/blog-1.jpg" alt="Card Image">
										</a>
									</div>
									<div class="card-body bg-light p-4 z-index-1">
										<p class="text-uppercase text-color-default text-1 mb-1 pt-1">
											<time pubdate datetime="2021-01-10">10 Jan 2021</time> 
											<span class="opacity-3 d-inline-block px-2">|</span> 
											3 Comments 
											<span class="opacity-3 d-inline-block px-2">|</span> 
											John Doe
										</p>
										<div class="card-body p-0">
											<h4 class="card-title alternative-font-4 font-weight-semibold text-5 mb-3"><a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3" href="demo-law-firm-2-blog-post.html">Lorem ipsum dolor sit a met</a></h4>
											<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...</p>
											<a href="demo-law-firm-2-blog-post.html" class="custom-read-more-link d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none svg-fill-color-primary svg-stroke-color-primary pl-0">
												READ MORE
												<svg class="ml-2" version="1.1" viewbox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
													<polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</article>

							<article class="mb-5">
								<div class="card border-0 border-radius-0 custom-box-shadow-1">
									<div class="card-img-top">
										<a href="demo-law-firm-2-blog-post.html">
											<img class="card-img-top border-radius-0 hover-effect-2" src="img/demos/law-firm-2/blog/blog-2.jpg" alt="Card Image">
										</a>
									</div>
									<div class="card-body bg-light p-4 z-index-1">
										<p class="text-uppercase text-color-default text-1 mb-1 pt-1">
											<time pubdate datetime="2021-01-10">10 Jan 2021</time> 
											<span class="opacity-3 d-inline-block px-2">|</span> 
											3 Comments 
											<span class="opacity-3 d-inline-block px-2">|</span> 
											John Doe
										</p>
										<div class="card-body p-0">
											<h4 class="card-title alternative-font-4 font-weight-semibold text-5 mb-3"><a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3" href="demo-law-firm-2-blog-post.html">Lorem ipsum dolor sit a met</a></h4>
											<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...</p>
											<a href="demo-law-firm-2-blog-post.html" class="custom-read-more-link d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none svg-fill-color-primary svg-stroke-color-primary pl-0">
												READ MORE
												<svg class="ml-2" version="1.1" viewbox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
													<polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
												</svg>
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

				<section class="section section-height-3 bg-primary-darken border-0 m-0">
					<div class="container py-3">
						<div class="row align-items-center justify-content-between">
							<div class="col-lg-8 text-center text-lg-left mb-4 mb-lg-0">
								<h3 class="alternative-font-4 text-color-light font-weight-semibold text-4 opacity-9 mb-1">ARE YOU LOOKING FOR</h3>
								<h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-2">Experienced Attorneys?</h2>
								<p class="text-color-light text-3-5 opacity-8 mb-0">Get a free initial consultation right now</p>
							</div>
							<div class="col-lg-4 text-center text-lg-right">
								<a href="demo-law-firm-2-contact.html" data-hash data-hash-offset="100" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3">REQUEST CONSULTATION</a>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-0 pt-4 mt-0">
				<div class="container py-5">
					<div class="row py-4">
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">About Us</h5>
							<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
							<a href="demo-law-firm-2.html" class="text-decoration-none">
								<img src="img/demos/law-firm-2/logo-light.png" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Useful Links</h5>
							<ul class="list list-unstyled text-3-5 mb-0">
								<li class="mb-2"><a href="#">Features</a></li>
								<li class="mb-2"><a href="#">Pages</a></li>
								<li class="mb-2"><a href="#">Portfolio</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-about.html">About Us</a></li>
								<li class="mb-0"><a href="demo-law-firm-2-contact.html">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Practice Areas</h5>
							<ul class="list list-unstyled text-3-5 mb-0">
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Family Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Capital Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Business Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Accident &amp; Injury Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Health Law</a></li>
							</ul>
							<a href="demo-law-firm-2-practice-areas.html" class="d-inline-flex custom-read-more-link justify-content-center align-items-center font-weight-medium text-color-primary svg-fill-color-primary svg-stroke-color-primary">
								VIEW ALL
								<svg class="ml-2" version="1.1" viewbox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
								</svg>
							</a>
						</div>
						<div class="col-lg-3">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Contact Us</h5>
							<ul class="list list-unstyled mb-4">
								<li>
									<i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 mr-2"></i>
									<a href="tel:0123456789" class="text-color-light font-weight-bold text-decoration-none text-5">(800) 123-4657</a>
								</li>
								<li class="mb-3">
									<i class="icons icon-envelope text-color-primary text-6 position-relative top-6 mr-2"></i>
									<a href="mailto:porto@consulting.com" class="text-color-light text-decoration-none text-4">porto@consulting.com</a>
								</li>
								<li class="text-color-light text-4">
									<i class="icons icon-calendar text-color-primary text-5 position-relative top-3 mr-2"></i>
									Mon - Fri 9am - 6pm
								</li>
							</ul>
							<ul class="custom-social-icons-style-1 social-icons social-icons-clean">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-4">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-22', ['key' => 'footer-copyright.footer-copyright-22'])
			</footer>
@endsection
