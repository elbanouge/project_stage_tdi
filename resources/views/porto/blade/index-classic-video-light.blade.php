@extends('porto.app')
@section('header')
@include('porto.partials.header.header-323')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section border-0 video overlay overlay-show overlay-color-light overlay-op-8 m-0" data-video-path="video/busy" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
					<div class="container position-relative z-index-3 h-100">
						<div class="row align-items-center h-100">
							<div class="col">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<h1 class="position-relative text-color-dark text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
										<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
											<img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
										</span>
										GET READY TO <span class="position-relative">SEE<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-3"><img src="img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt=""></span></span>
										<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
											<img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
										</span>
									</h1>
									<h1 class="text-color-dark font-weight-extra-bold text-12 line-height-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">PERFECT VIDEOS</h1>
									<p class="text-4 text-color-dark font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">Check out our options and features</p>
								</div>
							</div>
						</div>
						<a href="#main" class="slider-scroll-button slider-scroll-button-dark position-absolute bottom-10 left-50pct transform3dx-n50" data-hash data-hash-offset="80">Sroll To Bottom</a>
					</div>
				</section>

				<div class="container" id="main">

					<div class="row text-center pb-4 pt-5 my-5">
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
							<p class="lead appear-animation mb-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
							</p>
						</div>
					</div>
					<div class="row pb-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
						<div class="col-lg-8">
							<div class="row">
								<div class="col-sm-6">
									@include('porto.partials.feature-box.feature-box-246')
									@include('porto.partials.feature-box.feature-box-247')
									@include('porto.partials.feature-box.feature-box-248')
								</div>
								<div class="col-sm-6">
									@include('porto.partials.feature-box.feature-box-249')
									@include('porto.partials.feature-box.feature-box-250')
									@include('porto.partials.feature-box.feature-box-251')
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="accordion accordion-modern accordion-modern-grey-scale-1" id="accordion">
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
											<p class="mb-0">Adipiscing elit phasellus blanit ma... <a href="#" class="text-color-dark font-weight-semibold ml-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a></p>
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

				</div>

				<section class="section bg-color-grey-scale-1 border-0 m-0">
					<div class="container">
						<div class="row my-5">
							<div class="col-lg-6 pr-5">
								<h2 class="font-weight-normal text-6 mb-2 pb-1"><strong class="font-weight-extra-bold">Who</strong> We Are</h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enikklam id valorem ipsum dolor sit amet, consectetur adipiscing.</p>
								<p>Phasellus blandit massa enim. Nullam id varius elit. blandit massa enim d varius blandit massa enimariusi d varius elit.</p>
								<a href="#" class="font-weight-semibold text-decoration-none learn-more text-2">VIEW MORE <i class="fas fa-chevron-right ml-2"></i></a>
							</div>
							<div class="col-lg-6">
								<div class="progress-bars mt-5">
									<div class="progress-label">
										<span>HTML/CSS</span>
									</div>
									@include('porto.partials.progress.progress')
									<div class="progress-label">
										<span>Design</span>
									</div>
									@include('porto.partials.progress.progress-1')
									<div class="progress-label">
										<span>WordPress</span>
									</div>
									@include('porto.partials.progress.progress-2')
									<div class="progress-label">
										<span>Photoshop</span>
									</div>
									@include('porto.partials.progress.progress-3')
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
					<div class="row py-5 my-5">
						<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
							@include('porto.partials.owl-carousel.owl-carousel-1')
						</div>
						<div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
							<h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
							<a href="page-team.html" class="btn btn-dark font-weight-semibold rounded-0 px-5 btn-py-2 text-2">LEARN MORE</a>
						</div>
					</div>
				</div>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								
								<div class="porto.partialsme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">
									<div>
										@include('porto.partials.testimonial.testimonial-110')
									</div>porto.partials
									<div>
										@include('porto.partials.testimonial.testimonial-111')
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3">
								<img alt="Porto Website Template" src="img/logo-footer.png" class="opacity-7 bottom-4" height="32">
							</a>
							<p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-6">
							<h5 class="text-3 mb-3">CONTACT US</h5>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-icons list-icons-lg">
										<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
										<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
										<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="link-hover-style-1 ml-1"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="link-hover-style-1 ml-1"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>porto.partials
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-23', ['key' => 'footer-copyright.footer-copyright-23'])
			</footer>
@endsection
