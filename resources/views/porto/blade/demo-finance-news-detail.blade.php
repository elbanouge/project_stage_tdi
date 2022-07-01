@extends('porto.app')
@section('header')
@include('porto.partials.header.header-99')
@endsection

@section('main')
<div role="main" class="main">

			<section class="section section-parallax parallax custom-parallax-medium-padding m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/finance/parallax/parallax-6.jpg">
				<div class="container">
					<div class="row">
						<div class="col">
							<h1 class="text-uppercase text-color-light font-weight-bold text-center m-0">Company Strategies</h1>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border bg-color-light m-0 pb-0">
				<div class="container">
					<div class="row justify-content-around">
						<div class="col-md-10 col-lg-8 ml-auto">
							<article class="custom-post-style-2">
								<div class="post-infos">
									<span class="post-info">
										<img src="img/demos/finance/icons/custom-icon-3.png" alt class="img-fluid mb-2 mx-auto mx-md-0">
										<span class="date-day text-color-dark font-weight-semibold text-5">06</span>
										<span class="date-month text-color-dark font-weight-semibold">February</span>
									</span>
									<span class="post-info">
										<img src="img/demos/finance/icons/custom-icon-4.png" alt class="img-fluid mb-2 mx-auto mx-md-0">
										<span class="date-day text-color-dark font-weight-semibold text-5">16</span>
										<span class="date-month text-color-dark font-weight-semibold">Comments</span>
									</span>
									<span class="post-info">
										<img src="img/demos/finance/icons/custom-icon-5.png" alt class="img-fluid mb-2 mx-auto mx-md-0">
										<span class="date-day text-color-dark font-weight-semibold text-5">265</span>
										<span class="date-month text-color-dark font-weight-semibold">Likes</span>
									</span>
								</div>
								<img src="img/demos/finance/blog/blog-1.jpg" alt class="img-fluid mb-4">
								<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ipsa, delectus repudiandae quos eius ad vero nesciunt sequi, mollitia, ipsam reprehenderit tenetur asperiores quam nisi porro enim eum tempore esse necessitatibus ratione adipisci corporis iste doloribus quaerat. Eligendi deleniti facere expedita incidunt eveniet, totam ea quibusdam repellendus nulla provident molestiae consectetur accusantium eum cumque, magnam praesentium sequi!</p>
								@include('porto.partials.testimonial.testimonial-45')
								<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatibus optio ut accusamus laboriosam neque, maxime impedit vel.</p>
								<ul class="custom-list-style-1">
									<li class="custom-text-color-1">
										<i class="fas fa-long-arrow-alt-right text-color-dark mr-3"></i>
										Lorem ipsum dolor sit amet, consectetur adipisicing.
									</li>
									<li class="custom-text-color-1">
										<i class="fas fa-long-arrow-alt-right text-color-dark mr-3"></i>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, explicabo.
									</li>
									<li class="custom-text-color-1">
										<i class="fas fa-long-arrow-alt-right text-color-dark mr-3"></i>
										Lorem ipsum dolor sit amet, consectetur adipisicing.
									</li>
								</ul>
								<div class="post-links">
									<a class="custom-item-divider-1 text-decoration-none text-uppercase text-color-dark font-weight-semibold custom-primary-hover float-left mr-4" href="demo-finance-news-detail.html"><i class="fas fa-long-arrow-alt-left text-color-primary mr-1"></i> Prev</a>
									<a class="text-decoration-none text-uppercase text-color-dark font-weight-semibold custom-primary-hover float-left ml-2" href="demo-finance-news-detail.html">Next <i class="fas fa-long-arrow-alt-right text-color-primary ml-1"></i></a>
									<ul class="social-icons custom-style-1 float-right">
		   								<li class="social-icons-facebook text-color-primary"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
		   								<li class="social-icons-twitter text-color-primary"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
		   								<li class="social-icons-linkedin text-color-primary"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
	    							</ul>
	    							<span class="text-color-dark font-weight-semibold float-right mr-2">Share:</span>
								</div>
							</article>

							<div class="post-block post-comments custom-border-none mt-5 clearfix pt-0">
								<h4 class="text-uppercase font-weight-bold text-color-dark text-5 pt-2 mb-3">Comments</h4>

								<ul class="comments custom-comments mb-4 pb-1">
									<li>
										<div class="comment">
											<div class="img-thumbnail d-none d-sm-block p-0 no-borders">
												<img class="avatar custom-rounded" alt="" src="img/team/team-23.jpg">
											</div>
											<div class="comment-block">
												<span class="comment-by">
													<strong class="text-color-dark font-weight-semibold">John Doe</strong>
													<span class="float-right">
														<span> <a href="#" class="text-color-primary font-weight-semibold text-2"><i class="fas fa-long-arrow-alt-left"></i> Reply</a></span>
													</span>
												</span>
												<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
												<span class="date text-3 float-left">January 12, 2021 at 1:38 pm</span>
											</div>
										</div>

										<ul class="comments reply">
											<li>
												<div class="comment">
													<div class="img-thumbnail d-none d-sm-block p-0 no-borders">
														<img class="avatar custom-rounded" alt="" src="img/team/team-24.jpg">
													</div>
													<div class="comment-block">
														<span class="comment-by">
															<strong class="text-color-dark font-weight-semibold">John Doe</strong>
															<span class="float-right">
																<span> <a href="#" class="text-color-primary font-weight-semibold text-2"><i class="fas fa-long-arrow-alt-left"></i> Reply</a></span>
															</span>
														</span>
														<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
														<span class="date text-3 float-left">January 12, 2021 at 1:38 pm</span>
													</div>
												</div>
											</li>
											<li>
												<div class="comment">
													<div class="img-thumbnail d-none d-sm-block p-0 no-borders">
														<img class="avatar custom-rounded" alt="" src="img/team/team-25.jpg">
													</div>
													<div class="comment-block">
														<span class="comment-by">
															<strong class="text-color-dark font-weight-semibold">John Doe</strong>
															<span class="float-right">
																<span> <a href="#" class="text-color-primary font-weight-semibold text-2"><i class="fas fa-long-arrow-alt-left"></i> Reply</a></span>
															</span>
														</span>
														<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
														<span class="date text-3 float-left">January 12, 2021 at 1:38 pm</span>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="comment">
											<div class="img-thumbnail d-none d-sm-block p-0 no-borders">
												<img class="avatar custom-rounded" alt="" src="img/team/team-22.jpg">
											</div>
											<div class="comment-block">
												<span class="comment-by">
													<strong class="text-color-dark font-weight-semibold">John Doe</strong>
													<span class="float-right">
														<span> <a href="#" class="text-color-primary font-weight-semibold text-2"><i class="fas fa-long-arrow-alt-left"></i> Reply</a></span>
													</span>
												</span>
												<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												<span class="date text-3 float-left">January 12, 2021 at 1:38 pm</span>
											</div>
										</div>
									</li>
									<li>
										<div class="comment">
											<div class="img-thumbnail d-none d-sm-block p-0 no-borders">
												<img class="avatar custom-rounded" alt="" src="img/team/team-22.jpg">
											</div>
											<div class="comment-block">
												<span class="comment-by">
													<strong class="text-color-dark font-weight-semibold">John Doe</strong>
													<span class="float-right">
														<span> <a href="#" class="text-color-primary font-weight-semibold text-2"><i class="fas fa-long-arrow-alt-left"></i> Reply</a></span>
													</span>
												</span>
												<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												<span class="date text-3 float-left">January 12, 2021 at 1:38 pm</span>
											</div>
										</div>
									</li>
								</ul>

							</div>

							<div class="post-block post-leave-comment custom-border-none custom-background-1 custom-section-spacement-1 m-0">
								<h4 class="text-uppercase font-weight-bold text-color-dark text-5 mb-3">Leave your comments</h4>

								<form id="" class="custom-contact-form-style-1" action="" method="POST">
									<div class="form-row">
										<div class="form-group col-lg-6 custom-sm-margin-bottom-2">
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name*" required>
										</div>
										<div class="form-group col-lg-6">
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email*" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<textarea maxlength="5000" data-msg-required="Please enter your comment." rows="10" class="form-control" name="comment" id="message" placeholder="Comment*" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="submit" value="Submit Now" class="btn btn-outline btn-primary custom-btn-style-2 font-weight-bold text-color-dark text-uppercase" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>

						</div>
						<div class="col-lg-3">
							@include('porto.partials.sidebar.sidebar-21')
						</div>
					</div>
				</div>
			</section>

			<section class="section section-parallax parallax custom-parallax-big-padding m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/finance/parallax/parallax-4.jpg">
				<div class="container">
					<div class="row text-center">
						<div class="col">
							<h2 class="custom-text-size-1 text-color-light font-weight-semibold">Let's talk Business</h2>
							<p class="custom-bottom-bar text-4 custom-text-color-4 mb-5">Talk to a Specialist</p>
						</div>
					</div>
					<div class="row justify-content-center mt-2">
						<div class="col-lg-3 custom-right-border">
							<a href="tel:+18001234567" class="custom-text-color-4 custom-hover-opacity text-decoration-none">
								<div class="custom-contact-item text-center">
									<i class="icon-call-in icons"></i>
									<span class="title text-uppercase font-weight-bold">Call Us Now</span>
									<span class="content text-color-light">800 123 4567</span>
								</div>
							</a>
						</div>
						<div class="col-lg-3">
							<a href="mailto:you@domain.com" class="custom-text-color-4 custom-hover-opacity text-decoration-none">
								<div class="custom-contact-item text-center">
									<i class="icon-envelope icons"></i>
									<span class="title text-uppercase font-weight-bold">Send An Email</span>
									<span class="content text-color-light">you@domain.com</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="custom-footer bg-color-light m-0">
				<div class="container py-4">
					<div class="row text-center text-lg-left pt-5 pb-4">
						<div class="col-md-3 mb-4 mb-lg-0">
							<a href="#" class="text-decoration-none">
								<img src="img/demos/finance/logo.png" width="100" height="45" class="img-fluid" alt>
							</a>
						</div>
						<div class="col-md-2 mb-4 mb-lg-0">
							<h5 class="text-color-dark font-weight-bold mb-1">Services</h5>
							<ul>
								<li>
									<a class="custom-text-color-1" href="tel:+8001234567" target="_blank" title="Call Us">
										800 123 4567
									</a>
								</li>
								<li>
									<a class="custom-text-color-1" href="demo-finance-contact-us.html" title="Contact Us">
										Contact Us
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-2 mb-4 mb-lg-0">
							<h5 class="text-color-dark font-weight-bold mb-1">Company</h5>
							<ul>
								<li>
									<a class="custom-text-color-1" href="demo-finance-company.html" title="About Us">
										About Us
									</a>
								</li>
								<li>
									<a class="custom-text-color-1" href="demo-finance-team.html" title="Team">
										Team
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-2 mb-4 mb-lg-0">
							<h5 class="text-color-dark font-weight-bold mb-1">Policies</h5>
							<ul>
								<li>
									<a class="custom-text-color-1" href="#" title="Privacy policy">
										Privacy policy
									</a>
								</li>
								<li>
									<a class="custom-text-color-1" href="#" title="Terms of Use">
										Terms of Use
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="social-icons custom-social-icons float-lg-right">
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
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-17', ['key' => 'footer-copyright.footer-copyright-17'])
			</footer>
@endsection
