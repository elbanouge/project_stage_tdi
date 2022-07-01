@extends('porto.app')
@section('header')
@include('porto.partials.header.header-47')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-95')

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold">A place near you</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur tellus vel sagittis suscipit. Aliquam nec nunc massa. Proin massa lorem, euismod sit amet est sit amet, placerat maximus quam. Sed efficitur metus id nisl tempus vestibulum. Curabitur varius suscipit euismod. Curabitur faucibus, tellus ut tincidunt lacinia, massa arcu tempus mi, vel feugiat massa nunc.</p>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-lg-6 mb-4 mb-lg-0">
								<div class="custom-thumb-carousel bg-color-light custom-box-shadow">
									@include('porto.partials.lightbox.lightbox-14')
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="custom-location">
												<img src="img/demos/church/others/pin.png" alt class="img-fluid">
												<h4 class="font-weight-bold custom-primary-font mb-0">Los Angeles</h4>
												<p>
													Porto Blvd, Suite 100<br>
													Los Angeles/CA<br>
													<a href="#">(view directions)</a>
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6 pt-4 mt-1 custom-xs-padding-1">
											<span class="custom-phone custom-xs-ml-1">
												<strong>Phone:</strong> 
												<a class="custom-text-color-default" href="tel:+123456789">123-456-7890</a>
											</span>
											<a class="custom-xs-ml-1" href="mailto:church@domain.com">church@domain.com</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="custom-thumb-carousel bg-color-light custom-box-shadow">
									@include('porto.partials.lightbox.lightbox-15')
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="custom-location">
												<img src="img/demos/church/others/pin.png" alt class="img-fluid">
												<h4 class="font-weight-bold custom-primary-font mb-0">New York</h4>
												<p>
													Porto Blvd, Suite 100<br>
													New York/NY<br>
													<a href="#">(view directions)</a>
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6 pt-4 mt-1 custom-xs-padding-1">
											<span class="custom-phone custom-xs-ml-1">
												<strong>Phone:</strong> 
												<a class="custom-text-color-default" href="tel:+123456789">123-456-7890</a>
											</span>
											<a class="custom-xs-ml-1" href="mailto:church@domain.com">church@domain.com</a>
										</div>
									</div>
								</div>
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
