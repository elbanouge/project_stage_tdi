@extends('porto.app')
@section('header')
@include('porto.partials.header.header-49')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-99')

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row custom-negative-margin-2 mb-4">
							<div class="col">
								<div class="custom-event-top-image">
									@include('porto.partials.countdown.countdown')
									<img src="img/demos/church/event/event-detail-image-1.jpg" alt class="img-fluid custom-border-1 custom-box-shadow">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<article class="custom-post-event bg-color-light">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light">Oct</span>
										<span class="day font-weight-bold text-color-light">10</span>
										<span class="year text-color-light">2021</span>
									</div>
									<div class="post-event-content custom-margin-1 mb-4">
										<h2 class="font-weight-bold text-color-dark mb-0">Mauris ornare semeu lorem</h2>
										<span class="custom-event-infos">
											<ul class="mb-3">
												<li>
													<i class="far fa-clock"></i>
													5:00 PM
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													New York
												</li>
											</ul>
										</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor dolor ac purus varius placerat. Quisque tortor purus, imperdiet eget feugiat vitae, sodales nec arcu. In porta nunc eget tellus congue consectetur. Donec fringilla, ligula et facilisis elementum, mi eros imperdiet arcu, et faucibus mauris eros ac nisl. Morbi libero nunc, mollis nec suscipit vel, laoreet posuere tortor. Ut egestas.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat, est a finibus lobortis, eros justo rutrum est, in fringilla arcu ligula ornare mauris. Donec efficitur mi eget eros suscipit rhoncus. Nulla aliquet faucibus est, a ornare neque pellentesque quis. Nunc id volutpat magna. Sed tincidunt convallis cursus. Quisque maximus nulla eget turpis condimentum congue. Lorem ipsum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat, est a finibus lobortis, eros justo rutrum est, in fringilla arcu ligula ornare mauris. Donec efficitur mi eget eros suscipit rhoncus. Nulla aliquet faucibus est, a ornare neque pellentesque quis. Nunc id volutpat magna. Sed tincidunt convallis cursus. Quisque maximus nulla eget turpis condimentum congue. Lorem ipsum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat, est a finibus lobortis, eros justo rutrum est, in fringilla arcu ligula ornare mauris. Donec efficitur mi eget eros suscipit rhoncus. Nulla aliquet faucibus est, a ornare neque pellentesque quis. Nunc id volutpat magna. Sed tincidunt convallis cursus. Quisque maximus nulla eget turpis condimentum congue. Lorem ipsum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat, est a finibus lobortis, eros justo rutrum est, in fringilla arcu ligula ornare mauris. Donec efficitur mi eget eros suscipit rhoncus. Nulla aliquet faucibus est, a ornare neque pellentesque quis. Nunc id volutpat magna. Sed tincidunt convallis cursus. Quisque maximus nulla eget turpis condimentum congue. Lorem ipsum.</p>
									</div>
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
