@extends('porto.app')
@section('header')
@include('porto.partials.header.header-87')
@endsection

@section('main')
<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 350px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 800, 'gridheight': 350, 'spinner': 'off'}">
						<ul>
							<li data-transition="fade">
								<img src="video/memory-of-a-woman.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="video/memory-of-a-woman.mp4" data-videopreload="preload" data-videoloop="loop" data-forcecover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false"></div>
								
								<div class="tp-dottedoverlay tp-opacity-overlay"></div>
							</li>
						</ul>
					</div>
				</div>

				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 mt-5 title-with-video-custom text-center">
							<h1 class="mt-5 pt-5 font-weight-semibold">Services</h1>
						</div>
					</div>
				</div>

				<section class="section section-default mt-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 text-center">
								<h2 class="mt-5 mb-5 pb-0">We create amazing solution lorem ipsum dolor sit amet, consectetuer elit. Aenean commodo ligula eget dolor. Aenean massa.</h2>
							</div>
						</div>
					</div>
				</section>

				<section class="m-5 pb-3">
					<div class="container pt-4 pb-3">
						<div class="row">
							<div class="col text-center">
								<h2 class="mb-0 mt-3 font-weight-bold text-6">We Can Help You With:</h2>
								<p class="text-4 mb-3">Pellentesque pellentesque eget tempor tellus. </p>
								<div class="divider divider-primary divider-small divider-small-center mb-3">
									<hr>
								</div>
							</div>
						</div>
						<div class="row justify-content-center mt-5">
							<div class="col-md-10 col-lg-4 text-center">
								@include('porto.partials.feature-box.feature-box-49')
							</div>
							<div class="col-md-10 col-lg-4 text-center">
								@include('porto.partials.feature-box.feature-box-50')
							</div>
							<div class="col-md-10 col-lg-4 text-center">
								@include('porto.partials.feature-box.feature-box-51')
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">
					<div class="row featured-boxes-full featured-boxes-full-scale clearfix">
						<div class="col-lg-4 featured-box-full featured-box-full-primary">
							<i class="icon-directions icons"></i>
							<h4 class="mt-3">1 - BRIEF</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
						</div>
						<div class="col-lg-4 featured-box-full featured-box-full-primary">
							<i class="icon-puzzle icons"></i>
							<h4 class="mt-3">2 - CREATION</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
						</div>
						<div class="col-lg-4 featured-box-full featured-box-full-primary">
							<i class="icon-rocket icons"></i>
							<h4 class="mt-3">3 - LAUNCH</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>

				<section class="section section-default section-footer section-color-custom mt-0 pt-2 pb-5">
					<div class="container py-4">
						<div class="row mt-2 mb-4 align-items-center">
							<div class="col-4 text-center">
								<img class="img-fluid appear-animation mt-5 pt-5" src="img/demos/digital-agency/laptop.png" style="width: 125% !important; max-width: 125%; left: -25%; position: relative;" alt="layout styles" data-appear-animation="fadeInLeft">
							</div>
							<div class="col-8">
								<h2 class="mb-1 mt-5 font-weight-bold text-6">Innovation</h2>
								<div class="divider divider-primary divider-small mb-5">
									<hr>
								</div>
								<p class="lead">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
								</p>

								<a class="btn btn-outline btn-primary text-1 font-weight-semibold text-uppercase px-5 btn-py-2 mb-3" href="demo-digital-agency-contact.html">Get a Quote</a>
							</div>
						</div>
					</div>
				</section>
			</div>
@endsection

@section('footer')
<footer id="footer">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3 pl-3 pl-md-0">
								<img alt="Porto Website Template" src="img/logo-default-slim-dark.png" height="32">
							</a>
						</div>
						<div class="col-md-8 d-flex justify-content-center justify-content-md-end mb-4 mb-lg-0">
							<div class="row">
								<div class="col-md-6 mb-3 mb-md-0">
									<div class="ml-3 text-center text-md-right">
										<h5 class="text-3 mb-0 text-color-light">NEW YORK</h5>
										<p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="pl-1">(123) 465-7890</span></p>            
									</div>
								</div>
								<div class="col-md-6">
									<div class="ml-3 text-center text-md-right">
										<h5 class="text-3 mb-0 text-color-light">LOS ANGELES</h5>
										<p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="pl-1">(123) 465-7890</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-14', ['key' => 'footer-copyright.footer-copyright-14'])
			</footer>
@endsection
