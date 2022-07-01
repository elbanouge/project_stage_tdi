@extends('porto.app')
@section('header')
@include('porto.partials.header.header-158')
@endsection

@section('main')
<div role="main" class="main">
			@include('porto.partials.owl-carousel.owl-carousel-94')

			<section class="section-custom-medical">
				<div class="container">
					<div class="row medical-schedules">
						<div class="col-xl-3 box-one bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
							@include('porto.partials.feature-box.feature-box-110')
						</div>
						<div class="col-xl-3 box-two bg-color-tertiary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
							<h5 class="m-0">
								<a href="demo-medical-doctors.html" title="">
									Doctors Timetable
									<i class="icon-arrow-right-circle icons"></i>
								</a>
							</h5>
						</div>
						<div class="col-xl-3 box-three bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1200">
							<div class="expanded-info p-4 bg-color-primary">
								<div class="info custom-info">
									<span>Mon-Fri</span>
									<span>8:30 am to 5:00 pm</span>
								</div>
								<div class="info custom-info">
									<span>Saturday</span>
									<span>9:30 am to 1:00 pm</span>
								</div>
								<div class="info custom-info">
									<span>Sunday</span>
									<span>Closed</span>
								</div>
							</div>
							<h5 class="m-0">
								Opening Hours
								<i class="icon-arrow-right-circle icons"></i>
							</h5>
						</div>
						<div class="col-xl-3 box-four bg-color-secondary p-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1800">
							<a href="tel:+008001234567" class="text-decoration-none">
								@include('porto.partials.feature-box.feature-box-111')
							</a>
						</div>
					</div>
					<div class="row mt-5 mb-5 pt-3 pb-3">
						<div class="col-md-8">
							<h2 class="font-weight-semibold mb-0">About Us</h2>
							<p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad...</p>

							<a class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 mb-4 mb-md-0 font-weight-bold">read more</a>
						</div>
						<div class="col-md-4">
							<img src="img/demos/medical/gallery/gallery-1.jpg" alt class="img-fluid box-shadow-custom"> 
						</div>
					</div>
				</div>
			</section>
			<section class="section section-no-border">
				<div class="container">
					<div class="row pt-3">
						<div class="col">
							<h2 class="font-weight-semibold mb-0">Departments</h2>
							<p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-4">
							@include('porto.partials.feature-box.feature-box-112')
						</div>
						<div class="col-lg-4">
							@include('porto.partials.feature-box.feature-box-113')
						</div>
						<div class="col-lg-4">
							@include('porto.partials.feature-box.feature-box-114')
						</div>
					</div>
					<div class="row mt-lg-4">
						<div class="col-lg-4">
							@include('porto.partials.feature-box.feature-box-115')
						</div>
						<div class="col-lg-4">
							@include('porto.partials.feature-box.feature-box-116')
						</div>
						<div class="col-lg-4">
							@include('porto.partials.feature-box.feature-box-117')
						</div>
					</div>
					<div class="row mt-2 pb-4">
						<div class="col-lg-12 text-center">
							<a class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 font-weight-bold" href="demo-medical-departments.html">view more</a>
						</div>
					</div>
				</div>
			</section>
			<section class="team pb-2">
				<div class="container">
					<div class="row pt-4">
						<div class="col">
							<h2 class="font-weight-semibold mb-0">Doctors</h2>
							<p class="lead font-weight-normal">Our Specialists</p>

							<div id="porfolioAjaxBoxMedical" class="ajax-box ajax-box-init mb-4">

								<div class="bounce-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>

								<div class="ajax-box-content" id="porfolioAjaxBoxContentMedical"></div>

							</div>

						</div>
					</div>
					<div class="row pb-4">
						@include('porto.partials.owl-carousel.owl-carousel-95')
					</div>
				</div>
			</section>
			<section class="section">
				<div class="container">
					<div class="row pt-3">
						<div class="col">
							<h2 class="font-weight-semibold mb-0">Resources</h2>
							<p class="lead font-weight-normal">List of our features resources</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<a href="demo-medical-resources-detail.html" class="text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-198')
							</a>
						</div>
						<div class="col-md-4">
							<a href="demo-medical-resources-detail.html" class="text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-199')
							</a>
						</div>
						<div class="col-md-4">
							<a href="demo-medical-resources-detail.html" class="text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-200')
							</a>
						</div>
					</div>
					<div class="row pb-4">
						<div class="col-lg-12 text-center">
							<a class="btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold">view more</a>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="container">
					<div class="row pt-4">
						<div class="col">
							<h2 class="font-weight-semibold mb-0">Insurance</h2>
							<p class="lead font-weight-normal">Major insurance providers accepted</p>
						</div>
					</div>
					<div class="row mb-5 pb-4">
						<div class="col">
							<div class="content-grid">
								<div class="row content-grid-row pl-3 pr-3">
									<div class="content-grid-item col-md-4 col-lg-2 text-center">
										<img src="img/demos/medical/logos/insurance-logo-1.png" alt class="img-fluid">
									</div>
									<div class="content-grid-item col-md-4 col-lg-2 text-center">
										<img src="img/demos/medical/logos/insurance-logo-2.png" alt class="img-fluid">
									</div>
									<div class="content-grid-item col-md-4 col-lg-2 text-center">
										<img src="img/demos/medical/logos/insurance-logo-3.png" alt class="img-fluid">
									</div>
									<div class="content-grid-item col-md-4 col-lg-2 text-center">
										<img src="img/demos/medical/logos/insurance-logo-4.png" alt class="img-fluid">
									</div>
									<div class="content-grid-item col-md-4 col-lg-2 text-center">
										<img src="img/demos/medical/logos/insurance-logo-5.png" alt class="img-fluid">
									</div>
									<div class="content-grid-item col-md-4 col-lg-2 text-center">
										<img src="img/demos/medical/logos/insurance-logo-6.png" alt class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section-secondary">
				<div class="container">
					<div class="row pt-5 pb-5">
						@include('porto.partials.owl-carousel.owl-carousel-96')
					</div>
				</div>
			</section>

			<footer id="footer" class="m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-md-4 col-lg-3 mb-2">
							<h4 class="mb-4">Location</h4>
							<p>
								Porto Medical<br>
								123 Porto Blvd, Suite 100<br>
								New York, NY<br>
								Phone : 123-456-7890
							</p>
						</div>
						<div class="col-md-4 col-lg-3">
							<h4 class="mb-4">Opening Hours</h4>
							<div class="info custom-info">
								<span>Mon-Fri</span>
								<span>8:30 am to 5:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Saturday</span>
								<span>9:30 am to 1:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Sunday</span>
								<span>Closed</span>
							</div>
						</div>
						<div class="col-md-4 col-lg-3">
							<div class="contact-details">
								<h4 class="mb-4">Emergency Cases</h4>
								<a class="text-decoration-none" href="tel:1234567890">
									<strong class="font-weight-light">(800)123-4567</strong>
								</a>
							</div>
						</div>
						<div class="col-lg-2 text-md-center text-lg-left ml-lg-auto">
							<h4 class="mb-4">Social Media</h4>
							<ul class="social-icons">
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
								<li class="social-icons-linkedin">
									<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-25', ['key' => 'footer-copyright.footer-copyright-25'])
			</footer>
		</div>
@endsection

@section('footer')
<footer id="footer" class="m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-md-4 col-lg-3 mb-2">
							<h4 class="mb-4">Location</h4>
							<p>
								Porto Medical<br>
								123 Porto Blvd, Suite 100<br>
								New York, NY<br>
								Phone : 123-456-7890
							</p>
						</div>
						<div class="col-md-4 col-lg-3">
							<h4 class="mb-4">Opening Hours</h4>
							<div class="info custom-info">
								<span>Mon-Fri</span>
								<span>8:30 am to 5:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Saturday</span>
								<span>9:30 am to 1:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Sunday</span>
								<span>Closed</span>
							</div>
						</div>
						<div class="col-md-4 col-lg-3">
							<div class="contact-details">
								<h4 class="mb-4">Emergency Cases</h4>
								<a class="text-decoration-none" href="tel:1234567890">
									<strong class="font-weight-light">(800)123-4567</strong>
								</a>
							</div>
						</div>
						<div class="col-lg-2 text-md-center text-lg-left ml-lg-auto">
							<h4 class="mb-4">Social Media</h4>
							<ul class="social-icons">
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
								<li class="social-icons-linkedin">
									<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-25', ['key' => 'footer-copyright.footer-copyright-25'])
			</footer>
@endsection
