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
														<a class="nav-link dropdown-toggle" class="dropdown-toggle" href="demo-medical-2-departments.html">
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
														<a class="nav-link active" href="demo-medical-2-contact-us.html">
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
								<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">Contact Us</h1>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb d-block text-md-right appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
									<li><a href="#">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map"></div>

				<div class="container py-5">
					<div class="row">
						<div class="col pt-3">

							<h3 class="text-color-quaternary font-weight-bolder text-capitalize mb-2">Contact Info</h3>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>

							<div class="row text-center pb-3 pt-4">
								<div class="col-lg-3 col-md-6 pb-4 pb-lg-0">
									<img width="60" src="{{asset('porto/img/demos/medical-2/icons/icon-location.svg')}}" alt="" />
									<h4 class="m-0 pt-4 font-weight-bold">Address</h4>
									<p class="m-0">123 Street Name, City, England</p>
								</div>
								<div class="col-lg-3 col-md-6 pb-4 pb-lg-0">
									<img width="60" src="{{asset('porto/img/demos/medical-2/icons/icon-phone.svg')}}" alt="" />
									<h4 class="m-0 pt-4 font-weight-bold">Phone Number</h4>
									<p class="m-0"><a href="tel:+1234567890" class="text-color-default text-color-hover-primary">(800) 123-4567</a></p>
								</div>
								<div class="col-lg-3 col-md-6 pb-4 pb-md-0">
									<img width="60" src="{{asset('porto/img/demos/medical-2/icons/icon-envelope.svg')}}" alt="" />
									<h4 class="m-0 pt-4 font-weight-bold">E-mail Address</h4>
									<p class="m-0"><a href="mailto:mail@domain.com" class="text-default text-hover-primary">mail@example.com</a></p>
								</div>
								<div class="col-lg-3 col-md-6">
									<img width="60" src="{{asset('porto/img/demos/medical-2/icons/icon-calendar.svg')}}" alt="" />
									<h4 class="m-0 pt-4 font-weight-bold">Working Days/Hours</h4>
									<p class="m-0">Mon - Sun / 9:00AM - 8:00PM</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="my-5">
						</div>
					</div>

					<div class="row">
						<div class="col">
							<h3 class="text-color-quaternary font-weight-bolder text-capitalize mb-2">Send a Message</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>

							<form class="contact-form custom-form-style-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								<div class="form-row">
									<div class="form-group col-lg-6">
										<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
									</div>
									<div class="form-group col-lg-6">
										<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input placeholder="Subject" type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea placeholder="Your Message..." maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-primary px-4 py-3 text-center text-uppercase font-weight-semibold" data-loading-text="Loading...">
									</div>
								</div>
							</form>
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