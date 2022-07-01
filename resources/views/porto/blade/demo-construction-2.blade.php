@extends('porto.app')
@section('header')
@include('porto.partials.header.header-66')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.owl-carousel.owl-carousel-48')

				<section class="section custom-angled section-angled bg-tertiary border-top-0 pt-0 pb-0 pb-lg-5 mb-5 mb-lg-0">
					<div class="section-angled-layer-bottom bg-light d-none d-lg-block"></div>
					<div class="section-angled-content mb-0 mb-lg-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
						<div class="container container-lg-custom pb-4 pb-lg-0">
							<div class="row pb-lg-5">
								<div class="col-lg-4 py-2 active" data-carousel-navigate data-carousel-navigate-id="#slider" data-carousel-navigate-to="1">
									<div class="mt-5 mb-lg-5">
										<h4 class="text-color-secondary font-weight-bold text-5">Reliable Construction Service</h4>
										<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Nunc viverra arat orci, ac auctor lacus tincidunt ut.</p>
										<p class="font-weight-bold mb-lg-3">
											<a href="demo-construction-2-about-us.html" class="link-hover-style-1 text-color-primary">READ MORE+</a>
										</p>
									</div>
								</div>
								<div class="col-lg-4 py-2" data-carousel-navigate data-carousel-navigate-id="#slider" data-carousel-navigate-to="2">
									<div class="mt-lg-5 mb-lg-5">
										<h4 class="text-color-secondary font-weight-bold text-5">Project Management</h4>
										<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Nunc viverra arat orci, ac auctor lacus tincidunt ut.</p>
										<p class="font-weight-bold mb-lg-3">
											<a href="demo-construction-2-about-us.html" class="link-hover-style-1 text-color-primary">READ MORE+</a>
										</p>
									</div>
								</div>
								<div class="col-lg-4 py-2" data-carousel-navigate data-carousel-navigate-id="#slider" data-carousel-navigate-to="3">
									<div class="mt-lg-5 mb-lg-5">
										<h4 class="text-color-secondary font-weight-bold text-5">Building Restauration</h4>
										<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Nunc viverra arat orci, ac auctor lacus tincidunt ut.</p>
										<p class="font-weight-bold mb-lg-3">
											<a href="demo-construction-2-about-us.html" class="link-hover-style-1 text-color-primary">READ MORE+</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-light border-0 p-0 m-0" id="services">
					<div class="container container-lg-custom">
						<div class="row">
							<div class="col">
								<p class="mb-1">WHAT WE DO</p>
								<h3 class="text-secondary font-weight-bold text-capitalize text-7 mb-2">Our Services</h3>
							</div>
						</div>
						<div class="row mx-0">
							@include('porto.partials.owl-carousel.owl-carousel-49')
						</div>
					</div>
				</section>

				<section class="section custom-angled section-angled bg-tertiary border-top-0 pb-0 pb-lg-5 mb-5 mb-lg-0">
					<div class="section-angled-layer-top bg-light"></div>
					<div class="section-angled-layer-bottom bg-light d-none d-lg-block"></div>
					<div class="section-angled-content mb-0 mb-lg-5">
						<div class="container py-5 container-lg-custom custom-container">
							<div class="row align-items-center justify-content-center pt-5 pb-lg-5">
								<div class="col-md-8 col-xl-6 mb-md-5 mb-xl-4">
									<div class="position-relative">
										<img src="img/demos/construction-2/about-us/about-1.jpg" class="img-fluid custom-img border-radius-0 max-w-90 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600ms" alt="">
										<img src="img/demos/construction-2/about-us/about-2.jpg" class="img-fluid custom-img border-radius-0 position-absolute custom-img-about appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="600ms" alt="">
									</div>
								</div>
								<div class="col-xl-6 mt-lg-5 mt-xl-0">
									<div class="pl-md-4 mt-5">
										<div class="row">
											<div class="col">
												<p class="mb-1">WHO WE ARE</p>
												<h3 class="text-secondary font-weight-bold text-capitalize text-7 mb-2">More About Porto Construction</h3>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<p class="text-4 pt-2 mb-4">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
												</p>					
												<p class="mb-3">
													Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec vulputate eget, arcu in enim justo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
												</p>	
												<p class="font-weight-bold mb-3">
													<a href="demo-construction-2-about-us.html" class="link-hover-style-1 text-color-primary">READ MORE+</a>
												</p>
												<div class="porto.partialsunters-sm text-secondary">
													<div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-4">
														@include('porto.partials.counter.counter-21')
													</div>porto.partials
													<div class="col-6 col-lg-3 mb-4 mb-lg-0 mt-4">
														@include('porto.partials.counter.counter-22')
													</div>porto.partials
													<div class="col-6 col-lg-3 mb-4 mb-sm-0 mt-4">
														@include('porto.partials.counter.counter-23')
													</div>porto.partials
													<div class="col-6 col-lg-3 mt-4">
														@include('porto.partials.counter.counter-24')
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-light border-0 py-0 my-2">
					<div class="container container-lg-custom">
						<div class="row">
							<div class="col">
								<p class="mb-1 text-uppercase">Feature Works</p>
								<h3 class="text-secondary font-weight-bold text-capitalize text-7 mb-2">Our portfolio</h3>
							</div>
						</div>
							
						<div class="sort-destination-loader sort-destination-loader-showing m-0 mt-4 p-0">
							<div class="porto.partialsrtfolio-list sort-destination" data-sort-id="portfolio">							
								<div class="col-sm-6 isotope-item">
									@include('porto.partials.portfolio-item.portfolio-item-41', ['key' => 'portfolio-item.portfolio-item-41'])
								</div>porto.partials
								<div class="col-sm-6 col-lg-3 isotope-item">
									@include('porto.partials.portfolio-item.portfolio-item-42', ['key' => 'portfolio-item.portfolio-item-42'])
								</div>porto.partials
								<div class="col-sm-6 col-lg-3 isotope-item">
									@include('porto.partials.portfolio-item.portfolio-item-41', ['key' => 'portfolio-item.portfolio-item-43'])
								</div>porto.partials
								<div class="col-sm-6 col-lg-3 isotope-item">
									@include('porto.partials.portfolio-item.portfolio-item-41', ['key' => 'portfolio-item.portfolio-item-44'])
								</div>	
							</div>
						</div>

						@include('porto.partials.nav-pills.nav-pills-7')

						<div class="row">
							<div class="col text-center pb-4">
								<a href="demo-construction-2-projects.html" class="btn btn-primary btn-outline custom-btn font-weight-extra-bold mt-3 px-5 py-3 border-width-4">VIEW MORE+</a>
							</div>
						</div>

					</div>
				</section>

				<section class="container-fluid mb-5 mb-lg-0">
					<div class="row">
						<div class="col-lg-6 px-0">
							<section class="section custom-angled section-angled bg-secondary border-top-0">
								<div class="section-angled-layer-top bg-light"></div>
								<div class="section-angled-layer-bottom bg-light d-none d-lg-block"></div>
								<div class="section-angled-content">
									<div class="container container-lg-custom">
										<div class="row justify-content-lg-end py-3">
											<div class="col-lg-10 custom-col pt-5 pb-lg-5 mt-5 mb-lg-5 px-3 px-lg-1 pr-lg-3">
												<div class="col px-0">
													<p class="mb-1 text-uppercase">Extra Work</p>
													<h3 class="text-light font-weight-bold text-capitalize text-7 mb-2">Special Services</h3>
												</div>
												<div class="row pr-3">
													<div class="col">
														<p class="text-4 pt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut tellus ante. Nam suscipt urna
															risus, fermentum commodo ipsum porta id.
														</p>												
														<p>
															Cras a elit sit amet leo accumsam volutpat. Suspendisse hendrerit vehicula leo, vel effcitur fells
															ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.
														</p>
														<p class="mb-2 font-weight-bold">
															<a href="demo-construction-2-contact-us.html" class="link-hover-style-1 text-color-primary">GET A QUOTE+</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-6 px-0 d-none d-lg-flex">
							<section class="section section-angled custom-angled section-angled-reverse section-center bg-secondary border-top-0 flex-grow-1 lazyload" data-bg-src="img/demos/construction-2/services/services-1.jpg">
								<div class="section-angled-layer-top bg-light d-none d-lg-block"></div>
								<div class="section-angled-layer-bottom bg-light"></div>
								<div class="section-angled-content">
								</div>
							</section>
						</div>
					</div>
				</section>

				<section class="section section-height-3 bg-light border-0 pt-3 pt-lg-0 pb-4">
					<div class="container container-lg-custom appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
						<div class="row">
							<div class="col">
								<p class="mb-1">WHAT THEY SAY</p>
								<h3 class="text-secondary font-weight-bold text-capitalize text-7 mb-2">Customers Reviews</h3>
							</div>
						</div>
						<div class="row mx-0">
							<div class="porto.partialsme custom-dots mt-3 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 2}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 18, 'loop': true, 'nav': false, 'dots': true}">
								<div>
									@include('porto.partials.testimonial.testimonial-31')
								</div>porto.partials
								<div>
									@include('porto.partials.testimonial.testimonial-32')
								</div>
