@extends('porto.app')
@section('header')
@include('porto.partials.header.header-38')
@endsection

@section('main')
<div role="main" class="main">

				<section class="section section-height-3 section-with-shape-divider position-relative border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%'}" data-image-src="img/demos/business-consulting-3/backgrounds/background-1.jpg">
					<img src="img/demos/business-consulting-3/backgrounds/background-woman.png" class="img-fluid position-absolute top-0 right-0 d-none d-md-block appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" alt="">
					<div class="container pb-5 pb-xl-0 mt-md-3 mb-5">
						<div class="row">
							<div class="col-md-7 col-lg-12">
								<h1 class="custom-text-background custom-big-font-size-1 text-14 font-weight-bold float-xl-right clearfix line-height-1 custom-ws-mobile-wrap ws-nowrap pb-2 mb-3 mb-xl-5 lazyload appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-bg-src="img/demos/business-consulting-3/backgrounds/text-background.jpg">STRATEGY EXECUTION</h1>
							</div>
						</div>
						<div class="row pb-5 mb-5">
							<div class="col-md-7 col-xl-5 pb-5 pb-xl-0 mb-5">
								<strong class="d-block font-weight-semibold text-color-dark text-5-5 line-height-4 mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Accelerate Strategy Execution and Consistency in <span class="custom-highlight-text-1 font-weight-bold">Revenue Growth!</span></strong>
								<p class="text-3-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. </p>
								<a href="#aboutus" data-hash data-hash-offset="100" class="d-inline-flex align-items-center text-decoration-none appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
									<img width="30" src="img/demos/business-consulting-3/icons/mouse.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mr-2'}">
									Scroll Down
								</a>
							</div>
						</div>
					</div>
					<div class="shape-divider shape-divider-bottom" style="height: 212px;">
						<div class="shape-divider-horizontal-animation shape-divider-horizontal-animation-to-left">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1920 212" preserveaspectratio="xMinYMin">
								<polygon fill="#F3F3F3" points="0,75 479,161 1357,28 1701,56 1920,26 1920,213 0,212 "></polygon>
								<polygon fill="#FFFFFF" points="0,91 481,177 1358,44 1702,72 1920,42 1920,212 0,212 "></polygon>
							</svg>
						</div>
					</div>
				</section>

				<div class="container" style="margin-top: -310px;">
					<div class="row">
						<div class="col-xl-7 ml-xl-auto">
							@include('porto.partials.owl-carousel.owl-carousel-24')
						</div>
					</div>

					<div id="aboutus" class="row align-items-xl-center pt-4 mt-5">
						<div class="col-md-10 col-lg-6 mb-5 mb-lg-0">
							<div class="row row-gutter-sm">
								<div class="col-6">
									<img src="img/demos/business-consulting-3/generic/generic-1.jpg" class="img-fluid box-shadow-5" alt="">
								</div>
								<div class="col-6">
									<img src="img/demos/business-consulting-3/generic/generic-2.jpg" class="img-fluid box-shadow-5 mb-4" alt="">
									<img src="img/demos/business-consulting-3/generic/generic-3.jpg" class="img-fluid box-shadow-5" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-6 pl-lg-4 pl-xl-5">
							<h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter">ABOUT US</h2>
							<h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">We deliver the most advanced strategies for your business</h3>
							<p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>
							<div class="row align-items-center pb-2 mb-4 mb-lg-1 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
								<div class="col-5">
									<div class="d-flex">
										<img width="63" src="img/demos/business-consulting-3/icons/label.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}">
										<span class="text-3 font-weight-bold text-color-dark pt-2 ml-2">
											<strong class="d-block font-weight-bold text-9 mb-2">240+</strong>
											Satisfied Clients
										</span>
									</div>
								</div>
								<div class="col-7">
									<blockquote class="custom-blockquote-style-1 m-0 pt-1 pb-2">
										<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse. </p>
									</blockquote>
								</div>
							</div>
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								<a href="demo-business-consulting-3-contact.html" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Get a Quote</span></a>
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid pt-5 mt-5 mb-4">
					<div class="row">
						<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
							@include('porto.partials.owl-carousel.owl-carousel-25')
						</div>
					</div>
				</div>

				<section class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
					<div class="shape-divider" style="height: 123px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1920 123" preserveaspectratio="xMinYMin">
							<polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
							<polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
						</svg>
					</div>
					<div class="container mt-4">
						<div class="row justify-content-center">
							<div class="col-lg-11 col-xl-10 text-center">
								<h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">WHAT WE DO</h2>
								<h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our Premium Services</h3>
								<p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>
							</div>
						</div>
						<div class="row row-gutter-sm justify-content-center mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
							<div class="col-sm-9 col-md-6 col-lg-4 mb-4">
								<a href="demo-business-consulting-3-services-detail.html" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
									<div class="card box-shadow-4">
										<div class="card-img-top position-relative overlay overlay-show">
											<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
												<h4 class="font-weight-semibold text-color-light text-6 mb-1">Sales &amp; Marketing</h4>
												<div class="custom-crooked-line">
													<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
												</div>
											</div>
											<img src="img/demos/business-consulting-3/services/services-1.jpg" class="img-fluid" alt="Card Image">
										</div>
										<div class="card-body d-flex align-items-center custom-view-more px-4">
											<p class="card-text w-100 mb-0">Cras a elit sit amet leo accumsan. Suspendisse hendrerit. </p>
											<img width="50" class="w-auto" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 50px;">
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-9 col-md-6 col-lg-4 mb-4">
								<a href="demo-business-consulting-3-services-detail.html" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
									<div class="card box-shadow-4">
										<div class="card-img-top position-relative overlay overlay-show">
											<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
												<h4 class="font-weight-semibold text-color-light text-6 mb-1">Strategic Planning</h4>
												<div class="custom-crooked-line">
													<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
												</div>
											</div>
											<img src="img/demos/business-consulting-3/services/services-2.jpg" class="img-fluid" alt="Card Image">
										</div>
										<div class="card-body d-flex align-items-center custom-view-more px-4">
											<p class="card-text w-100 mb-0">Cras a elit sit amet leo accumsan. Suspendisse hendrerit. </p>
											<img width="50" class="w-auto" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 50px;">
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-9 col-md-6 col-lg-4 mb-4">
								<a href="demo-business-consulting-3-services-detail.html" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
									<div class="card box-shadow-4">
										<div class="card-img-top position-relative overlay overlay-show">
											<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
												<h4 class="font-weight-semibold text-color-light text-6 mb-1">Operations</h4>
												<div class="custom-crooked-line">
													<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
												</div>
											</div>
											<img src="img/demos/business-consulting-3/services/services-3.jpg" class="img-fluid" alt="Card Image">
										</div>
										<div class="card-body d-flex align-items-center custom-view-more px-4">
											<p class="card-text w-100 mb-0">Cras a elit sit amet leo accumsan. Suspendisse hendrerit. </p>
											<img width="50" class="w-auto" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 50px;">
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
								<a href="demo-business-consulting-3-services-detail.html" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
									<div class="card box-shadow-4">
										<div class="card-img-top position-relative overlay overlay-show">
											<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
												<h4 class="font-weight-semibold text-color-light text-6 mb-1">Cost Transformation</h4>
												<div class="custom-crooked-line">
													<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
												</div>
											</div>
											<img src="img/demos/business-consulting-3/services/services-4.jpg" class="img-fluid" alt="Card Image">
										</div>
										<div class="card-body d-flex align-items-center custom-view-more px-4">
											<p class="card-text w-100 mb-0">Cras a elit sit amet leo accumsan. Suspendisse hendrerit. </p>
											<img width="50" class="w-auto" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 50px;">
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
								<a href="demo-business-consulting-3-services-detail.html" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
									<div class="card box-shadow-4">
										<div class="card-img-top position-relative overlay overlay-show">
											<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
												<h4 class="font-weight-semibold text-color-light text-6 mb-1">Digital Marketing</h4>
												<div class="custom-crooked-line">
													<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
												</div>
											</div>
											<img src="img/demos/business-consulting-3/services/services-5.jpg" class="img-fluid" alt="Card Image">
										</div>
										<div class="card-body d-flex align-items-center custom-view-more px-4">
											<p class="card-text w-100 mb-0">Cras a elit sit amet leo accumsan. Suspendisse hendrerit. </p>
											<img width="50" class="w-auto" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 50px;">
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-9 col-md-6 col-lg-4">
								<a href="demo-business-consulting-3-services-detail.html" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
									<div class="card box-shadow-4">
										<div class="card-img-top position-relative overlay overlay-show">
											<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
												<h4 class="font-weight-semibold text-color-light text-6 mb-1">Automation</h4>
												<div class="custom-crooked-line">
													<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
												</div>
											</div>
											<img src="img/demos/business-consulting-3/services/services-6.jpg" class="img-fluid" alt="Card Image">
										</div>
										<div class="card-body d-flex align-items-center custom-view-more px-4">
											<p class="card-text w-100 mb-0">Cras a elit sit amet leo accumsan. Suspendisse hendrerit. </p>
											<img width="50" class="w-auto" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 50px;">
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<a href="demo-business-consulting-3-services.html" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
									<span>All Services</span>
								</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 section-with-shape-divider position-relative bg-dark border-0 m-0">
					<div class="shape-divider shape-divider-reverse-x z-index-3" style="height: 102px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1920 102" preserveaspectratio="xMinYMin">
							<polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 "></polygon>
							<polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 "></polygon>
						</svg>
					</div>
					<div class="position-absolute top-0 left-0 h-100 d-none d-lg-block overlay overlay-show overlay-color-primary" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/business-consulting-3/parallax/parallax-1.jpg" style="width: 40%;"></div>
					<div class="container position-relative z-index-3 pt-5 mt-5">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h2 class="custom-text-background custom-big-font-size-1 text-15 font-weight-bold float-right clearfix line-height-1 lazyload pr-xl-5 mr-3 mb-0 d-none d-lg-block" data-bg-src="img/demos/business-consulting-3/backgrounds/text-background-2.jpg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.6, 'transition': true, 'horizontal': true, 'transitionDuration': 1000, 'isInsideSVG': true}">BENEFITS</h2>
							</div>
							<div class="col-lg-6">
								<h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">WHY US</h2>
								<h3 class="text-9 line-height-3 text-transform-none font-weight-medium text-color-light ls-0 mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Learn Here The Main Reasons Why You Should Choose Us</h3>
								<p class="text-3-5 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. </p>
								<ul class="list pl-0 pr-lg-5 mb-0">
									<li class="d-flex align-items-start pb-1 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
										<i class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i> 
										<span class="text-3-5 pl-3">We wil identify where you're getting off-track in all areas and not just</span>
									</li>
									<li class="d-flex align-items-start pb-1 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
										<i class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
										<span class="text-3-5 pl-3">We create a program that accelerates your strategic execution and growth goals.
										</span>
									</li>
									<li class="d-flex align-items-start appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
										<i class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
										<span class="text-3-5 pl-3">Consistently hit strategic objectives and revenue targets, and grow, year over year.</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row align-items-center py-4 my-5 mb-lg-0 my-xl-5">
						<div class="col-lg-7 mb-5 mb-lg-0">
							<h2 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4">Skills That Make a Meaningful Difference for Your Business</h2>
							<p class="text-3-5 pb-3 mb-4">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. </p>
							<div class="progress-bars">
								<div class="progress-label d-flex justify-content-between">
									<span class="text-color-dark font-weight-semibold text-2">STRATEGY ACCELERATION</span>
									<span class="text-color-dark font-weight-semibold text-2">90%</span>
								</div>
								@include('porto.partials.progress.progress-10')

								<hr class="my-0">

								<div class="progress-label d-flex justify-content-between pt-2">
									<span class="text-color-dark font-weight-semibold text-2">REVENUE GROWTH</span>
									<span class="text-color-dark font-weight-semibold text-2">80%</span>
								</div>
								@include('porto.partials.progress.progress-11')

								<hr class="my-0">

								<div class="progress-label d-flex justify-content-between pt-2">
									<span class="text-color-dark font-weight-semibold text-2">FIREWALK SALES</span>
									<span class="text-color-dark font-weight-semibold text-2">50%</span>
								</div>
								@include('porto.partials.progress.progress-12')
							</div>
						</div>
						<div class="col-lg-5">
							<img src="img/demos/business-consulting-3/generic/generic-4.jpg" class="img-fluid" alt="">
						</div>
					</div>
				</div>

				<section class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
					<div class="shape-divider" style="height: 123px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1920 123" preserveaspectratio="xMinYMin">
							<polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
							<polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
						</svg>
					</div>
					<div class="container mt-4">
						<div class="row justify-content-center">
							<div class="col-lg-11 col-xl-10 text-center">
								<h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">THE MEMBERS</h2>
								<h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our Amazing Team</h3>
								<p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								@include('porto.partials.owl-carousel.owl-carousel-26')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-with-shape-divider position-relative bg-dark border-0 m-0">
					<div class="shape-divider shape-divider-reverse-x z-index-3" style="height: 102px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1920 102" preserveaspectratio="xMinYMin">
							<polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 "></polygon>
							<polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 "></polygon>
						</svg>
					</div>
					<div class="position-absolute top-0 right-0 overlay overlay-show overlay-color-primary overlay-op-9 h-100 lazyload d-none d-md-block" data-bg-src="img/demos/business-consulting-3/backgrounds/background-2.jpg" style="width: 32%; background-size: cover; background-position: center;"></div>
					<div class="container">
						<div class="row align-items-center pt-5 pb-xl-5 mt-5">
							<div class="col-md-7 col-lg-8 py-4 my-2 ml-md-3 ml-lg-0">
								<h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">GET IN TOUCH</h2>
								<h3 class="text-9 line-height-3 text-transform-none font-weight-medium text-color-light ls-0 mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Send Us a Message and Learn More About Our Services</h3>
								<p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet. </p>
								<form class="contact-form form-style-4 form-placeholders-light form-errors-light appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" action="php/contact-form.php" method="POST">
									<div class="contact-form-success alert alert-success d-none mt-4">
										<strong>Success!</strong> Your message has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none mt-4">
										<strong>Error!</strong> There was an error sending your message.
										<span class="mail-error-message text-1 d-block"></span>
									</div>
									
									<div class="form-row">
										<div class="form-group col">
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="name" placeholder="* Full Name" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="email" placeholder="* Email Address" required>
										</div>
									</div>
									<div class="form-row mb-4">
										<div class="form-group col">
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="message" placeholder="* Message" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
											<button type="submit" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-loading-text="Loading..." data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
												<span>Send Message</span>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-3 border-0 m-0 lazyload" data-bg-src="img/demos/business-consulting-3/backgrounds/background-3.jpg">
					<div class="container py-4">
						<div class="row">
							<div class="col text-center">
								<h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">TESTIMONIALS</h2>
								<h3 class="text-9 line-height-3 text-transform-none font-weight-semibold text-color-dark pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">What People Say</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-11 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
								@include('porto.partials.owl-carousel.owl-carousel-27')
							</div>
						</div>
					</div>
				</section>

				<div class="container py-5 my-4">
					<div class="row justify-content-center pt-3">
						<div class="col-lg-10 text-center">
							<h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">THE BLOG</h2>
							<h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our Recent News</h3>
							<p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>
						</div>
					</div>
					<div class="row row-gutter-sm justify-content-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
						<div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
							<a href="demo-business-consulting-3-blog-post.html" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
								<div class="card border-0 box-shadow-4">
									<div class="card-img-top position-relative overlay">
										<div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
											<span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
												<span class="position-relative z-index-2">
													18
													<span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
												</span>
											</span>
										</div>
										<img src="img/demos/business-consulting-3/blog/blog-1.jpg" class="img-fluid" alt="Lorem Ipsum Dolor">
									</div>
									<div class="card-body p-4">
										<span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">FINANCE</span>
										<h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">Lorem ipsum dolor sit a met, consectetur</h4>
										<span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
											View More
											<img width="27" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ml-2'}" style="width: 27px;">
										</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
							<a href="demo-business-consulting-3-blog-post.html" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
								<div class="card border-0 box-shadow-4">
									<div class="card-img-top position-relative overlay">
										<div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
											<span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
												<span class="position-relative z-index-2">
													15
													<span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
												</span>
											</span>
										</div>
										<img src="img/demos/business-consulting-3/blog/blog-2.jpg" class="img-fluid" alt="Lorem Ipsum Dolor">
									</div>
									<div class="card-body p-4">
										<span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">FINANCE</span>
										<h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">Lorem ipsum dolor sit a met, consectetur</h4>
										<span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
											View More
											<img width="27" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ml-2'}" style="width: 27px;">
										</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-9 col-md-6 col-lg-4">
							<a href="demo-business-consulting-3-blog-post.html" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
								<div class="card border-0 box-shadow-4">
									<div class="card-img-top position-relative overlay">
										<div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
											<span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
												<span class="position-relative z-index-2">
													12
													<span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
												</span>
											</span>
										</div>
										<img src="img/demos/business-consulting-3/blog/blog-3.jpg" class="img-fluid" alt="Lorem Ipsum Dolor">
									</div>
									<div class="card-body p-4">
										<span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">FINANCE</span>
										<h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">Lorem ipsum dolor sit a met, consectetur</h4>
										<span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
											View More
											<img width="27" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ml-2'}" style="width: 27px;">
										</span>
									</div>
								</div>
							</a>
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
