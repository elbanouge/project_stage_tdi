@extends('porto.app')
@section('header')
@include('porto.partials.header.header-30')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-75')

				<div class="container py-5">
					<div class="row">
						<div class="col pb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
							<div class="row align-items-center no-gutters">
								<div class="col-lg-5">
									<div class="card border-radius-0 box-shadow-1 border-0 mr-lg-5 p-3 mb-3 mb-lg-0">
										<a href="demo-business-consulting-2-team-detail.html" class="d-block p-relative">
											<img src="img/team/team-5.jpg" class="img-fluid border-radius-0" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-7 pl-2 pl-lg-0 pt-4 pt-lg-0">
									<p class="mb-0 text-uppercase">CEO</p>
									<h4 class="mb-3 text-7 text-dark font-weight-bold">Robert Doe</h4>
									<p class="text-4 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus.</p>
									<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>

									<p class="mb-3 text-4"><strong class="text-dark">Succeeded Projects:</strong> 198</p>
									<p class="mb-3 text-4"><strong class="text-dark">Main Services:</strong> Management Consulting</p>

									<ul class="social-icons custom-social-icons pt-3">
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
							</div>
						</div>
					</div>
				</div>
				
				<section class="real-word-stories bg-color-quaternary overflow-hidden p-relative pt-5 pb-5">
					<div class="container">
						<div class="row pt-4 mt-3">
							<div class="col">
								<p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>The Cases</p>
								<h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">My Cases</h2>
							</div>
						</div>
						<div class="row justify-content-between d-flex flex-column-reverse flex-xl-row pb-5">
							<div class="col">
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
									@include('porto.partials.owl-carousel.owl-carousel-19')
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="are-you-looking-for bg-color-secondary">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-xl-5">
								<p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Are you looking for a</p>
								<h2 class="text-color-light font-weight-bolder text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Business Plan Consultant?</h2>
								<p class="font-weight-semibold text-color-light mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Schedule your company strategy session right now!</p>
							</div>
							<div class="col-xl-6 d-flex align-items-start align-items-sm-center justify-content-start justify-content-xl-end mt-4 mt-xl-0 flex-column flex-sm-row">
								<span class="are-you-looking-for-phone py-2 d-flex align-items-center text-color-light font-weight-semibold text-uppercase text-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
									<span>
										<img width="18" height="25" src="img/demos/business-consulting-2/icons/phone.svg" alt="Phone">
									</span>
									<a class="text-color-light text-decoration-none" href="tel:123-456-7890">(800) 123-4567</a>
								</span>
								<a href="demo-business-consulting-2-contact-us.html" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">free initial consultation</a>
							</div>
						</div>
					</div>
				</section>				

			</div>
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
