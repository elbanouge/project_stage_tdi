@extends('porto.app')
@section('header')
@include('porto.partials.header.header-13')
@endsection

@section('main')
<div role="main" class="main">
				
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;" id="home">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1630, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'mouse', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
						<ul>
							<li class="slide-overlay" data-transition="fade">
								<img src="img/demos/architecture-interior/slides/slide-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="tp-caption rs-parallaxlevel-4" data-frames='[{"from":"opacity:0;","speed":300,"to":"opacity:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]' data-x="center" data-hoffset="['-150','-150','-150','-150']" data-y="center" data-voffset="['-20','-20','-20','-20']" data-width="['430','430','630','830]" data-height="['330','330','530','730']">
										<svg class="custom-square-1 custom-transition-1 custom-mobile-square-thickness" width="100%" height="100%">
											<rect width="100%" height="100%" fill="none" stroke-width="40" stroke="#000"></rect>
										</svg>
									</div>

								<h1 class="tp-caption font-weight-bold text-color-light ws-normal rs-parallaxlevel-3" data-frames='[{"from":"opacity:0;y:[50%];","speed":2000,"to":"opacity:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]' data-x="center" data-hoffset="['0','0','30','30']" data-y="center" data-voffset="['-55','-55','-85','-120']" data-width="['580','580','780','1000']" data-fontsize="['66','66','86','120']" data-lineheight="['72','72','90','125']">Interior Design &amp; Architecture</h1>

								<div class="tp-caption font-weight-light text-color-light ls-0 rs-parallaxlevel-4" data-frames='[{"from":"opacity:0;y:[50%]","speed":2000,"to":"opacity:0.7;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]' data-x="center" data-hoffset="['-181','-181','-152','-181']" data-y="center" data-voffset="['45','45','45','65']" data-fontsize="['16','16','32','45']" data-lineheight="['20','20','40','50']">Hello, learn more about us.</div>

								<a class="tp-caption d-inline-flex align-items-center btn btn-dark font-weight-bold rounded ls-0 rs-parallaxlevel-2" data-hash data-hash-offset="95" href="#whoweare" data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"x:-50%;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="['center','center','center','center']" data-hoffset="['-5','-5','25','45']" data-y="center" data-voffset="['125','125','210','275']" data-paddingtop="['20','20','30','40']" data-paddingbottom="['20','20','30','40']" data-paddingleft="['68','68','68','95']" data-paddingright="['15','15','15','25']" data-fontsize="['16','16','23','45']" data-lineheight="['20','20','26','50']">WHO WE ARE <i class="fas fa-arrow-right ml-4 pl-3 mr-2 text-4"></i></a>

							</li>
							<li class="slide-overlay" data-transition="fade">
								<img src="img/demos/architecture-interior/slides/slide-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<h2 class="tp-caption text-center font-weight-bold text-color-light ws-normal rs-parallaxlevel-3" data-frames='[{"from":"opacity:0;y:[50%];","speed":2000,"to":"opacity:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]' data-x="center" data-hoffset="['0','0','30','30']" data-y="center" data-voffset="['-55','-55','-85','-120']" data-width="['580','580','780','1000']" data-fontsize="['66','66','86','120']" data-lineheight="['72','72','90','125']">The Power of Design to make a Better World</h2>

								<a class="tp-caption d-inline-flex align-items-center btn btn-dark font-weight-bold rounded ls-0 rs-parallaxlevel-2" data-hash data-hash-offset="95" href="#contactus" data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"x:-50%;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="['center','center','center','center']" data-hoffset="['-5','-5','25','45']" data-y="center" data-voffset="['125','125','210','275']" data-paddingtop="['20','20','30','40']" data-paddingbottom="['20','20','30','40']" data-paddingleft="['68','68','68','95']" data-paddingright="['15','15','15','25']" data-fontsize="['16','16','23','45']" data-lineheight="['20','20','26','50']">CONTACT US <i class="fas fa-arrow-right ml-4 pl-3 mr-2 text-4"></i></a>

							</li>
						</ul>
					</div>
				</div>

				<section class="section section-height-5 bg-light border-0 m-0" id="whoweare">
					<div class="container container-xl-custom">
						<div class="row align-items-center">
							<div class="col-lg-6 mb-5 mb-lg-0">
								<div class="overflow-hidden">
									<span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">WHO WE ARE</span>
								</div>
								<div class="overflow-hidden mb-3">
									<h2 class="text-color-dark font-weight-extra-bold text-11 negative-ls-1 line-height-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">We design for amazing people</h2>
								</div>
								<p class="text-4 line-height-9 pr-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam id varius nunc. Vivamus bibendum mex, et faucibus lacus venena bibendum mex, et faucibus lacus.</p>
								<a href="demo-architecture-interior-who-we-are.html" class="btn btn-dark btn-outline font-weight-extra-bold text-3 px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">LEARN MORE</a>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-6 col-xl-4 order-1">
										<img src="img/demos/architecture-interior/others/others-1.jpg" class="img-fluid appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="3000" alt="">
									</div>
									<div class="col-12 col-xl-4 order-3 order-xl-2">
										<div class="h-100 d-flex align-items-center position-relative px-4 py-4 py-xl-0 mt-4 mt-xl-0">
											<svg class="custom-square-1 custom-square-top-right z-index-0" width="80" height="80" data-appear-animation-svg="true">
												<rect class="lineProgressFrom appear-animation" data-appear-animation="lineProgressTo" data-appear-animation-duration="3s" width="80" height="80" fill="none" stroke-width="13" stroke="#000"></rect>
											</svg>
											<svg class="custom-square-1 custom-square-1-no-pos z-index-0" width="100%" height="100%" data-appear-animation-svg="true">
												<rect class="lineProgressAndFillFrom appear-animation" data-appear-animation="lineProgressAndFillTo" data-appear-animation-duration="3s" width="100%" height="100%" fill="none" stroke-width="13" stroke="#000"></rect>
											</svg>
											<p class="text-color-light line-height-9 text-center text-4 z-index-1 custom-responsive-text-size-1 mb-0 px-2">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa enim. Nullam id varius nunc. Vivamus bibendum mex.</p>
										</div>
									</div>
									<div class="col-6 col-xl-4 order-2 order-xl-3">
										<img src="img/demos/architecture-interior/others/others-2.jpg" class="img-fluid appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="3000" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 bg-quaternary border-0 m-0 appear-animation" data-appear-animation="fadeIn" id="ourservices">
					<div class="container container-xl-custom">
						<div class="row">
							<div class="col text-center">
								<div class="overflow-hidden">
									<span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">WHAT WE DO</span>
								</div>
								<div class="overflow-hidden mb-4">
									<h2 class="text-color-light font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Services</h2>
								</div>
							</div>
						</div>
						<div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
							<div class="row mb-2">
								<div class="col-md-6 col-xl-3">
									<a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
										@include('porto.partials.featured-box.featured-box-4', ['key' => 'featured-box.featured-box-4'])
									</a>
								</div>
								<div class="col-md-6 col-xl-3">
									<a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
										@include('porto.partials.featured-box.featured-box-5', ['key' => 'featured-box.featured-box-5'])
									</a>
								</div>
								<div class="col-md-6 col-xl-3">
									<a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
										@include('porto.partials.featured-box.featured-box-6', ['key' => 'featured-box.featured-box-6'])
									</a></div>
								
								<div class="col-md-6 col-xl-3">
									<a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
										@include('porto.partials.featured-box.featured-box-7', ['key' => 'featured-box.featured-box-7'])
									</a></div>
								
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<a data-hash data-hash-offset="95" href="#contactus" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">CONTACT US</a>
							</div>
						</div>
					</div>		
				</section>

				<section class="section section-height-4 bg-light border-0 m-0" id="ourprojects">
					<div class="container container-xl-custom">
						<div class="row justify-content-center">
							<div class="col-lg-9 col-xl-6 text-center">
								<div class="overflow-hidden">
									<span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">THE PORTFOLIO</span>
								</div>
								<div class="overflow-hidden mb-3">
									<h2 class="text-color-dark font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Projects</h2>
								</div>
								<p class="text-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam id varius nunc. Vivamus bibendum mex, et faucibus lacus venena.</p>
							</div>
						</div>
						
						<div id="portfolioLoadMoreWrapper" class="row portfolio-list sort-destination mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-sort-id="portfolio" data-total-pages="3" data-ajax-url="ajax/demo-architecture-interior-ajax-load-more-">

							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-29', ['key' => 'portfolio-item.portfolio-item-29'])
							</div>
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-29', ['key' => 'portfolio-item.portfolio-item-30'])
							</div>
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-31', ['key' => 'portfolio-item.portfolio-item-31'])
							</div>

						</div>

						<div id="portfolioLoadMoreBtnWrapper" class="row">
							<div class="col text-center">

								<div id="portfolioLoadMoreLoader" class="portfolio-load-more-loader" style="min-height: 61px;">
									<div class="bounce-loader">
										<div class="bounce1"></div>
										<div class="bounce2"></div>
										<div class="bounce3"></div>
									</div>
								</div>

								<button id="portfolioLoadMore" class="btn btn-dark btn-outline font-weight-extra-bold text-3 px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter">LOAD MORE</button><a href="demo-architecture-interior-projects.html" class="btn btn-primary btn-outline ml-2 font-weight-extra-bold text-3 px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter">VIEW ALL</a>
							</div>
						</div>
						
					</div>
				</section>

				<section class="section section-parallax section-height-4 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/architecture-interior/backgrounds/background-1.jpg" id="whyhireus">
					<div class="container container-xl-custom pb-5 mb-4">
						<div class="row justify-content-center">
							<div class="col-lg-9 col-xl-6 text-center">
								<span class="text-color-primary custom-font-secondary font-weight-semibold">THE BEST CHOICE</span>
								<h2 class="text-color-light font-weight-bold pb-3 mb-3">Why Hire Us?</h2>
								<p class="font-weight-light text-color-light line-height-9 text-4 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam id varius nunc. Vivamus bibendum mex, et faucibus lacus venena bibendum mex.</p>
							</div>
						</div>
					</div>
				</section>

				<div class="container container-xl-custom custom-negative-margin-top z-index-2 position-relative">
					<div class="row align-items-center justify-content-center">
						<div class="col-sm-6 col-lg-3 col-xl-2 order-2 order-xl-1 mb-4 mb-lg-0">
							<div class="card border-0 custom-box-shadow-1">
								<div class="card-body my-4 my-xl-5">
									<div class="custom-content-rotator">
										<div><img src="img/logos/logo-1.png" class="img-fluid" alt=""></div>
										<div><img src="img/logos/logo-2.png" class="img-fluid" alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 col-xl-2 order-3 order-xl-2 mb-4 mb-lg-0">
							<div class="card border-0 custom-box-shadow-1">
								<div class="card-body my-4 my-xl-5">
									<div class="custom-content-rotator">
										<div><img src="img/logos/logo-3.png" class="img-fluid" alt=""></div>
										<div><img src="img/logos/logo-4.png" class="img-fluid" alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-xl-4 order-1 order-xl-3 mx-lg-5 mx-xl-0 mb-5">
							<div class="card border-0 custom-box-shadow-1">
								<div class="card-body text-center mt-4">
									@include('porto.partials.owl-carousel.owl-carousel-13')
									<a data-hash data-hash-offset="95" href="#contactus" class="btn btn-dark btn-outline font-weight-extra-bold text-3 px-5 py-3 border-width-4 custom-btn-pos-1 custom-btn-style-1">GET A QUOTE</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 col-xl-2 order-4 order-xl-4 mb-4 mb-sm-0">
							<div class="card border-0 custom-box-shadow-1">
								<div class="card-body my-4 my-xl-5">
									<div class="custom-content-rotator">
										<div><img src="img/logos/logo-5.png" class="img-fluid" alt=""></div>
										<div><img src="img/logos/logo-6.png" class="img-fluid" alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 col-xl-2 order-5 order-xl-5 mb-4 mb-sm-0">
							<div class="card border-0 custom-box-shadow-1">
								<div class="card-body my-4 my-xl-5">
									<div class="custom-content-rotator">
										<div><img src="img/logos/logo-7.png" class="img-fluid" alt=""></div>
										<div><img src="img/logos/logo-1.png" class="img-fluid" alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-height-4 bg-light border-0 mt-4 mb-0">
					<div class="container container-xl-custom">
						<div class="row">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-14')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 bg-color-grey-scale-1 border-0 m-0" id="ourblog">
					<div class="container container-xl-custom">
						<div class="row justify-content-center">
							<div class="col-lg-9 col-xl-6 text-center">
								<div class="overflow-hidden">
									<span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">LATEST NEWS</span>
								</div>
								<div class="overflow-hidden mb-3">
									<h2 class="text-color-dark font-weight-bold pb-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Blog</h2>
								</div>
								<p class="font-weight-light text-color-dark line-height-9 text-4 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="350">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
							</div>
						</div>
						<div id="portfolioLoadMoreWrapperBlog" class="row portfolio-list sort-destination pb-2" data-sort-id="portfolio" data-total-pages="3" data-ajax-url="ajax/demo-architecture-interior-blog-ajax-load-more-">

							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-38', ['key' => 'portfolio-item.portfolio-item-38'])
							</div>
							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-39', ['key' => 'portfolio-item.portfolio-item-39'])
							</div>
							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-40', ['key' => 'portfolio-item.portfolio-item-40'])
							</div>

						</div>

						<div id="portfolioLoadMoreBtnWrapperBlog" class="row">
							<div class="col text-center">

								<div id="portfolioLoadMoreLoaderBlog" class="portfolio-load-more-loader" style="min-height: 61px;">
									<div class="bounce-loader">
										<div class="bounce1"></div>
										<div class="bounce2"></div>
										<div class="bounce3"></div>
									</div>
								</div>

								<button id="portfolioLoadMoreBlog" class="btn btn-dark btn-outline font-weight-extra-bold text-3 px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">LOAD MORE</button>
								<a href="demo-architecture-interior-blog.html" class="btn btn-primary btn-outline ml-2 font-weight-extra-bold text-3 px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter">VIEW ALL</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 border-0 m-0" id="ourteam">
					<div class="container container-xl-custom">
						<div class="row justify-content-center">
							<div class="col-lg-9 col-xl-6 text-center">
								<div class="overflow-hidden">
									<span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">THE PRO TEAM</span>
								</div>
								<div class="overflow-hidden mb-3">
									<h2 class="text-color-dark font-weight-bold pb-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Team</h2>
								</div>
								<p class="font-weight-light text-color-dark line-height-9 text-4 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam id varius nunc. Vivamus bibendum mex, et faucibus lacus venena. </p>
							</div>
						</div>
						<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
									<div class="card border-0 custom-box-shadow-1">
										<svg class="custom-square-1 z-index-0" width="80" height="80">
											<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000"></rect>
										</svg>
										<img class="card-img-top z-index-1" src="img/team/team-2.jpg" alt="">
										<div class="card-body">
											<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Michel Doe</h4>
											<p class="card-text">CEO &amp; Founder</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
									<div class="card border-0 custom-box-shadow-1">
										<svg class="custom-square-1 z-index-0" width="80" height="80">
											<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000"></rect>
										</svg>
										<img class="card-img-top z-index-1" src="img/team/team-4.jpg" alt="">
										<div class="card-body">
											<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Jessica Doe</h4>
											<p class="card-text">Architect</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
								<a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
									<div class="card border-0 custom-box-shadow-1">
										<svg class="custom-square-1 z-index-0" width="80" height="80">
											<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000"></rect>
										</svg>
										<img class="card-img-top z-index-1" src="img/team/team-5.jpg" alt="">
										<div class="card-body">
											<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">John Doe</h4>
											<p class="card-text">Architect</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-lg-3">
								<a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
									<div class="card border-0 custom-box-shadow-1">
										<svg class="custom-square-1 z-index-0" width="80" height="80">
											<rect width="80" height="80" fill="none" stroke-width="13" stroke="#000"></rect>
										</svg>
										<img class="card-img-top z-index-1" src="img/team/team-6.jpg" alt="">
										<div class="card-body">
											<h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Alice Doe</h4>
											<p class="card-text">Architect</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 bg-quaternary border-0 m-0" id="contactus">
					<div class="container container-xl-custom">
						<div class="row mb-5">
							<div class="col text-center">
								<span class="text-color-primary custom-font-secondary font-weight-semibold">GET IN TOUCH</span>
								<h2 class="text-color-light font-weight-bold mb-3">Contact Us</h2>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-6 col-xl-4 order-2 order-xl-1 mb-4 mb-lg-0">
								<div class="card custom-card-style-1 h-100">
									<div class="card-body">
										<a href="#" class="text-decoration-none">
											<img src="img/demos/architecture-interior/logo.png" class="img-fluid pb-2 mt-3 mb-4" width="153" height="53" alt="Demo Architecture &amp; Interior Design">
										</a>
										<h3 class="text-color-primary font-weight-bold text-transform-none text-8 line-height-1 pr-5 mb-4">Interior Design &amp; Archtecture</h3>
										<ul class="list list-icons list-icons-sm">
											<li class="text-color-light font-weight-light">
												<i class="fas fa-angle-right custom-text-color-grey-1"></i> <strong class="font-weight-normal">Address:</strong> 1234 Street Name, City Name
											</li>
											<li class="text-color-light font-weight-light">
												<i class="fas fa-angle-right custom-text-color-grey-1"></i> <strong class="font-weight-normal">Email:</strong><a href="mailto:mail@example.com" class="link-hover-style-1 ml-1"> mail@example.com</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-xl-4 order-1 order-xl-2 mb-4 mb-xl-0">
								<div class="card custom-card-style-1 h-100 opacity-10 py-lg-5 py-xl-0" data-appear-animation="customBorderColored" data-appear-animation-delay="500" data-plugin-options="{'accY': -500}">
									<div class="card-body d-flex justify-content-center flex-column text-center">
										<span class="text-color-light text-4 mb-3">CALL US NOW</span>
										<a href="tel:+1234567890" class="text-decoration-none text-color-light font-weight-bold line-height-2 text-11 opacity-10" data-appear-animation="customTextColored" data-appear-animation-delay="500" data-plugin-options="{'accY': -200}">1-800-123-4567</a>
										<a href="tel:+1234567890" class="text-decoration-none text-color-light font-weight-bold line-height-2 text-9">1-800-123-4568</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 order-3">
								<div class="card custom-card-style-1 h-100">
									<div class="card-body pt-5">

										<form class="contact-form form-style-4 form-errors-light" action="php/contact-form.php" method="POST">
											<input type="hidden" value="Contact Form" name="subject" id="subject">
											<div class="form-group col-lg-12 ml-auto my-0">
												<div class="contact-form-success alert alert-success d-none">
													Message has been sent to us.
												</div>

												<div class="contact-form-error alert alert-danger d-none">
													Error sending your message.
													<span class="mail-error-message text-1 d-block"></span>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-lg-6">
													<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control py-2" placeholder="Name" name="name" id="name" required>
												</div>
												<div class="form-group col-lg-6">
													<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control py-2" placeholder="E-mail" name="email" id="email" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" placeholder="Message" name="message" id="message" required></textarea>
												</div>
											</div>
											<input type="submit" value="Send Message" class="btn btn-dark text-2 font-weight-bold text-uppercase btn-px-5 py-3 position-absolute" data-loading-text="Loading..." style="bottom: -30px; right: 25px;">
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-57')
@endsection
