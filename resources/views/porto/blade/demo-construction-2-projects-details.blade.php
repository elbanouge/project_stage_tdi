@extends('porto.app')
@section('header')
@include('porto.partials.header.header-64')
@endsection

@section('porto.partials
<div role="main" class="main">
@include('porto.partials.page-header.page-header-114')

				<div class="container container-lg-custom pt-4">
					<div class="row">
						<div class="col">
							<p class="text-4">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida. 
							</p>
							<p>
								Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue.
							</p>
						</div>
					</div>

					<div class="row pb-5 mb-3">
						<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="row">
								<div class="col-lg-6 mb-4 mb-lg-0">
									<div class="thumb-gallery">
										@include('porto.partials.owl-carousel.owl-carousel-45')
										@include('porto.partials.owl-carousel.owl-carousel-46')
									</div>
								</div>

								<div class="col-lg-6">
									<div class="custom-card-style-2">
										<div class="col my-5">
											<div class="row px-5 flex-column">
												<div class="row px-3 mb-3">
													<h3 class="text-secondary font-weight-bold text-capitalize mb-3">Project Info</h3>
													<p>Lorem inpsum dolor sit amet, consectetur adipiscing elit. Sed eget risus pora, tincidunt turpis at, intermedum tortor.</p>
												</div>
												<div class="row flex-column px-3 mb-2">
													<h4 class="text-secondary text-4 font-weight-bold text-capitalize mb-0">Project Location</h4>
													<p class="mb-0">123 Street Name, City, England</p>
												</div>
												<hr>
												<div class="row flex-column px-3 mb-2">
													<h4 class="text-secondary text-4 font-weight-bold text-capitalize mb-0 pt-3">Project Type</h4>
													<p class="mb-0">General Construction</p>
												</div>
												<hr>
												<div class="row flex-column px-3 mb-2">
													<h4 class="text-secondary text-4 font-weight-bold text-capitalize mb-0 pt-3">Project Cost</h4>
													<p class="mb-0">$100,00</p>
												</div>
												<hr>
												<div class="row flex-column px-3 mb-2">
													<h4 class="text-secondary text-4 font-weight-bold text-capitalize mb-0 pt-3">Client</h4>
													<p class="mb-0">Okler Themes</p>
												</div>
												<hr>
												<div class="row flex-column px-3">
													<h4 class="text-secondary text-4 font-weight-bold text-capitalize mb-2 pt-3">Project Status</h4>
													<p class="mb-0">General Progress</p>
													@include('porto.partials.progress.progress-13')
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

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
