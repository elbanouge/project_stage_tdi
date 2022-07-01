@extends('porto.app')
@section('header')
@include('porto.partials.header.header-70')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section section-tertiary section-no-border pb-3 mt-0">
					<div class="container">
						<div class="row justify-content-end mt-4">
							<div class="col-lg-10 pt-4 mt-4 text-right">
								<h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Projects</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col">
							<div class="portfolio-title">
								<div class="row">
									<div class="portfolio-nav-all col-lg-1">
										<a href="demo-construction-projects.html" data-tooltip data-original-title="Back to list"><i class="fas fa-th"></i></a>
									</div>
									<div class="col-lg-10 text-center">
										<h2 class="mb-0">Porto Building</h2>
									</div>
									<div class="portfolio-nav col-lg-1">
										<a href="demo-construction-projects-detail.html" class="portfolio-nav-prev" data-tooltip data-original-title="Previous"><i class="fas fa-chevron-left"></i></a>
										<a href="demo-construction-projects-detail.html" class="portfolio-nav-next" data-tooltip data-original-title="Next"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div>
							</div>

							<hr class="solid my-5">
						</div>
					</div>

					<div class="row mb-4">
						<div class="col-lg-4">
							<div class="thumb-gallery">
								@include('porto.partials.lightbox.lightbox-27')

								@include('porto.partials.owl-carousel.owl-carousel-51')
							</div>
						</div>
						<div class="col-lg-8">

							<div class="project-detail-construction">

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

								<div class="row">
									<div class="col-lg-5">

										<ul class="list-project-details">
											<li>
												<label>Project Location:</label>
												<p>New York</p>
											</li>
											<li>
												<label>Project Type:</label>
												<p>General Construction</p>
											</li>
											<li>
												<label>Project Cost:</label>
												<p>$100,000</p>
											</li>
											<li>
												<label>Client:</label>
												<p>Okler Themes</p>
											</li>
										</ul>

									</div>
									<div class="col-lg-7">
										<div class="progress-bars progress-bars-project-detail">
											<div class="progress-label">
												<span>General Progress</span>
											</div>
											@include('porto.partials.progress.progress-14')
											<div class="progress-label">
												<span>Phase 1</span>
											</div>
											@include('porto.partials.progress.progress-15')
											<div class="progress-label">
												<span>Phase 2</span>
											</div>
											@include('porto.partials.progress.progress-16')
											<div class="progress-label">
												<span>Phase 4</span>
											</div>
											@include('porto.partials.progress.progress-17')
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
