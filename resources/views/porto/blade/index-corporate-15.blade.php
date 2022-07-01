@extends('porto.app')
@section('header')
@include('porto.partials.header.header-331')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.owl-carousel.owl-carousel-316')

				<div class="container container-lg-custom py-5 my-5">
					<div class="row justify-content-center">
						<div class="col-xl-8 text-center mb-4">
							<h2 class="font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeIn">Explore All Possibilities</h2>
							<p class="line-height-9 text-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><span class="opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat id sapien ac varius. Fusce hendrerit ligula a consectetur ullamcorper. Vestibulum varius pharetra lorem, in maximus libero placerat sed.</span></p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-10 px-lg-5">
							<div class="row">
								<div class="col-md-6 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInRightShorter">
									@include('porto.partials.thumb-info.thumb-info-489')
								</div>
								<div class="col-md-6 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInLeftShorter">
									@include('porto.partials.thumb-info.thumb-info-490')
								</div>
								<div class="col-md-4 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInLeftShorter">
									@include('porto.partials.thumb-info.thumb-info-491')
								</div>
								<div class="col-md-4 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
									@include('porto.partials.thumb-info.thumb-info-492')
								</div>
								<div class="col-md-4 px-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
									@include('porto.partials.thumb-info.thumb-info-493')
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-no-border section-height-4 mb-0">
					<div class="container">
						<div class="row justify-content-center text-center">
							<div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftBig">
								<h4 class="font-weight-bold mb-2 mt-4 mt-md-0">Mobile Apps</h4>
								<p class="px-lg-4 mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.
								</p>
							</div>
							<div class="col-md-4 mb-2 appear-animation" data-appear-animation="fadeIn">
								<h4 class="font-weight-bold mb-2 mt-4 mt-md-0">Creative Websites</h4>
								<p class="px-lg-4 mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.
								</p>
							</div>
							<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightBig">
								<h4 class="font-weight-bold mb-2 mt-4 mt-md-0">SEO Optimization</h4>
								<p class="px-lg-4 mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.
								</p>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border section-height-3 bg-color-primary my-0">
					<div class="container">
						<div class="row counters counters-sm text-light">
							<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
								@include('porto.partials.counter.counter-135')
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInDownShorter">
								@include('porto.partials.counter.counter-136')
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInUpShorter">
								@include('porto.partials.counter.counter-137')
							</div>
							<div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter">
								@include('porto.partials.counter.counter-138')
							</div>
						</div>
					</div>
				</section>

				<div class="container my-5">
					<div class="row py-5">
						<div class="col">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<div class="featured-boxes featured-boxes-modern-style-1">
										@include('porto.partials.featured-box.featured-box-460', ['key' => 'featured-box.featured-box-460'])
									</div>
								</div>
								<div class="col-lg-5 text-center text-lg-left">
									<h4 class="text-6 font-weight-bold line-height-5 mt-4 mt-lg-0">We are sure you will enjoy work with us and our team.</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat id sapien ac varius. Fusce hendrerit ligula a con.</p>
									<a href="#" class="d-inline-flex align-items-center btn btn-dark text-color-light font-weight-bold px-4 btn-py-2 text-1 rounded">VIEW OUR SERVICES <i class="fa fa-arrow-right ml-2 pl-1 text-3"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0 bg-color-light-scale-1 border-0">
				<div class="container">
					<div class="row py-5 justify-content-center">
						<div class="col-md-9 offset-md-1 offset-lg-0 mb-4 mb-lg-0 d-flex align-items-center">
							<div class="footer-nav footer-nav-links footer-nav-bottom-line">
								<nav>
									<ul class="nav" id="footerNav">
										<li>
											<a href="#" class="text-color-dark active">Home</a>
										</li>
										<li>
											<a href="#" class="text-color-dark">Elements</a>
										</li>
										<li>
											<a href="#" class="text-color-dark">Features</a>
										</li>
										<li>
											<a href="#" class="text-color-dark">Pages</a>
										</li>
										<li>
											<a href="#" class="text-color-dark">Portfolio</a>
										</li>
										<li>
											<a href="#" class="text-color-dark">Blog</a>
										</li>
										<li>
											<a href="#" class="text-color-dark">Shop</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-md-4 col-lg-3 mb-4 mb-lg-0 text-center text-lg-right">
							<h5 class="text-3 text-color-dark mb-0 pb-1 opacity-6">CONTACT US</h5>
							<a href="tel:+1234567890" class="text-8 text-color-dark text-color-hover-primary text-decoration-none font-weight-bold pb-1 mb-0">(800) 123-4567</a>
							<p class="m-0"><a href="mailto:mail@example.com" class="text-color-dark text-color-hover-primary">mail@example.com</a></p>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-70', ['key' => 'footer-copyright.footer-copyright-70'])
			</footer>
@endsection
