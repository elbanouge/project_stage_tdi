@extends('porto.app')
@section('header')
@include('porto.partials.header.header-104')
@endsection

@section('main')
<div role="main" class="main">
				
				<section class="section section-no-border section-light custom-padding-top-1 mb-0">
					<div class="container">
						<div class="row mt-4">
							<div class="col-md-7 col-lg-9">
								<h1 class="font-weight-bold text-color-primary mb-0">Group Fitness</h1>
								<h4 class="font-weight-bold text-color-quaternary">Our Classes</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet laoreet lorem, a imperdiet sapien tincidunt at. Vivamus sed libero ut diam feugiat sagittis sit amet in justo. Nam quis massa nec lorem tempus egestas at quis eros. Morbi non augue vel tortor feugiat commodo vitae sed dolor. Maecenas a nisi euismod, bibendum arcu quis, posuere massa. Morbi mattis dui sem. Phasellus vel rhoncus ligula.</p>
								<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet laoreet lorem, a imperdiet sapien tincidunt at. Vivamus sed libero ut diam feugiat sagittis sit amet in justo. Nam quis massa nec lorem tempus egestas at quis eros. Morbi non augue vel tortor feugiat commodo vitae sed dolor. Maecenas a nisi euismod, bibendum arcu quis, posuere massa. Morbi mattis dui sem. Phasellus vel rhoncus ligula.</p>
							</div>
							<div class="col-md-5 col-lg-3">
								<div class="custom-join-now-form position-style-1 bg-color-primary p-4">
									<h4 class="font-weight-bold text-color-light mb-0">Try us Out!</h4>
									<p class="font-weight-light text-color-light text-2">Get a free 5 day VIP guest pass.</p>
									<form id="vipRequest" class="contact-form" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4" id="vipRequestSuccess">
											<strong>Success!</strong> Your VIP request has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4" id="vipRequestError">
											<strong>Error!</strong> There was an error sending your VIP request.
											<span class="mail-error-message text-1 mt-2 d-block" id="vipRequestErrorMessage"></span>
										</div>
										
										<input type="hidden" name="subject" value="Vip Request Received">
										<div class="form-row">
											<div class="form-group col">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="vipRequestName" placeholder="Your Name" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="vipRequestEmail" placeholder="Your E-mail" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="text" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control" name="phone" id="vipRequestPhone" placeholder="Your Phone" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="submit" value="Join Now!" class="btn btn-quaternary custom-btn-style-2 font-weight-bold" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>

				@include('porto.partials.lightbox.lightbox-39')

				<section class="section section-center section-no-border section-light">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<h2 class="font-weight-bold text-color-quaternary appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><span class="text-color-primary">Get Up!</span> Challenge yourself today</h2>
								<p class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="150">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed sem ipsum. Proin efficitur dolor accumsan purus varius tempus nec a nulla. Aliquam id vulputate massa, a rhoncus justo. Nunc luctus non ipsum a cursus. Donec laoreet iaculis egestas. Nulla finibus sed ipsum a pretium. Mauris ut nisl nec metus.</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium text-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" href="demo-gym-about-us.html">About the Gym</a>
							</div>
						</div>
					</div>
				</section>
			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-155')
@endsection
