@extends('porto.app')
@section('header')
@include('porto.partials.header.header-173')
@endsection

@section('main')
<div role="main" class="main" id="main">
				
				<div class="container p-0">

					<div id="photographyLightbox" class="mfp-hide">
						<div class="thumb-gallery">
							@include('porto.partials.owl-carousel.owl-carousel-120')
							@include('porto.partials.owl-carousel.owl-carousel-121')
						</div>
					</div>
					<ul id="portfolioGrid" class="portfolioInfiniteScrollWrapper portfolioInfiniteScroll-list p-0" data-grid-sizer=".col-md-6" data-total-pages="5">
						<li class="col-md-6 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-309')
								</a>
							</div>
						</li>
						<li class="col-md-6 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-310')
								</a>
							</div>
						</li>
						<li class="col-md-6 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-311')
								</a>
							</div>
						</li>
						<li class="col-md-6 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-312')
								</a>
							</div>
						</li>
						<li class="col-md-6 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-313')
								</a>
							</div>
						</li>
						<li class="col-md-6 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-314')
								</a>
							</div>
						</li>
					</ul>
					<div id="portfolioInfiniteScrollLoadMoreBtnWrapper" class="row">
						<div class="col text-center">
							<div id="portfolioInfiniteScrollLoadMoreLoader" class="portfolioInfiniteScroll-load-more-loader load-more-loader">
								<div class="bounce-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>
							</div>

							<button id="portfolioInfiniteScrollLoadMore" type="button" class="btn btn-portfolioInfiniteScroll-lazy-load btn-quaternary btn-outline custom-border-radius font-weight-semibold text-uppercase">View More</button>
						</div>
					</div>
				
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="light narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>
@endsection
