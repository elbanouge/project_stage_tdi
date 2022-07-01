@extends('porto.app')
@section('header')
@include('porto.partials.header.header-43')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-90')

				<div class="container">
					<div class="row pt-1 pb-4 mb-3">
						<div class="col-lg-8">

							<p class="lead mb-4">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

							<p class="clearfix">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper.</p>

							<div class="row pb-4">
								<div class="col-lg-4">
									<ul class="list list-icons list-icons-style-3 list-tertiary">
										<li><i class="fas fa-chevron-right"></i> Certified Professionals</li>
										<li><i class="fas fa-chevron-right"></i> Former Chief Executives</li>
									</ul>	
								</div>
								<div class="col-lg-4">
									<ul class="list list-icons list-icons-style-3 list-tertiary">
										<li><i class="fas fa-chevron-right"></i> Real Estate Professionals</li>
										<li><i class="fas fa-chevron-right"></i> Chartered Financial Analysts</li>
									</ul>
								</div>
								<div class="col-lg-4">
									<ul class="list list-icons list-icons-style-3 list-tertiary">
										<li><i class="fas fa-chevron-right"></i> Nobel Laureate Economists</li>
										<li><i class="fas fa-chevron-right"></i> Former Political Leaders</li>
									</ul>
								</div>
							</div>

							<p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

							<div class="accordion without-bg custom-accordion-style-1 pt-4 pb-4" id="accordion7">
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

							<p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

						</div>
						<div class="col-lg-4">
							<img src="img/demos/business-consulting/cases/case-4.jpg" class="img-fluid mb-4" alt="">

							<h4 class="font-weight-bold text-color-dark mt-3">- Our Strategy</h4>
							@include('porto.partials.owl-carousel.owl-carousel-28')
						</div>
					</div>
				</div>


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
