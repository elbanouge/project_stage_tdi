@extends('porto.app')
@section('header')
@include('porto.partials.header.header-60')
@endsection

@section('main')
<div role="main" class="main">

				<section class="section bg-light border-0 m-0" id="news">
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
						<div class="row">
							<div class="card-columns">
								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
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
								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
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
								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
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

								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
											<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">Amazing Mountain</a>
										</h3>
										<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
										<p class="font-weight-light text-2 mb-3">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
										<div class="d-flex align-items-center mb-4">
											<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
											<span class="font-weight-semibold text-color-dark text-2">by Bob Doe</span>
										</div>
									</div>
								</div>

								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
											<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">Creative Business</a>
										</h3>
										<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
										<p class="font-weight-light text-2 mb-3">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
										<div class="d-flex align-items-center mb-4">
											<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
											<span class="font-weight-semibold text-color-dark text-2">by John Doe</span>
										</div>
									</div>
								</div>

								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
											<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">Unlimited Ways</a>
										</h3>
										<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
										<p class="font-weight-light text-2 mb-3">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
										<div class="d-flex align-items-center mb-4">
											<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
											<span class="font-weight-semibold text-color-dark text-2">by John Doe</span>
										</div>
									</div>
								</div>

								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
											<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">Developer Life</a>
										</h3>
										<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
										<p class="font-weight-light text-2 mb-3">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
										<div class="d-flex align-items-center mb-4">
											<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
											<span class="font-weight-semibold text-color-dark text-2">by Jessica Doe</span>
										</div>
									</div>
								</div>

								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
											<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">The Blue Sky</a>
										</h3>
										<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
										<p class="font-weight-light text-2 mb-3">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
										<div class="d-flex align-items-center mb-4">
											<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
											<span class="font-weight-semibold text-color-dark text-2">by Robert Doe</span>
										</div>
									</div>
								</div>

								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
											<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">Night Life</a>
										</h3>
										<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
										<p class="font-weight-light text-2 mb-3">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
										<div class="d-flex align-items-center mb-4">
											<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
											<span class="font-weight-semibold text-color-dark text-2">by Robert Doe</span>
										</div>
									</div>
								</div>

								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
											<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">Another World Perspective</a>
										</h3>
										<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
										<p class="font-weight-light text-2 mb-3">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
										<div class="d-flex align-items-center mb-4">
											<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
											<span class="font-weight-semibold text-color-dark text-2">by John Doe</span>
										</div>
									</div>
								</div>

								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
											<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">The Creative Team</a>
										</h3>
										<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
										<p class="font-weight-light text-2 mb-3">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
										<div class="d-flex align-items-center mb-4">
											<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
											<span class="font-weight-semibold text-color-dark text-2">by Robert Doe</span>
										</div>
									</div>
								</div>

								<div class="card custom-bg-color-1 border-0 mt-2 mb-3">
									<div class="card-body px-5">
										<h3 class="font-weight-normal text-transform-none line-height-4 text-6 negative-ls-1 pr-5 pb-1 mt-2 mb-2">
											<a href="demo-coffee-blog-post.html" class="text-color-dark text-decoration-none custom-primary-font">Alone on the Forest</a>
										</h3>
										<span class="d-block font-weight-semibold text-color-dark line-height-4 text-2 mb-2"><i class="far fa-clock text-color-primary mr-1"></i> May 17, 2021</span>
										<p class="font-weight-light text-2 mb-3">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
										<div class="d-flex align-items-center mb-4">
											<img src="img/avatars/avatar.jpg" width="20" class="img-fluid rounded-circle mr-2" alt="">
											<span class="font-weight-semibold text-color-dark text-2">by John Doe</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>

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
							<h4 claporto.partials text-color-light text-5 mb-1">BIRMINGHAM</h4>
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
