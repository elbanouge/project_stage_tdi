@extends('porto.app')
@section('header')
@include('porto.partials.header.header-351')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url(img/landing/header_bg.jpg); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
					<div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
					<div class="container pt-5 mt-5">
						<div class="row align-items-center pt-3">
							<div class="col-lg-5 mb-5">
								<h5 class="text-primary font-weight-bold mb-1">PORTO HTML5 TEMPLATE</h5>
								<h1 class="font-weight-bold text-12 line-height-2 mb-3">The Best HTML5 Template<span><span class="d-inline-block text-primary highlighted-word highlighted-word-rotate highlighted-word-animation-1 highlighted-word-animation-1-no-animate alternative-font-3 font-weight-bold text-1 ml-2">ever</span></span></h1>
								<p class="custom-font-size-1">Porto is simply the best choice for your new website. The template is several years among the most popular in the world. <a href="#intro" data-hash data-hash-offset="120" class="text-color-light font-weight-semibold text-1 d-block">VIEW MORE <i class="fa fa-long-arrow-alt-right ml-1"></i></a></p>
								@include('porto.partials.lightbox.lightbox-68')

								<div id="popup-content-1" class="dialog dialog-lg zoom-anim-dialog rounded p-3 mfp-hide mfp-close-out">
									<div class="embed-responsive embed-responsive-4by3">
										<video id="popupPresentation" class="float-left" width="100%" height="100%" muted playsinline loop preload="metadata" poster="video/presentation.jpg">
										  	<source src="video/presentation.webm" type="video/webm">
										  	<source src="video/presentation.mp4" type="video/mp4">
										</source></source></video>
									</div>
								</div>
							</div>
							<div class="col-lg-6 offset-lg-1 mb-5">
								<div class="position-relative border-width-10 border-color-light clearfix border border-radius" data-remove-min-height style="min-height: 446px;">
									<video id="presentation" class="float-left" width="100%" height="100%" muted playsinline loop preload="metadata" poster="video/presentation.jpg" data-auto-play="true">
									  	<source src="video/presentation.webm" type="video/webm">
									  	<source src="video/presentation.mp4" type="video/mp4">
									</source></source></video>
									<a href="#" class="position-absolute top-50pct left-50pct transform3dxy-n50 bg-light rounded-circle d-flex align-items-center justify-content-center text-decoration-none bg-color-hover-primary text-color-hover-light play-button-lg pulseAnim pulseAnimAnimated" data-trigger-play-video="#presentation" data-trigger-play-video-remove="yes">
										<i class="fas fa-play text-5"></i>
									</a>
								</div>
							</div>
							<div class="col-md-8 col-lg-6 col-xl-5 custom-header-bar py-4 pr-5 z-index-2">
								<div>
									<div class="star-rating-wrap d-flex align-items-center justify-content-center position-relative text-dark text-5 py-2 mb-2">
										<i class="fas fa-star"></i><i class="fas fa-star ml-1"></i><i class="fas fa-star ml-1"></i><i class="fas fa-star ml-1"></i><i class="fas fa-star ml-1"></i>
									</div>

									<h4 class="position-relative text-center font-weight-bold text-7 line-height-2 mb-0">Popular HTML5 Site Template</h4>

									<p class="position-relative text-center font-weight-normal mb-1">* Aproved by 40k buyers since 2013</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="intro" class="section section-no-border section-angled bg-light pt-0 pb-5 m-0">
					<div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div>
					<div class="container pb-5" style="min-height: 1000px;">
						<div class="row mb-5 pb-lg-3 counters">
							<div class="col-lg-10 text-center offset-lg-1">
								<h2 class="font-weight-bold text-9 mb-0">The Perfect Template for<br>Beginners or Professionals</h2>
								<p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">YOUR WEBSITE TO <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">A NEW LEVEL</span></p>
								<p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5">Porto is simply a better choice for your new website design. The template is several years among the most popular in the world, being constantly improved and following the trends of design and best practices of code. Your search for the best solution is over, get your own copy and join tens of thousands of happy customers.</p>
							</div>
							@include('porto.partials.counter.counter-147')
							@include('porto.partials.counter.counter-148')
						</div>
						<div class="intro row align-items-center justify-content-center justify-content-md-start">
							<div class="col-3 pr-0 pl-3 z-index-2">
								<img src="img/lazy.png" data-src="img/landing/intro2.jpg" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded d-none d-md-block appear-animation" alt="Screenshot 2" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
								<div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="900" style="bottom: -60px; right: -90px;">
									<span class="arrow hlt" style="margin-right: -70px;"></span>
									<strong class="text-color-dark mb-4 pb-3">modern designs!</strong>
								</div>
							</div>
							<div class="col-11 col-md-9 pl-0 pr-5 pb-5 pb-md-0 mb-5 mb-md-0">
								<div class="intro2 pt-5 pt-md-0 mt-5 mt-lg-0 appear-animation pr-5" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><img src="img/lazy.png" data-src="img/landing/intro1.jpg" class="lazyload img-fluid box-shadow-3 position-relative z-index-1 rounded" alt="Screenshot 1" style="left: -110px;"></div>
								<div class="intro3 z-index-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="800" style="top: 20%; right: 4%;">
									<img src="img/lazy.png" data-src="img/landing/intro3.jpg" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded" alt="Screenshot 3">
									<div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="bottom: -135px; right: -20px;">
										<strong class="text-color-dark mb-3">a lot of demos!</strong>
										<span class="arrow hru"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border pb-0 m-0">
					<div class="container">
						<div class="row align-items-center justify-content-between">
							<div class="col-lg-4">
								<h2 class="text-7 font-weight-semibold line-height-2 mb-2">The new generation of website templates is here.</h2>
								<p>A complete suite of tools designed to make life easier with a top quality website templates.</p>
							</div>
							<div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
								<i class="icon-bg icon-1"></i>
								<h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Super High<br>Performance</h4>
							</div>
							<div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
								<i class="icon-bg icon-2"></i>
								<h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Created with Top<br>Plugins and Extensions</h4>
							</div>
							<div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
								<i class="icon-bg icon-3"></i>
								<h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Extremely Easy<br>to Customize</h4>
							</div>
							<div class="col-sm-12">
								<hr class="my-5">
								<h2 class="font-weight-bold text-center text-10 pt-3 mb-4">The Most Customizable + Solid and Tested Base</h2>
							</div>
							<div class="col-lg-8 offset-lg-2 px-lg-0 text-center">
								<p class="text-4">Porto has a huge variety of options and features to create your site, it has also a very solid based that is being improved and tested by professional developers since 2013.</p>
							</div>
						</div>
						<div class="image-wrapper position-relative z-index-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
							<img src="img/lazy.png" data-src="img/landing/theme_options.png" class="lazyload img-fluid" alt="The Most Customizable Template">
						</div>
					</div>
				</section>

				<section class="section section-no-border section-angled section-dark pb-0 m-0" style="background-repeat: no-repeat; background-color: #0169fe !important;" data-src="img/landing/reason_bg.png">
					<div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
					<div class="spacer py-md-4 my-md-5"></div>
					<div class="container pt-5 mt-5">
						<div class="row align-items-center pt-md-5 mt-5">
							<div class="col-lg-6 offset-lg-1 mb-5">
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
									<img src="img/lazy.png" data-src="img/landing/porto_dots.png" width="154" height="146" class="lazyload position-absolute top-auto" alt="6 reasons" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}" style="bottom: 184px; left: 70px;">
								</div>
								<div class="text-reasons">
									<label class="text-color-light appear-animation z-index-1" data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750">6</label>
									<h3 class="text-4 text-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450" data-appear-animation-duration="750">Reasons</h3>
									<h3 class="text-4 text-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">Why you should choose</h3>
									<h3 class="text-4 text-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950" data-appear-animation-duration="750"><span class="highlight-word light">Porto</span></h3>
								</div>
							</div>
							<div class="col-lg-5 col-xl-4 pl-lg-4 pl-xl-5 mb-5">
								<h2 class="text-6 font-weight-semibold line-height-2 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1150" data-appear-animation-duration="750">With Porto your satisfaction is guaranteed.</h2>
								<p class="custom-text-color-1 line-height-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350" data-appear-animation-duration="750">We have selected the 6 top reasons to choose Porto. Check below:</p>
							</div>
						</div>
						<div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
							<div class="col-lg-11">	
								<div class="row justify-content-center">
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
										<img class="lazyload img-fluid" alt="Speed Performance" src="img/lazy.png" data-src="img/landing/reason1.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">1</span>
											<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">OPTIMIZED FOR</small>Speed Performance</h4>
										</div>
										<p class="pr-5 custom-text-color-1">Choose Porto and make your site at high performance. We know your website must the fast as possible.</p>
									</div>
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
										<img class="lazyload img-fluid" alt="Solid and tested base" src="img/lazy.png" data-src="img/landing/reason2.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">2</span>
											<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">THE MOST</small>Solid and Tested Base</h4>
										</div>
										<p class="pr-5 custom-text-color-1">Porto has a very solid development base that has been improved since 2013 by our best developers.</p>
									</div>
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">
										<img class="lazyload img-fluid" alt="Top designs created by usability specialists" src="img/lazy.png" data-src="img/landing/reason3.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">3</span>
											<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">TOP DESIGNS CREATED BY</small>Usability Specialists</h4>
										</div>
										<p class="pr-5 custom-text-color-1">The designs of all pages and all demos included in Porto were created by usability experts and modern designs standards.</p>
									</div>
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="750">
										<img class="lazyload img-fluid" alt="The best customer experience" src="img/lazy.png" data-src="img/landing/reason4.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">4</span>
											<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">THE BEST</small>Customer Experience</h4>
										</div>
										<p class="pr-5 custom-text-color-1">4.85 average rating based on 2.5k+ review proves that Porto is loved by our customers.</p>
									</div>
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
										<img class="lazyload img-fluid" alt="Works perfectly with Porto Admin Template" src="img/lazy.png" data-src="img/landing/reason5.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">5</span>
											<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">WORKS PERFECTLY WITH</small>Porto Admin Template</h4>
										</div>
										<p class="pr-5 custom-text-color-1">With Porto Admin you can create your back-end panel with same design as the front-end site. Learn more in the next section.</p>
									</div>
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" data-appear-animation-duration="750">
										<img class="lazyload img-fluid" alt="Always keep template updates" src="img/lazy.png" data-src="img/landing/reason6.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">6</span>
											<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">ALWAYS KEEP</small>Template Updates</h4>
										</div>
										<p class="pr-5 custom-text-color-1">Lifetime regular update makes porto always "best" compared to other competitors.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center">
							<a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="btn btn-dark btn-rounded btn-modern btn-px-5 text-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" target="_blank">BUY PORTO NOW!</a>
						</div>
					</div>
				</section>

				<section class="section section-no-border section-angled bg-color-light-scale-1 m-0">
					<div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 5rem 0; background-color: #0169fe;"></div>
					<div class="container py-5 my-5">
						<div class="row align-items-center text-center my-5">
							<div class="col-md-6">
								<h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Introducing Porto Admin</h2>
								<p class="font-weight-semibold text-primary text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">ADMIN WITH SAME LOOK FEEL AS THE FRONT-END</p>
								<p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">Porto Admin integration give you a package of new features to add in the front-end template, such as advanced tables, advanced forms, etc... Also allows you to create the back-end of your site using the same design.</p>
								<a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="btn btn-modern btn-gradient btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750" target="_blank">VIEW PORTO ADMIN</a>
								<p class="appear-animation text-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">* Porto Admin <strong class="text-dark">is not included</strong> in the front-end and is available for $16.</p>
							</div>
							<div class="col-md-6 py-5">
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
									<img class="lazyload" src="img/lazy.png" data-src="img/landing/porto_dots2.png" alt="" width="149" height="142" style="position: absolute; top: -60px; right: -8%;">
								</div>
								<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750">
									<div class="strong-shadow rounded strong-shadow-top-right">
										<img src="img/lazy.png" data-src="img/landing/porto_admin.jpg" class="lazyload img-fluid border border-width-10 border-color-light rounded box-shadow-3" alt="Porto Admin">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section border-0 section-dark section-angled section-angled-reverse section-funnel m-0 position-relative overflow-visible lazyload" style="background-image: url(img/lazy.png); background-size: 100%; background-position: top; background-repeat: no-repeat;" data-bg-src="img/landing/porto_performance_bg.png">
					<div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 5rem 0; background-color: #22252a;"></div>
					<svg version="1.1" viewbox="500 200 600 900" width="1920" height="100%" xmlns="http://www.w3.org/2000/svg" class="background-svg-style-1" style="top: 120px;">
						<defs>
							<filter id="shadow" x="-300%" y="-300%" width="600%" height="600%">
							<fedropshadow dx="0" dy="0" stddeviation="10 10" flood-color="#08c" radius="10" flood-opacity="1"></fedropshadow>
							</filter>
						</defs>
						<path id="svg_17" d="m1644.875212,897.875106l-1684.875221,-0.374889l1.25,-446.250108c-1.25,0.372765 496.124925,24.124892 496.124925,24.124892c0,0 255.000064,-106.250026 253.875257,-106.624912c1.124807,0.374885 129.874839,-2.125116 128.750031,-2.500001c1.124808,0.374885 112.374836,-32.125123 111.250027,-32.500008c1.124809,0.374885 144.874844,21.62489 144.874844,21.62489c0,0 128.750032,-73.750018 127.625222,-74.124903c1.124811,0.374884 133.624844,9.124887 133.624844,9.124887c0,0 108.750027,35.000009 108.750027,35.000009c0,0 178.750045,-125.000031 177.625231,-125.374915" opacity="0.5" stroke-opacity="null" stroke-width="0" stroke="#191b1e" fill="#191b1e" fill-opacity="0.4"></path>
						<path id="svg_6" d="m1663.83437,909.61168l-1704.94553,-0.72172l1.11111,-486.66724l648.88966,30.00004l105.55568,-41.11116l126.66682,1.11111l122.22236,-34.44449l126.66682,14.44447c0.49906,0.72171 126.05477,-64.83392 126.05477,-64.83392c0,0 128.88904,4.44445 128.38998,3.72273c0.49906,0.72172 118.27698,28.49953 118.27698,28.49953c0,0 173.33353,-108.88902 172.83447,-109.61073" stroke-opacity="null" stroke-width="0" stroke="#1a1b1f" fill="#1a1b1f" fill-opacity="0.4"></path>
						<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250" stroke="#000" ry="3.5" rx="3.5" id="svg_9" cy="453.023736" cx="609.150561" stroke-opacity="null" stroke-width="0" fill="#fff"></ellipse>
						<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="453.023736" cx="609.150561" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 101.5% 50.4%;"></circle>

						<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500" stroke="#000" ry="3.5" rx="3.5" id="svg_10" cy="411.595173" cx="715.341014" stroke-opacity="null" stroke-width="0" fill="#fff"></ellipse>
						<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="411.595173" cx="715.341014" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 119.2% 45.7%;"></circle>

						<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750" stroke="#000" ry="3.5" rx="3.5" id="svg_11" cy="412.071364" cx="841.05527" stroke-opacity="null" stroke-width="0" fill="#fff"></ellipse>
						<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="412.071364" cx="841.05527" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 140.1% 45.7%;"></circle>

						<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" stroke="#000" ry="3.5" rx="3.5" id="svg_12" cy="378.261847" cx="964.388575" stroke-opacity="null" stroke-width="0" fill="#fff"></ellipse>
						<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="378.261847" cx="964.388575" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 160.7% 42%;"></circle>

						<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1250" stroke="#000" ry="3.5" rx="3.5" id="svg_13" cy="391.595177" cx="1090.102832" stroke-opacity="null" stroke-width="0" fill="#fff"></ellipse>
						<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="391.595177" cx="1090.102832" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 181.6% 43.5%;"></circle>

						<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1500" stroke="#000" ry="3.5" rx="3.5" id="svg_14" cy="327.706436" cx="1216.769206" stroke-opacity="null" stroke-width="0" fill="#fff"></ellipse>
						<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="327.706436" cx="1216.769206" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 202.8% 36.4%;"></circle>

						<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1750" stroke="#000" ry="3.5" rx="3.5" id="svg_15" cy="332.150871" cx="1346.213343" stroke-opacity="null" stroke-width="0" fill="#fff"></ellipse>
						<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="332.150871" cx="1346.213343" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 224.3% 36.9%;"></circle>

						<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2000" stroke="#000" ry="3.5" rx="3.5" id="svg_16" cy="358.26192" cx="1463.43529" stroke-opacity="null" stroke-width="0" fill="#fff"></ellipse>
						<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="358.26192" cx="1463.43529" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 243.8% 39.8%;"></circle>

						<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2250" stroke="#000" ry="3.5" rx="3.5" id="svg_7" cy="278.817661" cx="1589.546107" stroke-opacity="null" stroke-width="0" fill="#fff"></ellipse>
						<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="278.817661" cx="1589.546107" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 264.6% 30.9%;"></circle>

						
					</svg>
					<img class="img-fluid position-absolute d-none d-lg-block lazyload appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="750" src="img/lazy.png" data-src="img/landing/porto_notebook.png" alt="Performance on Laptop" style="display: block; top: -170px; left: 90px;">
					<div class="container text-center py-5 mb-5">
						<div class="row justify-content-center pb-md-5 mb-md-5">
							<div class="col-md-7 offset-lg-5 pb-md-5 mb-md-5">
								<h2 class="font-weight-bold text-9 appear-animation mb-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Top Performance</h2>
								<p class="custom-text-color-1 color-inherit mb-4 pb-lg-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">Porto has high performance base, all structure are focusing on performance as main point. Porto speed optimization is super fast compared to other templates.</p>
							</div>
						</div>
						<div class="row align-items-center pb-md-5 mb-md-5">
							<div class="col-12 col-md-7 text-center mt-5">
								<h2 class="font-weight-bold text-7 text-md-6 text-lg-9 pt-5 pt-md-4 mt-5 mb-lg-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Works Perfectly on <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-bold"> Any </span> Device!</h2>
								<p class="custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">We believe you will face lots of traffic from mobile device users not only from desktop or laptop users. Porto is the best solution for you, works fine on any screen resolutions and mobile devices. Try Porto and see how it works!</p>
							</div>
							<div class="col-5 d-none d-md-block">
								<div class="text-right mr-3 mr-lg-5 ml-auto mb-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600" data-appear-animation-duration="750" style="max-width: 244px;" data-plugin-options="{'accY': -100}">
									<img class="img-fluid lazyload" src="img/lazy.png" data-src="img/landing/porto_iphone.png" width="244" height="228" alt="Performance on Mobile">
								</div>
								<img class="img-fluid appear-animation z-index-1 position-relative lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800" data-appear-animation-duration="750" src="img/lazy.png" data-src="img/landing/porto_ipad.png" width="437" height="241" alt="Performance on Tablet" style="margin-bottom: -10%">
							</div>
						</div>
					</div>
					<div class="section-funnel-layer-bottom">
						<div class="section-funnel-layer bg-light"></div>
						<div class="section-funnel-layer bg-light"></div>
					</div>
				</section>

				<section id="demos" class="section section-no-border section-light position-relative z-index-3 pt-0 m-0">
					<div class="container">
						<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">
							<div class="col-lg-8 offset-lg-2 text-center">
								<ul class="list list-unstyled d-flex justify-content-center text-primary font-weight-semibold positive-ls-2 flex-column flex-md-row text-4 mb-4">
									<li>1. SELECT DEMO</li>
									<li class="mx-5">2. CUSTOMIZE</li>
									<li>3. DONE</li>
								</ul>
								<p class="text-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">Porto is a truely complete template, with over 80 demos that make it suitable for any type of website. We believe you will like Porto.</p>
								<p class="d-flex align-items-center justify-content-center font-weight-bold text-color-dark text-8 negative-ls-1 pb-3 mb-4 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600"><span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1-2-dark highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-extra-bold line-height-1 text-9 mr-3">80+</span> Demos Ready to Use</p>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
							<div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
								@include('porto.partials.nav-pills.nav-pills-32')
							</div>
						</div>
						<div class="row portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4" data-sort-id="portfolio">


								<div class="porto.partialsl-lg-3 col-xl-1-5 isotope-item classic">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-108', ['key' => 'portfolio-item.portfolio-item-108'])
									</div>
								</div>
