@extends('porto.app')
@section('header')
@include('porto.partials.header.header-182')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.page-header.page-header-196')

				<section class="section section-default">
					<div class="container">
						<div class="row">
							<div class="col">
								
								@include('porto.partials.tabs.tabs-5')

							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row mt-5 mb-4">
						<div class="col-lg-12 text-center">
							<h4 class="mt-4 mb-2">Special <strong>Menu</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

							<hr class="custom-divider">

							<ul class="special-menu pb-5">
								<li>
									<img src="img/demos/restaurant/products/product-1.jpg" class="img-fluid" alt="">
									<h3>Monday <em>Special</em></h3>
									<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.</span></p>
									<strong class="special-menu-price text-color-dark">$29</strong>
								</li>
								<li>
									<img src="img/demos/restaurant/products/product-2.jpg" class="img-fluid" alt="">
									<h3>Tuesday <em>Special</em></h3>
									<p><span>Lorem ipsum dolor sit amet. Donec eu pulvinar magna.</span></p>
									<strong class="special-menu-price text-color-dark">$39</strong>
								</li>
								<li>
									<img src="img/demos/restaurant/products/product-3.jpg" class="img-fluid" alt="">
									<h3>Wednesday <em>Special</em></h3>
									<p><span>Lorem ipsum dolor sit amet.</span></p>
									<strong class="special-menu-price text-color-dark">$24</strong>
								</li>
								<li>
									<img src="img/demos/restaurant/products/product-4.jpg" class="img-fluid" alt="">
									<h3>Thursday <em>Special</em></h3>
									<p><span>Lorem ipsum dolor sit amet magna.</span></p>
									<strong class="special-menu-price text-color-dark">$39</strong>
								</li>
								<li>
									<img src="img/demos/restaurant/products/product-5.jpg" class="img-fluid" alt="">
									<h3>Friday <em>Special</em></h3>
									<p><span>Lorem ipsum dolor sit amet adipiscing elit. Donec eu pulvinar magna.</span></p>
									<strong class="special-menu-price text-color-dark">$59</strong>
								</li>
							</ul>

						</div>
					</div>
				</div>
			</div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0 bg-color-secondary mt-0">
				<div class="container">
					<div class="row py-5">
						<div class="col text-center">
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-32', ['key' => 'footer-copyright.footer-copyright-32'])
			</footer>
@endsection
