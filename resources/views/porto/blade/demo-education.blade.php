@extends('porto.app')
@section('header')
@include('porto.partials.header.header-95')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.owl-carousel.owl-carousel-58')
				
				<section class="section bg-color-light border-0 my-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-10 text-center">
								<h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">About Us</h2>
								<p class="text-color-dark pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam aliquam ultrices quis in purus. Donec volutpat et justo et viverra. Suspendisse id justo a ipsum viverra ultrices quis et quam. Pellentesque id finibus elit, vitae finibus est. Sed mollis orci eget ex euismod vulputate. Praesent fermentum dignissim congue. Praesent sapien mi.</p>
								<a href="#" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}">READ MORE</a>
							</div>
						</div>
					</div>
				</section>
				<section class="section bg-color-tertiary border-0 my-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold text-center appear-animation" data-appear-animation="fadeInUpShorter">Popular Courses</h2>
							</div>
						</div>
						<div class="porto.partialscenter mb-5">
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								@include('porto.partials.thumb-info.thumb-info-97')
							</div>porto.partials
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								@include('porto.partials.thumb-info.thumb-info-98')
							</div>porto.partials
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								@include('porto.partials.thumb-info.thumb-info-99')
							</div>porto.partials
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								@include('porto.partials.thumb-info.thumb-info-100')
							</div>porto.partials
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
								@include('porto.partials.thumb-info.thumb-info-101')
							</div>porto.partials
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
								@include('porto.partials.thumb-info.thumb-info-102')
							</div>porto.partials
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
								@include('porto.partials.thumb-info.thumb-info-103')
							</div>porto.partials
							<div class="col-md-6 col-lg-4 col-xl-3 pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								@include('porto.partials.thumb-info.thumb-info-104')
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<a href="#" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold">VIEW ALL</a>
							</div>
						</div>
					</div>
				</section>
				<section class="section parallax section-parallax my-0 border-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%'}" data-image-src="img/demos/education/parallax/parallax-1.jpg">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-7 col-xl-6 appear-animation" data-appear-animation="fadeInLeftShorter">
								<div class="card">
									<div class="card-body p-5">
										<h2 class="font-weight-bold text-center text-6 mb-0">REGISTER NOW</h2>
										<p class="text-color-dark text-5 text-center">Get 50% off for all Courses</p>
										@include('porto.partials.countdown.countdown-2')
										<form class="custom-form-style-1 contact-form" action="php/contact-form.php" method="POST">

											<div class="contact-form-success alert alert-success d-none mt-4">
												<strong>Success!</strong> Your register has been sent to us.
											</div>
										
											<div class="contact-form-error alert alert-danger d-none mt-4">
												<strong>Error!</strong> There was an error sending your register.
												<span class="mail-error-message text-1 d-block"></span>
											</div>

											<div class="form-row">
												<div class="form-group col-md-6">
													<input type="text" value="" data-msg-required="Please enter your first name." maxlength="100" class="form-control bg-color-tertiary" name="firstName" id="firstName" placeholder="FIRST NAME*" required>
												</div>
												<div class="form-group col-md-6">
													<input type="text" value="" data-msg-required="Please enter your last name." maxlength="100" class="form-control bg-color-tertiary custom-border-left-1" name="lastName" id="lastName" placeholder="LAST NAME*" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control bg-color-tertiary" name="phone" id="phone" placeholder="PHONE*" required>
												</div>
												<div class="form-group col-md-6">
													<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control bg-color-tertiary custom-border-left-1" name="email" id="email" placeholder="EMAIL*" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<input type="submit" value="GET IT NOW" class="btn btn-primary text-1 font-weight-semibold d-block text-4 py-3 w-100" data-loading-text="Loading...">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section bg-color-light border-0 my-0">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter">What Students Says</h2>
							</div>
						</div>
						<div class="row justify-content-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-59')
							</div>
						</div>
					</div>
				</section>
				<section class="section bg-color-tertiary border-0 my-0">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">Latest News</h2>
							</div>
						</div>
						<div class="porto.partialscenter mb-5">
							<div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								@include('porto.partials.thumb-info.thumb-info-109')
							</div>porto.partials
							<div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
								@include('porto.partials.thumb-info.thumb-info-110')
							</div>porto.partials
							<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								@include('porto.partials.thumb-info.thumb-info-111')
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<a href="#" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold">VIEW ALL</a>
							</div>
						</div>
					</div>
				</section>
				<section class="section parallax section-parallax my-0 border-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%'}" data-image-src="img/demos/education/parallax/parallax-2.jpg">
					<div class="container mt-5">
						<div class="row">
							<div class="col-md-10 col-lg-7 offset-md-2 offset-lg-5">
								<div class="row appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="col">
										@include('porto.partials.feature-box.feature-box-61')		
									</div>
								</div>
								<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
									<div class="col">
										@include('porto.partials.feature-box.feature-box-62')		
									</div>
								</div>
								<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
									<div class="col">
										@include('porto.partials.feature-box.feature-box-63')		
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


			<footer id="footer" class="bg-color-quaternary border-top-0 mt-0">
				<div class="container">
					<div class="row justify-content-between pt-5 pb-4">
						<div class="col-md-5 col-lg-3 mb-4 mb-lg-0">
							<h2 class="font-weight-semibold text-color-light text-6 mb-3">Contact Details</h2>
							<p>Porto Education 123 <br>Porto Blvd, Suite</p>
							<span class="d-block text-5 mb-2">
								Call: <a href="tel:+1234567890" class="text-3">123-456-7890</a>
							</span>
							<span class="d-block text-5 mb-4">
								Email: <a href="mailto:info@porto.com" class="text-3">info@porto.com</a>
							</span>
							<ul class="social-icons social-icons-transparent social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-md-7 col-lg-4 mb-4 mb-lg-0">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Courses</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="demo-education-courses-detail.html">Archaeology</a></li>
										<li><a href="demo-education-courses-detail.html">Architecture</a></li>
										<li><a href="demo-education-courses-detail.html">Art &amp; Design</a></li>
										<li><a href="demo-education-courses-detail.html">Aural &amp; Oral Sciences</a></li>
										<li><a href="demo-education-courses-detail.html">Biological Sciences</a></li>
										<li><a href="demo-education-courses-detail.html">Building</a></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="demo-education-courses-detail.html">Management Studies</a></li>
										<li><a href="demo-education-courses-detail.html">Celtic Studies</a></li>
										<li><a href="demo-education-courses-detail.html">Chemical Engineering</a></li>
										<li><a href="demo-education-courses-detail.html">Chemistry</a></li>
										<li><a href="demo-education-courses-detail.html">Civil Engineering</a></li>
										<li><a href="demo-education-courses-detail.html" class="text-color-primary">Much More</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Newsletter</h2>
									<div class="newsletter">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam.</p>
					
										<div class="alert alert-success d-none" id="newsletterSuccess">
											<strong>Success!</strong> You've been added to our email list.
										</div>
					
										<div class="alert alert-danger d-none" id="newsletterError"></div>
					
										<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
											<div class="input-group custom-input-group-style-1">
												<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
												<span class="input-group-append">
													<button class="btn btn-primary px-4" type="submit">Subscribe</button>
												</span>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>porto.partials
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-15', ['key' => 'footer-copyright.footer-copyright-15'])
			</footer>
		</div>