porto.partials



								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage">
									<div class=porto.partialsata-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-109'])
									</div>
								</div>

porto.partials


								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-110'])
									</div>
								</div>


porto.partials

								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-111'])
									</div>porto.partials
								</div>



porto.partials
								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-112'])
									</div>
								</div>porto.partials




								<div class="porto.partialsl-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-113'])
									</div>
								</div>
porto.partials



								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class=porto.partialsata-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-114'])
									</div>
								</div>

porto.partials


								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-115'])
									</div>
								</div>


porto.partials

								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-116'])
									</div>porto.partials
								</div>



porto.partials
								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-117'])
									</div>
								</div>porto.partials




								<div class="porto.partialsl-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-118'])
									</div>
								</div>
porto.partials



								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class=porto.partialsata-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-119'])
									</div>
								</div>

porto.partials


								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-120'])
									</div>
								</div>


porto.partials

								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-121'])
									</div>porto.partials
								</div>



porto.partials
								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-122'])
									</div>
								</div>porto.partials




								<div class="porto.partialsl-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-123'])
									</div>
								</div>
porto.partials



								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class=porto.partialsata-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-124'])
									</div>
								</div>

porto.partials


								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-125'])
									</div>
								</div>


porto.partials

								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-126'])
									</div>porto.partials
								</div>



