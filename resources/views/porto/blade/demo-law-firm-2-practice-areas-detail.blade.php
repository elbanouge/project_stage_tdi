@extends('porto.app')
@section('header')
@include('porto.partials.header.header-138')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-169')
				
				<div class="spacer py-3 my-4"></div>
				<div class="container">
					<div class="row pb-4">
						<div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
							<h2 class="text-color-dark font-weight-bold text-10 pb-2 mb-4"><em>Business Law</em></h2>
							<p class="font-weight-bold text-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper. </p>
							<p class="pb-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui.</p>
							@include('porto.partials.lightbox.lightbox-51')
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
							<ul class="list list-icons list-icons-style-2 list-icons-lg d-flex flex-column flex-lg-row justify-content-between py-4 mt-2 mb-4">
								<li class="font-weight-semibold text-color-dark mb-0">
									<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
									Pellentesque ultricies nibh
								</li>
								<li class="font-weight-semibold text-color-dark my-2 my-lg-0">
									<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
									Ultricies nibh pellen
								</li>
								<li class="font-weight-semibold text-color-dark mb-0">
									<i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
									Ultricies nibh
								</li>
							</ul>
							<p class="pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
							<div class="custom-accordion-style-1 custom-accordion-style-1-grey accordion accordion-modern pb-2 mb-4" id="FAQAccordion">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQOne">
												1- Why choose Porto Law?
											</a>
										</h4>
									</div>
									<div id="collapseFAQOne" class="collapse" data-parent="#FAQAccordion">
										<div class="card-body pl-4">
											<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQTwo">
												2- Why do I need an attorney?
											</a>
										</h4>
									</div>
									<div id="collapseFAQTwo" class="collapse" data-parent="#FAQAccordion">
										<div class="card-body pl-4">
											<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQFour">
												3- Cras a elit sit amet leo accumsan volutpa?
											</a>
										</h4>
									</div>
									<div id="collapseFAQFour" class="collapse" data-parent="#FAQAccordion">
										<div class="card-body pl-4">
											<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQFive">
												4- Integer aliquet ullamcorper dolor?
											</a>
										</h4>
									</div>
									<div id="collapseFAQFive" class="collapse" data-parent="#FAQAccordion">
										<div class="card-body pl-4">
											<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQTSix">
												5- Efficitur felis ultrices non?
											</a>
										</h4>
									</div>
									<div id="collapseFAQTSix" class="collapse" data-parent="#FAQAccordion">
										<div class="card-body pl-4">
											<p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
										</div>
									</div>
								</div>
							</div>
							<p class="pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
						</div>
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">
							@include('porto.partials.sidebar.sidebar-25')
						</div>
					</div>
				</div>
				<div class="spacer py-3 my-4"></div>

				<section class="section overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url(img/demos/law-firm-2/backgrounds/background-2.jpg); background-size: cover; background-position: center;">
					<div class="container py-5 mb-5">
						<div class="row pb-5 mb-4">
							<div class="col text-center">
								<h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">ATTORNEYS &amp; PARTNERS</h3>
								<h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-0">Our Legal Team</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="owl-carousel-wrapper position-relative z-index-3 pb-4 mb-5" style="height: 373px; margin-top: -225px;">
					@include('porto.partials.owl-carousel.owl-carousel-80')
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-0 pt-4 mt-0">
				<div class="container py-5">
					<div class="row py-4">
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">About Us</h5>
							<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
							<a href="demo-law-firm-2.html" class="text-decoration-none">
								<img src="img/demos/law-firm-2/logo-light.png" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Useful Links</h5>
							<ul class="list list-unstyled text-3-5 mb-0">
								<li class="mb-2"><a href="#">Features</a></li>
								<li class="mb-2"><a href="#">Pages</a></li>
								<li class="mb-2"><a href="#">Portfolio</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-about.html">About Us</a></li>
								<li class="mb-0"><a href="demo-law-firm-2-contact.html">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Practice Areas</h5>
							<ul class="list list-unstyled text-3-5 mb-0">
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Family Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Capital Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Business Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Accident &amp; Injury Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Health Law</a></li>
							</ul>
							<a href="demo-law-firm-2-practice-areas.html" class="d-inline-flex custom-read-more-link justify-content-center align-items-center font-weight-medium text-color-primary svg-fill-color-primary svg-stroke-color-primary">
								VIEW ALL
								<svg class="ml-2" version="1.1" viewbox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
								</svg>
							</a>
						</div>
						<div class="col-lg-3">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Contact Us</h5>
							<ul class="list list-unstyled mb-4">
								<li>
									<i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 mr-2"></i>
									<a href="tel:0123456789" class="text-color-light font-weight-bold text-decoration-none text-5">(800) 123-4657</a>
								</li>
								<li class="mb-3">
									<i class="icons icon-envelope text-color-primary text-6 position-relative top-6 mr-2"></i>
									<a href="mailto:porto@consulting.com" class="text-color-light text-decoration-none text-4">porto@consulting.com</a>
								</li>
								<li class="text-color-light text-4">
									<i class="icons icon-calendar text-color-primary text-5 position-relative top-3 mr-2"></i>
									Mon - Fri 9am - 6pm
								</li>
							</ul>
							<ul class="custom-social-icons-style-1 social-icons social-icons-clean">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-4">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-22', ['key' => 'footer-copyright.footer-copyright-22'])
			</footer>
@endsection
