
@extends('porto.app')
@section('header')
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
						<div class="container h-100">
							<div class="header-row h-100">
								<div class="header-column justify-content-between">
									<div class="header-row">
										<nav class="header-nav-top w-100">
											<ul class="nav nav-pills justify-content-between w-100 h-100">
												<li class="nav-item py-2 d-none d-xl-inline-flex">
													<span class="header-top-phone py-2 d-flex align-items-center text-color-primary font-weight-semibold text-uppercase">
														<i class="icon-phone icons text-5 mr-2"></i> <a href="tel:+1234567890">(800) 123-4567</a>
													</span>
													<span class="header-top-email px-0 font-weight-normal d-flex align-items-center"><i class="far fa-envelope text-4"></i>  <a class="text-color-default" href="mailto:mail@example.com">mail@example.com</a></span>
													<span class="header-top-opening-hours px-0 font-weight-normal d-flex align-items-center"><i class="far fa-clock text-4"></i>Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED</span>
												</li>
												<li class="nav-item nav-item-header-top-socials d-flex justify-content-between">
													<span class="header-top-socials p-0 h-100">
														<ul class="d-flex align-items-center h-100 p-0">
															<li class="list-unstyled">
																<a href="#"><i class="fab fa-instagram text-color-quaternary text-hover-primary"></i></a>
															</li>
															<li class="list-unstyled">
																<a href="#"><i class="fab fa-facebook-f text-color-quaternary text-hover-primary"></i></a>
															</li>
															<li class="list-unstyled">
																<a href="#"><i class="fab fa-twitter text-color-quaternary text-hover-primary"></i></a>
															</li>
														</ul>
													</span>
													<span class="header-top-button-make-as-appoitment d-inline-flex align-items-center justify-content-center h-100 p-0 align-top">
														<a href="demo-medical-2-contact-us.html" class="d-flex align-items-center justify-content-center h-100 w-100 btn-primary font-weight-normal text-decoration-none">MAKE AN APPOINTMENT</a>
													</span>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container bg-color-light">
						<div class="header-row">
							<div class="header-column header-column-logo">
								<div class="header-row">
									<div class="header-logo">
										<a href="demo-medical-2.html">
											<img alt="Porto" width="123" height="48" src="{{asset('porto/img/demos/medical-2/logos/logo.png')}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column header-column-nav-menu justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown-secondary">
														<a class="nav-link" href="demo-medical-2.html">
															Home
														</a>
													</li>
													<li class="dropdown-secondary">
														<a class="nav-link" href="demo-medical-2-about-us.html">
															About Us
														</a>
													</li>
													<li class="dropdown-secondary">
														<a class="nav-link" href="demo-medical-2-our-doctors.html">
															Our Doctors
														</a>
													</li>
													<li class="dropdown dropdown-secondary">
														<a class="nav-link dropdown-toggle active" class="dropdown-toggle" href="demo-medical-2-departments.html">
															Departments
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item font-weight-normal" href="demo-medical-2-departments.html">
																	Overview
																</a>
															</li>
															<li>
																<a class="dropdown-item font-weight-normal" href="demo-medical-2-departments-detail.html">
																	Cardiology
																</a>
															</li>
															<li>
																<a class="dropdown-item font-weight-normal" href="demo-medical-2-departments-detail.html">
																	Gastroenterology
																</a>
															</li>
															<li>
																<a class="dropdown-item font-weight-normal" href="demo-medical-2-departments-detail.html">
																	Pulmonology
																</a>
															</li>
															<li>
																<a class="dropdown-item font-weight-normal" href="demo-medical-2-departments-detail.html">
																	Dental Care
																</a>
															</li>
															<li>
																<a class="dropdown-item font-weight-normal" href="demo-medical-2-departments-detail.html">
																	Gynecology
																</a>
															</li>
															<li>
																<a class="dropdown-item font-weight-normal" href="demo-medical-2-departments-detail.html">
																	Hepatology
																</a>
															</li>
															<li>
																<a class="dropdown-item font-weight-normal" href="demo-medical-2-departments-detail.html">
																	Gastroenterology
																</a>
															</li>
															<li>
																<a class="dropdown-item font-weight-normal" href="demo-medical-2-departments-detail.html">
																	Pulmonology
																</a>
															</li>
														</ul>
													</li>
													<li class="dropdown-secondary">
														<a class="nav-link" href="demo-medical-2-blog.html">
															Blog
														</a>
													</li>
													<li class="dropdown-secondary">
														<a class="nav-link" href="demo-medical-2-contact-us.html">
															Contact Us
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="header-column header-column-search justify-content-center align-items-end">
								<div class="header-nav-features">
									<div class="header-nav-feature header-nav-features-search d-inline-flex">
										<a href="#" class="header-nav-features-toggle" data-focus="headerSearch">
											<i class="fas fa-search header-nav-top-icon"></i>
										</a>
										<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerTopSearchDropdown">
											<form role="search" action="page-search-results.html" method="get">
												<div class="simple-search input-group">
													<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
													<span class="input-group-append border-radius-0">
														<button class="btn" type="submit">
															<i class="fa fa-search header-nav-top-icon"></i>
														</button>
													</span>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			@endsection
			@section('main')
			<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md m-0">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">Cardiology</h1>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb d-block text-md-right appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
									<li><a href="#">Home</a></li>
									<li class="active">Departments</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-5">
					<div class="row">
						<div class="col-lg-3 order-2 order-lg-1 pt-4 pt-lg-0">
							<aside class="sidebar">
								
								<div class="px-3 mb-4">
									<h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">All Departments</h3>
									<ul class="nav nav-list flex-column mb-0 p-relative right-9">
										<li class="nav-item"><a class="nav-link font-weight-bold text-primary text-3 border-0 my-1 p-relative" href="#">Cardiology</a></li>
										<li class="nav-item"><a class="nav-link font-weight-bold text-dark text-3 border-0 my-1 p-relative" href="#">Gastroenterology</a></li>
										<li class="nav-item"><a class="nav-link font-weight-bold text-dark text-3 border-0 my-1 p-relative" href="#">Pulmonology</a></li>
										<li class="nav-item"><a class="nav-link font-weight-bold text-dark text-3 border-0 my-1 p-relative" href="#">Dental Care</a></li>
										<li class="nav-item"><a class="nav-link font-weight-bold text-dark text-3 border-0 my-1 p-relative" href="#">Gynecology</a></li>
										<li class="nav-item"><a class="nav-link font-weight-bold text-dark text-3 border-0 my-1 p-relative" href="#">Hepatology</a></li>
									</ul>
								</div>

								<div class="pb-1 clearfix">
									<hr class="my-2">
								</div>

								<div class="px-3 mt-4">
									<h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Posts</h3>
									<div class="pb-2 mb-1">
										<a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2021 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
										<a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem ipsum dolor sit amet</a>
										<a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2021 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
										<a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur adipiscing elit</a>
										<a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2021 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
										<a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus sollicitudin nibh luctus</a>
									</div>
								</div>

							</aside>
						</div>
						<div class="col-lg-9 order-1 order-lg-2">
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.L orem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>

							<div class="row py-5 align-items-center">
								<div class="col-lg-6 pb-4 pb-lg-0">
									<div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
										<div class="card-body p-3 z-index-1">
											<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">	
												<a href="img/demos/medical-2/gallery/gallery-2.jpg">
													<img class="card-img-top border-radius-0" src="{{asset('porto/img/demos/medical-2/gallery/gallery-2.jpg')}}" alt="Card Image">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<ul class="list list-icons list-icons-style-2 list-icons-sm custom-list-icons mb-1 mb-xl-3">
										<li class="text-color-quaternary font-weight-bolder mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"><i class="fas fa-check text-color-quaternary"></i>Pellentesque ultricies nibh</li>
										<li class="text-color-quaternary font-weight-bolder mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><i class="fas fa-check text-color-quaternary"></i>Ultricies nibh pellen</li>
										<li class="text-color-quaternary font-weight-bolder appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><i class="fas fa-check text-color-quaternary"></i>Pellentesque ultricies nibh</li>
										<li class="text-color-quaternary font-weight-bolder mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"><i class="fas fa-check text-color-quaternary"></i>Ultricies nibh pellen</li>
										<li class="text-color-quaternary font-weight-bolder appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"><i class="fas fa-check text-color-quaternary"></i>Pellentesque ultricies nibh</li>
									</ul>
								</div>
							</div>

							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.L orem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>

							<hr class="my-5">

							<div class="row">
								<div class="col-lg-6 pb-4 pb-lg-0 text-center">
									<h3 class="text-color-quaternary font-weight-bolder text-capitalize mt-2 mb-2">Patients Reviews</h3>
									<p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>

									<div class="patient-reviews pt-0">
										<div class="owl-carousel owl-theme nav-style-2 mb-0" data-plugin-options="{'items': 1, 'loop': false, 'nav': true, 'dots': false, 'infinite': false, 'stagePadding': 0}">
											<div class="text-center d-flex flex-wrap justify-content-center p-relative">
												<span class="review-quotes text-left position-absolute"><i class="fas fa-quote-left text-color-primary"></i></span>
												<p class="lead lead-2 mb-0 text-color-default font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis.</p>
												<h4 class="review-signature text-capitalize text-color-quaternary mt-3">John Smith</h4>
											</div>
											<div class="text-center d-flex flex-wrap justify-content-center p-relative">
												<span class="review-quotes text-left position-absolute"><i class="fas fa-quote-left text-color-primary"></i></span>
												<p class="lead lead-2 mb-0 text-color-default font-weight-normal">Lorem ipsum, consectetur adipiscing elit. Sed eget porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis.</p>
												<h4 class="review-signature text-capitalize text-color-quaternary mt-3">John Doe</h4>
											</div>
											<div class="text-center d-flex flex-wrap justify-content-center p-relative">
												<span class="review-quotes text-left position-absolute"><i class="fas fa-quote-left text-color-primary"></i></span>
												<p class="lead lead-2 mb-0 text-color-default font-weight-normal">Lorem ipsum dolor sit amet. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis.</p>
												<h4 class="review-signature text-capitalize text-color-quaternary mt-3">Janice Smith</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 text-center">
									<h3 class="text-color-quaternary font-weight-bolder text-capitalize mt-2 mb-2">Cardiology Specialists</h3>
									<p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>

									<div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
										<div class="card-body p-3 z-index-1 text-center">
											<a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
												<img alt="Doctor" class="img-fluid rounded" src="{{asset('porto/img/demos/medical-2/doctors/doctor-1.png')}}">
											</a>
											<strong class="font-weight-bolder text-dark d-block text-5 mt-4 mb-0">
												<a href="demo-medical-2-our-doctors-detail.html" class="text-dark">
													John Smith
												</a>
											</strong>
											<span class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">Cardiology</span>
											<a href="demo-medical-2-contact-us.html" class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 mt-3 text-2">Make An Appointment</a>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>

				<section class="footer-top-info">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-xl-4 p-4 bg-color-secondary d-flex align-items-center justify-content-between">
								<div class="footer-top-info-detail">
									<h4 class="text-color-light mb-1 d-block font-weight-semibold text-capitalize appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">Emergency Cases</h4>
									<p class="d-block m-0 footer-top-info-desc appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<a href="#" type="button" class="btn btn-outline btn-footer-top-info btn-light rounded-0 d-block text-color-light border-color-primary text-uppercase text-center p-0 custom-btn-footer-top-info bg-transparent-hover appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">view more +</a>
							</div>
							<div class="col-xs-12 col-xl-4 p-4 bg-color-tertiary d-flex align-items-center justify-content-between">
								<div class="footer-top-info-detail">
									<h4 class="text-color-light mb-1 d-block font-weight-semibold text-capitalize appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">Doctors Timetable</h4>
									<p class="d-block m-0 footer-top-info-desc appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<a href="#" type="button" class="btn btn-outline btn-footer-top-info btn-light rounded-0 d-block text-color-light border-color-primary text-uppercase text-center p-0 custom-btn-footer-top-info bg-transparent-hover appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">view more +</a>
							</div>
							<div class="col-xs-12 col-xl-4 p-4 bg-color-secondary d-flex align-items-center justify-content-between">
								<div class="footer-top-info-detail">
									<h4 class="text-color-light mb-1 d-block font-weight-semibold text-capitalize appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="700">Find Us On Map</h4>
									<p class="d-block m-0 footer-top-info-desc appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<a href="#" type="button" class="btn btn-outline btn-footer-top-info btn-light rounded-0 d-block text-color-light border-color-primary text-uppercase text-center p-0 custom-btn-footer-top-info bg-transparent-hover appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">view more +</a>
							</div>
						</div>
					</div>
				</section>

			</div>
			@endsection
			@section('footer')
			<footer id="footer" class="m-0 bg-color-quaternary">
				<div class="container">
					<div class="row py-5">
						<div class="col-sm-12 pb-4 pb-lg-0 col-lg-2 mb-2 d-flex align-items-center">
							<img src="{{asset('porto/img/demos/medical-2/logos/logo-footer.png')}}" alt="Logo Footer">
						</div>
						<div class="col-sm-6 col-lg-3 footer-column footer-column-get-in-touch">
							<h4 class="mb-4 text-uppercase">Get in Touch</h4>
							<div class="info custom-info mb-4">
								<div class="custom-info-block custom-info-block-address">
									<span class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-address">Address</span>
									<span class="font-weight-normal text-color-light text-custom-info-block p-relative bottom-6 text-custom-info-block-address">123 Street Name, City, England</span>
								</div>
								<div class="custom-info-block custom-info-block-phone">
									<span class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-phone">Phone</span>
									<span class="font-weight-normal text-color-light text-custom-info-block p-relative bottom-6 text-custom-info-block-phone">Toll Free <a href="tel:+1234567890" class="text-color-light">(123) 456-7890</a></span>
								</div>
								<div class="custom-info-block custom-info-block-email">
									<span class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-email">Email</span>
									<span class="font-weight-normal text-color-light text-custom-info-block p-relative bottom-6 text-custom-info-block-email"><a class="text-color-light" href="mailto:mail@example.com">mail@example.com</a></span>
								</div>
								<div class="custom-info-block custom-info-block-working-days">
									<span class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-working-days">Working Days/Hours</span>
									<span class="font-weight-normal text-color-light text-custom-info-block text-custom-info-block-working-days">Mon - Sun / 9:00AM - 8:00PM</span>
								</div>
							</div>
							<ul class="social-icons">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" target="_blank" title="Instagram">
										<i class="fab fa-instagram text-4 font-weight-semibold"></i>
									</a>
								</li>
								<li class="social-icons-twitter">
									<a href="http://www.twitter.com/" target="_blank" title="Twitter">
										<i class="fab fa-twitter text-4 font-weight-semibold"></i>
									</a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" target="_blank" title="Facebook">
										<i class="fab fa-facebook-f text-4 font-weight-semibold"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-sm-6 pt-5 pt-md-0 col-lg-4">
							<div class="nav-footer-container">
								<h4 class="mb-4 text-uppercase">Medical Services</h4>
								<div class="nav-footer d-flex">
									<ul>
										<li>
											<a href="#">Home</a>
										</li>
										<li>
											<a href="#">About Us</a>
										</li>
										<li>
											<a href="#">Our Doctors</a>
										</li>
										<li>
											<a href="#">Departments</a>
										</li>
										<li>
											<a href="#">Overview</a>
										</li>
										<li>
											<a href="#">Cardiology</a>
										</li>
										<li>
											<a href="#">Gastroenterology</a>
										</li>
										<li>
											<a href="#">Pulmonology</a>
										</li>
										<li>
											<a href="#">Dental Care</a>
										</li>
										<li>
											<a href="#">Gynecology</a>
										</li>										
									</ul>
									<ul class="pl-4">
										<li>
											<a href="#">Hepatology</a>
										</li>
										<li>
											<a href="#">Gastroenterology</a>
										</li>
										<li>
											<a href="#">Pulmonology</a>
										</li>
										<li>
											<a href="#">Blog</a>
										</li>
										<li>
											<a href="#">Contact Us</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-12 pt-4 pt-lg-0 col-lg-3 text-left ml-lg-auto footer-column footer-column-opening-hours">
							<h4 class="mb-4 text-uppercase">Opening Hours</h4>
							<div class="info custom-info pt-0">
								<span>Mon-Fri</span>
								<span>8:30 am to 5:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Saturday</span>
								<span>9:30 am to 1:00 pm</span>
							</div>
							<div class="info custom-info pb-0 border-bottom-0">
								<span>Sunday</span>
								<span>Closed</span>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright pt-3 pb-3 container bg-color-quaternary">
					<div class="row">
						<div class="col-lg-12 text-center m-0 pb-4">
							<p class="text-color-default">Porto Medical. ©  2021.  All Rights Reserved</p>
						</div>
					</div>
				</div>
			</footer>
			@endsection	