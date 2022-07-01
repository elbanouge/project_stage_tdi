@extends('porto.app')
@section('header')
@include('porto.partials.header.header-169')
@endsection

@section('main')
<div role="main" class="main no-height" id="main">
				
				<div class="container">

					<div id="photographyLightbox" class="mfp-hide">
						<div class="thumb-gallery">
							@include('porto.partials.owl-carousel.owl-carousel-122')
							@include('porto.partials.owl-carousel.owl-carousel-123')
						</div>
					</div>
					<div class="row">
						<div class="col">
							<ul id="portfolioVertical">
								<li>
									<div class="portfolio-vertical-item">
										<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
											@include('porto.partials.thumb-info.thumb-info-315')
										</a>
									</div>
								</li>
								<li>
									<div class="portfolio-vertical-item">
										<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
											@include('porto.partials.thumb-info.thumb-info-316')
										</a>
									</div>
								</li>
								<li>
									<div class="portfolio-vertical-item">
										<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
											@include('porto.partials.thumb-info.thumb-info-317')
										</a>
									</div>
								</li>
								<li>
									<div class="portfolio-vertical-item">
										<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
											@include('porto.partials.thumb-info.thumb-info-318')
										</a>
									</div>
								</li>
								<li>
									<div class="portfolio-vertical-item">
										<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
											@include('porto.partials.thumb-info.thumb-info-319')
										</a>
									</div>
								</li>
								<li>
									<div class="portfolio-vertical-item">
										<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
											@include('porto.partials.thumb-info.thumb-info-320')
										</a>
									</div>
								</li>
							</ul>
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
