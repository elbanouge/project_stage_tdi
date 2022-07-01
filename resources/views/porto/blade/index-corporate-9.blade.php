@extends('porto.app')
@section('header')
@include('porto.partials.header.header-343')
@endsection

@section('main')
<div role="main" class="main">
			@include('porto.partials.owl-carousel.owl-carousel-340')

			<div class="container py-4 my-5">
				<div class="row justify-content-center text-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
					<div class="col-lg-8">
						<h2 class="font-weight-bold mb-3 mt-3">We Can Help You</h2>
						<p class="text-6 text-color-dark line-height-7 negative-ls-1 px-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus blandit massa enim.</p>
						<p class="opacity-9 text-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamos bibendum magna ex.</p>
					</div>
				</div>
				<div class="row featured-boxes featured-boxes-style-4">
					<div class="col-md-6 col-lg-3">
						@include('porto.partials.featured-box.featured-box-461', ['key' => 'featured-box.featured-box-461'])
					</div>
					<div class="col-md-6 col-lg-3">
						@include('porto.partials.featured-box.featured-box-462', ['key' => 'featured-box.featured-box-462'])
					</div>
					<div class="col-md-6 col-lg-3">
						@include('porto.partials.featured-box.featured-box-463', ['key' => 'featured-box.featured-box-463'])
					</div>
					<div class="col-md-6 col-lg-3">
						@include('porto.partials.featured-box.featured-box-464')
					</div>
				</div>
			</div>

			<section class="parallax section section-height-3 section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/parallax/parallax-corporate-9-1.jpg">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
							<p class="text-color-primary text-2 line-height-1 mb-2">LOREM IPSUM DOLOR SIT</p>
							<h4 class="text-color-dark font-weight-normal line-height-3 text-6">Company in <strong class="font-weight-extra-bold">Numbers</strong></h4>
							<p class="lead pb-2 mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc.</p>
							<a href="#" class="btn btn-outline btn-primary font-weight-bold text-1 px-4 btn-py-2">GET STARTED NOW</a>
						</div>
						<div class="col-lg-5">
							<div class="row">
								<div class="col appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
									<div class="row counters counters-lg counters-text-dark">
										<div class="col-md-6 mb-5">
											@include('porto.partials.counter.counter-143')
										</div>
										<div class="col-md-6 mb-5">
											@include('porto.partials.counter.counter-144')
										</div>
										<div class="col-md-6 mb-5 mb-md-0">
											@include('porto.partials.counter.counter-145')
										</div>
										<div class="col-md-6">
											@include('porto.partials.counter.counter-146')
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-background section-height-4 border-0 pb-5 m-0 appear-animation" data-appear-animation="fadeIn">
				<div class="container">
					<div class="row justify-content-center recent-posts appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
						<div class="col-sm-8 col-md-4 mb-4 mb-md-0">
							<article>
								<div class="row">
									<div class="col">
										<a href="blog-post.html" class="text-decoration-none">
											<img src="img/blog/blog-corporate-9-1.jpg" class="img-fluid hover-effect-2 mb-3" alt="">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="text-color-primary text-2 mb-1">LOREM IPSUM DOLOR SIT</p>
										<h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
										<a href="/" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fas fa-chevron-right text-3 ml-2"></i></a>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-8 col-md-4 mb-4 mb-md-0">
							<article>
								<div class="row">
									<div class="col">
										<a href="blog-post.html" class="text-decoration-none">
											<img src="img/blog/blog-corporate-9-2.jpg" class="img-fluid hover-effect-2 mb-3" alt="">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="text-color-primary text-2 mb-1">LOREM IPSUM DOLOR SIT</p>
										<h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Lorem ipsum dolor si, consectetur</a></h4>
										<p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
										<a href="/" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fas fa-chevron-right text-3 ml-2"></i></a>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-8 col-md-4">
							<article>
								<div class="row">
									<div class="col">
										<a href="blog-post.html" class="text-decoration-none">
											<img src="img/blog/blog-corporate-9-3.jpg" class="img-fluid hover-effect-2 mb-3" alt="">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="text-color-primary text-2 mb-1">LOREM IPSUM DOLOR SIT</p>
										<h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
										<a href="/" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fas fa-chevron-right text-3 ml-2"></i></a>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>

			<hr>

			<div class="container">
				<div class="row py-4 my-5">
					<div class="col py-3">
						@include('porto.partials.owl-carousel.owl-carousel-341')
						
					</div>
				</div>
			</div>

			<section class="section bg-color-grey-scale-1 section-height-3 section-no-border section-center mb-0 appear-animation" data-appear-animation="fadeIn">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							@include('porto.partials.owl-carousel.owl-carousel-342')
						</div>
					</div>
				</div>
			</section>
		</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0">
			<div class="container">
				<div class="row py-5">
					<div class="col text-center">
						<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			@include('porto.partials.footer-copyright.footer-copyright-57', ['key' => 'footer-copyright.footer-copyright-57'])
		</footer>
@endsection
