@extends('porto.app')
@section('header')
@include('porto.partials.header.header-206')
@endsection

@section('main')
<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 670px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li data-transition="fade">
								<img src="img/slides/slide-bg.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="tp-caption tp-resizeme" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-type="image" data-x="right" data-y="top" data-width="['auto']" data-height="['auto']" data-basealign="slide"><img src="img/slides/slide-devices.jpg" alt=""></div>

								<div class="tp-caption tp-resizeme" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-type="image" data-x="left" data-y="center" data-width="['auto']" data-height="['auto']" data-basealign="slide"><img src="img/slides/slide-laptop.jpg" alt=""></div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-7" data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-type="image" data-x="-500" data-y="-700" data-width="['auto']" data-height="['auto']" data-basealign="slide"><img src="img/slides/slide-parallax-porto-symbol.png" alt=""></div>

								<div class="tp-caption" data-x="center" data-hoffset="['-150','-150','-150','-240']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="1000" data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="700" data-fontsize="['22','22','22','40']" data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">DO YOU NEED A NEW</div>

								<div class="tp-caption d-none d-md-block" data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['80','80','80','135']" data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="img/slides/slide-blue-line.png" alt=""></div>

								<div class="tp-caption" data-x="center" data-hoffset="['150','150','150','240']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="1000" data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']">WEB DESIGN?</div>

								<div class="tp-caption font-weight-light" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="center" data-y="center" data-voffset="['40','40','40','80']" data-fontsize="['18','18','18','50']" data-lineheight="['20','20','20','55']" style="color: #b5b5b5;">Check out our options and features</div>

							</li>
							<li class="slide-overlay" data-transition="fade">
								<img src="img/slides/slide-bg-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="tp-caption" data-x="center" data-hoffset="['-170','-170','-170','-350']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="1000" data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="700" data-fontsize="['16','16','16','40']" data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">WE WORK HARD AND PORTO HAS</div>

								<div class="tp-caption" data-x="center" data-hoffset="['170','170','170','350']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="1000" data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']">THE BEST DESIGN</div>

								<div class="tp-caption font-weight-light ws-normal text-center" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="center" data-y="center" data-voffset="['60','60','60','105']" data-width="['530','530','530','1100']" data-fontsize="['18','18','18','40']" data-lineheight="['26','26','26','45']" style="color: #b5b5b5;">Trusted by over <strong class="text-color-light">30,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace.</div>

							</li>
							<li class="slide-overlay slide-overlay-primary" data-transition="fade">
								<img src="img/slides/slide-bg-6.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="tp-caption" data-x="center" data-hoffset="['-145','-145','-145','-320']" data-y="center" data-voffset="['-80','-80','-80','-130']" data-start="1000" data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center" data-voffset="['-80','-80','-80','-130']" data-start="700" data-fontsize="['16','16','16','40']" data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE DESIGNS, WE ARE</div>

								<div class="tp-caption" data-x="center" data-hoffset="['145','145','145','320']" data-y="center" data-voffset="['-80','-80','-80','-130']" data-start="1000" data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['-155','-155','-155','-255']" data-y="center" data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">P</div>

								<div class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['-80','-80','-80','-130']" data-y="center" data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">O</div>

								<div class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">R</div>

								<div class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['65','65','65','115']" data-y="center" data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">T</div>

								<div class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['139','139','139','240']" data-y="center" data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">O</div>

								<div class="tp-caption font-weight-light text-color-light" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="center" data-y="center" data-voffset="['85','85','85','140']" data-fontsize="['18','18','18','40']" data-lineheight="['26','26','26','45']">The best choice for your new website</div>

							</li>
						</ul>
					</div>
				</div>

				<div class="home-intro bg-primary" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">
								<p>
									The fastest way to grow your business with the leader in <span class="highlighted-word">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-left text-lg-right">
									<a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a>
									<div class="learn-more">or <a href="index.html">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container">

					<div class="row text-center pt-3">
						<div class="col-md-10 mx-md-auto">
							<h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
								<span>Porto is </span>
								<span class="word-rotator-words bg-dark">
									<b class="is-visible">incredibly</b>
									<b>especially</b>
									<b>extremely</b>
								</span>
								<span> beautiful and fully responsive.</span>
							</h1>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
							</p>
						</div>
					</div>

				</div>

				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
					<div class="home-concept mt-5">
						<div class="container">

							<div class="row text-center">
								<span class="sun"></span>
								<span class="cloud"></span>
								<div class="col-lg-2 ml-lg-auto">
									<div class="process-image">
										<img src="img/home/home-concept-item-1.png" alt="">
										<strong>Strategy</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image process-image-on-middle">
										<img src="img/home/home-concept-item-2.png" alt="">
										<strong>Planning</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image">
										<img src="img/home/home-concept-item-3.png" alt="">
										<strong>Build</strong>
									</div>
								</div>
								<div class="col-lg-4 ml-lg-auto">
									<div class="project-image">
										<div id="fcSlideshow" class="fc-slideshow">
											<ul class="fc-slides">
												<li><a href="portfolio-single-wide-slider.html"><img class="img-fluid" src="img/projects/project-home-1.jpg" alt=""></a></li>
												<li><a href="portfolio-single-wide-slider.html"><img class="img-fluid" src="img/projects/project-home-2.jpg" alt=""></a></li>
												<li><a href="portfolio-single-wide-slider.html"><img class="img-fluid" src="img/projects/project-home-3.jpg" alt=""></a></li>
											</ul>
										</div>
										<strong class="our-work">Our Work</strong>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="container mb-5 pb-4">

					<div class="row">
						<div class="col mb-4">
							<hr class="my-5">
						</div>
					</div>

					<div class="row pb-3">
						<div class="col-lg-8">
							<h2 class="font-weight-normal text-7">Our <strong class="font-weight-extra-bold">Features</strong></h2>
							<div class="row">
								<div class="col-sm-6">
									@include('porto.partials.feature-box.feature-box-183')
									@include('porto.partials.feature-box.feature-box-184')
									@include('porto.partials.feature-box.feature-box-185')
									@include('porto.partials.feature-box.feature-box-186')
								</div>
								<div class="col-sm-6">
									@include('porto.partials.feature-box.feature-box-187')
									@include('porto.partials.feature-box.feature-box-188')
									@include('porto.partials.feature-box.feature-box-189')
									@include('porto.partials.feature-box.feature-box-190')
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<h2 class="font-weight-normal text-6">and more...</h2>

							<div class="accordion accordion-modern" id="accordion">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<i class="icons icon-diamond text-color-primary"></i>
												Creative Websites
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="collapse show">
										<div class="card-body text-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blanorem ipsum dolor sit amet, consecte.</p>
											<p class="mb-0">Adipiscing elit phasellus blanit ma... <a href="#" class="d-block text-color-dark font-weight-semibold pt-4">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a></p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<i class="icons icon-bubble text-color-primary"></i>
												Contact Forms
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="collapse">
										<div class="card-body text-2">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<i class="icons icon-grid text-color-primary"></i>
												Portfolio Pages
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="collapse">
										<div class="card-body text-2">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="solid my-5">

					<div class="row text-center pt-4">
						<div class="col">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2">
								<span>We're not the only ones </span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
								<span> about Porto Template...</span>
							</h2>
							<h4 class="text-primary lead tall text-4">40,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4>
						</div>
					</div>

					<div class="row text-center mt-5">
						@include('porto.partials.owl-carousel.owl-carousel-140')
					</div>

				</div>

				<section class="section section-custom-map appear-animation lazyload" data-appear-animation="fadeInUpShorter" data-src-bg="img/map.png" style="background-color: transparent; background-position: center 0; background-repeat: no-repeat;">
					<section class="section section-default section-footer">
						<div class="container">
							<div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="col-lg-6">
									<div class="recent-posts mb-5">
										<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Latest</strong> Posts</h2>
										<div class="owl-carousel owl-theme dots-title mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'autoplay': true, 'autoplayTimeout': 8000}">
											<div class="row">
												<div class="col-lg-6 mb-4 mb-lg-0">
													<article>
														<div class="row">
															<div class="col-auto pr-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">15</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col pl-1">
																<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
															</div>
														</div>
													</article>
												</div>
												<div class="col-lg-6">
													<article>
														<div class="row">
															<div class="col-auto pr-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">14</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col pl-1">
																<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
															</div>
														</div>
													</article>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 mb-4 mb-lg-0">
													<article>
														<div class="row">
															<div class="col-auto pr-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">13</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col pl-1">
																<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
															</div>
														</div>
													</article>
												</div>
												<div class="col-lg-6">
													<article>
														<div class="row">
															<div class="col-auto pr-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">12</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col pl-1">
																<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
															</div>
														</div>
													</article>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 mb-4 mb-lg-0">
													<article>
														<div class="row">
															<div class="col-auto pr-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">11</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col pl-1">
																<h4 class="text-primary text-4"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
															</div>
														</div>
													</article>
												</div>
												<div class="col-lg-6">
													<article>
														<div class="row">
															<div class="col-auto pr-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">10</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col pl-1">
																<h4 class="text-primary text-4"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p clasporto.partialsipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
															</div>
														</div>
													</article>
												</div>porto.partials
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">What</strong> Client’s Say</h2>
									<div class="row">
										<div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">
											<div>
												<div class="col">
													@include('porto.partials.testimonial.testimonial-96')
												</div>
											</div>
											<div>porto.partials
												<div class="col">
													@include('porto.partials.testimonial.testimonial-97')
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</section>
			</div>
@endsection

@section('footer')
<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">NEWSLETTER</h5>
							<p class="pr-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mr-4 mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
									</span>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">LATEST TWEETS</h5>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<div class="contact-details">
								<h5 class="text-3 mb-3">CONTACT US</h5>
								<ul class="list list-icons list-icons-lg">
									<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
									<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
									<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3">FOLLOW US</h5>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-64', ['key' => 'footer-copyright.footer-copyright-64'])
			</footer>
@endsection
