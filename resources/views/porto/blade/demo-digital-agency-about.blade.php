@extends('porto.app')
@section('header')
@include('porto.partials.header.header-85')
@endsection

@section('main')
<div role="main" class="main">
				<section class="parallax section section-text-light section-parallax section-center mt-0 mb-5" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/digital-agency/slides/slide-digital-agency-1.jpg" style="min-height: 560px;">
					<div class="container">
						<div class="row justify-content-center mt-5">
							<div class="col-lg-8 mt-5">
								<h1 class="mt-5 pt-5 font-weight-semibold">About</h1>
								<p class="mb-0 text-4 opacity-7">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row mb-5 pb-5 mt-5 pt-5">
						<div class="col-lg-9">
							<div class="row">
								<div class="col-lg-6">
									<h4 class="font-weight-extra-bold">Company</h4>
									<p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
								</div>
								<div class="col-lg-6">
									<h4 class="font-weight-extra-bold">Mission</h4>
									<p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
								</div>
							</div>

							<blockquote class="mt-5 ml-4 blockquote-primary">
								<p>Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada.</p>
								<footer>- David Doe, CEO</footer>
							</blockquote>
						</div>
						<div class="col-lg-3 d-none d-sm-block">
							<div class="row text-center mt-5 mt-lg-0">
								<div class="col-md-8 col-lg-6 mx-auto">
									<img class="img-fluid m-3 my-0 mt-lg-5" src="img/demos/digital-agency/office/our-office-1.jpg" alt="Office">
									<img class="img-fluid m-3 my-0" src="img/demos/digital-agency/office/our-office-3.jpg" alt="Office">
								</div>
								<div class="col-md-8 col-lg-6 mx-auto">
									<img class="img-fluid m-3 my-0" src="img/demos/digital-agency/office/our-office-2.jpg" alt="Office">
									<img class="img-fluid m-3 my-0" src="img/demos/digital-agency/office/our-office-4.jpg" alt="Office">
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-default border-0">
					<div class="container py-4">
						<div class="row counters">
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								@include('porto.partials.counter.counter-29')
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								@include('porto.partials.counter.counter-30')
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
								@include('porto.partials.counter.counter-31')
							</div>
							<div class="col-sm-6 col-lg-3">
								@include('porto.partials.counter.counter-32')
							</div>
						</div>
					</div>
				</section>

				<section class="m-5 pb-3">
					<div class="container py-4">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="mb-0 mt-3 font-weight-extra-bold text-6">Leadership</h2>
								<p class="text-4 mb-3">Pellentesque pellentesque eget tempor tellus. </p>
								<div class="divider divider-primary divider-small divider-small-center mb-3">
									<hr>
								</div>
							</div>
						</div>
						<div class="row justify-content-center mt-4">
							<div class="col-lg-8">
								<div class="row mt-4">
									<div class="col-lg-3 col-12 text-center mb-4">
										<h4 class="mt-3 mb-0">David Doe</h4>
										<p class="mb-0">CEO</p>
										<span class="thumb-info-social-icons mt-2 pb-0">
											<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</div>
									<div class="col-lg-3 col-12 text-center mb-4">
										<h4 class="mt-3 mb-0">Jeff Doe</h4>
										<p class="mb-0">CMO</p>
										<span class="thumb-info-social-icons mt-2 pb-0">
											<a href="mailto:mail@example.com"><i class="far fa-envelope"></i><span>Email</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</div>
									<div class="col-lg-3 col-12 text-center mb-4">
										<h4 class="mt-3 mb-0">Craig Doe</h4>
										<p class="mb-0">COO</p>
										<span class="thumb-info-social-icons mt-2 pb-0">
											<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</div>
									<div class="col-lg-3 col-12 text-center mb-4">
										<h4 class="mt-3 mb-0">Richard Doe</h4>
										<p class="mb-0">President</p>
										<span class="thumb-info-social-icons mt-2 pb-0">
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-default section-footer border-0">
					<div class="container py-4">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="mb-0 mt-3 font-weight-extra-bold text-6">Clients</h2>
								<p class="text-4 mb-3">Pellentesque pellentesque eget tempor tellus. </p>
								<div class="divider divider-primary divider-small divider-small-center mb-3">
									<hr>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="content-grid col mt-5 mb-4">
								<div class="row content-grid-row">
									<div class="content-grid-item col-lg-4 text-center py-4">
										<img class="img-fluid" src="img/logos/logo-1.png" style="max-width: 180px" alt="">
									</div>
									<div class="content-grid-item col-lg-4 text-center py-4">
										<img class="img-fluid" src="img/logos/logo-2.png" style="max-width: 180px" alt="">
									</div>
									<div class="content-grid-item col-lg-4 text-center py-4">
										<img class="img-fluid" src="img/logos/logo-3.png" style="max-width: 180px" alt="">
									</div>
								</div>
								<div class="row content-grid-row">
									<div class="content-grid-item col-lg-4 text-center py-4">
										<img class="img-fluid" src="img/logos/logo-4.png" style="max-width: 180px" alt="">
									</div>
									<div class="content-grid-item col-lg-4 text-center py-4">
										<img class="img-fluid" src="img/logos/logo-5.png" style="max-width: 180px" alt="">
									</div>
									<div class="content-grid-item col-lg-4 text-center py-4">
										<img class="img-fluid" src="img/logos/logo-6.png" style="max-width: 180px" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
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
