@extends('porto.app')
@section('header')
@include('porto.partials.header.header-12')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.page-header.page-header-56')

				<section class="section section-height-4 bg-light border-0 m-0">
					<div class="container container-xl-custom">
						<div class="row">
							<div class="col-lg-8 mb-5 mb-lg-0">
								<h2 class="text-color-dark font-weight-extra-bold text-11 negative-ls-1 line-height-3 mb-3">We design for amazing people</h2>
								<p class="text-4 line-height-9 pr-5 pb-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nunc in enim laoreet ornare. Nullam tincidunt tempor ligula eu dignissim. Nam semper dui quis congue mollis. Nam at tellus ultricies, tincidunt quam non, rhoncus mauris. Nullam gravida molestie lorem, et euismod metus feugiat ac. Sed ut suscipit magna, quis sodales orci. Quisque eros elit, porttitor vitae lobortis vitae, pulvinar sed dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
								<p class="text-4 line-height-9 pr-5 pb-3 mb-4">Suspendisse varius aliquam mi, vitae pretium nunc volutpat et. Nulla vestibulum ipsum sed maximus auctor. Sed eu tellus ut justo interdum molestie. Nullam vel sapien luctus, suscipit ex id, facilisis elit. Aenean varius consectetur ante.</p>
							</div>
							<div class="col-lg-4">
								<div class="row">
									<div class="col-6 order-1">
										<img src="img/demos/architecture-interior/others/others-1.jpg" class="img-fluid appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="100" alt="">
									</div>
									<div class="col-6 order-2">
										<img src="img/demos/architecture-interior/others/others-2.jpg" class="img-fluid appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 border-0 m-0" id="ourteam">
					<div class="container container-xl-custom">
						<div class="row justify-content-center">
							<div class="col-lg-9 col-xl-6 text-center">
								<div class="overflow-hidden">
									<span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">THE PRO TEAM</span>
								</div>
								<div class="overflow-hidden mb-3">
									<h2 class="text-color-dark font-weight-bold pb-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Team</h2>
								</div>
								<p class="font-weight-light text-color-dark line-height-9 text-4 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam id varius nunc. Vivamus bibendum mex, et faucibus lacus venena. </p>
							</div>
						</div>
						<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
									<div class="card border-0 custom-box-shadow-1">
										<svg class="custom-square-1 z-index-0" width="80" height="80">
											<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000"></rect>
										</svg>
										<img class="card-img-top z-index-1" src="img/team/team-2.jpg" alt="">
										<div class="card-body">
											<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Michel Doe</h4>
											<p class="card-text">CEO &amp; Founder</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
									<div class="card border-0 custom-box-shadow-1">
										<svg class="custom-square-1 z-index-0" width="80" height="80">
											<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000"></rect>
										</svg>
										<img class="card-img-top z-index-1" src="img/team/team-4.jpg" alt="">
										<div class="card-body">
											<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Jessica Doe</h4>
											<p class="card-text">Architect</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
								<a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
									<div class="card border-0 custom-box-shadow-1">
										<svg class="custom-square-1 z-index-0" width="80" height="80">
											<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000"></rect>
										</svg>
										<img class="card-img-top z-index-1" src="img/team/team-5.jpg" alt="">
										<div class="card-body">
											<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">John Doe</h4>
											<p class="card-text">Architect</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-lg-3">
								<a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
									<div class="card border-0 custom-box-shadow-1">
										<svg class="custom-square-1 z-index-0" width="80" height="80">
											<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000"></rect>
										</svg>
										<img class="card-img-top z-index-1" src="img/team/team-6.jpg" alt="">
										<div class="card-body">
											<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Alice Doe</h4>
											<p class="card-text">Architect</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-57')
@endsection
