@extends('porto.app')
@section('header')
@include('porto.partials.header.header-347')
@endsection

@section('main')
<div role="main" class="main">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 text-center text-lg-left">
							<h2 class="font-weight-bold text-8 line-height-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"><span class="text-5">Hello, we are a <span class="text-color-primary">Digital Agency</span> From New York City.</span></h2>
						</div>
						<div class="col-lg-3 text-center text-lg-right">
							<h4 class="text-4 line-height-6 font-weight-normal appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"><span class="opacity-6">Lorem ipsum dolor sit amet, conur adipiscing elit phasellus blandit massa enim.</span></h4>
						</div>
						<div class="col-lg-2 text-center text-lg-right">
							<a class="btn btn-outline btn-rounded btn-primary btn-with-arrow mb-5 mb-lg-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" href="#">Contact Us <span><i class="fas fa-chevron-right"></i></span></a>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
								<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual nav-inside nav-style-1 nav-light mt-2" data-plugin-options="{'autoplayTimeout': 6000}" data-dynamic-height="['460px','460px','460px','210px','180px']" style="height: 460px;">
									<div class="owl-stage-outer">
										<div class=porto.partials
											
											<!-- Carousel Slide 1 -->
											@include('porto.partials.owl-item.owl-item-62')

											<!-- Carousel Slide 2 -->
											@include('porto.partials.owl-item.owl-item-63')

											<!-- Carousel Slide 3 -->
											@include('porto.partials.owl-item.owl-item-64')

										</div>
									</div>
									<div class="owl-nav">
										<button type="button" role="presentation" class="owl-prev"></button>
										<button type="button" role="presentation" class="owl-next"></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
					<hr class="my-5">
				</div>

				<div class="container">
					<div class="row">
						<div class="col">
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
								@include('porto.partials.nav-pills.nav-pills-30')

								<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
									<div class="porto.partialsort-destination" data-sort-id="portfolio">
										

										<div class=porto.partialssotope-item brands">
											@include('porto.partials.portfolio-item.portfolio-item-72', ['key' => 'portfolio-item.portfolio-item-72'])
										</div>
porto.partials
										<div class="col-sm-6 col-lg-3 isotope-item medias">
											@include('porto.partials.portfolio-item.portfolio-item-73', ['key' => 'portfolio-item.portfolio-item-73'])
										</div>porto.partials

										<div class="col-sm-6 col-lg-3 isotope-item logos">
											@include('porto.partials.portfolio-item.portfolio-item-74', ['key' => 'portfolio-item.portfolio-item-74'])
										</div>

										<div class=porto.partialssotope-item websites">
											@include('porto.partials.portfolio-item.portfolio-item-74', ['key' => 'portfolio-item.portfolio-item-75'])
										</div>
porto.partials
										<div class="col-sm-6 col-lg-3 isotope-item logos">
											@include('porto.partials.portfolio-item.portfolio-item-74', ['key' => 'portfolio-item.portfolio-item-76'])
										</div>porto.partials

										<div class="col-sm-6 col-lg-3 isotope-item brands">
											@include('porto.partials.portfolio-item.portfolio-item-74', ['key' => 'portfolio-item.portfolio-item-77'])
										</div>

										<div class=porto.partialssotope-item websites">
											@include('porto.partials.portfolio-item.portfolio-item-74', ['key' => 'portfolio-item.portfolio-item-78'])
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item medias">
											@include('porto.partials.portfolio-item.portfolio-item-74', ['key' => 'portfolio-item.portfolio-item-79'])
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item logos">
											@include('porto.partials.portfolio-item.portfolio-item-74', ['key' => 'portfolio-item.portfolio-item-80'])
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item websites">
											@include('porto.partials.portfolio-item.portfolio-item-74', ['key' => 'portfolio-item.portfolio-item-81'])
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-no-border section-height-4 mt-5 mb-0">
					<div class="container">
						<div class="row justify-content-center text-center">
							<div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftBig">
								<h4 class="font-weight-bold mb-2 mt-4 mt-md-0 text-6 mb-3">Mobile Apps</h4>
								<p class="px-lg-4 mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.
								</p>
							</div>
							<div class="col-md-4 mb-2 appear-animation" data-appear-animation="fadeIn">
								<h4 class="font-weight-bold mb-2 mt-4 mt-md-0 text-6 mb-3">Creative Websites</h4>
								<p class="px-lg-4 mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.
								</p>
							</div>
							<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightBig">
								<h4 class="font-weight-bold mb-2 mt-4 mt-md-0 text-6 mb-3">SEO Optimization</h4>
								<p class="px-lg-4 mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.
								</p>
							</div>
						</div>
					</div>
				</section>

				@include('porto.partials.call-to-action.call-to-action-34')

			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3 pl-3 pl-md-0">
								<img alt="Porto Website Template" src="img/logo-footer.png" height="32">
							</a>
						</div>
						<div class="col-md-8 d-flex justify-content-center justify-content-md-end mb-4 mb-lg-0">
							<div class="row">
								<div class="col-md-6 mb-3 mb-md-0">
									<div class="ml-3 text-center text-md-right">
										<h5 porto.partialsext-color-light">NEW YORK</h5>
										<p class="text-3 text-color-hover-light mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><a href="tel:+1234567890" class="pl-1">(123) 465-7890</a></p>            
									</div>
								</div>
								<div class="col-md-6">
									<div class="ml-3 text-center text-md-right">
										<h5 class="text-3 mb-0 text-color-light">LOS ANGELES</h5>
										<p class="text-3 text-color-hover-light mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><a href="tel:+1234567890" class="pl-1">(123) 465-7890</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-76', ['key' => 'footer-copyright.footer-copyright-76'])
			</footer>
@endsection
