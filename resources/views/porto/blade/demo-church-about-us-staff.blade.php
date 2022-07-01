@extends('porto.app')
@section('header')
@include('porto.partials.header.header-47')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-96')

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold">We love the creator</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur tellus vel sagittis suscipit. Aliquam nec nunc massa. Proin massa lorem, euismod sit amet est sit amet, placerat maximus quam. Sed efficitur metus id nisl tempus vestibulum. Curabitur varius suscipit euismod. Curabitur faucibus, tellus ut tincidunt lacinia, massa arcu tempus mi, vel feugiat massa nunc.</p>
							</div>
						</div>
						<div class="row mt-4 mb-4">
							<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
								@include('porto.partials.thumb-info.thumb-info-35')
							</div>
							<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
								@include('porto.partials.thumb-info.thumb-info-36')
							</div>
							<div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
								@include('porto.partials.thumb-info.thumb-info-37')
							</div>
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.thumb-info.thumb-info-38')
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
								@include('porto.partials.thumb-info.thumb-info-39')
							</div>
							<div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
								@include('porto.partials.thumb-info.thumb-info-40')
							</div>
							<div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
								@include('porto.partials.thumb-info.thumb-info-41')
							</div>
							<div class="col-lg-3 col-sm-6">
								@include('porto.partials.thumb-info.thumb-info-42')
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
