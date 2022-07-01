@extends('porto.app')
@section('header')
@include('porto.partials.header.header-28')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-73')

				<section class="custom-bg-color-lighter-grey">
					<div class="cards custom-cards h-auto pt-5 pb-4 container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
						<div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
							<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
								<div class="card border-radius-0 border-0 shadow-none">
									<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
										<h4 class="card-title mb-4 font-weight-semibold text-color-primary">Get In Touch</h4>

										<strong class="d-block text-secondary text-4">Work Inquiries</strong>
										<p class="d-block m-0">(800) 123-4567</p>

										<strong class="d-block text-secondary text-4 pt-4">Careers &amp; Press</strong>
										<p class="d-block m-0">(800) 123-4568</p>

										<strong class="d-block text-secondary text-4 pt-4">Assistance Hours:</strong>
										<p class="d-block m-0">Mon - Sat 9:00am - 6:00pm</p>
										<p class="d-block m-0">Sunday - CLOSED</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
								<div class="card border-radius-0 border-0 shadow-none">
									<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
										<h4 class="card-title mb-4 font-weight-semibold text-color-primary">Address and Mail</h4>

										<strong class="d-block text-secondary text-4">Address</strong>
										<p class="d-block m-0">123 Street Name, City, England</p>

										<strong class="d-block text-secondary text-4 pt-4">E-mail</strong>
										<p class="d-block m-0">
											<a class="text-default" href="mailto:business@portotheme.com">business@portotheme.com</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
								<div class="card border-radius-0 border-0 shadow-none">
									<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1 border-right-0">
										<h4 class="card-title mb-4 font-weight-semibold text-color-primary">Social Media</h4>
										<ul class="social-icons custom-social-icons p-0 pt-3 m-0">
											<li class="m-0 d-block pb-2 social-icons-instagram">
												<a class="custom-bg-color-light-grey" href="http://www.instagram.com/" target="_blank" title="Instagram">
													<i class="fab fa-instagram text-4 font-weight-semibold text-color-secondary"></i>
												</a>
											</li>
											<li class="m-0 d-block pb-2 social-icons-twitter">
												<a class="custom-bg-color-light-grey" href="http://www.twitter.com/" target="_blank" title="Twitter">
													<i class="fab fa-twitter text-4 font-weight-semibold text-color-secondary"></i>
												</a>
											</li>
											<li class="m-0 d-block pb-2 social-icons-facebook">
												<a class="custom-bg-color-light-grey" href="http://www.facebook.com/" target="_blank" title="Facebook">
													<i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section></div>
@endsection

@section('footer')
<footer id="footer" class="m-0 border-0 bg-color-quaternary overflow-hidden">
				<div class="container">
					<div class="row py-5 custom-row-footer">
						<div class="col-12 col-sm-12 col-lg-3 d-flex align-items-start flex-column footer-column custom-footer-column-logo">
							<img width="123" height="32" src="img/demos/business-consulting-2/logos/porto.png" alt="Logo Footer">
							<p class="d-block m-0 text-color-default">Lorem ipsum dolor sit amet, conse adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor.</p>
						</div>
						<div class="col-12 col-sm-12 col-lg-9 footer-column">
							<div class="d-flex align-items-start align-sm-items-end justify-content-between flex-column h-100 mt-4 mt-sm-0">
								<div class="d-flex flex-nowrap flex-lg-wrap justify-content-start justify-content-lg-end align-items-start align-items-lg-center w-100 flex-column flex-lg-row mt-4 mt-lg-0 custom-container-info-socials">
									@include('porto.partials.nav-pills.nav-pills-1')
									<ul class="social-icons custom-social-icons">
										<li class="social-icons-instagram">
											<a class="custom-bg-color-light-grey" href="http://www.instagram.com/" target="_blank" title="Instagram">
												<i class="fab fa-instagram text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-twitter">
											<a class="custom-bg-color-light-grey" href="http://www.twitter.com/" target="_blank" title="Twitter">
												<i class="fab fa-twitter text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-facebook">
											<a class="custom-bg-color-light-grey" href="http://www.facebook.com/" target="_blank" title="Facebook">
												<i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
									</ul>
								</div>
								<nav class="nav-footer w-100 d-none d-lg-block">
									@include('porto.partials.nav-pills.nav-pills-2')
								</nav>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-8', ['key' => 'footer-copyright.footer-copyright-8'])
			</footer>
@endsection
