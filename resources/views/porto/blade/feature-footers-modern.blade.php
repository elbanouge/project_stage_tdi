@extends('porto.app')
@section('header')
@include('porto.partials.header.header-196')
@endsection

@section('main')
<div role="main" class="main">
				<div class="owl-carousel-wrapper position-relative" style="height: 670px">
					<div class="owl-carousel-loader">
						<div class="bounce-loader">
							<div class="bounce1"></div>
							<div class="bounce2"></div>
							<div class="bounce3"></div>
						</div>
					</div>
					@include('porto.partials.owl-carousel.owl-carousel-184')
				</div>

				<div class="home-intro bg-primary" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">
								<p>
									The fastest way to grow your business with the leader in <span class="highlighted-word">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-left text-lg-right">
									<a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a>
									<div class="learn-more">or <a href="index.html">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container">

					<div class="row text-center pt-3">
						<div class="col-md-10 mx-md-auto">
							<h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
								<span>Porto is </span>
								<span class="word-rotator-words bg-dark">
									<b class="is-visible">incredibly</b>
									<b>especially</b>
									<b>extremely</b>
								</span>
								<span> beautiful and fully responsive.</span>
							</h1>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
							</p>
						</div>
					</div>

				</div>

				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
					<div class="home-concept mt-5">
						<div class="container">

							<div class="row text-center">
								<span class="sun"></span>
								<span class="cloud"></span>
								<div class="col-lg-2 ml-lg-auto">
									<div class="process-image">
										<img src="img/home/home-concept-item-1.png" alt="">
										<strong>Strategy</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image process-image-on-middle">
										<img src="img/home/home-concept-item-2.png" alt="">
										<strong>Planning</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image">
										<img src="img/home/home-concept-item-3.png" alt="">
										<strong>Build</strong>
									</div>
								</div>
								<div class="col-lg-4 ml-lg-auto">
									<div class="project-image">
										<div id="fcSlideshow" class="fc-slideshow">
											<ul class="fc-slides">
												<li><a href="portfolio-single-wide-slider.html"><img class="img-fluid" src="img/projects/project-home-1.jpg" alt=""></a></li>
												<li><a href="portfolio-single-wide-slider.html"><img class="img-fluid" src="img/projects/project-home-2.jpg" alt=""></a></li>
												<li><a href="portfolio-single-wide-slider.html"><img class="img-fluid" src="img/projects/project-home-3.jpg" alt=""></a></li>
											</ul>
										</div>
										<strong class="our-work">Our Work</strong>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="container mb-5 pb-4">

					<div class="row">
						<div class="col mb-4">
							<hr class="my-5">
						</div>
					</div>

					<div class="row pb-3">
						<div class="col-lg-8">
							<h2 class="font-weight-normal text-7">Our <strong class="font-weight-extra-bold">Features</strong></h2>
							<div class="row">
								<div class="col-sm-6">
									@include('porto.partials.feature-box.feature-box-183')
									@include('porto.partials.feature-box.feature-box-184')
									@include('porto.partials.feature-box.feature-box-185')
									@include('porto.partials.feature-box.feature-box-186')
								</div>
								<div class="col-sm-6">
									@include('porto.partials.feature-box.feature-box-187')
									@include('porto.partials.feature-box.feature-box-188')
									@include('porto.partials.feature-box.feature-box-189')
									@include('porto.partials.feature-box.feature-box-190')
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<h2 class="font-weight-normal text-6">and more...</h2>

							<div class="accordion accordion-modern" id="accordion">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<i class="icons icon-diamond text-color-primary"></i>
												Creative Websites
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="collapse show">
										<div class="card-body text-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blanorem ipsum dolor sit amet, consecte.</p>
											<p class="mb-0">Adipiscing elit phasellus blanit ma... <a href="#" class="d-block text-color-dark font-weight-semibold pt-4">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a></p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<i class="icons icon-bubble text-color-primary"></i>
												Contact Forms
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="collapse">
										<div class="card-body text-2">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<i class="icons icon-grid text-color-primary"></i>
												Portfolio Pages
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="collapse">
										<div class="card-body text-2">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="solid my-5">

					<div class="row text-center pt-4">
						<div class="col">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2">
								<span>We're not the only ones </span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
								<span> about Porto Template...</span>
							</h2>
							<h4 class="text-primary lead tall text-4">40,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4>
						</div>
					</div>

					<div class="row text-center mt-5">
						@include('porto.partials.owl-carousel.owl-carousel-185')
					</div>

				</div>

				<section class="section section-custom-map appear-animation lazyload" data-appear-animation="fadeInUpShorter" data-src-bg="img/map.png" style="background-color: transparent; background-position: center 0; background-repeat: no-repeat;">
					<section class="section section-default section-footer">
						<div class="container">
							<div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="col-lg-6">
									<div class="recent-posts mb-5">
										<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Latest</strong> Posts</h2>
										@include('porto.partials.owl-carousel.owl-carousel-186')
									</div>
								</div>
								<div class="col-lg-6">
									<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">What</strong> Client’s Say</h2>
									<div class="roporto.partials
										<div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">
											<div>
												<div class="col">
													@include('porto.partials.testimonial.testimonial-96')
												</div>porto.partials
											</div>
											<div>
												<div class="col">
													@include('porto.partials.testimonial.testimonial-97')
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</section>
			</div>
