@extends('porto.app')
@section('header')
@include('porto.partials.header.header-172')
@endsection

@section('main')
<div role="main" class="main" id="main">
				
				@include('porto.partials.page-header.page-header-185')

				<div class="container">

					<div class="row mt-4 pt-4 mb-4 pb-4">
						<div class="col-lg-4">

							@include('porto.partials.owl-carousel.owl-carousel-102')

							<h2 class="font-weight-bold mb-2 custom-font-size-1">Jessica Doe</h2>
							<h5 class="mb-4">photographer</h5>

							<div class="row mb-4">
								<div class="col-lg-6">
									<ul class="list list-icons list-icons-style-2 text-color-primary">
										<li><i class="fas fa-map-marker-alt"></i>New York - NY</li>
										<li><i class="fas fa-phone"></i>(123) 456-789</li>
										<li><a href="demo-photography-about-me.html"><i class="far fa-envelope"></i>Biography</a></li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list list-icons list-icons-style-2 text-color-primary">
										<li><a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i>Facebook</a></li>
										<li><a target="_blank" href="http://www.facebook.com"><i class="fab fa-twitter"></i>Twitter</a></li>
										<li><a target="_blank" href="http://www.instagram.com"><i class="fab fa-instagram"></i>Instagram</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-8">

							<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad.</p>

							<form class="contact-form form" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="16" class="form-control" name="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-quaternary btn-outline btn-lg text-uppercase font-weight-semibold" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
					</div>

			</div>

			<footer id=porto.partialst narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>

		</div>
@endsection

@section('footporto.partials
<footer id="footer" class="light narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>
@endsection
