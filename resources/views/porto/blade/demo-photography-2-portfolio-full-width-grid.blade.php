@extends('porto.app')
@section('header')
@include('porto.partials.header.header-163')
@endsection

@section('main')
<div role="main" class="main calc-height initial-height" id="main">
				
				<div class="container-fluid p-0">

					<div id="photographyLightbox" class="mfp-hide">
						<div class="thumb-gallery">
							@include('porto.partials.owl-carousel.owl-carousel-115')
							@include('porto.partials.owl-carousel.owl-carousel-116')
						</div>
					</div>
					<ul id="portfolioGrid" class="p-0" data-grid-sizer=".col-lg-3">
						<li class="col-lg-6 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-264')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-265')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-266')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-267')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-268')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-269')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-270')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-271')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-272')
								</a>
							</div>
						</li>
						<li class="col-lg-6 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-273')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-274')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-275')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-276')
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-3 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-277')
								</a>
							</div>
						</li>
					</ul>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="light narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>
@endsection
