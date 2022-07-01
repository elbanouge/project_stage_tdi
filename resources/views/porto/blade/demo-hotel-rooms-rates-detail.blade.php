@extends('porto.app')
@section('header')
@include('porto.partials.header.header-112')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-144')

				<section class="section section-no-background section-no-border m-0 p-0">
					<div class="container">
						<div class="row mb-4">

							<div class="col">

								<h3 class="mt-4 pt-4 mb-0 pb-0 text-uppercase">Standard Room</h3>
								<div class="divider divider-primary divider-small mb-4 mt-0">
									<hr class="mt-2 mr-auto">
								</div>

								<div class="row">
									<div class="col-lg-7">

										<p class="mt-4 lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan.</p>

										<p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut.</p>

										<div class="room-suite-info">
											<ul>
												<li><label>BEDS</label>	<span>1 Double Bed</span></li>
												<li><label>OCCUPANCY</label> <span>2 Persons</span></li>
												<li><label>SIZE</label>	<span>40 sqm.</span></li>
												<li><label>VIEW</label>	<span>Porto Bay</span></li>
												<li><label>RATES FROM</label> <strong>USD 199</strong></li>
												<li>
													<a class="btn btn-primary btn-lg text-2 text-uppercase mt-2 room-suite-info-book-now" href="demo-hotel-book.html">Book Now</a>
												</li>
											</ul>
										</div>

									</div>
									<div class="col-lg-5">

										@include('porto.partials.owl-carousel.owl-carousel-68')

									</div>
								</div>

							</div>
								
						</div>
					</div>
				</section>

				<section class="section section-tertiary section-no-border m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-3">

								<p class="lead p-0 m-0 text-3 text-uppercase">Sign Up Now For</p>
								<h4 class="mb-1 mt-0 text-light text-uppercase">Exclusive special offers:</h4>

							</div>
							<div class="col-lg-9">

								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger d-none" id="newsletterError"></div>

								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="form-row">
										<div class="form-group col-md-5">
											<div class="form-control-custom">
												<input type="text" class="form-control form-control-lg text-uppercase text-2 mt-2" id="newsletterName" placeholder="Full Name *" required>
											</div>
										</div>
										<div class="form-group col-md-4">
											<div class="form-control-custom">
												<input type="email" class="form-control form-control-lg text-uppercase text-2 mt-2" id="newsletterEmail" placeholder="Email Address *" required>
											</div>
										</div>
										<div class="form-group col-md-3">
											<button type="submit" class="btn btn-primary btn-lg btn-block text-2 text-uppercase mt-2">Subscribe Now</button>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</section>

				@include('porto.partials.footer.footer-156')

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-156')
@endsection
