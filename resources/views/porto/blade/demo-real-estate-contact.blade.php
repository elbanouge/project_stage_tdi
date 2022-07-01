@extends('porto.app')
@section('header')
@include('porto.partials.header.header-177')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-190')

				<div class="container">

					<div class="row">
						<div class="col-lg-8">

							<h4 class="text-primary mt-4">Send a Message</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

							<form class="contact-form" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								<input type="hidden" value="Contact Form" name="subject" id="subject">
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label>Your name *</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label>Your email address *</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Message *</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-secondary mb-4" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4">
							<div class="row">
								<div class="col-md-6 col-lg-12 mt-lg-4 order-1">
									<h4 class="text-primary">The Office</h4>
									<ul class="list list-icons mt-3">
										<li>
											<a href="mailto:mail@domain.com">
												<i class="icon-envelope-open icons"></i> mail@domain.com
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon-call-out icons"></i> (800) 123-4567
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon-social-linkedin icons"></i> Lindekin
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon-social-facebook icons"></i> Facebook
											</a>
										</li>
									</ul>
								</div>
								<div class="col order-2 order-md-3 order-lg-2">
									<hr class="solid">
								</div>
								<div class="col-md-6 col-lg-12 order-3 order-md-2 order-lg-3">
									<h4 class="text-primary">Business Hours</h4>
									<ul class="list list-icons mt-3">
										<li><i class="far fa-clock"></i> Monday - Friday - 9am to 5pm</li>
										<li><i class="far fa-clock"></i> Saturday - 9am to 2pm</li>
										<li><i class="far fa-clock"></i> Sunday - Closed</li>
									</ul>
								</div>
							</div>
						</div>

					</div>

				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-24')

				<footer id="footer" class="m-0 custom-bg-color-1 py-4">
					<div class="container">
						<div class="row pt-5 pb-4">
							<div class="col-md-4 col-lg-3">
								<h4 class="mb-3">Porto Real Estate</h4>
								<p class="custom-color-2 mb-0">
									123 Porto Blvd, Suite 100<br>
									New York, NY<br>
									Phone : 123-456-7890<br>
									Email : <a class="text-color-secondary" href="mailto:mail@example.com">mail@example.com</a>
								</p>
							</div>
							<div class="col-md-2">
								<h4 class="mb-3">Properties</h4>
								<nav class="nav-footer">
									<ul class="custom-list-style-1 mb-0">
										<li>
											<a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none">
												For Sale
											</a>
										</li>
										<li>
											<a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none">
												For Rent
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-2">
								<h4 class="mb-3">Links</h4>
								<nav class="nav-footer">
									<ul class="custom-list-style-1 mb-0">
										<li>
											<a href="demo-real-estate-agents.html" class="custom-color-2 text-decoration-none">
												Agents
											</a>
										</li>
										<li>
											<a href="demo-real-estate-who-we-are.html" class="custom-color-2 text-decoration-none">
												Who We Are
											</a>
										</li>
										<li>
											<a href="demo-real-estate-contact.html" class="custom-color-2 text-decoration-none">
												Contact
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-4 col-lg-5">
								<h4 class="mb-3">Latest Tweet</h4>
								<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 1}">
									<p>Please wait...</p>
								</div>
							</div>
						</div>
					</div>
					@include('porto.partials.footer-copyright.footer-copyright-30', ['key' => 'footer-copyright.footer-copyright-30'])
				</footer>
			</div>
@endsection

@section('footer')
<footer id="footer" class="m-0 custom-bg-color-1 py-4">
					<div class="container">
						<div class="row pt-5 pb-4">
							<div class="col-md-4 col-lg-3">
								<h4 class="mb-3">Porto Real Estate</h4>
								<p class="custom-color-2 mb-0">
									123 Porto Blvd, Suite 100<br>
									New York, NY<br>
									Phone : 123-456-7890<br>
									Email : <a class="text-color-secondary" href="mailto:mail@example.com">mail@example.com</a>
								</p>
							</div>
							<div class="col-md-2">
								<h4 class="mb-3">Properties</h4>
								<nav class="nav-footer">
									<ul class="custom-list-style-1 mb-0">
										<li>
											<a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none">
												For Sale
											</a>
										</li>
										<li>
											<a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none">
												For Rent
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-2">
								<h4 class="mb-3">Links</h4>
								<nav class="nav-footer">
									<ul class="custom-list-style-1 mb-0">
										<li>
											<a href="demo-real-estate-agents.html" class="custom-color-2 text-decoration-none">
												Agents
											</a>
										</li>
										<li>
											<a href="demo-real-estate-who-we-are.html" class="custom-color-2 text-decoration-none">
												Who We Are
											</a>
										</li>
										<li>
											<a href="demo-real-estate-contact.html" class="custom-color-2 text-decoration-none">
												Contact
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-4 col-lg-5">
								<h4 class="mb-3">Latest Tweet</h4>
								<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 1}">
									<p>Please wait...</p>
								</div>
							</div>
						</div>
					</div>
					@include('porto.partials.footer-copyright.footer-copyright-30', ['key' => 'footer-copyright.footer-copyright-30'])
				</footer>
@endsection
