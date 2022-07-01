@extends('porto.app')
@section('header')
@include('porto.partials.header.header-341')
@endsection

@section('main')
<div role="main" class="main">
					<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs dots-light nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 3000}" style="height: 100vh;">
					<div class="owl-stage-outer">
						<div class=porto.partials
						
							<!-- Carousel Slide 1 -->
							@include('porto.partials.owl-item.owl-item-52')
							
							<!-- Carousel Slide 2 -->
							@include('porto.partials.owl-item.owl-item-53')
						
						</div>
					</div>
					<div class="owl-nav">
						<button type="button" role="presentation" class="owl-prev"></button>
						<button type="button" role="presentation" class="owl-next"></button>
					</div>
					<div class="owl-dots mb-5">
						<button role="button" class="owl-dot active"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
					</div>
				</div>

				<div class="container py-4">
					<div class="row pt-4 mt-5">
						<div class="col">
							<div class="row pt-2 clearfix">
								<div class="col-lg-6">
									@include('porto.partials.feature-box.feature-box-284')
								</div>
								<div class="col-lg-6">
									@include('porto.partials.feature-box.feature-box-285')
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									@include('porto.partials.feature-box.feature-box-286')
								</div>
								<div class="col-lg-6">
									@include('porto.partials.feature-box.feature-box-287')
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									@include('porto.partials.feature-box.feature-box-288')
								</div>
								<div class="col-lg-6">
									@include('porto.partials.feature-box.feature-box-289')
								</div>
							</div>
						</div>
					</div>
					<div class="row pb-5 mb-5 mt-3">
						<div class="col text-center">
							<a href="#" class="btn btn-primary btn-px-5 py-3 font-weight-semibold text-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">LEARN MORE</a>
						</div>
					</div>
				</div>

				<section class="section section-secondary border-0 py-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
							<div class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-5 mt-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-color-light text-7 mb-2">Who We Are</h2>
								<p class="lead font-weight-light text-color-light text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
								<p class="font-weight-light text-color-light text-2 mb-4 opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendun magna ex, et faucibus lacus venenatis eget</p>
								<a href="#" class="btn btn-dark-scale-2 btn-px-5 btn-py-2 text-2">LEARN MORE</a>
							</div>
							<div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2 scale-2">
								<img class="img-fluid box-shadow-3 my-2 border-radius" src="img/gallery/gallery-1.jpg" alt="">
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 bg-color-grey-scale-1 border-0 m-0 pb-5">
					<div class="container">
						<div class="row justify-content-center my-4">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="oporto.partialse nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
									<div>
										<div class="col">
											@include('porto.partials.testimonial.testimonial-121')
										</div>
									</div>porto.partials
									<div>
										<div class="col">
											@include('porto.partials.testimonial.testimonial-122')
										</div>
									</div>porto.partials
									<div>
										<div class="col">
											@include('porto.partials.testimonial.testimonial-123')
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row py-5 my-5">
						<div class="col">
					
							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
								</div>
							</div>
							
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0">
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
							</form>
						</div>porto.partials
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-55', ['key' => 'footer-copyright.footer-copyright-55'])
			</footer>
@endsection
