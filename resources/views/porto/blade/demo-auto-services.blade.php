@extends('porto.app')
@section('header')
@include('porto.partials.header.header-20')
@endsection

@section('main')
<div role="main" class="main">
				
				<section class="section custom-section-background position-relative border-0 overflow-hidden m-0 p-0">
					<div class="position-absolute top-0 left-0 right-0 bottom-0 animated fadeIn" style="animation-delay: 600ms;">
						<div class="background-image-wrapper custom-background-style-1 position-absolute top-0 left-0 right-0 bottom-0 animated kenBurnsToRight" style="background-image: url(img/demos/auto-services/backgrounds/background-1.jpg); background-position: center right; animation-duration: 30s;"></div>
					</div>
					<div class="container position-relative py-sm-5 my-5">
						<svg class="custom-svg-1 d-none d-sm-block" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 649 578">
							<path fill="#FFF" d="M-225.5,154.7l358.45,456.96c7.71,9.83,21.92,11.54,31.75,3.84l456.96-358.45c9.83-7.71,11.54-21.92,3.84-31.75
								L267.05-231.66c-7.71-9.83-21.92-11.54-31.75-3.84l-456.96,358.45C-231.49,130.66-233.2,144.87-225.5,154.7z"></path>
							<path class="animated customLineAnim" fill="none" stroke="#1C5FA8" stroke-width="1.5" stroke-miterlimit="10" d="M416-21l202.27,292.91c5.42,7.85,3.63,18.59-4.05,24.25L198,603" style="animation-delay: 300ms; animation-duration: 5s;"></path>
						</svg>
						<div class="row mb-5">
							<div class="col-md-8 col-lg-6 col-xl-5">
								<div class="overflow-hidden mb-1">
									<h2 class="font-weight-bold text-color-grey text-4-5 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">Mechanics Who Are Ready To Work For You</h2>
								</div>
								<h1 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Reliable And Knowledgeable Mechanics Located In Los Angeles, CA</h1>
								<a href="#" class="btn btn-primary custom-btn-border-radius custom-btn-arrow-effect-1 font-weight-bold text-3 px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
									GET STARTED 
									<svg class="ml-2" version="1.1" viewbox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1200">
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-sm-9 col-md-12 col-lg-7 text-center text-lg-right mb-4 mb-lg-0">
								<h2 class="font-weight-bold text-color-primary text-7 line-height-1 mb-1 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1700">Complete Auto Services and Body Shop</h2>
								<p class="font-weight-bold text-4 mb-0 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1900">Make An Appointment Today With Our Online Form</p>
							</div>
							<div class="col-lg-5 text-center text-lg-left pl-lg-4">
								<a href="demo-auto-services-appointment.html" class="btn btn-primary btn-outline custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 ml-lg-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1500">MAKE AN APPOINTMENT</a>
							</div>
						</div>
					</div>
				</section>

				<div class="container my-5 pt-md-4 pt-xl-0">
					<div class="row align-items-center justify-content-center pb-4 mb-5">
						<div class="col-lg-6 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
							<div class="overflow-hidden">
								<h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Twenty Years of Top Experience</h2>
							</div>
							<div class="custom-divider divider divider-primary divider-small my-3">
								<hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700">
							</div>
							<p class="font-weight-light text-3-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
							<p class="pb-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non.</p>
							<div class="d-flex align-items-start align-items-sm-center flex-column flex-sm-row">
								<a href="demo-auto-services-about-us.html" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 mr-sm-2 mb-3 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="950">VIEW MORE</a>
								@include('porto.partials.feature-box.feature-box-16')
							</div>
						</div>
						<div class="col-10 col-md-9 col-lg-6 pl-lg-5 pr-5 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1450" data-plugin-options="{'accY': -200}">
							<div class="position-relative">
								<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
									<img src="img/demos/auto-services/generic-1.png" class="img-fluid" alt="">
								</div>
								<div class="position-absolute transform3dxy-n50" style="top: 25%; left: 7%;">
									<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': false}">
										<img src="img/demos/auto-services/generic-1-1.png" class="appear-animation" alt="" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1700">
									</div>
								</div>
								<div class="position-absolute transform3dxy-n50 ml-5 pb-5 ml-xl-0" style="top: 32%; left: 85%;">
									<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1500, 'isInsideSVG': false}">
										<img src="img/demos/auto-services/generic-1-2.png" class="appear-animation" alt="" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1900">
									</div>
								</div>
								<div class="position-absolute transform3dxy-n50" style="top: 90%; left: 19%;">
									<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': false}">
										<img src="img/demos/auto-services/generic-1-3.png" class="appear-animation" alt="" data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="2100">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row pb-2">
						<div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
							<a href="demo-auto-services-services-detail.html" class="text-decoration-none">
								<div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250" data-plugin-options="{'accY': -200}">
									<div class="custom-icon-style-1 mb-4">
										<img width="50" src="img/demos/auto-services/icons/checklist.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}">
									</div>
									<h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-3 px-xl-5 my-2">Complete Auto Body and Paint Shop</h3>
									<p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
								</div>
							</a>
						</div>
						<div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
							<a href="demo-auto-services-services-detail.html" class="text-decoration-none">
								<div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'accY': -200}">
									<div class="custom-icon-style-1 mb-4">
										<img width="50" src="img/demos/auto-services/icons/wheel-disk.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}">
									</div>
									<h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-xl-5 my-2 mx-4">Free Diagnosis &amp; Brake Checks</h3>
									<p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
								</div>
							</a>
						</div>
						<div class="col-lg-4 text-center px-lg-5">
							<a href="demo-auto-services-services-detail.html" class="text-decoration-none">
								<div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750" data-plugin-options="{'accY': -200}">
									<div class="custom-icon-style-1 mb-4">
										<img width="50" src="img/demos/auto-services/icons/car-safe.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}">
									</div>
									<h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-4 px-xl-5 my-2">Car Mechanics You Can Trust</h3>
									<p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
								</div>
							</a>
						</div>
					</div>
				</div>

				<section class="section custom-bg-color-grey-1 custom-background-size-1 position-relative overflow-hidden border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '130%', 'fadeIn': true}" data-image-src="img/demos/auto-services/backgrounds/background-2.jpg">
					<svg class="custom-svg-background-1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1920 537">
						<path fill="#F4F4F4" d="M964.33,189.3L1110.08,0H0v537h1338.31L972.96,255.7C952.24,239.74,948.38,210.02,964.33,189.3z"></path>
						<path class="appear-animation" data-appear-animation="customLineAnim2" data-appear-animation-delay="500" data-appear-animation-duration="5s" data-plugin-options="{'accY': -400}" fill="none" stroke="#1C5FA8" stroke-width="2" stroke-miterlimit="10" d="M1854.35,105.63l-485.31-340.84c-18.3-12.85-43.56-8.44-56.42,9.86L971.79,259.96
							c-12.85,18.3-8.44,43.56,9.86,56.42l485.31,340.84c18.3,12.85,43.56,8.44,56.42-9.86l340.84-485.31
							C1877.07,143.74,1872.65,118.48,1854.35,105.63z"></path>
					</svg>
					<div class="container my-5">
						<div class="row">
							<div class="col-lg-6">
								<div class="overflow-hidden">
									<h2 class="font-weight-bold text-color-dark line-height-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Proudly Serving All Brands</h2>
								</div>
								<div class="custom-divider divider divider-primary divider-small pt-1 mb-3 mt-2">
									<hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
								</div>
								<p class="font-weight-light text-3-5 pb-3 pr-5 mr-md-5 mr-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
								<div class="row">
									<div class="col-5 col-lg-4 order-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750">
										<ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Brand 1
											</li>
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Brand 2
											</li>
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Brand 3
											</li>
										</ul>
									</div>
									<div class="col-lg-4 order-3 order-lg-2 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1000">
										<ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Brand 4
											</li>
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Brand 5
											</li>
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Brand 6
											</li>
										</ul>
									</div>
									<div class="col-6 col-lg-4 order-2 order-lg-3 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1250">
										<ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Brand 7
											</li>
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Brand 8
											</li>
											<li class="font-weight-semibold text-color-dark">
												<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
												Brand 9
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-5 my-5">
					<div class="row justify-content-center">
						<div class="col-lg-9 col-xl-8 text-center">
							<div class="overflow-hidden">
								<h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Auto Services</h2>
							</div>
							<div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
								<hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
							</div>
							<p class="font-weight-light text-3-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
						</div>
					</div>
					<div class="row row-gutter-sm mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
						<div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
							<a href="demo-auto-services-services-detail.html" class="text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-4')
							</a>
						</div>
						<div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
							<a href="demo-auto-services-services-detail.html" class="text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-5')
							</a>
						</div>
						<div class="col-sm-6 col-lg-3 text-center mb-4 mb-sm-0">
							<a href="demo-auto-services-services-detail.html" class="text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-6')
							</a>
						</div>
						<div class="col-sm-6 col-lg-3 text-center">
							<a href="demo-auto-services-services-detail.html" class="text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-7')
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col text-center">
							<a href="demo-auto-services-services.html" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850">VIEW ALL SERVICES</a>
						</div>
					</div>
				</div>

				<section class="section border-0 m-0">
					<div class="container pb-3 my-5">
						<div class="row justify-content-center pb-3 mb-4">
							<div class="col text-center">
								<h2 class="font-weight-bold text-color-dark line-height-1 mb-0">See What Clients Are Saying</h2>
								<div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
									<hr class="my-0">
								</div>
								<p class="font-weight-bold text-3-5 mb-1">We are very proud of the service we provide and stand by every product we carry.</p>
								<p class="font-weight-light text-3-5 mb-0">Read our testimonials from our happy customers.</p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-15')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-3 bg-primary border-0 m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-xl-7 text-center text-lg-left mb-4 mb-lg-0">
								<h2 class="text-color-light font-weight-medium text-3-5 line-height-2 line-height-sm-1 ls-0 mb-2 mb-lg-2">LOOKING FOR HONEST AND RELIABLE SERVICES?</h2>
								<h3 class="font-weight-bold text-color-light text-transform-none text-8 line-height-2 line-height-lg-1 mb-1">Best Mechanics Downtown Los Angeles CA</h3>
								<p class="font-weight-bold text-color-light text-4 opacity-7 mb-0">Make An Appointment Today With Our Online Form</p>
							</div>
							<div class="col-lg-6 col-xl-5">
								<div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
									@include('porto.partials.feature-box.feature-box-17')
									<a href="demo-auto-services-appointment.html" class="btn btn-light btn-outline custom-btn-border-radius font-weight-bold text-color-light text-color-hover-dark bg-color-hover-light btn-px-5 btn-py-3">MAKE AN APPOINTMENT</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				@include('porto.partials.lightbox.lightbox-9')

				<div class="container py-5 my-5">
					<div class="row justify-content-center pb-3 mb-4">
						<div class="col-lg-9 col-xl-8 text-center">
							<div class="overflow-hidden">
								<h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Frequently Asked Questions</h2>
							</div>
							<div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
								<hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="650">
							</div>
							<p class="font-weight-light text-3-5 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
						</div>
					</div>
					<div class="row row-gutter-sm">
						<div class="col-md-8 col-lg-9 mb-5 mb-md-0">
							<svg class="custom-svg-2 overflow-visible" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 185 151">
								<g data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}">
									<path fill="#F4F4F4" class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="850" d="M34.81,102.81L5.18,73.18c-2.13-2.13-2.13-5.59,0-7.72l29.63-29.63c2.13-2.13,5.59-2.13,7.72,0l29.63,29.63
										c2.13,2.13,2.13,5.59,0,7.72l-29.63,29.63C40.4,104.94,36.94,104.94,34.81,102.81z"></path>
								</g>
								<g data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': true}">
									<path fill="#F4F4F4" class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" d="M92.49,35.35L80.4,23.26c-1.75-1.75-1.75-4.59,0-6.34L92.49,4.83c1.75-1.75,4.59-1.75,6.34,0l12.09,12.09
										c1.75,1.75,1.75,4.59,0,6.34L98.83,35.35C97.08,37.1,94.24,37.1,92.49,35.35z"></path>
								</g>
								<g data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 3000, 'isInsideSVG': true}">
									<path fill="#F4F4F4" class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1150" d="M129.88,148.41l-43.21-43.21c-2.13-2.13-2.13-5.59,0-7.72l43.21-43.21c2.13-2.13,5.59-2.13,7.72,0l43.21,43.21
										c2.13,2.13,2.13,5.59,0,7.72l-43.21,43.21C135.46,150.54,132.01,150.54,129.88,148.41z"></path>
								</g>
							</svg>
							<div class="accordion custom-accordion-style-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" id="accordion1">
								<div class="card card-default">
									<div class="card-header" id="collapse1HeadingOne">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-toggle="collapse" data-target="#collapse1One" aria-expanded="false" aria-controls="collapse1One">
												1 - Why Choose Porto Auto Services?
											</a>
										</h4>
									</div>
									<div id="collapse1One" class="collapse" aria-labelledby="collapse1HeadingOne" data-parent="#accordion1">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse1HeadingTwo">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-toggle="collapse" data-target="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">
												2 - Cras a elit sit amet leo accumsan?
											</a>
										</h4>
									</div>
									<div id="collapse1Two" class="collapse" aria-labelledby="collapse1HeadingTwo" data-parent="#accordion1">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse1HeadingThree">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-toggle="collapse" data-target="#collapse1Three" aria-expanded="false" aria-controls="collapse1Three">
												3 - Hel officitur felis ultricis nan?
											</a>
										</h4>
									</div>
									<div id="collapse1Three" class="collapse" aria-labelledby="collapse1HeadingThree" data-parent="#accordion1">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse1HeadingFour">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-toggle="collapse" data-target="#collapse1Four" aria-expanded="false" aria-controls="collapse1Four">
												4 - Wuspaisse hendreirit vehicula leo?
											</a>
										</h4>
									</div>
									<div id="collapse1Four" class="collapse" aria-labelledby="collapse1HeadingFour" data-parent="#accordion1">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse1HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-toggle="collapse" data-target="#collapse1Five" aria-expanded="false" aria-controls="collapse1Five">
												5 - Lintegers aliquet ullamcorper dollor, quis sollic tudin?
											</a>
										</h4>
									</div>
									<div id="collapse1Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-parent="#accordion1">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-3 text-center text-md-left">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								<h3 class="font-weight-bold text-color-dark text-transform-none text-5-5 mb-3">Our Mission</h3>
								<p class="pb-1 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<a href="demo-auto-services-about-us.html" class="btn btn-primary custom-btn-border-radius font-weight-bold btn-px-5 py-3 mb-2">VIEW MORE</a>

								<hr class="my-4">
							</div>
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
								<h3 class="font-weight-bold text-color-dark text-transform-none text-5-5 pt-2 mb-3">Any Questions?</h3>
								<p class="pb-1 mb-2">Lorem ipsum dolor sit amet, consect etur adipiscing elit.</p>
								<a href="demo-auto-services-contact.html" class="btn btn-primary custom-btn-border-radius font-weight-bold btn-px-5 py-3">CONTACT US</a>
							</div>
						</div>
					</div>
				</div>

				<section class="shop section section-height-4 border-0 m-0">
					<div class="container">
						<div class="row justify-content-center pb-3 mb-4">
							<div class="col-lg-8 text-center">
								<div class="overflow-hidden">
									<h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Products For Sale</h2>
								</div>
								<div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
									<hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
								</div>
								<p class="font-weight-light text-3-5 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
							</div>
						</div>
						<div class="products row row-gutter-sm mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
							<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
								@include('porto.partials.product.product-8')
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
								@include('porto.partials.product.product-9')
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
								@include('porto.partials.product.product-10')
							</div>
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.product.product-11')
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<a href="demo-auto-services-products.html" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">VIEW ALL PRODUCTS</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-transparent position-relative border-0 z-index-1 m-0 p-0">
					<div class="container py-4">
						<div class="row align-items-center text-center py-5">
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-8.png" alt class="img-fluid" style="max-width: 90px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-9.png" alt class="img-fluid" style="max-width: 140px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-10.png" alt class="img-fluid" style="max-width: 140px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
								<img src="img/logos/logo-11.png" alt class="img-fluid" style="max-width: 140px;">
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
								<img src="img/logos/logo-12.png" alt class="img-fluid" style="max-width: 100px;">
							</div>
							<div class="col-sm-4 col-lg-2">
								<img src="img/logos/logo-13.png" alt class="img-fluid" style="max-width: 100px;">
							</div>
						</div>
					</div>
					<svg class="custom-svg-3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 193 495">
						<path fill="#1C5FA8" d="M193,25.73L18.95,247.93c-13.62,17.39-10.57,42.54,6.82,56.16L193,435.09V25.73z"></path>
						<path fill="none" stroke="#FFF" stroke-width="1.5" stroke-miterlimit="10" d="M196,53.54L22.68,297.08c-12.81,18-8.6,42.98,9.4,55.79L196,469.53V53.54z"></path>
					</svg>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-0 mt-0">
				<div class="container py-5">
					<div class="row py-3">
						<div class="col-md-4 mb-5 mb-md-0">
							@include('porto.partials.feature-box.feature-box-18')
						</div>
						<div class="col-md-4 mb-5 mb-md-0">
							@include('porto.partials.feature-box.feature-box-19')
						</div>
						<div class="col-md-4">
							@include('porto.partials.feature-box.feature-box-20')
						</div>
					</div>
				</div>
				<hr class="bg-light opacity-2 my-0">
				<div class="container pb-5">
					<div class="row text-center text-md-left py-4 my-5">
						<div class="col-md-6 col-lg-3 align-self-center text-center text-md-left text-lg-center mb-5 mb-lg-0">
							<a href="demo-auto-services.html" class="text-decoration-none">
								<img src="img/demos/auto-services/logo-light.png" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">About Us</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">ADDRESS</span> 
									<a href="demo-auto-services-contact.html#get-direction" class="text-color-light custom-text-underline-1 font-weight-medium text-3-5">GET DIRECTIONS</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5 mb-1">PHONE</span>
									<ul class="list list-unstyled font-weight-light text-3-5 mb-0">
										<li class="text-color-light line-height-3 mb-0">
											Sales: <a href="tel:+1234567890" class="text-decoration-none text-color-light text-color-hover-default">+123 4567 890</a>
										</li>
										<li class="text-color-light line-height-3 mb-0">
											Services: <a href="tel:+1234567890" class="text-decoration-none text-color-light text-color-hover-default">+123 4567 890</a>
										</li>
									</ul>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">EMAIL</span>
									<a href="mailto:mail@example.com" class="text-decoration-none font-weight-light text-3-5 text-color-light text-color-hover-default">mail@example.com</a>
								</li>
							</ul>
							<ul class="social-icons social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-2">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 mb-5 mb-md-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Auto Services</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Brake Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Check Engine</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Suspension Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Transmission Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">A/C Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Oil Change</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Electrical Diagnostics</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Tune Up</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Fuel System Repair</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 offset-lg-1">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Opening Hours</h5>
							<ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
								<li>Mon - Fri: 8:30 am to 5:00 pm</li>
								<li>Saturday: 9:30 am to 1:00 pm</li>
								<li>Sunday: Closed</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-5', ['key' => 'footer-copyright.footer-copyright-5'])
			</footer>
@endsection