porto.partials
								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-127'])
									</div>
								</div>porto.partials




								<div class="porto.partialsl-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-128'])
									</div>
								</div>
porto.partials



								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class=porto.partialsata-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-129'])
									</div>
								</div>

porto.partials


								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-130'])
									</div>
								</div>


porto.partials

								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-131'])
									</div>porto.partials
								</div>



porto.partials
								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-132'])
									</div>
								</div>porto.partials




								<div class="porto.partialsl-lg-3 col-xl-1-5 isotope-item portfolio">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-133'])
									</div>
								</div>
porto.partials



								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
									<div class=porto.partialsata-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-134'])
									</div>
								</div>

porto.partials


								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-135'])
									</div>
								</div>


porto.partials

								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-136'])
									</div>porto.partials
								</div>



porto.partials
								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-137'])
									</div>
								</div>porto.partials




								<div class="porto.partialsl-lg-3 col-xl-1-5 isotope-item blog">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-138'])
									</div>
								</div>
porto.partials



								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
									<div class=porto.partialsata-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-139'])
									</div>
								</div>

porto.partials


								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-140'])
									</div>
								</div>


porto.partials

								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-141'])
									</div>porto.partials
								</div>



porto.partials
								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-142'])
									</div>
								</div>porto.partials




								<div class="porto.partialsl-lg-3 col-xl-1-5 isotope-item classic">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-143'])
									</div>
								</div>
