@extends('porto.app')
@section('header')
@include('porto.partials.header.header-172')
@endsection

@section('main')
<div role="main" class="main" id="main">
				
				
				@include('porto.partials.page-header.page-header-186')

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-16')

				<section class="section section-quaternary contact-details">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-129')
							</div>
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-130')
							</div>
							<div class="col-lg-4">
								@include('porto.partials.feature-box.feature-box-131')
							</div>
						</div>
					</div>
				</section>

				<section class="p-0 m-0">
					<div class="container-fluid p-0">
						@include('porto.partials.owl-carousel.owl-carousel-103')
					</div>
				</section>

				<section>
					<div class="container">
						<div class="row justify-content-center text-center pt-4 mt-4 pb-4 mb-4">
							<div class="col-lg-8 pb-3">
								<h2 class="font-weight-normal custom-font-size-1 mb-4">Get in Touch with Us</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna lobortis, at consectetur odio euismod. Maecenas eleifend semper vulputate. Integer pellentesque massa et felis aliquam.</p>

								<form class="contact-form form" action="php/contact-form.php" method="POST">
									<div class="contact-form-success alert alert-success d-none mt-4">
										<strong>Success!</strong> Your message has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none mt-4">
										<strong>Error!</strong> There was an error sending your message.
										<span class="mail-error-message text-1 d-block"></span>
									</div>
									<div class="form-row">
										<div class="form-group text-left col">
											<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group text-left col">
											<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group text-left col">
											<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group text-left col">
											<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group text-center col">
											<input type="submit" value="Send Message" class="btn btn-quaternary btn-outline btn-lg text-uppercase font-weight-semibold" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="light narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>
@endsection
