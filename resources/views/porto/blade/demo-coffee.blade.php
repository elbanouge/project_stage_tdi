@extends('porto.app')
@section('header')
@include('porto.partials.header.header-61')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section section-height-4 bg-light position-relative border-0 m-0" id="about">
					<div class="custom-section-halfbar-bg d-none d-md-block appear-animation" data-appear-animation="customFadeInRightShorter" data-appear-animation-delay="500"></div>
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-6 mb-5 mb-md-0">
								<div class="pr-0">
									<div class="overflow-hidden mb-2">
										<h2 class="word-rotator letters type font-weight-bold line-height-4 text-8 mb-0 appear-animation" data-appear-animation="maskUp">
											<span class="custom-primary-font">Enjoy the best taste of our </span> 
											<span class="word-rotator-words waiting">
												<b class="is-visible custom-primary-font">coffee</b>
												<b class="custom-primary-font">desserts</b>
												<b class="custom-primary-font">tea</b>
											</span>
										</h2>
									</div>
									<div class="divider divider-primary divider-small">
										<hr class="w-25 text-left custom-h-1 appear-animation" data-appear-animation="dividerProgress25" data-appear-animation-delay="200">
									</div>
									<p class="text-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. </p>
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
										<p class="opacity-8 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>

									<div class="collapse" id="aboutViewMore">
										<p class="opacity-8 mb-0 pb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum lacinia eros quis blandit. Integer id lectus sem. Nulla facilisi. Cras porttitor ac libero vitae fermentum. Ut tincidunt iaculis libero, et sagittis quam gravida in. Maecenas nec fringilla erat, hendrerit rutrum massa. Mauris dapibus ex a nisi imperdiet, eu suscipit ligula malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

										<div class="row py-4">
											<div class="col-6">
												@include('porto.partials.lightbox.lightbox-16')
											</div>
											<div class="col-6">
												@include('porto.partials.lightbox.lightbox-17')
											</div>
										</div>

										<p class="opacity-8 mb-4">Maecenas eleifend augue in tincidunt congue. Integer dapibus sit amet odio nec tempor. Nullam luctus metus vitae tellus consectetur euismod. Proin consectetur ante vitae vehicula sodales. In pellentesque, nunc quis euismod ultrices, metus mauris consectetur urna, vitae molestie purus erat quis mi. Praesent vel metus mi. Ut sagittis interdum ante, quis posuere eros porta in. Donec auctor ut mi id maximus.</p>
									</div>

									<a data-toggle="collapse" href="#aboutViewMore" role="button" aria-expanded="false" aria-controls="aboutViewMore" class="btn btn-primary btn-outline font-weight-bold border-width-4 btn-px-4 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-toggle-text-click="VIEW MORE..." data-toggle-text-click-alt="VIEW LESS...">VIEW MORE...</a>
								</div>
							</div>
							<div class="col-md-6">
								<img src="img/demos/coffee/others/others-1.jpg" class="img-fluid rounded appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700" alt="">
							</div>
						</div>
					</div>
				</section>

				<section class="section section-parallax section-height-4 overlay overlay-show border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '135%'}" data-image-src="img/demos/coffee/backgrounds/background-1.jpg" id="reservations">
					<div class="container container">
						<div class="row align-items-center">
							<div class="col-md-6 custom-column-bg text-center py-5 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="overflow-hidden mb-3">
									<h2 class="text-color-light font-weight-bold text-9 negative-ls-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Reservations</h2>
								</div>
								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
									<p class="font-weight-light text-color-light text-3 opacity-7 px-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. </p>
								</div>
								<a href="tel:+0123456789" class="font-weight-bold text-color-primary text-4 ls-0 d-block mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="650">CALL US: 1-800-1234-5678</a>
							</div>
							<div class="col-md-6 text-center">
								<div class="row justify-content-center">
									<div class="col-md-6 col-lg-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
										<h2 class="text-color-light font-weight-bold text-7 negative-ls-05 mb-3">MON - FRI</h2>
										<p class="font-weight-light text-color-light opacity-7 mb-0"><span class="d-block">10:00 AM</span> TO <span class="d-block">8:00 PM</span></p>
									</div>
									<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="700">
										<h2 class="text-color-light font-weight-bold text-7 negative-ls-05 mb-3">SAT - SUN</h2>
										<p class="font-weight-light text-color-light opacity-7 mb-0"><span class="d-block">10:00 AM</span> TO <span class="d-block">8:00 PM</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 parallax border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%'}" data-image-src="img/demos/coffee/backgrounds/background-2.jpg" id="menu">
					<div class="container">
						<div class="row justify-content-center mb-5">
							<div class="col-md-9 col-lg-6 text-center">
								<div class="overflow-hidden mb-3">
									<h2 class="text-color-dark font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="maskUp">Our Menu</h2>
								</div>
								<div class="divider divider-primary divider-small">
									<hr class="mx-auto w-25 custom-h-1 appear-animation" data-appear-animation="dividerProgress25" data-appear-animation-delay="200">
								</div>
								<p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
							</div>
						</div>
						<div class="row pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
							<div class="col-md-6">
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Coffee</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 2</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Iced Coff</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 3</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Hot Chocolate</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 4</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Iced Tea</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 3</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Hot Tea</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 3</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Soda</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 2</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Juice</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 2</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Milk</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 2</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Chocolate Milk</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 2</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Pancakes</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 20</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Eggs Porto</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 3</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title"><h3 class="text-transform-none font-weight-semibold text-4 mb-0">Smashed Avocado</h3></div>
										<div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
										<div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 5</strong></div>
									</div>
									<div class="custom-menu-item-desc">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<a href="#locations" data-hash data-hash-offset="92" class="btn btn-primary btn-outline font-weight-bold border-width-4 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter">WHERE WE ARE</a>
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid px-0">
					<div class="row">
						<div class="col-6 col-sm-4 col-lg-2 px-0">
							@include('porto.partials.lightbox.lightbox-20')
						</div>
						<div class="col-6 col-sm-4 col-lg-2 px-0">
							@include('porto.partials.lightbox.lightbox-21')
						</div>
						<div class="col-6 col-sm-4 col-lg-2 px-0">
							@include('porto.partials.lightbox.lightbox-22')
						</div>
						<div class="col-6 col-sm-4 col-lg-2 px-0">
							@include('porto.partials.lightbox.lightbox-23')
						</div>
						<div class="col-6 col-sm-4 col-lg-2 px-0">
							@include('porto.partials.lightbox.lightbox-24')
						</div>
						<div class="col-6 col-sm-4 col-lg-2 px-0">
							@include('porto.partials.lightbox.lightbox-25')
						</div>
					</div>
				</div>

				<section class="section section-height-4 bg-light border-0 m-0" id="news">
					<div class="container">
						<div class="row justify-content-center mb-4">
							<div class="col-md-9 col-lg-6 text-center">
								<div class="overflow-hidden mb-3">
									<h2 class="text-color-dark font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="maskUp">News &amp; Events</h2>
								</div>
								<div class="divider divider-primary divider-small">
									<hr class="mx-auto w-25 custom-h-1 appear-animation" data-appear-animation="dividerProgress25" data-appear-animation-delay="200">
								</div>
								<p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
							</div>
						</div>
						
						<div class="card-columns">
							<div class="card custom-bg-color-1 border-0">
								<div class="card-body px-5">
									<h3 class="font-weight-bold text-transform-none line-height-4 text-5 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
										<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">Amazing Things Are Coming</a>
									</h3>
									<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
									<p class="font-weight-light text-2 mb-3">Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
									<div class="d-flex align-items-center mb-4">
										<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
										<span class="font-weight-semibold text-color-dark text-2">by John Doe</span>
									</div>
								</div>
							</div>							
							<div class="card custom-bg-color-1 border-0">
								<div class="card-body px-5">
									<h3 class="font-weight-bold text-transform-none line-height-4 text-5 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
										<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">Enjoy your Coffee Week</a>
									</h3>
									<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
									<p class="font-weight-light text-2 mb-3">Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
									<div class="d-flex align-items-center mb-4">
										<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
										<span class="font-weight-semibold text-color-dark text-2">by John Doe</span>
									</div>
								</div>
							</div>
							<div class="card custom-bg-color-1 border-0">
								<div class="card-body px-5">
									<h3 class="font-weight-bold text-transform-none line-height-4 text-5 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
										<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">Free Pancakes Day</a>
									</h3>
									<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
									<p class="font-weight-light text-2 mb-3">Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
									<div class="d-flex align-items-center mb-4">
										<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
										<span class="font-weight-semibold text-color-dark text-2">by John Doe</span>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col text-center pt-5">
								<a href="demo-coffee-blog.html" class="btn btn-primary btn-outline font-weight-bold border-width-4 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter">VIEW MORE</a>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="locations">
					@include('porto.partials.google-map.google-map-11')
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-dark pt-5 mt-0">
				<div class="container container pt-5">
					<div class="row mb-5 pb-4">
						<div class="col text-center">
							<a href="demo-coffee.html" class="text-decoration-none">
								<img src="img/demos/coffee/logo-light.png" class="img-fluid" width="195" height="132" alt="">
							</a>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-4 text-center mb-4 mb-md-0">
							<h4 class="font-weight-bold text-color-light text-5 mb-1">NEW YORK</h4>
							<p class="font-weight-light text-color-light line-height-4 opacity-6 mb-2 px-lg-5 mx-lg-4">123, New York Street, New York <a href="tel:0123456789" class="text-color-light">(123) 456-7890</a></p>
							<ul class="social-icons social-icons-clean social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-md-4 text-center mb-4 mb-md-0">
							<h4 class="font-weight-bold text-color-light text-5 mb-1">FRESNO</h4>
							<p class="font-weight-light text-color-light line-height-4 opacity-6 mb-2 px-lg-5 mx-lg-4">123, Fresno Street, Fresno <a href="tel:0123456789" class="text-color-light">(123) 456-7890</a></p>
							<ul class="social-icons social-icons-clean social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-md-4 text-center">
							<h4 class="font-weight-bold text-color-light text-5 mb-1">BIRMINGHAM</h4>
							<p class="font-weight-light text-color-light line-height-4 opacity-6 mb-2 px-lg-5 mx-lg-4">123, Birmingham Street, Birmingham <a href="tel:0123456789" class="text-color-light">(123) 456-7890</a></p>
							<ul class="social-icons social-icons-clean social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-11', ['key' => 'footer-copyright.footer-copyright-11'])
			</footer>
@endsection
