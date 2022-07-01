@extends('porto.app')
@section('header')
@include('porto.partials.header.header-169')
@endsection

@section('main')
<div role="main" class="main no-height" id="main">
				
				<div class="container pt-4">

					<div id="portfolioSliderWithThumbs">
						<div class="thumb-gallery">
							@include('porto.partials.owl-carousel.owl-carousel-113')
							@include('porto.partials.owl-carousel.owl-carousel-114')
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
