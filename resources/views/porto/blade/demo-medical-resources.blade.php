@extends('porto.app')
@section('header')
@include('porto.partials.header.header-157')
@endsection

@section('main')
<div role="main" class="main">
				
			@include('porto.partials.page-header.page-header-182')

			<div class="container">

				<div class="row mt-5 mb-5">
					<div class="col">
						<h2 class="font-weight-semibold mb-3">Patient Resources</h2>

						<p class="lead font-weight-normal">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</p>

						<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad.</p>

						<div class="row mt-4">
							<div class="col-md-4 mb-3 mb-md-0">
								<a href="demo-medical-resources-detail.html" class="text-decoration-none">
									<img alt="" class="img-fluid" src="img/demos/medical/gallery/gallery-2.jpg">
								</a>
							</div>
							<div class="col-md-8">
								<h4 class="font-weight-semibold mb-1 mt-1">
									<a href="demo-medical-resources-detail.html" class="text-decoration-none">Prepare for visit</a>
								</h4>
								<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat...</p>
								<p><a href="demo-medical-resources-detail.html" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-2 mb-3 font-weight-bold btn-md text-1">view more...</a></p>
							</div>
						</div>

						<div class="row mt-4">
							<div class="col-md-4 mb-3 mb-md-0">
								<a href="demo-medical-resources-detail.html" class="text-decoration-none">
									<img alt="" class="img-fluid" src="img/demos/medical/gallery/gallery-3.jpg">
								</a>
							</div>
							<div class="col-md-8">
								<h4 class="font-weight-semibold mb-1 mt-1">
									<a href="demo-medical-resources-detail.html" class="text-decoration-none">Surgery proccess</a>
								</h4>
								<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat...</p>
								<p><a href="demo-medical-resources-detail.html" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-2 mb-3 font-weight-bold btn-md text-1">view more...</a></p>
							</div>
						</div>

						<div class="row mt-4">
							<div class="col-md-4 mb-3 mb-md-0">
								<a href="demo-medical-resources-detail.html" class="text-decoration-none">
									<img alt="" class="img-fluid" src="img/demos/medical/gallery/gallery-4.jpg">
								</a>
							</div>
							<div class="col-md-8">
								<h4 class="font-weight-semibold mb-1 mt-1">
									<a href="demo-medical-resources-detail.html" class="text-decoration-none">Patients</a>
								</h4>
								<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat...</p>
								<p><a href="demo-medical-resources-detail.html" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-2 mb-3 font-weight-bold btn-md text-1">view more...</a></p>
							</div>
						</div>

					</div>
				</div>
			</div>

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
