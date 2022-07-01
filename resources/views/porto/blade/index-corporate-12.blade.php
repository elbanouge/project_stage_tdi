@extends('porto.app')
@section('header')
@include('porto.partials.header.header-328')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.owl-carousel.owl-carousel-312')

				<div class="container">
					<div class="row pb-3 my-5">
						<div class="featured-boxes featured-boxes-style-2">
							<div class="row">
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
									@include('porto.partials.featured-box.featured-box-450', ['key' => 'featured-box.featured-box-450'])
								</div>
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
									@include('porto.partials.featured-box.featured-box-451', ['key' => 'featured-box.featured-box-451'])
								</div>
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
									@include('porto.partials.featured-box.featured-box-452', ['key' => 'featured-box.featured-box-452'])
								</div>
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
									@include('porto.partials.featured-box.featured-box-453', ['key' => 'featured-box.featured-box-453'])
								</div>
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
									@include('porto.partials.featured-box.featured-box-454', ['key' => 'featured-box.featured-box-454'])
								</div>
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
									@include('porto.partials.featured-box.featured-box-455', ['key' => 'featured-box.featured-box-455'])
								</div>
							</div>
						</div>

					</div>
				</div>
				
				<hr>

				<div class="container">
					<div class="row pt-4 mt-5">
						<div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">
							<h2 class="font-weight-normal text-6 pb-2 mb-4"><strong class="font-weight-extra-bold">Recent Projects</strong></h2>
						</div>
					</div>
				</div>
				<div class="image-gallery sort-destination full-width mb-0">
					<div class="isotope-item">
						<div class="image-gallery-item mb-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
							<a href="portfolio-single-wide-slider.html">
								@include('porto.partials.thumb-info.thumb-info-484')
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
							<a href="portfolio-single-wide-slider.html">
								@include('porto.partials.thumb-info.thumb-info-485')
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0 appear-animation" data-appear-animation="fadeIn">
							<a href="portfolio-single-wide-slider.html">
								@include('porto.partials.thumb-info.thumb-info-486')
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
							<a href="portfolio-single-wide-slider.html">
								@include('porto.partials.thumb-info.thumb-info-487')
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
							<a href="portfolio-single-wide-slider.html">
								@include('porto.partials.thumb-info.thumb-info-488')
							</a>
						</div>
					</div>
				</div>
				<div class="container-fluid bg-color-dark">
					<div class="row">
						<div class="col text-center p-0">
							<a class="btn btn-dark btn-block text-3 py-4" href="#">LOAD MORE...</a>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row justify-content-center pt-5 my-5">
						<div class="col-lg-8 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
							<h2 class="font-weight-bold mb-3">Porto is incredibly beautiful and fully responsive.</h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</p>
						</div>
					</div>
					<div class="row justify-content-center">

						<div class="col-md-7 col-lg-4 mb-5 mb-lg-0">
							@include('porto.partials.circular-bar.circular-bar-12')
							<div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
								<h4 class="font-weight-bold">Meeting</h4>
								<p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
							</div>
						</div>

						<div class="col-md-7 col-lg-4 mb-5 mb-lg-0">
							@include('porto.partials.circular-bar.circular-bar-13')
							<div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
								<h4 class="font-weight-bold">Execute</h4>
								<p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
							</div>
						</div>

						<div class="col-md-7 col-lg-4">
							@include('porto.partials.circular-bar.circular-bar-14')
							<div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
								<h4 class="font-weight-bold">Delivery</h4>
								<p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
							</div>
						</div>
						
					</div>

					</div>
				</div>
@endsection

@section('footer')
<footer id="footer" class="footer-top-border bg-color-light-scale-1 mt-0">
				@include('porto.partials.footer-copyright.footer-copyright-69', ['key' => 'footer-copyright.footer-copyright-69'])
			</footer>
@endsection
