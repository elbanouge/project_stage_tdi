@extends('porto.app')
@section('header')
@include('porto.partials.header.header-169')
@endsection

@section('main')
<div role="main" class="main calc-height" id="main">
				
				<div id="photographyLightbox" class="mfp-hide">
					<div class="thumb-gallery">
						@include('porto.partials.owl-carousel.owl-carousel-119')
					</div>
				</div>
				<div id="horizontalScrollBox">
					<div class="content">
						<div class="horizontal-scroll-item-wrapper">
							<div class="horizontal-scroll-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-303')
								</a>
							</div>
						</div>
						<div class="horizontal-scroll-item-wrapper">
							<div class="horizontal-scroll-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-304')
								</a>
							</div>
						</div>
						<div class="horizontal-scroll-item-wrapper">
							<div class="horizontal-scroll-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-305')
								</a>
							</div>
						</div>
						<div class="horizontal-scroll-item-wrapper">
							<div class="horizontal-scroll-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-306')
								</a>
							</div>
						</div>
						<div class="horizontal-scroll-item-wrapper">
							<div class="horizontal-scroll-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-307')
								</a>
							</div>
						</div>
						<div class="horizontal-scroll-item-wrapper">
							<div class="horizontal-scroll-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									@include('porto.partials.thumb-info.thumb-info-308')
								</a>
							</div>
						</div>
					</div>
					<div class="custom-portfolio-navigation">
						<div class="prev"></div>
						<div class="next"></div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="light narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>
@endsection
