@extends('porto.app')
@section('header')
@include('porto.partials.header.header-355')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.page-header.page-header-268')

				<div class="container py-4">

					<div class="row py-3 justify-content-center">
						<div class="col-sm-8 col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn">
							<article>
								<div class="row">
									<div class="col">
										<a href="#" class="text-decoration-none">
											<img src="img/generic/generic-corporate-3-1-full.jpg" class="img-fluid hover-effect-2 mb-3" alt="">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h4 class="mb-0"><a href="#" class="text-3 text-uppercase font-weight-bold pt-2 d-block text-dark text-decoration-none">Mobile Apps</a></h4>
										<p class="mb-2 lead text-4">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
										<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non metus pulvinar.</p>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-8 col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250">
							<article>
								<div class="row">
									<div class="col">
										<a href="#" class="text-decoration-none">
											<img src="img/generic/generic-corporate-3-2-full.jpg" class="img-fluid hover-effect-2 mb-3" alt="">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h4 class="mb-0"><a href="#" class="text-3 text-uppercase font-weight-bold pt-2 d-block text-dark text-decoration-none">Creative Websites</a></h4>
										<p class="mb-2 lead text-4">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
										<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non metus pulvinar.</p>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-8 col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
							<article>
								<div class="row">
									<div class="col">
										<a href="#" class="text-decoration-none">
											<img src="img/generic/generic-corporate-3-3-full.jpg" class="img-fluid hover-effect-2 mb-3" alt="">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h4 class="mb-0"><a href="#" class="text-3 text-uppercase font-weight-bold pt-2 d-block text-dark text-decoration-none">SEO Optimization</a></h4>
										<p class="mb-2 lead text-4">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
										<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non metus pulvinar.</p>
									</div>
								</div>
							</article>
						</div>
					</div>

				</div>

				<section class="section bg-color-primary section-height-3 border-0 mt-4 mb-0">
					<div class="container">

						<div class="row">
							<div class="col-md-10 py-3 mx-md-auto">
								<div class="row pt-2 clearfix">
									<div class="col-lg-6">
										@include('porto.partials.feature-box.feature-box-307')
									</div>
									<div class="col-lg-6">
										@include('porto.partials.feature-box.feature-box-308')
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										@include('porto.partials.feature-box.feature-box-309')
									</div>
									<div class="col-lg-6">
										@include('porto.partials.feature-box.feature-box-310')
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										@include('porto.partials.feature-box.feature-box-311')
									</div>
									<div class="col-lg-6">
										@include('porto.partials.feature-box.feature-box-312')
									</div>
								</div>
							</div>
						</div>

					</div>

				</section>

				<div class="container">
					<div class="row justify-content-center pt-4 mt-5 mb-5">
						<div class="col-lg-8 text-center">
							<div class="overflow-hidden mb-3">
								<h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp">Learn more about our process</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-center pb-5">

						<div class="col-md-7 col-lg-4 mb-5 mb-lg-0">
							@include('porto.partials.circular-bar.circular-bar-15')
							<div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
								<h4 class="font-weight-bold">Meeting</h4>
								<p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
							</div>
						</div>

						<div class="col-md-7 col-lg-4 mb-5 mb-lg-0">
							@include('porto.partials.circular-bar.circular-bar-16')
							<div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
								<h4 class="font-weight-bold">Execute</h4>
								<p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
							</div>
						</div>

						<div class="col-md-7 col-lg-4">
							@include('porto.partials.circular-bar.circular-bar-17')
							<div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
								<h4 class="font-weight-bold">Delivery</h4>
								<p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
							</div>
						</div>
						
					</div>

					</div>
				</div>
@endsection

@section('footer')
<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">NEWSLETTER</h5>
							<p class="pr-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mr-4 mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
									</span>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">LATEST TWEETS</h5>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<div class="contact-details">
								<h5 class="text-3 mb-3">CONTACT US</h5>
								<ul class="list list-icons list-icons-lg">
									<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
									<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
									<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3">FOLLOW US</h5>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-64', ['key' => 'footer-copyright.footer-copyright-64'])
			</footer>
@endsection
