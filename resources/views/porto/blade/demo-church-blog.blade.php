@extends('porto.app')
@section('header')
@include('porto.partials.header.header-48')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-98')

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-4 mb-4">
								<article class="custom-post-blog">
									@include('porto.partials.thumb-info.thumb-info-44')
								</article>
							</div>
							<div class="col-lg-4 mb-4">
								<article class="custom-post-blog">
									@include('porto.partials.thumb-info.thumb-info-45')
								</article>
							</div>
							<div class="col-lg-4 mb-4">
								<article class="custom-post-blog">
									@include('porto.partials.thumb-info.thumb-info-46')
								</article>
							</div>
							<div class="col-lg-4 mb-4 mb-lg-0">
								<article class="custom-post-blog">
									@include('porto.partials.thumb-info.thumb-info-47')
								</article>
							</div>
							<div class="col-lg-4 mb-4 mb-lg-0">
								<article class="custom-post-blog">
									@include('porto.partials.thumb-info.thumb-info-48')
								</article>
							</div>
							<div class="col-lg-4">
								<article class="custom-post-blog">
									@include('porto.partials.thumb-info.thumb-info-49')
								</article>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-tertiary section-no-border m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-10">
								<span class="custom-secondary-font font-weight-bold custom-text-color-1 text-4">First time visitor</span>
								<h2 class="font-weight-bold custom-text-color-1 m-0">Find out more about the Church. <span class="font-weight-normal custom-secondary-font custom-font-italic">You belong here</span></h2>
							</div>
							<div class="col-lg-2 mt-4 mt-lg-0">
								<a href="demo-church-about-us.html" class="btn btn-primary custom-btn-style-1 text-uppercase">Visitors Guide</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border custom-position-relative custom-overflow-hidden p-0 m-0">
					<div class="custom-view-our-location text-center">
						<img src="img/demos/church/others/view-our-location.png" alt>
						<a href="#" onclick="initMapAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)" class="custom-view-location custom-secondary-font font-weight-bold text-color-light">View Our Location</a>
					</div>
					@include('porto.partials.google-map.google-map-9')
				</section>

			@include('porto.partials.footer.footer-92')
		</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-92')
@endsection
