@extends('porto.app')
@section('header')
@include('porto.partials.header.header-52')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.owl-carousel.owl-carousel-34')

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

				<section class="section section-no-border custom-position-relative custom-section-padding-1 bg-color-light m-0">
					<img class="custom-cloud left-pos d-none d-md-block appear-animation" data-appear-animation="customFadeInLeftNoRotate" data-appear-animation-delay="0" data-plugin-options="{'accY': -300}" src="img/demos/church/others/left-cloud.png" alt>
					<div class="custom-big-square left-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInLeft" data-appear-animation-delay="500" data-plugin-options="{'accY': -300}" style="background: url('img/demos/church/others/big-left-square-img.jpg'); background-size: cover;"></div>
					<div class="custom-small-square left-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInLeft" data-appear-animation-delay="1000" data-plugin-options="{'accY': -300}" style="background: url('img/demos/church/others/small-left-square-img.jpg'); background-size: cover;"></div>
					<img class="custom-cloud right-pos d-none d-md-block appear-animation" data-appear-animation="customFadeInRightNoRotate" data-appear-animation-delay="0" data-plugin-options="{'accY': -300}" src="img/demos/church/others/right-cloud.png" alt>
					<div class="custom-big-square right-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInRight" data-appear-animation-delay="500" data-plugin-options="{'accY': -300}" style="background: url('img/demos/church/others/big-right-square-img.jpg'); background-size: cover;"></div>
					<div class="custom-small-square right-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInRight" data-appear-animation-delay="1000" data-plugin-options="{'accY': -300}" style="background: url('img/demos/church/others/small-right-square-img.jpg'); background-size: cover;"></div>
					<div class="container">
						<div class="row justify-content-center text-center">
							<div class="col-md-8 col-xl-10">
								<h2 class="font-weight-bold">We seek love God above all thing</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam tortor, elementum vel facilisis quis, elementum sit amet lacus. Nam ornare ante et vulputate fringilla. Nullam sed orci eu urna dapibus vestibulum non a augue. Mauris dapibus vel massa at volutpat. Sed hendrerit congue leo, eget ornare enim imperdiet vitae. Sed mi nibh, suscipit a enim ac, aliquam tempus lacus.</p>
								<a href="demo-church-about-us.html" class="btn btn-primary custom-btn-style-1 text-uppercase mt-4">Learn More</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-secondary section-no-border m-0">
					<div class="container">
						<div class="row justify-content-center text-center custom-negative-margin-1">
							<div class="col">
								@include('porto.partials.countdown.countdown-1')
							</div>
						</div>
						<div class="row justify-content-center text-center">
							<div class="col-lg-4 col-sm-8 mb-4 mb-lg-0">
								<img src="img/demos/church/icons/custom-icon-1.png" alt class="img-repsonsive">
								<h2 class="font-weight-bold text-color-light">Our Values</h2> 
								<p class="custom-text-color-2">Lorem ipsum dolor sit amet, adipiscing elit. Mauris accumsan tortor ut posuere consequat. Fusce aliquet, dolor eget tempus ultricies, eros.</p>
							</div>
							<div class="col-lg-4 col-sm-8 mb-4 mb-lg-0">
								<img src="img/demos/church/icons/custom-icon-2.png" alt class="img-repsonsive">
								<h2 class="font-weight-bold text-color-light">Join with Us</h2>
								<p class="custom-text-color-2"><strong class="text-color-light">Sundays at 8.00pm - 9.00pm</strong> at Porto Church, 123 porto ave porto, PT 12345</p>
							</div>
							<div class="col-lg-4 col-sm-8">
								<img src="img/demos/church/icons/custom-icon-3.png" alt class="img-repsonsive">
								<h2 class="font-weight-bold text-color-light">Our Mission</h2>
								<p class="custom-text-color-2">Lorem ipsum dolor sit amet, adipiscing elit. Mauris accumsan tortor ut posuere consequat. Fusce aliquet, dolor eget tempus ultricies, eros.</p>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 mb-4 mb-lg-0">
								<h2 class="font-weight-bold">Next Event</h2>
								@include('porto.partials.thumb-info.thumb-info-60')
							</div>
							<div class="col-lg-6">
								<h2 class="font-weight-bold">Upcoming Event</h2>
								<article class="custom-post-event">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light">Nov</span>
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
										<span class="month text-uppercase custom-secondary-font text-color-light">Nov</span>
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
								<a href="demo-church-events.html" class="btn btn-primary custom-btn-style-1 text-uppercase custom-margin-1 mt-4">All Events</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-background section-no-border m-0" style="background: url(img/demos/church/testimonial/testimonial-bg-1.jpg)">
					<div class="container">
						<div class="row justify-content-center text-center">
							<div class="col">
								<h2 class="font-weight-bold">Testimonials</h2>
								@include('porto.partials.owl-carousel.owl-carousel-35')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-12 col-sm-8">
								<h2 class="font-weight-bold">Blog Post</h2>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-10 col-lg-4 mb-4 mb-lg-0">
								<article class="custom-post-blog">
									@include('porto.partials.thumb-info.thumb-info-61')
								</article>
							</div>
							<div class="col-md-10 col-lg-4 mb-4 mb-lg-0">
								<article class="custom-post-blog">
									@include('porto.partials.thumb-info.thumb-info-62')
								</article>
							</div>
							<div class="col-md-10 col-lg-4">
								<article class="custom-post-blog">
									@include('porto.partials.thumb-info.thumb-info-63')
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
