@extends('porto.app')
@section('header')
@include('porto.partials.header.header-102')
@endsection

@section('main')
<div role="main" class="main">
			@include('porto.partials.owl-carousel.owl-carousel-62')

			<div id="home-intro" class="home-intro custom-home-intro bg-color-secondary m-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8 mb-3 mb-lg-0">
							<p class="text-color-light my-1">
								The fastest way to grow your business with the leader in investments.
								<span class="text-color-primary d-inline-block pt-0">Learn more about our strategy</span>
							</p>
						</div>
						<div class="col-lg-4 text-left text-lg-right">
							<a href="demo-finance-strategies.html" class="btn btn-primary custom-btn-style-1 text-uppercase font-weight-semibold">read more</a>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 p-0">
						<section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/demos/finance/parallax/parallax-1.jpg" style="min-height: 315px;">
						</section>
					</div>
					<div class="col-lg-6 p-0">
						<section class="section section-no-border h-100 m-0">
							<div class="row m-0">
								<div class="col-half-section col-half-section-left">
									<h2 class="text-uppercase mt-2 font-weight-bold">Leading Investment Firm</h2>
									<p class="text-4 text-color-dark">Meet Porto Finance</p>
									<p class="custom-text-color-1 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quod nobis fugiat ipsum harum, eligendi nisi!</p>
									<a href="demo-finance-company.html" class="btn btn-outline btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-2">Read More</a>
								</div>
							</div>
						</section>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 order-2 order-lg-1 p-0">
						<section class="section section-no-border h-100 m-0">
							<div class="row justify-content-end m-0">
								<div class="col-half-section col-half-section-right custom-text-align-right">
									<h2 class="text-uppercase mt-2 font-weight-bold">Financial Services</h2>
									<p class="text-4 text-color-dark">What we can do for you</p>
									<p class="custom-text-color-1 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quisquam, aliquam dolore placeat dolorem libero harum.</p>
									<a href="demo-finance-strategies.html" class="btn btn-outline btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-2">Read More</a>
								</div>
							</div>
						</section>
					</div>
					<div class="col-lg-6 order-1 order-lg-2 p-0">
						<section class="parallax section section-parallax h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/demos/finance/parallax/parallax-2.jpg" style="min-height: 315px;">
						</section>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 p-0">
						<section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/demos/finance/parallax/parallax-3.jpg" style="min-height: 315px;">
						</section>
					</div>
					<div class="col-lg-6 p-0">
						<section class="section section-no-border h-100 m-0">
							<div class="row m-0">
								<div class="col-half-section col-half-section-left">
									<h2 class="text-uppercase mt-2 font-weight-bold">Getting Started</h2>
									<p class="text-4 text-color-dark">Let's talk</p>
									<p class="custom-text-color-1 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, adipisci neque delectus dicta consequuntur magnam repellat.</p>
									<a href="demo-finance-contact-us.html" class="btn btn-outline btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-2">Read More</a>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

			<section class="section section-no-border section-primary custom-section-spacement-1 m-0">
				<div class="container">
					<div class="row justify-content-center counters custom-counters counters-text-light">
						<div class="col-lg-3 mb-5 mb-lg-0">
							@include('porto.partials.counter.counter-44')
						</div>
						<div class="col-lg-3 mb-5 mb-lg-0">
							@include('porto.partials.counter.counter-45')
						</div>
						<div class="col-lg-3">
							@include('porto.partials.counter.counter-46')
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border custom-section-spacement-1 bg-color-light m-0">
				<div class="container">
					<div class="row text-center">
						<div class="col">
							<h2 class="text-uppercase text-color-dark font-weight-bold">Invested your money with real Professionals</h2>
							<p class="text-4 text-color-dark mb-5">Meet our Team of Specialists</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<a href="#team-content-1" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-116')
							</a>
							<div id="team-content-1" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-1.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
											<li class="social-icons-googleplus">
												<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
													<i class="fab fa-google-plus-g" aria-hidden="true"></i>
												</a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
													<i class="fab fa-linkedin-in"></i>
												</a>
											</li>
										</ul>
									</div>
									<div class="col-lg-8 col-sm-8">
										<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
										<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<a href="#team-content-2" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-117')
							</a>
							<div id="team-content-2" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-2.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
											<li class="social-icons-googleplus">
												<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
													<i class="fab fa-google-plus-g" aria-hidden="true"></i>
												</a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
													<i class="fab fa-linkedin-in"></i>
												</a>
											</li>
										</ul>
									</div>
									<div class="col-lg-8 col-sm-8">
										<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
										<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<a href="#team-content-3" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-118')
							</a>
							<div id="team-content-3" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-3.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
											<li class="social-icons-googleplus">
												<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
													<i class="fab fa-google-plus-g" aria-hidden="true"></i>
												</a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
													<i class="fab fa-linkedin-in"></i>
												</a>
											</li>
										</ul>
									</div>
									<div class="col-lg-8 col-sm-8">
										<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
										<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<a href="#team-content-4" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-119')
							</a>
							<div id="team-content-4" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-4.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
											<li class="social-icons-googleplus">
												<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
													<i class="fab fa-google-plus-g" aria-hidden="true"></i>
												</a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
													<i class="fab fa-linkedin-in"></i>
												</a>
											</li>
										</ul>
									</div>
									<div class="col-lg-8 col-sm-8">
										<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
										<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
										<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<a href="demo-finance-team.html" class="btn btn-outline btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-3">View More</a>
						</div>	
					</div>
				</div>
			</section>

			<section class="section section-no-border custom-section-spacement-1 bg-color-tertiary m-0">
				<div class="container">
					<div class="row text-center">
						<div class="col">
							<h2 class="text-uppercase text-color-dark font-weight-bold">Why choose us?</h2>
							<p class="text-4 text-color-dark mb-5">3 Basic Steps to Succeed</p>
						</div>
					</div>
					<div class="row text-center">
						<div class="col-md-4 mb-4 mb-md-0">
							<img src="img/demos/finance/why-choose-us/why-choose-us-icon-1.png" class="img-fluid custom-center-img-fluid mb-3" alt>
							<h4 class="text-uppercase font-weight-bold mb-4">Product</h4>
							<p class="custom-text-color-1 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aliquam numquam, aspernatur expedita ipsa molestiae.</p>	
						</div>
						<div class="col-md-4 mb-4 mb-md-0">
							<img src="img/demos/finance/why-choose-us/why-choose-us-icon-2.png" class="img-fluid custom-center-img-fluid mb-3" alt>
							<h4 class="text-uppercase font-weight-bold mb-4">Process</h4>
							<p class="custom-text-color-1 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi incidunt voluptatem, suscipit, dignissimos voluptas sint.</p>	
						</div>
						<div class="col-md-4">
							<img src="img/demos/finance/why-choose-us/why-choose-us-icon-3.png" class="img-fluid custom-center-img-fluid mb-3" alt>
							<h4 class="text-uppercase font-weight-bold mb-4">People</h4>
							<p class="custom-text-color-1 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, libero blanditiis voluptatum ratione at, necessitatibus!</p>	
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border custom-section-spacement-1 bg-color-light m-0">
				<div class="container">
					<div class="row text-center">
						<div class="col">
							<h2 class="text-uppercase font-weight-bold">Testimonials</h2>
							<p class="text-4 text-color-dark mb-5">Cases of Success</p>
						</div>
					</div>
					<div class="row justify-content-center">
						@include('porto.partials.owl-carousel.owl-carousel-63')
					</div>
				</div>
			</section>

			<section class="section section-no-border custom-section-spacement-1 bg-color-quaternary m-0">
				<div class="container">
					<div class="row text-center">
						<div class="col">
							<h2 class="text-uppercase font-weight-bold text-color-light">From our Blog</h2>
							<p class="text-4 custom-text-color-3 mb-5">Latest News</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-sm-10 col-lg-offset-0 col-sm-offset-1 mb-4 mb-lg-0">
							<article class="custom-post-blog">
								<h4>
									<a href="demo-finance-news-detail.html" class="text-decoration-none text-color-light text-uppercase font-weight-bold">Company Strategies</a>
								</h4>
								<p>
									<a href="demo-finance-news-detail.html" class="text-decoration-none custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem ipsa voluptates necessitatibus inventore consequuntur, eius.</a>
								</p>
								<div class="date text-center">
									<span class="day text-color-primary font-weight-bold">10</span>
									<span class="month-year text-uppercase text-color-primary">NOV-17</span>
								</div>
							</article>
						</div>
						<div class="col-lg-4 col-sm-10 col-lg-offset-0 col-sm-offset-1 mb-4 mb-lg-0">
							<article class="custom-post-blog">
								<h4>
									<a href="demo-finance-news-detail.html" class="text-decoration-none text-color-light text-uppercase font-weight-bold">Financial Managers</a>
								</h4>
								<p>
									<a href="demo-finance-news-detail.html" class="text-decoration-none custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit doloribus, facilis aliquam inventore eveniet.</a>
								</p>
								<div class="date text-center">
									<span class="day text-color-primary font-weight-bold">12</span>
									<span class="month-year text-uppercase text-color-primary">NOV-17</span>
								</div>
							</article>
						</div>
						<div class="col-lg-4 col-sm-10 col-lg-offset-0 col-sm-offset-1">
							<article class="custom-post-blog">
								<h4>
									<a href="demo-finance-news-detail.html" class="text-decoration-none text-color-light text-uppercase font-weight-bold">How to get Started</a>
								</h4>
								<p>
									<a href="demo-finance-news-detail.html" class="text-decoration-none custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolores quidem, accusantium cumque, minus totam?</a>
								</p>
								<div class="date text-center">
									<span class="day text-color-primary font-weight-bold">13</span>
									<span class="month-year text-uppercase text-color-primary">NOV-17</span>
								</div>
							</article>
						</div>
						<div class="col-lg-12 text-center">
							<a href="demo-finance-news.html" class="btn btn-outline btn-primary custom-btn-style-2 text-color-light text-uppercase font-weight-semibold mt-5">View More</a>
						</div>
					</div>
				</div>
			</section>

			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 p-0">
						<section class="section section-no-border custom-section-spacement-1 bg-color-primary h-100 m-0">
							<div class="row justify-content-end m-0">
								<div class="col-half-section col-half-section-right">
									<h2 class="text-uppercase text-color-light font-weight-bold">We call you back</h2>
									<p class="text-4 custom-text-color-2 mb-3">Request a Call</p>
									<form id="callSendMessage" class="contact-form custom-form-style" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4" id="contactFormSuccess">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4" id="contactFormError">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 mt-2 d-block" id="contactFormErrorMessage"></span>
										</div>

										<input type="hidden" name="subject" value="Contact Message Received">
										<div class="form-content">
											<div class="form-control-custom custom-sm-margin-bottom-2">
												<i class="icon-user icons"></i>
												<input type="text" class="form-control" name="name" placeholder="Your Name *" data-msg-required="This field is required." id="name" required="">
											</div>
											<div class="form-control-custom custom-sm-margin-bottom-2">
												<i class="icon-screen-smartphone icons"></i>
												<input type="text" class="form-control" name="phone" placeholder="Your Phone *" data-msg-required="This field is required." id="phone" required="">
											</div>
											<div class="form-control-custom custom-sm-margin-bottom-2">
												<i class="icon-envelope icons"></i>
												<input type="text" class="form-control" name="email" placeholder="Your Email *" data-msg-required="This field is required." id="email" required="">
											</div>
											<div class="form-control-custom custom-sm-margin-bottom-2">
												<i class="icon-bubbles icons"></i>
												<input type="text" class="form-control" name="discuss" placeholder="I would like to discuss *" data-msg-required="This field is required." id="discuss" required="">
											</div>
											<input type="submit" class="btn custom-btn-style-1 custom-btn-padding-1 custom-btn-bg-color-1 text-color-light text-uppercase font-weight-semibold outline-none mt-4" value="Submit">
										</div>
									</form>
								</div>
							</div>
						</section>
					</div>
					<div class="col-lg-6 p-0">
						<section class="section section-no-border custom-section-spacement-1 bg-color-secondary overflow-hidden custom-background-image-1 h-100 m-0">
							<div class="row m-0">
								<div class="col-half-section col-half-section-left">
									<h2 class="text-uppercase text-color-light font-weight-bold">Let's Talk Business</h2>
									<p class="text-4 custom-text-color-2 mb-4">Talk to a Specialist</p>
									<p class="custom-text-color-2 custom-padding-right-1 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eligendi nulla impedit delectus earum, aut aperiam, quam aliquid provident dignissimos nesc? Doloremque, quae, officiis!</p>
									<a href="tel:+18001234567" class="text-decoration-none">
										@include('porto.partials.feature-box.feature-box-67')
									</a>
									<a href="mailto:you@domain.com" class="text-decoration-none">
										@include('porto.partials.feature-box.feature-box-68')
									</a>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

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
