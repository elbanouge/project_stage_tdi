@extends('porto.app')
@section('header')
@include('porto.partials.header.header-42')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-89')

				<div class="container">
					<div class="row pt-1 pb-4 mb-3">
						<div class="col-lg-8">

							<h2 class="font-weight-bold text-color-dark">- Send a Message</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae.</p>

							<form class="contact-form custom-contact-form-style-1" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<input type="hidden" name="subject" value="Contact Message Received">
								<div class="form-row">
									<div class="form-group col">
										<div class="custom-input-box">
											<i class="icon-user icons text-color-primary"></i>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name*" required>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<div class="custom-input-box">
											<i class="icon-envelope icons text-color-primary"></i>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email*" required>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<div class="custom-input-box">
											<i class="icon-bubble icons text-color-primary"></i>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" placeholder="Message*" required></textarea>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Submit Now" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-4" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4">

							<div class="row mb-4">
								<div class="col">
									@include('porto.partials.feature-box.feature-box-21')
								</div>
							</div>
							<div class="row mb-4">
								<div class="col">
									@include('porto.partials.feature-box.feature-box-22')
								</div>
							</div>
							<div class="row mb-4">
								<div class="col">
									@include('porto.partials.feature-box.feature-box-23')
								</div>
							</div>

						</div>

					</div>

				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-8')


			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-91')
@endsection
