@extends('porto.app')
@section('header')
@include('porto.partials.header.header-11')
@endsection

@section('main')
<div role="main" class="main">
				
				<section class="section bg-primary border-0 position-relative z-index-1 py-0 m-0">
							<div class="custom-slider-background overflow-hidden">
								<div class="custom-slider-background-image-stage-outer appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1600">
									<div class="custom-slider-background-image-stage">
										<div class="custom-slider-background-image-item overlay overlay-show overlay-op-6" style="background-image: url(img/demos/architecture-2/slides/slide-1-1.jpg); background-size: cover; background-position: center;"></div>
										<div class="custom-slider-background-image-item overlay overlay-show overlay-op-6" style="background-image: url(img/demos/architecture-2/slides/slide-1-2.jpg); background-size: cover; background-position: center;"></div>
										<div class="custom-slider-background-image-item overlay overlay-show overlay-op-6" style="background-image: url(img/demos/architecture-2/generic/generic-1.jpg); background-size: cover; background-position: center;"></div>
										<div class="custom-slider-background-image-item overlay overlay-show overlay-op-6" style="background-image: url(img/demos/architecture-2/generic/generic-2.jpg); background-size: cover; background-position: center;"></div>
									</div>
								</div>
								<div class="custom-slider-background-image-stage-outer appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1600">
									<div class="custom-slider-background-image-stage reverse">
										<div class="custom-slider-background-image-item overlay overlay-show overlay-op-6" style="background-image: url(img/demos/architecture-2/generic/generic-2.jpg); background-size: cover; background-position: center;"></div>
										<div class="custom-slider-background-image-item overlay overlay-show overlay-op-6" style="background-image: url(img/demos/architecture-2/generic/generic-1.jpg); background-size: cover; background-position: center;"></div>
										<div class="custom-slider-background-image-item overlay overlay-show overlay-op-6" style="background-image: url(img/demos/architecture-2/slides/slide-1-1.jpg); background-size: cover; background-position: center;"></div>
										<div class="custom-slider-background-image-item overlay overlay-show overlay-op-6" style="background-image: url(img/demos/architecture-2/slides/slide-1-2.jpg); background-size: cover; background-position: center;"></div>
									</div>
								</div>
							</div>
							<div class="owl-carousel-wrapper appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1600" style="height: 800px;">
								@include('porto.partials.owl-carousel.owl-carousel-8')
							</div>
				</section>

				<div class="position-relative">
					<img src="img/demos/architecture-2/backgrounds/arch-plan-1.jpg" class="img-fluid position-absolute top-0 right-0" alt="">
				</div>

				<div class="custom-page-wrapper">
					<section class="section bg-transparent border-0 position-relative py-0 m-0">
						<div class="container container-lg-custom custom-container-style custom-margin-top">
							<div class="row mb-5">
								<div class="col">
									<div class="overflow-hidden">
										<div class="owl-carousel-wrapper position-relative z-index-1 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="height: 373px;">
											@include('porto.partials.owl-carousel.owl-carousel-9')
										</div>
									</div>
								</div>
							</div>
							<div id="start" class="row align-items-center pb-xl-5 mb-xl-5">
								<div class="col-9 col-lg-4 col-xl-5 pb-5 pb-lg-0 mb-5 mb-lg-0">
									<div class="position-relative">
										<img src="img/demos/architecture-2/backgrounds/arch-plan-2.jpg" class="img-fluid position-absolute left-0 z-index-0 appear-animation" alt="" data-appear-animation="fadeIn" data-appear-animation-delay="850" style="bottom: -168px;">
										<div class="overflow-hidden position-relative z-index-1">
											<img src="img/demos/architecture-2/generic/generic-1.jpg" class="img-fluid appear-animation" alt="" data-appear-animation="maskLeft" data-appear-animation-delay="250">
										</div>
										<div class="overflow-hidden position-absolute z-index-2" style="bottom: -75px; right: -17%;">
											<img src="img/demos/architecture-2/generic/generic-2.jpg" class="img-fluid appear-animation" alt="" data-appear-animation="maskRight" data-appear-animation-delay="550">
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-xl-5 offset-lg-1 pt-5 pt-lg-0">
									<div class="position-absolute z-index-0 left-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="2000" style="top: 190px;">
										<h2 class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">YOUR PLACE</h2>
									</div>
									<div class="pt-lg-5 pl-lg-5 mt-lg-5">
										<div class="overflow-hidden mb-2">
											<h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">WE'RE HERE TO HELP</h2>
										</div>
										<div class="overflow-hidden mb-3">
											<h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1000">You need space for better living.</h3>
										</div>
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
											<img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mb-4" alt="">
										</div>
										<p class="custom-font-tertiary text-5 line-height-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
										<p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus.</p>
										<a href="demo-architecture-2-contact.html" class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">CONTACT US</a>
									</div>
								</div>
							</div>
						</div>
						<div class="container-fluid">
							<div class="row pt-5">
								<div class="col pt-4">
									<hr>
								</div>
							</div>
						</div>
						<div class="container container-lg-custom pb-3">
							<div class="row align-items-center text-center py-5 my-3">
								<div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
									<img src="img/logos/logo-8.png" alt class="img-fluid" style="max-width: 90px;">
								</div>
								<div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
									<img src="img/logos/logo-9.png" alt class="img-fluid" style="max-width: 140px;">
								</div>
								<div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
									<img src="img/logos/logo-10.png" alt class="img-fluid" style="max-width: 140px;">
								</div>
								<div class="col-sm-4 col-xl-2 mb-5 mb-lg-0">
									<img src="img/logos/logo-11.png" alt class="img-fluid" style="max-width: 140px;">
								</div>
								<div class="col-sm-4 col-xl-2 mb-5 mb-lg-0">
									<img src="img/logos/logo-12.png" alt class="img-fluid" style="max-width: 100px;">
								</div>
								<div class="col-sm-4 col-xl-2">
									<img src="img/logos/logo-13.png" alt class="img-fluid" style="max-width: 100px;">
								</div>
							</div>
						</div>
						<div class="custom-section">
							<div class="custom-section-left-content parallax p-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'fadeIn': true}" data-image-src="img/demos/architecture-2/generic/generic-3.jpg" style="min-height: 400px"></div>
							<div class="custom-section-middle-content bg-primary p-5">
								@include('porto.partials.owl-carousel.owl-carousel-10')
							</div>
							<div class="custom-section-right-content parallax p-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 3, 'parallaxDirection': 'bottom', 'fadeIn': true}" data-image-src="img/demos/architecture-2/generic/generic-4.jpg" style="min-height: 400px"></div>
						</div>
						<div class="container container-lg-custom py-5 mt-5 mb-4">
							<div class="row py-4">
								<div class="col-lg-5 col-xl-4 position-relative mb-4">
									<div class="position-absolute z-index-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" style="top: 102px; left: -64px;">
										<h2 class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-2 font-weight-black opacity-1 mb-0">IDEAS</h2>
									</div>
									<h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">CUSTOM SERVICES</h2>
									<h3 class="text-transform-none text-color-dark font-weight-black text-9 line-height-2 mb-4">Design. Build. Better.</h3>
									<img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mb-4 mt-2" alt="">
									<p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2">Discover how our unique process improves your building experience.</p>
								</div>
								<div class="col-lg-6 col-xl-7 offset-lg-1">
									<h2 class="text-color-default positive-ls-3 line-height-3 text-4 pb-2 mb-4">OUR SKILLS</h2>
									<div class="progress-bars custom-progress-bars-style-1">
										<div class="progress-label d-flex justify-content-between">
											<span class="text-color-dark text-2">SAMPLE SKILL 1</span>
											<span class="text-color-dark text-2">85%</span>
										</div>
										@include('porto.partials.progress.progress-4')

										<div class="progress-label d-flex justify-content-between pt-2">
											<span class="text-color-dark text-2">SAMPLE SKILL 2</span>
											<span class="text-color-dark text-2">90%</span>
										</div>
										@include('porto.partials.progress.progress-5')

										<div class="progress-label d-flex justify-content-between pt-2">
											<span class="text-color-dark text-2">SAMPLE SKILL 3</span>
											<span class="text-color-dark text-2">85%</span>
										</div>
										@include('porto.partials.progress.progress-4')
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section section-height-3 border-0 m-0">
						<div class="container py-2">
							<div class="row counters counters-sm">
								<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
									@include('porto.partials.counter.counter-7')
								</div>
								<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
									@include('porto.partials.counter.counter-8')
								</div>
								<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
									@include('porto.partials.counter.counter-9')
								</div>
								<div class="col-sm-6 col-lg-3">
									@include('porto.partials.counter.counter-10')
								</div>
							</div>
						</div>
					</section>

					<div class="container container-lg-custom py-4 my-3">
						@include('porto.partials.lightbox.lightbox-3')
					</div>

					<section class="section section-height-3 bg-primary border-0 m-0">
						<div class="container container-lg-custom">
							<div class="row align-items-center justify-content-center text-center text-xl-left">
								<div class="col-md-8 col-xl-9 mb-4 mb-xl-0 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250">
									<h2 class="text-color-default font-weight-semibold positive-ls-3 text-4 mb-0">WE'RE HERE TO HELP</h2>
									<h3 class="text-transform-none text-color-light font-weight-black line-height-2 text-9 mb-0">Let's Talk About Your New Project, We Can Do It!</h3>
								</div>
								<div class="col-xl-3 text-xl-right appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500">
									<a href="demo-architecture-2-contact.html" class="btn btn-light custom-btn-style-1 font-weight-bold text-color-dark text-3 px-5 py-3">CONTACT US</a>
								</div>
							</div>
						</div>
					</section>

					<div class="container container-lg-custom">
						<div class="row py-5 my-5">
							<div class="col-lg-5 col-xl-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250" data-plugin-options="{'accY': -400}">
								<div class="position-absolute z-index-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" style="top: 102px; left: -246px;">
									<h2 class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-3 font-weight-black opacity-1 mb-0">SOLUTIONS</h2>
								</div>
								<h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">COMMON QUESTIONS</h2>
								<h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-4">Frequent Questions</h3>
								<img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mb-4 mt-2" alt="">
								<p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero</p>
								<p class="text-3-5 pb-2 mb-4">Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
								<a href="demo-architecture-2-contact.html" class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3">CONTACT US</a>
							</div>
							<div class="col-lg-7 col-xl-8 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'accY': -400}">
								<div class="custom-accordion-style-1 accordion accordion-modern" id="FAQAccordion">
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" href="#collapseFAQOne">
													What does an architect actually do?
												</a>
											</h4>
										</div>
										<div id="collapseFAQOne" class="collapse show" data-parent="#FAQAccordion">
											<div class="card-body pl-4 w-md-75pct">
												<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
											</div>
										</div>
									</div>
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" href="#collapseFAQTwo">
													Why do I need an architect?
												</a>
											</h4>
										</div>
										<div id="collapseFAQTwo" class="collapse" data-parent="#FAQAccordion">
											<div class="card-body pl-4">
												<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
											</div>
										</div>
									</div>
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" href="#collapseFAQFour">
													What's the largest project you've ever worked on?
												</a>
											</h4>
										</div>
										<div id="collapseFAQFour" class="collapse" data-parent="#FAQAccordion">
											<div class="card-body pl-4">
												<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
											</div>
										</div>
									</div>
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" href="#collapseFAQFive">
													What is the structure of your architecture practice?
												</a>
											</h4>
										</div>
										<div id="collapseFAQFive" class="collapse" data-parent="#FAQAccordion">
											<div class="card-body pl-4">
												<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
											</div>
										</div>
									</div>
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" href="#collapseFAQTSix">
													Can you work with clients long distance?
												</a>
											</h4>
										</div>
										<div id="collapseFAQTSix" class="collapse" data-parent="#FAQAccordion">
											<div class="card-body pl-4">
												<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<hr class="my-0">

						<div class="row py-5 my-5">
							<div class="col-lg-6 col-xl-7 mx-auto mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500">
								@include('porto.partials.owl-carousel.owl-carousel-11')
							</div>
							<div class="col-lg-5 col-xl-4 text-right appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="250">
								<div class="position-absolute z-index-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" style="top: 102px; right: -50px;">
									<h2 class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-3 font-weight-black opacity-1 mb-0">ARCHLIFE</h2>
								</div>
								<h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">THE BEST PROFESSIONALS</h2>
								<h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-4">Meet Our Team</h3>
								<img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mb-4 mt-2" alt="">
								<p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero</p>
								<p class="text-3-5 pb-3 mb-4">Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
								<a href="demo-architecture-2-contact.html" class="btn btn-primary custom-btn-style-1 custom-btn-style-1-right font-weight-bold text-3 px-5 py-3">CONTACT US</a>
							</div>
						</div>
					</div>

					<section class="section parallax bg-transparent border-0 py-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 13, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}">
						<div class="d-flex justify-content-center">
							<div class="scrollable-parallax-wrapper bg-primary overflow-hidden">
								<div class="container container-lg-custom custom-container-style-3 custom-container-position-1 py-5 my-5 mx-0">
									<div class="row justify-content-center pt-3 mb-5">
										<div class="col-sm-8 col-md-12 text-center">
											<h2 class="text-color-light opacity-6 positive-ls-3 line-height-3 text-4 mb-3">HAPPY CLIENTS</h2>
											<h3 class="text-transform-none text-color-light font-weight-black line-height-2 text-10 negative-ls-1 mb-0">See What Clients Are Saying</h3>
										</div>
									</div>
									<div class="row justify-content-center pb-3">
										<div class="col-lg-9">
											@include('porto.partials.owl-carousel.owl-carousel-12')
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="section bg-transparent border-0 position-relative m-0">
						<div class="container container-lg-custom py-5">
							<div class="row">
								<div class="col text-center">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
										<div class="position-absolute transform3dx-n50 left-50pct z-index-0" style="top: 56px;">
											<h2 class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">WHAT'S HAPPENING</h2>
										</div>
									</div>
									<h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">OUR BLOG</h2>
									<h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-3">Recent News</h3>
									<img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mt-3 mb-5" alt="">
								</div>
							</div>
							<div class="row row-gutter-sm">
								<div class="col-lg-4 mb-4 mb-lg-0">
									<article>
										<div class="card border-0 border-radius-0">
											<div class="card-body bg-color-light-scale-1 p-4 z-index-1">
												<a href="demo-architecture-2-blog-post.html">
													<img class="card-img-top border-radius-0 hover-effect-2" src="img/demos/architecture-2/blog/blog-thumb-1.jpg" alt="Card Image">
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
								</div>
								<div class="col-lg-4 mb-4 mb-lg-0">
									<article>
										<div class="card border-0 border-radius-0">
											<div class="card-body bg-color-light-scale-1 p-4 z-index-1">
												<a href="demo-architecture-2-blog-post.html">
													<img class="card-img-top border-radius-0 hover-effect-2" src="img/demos/architecture-2/blog/blog-thumb-2.jpg" alt="Card Image">
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
								</div>
								<div class="col-lg-4">
									<article>
										<div class="card border-0 border-radius-0">
											<div class="card-body bg-color-light-scale-1 p-4 z-index-1">
												<a href="demo-architecture-2-blog-post.html">
													<img class="card-img-top border-radius-0 hover-effect-2" src="img/demos/architecture-2/blog/blog-thumb-3.jpg" alt="Card Image">
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
								</div>
							</div>
						</div>
					</section>
				</div>

				<div class="position-relative" style="margin-top: 50px;">
					<img src="img/demos/architecture-2/backgrounds/arch-plan-3.jpg" class="img-fluid position-absolute bottom-0 left-0" alt="">
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
