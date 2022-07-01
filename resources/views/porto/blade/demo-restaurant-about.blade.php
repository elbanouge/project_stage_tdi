@extends('porto.app')
@section('header')
@include('porto.partials.header.header-180')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.page-header.page-header-194')

				<div class="container">
					<div class="row">
						<div class="col-lg-12 pt-4">
							<h2>The best place to eat in downtown Porto!</h2>

							<p class="lead mb-5 mt-4">Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

							<img width="205" class="img-fluid float-left mr-4 mb-4 mt-1" alt="" src="img/demos/restaurant/gallery/restaurant-gallery-3.jpg">

							<p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

							<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

							<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>

						</div>
					</div>
				</div>

				<section class="section section-default mb-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">

								<h4 class="mt-4 mb-2">Get in <strong>Touch</strong></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

								<hr class="custom-divider">

								<h5 class="mb-1 mt-4">Book Now</h5>
								<p><i class="fas fa-phone"></i> (123) 456-789</p>

								<h5 class="mb-1 mt-4">Visit Us</h5>
								<p><i class="fas fa-map-marker-alt"></i> 123 Street Name, Porto</p>

							</div>
						</div>
					</div>
				</section></div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0 bg-color-secondary mt-0">
				<div class="container">
					<div class="row py-5">
						<div class="col text-center">
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-32', ['key' => 'footer-copyright.footer-copyright-32'])
			</footer>
@endsection
