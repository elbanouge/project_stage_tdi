@extends('porto.app')
@section('header')
@include('porto.partials.header.header-173')
@endsection

@section('main')
<div role="main" class="main" id="main">
				
				<section class="portfolio-parallax parallax section section-text-light section-parallax d-none-plus m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-1.jpg">
					<div class="container-fluid">
						<h2 class="portfolio-parallax-title">The Happy Family</h2>
						<span class="thumb-info-icons position-style-3 text-color-light">
							<span class="thumb-info-icon pictures bg-color-primary">
								53
								<i class="far fa-image"></i>
							</span>
						</span>
					</div>
				</section>
				<div id="photographyLightbox" class="mfp-hide">
					<div class="thumb-gallery">
						@include('porto.partials.owl-carousel.owl-carousel-110')
						@include('porto.partials.owl-carousel.owl-carousel-111')
					</div>
				</div>
				<div class="container">
					<div class="row mt-4">
						<div class="col-lg-7">
							<div class="row portfolio-list">
								<div class="col-lg-12">
									<div class="portfolio-detail-image-item mb-4">
										<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
											@include('porto.partials.thumb-info.thumb-info-248')
										</a>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="portfolio-detail-image-item mb-4">
										<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
											@include('porto.partials.thumb-info.thumb-info-249')
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							@include('porto.partials.sidebar.sidebar-33')
						</div>
					</div>
					<div class="row mt-4 pt-3">
						<div class="col-lg-5">
							@include('porto.partials.sidebar.sidebar-34')
						</div>
						<div class="col-lg-7">
							<div class="row portfolio-list">
								<div class="col-lg-12">
									<div class="portfolio-detail-image-item mb-4">
										<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
											@include('porto.partials.thumb-info.thumb-info-250')
										</a>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="portfolio-detail-image-item mb-4">
										<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
											@include('porto.partials.thumb-info.thumb-info-251')
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-no-background section-no-border mb-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								@include('porto.partials.owl-carousel.owl-carousel-112')
							</div>
						</div>
					</div>
				</section>

				<div class="container p-0">
					<ul id="portfolioGrid" data-grid-sizer=".col-md-4" class="p-0">
						<li class="col-md-8 col-lg-8 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-252')
								</a>
							</div>
						</li>
						<li class="col-md-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-253')
								</a>
							</div>
						</li>
						<li class="col-md-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-254')
								</a>
							</div>
						</li>
						<li class="col-md-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-255')
								</a>
							</div>
						</li>
						<li class="col-md-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-256')
								</a>
							</div>
						</li>
						<li class="col-md-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-257')
								</a>
							</div>
						</li>
						<li class="col-md-8 col-lg-8 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-258')
								</a>
							</div>
						</li>
						<li class="col-md-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-259')
								</a>
							</div>
						</li>
						<li class="col-md-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-260')
								</a>
							</div>
						</li>
						<li class="col-md-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-261')
								</a>
							</div>
						</li>
						<li class="col-md-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-262')
								</a>
							</div>
						</li>
						<li class="col-md-4 isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-263')
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
