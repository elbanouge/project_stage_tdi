@extends('porto.app')
@section('header')
@include('porto.partials.header.header-157')
@endsection

@section('main')
<div role="main" class="main">
				
			@include('porto.partials.page-header.page-header-182')

			<div class="container">

				<div class="row mt-5 mb-5">
					<div class="col-lg-3">

						@include('porto.partials.sidebar.sidebar-32')

					</div>
					<div class="col-lg-9">

						<h2 class="font-weight-semibold mb-3">Prepare for visit</h2>
						<p class="lead font-weight-normal mb-4">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

						<img src="img/demos/medical/gallery/gallery-2.jpg" alt="" class="float-right mt-3 ml-sm-5 mb-4 img-fluid box-shadow-custom"> 

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>

						<h4 class="font-weight-semibold pt-4 mb-4">What to Bring</h4>

						<ul class="list list-icons list-primary">
							<li><i class="fas fa-check-circle"></i> Medical records</li>
							<li><i class="fas fa-check-circle"></i> Lorem ipsum</li>
							<li><i class="fas fa-check-circle"></i> Dolor sit amet</li>
						</ul>

					</div>

				</div>

			</div>

			@include('porto.partials.call-to-action.call-to-action-2')

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
