@extends('porto.app')
@section('header')
@include('porto.partials.header.header-111')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-143')

				<div class="macro-map clearfix">
					<div class="macro-map-map">
						@include('porto.partials.google-map.google-map-17')
					</div>
					<div class="macro-map-info">
						<div class="macro-map-info-detail">
							<i class="icon-location-pin icons text-color-primary mt-3"></i>
							<label>address</label>
							<strong>1234 Street Name, Porto, Envato</strong>
						</div>
						<div class="macro-map-info-detail">
							<i class="icon-phone icons text-color-primary mt-3"></i>
							<label>call us</label>
							<strong>(800) 1234-5678</strong>
						</div>
					</div>
				</div>

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