@endsection

@section('footer')
<footer id="footer">
				<div class="container my-4">
					<div class="row py-5">
						<div class="col-md-5 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Contact Details</h5>
							<p class="text-4 mb-1">Porto Template 123</p>
							<p class="text-4 mb-4 pb-1">Porto Blvd, Suite</p>

							<p class="text-5 mb-1 pt-2">Call: 123-456-7890</p>
							<p class="text-5 mb-0">Email: <a href="mailto:info@porto.com">info@porto.com</a></p>
						</div>
						<div class="col-md-7 col-lg-5 mb-5 mb-lg-0">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
							<div class="row">
								<div class="col-6">
									<p class="mb-1"><a href="elements-call-to-action.html" class="text-4 link-hover-style-1">Call to Action</a></p>
									<p class="mb-1"><a href="elements-pricing-tables.html" class="text-4 link-hover-style-1">Pricing Tables</a></p>
									<p class="mb-1"><a href="elements-word-rotator.html" class="text-4 link-hover-style-1">Word Rotator</a></p>
									<p class="mb-1"><a href="elements-tooltips-popovers.html" class="text-4 link-hover-style-1">Tooltips &amp; Popovers</a></p>
									<p class="mb-1"><a href="elements-sticky-elements.html" class="text-4 link-hover-style-1">Sticky Elements</a></p>
								</div>
								<div class="col-6">
									<p class="mb-1"><a href="elements-progressbars.html" class="text-4 link-hover-style-1">Progress Bars</a></p>
									<p class="mb-1"><a href="elements-sections-parallax.html" class="text-4 link-hover-style-1">Sections &amp; Parallax</a></p>
									<p class="mb-1"><a href="elements-lists.html" class="text-4 link-hover-style-1">Lists</a></p>
									<p class="mb-1"><a href="elements-image-frames.html" class="text-4 link-hover-style-1">Image Frames</a></p>
									<p class="mb-1"><a href="elements-testimonials.html" class="text-4 link-hover-style-1">Testimonials</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5>
							<p class="text-4 mb-1">Get all the latest informationon Sales and Offers.</p>
							<p class="text-4">Sign up for newsletter today.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-primary text-color-light text-2 py-3 px-4" type="submit"><strong>SUBSCRIBE!</strong></button>
									</span>
								</div>
							</form>porto.partials
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-55', ['key' => 'footer-copyright.footer-copyright-55'])
			</footer>
@endsection