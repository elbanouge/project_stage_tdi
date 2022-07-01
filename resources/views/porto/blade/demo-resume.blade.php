@extends('porto.app')
@section('header')
@include('porto.partials.header.header-186')
@endsection

@section('main')
<div role="main" class="main">

			<section id="about-me" class="section section-no-border section-parallax bg-transparent custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover parallax-no-overflow m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/resume/about-me/about-me-bg-1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 custom-sm-margin-bottom-1">
							<img src="img/demos/resume/about-me/me.jpg" class="img-fluid custom-border custom-image-position-2 custom-box-shadow-4" alt>
						</div>
						<div class="col-lg-6 col-xl-5">
							<h1 class="text-color-primary custom-font-size-1">Adam Doe</h1>
							<p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">Chief Product Officer at Okler Themes</p>
							<span class="custom-about-me-infos">
								<span class="custom-text-color-1 text-uppercase">Greater New York area</span>
								<span class="custom-text-color-1 text-uppercase mb-3">Information Technology &amp; Services</span>
								<span class="custom-text-color-1 text-uppercase">
									<strong class="text-color-light">Previous: </strong>
									Front-End Developer at Porto
									<a data-hash href="#experience" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
								</span>
								<span class="custom-text-color-1 text-uppercase">
									<strong class="text-color-light">Education: </strong>
									Porto School
									<a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
								</span>
							</span>
						</div>
						<div class="col-lg-2 col-xl-3 d-none d-lg-block">
							<img src="img/demos/resume/about-me/mouse.png" custom-anim class="img-fluid custom-image-pos-1" alt>
						</div>
					</div>
				</div>
				<ul class="social-icons custom-social-icons">
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
					<li class="social-icons-youtube">
						<a href="http://www.youtube.com/" target="_blank" title="Youtube">
							<i class="fab fa-youtube"></i>
						</a>
					</li>
				</ul>
			</section>

			<div class="custom-about-me-links bg-color-light">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-lg-3 text-center custom-xs-border-bottom p-0">
							<a data-hash href="#say-hello" class="text-decoration-none">
								<span class="custom-nav-button text-color-dark">
									<i class="icon-earphones-alt icons text-color-primary"></i>
									Contact Information	
								</span>
							</a>
						</div>
						<div class="col-lg-2 text-center custom-xs-border-bottom p-0">
							<a data-hash href="#say-hello" class="text-decoration-none">
								<span class="custom-nav-button custom-divisors text-color-dark">
									<i class="icon-envelope-open icons text-color-primary"></i>
									Send Message	
								</span>
							</a>
						</div>
						<div class="col-lg-3 text-center p-0">
							<a href="#" class="text-decoration-none">
								<span class="custom-nav-button text-color-dark">
									<i class="icon-cloud-download icons text-color-primary"></i>
									Download Resume	
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>

			<section class="section section-no-border bg-color-light m-0">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="custom-box-details bg-color-light custom-box-shadow-1 col-lg-6 ml-5 mb-5 mb-lg-4 float-right clearfix">
								<h4>Personal Details</h4>
								<div class="row">
									<div class="col-md-6">
										<ul class="custom-list-style-1 p-0 mb-0">
											<li>
												<span class="text-color-dark">Birthday:</span>
												<span class="custom-text-color-2">1990 October 2</span>
											</li>
											<li>
												<span class="text-color-dark">Marital:</span>
												<span class="custom-text-color-2">Single</span>
											</li>
											<li>
												<span class="text-color-dark">Nationality:</span>
												<span class="custom-text-color-2">American</span>
											</li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="custom-list-style-1 p-0 mb-0">
											<li>
												<span class="text-color-dark">Skype:</span>
												<span class="custom-text-color-2"><a class="custom-text-color-2" href="skype:yourskype?chat">yourskype</a></span>
											</li>
											<li>
												<span class="text-color-dark">PHONE:</span>
												<span class="custom-text-color-2"><a class="custom-text-color-2" href="tel:123456789">123-456-789</a></span>
											</li>
											<li>
												<span class="text-color-dark">EMAIL:</span>
												<span class="custom-text-color-2"><a class="custom-text-color-2" href="mailto:me@domain.com">me@domain.com</a></span>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<h2 class="text-color-dark font-weight-extra-bold text-uppercase">About Me</h2>

							<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

							<div class="about-me-more" id="aboutMeMore">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida. Vivamus vitae dui non lorem euismod pretium. Morbi congue sem sed ex iaculis, nec mattis felis pretium. Nullam molestie libero id odio blandit sodales. Suspendisse non mauris et felis molestie placerat aliquet a risus. Aliquam ac leo tempus, hendrerit eros mollis, gravida est.</p>

								<p>Proin euismod ipsum a tellus condimentum dapibus. Integer porttitor felis elit, eget rutrum ligula commodo quis. Praesent ultricies neque eu mi congue blandit. Nulla feugiat feugiat aliquet. Morbi sed mattis erat. Nullam scelerisque molestie eros, id tristique felis iaculis non. Duis pellentesque neque eget iaculis varius. Donec at nisl semper, aliquam est id, tincidunt lacus. Donec at erat purus.</p>

								<p>Morbi tincidunt nunc non diam porta, at fermentum orci bibendum. Donec arcu nisi, ornare nec commodo vitae, sollicitudin sed magna. Cras sit amet justo et nulla pulvinar laoreet. Phasellus scelerisque, metus id posuere vulputate, diam tellus iaculis sapien, eget scelerisque ipsum libero convallis velit. Duis lorem ligula, faucibus quis tellus nec, fringilla ultricies leo. Etiam tempus congue magna. Suspendisse porta dictum tortor, eu volutpat ipsum eleifend nec. Aliquam dapibus lorem luctus, cursus libero imperdiet, mattis nunc. Sed in ipsum diam. Quisque efficitur metus purus, vitae fermentum lacus venenatis id.</p>
							</div>

							<a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1" href="#">View More</a>

						</div>
					</div>
				</div>
			</section>

			<section id="experience" class="section section-secondary section-no-border m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-dark text-uppercase font-weight-extra-bold">Experience</h2>
							<section class="timeline custom-timeline" id="timeline">
								<div class="timeline-body">
									<article class="timeline-box right custom-box-shadow-2">
										<div class="row">
											<div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
												<span class="from text-color-dark text-uppercase">
													From
													<span class="font-weight-semibold">Sep 2012</span>
												</span>
												<span class="to text-color-dark text-uppercase">
													To
													<span class="font-weight-semibold">Present</span>
												</span>
												<p class="text-color-dark">(3 Years 9 Months)</p>
												<span class="company text-color-dark font-weight-semibold">
													Okler Themes
													<span class="company-location text-color-dark font-weight-normal text-uppercase">Greater New York</span>
												</span>
											</div>
											<div class="experience-description col-lg-9 col-sm-7 bg-color-light">
												<h4 class="text-color-dark font-weight-semibold">Chief Product Officer</h4>
												<p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu.</p>
											</div>
										</div>
									</article>
									<article class="timeline-box right custom-box-shadow-2">
										<div class="row">
											<div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
												<span class="from text-color-dark text-uppercase">
													From
													<span class="font-weight-semibold">Sep 2012</span>
												</span>
												<span class="to text-color-dark text-uppercase">
													To
													<span class="font-weight-semibold">Present</span>
												</span>
												<p class="text-color-dark">(3 Years 9 Months)</p>
												<span class="company text-color-dark font-weight-semibold">
													Okler Themes
													<span class="company-location text-color-dark font-weight-normal text-uppercase">Greater New York</span>
												</span>
											</div>
											<div class="experience-description col-lg-9 col-sm-7 bg-color-light">
												<h4 class="text-color-dark font-weight-semibold">Chief Product Officer</h4>
												<p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu.</p>
											</div>
										</div>
									</article>
									<article class="timeline-box right custom-box-shadow-2">
										<div class="row">
											<div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
												<span class="from text-color-dark text-uppercase">
													From
													<span class="font-weight-semibold">Sep 2012</span>
												</span>
												<span class="to text-color-dark text-uppercase">
													To
													<span class="font-weight-semibold">Present</span>
												</span>
												<p class="text-color-dark">(3 Years 9 Months)</p>
												<span class="company text-color-dark font-weight-semibold">
													Okler Themes
													<span class="company-location text-color-dark font-weight-normal text-uppercase">Greater New York</span>
												</span>
											</div>
											<div class="experience-description col-lg-9 col-sm-7 bg-color-light">
												<h4 class="text-color-dark font-weight-semibold">Chief Product Officer</h4>
												<p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu.</p>
											</div>
										</div>
									</article>
									<div class="timeline-bar"></div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>

			<section id="education" class="section section-no-border bg-color-light m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">Education</h2>
							@include('porto.partials.owl-carousel.owl-carousel-134')
						</div>
					</div>
				</div>
			</section>

			<section id="skills" class="section section-no-border bg-color-light m-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6 col-lg-8 mb-4 mb-md-0">
							<div class="row">
								<div class="col-lg-6">
									<h2 class="text-color-dark text-uppercase font-weight-extra-bold">Skills &amp; Language</h2>
									<div class="progress-bars custom-progress-bars">
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Start Up</span>
										</div>

										@include('porto.partials.progress.progress-25')
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Innovation</span>
										</div>
										@include('porto.partials.progress.progress-26')
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Products</span>
										</div>
										@include('porto.partials.progress.progress-27')
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>CSS</span>
										</div>
										@include('porto.partials.progress.progress-28')
									</div>
								</div>
								<div class="col-lg-6">
									<div class="progress-bars custom-progress-bars custom-md-margin-top-1">
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Javascript</span>
										</div>
										@include('porto.partials.progress.progress-25')
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Business</span>
										</div>
										@include('porto.partials.progress.progress-26')
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>E-commerce</span>
										</div>
										@include('porto.partials.progress.progress-27')
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Creative</span>
										</div>
										@include('porto.partials.progress.progress-28')
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="row">
								<div class="col">
									<div class="custom-box-details bg-color-light custom-box-shadow-1">
										<h4 class="text-color-dark">Languages</h4>
										<ul class="custom-list-style-1 p-0">
											<li>
												<span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-us mr-1" alt="English">English:</span>
												<span class="custom-text-color-2">Advanced</span>
											</li>
											<li>
												<span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-es mr-1" alt="Spanish">Spanish:</span>
												<span class="custom-text-color-2">Advanced</span>
											</li>
											<li>
												<span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-fr mr-1" alt="Française">French:</span>
												<span class="custom-text-color-2">Basic</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="portfolio" class="section section-no-border bg-color-secondary m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-dark font-weight-extra-bold text-uppercase">Portfolio</h2>
							@include('porto.partials.nav-pills.nav-pills-14')
							<div class="sort-destination-loader sort-destination-loader-showing">
								@include('porto.partials.lightbox.lightbox-57')
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="recommendations" class="section section-no-border bg-color-primary m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-dark font-weight-extra-bold text-uppercase">Recommendations</h2>
						</div>
						<div class="col-lg-12 p-0">
							@include('porto.partials.owl-carousel.owl-carousel-138')
						</div>
					</div>
				</div>
			</section>

			<section id="blog" class="section section-no-border bg-color-light m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">My Blog</h2>

							<div class="row">
								<div class="col-lg-6 mb-5 mb-lg-0">
									@include('porto.partials.thumb-info.thumb-info-373')
								</div>
								<div class="col-lg-6">
									@include('porto.partials.thumb-info.thumb-info-374')
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-sm-12 pt-4 mt-4 text-center">
							<a class="btn btn-primary btn-outline custom-btn-style-2 font-weight-bold custom-border-radius-1 text-uppercase">View All</a>
						</div>
					</div>
				</div>
			</section>

			<div id="say-hello" class="container-fluid">
				<div class="row">
					<div class="col-lg-6 p-0">
						<section class="section section-no-border bg-color-primary h-100 m-0">
							<div class="row justify-content-end m-0">
								<div class="col-half-section col-half-section-right mr-3">

									<h2 class="text-color-dark text-uppercase font-weight-extra-bold">Say Hello</h2>
									<form id="contactForm" class="contact-form custom-form-style form-errors-dark" action="php/contact-form.php" method="post">
										<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
											<strong>Success!</strong> Your message has been sent to us.
										</div>
										<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
										</div>

										<div class="form-content">
											<div class="form-control-custom form-control-custom-dark">
												<input type="text" class="form-control" name="name" placeholder="Your Name *" data-msg-required="This field is required." id="name" required="">
											</div>
											<div class="form-control-custom form-control-custom-dark">
												<input type="text" class="form-control" name="subject" placeholder="Subject *" data-msg-required="This field is required." id="subject" required="">
											</div>
											<div class="form-control-custom form-control-custom-dark">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" placeholder="Message*" id="message" required="" aria-required="true"></textarea>
											</div>
											<input type="submit" class="btn btn-quaternary text-color-light text-uppercase font-weight-semibold outline-none custom-btn-style-2 custom-border-radius-1" value="Submit">
										</div>
									</form>

								</div>
							</div>
						</section>
					</div>
					<div class="col-lg-6 p-0">
						<section class="section section-no-border h-100 m-0" style="background: url(img/demos/resume/contact/contact-bg-1.jpg); background-size: cover;">
							<div class="row m-0">
								<div class="col-half-section col-half-section-left ml-3">
									<a href="mailto:you@domain.com" class="text-decoration-none">
										@include('porto.partials.feature-box.feature-box-133')
									</a>
									<a href="tel:+1234657890" class="text-decoration-none">
										@include('porto.partials.feature-box.feature-box-134')
									</a>
									<a href="skype:yourskype?chat" class="text-decoration-none">
										@include('porto.partials.feature-box.feature-box-135')
									</a>
									@include('porto.partials.feature-box.feature-box-136')
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

			<footer id="footer" class="m-0 p-0">
				@include('porto.partials.footer-copyright.footer-copyright-33', ['key' => 'footer-copyright.footer-copyright-33'])
			</footer>
		</div>
@endsection

@section('footer')
<footer id="footer" class="m-0 p-0">
				@include('porto.partials.footer-copyright.footer-copyright-33', ['key' => 'footer-copyright.footer-copyright-33'])
			</footer>
@endsection
