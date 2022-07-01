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
								<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">Departments</h1>
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

				<section class="medical-services bg-color-primary pt-5 p-relative z-index-1">
					<div class="container">
						<div class="row">
							<div class="col">
								<p class="mb-5 text-color-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.L orem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>        
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="cards-medical-services row flex-wrap justify-content-center mb-0">
									<div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
										<div class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
											<img src="{{asset('porto/img/demos/medical-2/icons/icon-cardiology.png')}}" class="img-fluid mb-5" alt="Cardiology">
											<h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">Cardiology</h4>
											<p class="card-text mb-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
											<a href="demo-medical-2-departments-detail.html" class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
										</div>
									</div>
									<div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
										<div class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
											<img src="{{asset('porto/img/demos/medical-2/icons/icon-gastroenterology.png')}}" class="img-fluid mb-5" alt="Gastroenterology">
											<h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">Gastroenterology</h4>
											<p class="card-text mb-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
											<a href="demo-medical-2-departments-detail.html" class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
										</div>
									</div>
									<div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
										<div class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
											<img src="{{asset('porto/img/demos/medical-2/icons/icon-pulmonology.png')}}" class="img-fluid mb-5" alt="Pulmonology">
											<h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">Pulmonology</h4>
											<p class="card-text mb-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
											<a href="demo-medical-2-departments-detail.html" class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
										</div>
									</div>
									<div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
										<div class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
											<img src="{{asset('porto/img/demos/medical-2/icons/icon-dental.png')}}" class="img-fluid mb-5" alt="Dental Care">
											<h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">Dental Care</h4>
											<p class="card-text mb-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
											<a href="demo-medical-2-departments-detail.html" class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
										</div>
									</div>
									<div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
										<div class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
											<img src="{{asset('porto/img/demos/medical-2/icons/icon-gynecology.png')}}" class="img-fluid mb-5" alt="Gynecology">
											<h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">Gynecology</h4>
											<p class="card-text mb-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
											<a href="demo-medical-2-departments-detail.html" class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
										</div>
									</div>
									<div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
										<div class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
											<img src="{{asset('porto/img/demos/medical-2/icons/icon-hepatology.png')}}" class="img-fluid mb-5" alt="Hepatology">
											<h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">Hepatology</h4>
											<p class="card-text mb-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
											<a href="demo-medical-2-departments-detail.html" class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="bg-color-primary">
					<div class="container">
						<div class="row py-2">
							<div class="col py-5 text-center text-color-light">
								<p class="text-uppercase text-color-light d-block mb-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Need a Speciallist?</p>
								<h3 class="text-color-quaternary mb-4 text-color-light d-block text-center font-weight-semibold text-capitalize appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Get Better Now! Just Make An Appointment</h3>
								<a href="demo-medical-2-contact-us.html" class="btn btn-outline btn-light bg-hover-light text-hover-dark text-color-light border-color-light text-uppercase rounded-0 px-5 py-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">make an appointment</a>
							</div>
						</div>
					</div>
				</section>

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