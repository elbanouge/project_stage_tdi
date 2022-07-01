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

								<div class="row">
									<div class="col d-flex justify-content-center">
										@include('porto.partials.nav-pills.nav-pills-10')
									</div>
								</div>

								<div class="sort-destination-loader sort-destination-loader-showing">
									<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
										<div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												@include('porto.partials.thumb-info.thumb-info-150')
											</a>
											<h5 class="mt-3 mb-0">Standard Room</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>1 Double Bed</span></li>
													<li><label>OCCUPANCY</label> <span>2 Persons</span></li>
													<li><label>SIZE</label>	<span>40 sqm.</span></li>
													<li><label>VIEW</label>	<span>Porto Bay</span></li>
													<li><label>RATES FROM</label> <strong>USD 199</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												@include('porto.partials.thumb-info.thumb-info-151')
											</a>
											<h5 class="mt-3 mb-0">Premium Room</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>1 Double Bed</span></li>
													<li><label>OCCUPANCY</label> <span>2 Persons</span></li>
													<li><label>SIZE</label>	<span>50 sqm.</span></li>
													<li><label>VIEW</label>	<span>Porto Bay</span></li>
													<li><label>RATES FROM</label> <strong>USD 299</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												@include('porto.partials.thumb-info.thumb-info-152')
											</a>
											<h5 class="mt-3 mb-0">Deluxe Room</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>2 Double Beds</span></li>
													<li><label>OCCUPANCY</label> <span>3 Persons</span></li>
													<li><label>SIZE</label>	<span>80 sqm.</span></li>
													<li><label>VIEW</label>	<span>Porto Bay</span></li>
													<li><label>RATES FROM</label> <strong>USD 399</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												@include('porto.partials.thumb-info.thumb-info-153')
											</a>
											<h5 class="mt-3 mb-0">Executive Room</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>King</span></li>
													<li><label>OCCUPANCY</label> <span>2 Persons</span></li>
													<li><label>SIZE</label>	<span>90 sqm.</span></li>
													<li><label>VIEW</label>	<span>Porto Bay</span></li>
													<li><label>RATES FROM</label> <strong>USD 499</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												@include('porto.partials.thumb-info.thumb-info-154')
											</a>
											<h5 class="mt-3 mb-0">Superior Room</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>King or 2 Double Beds</span></li>
													<li><label>OCCUPANCY</label> <span>5 Persons</span></li>
													<li><label>SIZE</label>	<span>140 sqm.</span></li>
													<li><label>VIEW</label>	<span>Porto Bay</span></li>
													<li><label>RATES FROM</label> <strong>USD 599</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-lg-4 isotope-item suites mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												@include('porto.partials.thumb-info.thumb-info-155')
											</a>
											<h5 class="mt-3 mb-0">Porto Suite</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>King</span></li>
													<li><label>OCCUPANCY</label> <span>7 Persons</span></li>
													<li><label>SIZE</label>	<span>150 sqm.</span></li>
													<li><label>VIEW</label>	<span>Porto Bay</span></li>
													<li><label>RATES FROM</label> <strong>USD 699</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</a>
													</li>
												</ul>
											</div>
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
