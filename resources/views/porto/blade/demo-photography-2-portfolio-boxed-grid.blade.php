@extends('porto.app')
@section('header')
@include('porto.partials.header.header-163')
@endsection

@section('main')
<div role="main" class="main calc-height initial-height" id="main">
				
				<div class="container p-0">

					<div id="photographyLightbox" class="mfp-hide">
						<div class="thumb-gallery">
							@include('porto.partials.owl-carousel.owl-carousel-108')
							@include('porto.partials.owl-carousel.owl-carousel-109')
						</div>
					</div>
					<ul id="portfolioGrid" data-grid-sizer=".col-lg-4" class="p-0">
						<li class="col-md-8 col-lg-8 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-236')
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-237')
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-238')
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-239')
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-240')
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-241')
								</a>
							</div>
						</li>
						<li class="col-md-8 col-lg-8 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-242')
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-243')
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-244')
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-245')
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-246')
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-247')
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
