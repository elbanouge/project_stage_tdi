@extends('porto.app')
@section('header')
@include('porto.partials.header.header-153')
@endsection

@section('main')
<div role="main" class="main">
				
			@include('porto.partials.page-header.page-header-178')

			<div class="container">

				<div class="row mt-5">
					<div class="col-lg-4">
						@include('porto.partials.feature-box.feature-box-100')
					</div>
					<div class="col-lg-4">
						@include('porto.partials.feature-box.feature-box-101')
					</div>
					<div class="col-lg-4">
						@include('porto.partials.feature-box.feature-box-102')
					</div>
				</div>

				<hr class="solid">

				<div class="row pt-4 mb-4">
					<div class="col-lg-6">
						@include('porto.partials.google-map.google-map-22')
					</div>
					<div class="col-lg-6">

						<h4 class="font-weight-semibold mb-4">Send a Message to Us</h4>

						<form class="contact-form" action="php/contact-form.php" method="POST">
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
									<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" required></textarea>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-5" data-loading-text="Loading...">
								</div>
							</div>
						</form>

					</div>
				</div>

			</div>

			<footer id="footer" class="m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-md-4 col-lg-3 mb-2">
							<h4 class="mb-4">Location</h4>
							<p>
								Porto Medical<br>
								123 Porto Blvd, Suite 100<br>
								New York, NY<br>
								Phone : 123-456-7890
							</p>
						</div>
						<div class="col-md-4 col-lg-3">
							<h4 class="mb-4">Opening Hours</h4>
							<div class="info custom-info">
								<span>Mon-Fri</span>
								<span>8:30 am to 5:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Saturday</span>
								<span>9:30 am to 1:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Sunday</span>
								<span>Closed</span>
							</div>
						</div>
						<div class="col-md-4 col-lg-3">
							<div class="contact-details">
								<h4 class="mb-4">Emergency Cases</h4>
								<a class="text-decoration-none" href="tel:1234567890">
									<strong class="font-weight-light">(800)123-4567</strong>
								</a>
							</div>
						</div>
						<div class="col-lg-2 text-md-center text-lg-left ml-lg-auto">
							<h4 class="mb-4">Social Media</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" target="_blank" title="Facebook">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="social-icons-twitter">
									<a href="http://www.twitter.com/" target="_blank" title="Twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="social-icons-linkedin">
									<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-25', ['key' => 'footer-copyright.footer-copyright-25'])
			</footer>
		</div>
@endsection

@section('footer')
<footer id="footer" class="m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-md-4 col-lg-3 mb-2">
							<h4 class="mb-4">Location</h4>
							<p>
								Porto Medical<br>
								123 Porto Blvd, Suite 100<br>
								New York, NY<br>
								Phone : 123-456-7890
							</p>
						</div>
						<div class="col-md-4 col-lg-3">
							<h4 class="mb-4">Opening Hours</h4>
							<div class="info custom-info">
								<span>Mon-Fri</span>
								<span>8:30 am to 5:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Saturday</span>
								<span>9:30 am to 1:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Sunday</span>
								<span>Closed</span>
							</div>
						</div>
						<div class="col-md-4 col-lg-3">
							<div class="contact-details">
								<h4 class="mb-4">Emergency Cases</h4>
								<a class="text-decoration-none" href="tel:1234567890">
									<strong class="font-weight-light">(800)123-4567</strong>
								</a>
							</div>
						</div>
						<div class="col-lg-2 text-md-center text-lg-left ml-lg-auto">
							<h4 class="mb-4">Social Media</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" target="_blank" title="Facebook">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="social-icons-twitter">
									<a href="http://www.twitter.com/" target="_blank" title="Twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="social-icons-linkedin">
									<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-25', ['key' => 'footer-copyright.footer-copyright-25'])
			</footer>
@endsection
