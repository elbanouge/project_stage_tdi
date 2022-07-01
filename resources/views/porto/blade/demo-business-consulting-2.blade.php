@extends('porto.app')
@section('header')
@include('porto.partials.header.header-31')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.owl-carousel.owl-carousel-20')

				<section class="bg-color-light p-relative z-index-2">
					<div class="cards custom-cards custom-cards-slider h-auto pt-5 pb-4 container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
						<div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
							<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
								<div class="card border-radius-0 border-0 shadow-none">
									<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
										<img src="img/demos/business-consulting-2/icons/strategic.png" alt="Strategic Planning" class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
										<h4 class="card-title mb-1 font-weight-semibold text-color-secondary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Strategic Planning</h4>
										<p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
										<a href="#" class="font-weight-bolder text-uppercase text-decoration-none mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">read more +</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
								<div class="card border-radius-0 border-0 shadow-none">
									<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
										<img src="img/demos/business-consulting-2/icons/financial.png" alt="Financial Clean-Up" class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
										<h4 class="card-title mb-1 font-weight-semibold text-color-secondary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Financial Clean-Up</h4>
										<p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
										<a href="#" class="font-weight-bolder text-uppercase text-decoration-none mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">read more +</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
								<div class="card border-radius-0 border-0 shadow-none">
									<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1 border-right-0">
										<img src="img/demos/business-consulting-2/icons/cash.png" alt="Cash Flow Planning" class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
										<h4 class="card-title mb-1 font-weight-semibold text-color-secondary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Cash Flow Planning</h4>
										<p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
										<a href="#" class="font-weight-bolder text-uppercase text-decoration-none mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">read more +</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="our-services d-flex p-relative z-index-1 bg-color-light lazyload" data-bg-src="img/demos/business-consulting-2/bg/bg-1.jpg">
					<div class="col-img-our-services p-absolute overflow-hidden w-50 h-100"></div>
					<div class="container">
						<div class="row justify-content-end align-items-center h-100">
							<div class="col-lg-5 position-relative bg-color-light z-index-1 col-our-services-text">
								<p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>our services</p>
								<h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">What We Do?</h2>
								<p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut.</p>
								<p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet.</p>
								<div class="accordion accordion-sm appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" id="accordionServices">
									<div class="border-radius mb-1 border-0 card-accordion-our-services-container">
										<div class="card-header py-2 bg-color-quaternary">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-tertiary font-weight-semibold" data-toggle="collapse" data-parent="#accordionServices" href="#collapse3One">
													Management Consulting
												</a>
											</h4>
										</div>
										<div id="collapse3One" class="collapse card-accordion-our-services show">
											<div class="card-body">
												<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
												<a href="demo-business-consulting-2-services.html" class="font-weight-bolder text-uppercase text-decoration-none d-block mt-3">read more +</a>
											</div>
										</div>
									</div>
									<div class="border-radius mb-1 border-0 card-accordion-our-services-container">
										<div class="card-header py-2 bg-color-quaternary">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-tertiary font-weight-semibold" data-toggle="collapse" data-parent="#accordionServices" href="#collapse3Two">
													Business Coaching
												</a>
											</h4>
										</div>
										<div id="collapse3Two" class="collapse card-accordion-our-services">
											<div class="card-body">
												<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
												<a href="demo-business-consulting-2-services.html" class="font-weight-bolder text-uppercase text-decoration-none d-block mt-3">read more +</a>
											</div>
										</div>
									</div>
									<div class="border-radius mb-1 border-0 card-accordion-our-services-container">
										<div class="card-header py-2 bg-color-quaternary">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-tertiary font-weight-semibold" data-toggle="collapse" data-parent="#accordionServices" href="#collapse3Three">
													Performance Consulting and Coaching
												</a>
											</h4>
										</div>
										<div id="collapse3Three" class="collapse card-accordion-our-services">
											<div class="card-body">
												<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
												<a href="demo-business-consulting-2-services.html" class="font-weight-bolder text-uppercase text-decoration-none d-block mt-3">read more +</a>
											</div>
										</div>
									</div>
									<div class="border-radius mb-1 border-0 card-accordion-our-services-container">
										<div class="card-header py-2 bg-color-quaternary">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-tertiary font-weight-semibold" data-toggle="collapse" data-parent="#accordionServices" href="#collapse3Four">
													Strategy and Marketing
												</a>
											</h4>
										</div>
										<div id="collapse3Four" class="collapse card-accordion-our-services">
											<div class="card-body">
												<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
												<a href="demo-business-consulting-2-services.html" class="font-weight-bolder text-uppercase text-decoration-none d-block mt-3">read more +</a>
											</div>
										</div>
									</div>
									<div class="border-radius mb-1 border-0 card-accordion-our-services-container">
										<div class="card-header py-2 bg-color-quaternary">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-tertiary font-weight-semibold" data-toggle="collapse" data-parent="#accordionServices" href="#collapse3Five">
													Service Benchmarking
												</a>
											</h4>
										</div>
										<div id="collapse3Five" class="collapse card-accordion-our-services">
											<div class="card-body">
												<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
												<a href="demo-business-consulting-2-services.html" class="font-weight-bolder text-uppercase text-decoration-none d-block mt-3">read more +</a>
											</div>
										</div>
									</div>
								</div>

								<a href="demo-business-consulting-2-services.html" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold mt-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">FIND OUT MORE</a>
							</div>	
						</div>
					</div>
				</section>
				
				<section class="coaching-consulting d-flex p-relative bg-color-light pt-3 pb-3 pt-lg-5 pb-lg-4">
					<div class="container">
						<div class="row justify-content-end py-5">
							<div class="col-lg-6">
								<p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>coaching and consulting</p>
								<h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Experienced Team</h2>
								<p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
								<p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
								<div class="d-flex align-items-center justify-content-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
									@include('porto.partials.circular-bar.circular-bar')
									<h4 class="font-weight-bolder text-color-tertiary m-0 ml-3">Successful cases<br>in 15 years.</h4>
								</div>
							</div>
							<div class="col-lg-6 col-coaching-consulting-imgs p-relative">
								<div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
									<img src="img/demos/business-consulting-2/coaching/coaching-1.jpg" class="img-fluid border-radius-0" alt="">
								</div>
								<div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
									<img src="img/demos/business-consulting-2/coaching/coaching-2.jpg" class="img-fluid border-radius-0" alt="">
								</div>
								<div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
									<img src="img/demos/business-consulting-2/coaching/coaching-3.jpg" class="img-fluid border-radius-0" alt="">
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="real-word-stories bg-color-quaternary overflow-hidden p-relative pb-4">
					<div class="container py-xl-5">
						<div class="row justify-content-between align-items-center pt-5 py-xl-5 mt-3">
							<div class="col-xl-6 mb-5 pb-5 mb-xl-0 pb-xl-0">
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
									@include('porto.partials.owl-carousel.owl-carousel-21')
								</div>
							</div>
							<div class="col-xl-5 mb-5 mb-xl-0">
								<p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"><span class="line-pre-title bg-color-primary"></span>real world stories</p>
								<h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Sucessful Cases</h2>
								<p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat.</p>
								<p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
								<div class="counters custom-counters d-flex">
									@include('porto.partials.counter.counter-11')
									@include('porto.partials.counter.counter-12')
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="are-you-looking-for bg-color-secondary">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-xl-5">
								<p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Are you looking for a</p>
								<h2 class="text-color-light font-weight-bolder text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Business Plan Consultant?</h2>
								<p class="font-weight-semibold text-color-light mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Schedule your company strategy session right now!</p>
							</div>
							<div class="col-xl-6 d-flex align-items-start align-items-sm-center justify-content-start justify-content-xl-end mt-4 mt-xl-0 flex-column flex-sm-row">
								<span class="are-you-looking-for-phone py-2 d-flex align-items-center text-color-light font-weight-semibold text-uppercase text-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
									<span>
										<img width="18" height="25" src="img/demos/business-consulting-2/icons/phone.svg" alt="Phone">
									</span>
									<a class="text-color-light text-decoration-none" href="tel:123-456-7890">(800) 123-4567</a>
								</span>
								<a href="demo-business-consulting-2-contact-us.html" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">free initial consultation</a>
							</div>
						</div>
					</div>
				</section>

				<section class="our-blog">
					<div class="container">
						<div class="row mt-3 pt-5">
							<div class="col">
								<p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>our blog</p>
								<h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">News and Articles</h2>
							</div>
						</div>
						<div class="row mb-3 pb-5">
							<div class="col">
								<div class="row">
									<div class="col-lg-6 mb-4 mb-lg-0">
										<article>
											<div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
												<div class="card-body p-4 z-index-1">
													<a href="demo-business-consulting-2-blog-post.html">
														<img class="card-img-top border-radius-0" src="img/demos/business-consulting-2/blog/blog-1.png" alt="Card Image">
													</a>
													<p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>
													<div class="card-body p-0">
														<h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="demo-business-consulting-2-blog-post.html">An Interview with John Doe</a></h4>
														<p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
														<a href="demo-business-consulting-2-blog-post.html" class="font-weight-bolder text-uppercase text-decoration-none d-block mt-3">Read More +</a>
													</div>
												</div>
											</div>
										</article>
									</div>
									<div class="col-lg-6">
										<article>
											<div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
												<div class="card-body p-4 z-index-1">
													<a href="demo-business-consulting-2-blog-post.html">
														<img class="card-img-top border-radius-0" src="img/demos/business-consulting-2/blog/blog-2.png" alt="Card Image">
													</a>
													<p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>
													<div class="card-body p-0">
														<h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="demo-business-consulting-2-blog-post.html">How to Grow your Business</a></h4>
														<p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
														<a href="demo-business-consulting-2-blog-post.html" class="font-weight-bolder text-uppercase text-decoration-none d-block mt-3">Read More +</a>
													</div>
												</div>
											</div>
										</article>
									</div>									
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="m-0 border-0 bg-color-quaternary overflow-hidden">
				<div class="container">
					<div class="row py-5 custom-row-footer">
						<div class="col-12 col-sm-12 col-lg-3 d-flex align-items-start flex-column footer-column custom-footer-column-logo">
							<img width="123" height="32" src="img/demos/business-consulting-2/logos/porto.png" alt="Logo Footer">
							<p class="d-block m-0 text-color-default">Lorem ipsum dolor sit amet, conse adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor.</p>
						</div>
						<div class="col-12 col-sm-12 col-lg-9 footer-column">
							<div class="d-flex align-items-start align-sm-items-end justify-content-between flex-column h-100 mt-4 mt-sm-0">
								<div class="d-flex flex-nowrap flex-lg-wrap justify-content-start justify-content-lg-end align-items-start align-items-lg-center w-100 flex-column flex-lg-row mt-4 mt-lg-0 custom-container-info-socials">
									@include('porto.partials.nav-pills.nav-pills-1')
									<ul class="social-icons custom-social-icons">
										<li class="social-icons-instagram">
											<a class="custom-bg-color-light-grey" href="http://www.instagram.com/" target="_blank" title="Instagram">
												<i class="fab fa-instagram text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-twitter">
											<a class="custom-bg-color-light-grey" href="http://www.twitter.com/" target="_blank" title="Twitter">
												<i class="fab fa-twitter text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-facebook">
											<a class="custom-bg-color-light-grey" href="http://www.facebook.com/" target="_blank" title="Facebook">
												<i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
									</ul>
								</div>
								<nav class="nav-footer w-100 d-none d-lg-block">
									@include('porto.partials.nav-pills.nav-pills-2')
								</nav>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-8', ['key' => 'footer-copyright.footer-copyright-8'])
			</footer>
@endsection
