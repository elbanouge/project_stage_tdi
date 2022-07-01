@extends('porto.app')
@section('header')
@include('porto.partials.header.header-124')
@endsection

@section('main')
<div role="main" class="main">
				
			@include('porto.partials.page-header.page-header-154')

			<section class="section bg-color-light border-0 my-0">
				<div class="container">
					<div class="row appear-animation" data-appear-animation="fadeInUpShorter">
						<div class="col">
							@include('porto.partials.owl-carousel.owl-carousel-74')
						</div>
					</div>
				</div>
			</section>
			<hr class="solid custom-opacity-2 mt-0">
			<div class="container pb-3">
				<div class="row pt-5 mb-5">
					<div class="col-lg-7 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
						<p class="lead mb-4 mt-4">Send us a message and sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

						<form class="contact-form" action="php/contact-form.php" method="POST">
							<div class="contact-form-success alert alert-success d-none mt-4">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="contact-form-error alert alert-danger d-none mt-4">
								<strong>Error!</strong> There was an error sending your message.
								<span class="mail-error-message text-1 d-block"></span>
							</div>
							<div class="row">
								<div class="form-group col">
									<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" required></textarea>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<input type="submit" value="Send Message" class="btn btn-primary custom-btn-style-1 text-uppercase" data-loading-text="Loading...">
								</div>
							</div>
						</form>

					</div>
					<div class="col-lg-4 col-lg-offset-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">

						<ul class="list list-unstyled mt-4 mb-4">
							<li><strong>Address:</strong> 1234 Street Name, City Name</li>
							<li><strong>Phone:</strong> (123) 456-789</li>
							<li><strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
						</ul>

						<ul class="list list-icons list-dark mt-5">
							<li><i class="far fa-clock top-7"></i> Monday - Friday - 9am to 5pm</li>
							<li><i class="far fa-clock top-7"></i> Saturday - 9am to 2pm</li>
							<li><i class="far fa-clock top-7"></i> Sunday - Closed</li>
						</ul>

					</div>
				</div>
			</div>

			<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
			@include('porto.partials.google-map.google-map-20')

			<footer id="footer" class="footer-reveal custom-bg-color-1 footer-reveal border-top-0 m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-lg-5">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">ABOUT US</h2>
							<p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer libero leo, convallis pharetra consectetur sed, posuere sed sapien. Nam tincidunt lacus vitae mattis malesuada. Integer lacinia quam mi, id condimentum ipsum commodo a. Nulla ullamcorper.</p>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">INSURANCE</h2>
							<ul class="list list-unstyled">
								<li><a href="#" class="text-decoration-none">Auto Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Life Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Business Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Travel Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Home Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Others</a></li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">QUICK LINKS</h2>
							<ul class="list list-unstyled">
								<li>
									<a href="demo-insurance.html">
										Home
									</a>
								</li>
								<li>
									<a href="demo-insurance-about-us.html">
										About Us
									</a>
								</li>
								<li>
									<a href="demo-insurance-insurances.html">
										Insurances
									</a>
								</li>
								<li>
									<a href="demo-insurance-agents.html">
										Agents
									</a>
								</li>
								<li>
									<a href="demo-insurance-blog.html">
										Blog
									</a>
								</li>
								<li>
									<a href="demo-insurance-contact.html">
										Contact
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-3">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">CONTACT US</h2>
							<p>Porto Insurance 123<br> Porto Blvd, Suite</p>
							<span class="d-block text-color-light custom-fontsize-5 mb-2">Call: <a href="tel:+1234567890" class="text-decoration-none text-color-light custom-fontsize-5">123-456-7890</a></span>
							<span class="d-block text-color-light custom-fontsize-5">Email: <a href="mailto:you@domain.com" class="text-decoration-none text-color-light custom-fontsize-5">info@porto.com</a></span>
							@include('porto.partials.header-social-icons.header-social-icons-10')
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-19', ['key' => 'footer-copyright.footer-copyright-19'])
			</footer>
		</div>
@endsection

@section('footer')
<footer id="footer" class="footer-reveal custom-bg-color-1 footer-reveal border-top-0 m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-lg-5">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">ABOUT US</h2>
							<p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer libero leo, convallis pharetra consectetur sed, posuere sed sapien. Nam tincidunt lacus vitae mattis malesuada. Integer lacinia quam mi, id condimentum ipsum commodo a. Nulla ullamcorper.</p>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">INSURANCE</h2>
							<ul class="list list-unstyled">
								<li><a href="#" class="text-decoration-none">Auto Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Life Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Business Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Travel Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Home Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Others</a></li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">QUICK LINKS</h2>
							<ul class="list list-unstyled">
								<li>
									<a href="demo-insurance.html">
										Home
									</a>
								</li>
								<li>
									<a href="demo-insurance-about-us.html">
										About Us
									</a>
								</li>
								<li>
									<a href="demo-insurance-insurances.html">
										Insurances
									</a>
								</li>
								<li>
									<a href="demo-insurance-agents.html">
										Agents
									</a>
								</li>
								<li>
									<a href="demo-insurance-blog.html">
										Blog
									</a>
								</li>
								<li>
									<a href="demo-insurance-contact.html">
										Contact
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-3">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">CONTACT US</h2>
							<p>Porto Insurance 123<br> Porto Blvd, Suite</p>
							<span class="d-block text-color-light custom-fontsize-5 mb-2">Call: <a href="tel:+1234567890" class="text-decoration-none text-color-light custom-fontsize-5">123-456-7890</a></span>
							<span class="d-block text-color-light custom-fontsize-5">Email: <a href="mailto:you@domain.com" class="text-decoration-none text-color-light custom-fontsize-5">info@porto.com</a></span>
							@include('porto.partials.header-social-icons.header-social-icons-10')
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-19', ['key' => 'footer-copyright.footer-copyright-19'])
			</footer>
@endsection
