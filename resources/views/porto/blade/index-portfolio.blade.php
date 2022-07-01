@extends('porto.app')
@section('header')
@include('porto.partials.header.header-350')
@endsection

@section('main')
<div role="main" class="main">
				<div class="container container-lg-custom">
					<div class="row">
						<div class="col-lg-6 pt-5">
							<h2 class="font-weight-bold text-10 line-height-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"><span class="text-5">Hello, I’m John Doe. I’m a Digital Designer From New York City.</span></h2>
							<h4 class="text-6 line-height-6 font-weight-normal appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"><span class="opacity-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus blandit massa enim adipiscing elit phasellus.</span></h4>
							<a class="btn btn-primary btn-with-arrow mb-2 ml-0 pl-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" href="#">Contact Us <span><i class="fas fa-chevron-right"></i></span></a>
						</div>
					</div>
				</div>

				<hr class="my-5">

				<div class="container container-lg-custom">
					<div class="row">
						<div class="col">

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">

								@include('porto.partials.nav-pills.nav-pills-31')

								<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
									<div class="porto.partialsort-destination" data-sort-id="portfolio">
										
										<div class="col-sm-6 col-lg-6 isotope-item websites">
											@include('porto.partials.portfolio-item.portfolio-item-82', ['key' => 'portfolio-item.portfolio-item-98'])
										</div>porto.partials

										<div class="col-sm-6 col-lg-6 isotope-item medias">
											@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-99'])
										</div>porto.partials

										<div class="col-sm-6 col-lg-3 isotope-item brands">
											@include('porto.partials.portfolio-item.portfolio-item-82', ['key' => 'portfolio-item.portfolio-item-100'])
										</div>porto.partials

										<div class="col-sm-6 col-lg-3 isotope-item logos">
											@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-101'])
										</div>					porto.partials

										<div class="col-sm-6 col-lg-3 isotope-item brands">
											@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-102'])
										</div>porto.partials

										<div class="col-sm-6 col-lg-6 isotope-item logos">
											@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-103'])
										</div>porto.partials

										<div class="col-sm-6 col-lg-3 isotope-item brands">
											@include('porto.partials.portfolio-item.portfolio-item-82', ['key' => 'portfolio-item.portfolio-item-104'])
										</div>porto.partials

										<div class="col-sm-6 col-lg-6 isotope-item medias">
											@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-105'])
										</div>porto.partials

										<div class="col-sm-6 col-lg-6 isotope-item websites">
											@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-106'])
										</div>porto.partials

										<div class="col-sm-6 col-lg-6 isotope-item websites">
											@include('porto.partials.portfolio-item.portfolio-item-83', ['key' => 'portfolio-item.portfolio-item-107'])
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
				<div class="container container-lg-custom">
					<div class="row py-5">
						<div class="col text-center">
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>porto.partials
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-80', ['key' => 'footer-copyright.footer-copyright-80'])
			</footer>
@endsection
