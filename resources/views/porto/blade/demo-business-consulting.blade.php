@extends('porto.app')
@section('header')
@include('porto.partials.header.header-46')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.owl-carousel.owl-carousel-29')

				<section class="looking-for custom-position-1 custom-md-border-top z-index-1">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-6 col-lg-7">
								<div class="looking-for-box">
									<h2>- <span class="text-1 custom-secondary-font">Are you looking for a</span><br>
									Business Plan Consultant?</h2>
									<p>Schedule your company strategy right session now</p>
								</div>
							</div>
							<div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
								<a class="text-decoration-none" href="tel:+00112304567" target="_blank" title="Call Us Now">
									<span class="custom-call-to-action">
										<span class="action-title text-color-primary">Call Us Now</span>
										<span class="action-info text-color-light">+001 1230 4567</span>
									</span>
								</a>
							</div>
							<div class="col-md-3 col-lg-2">
								<a class="text-decoration-none" href="mail:mail@example.com" target="_blank" title="Email Us Now">
									<span class="custom-call-to-action">
										<span class="action-title text-color-primary">Email Us Now</span>
										<span class="action-info text-color-light">mail@example.com</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</section>

				<section class="about-us custom-section-padding" id="about-us">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<h2 class="font-weight-bold text-color-dark">- About Us</h2>
								<p class="pl-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae.</p>
								<div class="pl-4">
									<div class="row">
										<div class="col-lg-6">
											<ul class="list list-icons list-icons-style-3 list-tertiary">
												<li><i class="fas fa-chevron-right"></i> Certified Professionals</li>
												<li><i class="fas fa-chevron-right"></i> Former Chief Executives</li>
												<li><i class="fas fa-chevron-right"></i> Real Estate Professionals</li>
											</ul>	
										</div>
										<div class="col-lg-6">
											<ul class="list list-icons list-icons-style-3 list-tertiary">
												<li><i class="fas fa-chevron-right"></i> Nobel Laureate Economists</li>
												<li><i class="fas fa-chevron-right"></i> Former Political Leaders</li>
												<li><i class="fas fa-chevron-right"></i> Chartered Financial Analysts</li>
											</ul>
										</div>
									</div>
									<a class="btn btn-outline custom-border-width btn-primary mt-3 mb-2 custom-border-radius font-weight-semibold text-uppercase" href="demo-business-consulting-about-us.html">Read More</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="content-grid custom-content-grid mt-5 mb-4">
									<div class="row content-grid-row">
										<div class="content-grid-item col-lg-6 bg-color-light p-4">
											<div class="counters">
												@include('porto.partials.counter.counter-17')
											</div>	
										</div>
										<div class="content-grid-item col-lg-6 p-4">
											<div class="counters">
												@include('porto.partials.counter.counter-18')
											</div>	
										</div>
									</div>
									<div class="row content-grid-row">
										<div class="content-grid-item col-lg-6 p-4">
											<div class="counters">
												@include('porto.partials.counter.counter-19')
											</div>	
										</div>
										<div class="content-grid-item col-lg-6 bg-color-light p-4">
											<div class="counters">
												@include('porto.partials.counter.counter-20')
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section-secondary custom-section-padding">
					<div class="container">
						<div class="row mb-4">
							<div class="col">
								<h2 class="font-weight-bold text-color-dark mb-3">- Expertises</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
									@include('porto.partials.feature-box.feature-box-30')
								</a>
							</div>
							<div class="col-lg-4">
								<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100">
									@include('porto.partials.feature-box.feature-box-31')
								</a>
							</div>
							<div class="col-lg-4">
								<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
									@include('porto.partials.feature-box.feature-box-32')
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
									@include('porto.partials.feature-box.feature-box-33')
								</a>
							</div>
							<div class="col-lg-4">
								<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="400">
									@include('porto.partials.feature-box.feature-box-34')
								</a>
							</div>
							<div class="col-lg-4">
								<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="500">
									@include('porto.partials.feature-box.feature-box-35')
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 text-center">
								<a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-3" href="demo-business-consulting-expertise.html" title="View All">View All</a>
							</div>
						</div>
					</div>
				</section>

				<section class="custom-section-padding">
					<div class="container">
						<div class="row mb-3">
							<div class="col-lg-6">
								<h2 class="font-weight-bold text-color-dark">- Our Strategy</h2>
								@include('porto.partials.owl-carousel.owl-carousel-30')
							</div>
							<div class="col-lg-6">
								<h2 class="font-weight-bold text-color-dark">- Frequently asked questions</h2>
								<div class="accordion without-bg custom-accordion-style-1" id="accordion7">
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7" href="#collapse7One" aria-expanded="true">
													Praesent sit amet quam a lorem commodo tincidunt.
													<span class="custom-accordion-plus"></span>
												</a>
											</h4>
										</div>
										<div id="collapse7One" class="collapse show" aria-expanded="true">
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
											</div>
										</div>
									</div>
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Two" aria-expanded="false">
													Integer ac elit id est euismod pellentesque.
													<span class="custom-accordion-plus"></span>
												</a>
											</h4>
										</div>
										<div id="collapse7Two" class="collapse" aria-expanded="false" style="height: 0px;">
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
											</div>
										</div>
									</div>
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Three" aria-expanded="false">
													Cras interdum neque sit amet justo maximus, ut sollicitudin eros.
													<span class="custom-accordion-plus"></span>
												</a>
											</h4>
										</div>
										<div id="collapse7Three" class="collapse" aria-expanded="false" style="height: 0px;">
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
											</div>
										</div>
									</div>
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Four" aria-expanded="false">
													Pellentesque in ex molestie, convallis nulla ut, ornare erat.
													<span class="custom-accordion-plus"></span>
												</a>
											</h4>
										</div>
										<div id="collapse7Four" class="collapse" aria-expanded="false" style="height: 0px;">
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section-secondary custom-section-padding-2">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold text-color-dark mb-3">- Our Cases</h2>
							</div>
						</div>
					</div>
					@include('porto.partials.owl-carousel.owl-carousel-31')
				</section>

				<section class="custom-section-padding">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold text-color-dark">- Testimonials</h2>
							</div>
						</div>
						<div class="row">						
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-32')
							</div>
						</div>
					</div>
				</section>

				<section class="section-secondary custom-section-padding">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold text-color-dark">- Our Team</h2>
							</div>
						</div>
						<div class="row">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-33')
							</div>
						</div>
						<div class="row text-center mt-5">
							<div class="col">
								<a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" href="demo-business-consulting-team.html">View All</a>
							</div>
						</div>
					</div>
				</section>

				<section class="looking-for section-primary">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-6 col-lg-7">
								<div class="looking-for-box">
									<h2>- <span class="text-1 custom-secondary-font">Are you looking for a</span><br>
									Business plan Consultant?</h2>
									<p class="mb-4 mb-md-0">Schedule your company strategy right session now</p>
								</div>
							</div>
							<div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
								<a class="text-decoration-none" href="tel:+00112304567" target="_blank" title="Call Us Now">
									<span class="custom-call-to-action white-border text-color-light">
										<span class="action-title">Call Us Now</span>
										<span class="action-info">+001 1230 4567</span>
									</span>
								</a>
							</div>
							<div class="col-md-3 col-lg-2">
								<a class="text-decoration-none" href="mail:mail@example.com" target="_blank" title="Email Us Now">
									<span class="custom-call-to-action white-border text-color-light">
										<span class="action-title">Email Us Now</span>
										<span class="action-info">mail@example.com</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</section>

				<section class="custom-section-padding">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold text-color-dark">- Our Blog</h2>
							</div>
						</div>
						<div class="row">
							<article class="blog-post col">
								<div class="row">
									<div class="col-sm-8 col-lg-5">
										<div class="blog-post-image-wrapper">
											<img src="img/demos/business-consulting/blog/blog-1.jpg" alt class="img-fluid mb-4">
											<span class="blog-post-date bg-color-primary text-color-light font-weight-bold">
												20
												<span class="month-year font-weight-light">
													Oct-16
												</span>
											</span>
										</div>
									</div>
									<div class="col-sm-12 col-lg-7">
										<h2> Global Opportunities</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vi.</p>
										<hr class="solid">
										<div class="post-infos d-flex">
											<span class="info posted-by">
												Posted by:
												<span class="post-author font-weight-semibold text-color-dark">
													John Doe
												</span>
											</span>
											<span class="info comments ml-5">
												Comments:
												<span class="comments-number text-color-primary font-weight-semibold">
													15
												</span>
											</span>
											<span class="info like ml-5">
												Like:
												<span class="like-number font-weight-semibold custom-color-red">
													38
												</span>
											</span>
										</div>
										<a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-4" href="demo-business-consulting-blog-detail.html" title="Read More">Read More</a>
									</div>
								</div>
							</article>
						</div>
					</div>
				</section>


				<section class="section section-text-light section-background m-0" style="background: url('img/demos/business-consulting/contact/contact-background.jpg'); background-size: cover;">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-lg-6 mb-5 mb-lg-0">
								<h2 class="font-weight-bold">- Contact Us</h2>
								<p class="custom-opacity-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper.</p>
								<div class="row">
									<div class="col-md-6 custom-sm-margin-top">
										<h4 class="mb-1">Call Us</h4>
										<a href="tel:+1234567890" class="text-decoration-none" target="_blank" title="Call Us">
											<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
												Phone
												<span class="info text-5">
													123-456-7890
												</span>
											</span>
										</a>
									</div>
									<div class="col-md-6 custom-sm-margin-top">
										<h4 class="mb-1">Our Location</h4>
										<p class="custom-opacity-font">Porto Business Consulting 123 Porto Blvd, Suite 100 New York, NY</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 custom-sm-margin-top">
										<h4 class="mb-1">Mail Us</h4>
										<a href="mail:mail@example.com" class="text-decoration-none" target="_blank" title="Mail Us">
											<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
												Email
												<span class="info text-5">
													mail@example.com
												</span>
											</span>
										</a>
									</div>
									<div class="col-md-6 custom-sm-margin-top">
										<h4 class="mb-1">Social Media</h4>
										<ul class="social-icons social-icons-clean custom-social-icons-style-1 mt-2 custom-opacity-font">
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
											<li class="social-icons-instagram">
												<a href="http://www.instagram.com/" target="_blank" title="Instagram">
													<i class="fab fa-instagram"></i>
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
							<div class="col-lg-6 custom-sm-margin-top">
								<h2 class="font-weight-bold">- Write Us</h2>
								<form class="contact-form custom-contact-form-style-1 form-errors-light" action="php/contact-form.php" method="POST">
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
											<input type="submit" value="Submit Now" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" data-loading-text="Loading...">
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
@include('porto.partials.footer.footer-91')
@endsection
