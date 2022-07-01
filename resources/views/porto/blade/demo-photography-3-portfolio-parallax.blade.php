@extends('porto.app')
@section('header')
@include('porto.partials.header.header-169')
@endsection

@section('main')
<div role="main" class="main no-height" id="main">
				
				<a href="demo-photography-portfolio-ajax-on-page.html">
					<section class="portfolio-parallax portfolio-parallax-demo-3 parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-1.jpg">
						<div class="container-fluid">
							<h2 class="thumb-info-title font-weight-bold">
								Family
								<span class="thumb-info-sub-title font-weight-light">
									50 photos
								</span>
							</h2>
						</div>
					</section>
				</a>
				
				<a href="demo-photography-portfolio-ajax-on-page.html">
					<section class="portfolio-parallax portfolio-parallax-demo-3 parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-2.jpg">
						<div class="container-fluid">
							<h2 class="thumb-info-title font-weight-bold">
								Life Style
								<span class="thumb-info-sub-title font-weight-light">
									40 photos
								</span>
							</h2>
						</div>
					</section>
				</a>

				<a href="demo-photography-portfolio-ajax-on-page.html">
					<section class="portfolio-parallax portfolio-parallax-demo-3 parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-3.jpg">
						<div class="container-fluid">
							<h2 class="thumb-info-title font-weight-bold">
								Wedding
								<span class="thumb-info-sub-title font-weight-light">
									35 photos
								</span>
							</h2>
						</div>
					</section>
				</a>

				<a href="demo-photography-portfolio-ajax-on-page.html">
					<section class="portfolio-parallax portfolio-parallax-demo-3 parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-4.jpg">
						<div class="container-fluid">
							<h2 class="thumb-info-title font-weight-bold">
								Landscape
								<span class="thumb-info-sub-title font-weight-light">
									22 photos
								</span>
							</h2>
						</div>
					</section>
				</a>

				<a href="demo-photography-portfolio-ajax-on-page.html">
					<section class="portfolio-parallax portfolio-parallax-demo-3 parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-5.jpg">
						<div class="container-fluid">
							<h2 class="thumb-info-title font-weight-bold">
								Travel
								<span class="thumb-info-sub-title font-weight-light">
									16 photos
								</span>
							</h2>
						</div>
					</section>
				</a>

			</div>
@endsection

@section('footer')
<footer id="footer" class="light narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>
@endsection
