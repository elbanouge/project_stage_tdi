@extends('porto.app')
@section('header')
@include('porto.partials.header.header-196')
@endsection

@section('mainporto.partials
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-256')

				<div class="container pt-5">

					<div class="row">
						<div class="col-md-6">
							<h4>Side Panel From Left</h4>
							<hr>

							<a href="feature-side-panel-left-slide.html" class="btn btn-primary btn-modern side-panel-toggle" data-extra-class="side-panel">SLIDE EFFECT</a>
							<a href="feature-side-panel-left-push.html" class="btn btn-primary btn-modern side-panel-toggle" data-extra-class="side-panel-push">PUSH EFFECT</a>

							<hr class="solid my-5">
						</div>
						<div class="col-md-6">
							<h4>Side Panel From Right</h4>
							<hr>

							<a href="feature-side-panel-right-slide.html" class="btn btn-primary btn-modern side-panel-toggle" data-extra-class="side-panel-right">SLIDE EFFECT</a>
							<a href="feature-side-panel-right-push.html" class="btn btn-primary btn-modern side-panel-toggle" data-extra-class="side-panel-right side-panel-push">PUSH EFFECT</a>

							<hr class="solid my-5">
						</div>
					</div>

					<div class="row mb-5 pb-3">
						<div class="col">
							<h4>Side Panel Triggers</h4>
							<hr>

							<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center">
								<a href="#" class="btn btn-primary btn-rounded side-panel-toggle text-1 font-weight-semibold px-4 mb-3 mb-md-0">OPEN SIDE PANEL</a>
								<a href="#" class="btn btn-link side-panel-toggle ml-2">Open Side Panel</a>

								<button class="hamburguer-btn hamburguer-btn-sticky-dark side-panel-toggle" data-set-active="false">
									<span class="hamburguer">
										<span></span>
										<span></span>
										<span></span>
									</span>
								</button>

								<a href="#" class="btn btn-primary btn-outline side-panel-toggle mx-3 mb-3 mb-md-0"><i class="fas fa-bars"></i></a>

								<a href="#" class="btn btn-dark btn-outline side-panel-toggle text-1 font-weight-semibold ml-3">OPEN SIDE PANEL <i class="fas fa-bars ml-2"></i></a>
							</div>

						</div>
					</div>

					<div class="row mb-5 pb-3">
						<div class="col">
							<h4>Side Panel Without Overlay</h4>
							<hr>

							<button type="button" class="btn hamburguer-btn hamburguer-btn-sticky-dark side-panel-toggle" data-toggle="button" aria-pressed="false" data-set-active="false" data-extra-class="side-panel-without-overlay">
								<span class="hamburguer">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="close">
									<span></span>
									<span></span>
								</span>
							</button>

						</div>
					</div>

				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="footer-texts-more-lighten">
				<div class="container">
					<div class="row py-4 my-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">CONTACT INFO</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span> 
									1234 Street Name, City, State, USA
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
									<a href="tel:+1234567890">Toll Free (123) 456-7890</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
									<a href="mailto:mail@example.com">mail@example.com</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">WORKING DAYS/HOURS </span>
									Mon - Sun / 9:00AM - 8:00PM
								</li>
							</ul>
							<ul class="social-icons social-icons-clean-with-border social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-2">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">USEFUL LINKS</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="contact-us-1.html">Help Center</a></li>
								<li class="mb-0"><a href="about-us.html">About Us</a></li>
								<li class="mb-0"><a href="contact-us.html">Contact Us</a></li>
								<li class="mb-0"><a href="page-careers.html">Careers</a></li>
								<li class="mb-0"><a href="blog-grid-4-columns.html">Blog</a></li>
								<li class="mb-0"><a href="#">Our Location</a></li>
								<li class="mb-0"><a href="#">Privacy Policy</a></li>
								<li class="mb-0"><a href="sitemap.html">Sitemap</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-4 mb-5 mb-md-0">
							<h5 class="text-4 text-color-light mb-3">RECENT NEWS</h5>
							<article class="mb-3">
								<a href="blog-post.html" class="text-color-light text-3-5">Why should I buy a Web Template?</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
							<article class="mb-3">
								<a href="blog-post.html" class="text-color-light text-3-5">Creating Amazing Website with Porto</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
							<article>
								<a href="blog-post.html" class="text-color-light text-3-5">Best Practices for Top UI Design</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
						</div>
						<div class="col-md-6 col-lg-3">
							<h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
							<p class="mb-2">Get all the latest information on events, sales and offers. Sign up for newsletter:</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" class="form-style-5 opacity-10" action="php/newsletter-subscribe.php" method="POST">
								<div class="form-row">
									<div class="form-group col">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<button class="btn btn-primary btn-rounded btn-px-4 btn-py-2 font-weight-bold" type="submit">SUBSCRIBE</button>
									</div>
								</div>
							</form>
						</div>
					</div>porto.partials
				</div>
				<div class="container">
					@include('porto.partials.footer-copyright.footer-copyright', ['key' => 'footer-copyright.footer-copyright'])
				</div>
			</footer>
@endsection
