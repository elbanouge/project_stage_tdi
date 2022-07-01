@extends('porto.app')
@section('header')
@include('porto.partials.header.header-333')
@endsection

@section('main')
<div role="main" class="main">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 pl-lg-0 pr-lg-2 mb-3 appear-animation" data-appear-animation="fadeInRightShorter">
							@include('porto.partials.thumb-info.thumb-info-494')
						</div>
						<div class="col-lg-4 px-lg-1 mb-3 appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="600">
							@include('porto.partials.thumb-info.thumb-info-495')
						</div>
						<div class="col-lg-4 pr-lg-0 pl-lg-2 mb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
							@include('porto.partials.thumb-info.thumb-info-496')
						</div>
					</div>
				</div>
				
				<section class="section section-primary section-no-border my-0">
					<div class="container mb-5 pb-5">
						<div class="row justify-content-center">
							<div class="col">
								<div class="row pt-4">
									<div class="col-md-8 order-2 order-md-1 appear-animation" data-appear-animation="fadeInRightShorter">
										<div class="row text-center text-md-left mb-5 pb-5">
											<div class="col-lg-7">
												<h2 class="text-7 font-weight-semibold mb-2">We are sure you will enjoy work with us and our team.</h2>
											</div>
											<div class="col-lg-10">
												<p class="text-3 line-height-9 opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat id sapien ac varius. Fusce hendrerit consectetur adipiscing eli ligula.</p>
												<a href="#" class="d-inline-flex align-items-center btn btn-dark text-color-light font-weight-bold px-4 btn-py-2 text-2 rounded">VIEW OUR SERVICES <i class="fa fa-arrow-right ml-2 pl-1 text-3"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 text-center order-1 order-md-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
										<p class="text-1 mb-2 opacity-7">PORTO IN NUMBERS</p>
										@include('porto.partials.owl-carousel.owl-carousel-319')
									</div>
								</div>
							</div>
						</div>
					</div>

				</section>

				<div class="container">
					<div class="row" style="margin-top: -165px">
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							
							<div class="card flip-card flip-card-3d bg-transparent text-center rounded-0">
								<div class="flip-front p-5">
									<div class="flip-content my-4">
										<strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">01</strong>
										<h4 class="font-weight-bold text-color-primary text-4">FIRST STEP</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>	
									</div>
								</div>
								<div class="flip-back d-flex align-items-center p-5" style="background-image: url(img/generic/generic-corporate-17-1.jpg); background-size: cover; background-position: center;">
									<div class="flip-content my-4">
										<h4 class="font-weight-bold text-color-light">FIRST MEETING</h4>
										<p class="font-weight-light text-color-light opacity-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
										<a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN MORE</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							
							<div class="card flip-card flip-card-3d bg-transparent text-center rounded-0">
								<div class="flip-front p-5">
									<div class="flip-content my-4">
										<strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">02</strong>
										<h4 class="font-weight-bold text-color-primary text-4">SECOND STEP</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>	
									</div>
								</div>
								<div class="flip-back d-flex align-items-center p-5" style="background-image: url(img/generic/generic-corporate-17-1.jpg); background-size: cover; background-position: center;">
									<div class="flip-content my-4">
										<h4 class="font-weight-bold text-color-light">FIRST MEETING</h4>
										<p class="font-weight-light text-color-light opacity-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
										<a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN MORE</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							
							<div class="card flip-card flip-card-3d bg-transparent text-center rounded-0">
								<div class="flip-front p-5">
									<div class="flip-content my-4">
										<strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">03</strong>
										<h4 class="font-weight-bold text-color-primary text-4">THIRD STEP</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>	
									</div>
								</div>
								<div class="flip-back d-flex align-items-center p-5" style="background-image: url(img/generic/generic-corporate-17-1.jpg); background-size: cover; background-position: center;">
									<div class="flip-content my-4">
										<h4 class="font-weight-bold text-color-light">FIRST MEETING</h4>
										<p class="font-weight-light text-color-light opacity-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
										<a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN MORE</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row text-center text-md-left align-items-center mt-4 appear-animation mt-5" data-appear-animation="fadeInRightShorter">
						<div class="col-md-7 col-lg-7">
							<div class="row">
								<div class="col-lg-9">
									<h2 class="font-weight-bold text-7 mb-3">About Us</h2>
									<p class="text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-7">
									<p class="text-2 pr-lg-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus.</p>
									<a href="#" class="d-inline-flex align-items-center btn btn-dark text-color-light font-weight-bold px-4 btn-py-2 text-2 rounded mt-2 mb-5">LEARN MORE NOW <i class="fa fa-arrow-right ml-2 pl-1 text-3"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-lg-4 px-5 px-md-3">
							<img class="img-fluid" src="img/generic/generic-corporate-17-2.png" alt="">
						</div>
					</div>
				</div>

				<section class="section section-no-border section- section-height-3 bg-color-grey-scale-3 text-center mt-0">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-9">
								<div class="call-to-action-content">
									<h2 class="font-weight-normal text-6 mb-0">Porto is <strong class="font-weight-extra-bold">everything</strong> you need to create an <strong class="font-weight-extra-bold">awesome</strong> website!</h2>
									<p class="mb-0">The best HTML Site Template on ThemeForest</p>
								</div>
							</div>
							<div class="col-md-3 col-lg-3">
								<div class="call-to-action-btn">
									<a class="btn btn-badge btn-primary font-weight-bold px-4 mt-4 mt-md-2 mb-2" href="#">BUY NOW<span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1">Only $16</span></a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row pt-4">
						<div class="col-lg-8 pb-2">

							@include('porto.partials.process.process-16')

						</div>
						<div class="col-lg-4 px-5 pt-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
							@include('porto.partials.testimonial.testimonial-114')
						</div>

					</div>

				</div>


			</div>
@endsection

@section('footer')
<footer id="footer" class="border-0">
				<div class="container py-5">
					<div class="row justify-content-md-center py-4 mt-3">
						<div class="col-md-12 col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start mb-5 mb-lg-0">
							<a href="index.html"><img src="img/logo-flat-light.png" alt="Logo" class="img-fluid" style="max-width: 100px;"></a>
						</div>
						<div class="col-md-8 col-lg-5">
							<h5 class="text-3 mb-3">Navigation</h5>
							<div class="row">
								<div class="col-6 col-md-4 mb-5 mb-lg-0">
									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right"></i><a href="page-services.html" class="link-hover-style-1 ml-1"> Our Services</a></li>
										<li><i class="fas fa-angle-right"></i><a href="about-us.html" class="link-hover-style-1 ml-1"> About Us</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contact Us</a></li>
									</ul>
								</div>
								<div class="col-6 col-md-4 mb-5 mb-lg-0">
									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right"></i><a href="blog-post.html" class="link-hover-style-1 ml-1"> Blog</a></li>
										<li><i class="fas fa-angle-right"></i><a href="page-coming-soon.html" class="link-hover-style-1 ml-1"> Coming Soon</a></li>
										<li><i class="fas fa-angle-right"></i><a href="page-careers.html" class="link-hover-style-1 ml-1"> Careers</a></li>
									</ul>
								</div>
								<div class="col-6 col-md-4 mb-5 mb-lg-0">
									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="link-hover-style-1 ml-1"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="link-hover-style-1 ml-1"> Sitemap</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3 pb-1">CONTACT US</h5>
							<a href="tel:+1234567890" class="text-8 text-color-light text-color-hover-primary text-decoration-none font-weight-bold mb-2">(800) 123-4567</a>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-72', ['key' => 'footer-copyright.footer-copyright-72'])
			</footer>
@endsection
