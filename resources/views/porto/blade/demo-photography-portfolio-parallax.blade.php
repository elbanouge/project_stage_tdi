@extends('porto.app')
@section('header')
@include('porto.partials.header.header-173')
@endsection

@section('main')
<div role="main" class="main" id="main">
				
				<a href="demo-photography-portfolio-ajax-on-page.html">
					<section class="portfolio-parallax parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-1.jpg">
						<div class="container-fluid">
							<h2>Family</h2>
							<span class="thumb-info-icons position-style-3 text-color-light">
								<span class="thumb-info-icon pictures bg-color-primary">
									1168
									<i class="far fa-image"></i>
								</span>
							</span>
							<span class="thumb-info-plus"></span>
						</div>
					</section>
				</a>
				
				<a href="demo-photography-portfolio-ajax-on-page.html">
					<section class="portfolio-parallax parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-2.jpg">
						<div class="container-fluid">
							<h2>Life Style</h2>
							<span class="thumb-info-icons position-style-3 text-color-light">
								<span class="thumb-info-icon pictures bg-color-primary">
									1350
									<i class="far fa-image"></i>
								</span>
							</span>
							<span class="thumb-info-plus"></span>
						</div>
					</section>
				</a>

				<a href="demo-photography-portfolio-ajax-on-page.html">
					<section class="portfolio-parallax parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-3.jpg">
						<div class="container-fluid">
							<h2>Wedding</h2>
							<span class="thumb-info-icons position-style-3 text-color-light">
								<span class="thumb-info-icon pictures bg-color-primary">
									314
									<i class="far fa-image"></i>
								</span>
							</span>
							<span class="thumb-info-plus"></span>
						</div>
					</section>
				</a>

				<a href="demo-photography-portfolio-ajax-on-page.html">
					<section class="portfolio-parallax parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-4.jpg">
						<div class="container-fluid">
							<h2>Landscape</h2>
							<span class="thumb-info-icons position-style-3 text-color-light">
								<span class="thumb-info-icon pictures bg-color-primary">
									784
									<i class="far fa-image"></i>
								</span>
							</span>
							<span class="thumb-info-plus"></span>
						</div>
					</section>
				</a>

				<a href="demo-photography-portfolio-ajax-on-page.html">
					<section class="portfolio-parallax parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/photography/portfolio/portfolio-parallax-5.jpg">
						<div class="container-fluid">
							<h2>Travel</h2>
							<span class="thumb-info-icons position-style-3 text-color-light">
								<span class="thumb-info-icon pictures bg-color-primary">
									3671
									<i class="far fa-image"></i>
								</span>
							</span>
							<span class="thumb-info-plus"></span>
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
