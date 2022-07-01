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

					<div class="row pt-2">
						<div class="col">

							@include('porto.partials.nav-pills.nav-pills-8')

							<div class="sort-destination-loader sort-destination-loader-showing">
								<div class="row mb-4 pt-1 portfolio-list sort-destination" data-sort-id="portfolio">
									<div class="col-md-6 col-lg-4 isotope-item mb-4 pre-construction">
										<a href="demo-construction-projects-detail.html">
											@include('porto.partials.thumb-info.thumb-info-88')
										</a>
										<h4 class="mt-3 mb-0">Porto Building</h4>
										<p class="mb-0">New York</p>
									</div>
									<div class="col-md-6 col-lg-4 isotope-item mb-4 general-construction">
										<a href="demo-construction-projects-detail.html">
											@include('porto.partials.thumb-info.thumb-info-89')
										</a>
										<h4 class="mt-3 mb-0">Okler Towers</h4>
										<p class="mb-0">Los Angeles</p>
									</div>
									<div class="col-md-6 col-lg-4 isotope-item mb-4 plumbing">
										<a href="demo-construction-projects-detail.html">
											@include('porto.partials.thumb-info.thumb-info-90')
										</a>
										<h4 class="mt-3 mb-0">Jet Hotels</h4>
										<p class="mb-0">New Jersey</p>
									</div>
									<div class="col-md-6 col-lg-4 isotope-item mb-4 painting">
										<a href="demo-construction-projects-detail.html">
											@include('porto.partials.thumb-info.thumb-info-91')
										</a>
										<h4 class="mt-3 mb-0">Okler Mansion</h4>
										<p class="mb-0">Chicago</p>
									</div>
									<div class="col-md-6 col-lg-4 isotope-item mb-4 pre-construction">
										<a href="demo-construction-projects-detail.html">
											@include('porto.partials.thumb-info.thumb-info-92')
										</a>
										<h4 class="mt-3 mb-0">Marina Building</h4>
										<p class="mb-0">Detroit</p>
									</div>
									<div class="col-md-6 col-lg-4 isotope-item mb-4 painting">
										<a href="demo-construction-projects-detail.html">
											@include('porto.partials.thumb-info.thumb-info-93')
										</a>
										<h4 class="mt-3 mb-0">One Lofts</h4>
										<p class="mb-0">Miami</p>
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
