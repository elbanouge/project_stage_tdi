
@extends('porto.app')
@section('header')
	


	<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-top header-top-default header-top-borders border-bottom-0">
						<div class="container h-100">
							<div class="header-row h-100">
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
													<span class="pl-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> 1234 Street Name, City Name</span>
												</li>
												<li class="nav-item nav-item-borders py-2">
													<a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> 123-456-7890</a>
												</li>
												<li class="nav-item nav-item-borders py-2 pr-1 d-none d-md-inline-flex">
													<a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> mail@domain.com</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="demo-medical.html">
											<img alt="Porto" width="143" height="40" src="{{asset('porto/img/demos/medical/logo-medical.png')}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="demo-medical.html">
															Home
														</a>
													</li>
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="demo-medical-about-us.html">
															About Us
														</a>
													</li>
													<li class="dropdown dropdown-full-color dropdown-secondary">
														<a class="nav-link dropdown-toggle active" class="dropdown-toggle" href="demo-medical-departments.html">
															Departments
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="demo-medical-departments-detail.html">Cardiology</a></li>
															<li><a class="dropdown-item" href="demo-medical-departments-detail.html">Gastroenterology</a></li>
															<li><a class="dropdown-item" href="demo-medical-departments-detail.html">Pulmonology</a></li>
															<li><a class="dropdown-item" href="demo-medical-departments-detail.html">Dental</a></li>
															<li><a class="dropdown-item" href="demo-medical-departments-detail.html">Gynecology</a></li>
															<li><a class="dropdown-item" href="demo-medical-departments-detail.html">Hepatology</a></li>
														</ul>
													</li>
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="demo-medical-doctors.html">
															Doctors
														</a>
													</li>
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="demo-medical-resources.html">
															Resources
														</a>
													</li>
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="demo-medical-insurance.html">
															Insurance
														</a>
													</li>
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="demo-medical-contact.html">
															Contact
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
						</div>
					</div>
				</div>
			</header>
			@endsection
	@section('main')
	
			<div role="main" class="main">
				
			<section class="page-header page-header-modern bg-color-primary page-header-md">
				<div class="container">
					<div class="row">
						<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
							<h1>Departments</h1>
							<span class="sub-title">Learn more about our departments</span>
						</div>
						<div class="col-md-4 order-1 order-md-2 align-self-center">
							<ul class="breadcrumb d-block text-md-right breadcrumb-light">
								<li><a href="demo-medical.html">Home</a></li>
								<li class="active">Departments</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row mt-5 mb-5">
					<div class="col-lg-3">

						<aside class="sidebar">
							<h4 class="font-weight-semibold mb-4">Departments</h4>

							<ul class="nav nav-list flex-column narrow mb-5">
								<li class="nav-item"><a class="nav-link active" href="demo-medical-departments-detail.html">Cardiology</a></li>
								<li class="nav-item"><a class="nav-link" href="demo-medical-departments-detail.html">Gastroenterology</a></li>
								<li class="nav-item"><a class="nav-link" href="demo-medical-departments-detail.html">Pulmonology</a></li>
								<li class="nav-item"><a class="nav-link" href="demo-medical-departments-detail.html">Dental</a></li>
								<li class="nav-item"><a class="nav-link" href="demo-medical-departments-detail.html">Gynecology</a></li>
								<li class="nav-item"><a class="nav-link" href="demo-medical-departments-detail.html">Hepatology</a></li>
							</ul>
						</aside>

					</div>
					<div class="col-lg-9">

						<div class="feature-box feature-box-style-2 mb-4">
							<div class="feature-box-icon w-auto d-none d-sm-block">
								<img src="{{asset('porto/img/demos/medical/icons/department-icon-cardiology.png')}}" alt class="img-fluid" />
							</div>
							<div class="feature-box-info pl-0 pl-sm-3">
								<h2 class="font-weight-semibold mb-3">Cardiology</h2>
								<p class="lead font-weight-normal">At Porto Medical, we offer a wide array of departments, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

								<img src="{{asset('porto/img/demos/medical/gallery/gallery-4.jpg')}}" style="max-width: 260px;" alt="" class="float-right ml-sm-4 mb-4 img-fluid box-shadow-custom" /> 

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad.</p>

								<div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
									<section class="toggle">
										<a class="toggle-title">Symptoms</a>
										<div class="toggle-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. </p>

											<ol class="list list-ordened list-ordened-style-2 mb-5 mt-4">
												<li>Lorem ipsum consectetur adipi;</li>
												<li>Integer molestie facilisis in pre;</li>
												<li>Faucibus porta la;</li>
											</ol>
										</div>
									</section>
									<section class="toggle">
										<a class="toggle-title">Diagnosis</a>
										<div class="toggle-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
										</div>
									</section>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>
			@endsection
			@section('footer')


			<footer id="footer" class="m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-md-4 col-lg-3 mb-2">
							<h4 class="mb-4">Location</h4>
							<p>
								Porto Medical<br>
								123 Porto Blvd, Suite 100<br>
								New York, NY<br>
								Phone : 123-456-7890
							</p>
						</div>
						<div class="col-md-4 col-lg-3">
							<h4 class="mb-4">Opening Hours</h4>
							<div class="info custom-info">
								<span>Mon-Fri</span>
								<span>8:30 am to 5:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Saturday</span>
								<span>9:30 am to 1:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Sunday</span>
								<span>Closed</span>
							</div>
						</div>
						<div class="col-md-4 col-lg-3">
							<div class="contact-details">
								<h4 class="mb-4">Emergency Cases</h4>
								<a class="text-decoration-none" href="tel:1234567890">
									<strong class="font-weight-light">(800)123-4567</strong>
								</a>
							</div>
						</div>
						<div class="col-lg-2 text-md-center text-lg-left ml-lg-auto">
							<h4 class="mb-4">Social Media</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" target="_blank" title="Facebook">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="social-icons-twitter">
									<a href="http://www.twitter.com/" target="_blank" title="Twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="social-icons-linkedin">
									<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright pt-3 pb-3">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center m-0">
								<p>© Copyright 2021. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			@endsection
	