porto.partials



								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
									<div class=porto.partialsata-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-144'])
									</div>
								</div>

porto.partials


								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-145'])
									</div>
								</div>


porto.partials

								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-146'])
									</div>porto.partials
								</div>



porto.partials
								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-147'])
									</div>
								</div>porto.partials




								<div class="porto.partialsl-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-148'])
									</div>
								</div>
porto.partials



								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
									<div class=porto.partialsata-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-149')
									</div>
								</div>

porto.partials


								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-150'])
									</div>
								</div>


porto.partials

								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-151'])
									</div>porto.partials
								</div>



porto.partials
								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-152')
									</div>
								</div>porto.partials




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-153'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-154'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-155'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-156'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-157'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-158'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-159'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item shop">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-160'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-161'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-162'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-163')
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-164')
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-165'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-166'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-167'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-168'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-169'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-170'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-171'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-172')
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-173'])
									</div>
								</div>




	
								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio creative">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-174')
									</div>
								</div>



								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-175'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-176'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item creative business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-177'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-178'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-179'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage creative business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-180'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage creative">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-181'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-182'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-183'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-184'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-185'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-186'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-109', ['key' => 'portfolio-item.portfolio-item-187'])
									</div>
								</div>




								<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
										@include('porto.partials.portfolio-item.portfolio-item-188')
									</div>
								</div>



						</div>
					</div>
				</section>

				<section class="section section-angled section-angled-reverse border-0 m-0 bg-dark section-dark" style="background-size: 100%; background-position: top;" data-bg-src="img/landing/header_builder_bg.jpg">
					<div class="section-angled-layer-top section-angled-layer-increase-angle bg-light" style="padding: 4rem 0;"></div>
					<div class="container py-5 mt-5">
						<div class="row align-items-center mt-4 pt-2">
							<div class="col-lg-6 pr-lg-5 position-relative text-center mb-5 mb-lg-0">
								<img alt="Porto Headers" src="img/lazy.png" data-src="img/landing/porto_headers.png" class="img-fluid lazyload appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							</div>
							<div class="col-lg-5 text-center px-lg-0">
								<h5 class="text-primary font-weight-semibold positive-ls-2 text-4 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">ADVANCED USABILITY-FOCUSED </h5>
								<h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">Headers and Menus</h2>
								<p class="custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">Porto comes with several headers and menus options for you to use on your website. We have created several options always focused on the best user experience to improve your business.</p>
								<p class="custom-text-color-1 color-inherit pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">Select any of the options we have giver you or create your own.</p>
								<div class="d-flex align-items-center justify-content-center">
									<i class="fa fa-check text-color-primary bg-light rounded-circle p-2 mr-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600" data-appear-animation-duration="750"></i>
									<p class="mb-0 line-height-5 ls-0 text-color-light font-weight-semibold appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1300" data-appear-animation-duration="750">Menus, Nav Icons, Search Icons, Mini Cart,<br>Account Items, Search and much more...</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-funnel border-0 bg-light lazyload m-0" style="background-size: 100%; background-repeat: no-repeat; background-position: top;" data-bg-src="img/landing/half_circle.png">
					<div class="container text-center pb-5 mt-3 mb-5">
						<h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Layouts</h2>
						<h5 class="text-primary font-weight-semibold positive-ls-2 text-4 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">GIANT LIBRARY OF VARIATIONS</h5>
						<p class="text-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">Giant variety of layouts to create your site with unlimited possibilities.</p>
						<div class="row flex-column flex-lg-row justify-content-center align-items-center my-5">
							<div class="col-8 col-md-5 col-lg-3 image-box mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
								<div class="image mb-3">
									<img alt="Layouts" width="195" height="161" src="img/lazy.png" data-src="img/landing/porto_layouts1.png" class="position-relative z-index-3 lazyload mr-auto" style="width: 67.47%; left: -51px;">
									<img alt="Layouts" width="174" height="161" src="img/lazy.png" data-src="img/landing/porto_layouts3.png" class="position-relative z-index-1 lazyload ml-auto" style="width: 60.2%; margin-top: -32%; right: -50px;">
									<img alt="Layouts" width="174" height="161" src="img/lazy.png" data-src="img/landing/porto_layouts3.png" class="position-relative z-index-2 lazyload mx-auto" style="width: 60.2%; margin-top: -13%;">
								</div>
								<h4 class="text-dark font-weight-bold pt-2 mb-1">Layouts</h4>
								<p class="fs-md text-3 px-lg-4">Max Width 1200px, 1170px, 1024px,<br> full width, etc...</p>
							</div>
							<div class="col-8 col-md-5 col-lg-3 image-box mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
								<div class="image mb-3">
									<img alt="Sidebars" width="172" height="161" src="img/lazy.png" data-src="img/landing/porto_sidebars1.png" class="position-relative z-index-1 lazyload ml-auto" style="right: -33px;">
									<img alt="Sidebars" width="172" height="161" src="img/lazy.png" data-src="img/landing/porto_sidebars2.png" class="position-relative z-index-2 lazyload" style="left: -19px; margin-top: -32%;">
									<img alt="Sidebars" width="172" height="161" src="img/lazy.png" data-src="img/landing/porto_sidebars3.png" class="position-relative z-index-3 lazyload ml-auto" style="right: -20px; margin-top: -13%;">
								</div>
								<h4 class="text-dark font-weight-bold pt-2 mb-1">Sidebars</h4>
								<p class="fs-md text-3 px-lg-4">Sidebar can be set to be on left, right, both or even disabled.</p>
							</div>porto.partials
							<div class="col-8 col-md-5 col-lg-3 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">
								<div class="image mb-3">
									<img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders1.png" class="position-relative z-index-1 lazyload" style="left: -31px;">
									<img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders2.png" class="position-relative z-index-2 lazyload ml-auto" style="right: -60px; margin-top: -31%">
									<img alt="porto.partials height="161" src="img/lazy.png" data-src="img/landing/porto_sliders3.png" class="position-relative z-index-3 lazyload ml-auto" style="margin-right: 15%; margin-top: -41%;">
									<img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders4.png" class="position-relative z-index-4 lazyload" style="left: -50px; margin-top: -35.67%;">
								</div>
								<h4 class="text-dark font-weight-bold pt-2 mb-1">Sliders</h4>
								<p class="fs-md text-3 px-lg-4">You can set several different types of sliders, boxed, full, grid, etc..</p>
							</div>porto.partials
						</div>
					</div>
					<div class="section-funnel-layer-bottom">
						<div class="section-funnel-layer bg-color-light-scale-1"></div>
						<div class="sporto.partialsbg-color-light-scale-1"></div>
					</div>
				</section>

				<section class="section section-funnel position-relative border-0 pt-0 m-0">
					<div class="coporto.partials
						<h2 class="fotn-weight-extra-bold mb-1 text-center">
							<b class="text-13 d-block line-height-1 font-weight-extra-bold appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750">40K+</b>
							<span class="font-weight-bold text-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">People Already Using Porto</span>
						</h2>
						<p class="fonporto.partials text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">100K+ IN ALL PORTO VERSIONS</p>
						<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850" data-appear-animation-duration="850">
							<h5 class="font-weight-semibold positive-ls-2 text-4 text-primary text-center mb-0">TOP 5 STAR RATING</h5>
							<p class="text-default text-center mb-4">Real people, real stories. Hear from our community.</p>
							
							<div class="porto.partialsl-center-active-item-2 nav-style-4 mb-4 pb-3" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false}">
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
										<div class="author">
											<h4 class="text-5 mb-0">onealbs</h4>
											<span clporto.partialseforest User</span>
										</div>
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i classporto.partialsolor-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>
									<p class="porto.partialssed this template four times for different projects and will soon be purchasing my fifth. This options for this template are limitless and customer service is amazing!"</p>
								</div>	
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
										<div class="author">
											<h4 clasporto.partialslton</h4>
											<span class="opacity-7">Themeforest User</span>
										</div>
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i classporto.partialsolor-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>porto.partials
									<p class="mb-0">"This template is pure joy to work with and customize. Everything is designed so clearly and it just makes your life easier to design a site. Highly recommend."</p>
								</div>
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
										<div clasporto.partials
											<h4 class="text-5 mb-0">daniyal1997</h4>
											<span class="opacity-7">Themeforest User</span>
										</div>
										<span class="star-rating">
											<i classporto.partialsolor-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>porto.partials
									</div>
									<p class="mb-0">"This theme continues to blow my mind! I can't believe how many features and layouts that are included and yet how elegantly it's all executed underneath."</p>
								</div>
								<div>
									<div classporto.partials flex-md-row justify-content-between mb-4">
										<div class="author">
											<h4 class="text-5 mb-0">alfvlx</h4>
											<span class="opacity-7">Themeforest User</span>
										</div>
										<span claporto.partials
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i classporto.partialsolor-dark"></i>
										</span>
									</div>
									<p class="mb-0">"The best template i had work on!!!!!"</p>
								</div>
								<div>porto.partials
									<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
										<div class="author">
											<h4 class="text-5 mb-0">marcoss2009</h4>
											<span class="opacity-7">Themeforest User</span>
										</div>porto.partials
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i classporto.partialsolor-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>
									<p class="mb-0">"The best theme in Themeforest. I like it because I can customize it without problems."</p>
								</div>porto.partials
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
										<div class="author">
											<h4 class="text-5 mb-0">moirajanetallen</h4>
											<span clporto.partialseforest User</span>
										</div>
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i classporto.partialsolor-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>
									<p class="porto.partialsd with the great customer support."</p>
								</div>
								
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
										<div clasporto.partials
											<h4 class="text-5 mb-0">majstro7</h4>
											<span class="opacity-7">Themeforest User</span>
										</div>
										<span class="star-rating">
											<i classporto.partialsolor-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>porto.partials
									</div>
									<p class="mb-0">"Good code quality ! Very fast and good support ! I recommended it in 100% !"</p>
								</div>
							</div>
						</div>porto.partials
						<p class="text-center mb-5"><a class="btn btn-dark btn-modern btn-rounded btn-px-5 btn-py-3 text-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250" data-appear-animation-duration="600" href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" target="_blank">BUY PORTO NOW</a></p>
					</div>
					<div class="section-funnel-layer-bottom">
						<div class="section-funnel-layer bg-light"></div>
						<div class="sporto.partialsbg-light"></div>
					</div>
				</section>

				<section id="support" class="section section-angled bg-light border-0 m-0 position-relative pt-0">
					<div class="coporto.partials
						<div class="row align-items-center mb-5">
							<div class="col-lg-6 pr-xl-5 mb-5 mb-lg-0">
								<h2 class="font-weight-bold text-9 mb-1">Professional Support</h2>
								<h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-3">ONLINE DOCUMENTATION, VIDEOS AND FORUM</h5>
								<p class="lporto.partials400 mb-5">Any problem while using Porto? We're here to help you.</p>
								<div class="d-flex align-items-center border border-top-0 border-right-0 border-left-0 pb-4 mb-4">
									<i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 mr-3"></i>
									<p class="mb-0"><b class="text-color-dark">Online Documentation -</b> Contains all descriptions related to Porto usage and features.</p>
								</div>
								<div class=porto.partialscenter border border-top-0 border-right-0 border-left-0 pb-4 mb-4">
									<i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 mr-3"></i>
									<p class="mb-0 mb-0 opacity-5"><b class="text-color-dark">Video Documentation (coming soon) -</b> Need visual instructions? Check our video tutorials.</p>
								</div>
								<div class="d-flex align-items-center pb-4 mb-4">
									<i class="porto.partialsor-primary bg-light rounded-circle box-shadow-4 p-2 mr-3"></i>
									<p class="mb-0"><b class="text-color-dark">Support Center -</b> Contact us if you get any issue while using Porto, reply within 16 hrs.</p>
								</div>
							</div>
							<div class="col-lg-4 offset-lg-2">
								<div class=porto.partialsata-appear-animation="fadeIn" data-appear-animation-delay="500">
									<img class="img-fluid lazyload" src="img/lazy.png" data-src="img/landing/porto_dots2.png" alt="" style="position: absolute; bottom: -2%; left: -43%; transform: rotate(90deg)">
								</div>
								<img alt="Porto Support" src="img/lazy.png" data-src="img/landing/support_login.jpg" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload ml-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 590px; max-width: none;">
								<img alt="Porto Documentation" src="img/lazy.png" data-src="img/landing/porto_docs.jpg" class="img-fluid lazyload rounded box-shadow-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="700" style="left: -100px; bottom: 50px;">
							</div>porto.partials
						</div>
					</div>
					<div class="section-angled-layer-bottom section-angled-layer-increase-angle" style="padding: 4rem 0; background: #222529;"></div>
				</section>