@endsection

@section('footer')
<footer id="footer" class="bg-color-quaternary border-top-0 mt-0">
				<div class="container">
					<div class="row justify-content-between pt-5 pb-4">
						<div class="col-md-5 col-lg-3 mb-4 mb-lg-0">
							<h2 class="font-weight-semibold text-color-light text-6 mb-3">Contact Details</h2>
							<p>Porto Education 123 <br>Porto Blvd, Suite</p>
							<span class="d-block text-5 mb-2">
								Call: <a href="tel:+1234567890" class="text-3">123-456-7890</a>
							</span>
							<span class="d-block text-5 mb-4">
								Email: <a href="mailto:info@porto.com" class="text-3">info@porto.com</a>
							</span>
							<ul class="social-icons social-icons-transparent social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-md-7 col-lg-4 mb-4 mb-lg-0">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Courses</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="demo-education-courses-detail.html">Archaeology</a></li>
										<li><a href="demo-education-courses-detail.html">Architecture</a></li>
										<li><a href="demo-education-courses-detail.html">Art &amp; Design</a></li>
										<li><a href="demo-education-courses-detail.html">Aural &amp; Oral Sciences</a></li>
										<li><a href="demo-education-courses-detail.html">Biological Sciences</a></li>
										<li><a href="demo-education-courses-detail.html">Building</a></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="demo-education-courses-detail.html">Management Studies</a></li>
										<li><a href="demo-education-courses-detail.html">Celtic Studies</a></li>
										<li><a href="demo-education-courses-detail.html">Chemical Engineering</a></li>
										<li><a href="demo-education-courses-detail.html">Chemistry</a></li>
										<li><a href="demo-education-courses-detail.html">Civil Engineering</a></li>
										<li><a href="demo-education-courses-detail.html" class="text-color-primary">Much More</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Newsletter</h2>
									<div class="newsletter">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam.</p>
					
										<div class="alert alert-success d-none" id="newsletterSuccess">
											<strong>Success!</strong> You've been added to our email list.
										</div>
					
										<div class="alert alert-danger d-none" id="newsletterError"></div>
					
										<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
											<div class="input-group custom-input-group-style-1">
												<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
												<span class="input-group-append">
													<button class="btn btn-primary px-4" type="submit">Subscribe</button>
												</span>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>porto.partials
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-15', ['key' => 'footer-copyright.footer-copyright-15'])
			</footer>
@endsection
