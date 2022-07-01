@extends('porto.app')
@section('header')
@include('porto.partials.header.header-72')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.owl-carousel.owl-carousel-53')

				<div class="container">
					<div class="row mt-4 mt-lg-5 mb-4 py-4">
						<div class="col-lg-4">
							<h2 class="mb-0 text-color-dark">Who We Are</h2>
							<p class="lead">Lorem ipsum dolor sit amet.</p>
						</div>
						<div class="col-lg-2 text-center d-none d-lg-block">
							<img src="img/dotted-line-angle.png" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
							<a class="mt-3" href="demo-construction-company.html">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
						</div>
					</div>
				</div>

				<section class="section section-tertiary section-no-border section-custom-construction">
					<div class="container">
						<div class="row pt-4">
							<div class="col">
								<h2 class="mb-0 text-color-dark">Services</h2>
								<p class="lead">Lorem ipsum dolor sit amet.</p>
							</div>
						</div>

						<div class="row mt-4">
							<div class="col-lg-6">
								@include('porto.partials.feature-box.feature-box-45')
							</div>
							<div class="col-lg-6">
								@include('porto.partials.feature-box.feature-box-46')
							</div>
						</div>

						<div class="row mt-3 mb-4">
							<div class="col-lg-6">
								@include('porto.partials.feature-box.feature-box-47')
							</div>
							<div class="col-lg-6">
								@include('porto.partials.feature-box.feature-box-48')
							</div>
						</div>
					</div>
				</section>

				<section class="pt-3 pb-4 home-concept-construction">
					<div class="container">
						<div class="row pt-4">
							<div class="col">
								<h2 class="mb-0 text-color-dark">Projects</h2>
								<p class="lead">Lorem ipsum dolor sit amet.</p>

								@include('porto.partials.lightbox.lightbox-28')

							</div>
						</div>
						<div class="row row-diamonds-description justify-content-center justify-content-xl-start text-center text-xl-left">
							<div class="col-md-8 col-lg-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
								<a class="btn btn-outline btn-primary" href="demo-construction-projects.html">View All Projects</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-background mb-4" style="background-image: url(img/demos/construction/testimonials/testimonials-bg.jpg); background-position: 50% 100%; min-height: 540px; background-size: cover;">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-lg-6">
								
								@include('porto.partials.owl-carousel.owl-carousel-54')

							</div>
						</div>
					</div>
				</section>

				<section class="pt-3 section-custom-construction-2">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								@include('porto.partials.owl-carousel.owl-carousel-55')
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 text-center mt-4">
								<hr class="solid mt-0 mb-4">
							</div>
						</div>
						<div class="row pt-4">
							<div class="col">
								<h2 class="mb-0 text-color-dark">Blog</h2>
								<p class="lead mb-2">Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="recent-posts mt-4">
									<a href="demo-construction-blog-detail.html">
										<img class="img-fluid pb-3" src="img/demos/construction/blog/blog-construction-1.jpg" alt="Blog">
									</a>
									@include('porto.partials.post.post-134')
								</div>
							</div>
							<div class="col-lg-4">
								<div class="recent-posts mt-4">
									<a href="demo-construction-blog-detail.html">
										<img class="img-fluid pb-3" src="img/demos/construction/blog/blog-construction-2.jpg" alt="Blog">
									</a>
									@include('porto.partials.post.post-134')
								</div>
							</div>
							<div class="col-lg-4">
								<div class="recent-posts mt-4">
									<a href="demo-construction-blog-detail.html">
										<img class="img-fluid pb-3" src="img/demos/construction/blog/blog-construction-3.jpg" alt="Blog">
									</a>
									@include('porto.partials.post.post-134')
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
@endsection

@section('footer')
<footer id="footer">
				<div class="container">
					<div class="row pt-4 pb-5 text-center text-md-left">
						<div class="col-md-3">
							<a href="demo-construction.html">
								<img alt="Porto" class="img-fluid logo" width="110" src="img/demos/construction/logo-construction-small.png">
							</a>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-lg-6 mb-2">
									<h4>Navigation</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-6 mb-0">
									<ul class="list list-footer-nav">
										<li>
											<a href="demo-construction.html">
												Home
											</a>
										</li>
										<li>
											<a href="demo-construction-company.html">
												Company
											</a>
										</li>
										<li>
											<a href="demo-construction-services.html">
												Services
											</a>
										</li>
									</ul>
								</div>
								<div class="col-6">
									<ul class="list list-footer-nav">
										<li>
											<a href="demo-construction-projects.html">
												Projects
											</a>
										</li>
										<li>
											<a href="demo-construction-blog.html">
												Blog
											</a>
										</li>
										<li>
											<a href="demo-construction-contact.html">
												Contact
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<h4>Newsletter</h4>

							<div class="newsletter">

								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger d-none" id="newsletterError"></div>

								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-append">
											<button class="btn btn-light" type="submit"><i class="icon-paper-plane icons"></i></button>
										</span>
									</div>
								</form>

							</div>

							<p><i class="fas fa-phone"></i> (123) 456-789 <i class="far fa-envelope ml-2"></i> <a href="mailto:mail@example.com">mail@example.com</a></p>

						</div>
					</div>

					@include('porto.partials.footer-copyright.footer-copyright-13', ['key' => 'footer-copyright.footer-copyright-13'])

				</div>
			</footer>
@endsection
