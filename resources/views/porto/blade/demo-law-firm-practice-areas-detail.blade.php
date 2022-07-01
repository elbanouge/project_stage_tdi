@extends('porto.app')
@section('header')
@include('porto.partials.header.header-144')
@endsection

@section('main')
<div role="main" class="main">
				<div class="container">
					<div class="row pt-5">

						<div class="col-md-9 mb-4 mb-md-0">

							<div class="row mb-4">
								<div class="col-lg-4 text-center">
									<img src="img/office/our-office-8.jpg" class="img-fluid mb-4" alt="">
								</div>
								<div class="col-lg-8">
									<h1 class="mt-0 mb-2">Criminal Law</h1>
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Pellentesque neque eget diam posuere porta.</p>
									<div class="divider divider-primary divider-small mb-4">
										<hr class="mr-auto">
									</div>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-md-12">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>

									<h2 class="mt-4 pt-3 mb-3">Expertise</h2>

									<ul class="list list-icons list-primary mt-4 mb-4">
										<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
										<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Amet orci quis arcu vestibulum vestibulum.</li>
										<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Orci quis arcu vestibulum vestibulum.</li>
										<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fas fa-check"></i> Fuscesit amet orci quis arcu vestibulum vestibulum.</li>
									</ul>

									<p>Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci.</p>

									<h2 class="mt-4 pt-3 mb-3">Related Links</h2>

									<ul>
										<li>
											<strong>Okler</strong> - <a href="http://www.okler.net">http://www.okler.net</a>
										</li>
										<li>
											<strong>Envato</strong> - <a href="http://www.envato.com">http://www.envato.com</a>
										</li>
										<li>
											<strong>Theme Forest</strong> - <a href="http://www.themeforest.net">http://www.themeforest.net</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							@include('porto.partials.sidebar.sidebar-28')
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
