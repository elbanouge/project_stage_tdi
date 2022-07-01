@extends('porto.app')
@section('header')
@include('porto.partials.header.header-170')
@endsection

@section('main')
<div role="main" class="main" id="main">
				
				<div class="slider-container rev_slider_wrapper rev_about_us" style="height: 500px;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
						<ul>
							<li data-transition="fade">
								<img src="img/demos/photography/about/about-us-slide-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg">
							</li>
							<li data-transition="fade">
								<img src="img/demos/photography/about/about-us-slide-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg">
							</li>
						</ul>

						<div class="tp-static-layers">
							<h1 class="tp-caption tp-caption-photo-label tp-caption-main-custom tp-static-layer font-weight-normal text-color-light" data-x="center" data-hoffset="0" data-y="center" data-voffset="0" data-start="500" data-basealign="slide" data-startslide="0" data-endslide="99" data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 56px;">We Are Porto Photography</h1>

							<div class="tp-caption tp-caption-photo-label tp-caption-sub-custom tp-static-layer text-color-light" data-x="center" data-hoffset="0" data-y="center" data-voffset="60" data-start="800" data-basealign="slide" data-startslide="0" data-endslide="99" data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 32px;">Nice to Meet You</div>
						</div>
					</div>
				</div>
				<section>
					<div class="container">
						<div class="row text-center pt-4 mt-4 pb-4">
							<div class="col">
								<h2 class="font-weight-normal custom-font-size-1 mb-4 mt-4">We Love What We Do</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna lobortis, at consectetur odio euismod. Maecenas eleifend semper vulputate. Integer pellentesque massa et felis aliquam, a pharetra mauris bibendum. Nullam ullamcorper enim id aliquet convallis. Cras pellentesque, ipsum sollicitudin suscipit mollis, nibh nisi facilisis lorem.</p>
							</div>
						</div>
					</div>
				</section>
				<section class="section photographers">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2 class="font-weight-normal custom-font-size-1">Our Photographers</h2>
							</div>
						</div>
					</div>
					<div class="container-fluid p-0">
						@include('porto.partials.owl-carousel.owl-carousel-125')
					</div>
				</section>
				<section class="section our-services">
					<div class="container">
						<div class="row text-center mb-3">
							<div class="col">
								<h2 class="font-weight-normal custom-font-size-1 mt-4">Our Services</h2>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-lg-4 mb-4 mb-lg-0">
								@include('porto.partials.feature-box.feature-box-123')
							</div>
							<div class="col-lg-4 mb-4 mb-lg-0">
								@include('porto.partials.feature-box.feature-box-124')
							</div>
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-125')
							</div>
						</div>
					</div>
				</section>
				<section class="section section-quaternary why-choose-us">
					<div class="container">
						<div class="row text-center mb-5">
							<div class="col">
								<h2 class="font-weight-normal custom-font-size-1 text-color-light m-0 mt-4">Why Choose Us</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 mb-4 mb-lg-0">
								@include('porto.partials.feature-box.feature-box-126')
							</div>
							<div class="col-lg-4 mb-4 mb-lg-0">
								@include('porto.partials.feature-box.feature-box-127')
							</div>
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-128')
							</div>
						</div>
					</div>
				</section>
				<section class="section our-clients section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row pt-4">
							<div class="content-grid pl-3 pr-3">
								<div class="row content-grid-row">
									<div class="content-grid-item col-sm-4 col-lg-2 pb-4 text-center">
										<img src="img/logos/logo-1.png" alt class="img-fluid">
									</div>
									<div class="content-grid-item col-sm-4 col-lg-2 pb-4 text-center">
										<img src="img/logos/logo-2.png" alt class="img-fluid">
									</div>
									<div class="content-grid-item col-sm-4 col-lg-2 pb-4 text-center">
										<img src="img/logos/logo-3.png" alt class="img-fluid">
									</div>
									<div class="content-grid-item col-sm-4 col-lg-2 pb-4 text-center">
										<img src="img/logos/logo-4.png" alt class="img-fluid">
									</div>
									<div class="content-grid-item col-sm-4 col-lg-2 pb-4 text-center">
										<img src="img/logos/logo-5.png" alt class="img-fluid">
									</div>
									<div class="content-grid-item col-sm-4 col-lg-2 pb-4 text-center">
										<img src="img/logos/logo-6.png" alt class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-text-light section-background section-center mb-0 mt-0" style="background-image: url(img/demos/photography/custom-header-bg.jpg);">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-normal custom-font-size-1">Awards</h2>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="award-item">
									<img src="img/demos/photography/about/awards-1.png" alt="" class="img-fluid">
									<p class="alternative-font">Top 100 Wedding Photos</p>
								</div>
								<div class="award-item">
									<img src="img/demos/photography/about/awards-2.jpg" alt="" class="img-fluid border-rounded">
									<p class="alternative-font">Best in New York</p>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="light narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>
@endsection
