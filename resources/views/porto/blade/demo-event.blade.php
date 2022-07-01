@extends('porto.app')
@section('header')
@include('porto.partials.header.header-96')
@endsection

@section('main')
<main role="main">


				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
						<ul>

							<li data-transition="fade">
								<img src="img/demos/event/slides/slide-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

							    <div class="tp-caption custom-font-size-1 text-color-light font-weight-semibold text-uppercase" data-x="['left','left','left','left']" data-hoffset="['80','80','80','80']" data-y="['center','center','center','center']" data-voffset="['-100','-100','-100','-50']" data-start="500" data-paddingleft="['0', '0', '0', '0']" style="z-index: 5; font-size: 18px;" data-transform_in="y:[-300%];opacity:0;s:500;">2 Days, 23 Talks</div>

								<h1 class="tp-caption text-color-light font-weight-extra-bold text-uppercase" data-x="['left','left','left','left']" data-hoffset="['75','75','75','75']" data-y="['center','center','center','center']" data-voffset="['-45','-45','-45','5']" data-fontsize="['80', '80', '70', '60']" data-start="800" data-paddingleft="['0', '0', '0', '0']" style="z-index: 5; font-size: 80px;" data-transform_in="y:[-300%];opacity:0;s:500;">Porto Event</h1>

								<div class="tp-caption text-color-light" data-x="['left','left','left','left']" data-hoffset="['81','81','81','81']" data-y="['center','center','center','center']" data-voffset="['25','25','25','75']" data-start="1500" data-paddingleft="['0', '0', '0', '0']" data-fontsize="26" style="z-index: 5;" data-transform_in="y:[-300%];opacity:0;s:500;">July 17 &amp; 18, 2020 in NYC</div>

								<div class="tp-caption text-uppercase" data-x="['left','left','left','left']" data-hoffset="['80','80','80','80']" data-y="['center','center','center','center']" data-voffset="['55','55','55','105']" data-start="1500" data-paddingleft="['0', '0', '0', '0']" data-fontsize="['12', '12', '12', '18']" data-lineheight="['12', '12', '12', '22']" style="z-index: 5; color: #6acdca;" data-transform_in="y:[-300%];opacity:0;s:500;"><i class="fas fa-map-marker-alt"></i> New York Plazha - New York-NY</div>

								<div class="tp-caption text-uppercase" data-x="['right','right','right','right']" data-hoffset="['80','80','80','80']" data-y="['center','center','center','center']" data-voffset="['-40','-40','-40','10']" data-start="1500" style="z-index: 5;" data-transform_in="opacity:0;s:500;">

									<a href="#" class="play-video-custom custom-rev-next">
										<img src="img/demos/event/play-icon.png" class="img-fluid" width="90" height="90">
									</a>

								</div>

							</li>
							<li data-transition="fade">
								<img src="video/event.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="video/event.mp4" data-videopreload="preload" data-videoloop="none" data-forcecover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true">
								</div>

								<div class="tp-dottedoverlay tp-opacity-overlay"></div>

							</li>
						</ul>
					</div>
				</div>

				<section id="speakers" class="bg-color-light pt-4">
					<div class="container mt-4 pt-4 pb-4">
						<div class="row pt-2">
							<div class="col">
								<h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-1">Speakers</h2>
								<p class="custom-font-size-1 text-center mb-2">Porto Event 2021</p>
							</div>
						</div>

						<div class="row pt-2 pb-4 mb-4">
							<div class="col-md-4 col-lg-3 mt-3 mb-3">
								<div class="custom-speaker-card bg-color-light m-auto">
									<div class="speaker-photo">
										<a href="#speaker-content-1" class="popup-with-zoom-anim text-decoration-none" m text-decoration-none>
											<img src="img/demos/event/speakers/speaker-01.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="speaker-info speaker-social-twitter p-5">
										<a href="#" class="speaker-social text-center text-color-light"><i class="fab fa-twitter" aria-hidden="true"></i></a>
										<h3 class="text-color-dark custom-font-size-4 font-weight-semibold mb-1">John Doe</h3>
										<p class="custom-font-size-1 mb-0">Twitter</p>
									</div>
								</div>
								<div id="speaker-content-1" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<img src="img/demos/event/speakers/speaker-01.jpg" class="img-fluid mb-4" alt="">
											<ul class="social-icons text-center">
												<li class="social-icons-facebook">
													<a href="http://www.facebook.com/" target="_blank" title="Facebook">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<li class="social-icons-twitter">
													<a href="http://www.twitter.com/" target="_blank" title="Twitter">
														<i class="fab fa-twitter"></i>
													</a>
												</li>
												<li class="social-icons-googleplus">
													<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
														<i class="fab fa-google-plus-g" aria-hidden="true"></i>
													</a>
												</li>
												<li class="social-icons-linkedin">
													<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
														<i class="fab fa-linkedin-in"></i>
													</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-8 col-sm-8">
											<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
											<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-3 mt-3 mb-3">
								<div class="custom-speaker-card bg-color-light m-auto">
									<div class="speaker-photo">
										<a href="#speaker-content-2" class="popup-with-zoom-anim text-decoration-none">
											<img src="img/demos/event/speakers/speaker-02.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="speaker-info speaker-social-gplus p-5">
										<a href="#" class="speaker-social text-center text-color-light"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
										<h3 class="text-color-dark custom-font-size-4 font-weight-semibold mb-1">Richard Doe</h3>
										<p class="custom-font-size-1 mb-0">Google</p>
									</div>
								</div>
								<div id="speaker-content-2" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<img src="img/demos/event/speakers/speaker-02.jpg" class="img-fluid mb-4" alt="">
											<ul class="social-icons text-center">
												<li class="social-icons-facebook">
													<a href="http://www.facebook.com/" target="_blank" title="Facebook">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<li class="social-icons-twitter">
													<a href="http://www.twitter.com/" target="_blank" title="Twitter">
														<i class="fab fa-twitter"></i>
													</a>
												</li>
												<li class="social-icons-googleplus">
													<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
														<i class="fab fa-google-plus-g" aria-hidden="true"></i>
													</a>
												</li>
												<li class="social-icons-linkedin">
													<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
														<i class="fab fa-linkedin-in"></i>
													</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-8 col-sm-8">
											<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
											<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-3 mt-3 mb-3">
								<div class="custom-speaker-card bg-color-light m-auto">
									<div class="speaker-photo">
										<a href="#speaker-content-3" class="popup-with-zoom-anim text-decoration-none">
											<img src="img/demos/event/speakers/speaker-03.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="speaker-info speaker-social-facebook p-5">
										<a href="#" class="speaker-social text-center text-color-light"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
										<h3 class="text-color-dark custom-font-size-4 font-weight-semibold mb-1">Jessica Doe</h3>
										<p class="custom-font-size-1 mb-0">Facebook</p>
									</div>
								</div>
								<div id="speaker-content-3" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<img src="img/demos/event/speakers/speaker-03.jpg" class="img-fluid mb-4" alt="">
											<ul class="social-icons text-center">
												<li class="social-icons-facebook">
													<a href="http://www.facebook.com/" target="_blank" title="Facebook">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<li class="social-icons-twitter">
													<a href="http://www.twitter.com/" target="_blank" title="Twitter">
														<i class="fab fa-twitter"></i>
													</a>
												</li>
												<li class="social-icons-googleplus">
													<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
														<i class="fab fa-google-plus-g" aria-hidden="true"></i>
													</a>
												</li>
												<li class="social-icons-linkedin">
													<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
														<i class="fab fa-linkedin-in"></i>
													</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-8 col-sm-8">
											<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
											<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-3 mt-3 mb-3">
								<div class="custom-speaker-card bg-color-light m-auto">
									<div class="speaker-photo">
										<a href="#speaker-content-4" class="popup-with-zoom-anim text-decoration-none">
											<img src="img/demos/event/speakers/speaker-04.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="speaker-info speaker-social-twitter p-5">
										<a href="#" class="speaker-social text-center text-color-light"><i class="fab fa-twitter" aria-hidden="true"></i></a>
										<h3 class="text-color-dark custom-font-size-4 font-weight-semibold mb-1">Mark Doe</h3>
										<p class="custom-font-size-1 mb-0">Twitter</p>
									</div>
								</div>
								<div id="speaker-content-4" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<img src="img/demos/event/speakers/speaker-04.jpg" class="img-fluid mb-4" alt="">
											<ul class="social-icons text-center">
												<li class="social-icons-facebook">
													<a href="http://www.facebook.com/" target="_blank" title="Facebook">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<li class="social-icons-twitter">
													<a href="http://www.twitter.com/" target="_blank" title="Twitter">
														<i class="fab fa-twitter"></i>
													</a>
												</li>
												<li class="social-icons-googleplus">
													<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
														<i class="fab fa-google-plus-g" aria-hidden="true"></i>
													</a>
												</li>
												<li class="social-icons-linkedin">
													<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
														<i class="fab fa-linkedin-in"></i>
													</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-8 col-sm-8">
											<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
											<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-3 mt-3 mb-3">
								<div class="custom-speaker-card bg-color-light m-auto">
									<div class="speaker-photo">
										<a href="#speaker-content-5" class="popup-with-zoom-anim text-decoration-none">
											<img src="img/demos/event/speakers/speaker-05.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="speaker-info speaker-social-gplus p-5">
										<a href="#" class="speaker-social text-center text-color-light"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
										<h3 class="text-color-dark custom-font-size-4 font-weight-semibold mb-1">Bob Doe</h3>
										<p class="custom-font-size-1 mb-0">Google</p>
									</div>
								</div>
								<div id="speaker-content-5" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<img src="img/demos/event/speakers/speaker-05.jpg" class="img-fluid mb-4" alt="">
											<ul class="social-icons text-center">
												<li class="social-icons-facebook">
													<a href="http://www.facebook.com/" target="_blank" title="Facebook">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<li class="social-icons-twitter">
													<a href="http://www.twitter.com/" target="_blank" title="Twitter">
														<i class="fab fa-twitter"></i>
													</a>
												</li>
												<li class="social-icons-googleplus">
													<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
														<i class="fab fa-google-plus-g" aria-hidden="true"></i>
													</a>
												</li>
												<li class="social-icons-linkedin">
													<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
														<i class="fab fa-linkedin-in"></i>
													</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-8 col-sm-8">
											<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
											<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-3 mt-3 mb-3">
								<div class="custom-speaker-card bg-color-light m-auto">
									<div class="speaker-photo">
										<a href="#speaker-content-6" class="popup-with-zoom-anim text-decoration-none">
											<img src="img/demos/event/speakers/speaker-06.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="speaker-info speaker-social-facebook p-5">
										<a href="#" class="speaker-social text-center text-color-light"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
										<h3 class="text-color-dark custom-font-size-4 font-weight-semibold mb-1">Greg Doe</h3>
										<p class="custom-font-size-1 mb-0">Facebook</p>
									</div>
								</div>
								<div id="speaker-content-6" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<img src="img/demos/event/speakers/speaker-06.jpg" class="img-fluid mb-4" alt="">
											<ul class="social-icons text-center">
												<li class="social-icons-facebook">
													<a href="http://www.facebook.com/" target="_blank" title="Facebook">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<li class="social-icons-twitter">
													<a href="http://www.twitter.com/" target="_blank" title="Twitter">
														<i class="fab fa-twitter"></i>
													</a>
												</li>
												<li class="social-icons-googleplus">
													<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
														<i class="fab fa-google-plus-g" aria-hidden="true"></i>
													</a>
												</li>
												<li class="social-icons-linkedin">
													<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
														<i class="fab fa-linkedin-in"></i>
													</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-8 col-sm-8">
											<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
											<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-3 mt-3 mb-3">
								<div class="custom-speaker-card bg-color-light m-auto">
									<div class="speaker-photo">
										<a href="#speaker-content-7" class="popup-with-zoom-anim text-decoration-none">
											<img src="img/demos/event/speakers/speaker-07.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="speaker-info speaker-social-twitter p-5">
										<a href="#" class="speaker-social text-center text-color-light"><i class="fab fa-twitter" aria-hidden="true"></i></a>
										<h3 class="text-color-dark custom-font-size-4 font-weight-semibold mb-1">Jeremy Doe</h3>
										<p class="custom-font-size-1 mb-0">Twitter</p>
									</div>
								</div>
								<div id="speaker-content-7" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<img src="img/demos/event/speakers/speaker-07.jpg" class="img-fluid mb-4" alt="">
											<ul class="social-icons text-center">
												<li class="social-icons-facebook">
													<a href="http://www.facebook.com/" target="_blank" title="Facebook">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<li class="social-icons-twitter">
													<a href="http://www.twitter.com/" target="_blank" title="Twitter">
														<i class="fab fa-twitter"></i>
													</a>
												</li>
												<li class="social-icons-googleplus">
													<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
														<i class="fab fa-google-plus-g" aria-hidden="true"></i>
													</a>
												</li>
												<li class="social-icons-linkedin">
													<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
														<i class="fab fa-linkedin-in"></i>
													</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-8 col-sm-8">
											<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
											<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-3 mt-3 mb-3">
								<div class="custom-speaker-card bg-color-light m-auto">
									<div class="speaker-photo">
										<a href="#speaker-content-8" class="popup-with-zoom-anim text-decoration-none">
											<img src="img/demos/event/speakers/speaker-08.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="speaker-info speaker-social-twitter p-5">
										<a href="#" class="speaker-social text-center text-color-light"><i class="fab fa-twitter" aria-hidden="true"></i></a>
										<h3 class="text-color-dark custom-font-size-4 font-weight-semibold mb-1">Josh Doe</h3>
										<p class="custom-font-size-1 mb-0">Twitter</p>
									</div>
								</div>
								<div id="speaker-content-8" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<img src="img/demos/event/speakers/speaker-08.jpg" class="img-fluid mb-4" alt="">
											<ul class="social-icons text-center">
												<li class="social-icons-facebook">
													<a href="http://www.facebook.com/" target="_blank" title="Facebook">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<li class="social-icons-twitter">
													<a href="http://www.twitter.com/" target="_blank" title="Twitter">
														<i class="fab fa-twitter"></i>
													</a>
												</li>
												<li class="social-icons-googleplus">
													<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
														<i class="fab fa-google-plus-g" aria-hidden="true"></i>
													</a>
												</li>
												<li class="social-icons-linkedin">
													<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
														<i class="fab fa-linkedin-in"></i>
													</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-8 col-sm-8">
											<h2 class="font-weight-semibold text-color-dark mb-1">John Doe</h2>
											<p class="custom-font-style-1 font-weight-semibold">Founder of Porto</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>	
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
											<p class="text-2 custom-line-height-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque at purus et auctor. Donec eget risus vitae lacus aliquam porttitor. Morbi pellentesque fermentum ex, nec sagittis augue mollis sit amet. Pellentesque vitae metus porttitor ipsum finibus tincidunt. Praesent sit amet fringilla nisi, in porttitor eros. Vivamus iaculis mattis purus, vitae dictum felis tempor nec. Maecenas eget fermentum turpis. Fusce dignissim leo sit amet aliquet facilisis. Sed erat arcu, ultricies a justo vitae, elementum egestas justo. Nunc bibendum, ex id dapibus fringilla, nisl quam tincidunt ligula, at luctus quam magna nec sem. Suspendisse vitae tempus velit, nec congue sapien.</p>		
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="about">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 about-video align-items-center justify-content-center d-flex p-0" style="background-image: url('img/demos/event/about/about-video-banner.jpg')">
								<a href="https://vimeo.com/178747566" class="play-video-custom popup-vimeo">
									<img src="img/demos/event/play-icon.png" class="img-fluid" width="90" height="90">
								</a>
							</div>
							<div class="col-lg-4 bg-color-primary p-4">
								<div class="custom-about-content text-color-light p-5">
									<div class="pt-4">
										<div class="about-title mb-4 pb-4">
											<div class="icon">
												<img src="img/demos/event/about/about-icon.png" class="img-fluid" alt="">
											</div>
											<h3 class="text-color-light text-uppercase font-weight-bold mb-2">About the Event</h3>
											<p class="text-color-light text-uppercase mb-0">What is Porto Event 2021</p>
										</div>
										<p class="custom-text-color-1 font-weight-normal pb-4">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit molestie lorem, semper tristique arcu interdum quis. Aenean finibus, metus et pulvinar tincidunt, nunc ex suscipit eros, eget pretium.
										</p>
										<div class="p-0">
											<a href="#" class="btn btn-tertiary about-btn-tickets custom-border-radius custom-btn-style-1 text-3 font-weight-semibold text-color-light text-uppercase outline-none mb-4 mr-2">Buy Tickets <i class="custom-long-arrow-right" aria-hidden="true"></i></a>
											<a data-hash data-hash-offset="80" href="#schedule" class="btn custom-btn-border-1 custom-btn-style-1 custom-border-radius text-3 font-weight-semibold text-color-light text-uppercase outline-none mb-4">Event Schedule <i class="custom-long-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 p-0 custom-about-carousel">
								<div class="wrapper">
									@include('porto.partials.owl-carousel.owl-carousel-60')
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="schedule" class="bg-color-light pb-4 pt-4">
					<div class="container pt-4 pb-4 mt-4">
						<div class="row pt-2 pb-4">
							<div class="col">
								<h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-1">Schedule</h2>
								<p class="custom-font-size-1 text-center mb-2">Porto Event Agenda</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<div class="custom-circle-date bg-color-primary no-border text-color-light text-center ml-4 mb-4">
									<div class="circle-dotted">
										<div class="circle-center">
											<span class="custom-font-size-6 text-color-light font-weight-bold text-uppercase mb-0">Day-1</span>
											<span class="text-color-light font-weight-normal">July-7</span>
										</div>
									</div>
								</div>
								<div class="timeline-balloon pb-4 mb-2">
									<div class="balloon-cell balloon-time pt-4">
										<span class="time-text text-color-dark font-weight-bold custom-font-size-3">8.00 AM</span>
										<div class="time-dot bg-color-light"></div>
									</div>
									<div class="balloon-cell appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
										<div class="balloon-content balloon-shadow bg-color-light text-color-quaternary p-3">
											<span class="balloon-arrow bg-color-light"></span>
											<div class="balloon-description p-2">
												<h5 class="text-color-dark text-uppercase font-weight-bold m-0">Breakfast &amp; Welcome</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="timeline-balloon pb-4 mb-2">
									<div class="balloon-cell balloon-time pt-4">
										<span class="time-text text-color-dark font-weight-bold custom-font-size-3">9.00 AM</span>
										<div class="time-dot bg-color-light"></div>
									</div>
									<div class="balloon-cell appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
										<div class="balloon-content bg-color-light text-color-quaternary p-4 pr-3">
											<span class="balloon-arrow bg-color-light"></span>
											<div class="balloon-photo">
												<div class="photo-radius">
													<img src="img/demos/event/speakers/speaker-01.jpg" class="img-fluid" alt="John Doe">
												</div>
											</div>
											<div class="balloon-description pl-4">
												<h5 class="text-color-dark text-uppercase font-weight-bold pt-1 mb-2">John Doe</h5>
												<p class="font-weight-normal custom-font-size-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="timeline-balloon pb-4 mb-2">
									<div class="balloon-cell balloon-time pt-4">
										<span class="time-text text-color-dark font-weight-bold custom-font-size-3">10.00 AM</span>
										<div class="time-dot bg-color-light"></div>
									</div>
									<div class="balloon-cell appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
										<div class="balloon-content bg-color-light text-color-quaternary p-4 pr-3">
											<span class="balloon-arrow bg-color-light"></span>
											<div class="balloon-photo">
												<div class="photo-radius">
													<img src="img/demos/event/speakers/speaker-02.jpg" class="img-fluid" alt="John Doe">
												</div>
											</div>
											<div class="balloon-description pl-4">
												<h5 class="text-color-dark text-uppercase font-weight-bold pt-1 mb-2">Richard Doe</h5>
												<p class="font-weight-normal custom-font-size-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="timeline-balloon pb-4 mb-2">
									<div class="balloon-cell balloon-time pt-4">
										<span class="time-text text-color-dark font-weight-bold custom-font-size-3">10.30 AM</span>
										<div class="time-dot bg-color-light"></div>
									</div>
									<div class="balloon-cell appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
										<div class="balloon-content bg-color-light text-color-quaternary p-4 pr-3">
											<span class="balloon-arrow bg-color-light"></span>
											<div class="balloon-photo">
												<div class="photo-radius">
													<img src="img/demos/event/speakers/speaker-03.jpg" class="img-fluid" alt="John Doe">
												</div>
											</div>
											<div class="balloon-description pl-4">
												<h5 class="text-color-dark text-uppercase font-weight-bold pt-1 mb-2">Jessica Doe</h5>
												<p class="font-weight-normal custom-font-size-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-lg-6">
								<div class="custom-circle-date custom-circle-date-light bg-color-light text-center ml-4 mb-4">
									<div class="circle-dotted">
										<div class="circle-center">
											<span class="custom-font-size-6 text-color-dark font-weight-bold text-uppercase mb-0">Day-2</span>
											<span class="text-color-dark font-weight-normal">July-7</span>
										</div>
									</div>
								</div>
								<div class="timeline-balloon pb-4 mb-2">
									<div class="balloon-cell balloon-time pt-4">
										<span class="time-text text-color-dark font-weight-bold custom-font-size-3">6.00 PM</span>
										<div class="time-dot bg-color-light"></div>
									</div>
									<div class="balloon-cell appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
										<div class="balloon-content balloon-shadow bg-color-light text-color-quaternary p-3">
											<span class="balloon-arrow bg-color-light"></span>
											<div class="balloon-description p-2">
												<h5 class="text-color-dark text-uppercase font-weight-bold m-0">Beer Party</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="timeline-balloon pb-4 mb-2">
									<div class="balloon-cell balloon-time pt-4">
										<span class="time-text text-color-dark font-weight-bold custom-font-size-3">9.00 PM</span>
										<div class="time-dot bg-color-light"></div>
									</div>
									<div class="balloon-cell appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
										<div class="balloon-content bg-color-light text-color-quaternary p-4 pr-3">
											<span class="balloon-arrow bg-color-light"></span>
											<div class="balloon-photo">
												<div class="photo-radius">
													<img src="img/demos/event/speakers/speaker-04.jpg" class="img-fluid" alt="John Doe">
												</div>
											</div>
											<div class="balloon-description pl-4">
												<h5 class="text-color-dark text-uppercase font-weight-bold pt-1 mb-2">Mark</h5>
												<p class="font-weight-normal custom-font-size-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="timeline-balloon pb-4 mb-2">
									<div class="balloon-cell balloon-time pt-4">
										<span class="time-text text-color-dark font-weight-bold custom-font-size-3">10.00 PM</span>
										<div class="time-dot bg-color-light"></div>
									</div>
									<div class="balloon-cell appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
										<div class="balloon-content bg-color-light text-color-quaternary p-4 pr-3">
											<span class="balloon-arrow bg-color-light"></span>
											<div class="balloon-photo">
												<div class="photo-radius">
													<img src="img/demos/event/speakers/speaker-05.jpg" class="img-fluid" alt="John Doe">
												</div>
											</div>
											<div class="balloon-description pl-4">
												<h5 class="text-color-dark text-uppercase font-weight-bold pt-1 mb-2">Bob</h5>
												<p class="font-weight-normal custom-font-size-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="timeline-balloon pb-4 mb-2">
									<div class="balloon-cell balloon-time pt-4">
										<span class="time-text text-color-dark font-weight-bold custom-font-size-3">10.30 PM</span>
										<div class="time-dot bg-color-light"></div>
									</div>
									<div class="balloon-cell appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
										<div class="balloon-content bg-color-light text-color-quaternary p-4 pr-3">
											<span class="balloon-arrow bg-color-light"></span>
											<div class="balloon-photo">
												<div class="photo-radius">
													<img src="img/demos/event/speakers/speaker-06.jpg" class="img-fluid" alt="John Doe">
												</div>
											</div>
											<div class="balloon-description pl-4">
												<h5 class="text-color-dark text-uppercase font-weight-bold pt-1 mb-2">Greg Doe</h5>
												<p class="font-weight-normal custom-font-size-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row text-center pt-3 pb-4 mb-2">
							<div class="col">
								<a href="#" class="btn btn-primary custom-border-radius custom-btn-style-1 text-3 font-weight-semibold text-color-light text-uppercase outline-none">View More <i class="custom-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</section>

				<section id="counter" class="section section-parallax section-text-light section-center m-0 pt-4 pb-4" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/event/counter/parallax-event.jpg">
					<div class="container mt-4 mb-4">
						<div class="row mt-2 mb-2 counters counters-text-light">
							<div class="col-12 col-lg-3 col-sm-6">
								@include('porto.partials.counter.counter-37')
							</div>
							<div class="col-12 col-lg-3 col-sm-6">
								@include('porto.partials.counter.counter-38')
							</div>
							<div class="col-12 col-lg-3 col-sm-6">
								@include('porto.partials.counter.counter-39')
							</div>
							<div class="col-12 col-lg-3 col-sm-6">
								@include('porto.partials.counter.counter-40')
							</div>
						</div>
					</div>
				</section>

				<section id="sponsors" class="section-center pb-2 pt-4">
					<div class="container pb-4 pt-4 mt-4">
						<div class="row pt-2 pb-4">
							<div class="col">
								<h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-1">Sponsors</h2>
								<p class="custom-font-size-1 text-center mb-2">Thanks to our sponsors</p>
							</div>
						</div>
						<div class="row mb-4 pb-4">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-61')
							</div>
						</div>
					</div>
				</section>

				<section id="venue" class="pt-4">
					<div class="container pt-4 mt-4">
						<div class="row pt-2 mb-3">
							<div class="col">
								<h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-1">Venue</h2>
								<p class="custom-font-size-1 text-center mb-2">Check out the Venue Information</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-10">
								<div class="custom-venue-address bg-color-light row">
									<div class="col-md-6 d-none d-md-block p-0" style="background-image: url('img/demos/event/venue/venue-img.jpg')"></div>
									<div class="col-md-6 p-5">
										<div class="p-2">
											<div class="text-color-dark font-weight-bold text-uppercase mb-3">New York Plazha</div>
											<p class="font-weight-normal mb-0"><strong>Address:</strong> 1234, Street, City Name, United States</p>
											<p class="font-weight-normal mb-4">
												<strong>Phone:</strong>
												<a href="tel:+123456789" class="custom-text-color-def">
													(123) 456-789
												</a>
											</p>
											<a href="http://maps.google.com" target="_blank" class="btn btn-primary custom-border-radius custom-btn-style-1 text-3 font-weight-semibold text-color-light text-uppercase outline-none">Get Direction <i class="custom-long-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
									<span class="custom-arrow bg-color-light"></span>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				@include('porto.partials.google-map.google-map-15')

		</main>
@endsection

@section('footer')
@include('porto.partials.footer.footer-147')
@endsection
