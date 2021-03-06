@extends('porto.app')
@section('header')
@include('porto.partials.header.header-49')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-100')

				<section class="section section-tertiary section-no-border m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 mb-4 mb-lg-0">
								<h2 class="text-color-dark font-weight-bold">Next Event</h2>
								@include('porto.partials.thumb-info.thumb-info-50')
							</div>
							<div class="col-lg-6">
								<h2 class="text-color-dark font-weight-bold">Upcoming Event</h2>
								<article class="custom-post-event">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light">Oct</span>
										<span class="day font-weight-bold text-color-light">10</span>
										<span class="year text-color-light">2021</span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
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
										<h4 class="font-weight-bold">
											<a href="demo-church-events-detail.html" class="text-decoration-none custom-secondary-font text-color-dark">Mauris ornare semeu lorem</a>
										</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin commodo nisl a fermentum varius. Aenean interdum lectus at tortor ullamcorper, eu maximus...</p>
									</div>
								</article>
								<hr class="solid">
								<article class="custom-post-event">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light">Oct</span>
										<span class="day font-weight-bold text-color-light">11</span>
										<span class="year text-color-light">2021</span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
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
										<h4 class="font-weight-bold">
											<a href="demo-church-events-detail.html" class="text-decoration-none custom-secondary-font text-color-dark">Curabitur vehicula massa</a>
										</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue dui non libero tincidunt commodo. Proin eget venenatis mauris.</p>
									</div>
								</article>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold text-color-dark mb-3">Past Events</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<article class="custom-post-event bg-color-light mb-4 mb-lg-0">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light">Oct</span>
										<span class="day font-weight-bold text-color-light">05</span>
										<span class="year text-color-light">2021</span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
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
										<h4 class="font-weight-bold text-color-dark">
											<a href="demo-church-events-detail.html" class="text-decoration-none custom-secondary-font text-color-dark">
												Mauris ornare semeu lorem
											</a>
										</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...</p>
									</div>
									<hr class="solid">
								</article>
							</div>
							<div class="col-lg-6">
								<article class="custom-post-event bg-color-light mb-4 mb-lg-0">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light">Set</span>
										<span class="day font-weight-bold text-color-light">30</span>
										<span class="year text-color-light">2021</span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													2:00 PM
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													New York
												</li>
											</ul>
										</span>
										<h4 class="font-weight-bold text-color-dark">
											<a href="demo-church-events-detail.html" class="text-decoration-none custom-secondary-font text-color-dark">
												Mauris ornare semeu lorem
											</a>
										</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...</p>
									</div>
									<hr class="solid">
								</article>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<article class="custom-post-event bg-color-light custom-sm-margin-bottom-2">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light">Set</span>
										<span class="day font-weight-bold text-color-light">25</span>
										<span class="year text-color-light">2021</span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													8:00 AM
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													New York
												</li>
											</ul>
										</span>
										<h4 class="font-weight-bold text-color-dark">
											<a href="demo-church-events-detail.html" class="text-decoration-none custom-secondary-font text-color-dark">
												Mauris ornare semeu lorem
											</a>
										</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...</p>
									</div>
									<hr class="solid d-lg-none">
								</article>
							</div>
							<div class="col-lg-6">
								<article class="custom-post-event bg-color-light">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light">Set</span>
										<span class="day font-weight-bold text-color-light">17</span>
										<span class="year text-color-light">2021</span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													11:00 AM
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													New York
												</li>
											</ul>
										</span>
										<h4 class="font-weight-bold text-color-dark">
											<a href="demo-church-events-detail.html" class="text-decoration-none custom-secondary-font text-color-dark">
												Mauris ornare semeu lorem
											</a>
										</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at tempor ut, egestas...</p>
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
