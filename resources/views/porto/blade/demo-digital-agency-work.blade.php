@extends('porto.app')
@section('header')
@include('porto.partials.header.header-88')
@endsection

@section('main')
<div role="main" class="main">
				<section class="parallax section section-text-light section-parallax section-center mt-0 mb-5" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/digital-agency/slides/slide-digital-agency-4.jpg" style="min-height: 560px;">
					<div class="container">
						<div class="row justify-content-center mt-5">
							<div class="col-lg-8 mt-5">
								<h1 class="mt-5 pt-5 font-weight-semibold">Work</h1>
								<p class="mb-0 text-4 opacity-7">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					@include('porto.partials.nav-pills.nav-pills-9')

					<div class="sort-destination-loader sort-destination-loader-showing">
						<div class="row portfolio-list no-gutters sort-destination mb-5" data-sort-id="portfolio">
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 brands">
								@include('porto.partials.portfolio-item.portfolio-item-45', ['key' => 'portfolio-item.portfolio-item-45'])
							</div>
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 medias">
								@include('porto.partials.portfolio-item.portfolio-item-45', ['key' => 'portfolio-item.portfolio-item-46'])
							</div>
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 brands">
								@include('porto.partials.portfolio-item.portfolio-item-45', ['key' => 'portfolio-item.portfolio-item-47'])
							</div>
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 logos">
								@include('porto.partials.portfolio-item.portfolio-item-45', ['key' => 'portfolio-item.portfolio-item-48'])
							</div>
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 brands">
								@include('porto.partials.portfolio-item.portfolio-item-45', ['key' => 'portfolio-item.portfolio-item-49'])
							</div>
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 websites">
								@include('porto.partials.portfolio-item.portfolio-item-45', ['key' => 'portfolio-item.portfolio-item-50'])
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection

@section('footer')
<footer id="footer">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3 pl-3 pl-md-0">
								<img alt="Porto Website Template" src="img/logo-default-slim-dark.png" height="32">
							</a>
						</div>
						<div class="col-md-8 d-flex justify-content-center justify-content-md-end mb-4 mb-lg-0">
							<div class="row">
								<div class="col-md-6 mb-3 mb-md-0">
									<div class="ml-3 text-center text-md-right">
										<h5 class="text-3 mb-0 text-color-light">NEW YORK</h5>
										<p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="pl-1">(123) 465-7890</span></p>            
									</div>
								</div>
								<div class="col-md-6">
									<div class="ml-3 text-center text-md-right">
										<h5 class="text-3 mb-0 text-color-light">LOS ANGELES</h5>
										<p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="pl-1">(123) 465-7890</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-14', ['key' => 'footer-copyright.footer-copyright-14'])
			</footer>
@endsection