porto.partials
				<section class="section bg-dark section-dark border-0 m-0">
					<div class="container">
						<div class="text-center mb-5">
							<h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">POWERFUL AND COMPLETE</h5>
							<h2 class="fporto.partials-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">Premium Plugins and Features</h2>
							<p class="custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850" data-appear-animation-duration="750">Create your website using premium included plugins and Porto's exclusive features.<br>It’s incredibly easy and fun to build and mantain your website design and content.</p>
						</div>
						<div class="row pb-5">
							<div class="col-12 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" data-appear-animation-duration="750">
								<div class=porto.partials-2 rounded p-5">
									<i class="icon-bg icon-plugin-2 mb-3"></i>
									<h4 class="text-4 mb-2 font-weight-bold">Slider Revolution</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Slider Revolution is truely #1 popular slider plugin that has 'no competitor'. This plugin is being sold on codecanyon.net store exclusively. You can get the plugin for free once you purchase Porto. Porto offers many beautiful slider sample contents that you can choose and apply on your website.  You can alse create new sliders easily.</p>
								</div>
							</div>porto.partials
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-1 mt-4"></i>
									<h4 class="text-4 mb-2">Top Level Support</h4>
									<p class="porto.partialstext-3 color-inherit mb-0">You can expect high technical reply within 24 hrs, average response time is 14 hrs. Customer satisfication is our main focus. You won't be alone using Porto.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="porto.partials-2 mt-4"></i>
									<h4 class="text-4 mb-2">100% Fully Responsive</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Not only working fine on any screen resolutions, Porto offers very beautiful layouts and avoid any heaviness for small resolutions.</p>
								</div>
							</div>
							<div class="porto.partialslg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-3 mt-4"></i>
									<h4 class="text-4 mb-2">Easy To Customize</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto was created to be very easy to edit and customize. The source code is organized to help any pro or beginner developer.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-17 mt-4"></i>
									<h4 class="text-4 mb-2">Functional Forms</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto comes with several functional contact forms, it's very easy to customize and set your email and fields in any page.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-5 mt-4"></i>
									<h4 class="text-4 mb-2">Retina Ready</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto works fine with any retina devices, we've fully tested Porto on all retina resolutions including laptops and mobile devices.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-6 mt-4"></i>
									<h4 class="text-4 mb-2">Bootstrap Based</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto is based on Bootstrap, the most popular CSS Framework for developing responsive and mobile-first websites.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-7 mt-4"></i>
									<h4 class="text-4 mb-2">One and Multi Pages</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto has a bunch of demos with the possibility to create one and multi pages websites.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-8 mt-4"></i>
									<h4 class="text-4 mb-2">Headers and Menus</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto comes with several headers and menus options for you to use on your website.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-9 mt-4"></i>
									<h4 class="text-4 mb-2">eCommerce Templates</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Exclusive layouts and features makes you to create your online store and sell online.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-10 mt-4"></i>
									<h4 class="text-4 mb-2">CSS3 Animations</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto is always keen to update latest css 3 technologies, you can see nice and exclusive css3 animation effects through demos.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-11 mt-4"></i>
									<h4 class="text-4 mb-2">Unlimited Colors &amp; Skins</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">You can configure any color you want, for entire site or certain sections using our exclusive style switcher.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-12 mt-4"></i>
									<h4 class="text-4 mb-2">SEO Friendly</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">SEO Friendly is one of our top priorities while working on Porto improvements, you can expect high seo performance while using Porto.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-13 mt-4"></i>
									<h4 class="text-4 mb-2">Optimized for Speed</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Everything is oriented for high speed performance based in the best code standards.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-18 mt-4"></i>
									<h4 class="text-4 mb-2">Ajax Ready + Lazy Load</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto works perfectly with ajax laoding and also lazy load for a better performance.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-15 mt-4"></i>
									<h4 class="text-4 mb-2">RTL Support</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Fully compatible with Right to Left languages, always check this feature before our version update.</p>
								</div>
							</div>
							<div class="d-flex col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
								<div class="bg-color-dark-scale-2 rounded p-5">
									<i class="icon-bg icon-feature-19 mt-4"></i>
									<h4 class="text-4 mb-2">Social Integration</h4>
									<p class="custom-text-color-1 text-3 color-inherit mb-0">Social media integration is easy with Porto. You can also configure Twitter and Instagram feeds.</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-elements m-0 section-no-border bg-bottom-slash position-relative z-index-1">
					<div class="container text-center mt-4">
						<h2 class="font-weight-bold text-9 mb-2">Porto Elements</h2>
						<p class="text-4 mb-5">Porto is simply a better choice for your new website design.</p>

						<div class="row justify-content-center">

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-26', ['key' => 'featured-box.featured-box-26'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-27', ['key' => 'featured-box.featured-box-27'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-28', ['key' => 'featured-box.featured-box-28'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-29', ['key' => 'featured-box.featured-box-29'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-30', ['key' => 'featured-box.featured-box-30'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-31', ['key' => 'featured-box.featured-box-31'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-32', ['key' => 'featured-box.featured-box-32'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-33', ['key' => 'featured-box.featured-box-33'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-34', ['key' => 'featured-box.featured-box-34'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-35', ['key' => 'featured-box.featured-box-35'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-36', ['key' => 'featured-box.featured-box-36'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-37', ['key' => 'featured-box.featured-box-37'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-38', ['key' => 'featured-box.featured-box-38'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-39', ['key' => 'featured-box.featured-box-39'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-40', ['key' => 'featured-box.featured-box-40'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-41', ['key' => 'featured-box.featured-box-41'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-42', ['key' => 'featured-box.featured-box-42'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-43', ['key' => 'featured-box.featured-box-43'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-44', ['key' => 'featured-box.featured-box-44'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-45', ['key' => 'featured-box.featured-box-45'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-46', ['key' => 'featured-box.featured-box-46'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-47', ['key' => 'featured-box.featured-box-47'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-48', ['key' => 'featured-box.featured-box-48'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-49', ['key' => 'featured-box.featured-box-49'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-50', ['key' => 'featured-box.featured-box-50'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-51', ['key' => 'featured-box.featured-box-51'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-52', ['key' => 'featured-box.featured-box-52'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-53', ['key' => 'featured-box.featured-box-53'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-54', ['key' => 'featured-box.featured-box-54'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-55', ['key' => 'featured-box.featured-box-55'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-56', ['key' => 'featured-box.featured-box-56'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-57', ['key' => 'featured-box.featured-box-57'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-58', ['key' => 'featured-box.featured-box-58'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-59', ['key' => 'featured-box.featured-box-59'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-60', ['key' => 'featured-box.featured-box-60'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-61', ['key' => 'featured-box.featured-box-61'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-62', ['key' => 'featured-box.featured-box-62'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-63', ['key' => 'featured-box.featured-box-63'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-64', ['key' => 'featured-box.featured-box-64'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-65', ['key' => 'featured-box.featured-box-65'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-66', ['key' => 'featured-box.featured-box-66'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-67', ['key' => 'featured-box.featured-box-67'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-68', ['key' => 'featured-box.featured-box-68'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-69', ['key' => 'featured-box.featured-box-69'])
								</div>
							</div>

						</div>
					</div>
				</section>

				<section class="section section-dark section-angled border-0 lazyload pb-0 m-0" style="background-size: 100%; background-position: top;" data-bg-src="img/landing/build_bg.jpg">
					<div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
					<div class="container text-center my-5 py-5">
						<h2 class="font-weight-bold line-height-3 text-12 mt-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">Build your website with Porto</h2>
						<h4 class="font-weight-bold text-9 mb-4 pb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">Purchase now. Only <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-no-rotate highlighted-word-animation-1 highlighted-word-animation-1-light alternative-font-4 font-weight-extra-bold text-4 light appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="800" data-appear-animation-duration="750">$16!</span></h4>
						<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" data-appear-animation-duration="750">
							<h4 class="font-weight-light text-4 col-lg-6 px-0 offset-lg-3 fw-400 mb-5 opacity-8">Porto Template has been available on ThemeForest since 2013 and is one of the top sellers with more than 40K+ sales.</h4>
						</div>
						<div class="col-12 px-0 pb-2 mb-4">
							<div class="row flex-column flex-lg-row justify-content-center">
								<div class="col-auto">
									<h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" data-appear-animation-duration="750"><i class="fa fa-check"></i> SUPER HIGH PERFORMANCE</h5>
								</div>
								<div class="col-auto mx-5 my-2 my-lg-0">
									<h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1400" data-appear-animation-duration="750"><i class="fa fa-check"></i> Strict Coding Standards</h5>
								</div>
								<div class="col-auto">
									<h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600" data-appear-animation-duration="750"><i class="fa fa-check"></i> Free Lifetime Updates</h5>
								</div>
							</div>
						</div>
						<a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="btn btn-dark btn-modern btn-rounded px-5 btn-py-3 text-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1800" data-appear-animation-duration="750" target="_blank">BUY PORTO NOW</a>
					</div>
					<div class="row border border-left-0 border-bottom-0 border-right-0 border-color-light-2">
						<div class="col-6 col-md-3 text-center d-flex align-items-center justify-content-center py-4">
							<a href="http://www.okler.net/" class="text-decoration-none" target="_blank">
								<div class="icon-box">
									<i class="icon-bg icon-menu-1"></i>
									<h4 class="text-4 mb-0">Customer Showcase<small class="d-block p-relative bottom-4 opacity-6 ls-0">(SAMPLE SITES)</small></h4>
								</div>
							</a>
						</div>
						<div class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4">
							<a href="http://www.okler.net/open-a-ticket/" class="text-decoration-none" target="_blank">
								<div class="icon-box">
									<i class="icon-bg icon-menu-2"></i>
									<h4 class="text-4 mb-0">Support Center</h4>
								</div>
							</a>
						</div>
						<div class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4">
							<a href="http://www.okler.net/" class="text-decoration-none" target="_blank">
								<div class="icon-box">
									<i class="icon-bg icon-menu-3"></i>
									<h4 class="text-4 mb-0">Online Documentation</h4>
								</div>
							</a>
						</div>
						<div class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4 opacity-5">
							<a href="http://www.okler.net/" class="text-decoration-none" target="_blank">
								<div class="icon-box">
									<i class="icon-bg icon-menu-4"></i>
									<h4 class="font-weight-500 text-color-light line-height-1 text-4 mt-0 mb-2">Video Tutorials<br><span class="text-2 d-block pt-1">(coming soon)</span></h4>
								</div>
							</a>
						</div>
					</div>
				</section>

				<section class="section bg-color-dark-scale-2 border-0 m-0 py-4">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="list list-unstyled list-inline d-flex align-items-center justify-content-center flex-column flex-lg-row mb-0">
									<li class="list-inline-item custom-text-color-1 color-inherit mb-lg-0 text-2 pr-2">Porto Versions:</li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">ADMIN HTML</a></li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-ecommerce-shop-template/22685562" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">SHOP HTML</a></li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-responsive-wordpress-ecommerce-theme/9207399" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">WORDPRESS</a></li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-ultimate-responsive-magento-theme/9725864" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">MAGENTO</a></li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-ultimate-responsive-shopify-theme/19162959" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">SHOPIFY</a></li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-responsive-drupal-7-theme/5219986" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">DRUPAL</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-582')
@endsection
