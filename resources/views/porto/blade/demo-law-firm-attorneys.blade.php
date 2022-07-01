@extends('porto.app')
@section('header')
@include('porto.partials.header.header-141')
@endsection

@section('main')
<div role="main" class="main">
				<div class="container">
					<div class="row pt-5">

						<div class="col-lg-9">

							<h1 class="mb-0">Law Firm Attorneys</h1>
							<div class="divider divider-primary divider-small mb-4">
								<hr class="mr-auto">
							</div>

							<div class="row team-list mt-1 sort-destination">
								<div class="col-md-6 col-lg-4 mb-5 text-center isotope-item criminal-law new-york">
									<a href="demo-law-firm-attorneys-detail.html">
										@include('porto.partials.thumb-info.thumb-info-183')
									</a>
									<h4 class="mt-3 mb-0">David Doe</h4>
									<p class="mb-0">Criminal Law</p>
									<span class="thumb-info-social-icons mt-2 pb-0">
										<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									
								</span></div>
								<div class="col-md-6 col-lg-4 mb-5 text-center isotope-item business-law new-york">
									<a href="demo-law-firm-attorneys-detail.html">
										@include('porto.partials.thumb-info.thumb-info-184')
									</a>
									<h4 class="mt-3 mb-0">Jeff Doe</h4>
									<p class="mb-0">Business Law</p>
									<span class="thumb-info-social-icons mt-2 pb-0">
										<a href="mailto:mail@example.com"><i class="far fa-envelope"></i><span>Email</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									
								</span></div>
								<div class="col-md-6 col-lg-4 mb-5 text-center isotope-item divorce-law london">
									<a href="demo-law-firm-attorneys-detail.html">
										@include('porto.partials.thumb-info.thumb-info-185')
									</a>
									<h4 class="mt-3 mb-0">Craig Doe</h4>
									<p class="mb-0">Divorce Law</p>
									<span class="thumb-info-social-icons mt-2 pb-0">
										<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									
								</span></div>
								<div class="col-md-6 col-lg-4 mb-5 text-center isotope-item accident-law london">
									<a href="demo-law-firm-attorneys-detail.html">
										@include('porto.partials.thumb-info.thumb-info-186')
									</a>
									<h4 class="mt-3 mb-0">Richard Doe</h4>
									<p class="mb-0">Accident Law</p>
									<span class="thumb-info-social-icons mt-2 pb-0">
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									
								</span></div>
								<div class="col-md-6 col-lg-4 mb-5 text-center isotope-item health-law new-york">
									<a href="demo-law-firm-attorneys-detail.html">
										@include('porto.partials.thumb-info.thumb-info-187')
									</a>
									<h4 class="mt-3 mb-0">Amanda Doe</h4>
									<p class="mb-0">Health Law</p>
									<span class="thumb-info-social-icons mt-2 pb-0">
										<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									
								</span></div>
								<div class="col-md-6 col-lg-4 mb-5 text-center isotope-item capital-law new-york">
									<a href="demo-law-firm-attorneys-detail.html">
										@include('porto.partials.thumb-info.thumb-info-188')
									</a>
									<h4 class="mt-3 mb-0">Jessica Doe</h4>
									<p class="mb-0">Capital Law</p>
									<span class="thumb-info-social-icons mt-2 pb-0">
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									
								</span></div>
							</div>

						</div>

						<div class="col-lg-3">
							@include('porto.partials.sidebar.sidebar-27')
						</div>
					</div>

				</div>
			</div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0">
				<div class="container py-4">
					<div class="row py-5">
						<div class="col-md-6 mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3 mb-3">
								<img alt="Porto Website Template" src="img/demos/law-firm/logo-law-firm-footer.png" class="opacity-7 top-auto bottom-10" height="32">
							</a>
							<p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">CONTACT US</h5>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
								<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h5 class="text-3 mb-3">FOLLOW US</h5>
							@include('porto.partials.header-social-icons.header-social-icons-13')
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-23', ['key' => 'footer-copyright.footer-copyright-23'])
			</footer>
@endsection
