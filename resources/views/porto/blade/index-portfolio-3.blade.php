@extends('porto.app')
@section('header')
@include('porto.partials.header.header-348')
@endsection

@section('main')
<div role="main" class="main">

				<div class="sort-destination-loader sort-destination-loader-showing m-0 mt-2 p-0">
					<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
						
						<div class="col-sm-6 col-lg-4 isotope-item">
							@include('porto.partials.portfolio-item.portfolio-item-82', ['key' => 'portfolio-item.portfolio-item-82'])
						</div>

						<div class="col-sm-6 col-lg-4 isotope-item">
							@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-83'])
						</div>

						<div class="col-sm-6 col-lg-4 isotope-item">
							@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-84'])
						</div>

						<div class="col-sm-6 col-lg-4 isotope-item">
							@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-85'])
						</div>									

						<div class="col-sm-6 col-lg-2 isotope-item">
							@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-86'])
						</div>

						<div class="col-sm-6 col-lg-5 isotope-item">
							@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-87'])
						</div>

						<div class="col-sm-6 col-lg-5 isotope-item">
							@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-88'])
						</div>

					</div>
				</div>

				@include('porto.partials.nav-pills.nav-pills-7')

				<div class="container pt-3 pb-5 mt-2 mb-3">
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

				@include('porto.partials.call-to-action.call-to-action-35')

				<section class="section section-height-3 bg-light border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								
								@include('porto.partials.owl-carousel.owl-carousel-352')

							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="footer-top-border bg-color-light-scale-1 border-0 mt-2">
				@include('porto.partials.footer-copyright.footer-copyright-77', ['key' => 'footer-copyright.footer-copyright-77'])
			</footer>
@endsection
