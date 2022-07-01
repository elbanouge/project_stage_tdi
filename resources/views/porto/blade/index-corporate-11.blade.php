@extends('porto.app')
@section('header')
@include('porto.partials.header.header-327')
@endsection

@section('main')
<div role="main" class="main">

				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-primary' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class="slide-overlay slide-overlay-gradient slide-overlay-gradient-animated slide-overlay-level-8" data-transition="fade">
								<img src="img/slides/slide-corporate-11-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="tp-caption text-color-light font-weight-normal" data-frames='[{"delay":700,"speed":1000,"frame":"0","from":"opacity:0;y:-50%;","to":"opacity:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['-100','-100','-100','-160']" data-fontsize="['20','20','20','40']" data-lineheight="['25','25','25','45']">WE BUILD ONLY THE BEST</div>

								<div class="tp-caption bg-color-light" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.4;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['-65','-65','-65','-98']" data-width="['362','362','362','575']" data-height="8"></div>

								<div class="tp-caption bg-color-light" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:50%;","to":"opacity:0.4;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['65','65','65','98']" data-width="['362','362','362','575']" data-height="8"></div>

								<div class="tp-caption bg-color-light" data-frames='[{"delay":1850,"speed":1000,"frame":"0","from":"opacity:0;y:-50%;","to":"opacity:0.4;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['-185','-185','-185','-284']" data-y="center" data-width="8" data-height="['138','138','138','190']"></div>

								<div class="tp-caption bg-color-light" data-frames='[{"delay":1850,"speed":1000,"frame":"0","from":"opacity:0;y:50%;","to":"opacity:0.4;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['185','185','185','284']" data-y="center" data-width="8" data-height="['138','138','138','190']"></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['95','95','95','150']" data-lineheight="['105','105','105','155']">DESIGNS</h1>

								<div class="tp-caption font-weight-light text-color-light ws-normal text-center" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="center" data-y="center" data-voffset="['110','110','110','200']" data-width="['325','325','325','550']" data-fontsize="['18','18','18','40']" data-lineheight="['26','26','26','45']">Porto is a huge success in the one of largest world's MarketPlace.</div>

							</li>
						</ul>
					</div>
				</div>

				<div class="container py-4 my-5">
					<div class="row text-center mb-5">
						<div class="col-md-10 mx-md-auto">
							<h1 class="word-rotator-title font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
								Porto is incredibly beautiful and fully responsive.
							</h1>
							<p class="lead text-4 font-weight-normal appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
							</p>
						</div>
					</div>
					<div class="row justify-content-center counters counters-lg">
						<div class="col-md-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
							@include('porto.partials.counter.counter-73')
						</div>
						<div class="col-md-4 col-lg-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
							@include('porto.partials.counter.counter-133')
						</div>
						<div class="col-md-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
							@include('porto.partials.counter.counter-134')
						</div>
					</div>
				</div>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container my-3">
						<div class="row justify-content-center">
							<div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="featured-boxes featured-boxes-modern-style-1">
									@include('porto.partials.featured-box.featured-box-447', ['key' => 'featured-box.featured-box-447'])
								</div>
							</div>
							<div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary">
									@include('porto.partials.featured-box.featured-box-448', ['key' => 'featured-box.featured-box-448'])
								</div>
							</div>
							<div class="col-sm-10 col-md-7 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
								<div class="featured-boxes featured-boxes-modern-style-1">
									@include('porto.partials.featured-box.featured-box-449', ['key' => 'featured-box.featured-box-449'])
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row align-items-center text-center text-md-left py-5 my-5">
						<div class="col-lg-7 mb-5 mb-lg-0">
							<h2 class="font-weight-bold text-6 line-height-1 ls-0 mb-4">About Our Clients</h2>
							<p class="text-4">There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template.</p>
							<p class="mb-4 pr-md-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo.</p>
							<a href="#" class="btn btn-dark font-weight-semibold rounded-0 text-2 btn-px-5 btn-py-2">LEARN MORE</a>
						</div>
						<div class="col-lg-5 text-center">
							<div class="row justify-content-center">
								<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
									<img class="img-fluid hover-effect-3" src="img/logos/logo-1.png" alt="">
								</div>
								<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
									<img class="img-fluid hover-effect-3" src="img/logos/logo-4.png" alt="">
								</div>
								<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
									<img class="img-fluid hover-effect-3" src="img/logos/logo-3.png" alt="">
								</div>
							</div>
							<div class="row justify-content-center py-md-3 my-md-4">
								<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
									<img class="img-fluid hover-effect-3" src="img/logos/logo-5.png" alt="">
								</div>
								<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
									<img class="img-fluid hover-effect-3" src="img/logos/logo-6.png" alt="">
								</div>
								<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
									<img class="img-fluid hover-effect-3" src="img/logos/logo-7.png" alt="">
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-9 col-md-4 px-0">
									<img class="img-fluid hover-effect-3" src="img/logos/logo-2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>

				<hr class="my-0">

				<div class="container">
					<div class="row py-4 my-5">
						<div class="col appear-animation" data-appear-animation="fadeInUpShorter">
							
							@include('porto.partials.owl-carousel.owl-carousel-311')

						</div>
					</div>
				</div>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container my-3">
						<div class="row">
							<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold line-height-1 mb-3">What's Happening</h2>
								<p class="text-4 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellen.</p>
							</div>
						</div>
						<div class="row justify-content-center pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
							<div class="col-sm-9 col-md-8 col-lg-4 mb-4 mb-lg-0">
								<div class="card border-0 rounded-0">
									<div class="card-body p-5">
										<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
										<div class="d-flex align-items-center">
											<img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="">
											<strong class="text-color-dark text-2">by John Doe</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-9 col-md-8 col-lg-4 mb-4 mb-lg-0">
								<div class="card border-0 rounded-0">
									<div class="card-body p-5">
										<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
										<div class="d-flex align-items-center">
											<img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="">
											<strong class="text-color-dark text-2">by John Doe</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-9 col-md-8 col-lg-4">
								<div class="card border-0 rounded-0">
									<div class="card-body p-5">
										<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
										<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
										<div class="d-flex align-items-center">
											<img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="">
											<strong class="text-color-dark text-2">by John Doe</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<a href="#" class="btn btn-dark font-weight-semibold rounded-0 text-2 btn-px-5 btn-py-2">VIEW MORE</a>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0 appear-animation" data-appear-animation="fadeIn">
				<div class="container">
					<div class="row justify-content-center py-5 my-5">
						<div class="col-lg-8 text-center">
							<h2 class="text-8 line-height-4 text-lg-10 line-height-lg-1 font-weight-semibold ls-0 mt-5">Create your new website now!</h2>
							<p class="text-4 font-weight-normal px-3 mb-5">Porto Admin Integration - 100% Fully Responsive - Retina Ready - Google Fonts - Super Fast Top-Level Support - Customizable - RTL Support - SEO Friendly</p>
							<a href="#" target="_blank" class="btn btn-primary px-5 py-3 font-weight-semibold text-color-light rounded-0 mt-3 mb-5">GET STARTED NOW <i class="fas fa-arrow-right ml-2"></i></a>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-49', ['key' => 'footer-copyright.footer-copyright-49'])
			</footer>
@endsection
