@extends('porto.app')
@section('header')
@include('porto.partials.header.header-155')
@endsection

@section('main')
<div role="main" class="main">
				
			@include('porto.partials.page-header.page-header-180')

			<section class="team">
				<div class="container">

					<div class="row mt-5 mb-5">
						<div class="col">

							<h2 class="font-weight-semibold mb-3">Meet our Specialists</h2>

							<p class="lead font-weight-normal">At Porto Medical, we offer a wide array of departments, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>

							<div id="porfolioAjaxBoxMedical" class="ajax-box ajax-box-init mb-4">

								<div class="bounce-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>

								<div class="ajax-box-content" id="porfolioAjaxBoxContentMedical"></div>

							</div>

							@include('porto.partials.nav-pills.nav-pills-12')

							<div class="sort-destination-loader sort-destination-loader-showing">
								<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
									<div class="col-md-6 col-lg-3 isotope-item cardiology">
										@include('porto.partials.portfolio-item.portfolio-item-51', ['key' => 'portfolio-item.portfolio-item-51'])
									</div>
									<div class="col-md-6 col-lg-3 isotope-item gastroenterology">
										@include('porto.partials.portfolio-item.portfolio-item-51', ['key' => 'portfolio-item.portfolio-item-52'])
									</div>
									<div class="col-md-6 col-lg-3 isotope-item pulmonology">
										@include('porto.partials.portfolio-item.portfolio-item-51', ['key' => 'portfolio-item.portfolio-item-53'])
									</div>
									<div class="col-md-6 col-lg-3 isotope-item dental">
										@include('porto.partials.portfolio-item.portfolio-item-51', ['key' => 'portfolio-item.portfolio-item-54'])
									</div>
									<div class="col-md-6 col-lg-3 isotope-item gynecology">
										@include('porto.partials.portfolio-item.portfolio-item-51', ['key' => 'portfolio-item.portfolio-item-55'])
									</div>
								</div>
							</div>

						</div>
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