porto.partials
								<div>
									@include('porto.partials.testimonial.testimonial-31')
								</div>porto.partials
								<div>
									@include('porto.partials.testimonial.testimonial-32')
								</div>
porto.partials
								<div>
									@include('porto.partials.testimonial.testimonial-31')
								</div>porto.partials
								<div>
									@include('porto.partials.testimonial.testimonial-32')
								</div>

							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-color-secondary border-top-0 mt-0 custom-footer">
				<div class="container container-lg-custom py-md-4">
					<div class="row justify-content-md-center py-5">
						<div class="col-md-12 col-lg-2 d-flex align-items-center justify-content-center justify-content-lg-start mb-5 mb-lg-0">
							<a href="#"><img src="img/demos/construction-2/logo-1.png" alt="Logo" class="img-fluid logo"></a>
						</div>
						<div class="col-md-3 text-center text-md-left">
							<p class="text-5 text-color-light font-weight-bold mb-3 mt-4 mt-lg-0">Get in Touch</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">ADDRESS</p>
							<p class="text-3 mb-2 text-color-light">123 Street name, City, USA.</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">PHONE</p>
							<p class="text-3 mb-2 text-color-light">Toll Free <a href="tel:+1234567890" class="text-color-light">(123) 456-7890</a></p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">EMAIL</p>
							<p class="text-3 mb-2 "><a href="mailto:info@porto.com" class="text-color-light">mail@example.com</a></p>
							<p class="text-3 mb-0 font-weight-bold text-color-light opacity-7 text-uppercase">Working Days/Hours</p>
							<p class="text-3 mb-3 text-color-light">Mon - Sun / 9:00AM - 8:00PM</p>
							<ul class="social-icons social-icons-dark social-icons-clean">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" target="_blank" title="Instagram">
										<i class="fab fa-instagram font-weight-semibold"></i>
									</a>
								</li>
								<li class="social-icons-twitter">
									<a href="http://www.twitter.com/" target="_blank" title="Twitter">
										<i class="fab fa-twitter font-weight-semibold"></i>
									</a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" target="_blank" title="Facebook">
										<i class="fab fa-facebook-f font-weight-semibold"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 text-center text-md-left mt-5 mt-md-0 mb-5 mb-lg-0">
							<p class="text-5 text-color-light font-weight-bold mb-3 mt-4 mt-lg-0">Useful links</p>
							<div class="row opacity-7">
								<div class="col-md-5">
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Contact Us</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Our Services</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Payment Methods</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Services Guide</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">FAQs</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Service Support</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Privacy</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">About Porto</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Our Guarantees</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Terms And Conditions</a></p>
								</div>
								<div class="col-md-5">
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Privacy Policy</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Return Policy</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Intellectual Property</a></p>
									<p class="mb-0"><a href="#" class="text-3 text-color-light link-hover-style-1">Site Map</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-3 text-center text-md-left">
							<p class="text-5 text-color-light font-weight-bold mb-3 mt-4 mt-lg-0">Latest Projects</p>

							<p class="text-3 mb-0 text-color-light opacity-7">Painting, Plumbing</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light">House Renovation - New York / NY</p>
							<p class="text-3 mb-4 font-weight-bold"><a href="#" class="link-hover-style-1 text-primary">VIEW MORE+</a></p>

							<p class="text-3 mb-0 text-color-light opacity-7">Eletrical Maitenance</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light">Building Repair - Detroit / MI</p>
							<p class="text-3 mb-4 font-weight-bold"><a href="#" class="link-hover-style-1 text-primary">VIEW MORE+</a></p>

							<p class="text-3 mb-0 text-color-light opacity-7">Flooring</p>
							<p class="text-3 mb-0 font-weight-bold text-color-light">House Repair - New York / NY</p>
							<p class="text-3 font-weight-bold"><a href="#" class="link-hover-style-1 text-primary">VIEW MORE+</a></p>
						</div>
					</div>
				</div>porto.partials
				<div class="container container-lg-custom">
					@include('porto.partials.footer-copyright.footer-copyright-12', ['key' => 'footer-copyright.footer-copyright-12'])
				</div>
				<div class="container-fluid bg-light">
					<div class="container container-lg-custom py-5">
						<div class="row flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between px-3">
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-1.png" alt="Brand" class="img-fluid">
							</span>
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-2.png" alt="Brand" class="img-fluid">
							</span>
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-3.png" alt="Brand" class="img-fluid">
							</span>
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-4.png" alt="Brand" class="img-fluid">
							</span>
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-5.png" alt="Brand" class="img-fluid">
							</span>
							<span class="p-3">
								<img src="img/demos/construction-2/brands/brand-6.png" alt="Brand" class="img-fluid">
							</span>
						</div>
					</div>
				</div>
			</footer>
@endsection
