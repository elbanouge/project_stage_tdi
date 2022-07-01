@extends('porto.app')
@section('header')
@include('porto.partials.header.header-101')
@endsection

@section('main')
<div role="main" class="main">

			<section class="section section-parallax parallax custom-parallax-medium-padding m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/finance/parallax/parallax-8.jpg">
				<div class="container">
					<div class="row">
						<div class="col">
							<h1 class="text-uppercase text-color-light font-weight-bold text-center m-0">team</h1>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border custom-section-spacement-1 bg-color-light m-0">
				<div class="container">
					<div class="row text-center">
						<div class="col">
							<h2 class="text-uppercase text-color-dark font-weight-bold">Invested your money with real Professionals</h2>
							<p class="text-4 text-color-dark mb-5">Meet our Team of Specialists</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<a href="#team-content-1" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-116')
							</a>
							<div id="team-content-1" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-1.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
						<div class="col-lg-3 col-sm-6">
							<a href="#team-content-2" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-117')
							</a>
							<div id="team-content-2" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-2.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
						<div class="col-lg-3 col-sm-6">
							<a href="#team-content-3" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-118')
							</a>
							<div id="team-content-3" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-3.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
						<div class="col-lg-3 col-sm-6">
							<a href="#team-content-4" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-119')
							</a>
							<div id="team-content-4" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-4.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<a href="#team-content-5" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-120')
							</a>
							<div id="team-content-5" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-5.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
						<div class="col-lg-3 col-sm-6">
							<a href="#team-content-6" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-121')
							</a>
							<div id="team-content-6" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-6.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
						<div class="col-lg-3 col-sm-6">
							<a href="#team-content-7" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-122')
							</a>
							<div id="team-content-7" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-7.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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
						<div class="col-lg-3 col-sm-6">
							<a href="#team-content-8" class="popup-with-zoom-anim text-decoration-none">
								@include('porto.partials.thumb-info.thumb-info-123')
							</a>
							<div id="team-content-8" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<img src="img/demos/finance/team/team-8.jpg" class="img-fluid mb-4" alt="">
										<ul class="social-icons custom-social-icons text-center">
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

			<section class="section section-parallax parallax custom-parallax-big-padding m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/finance/parallax/parallax-4.jpg">
				<div class="container">
					<div class="row text-center">
						<div class="col">
							<h2 class="custom-text-size-1 text-color-light font-weight-semibold">Let's talk Business</h2>
							<p class="custom-bottom-bar text-4 custom-text-color-4 mb-5">Talk to a Specialist</p>
						</div>
					</div>
					<div class="row justify-content-center mt-2">
						<div class="col-lg-3 custom-right-border">
							<a href="tel:+18001234567" class="custom-text-color-4 custom-hover-opacity text-decoration-none">
								<div class="custom-contact-item text-center">
									<i class="icon-call-in icons"></i>
									<span class="title text-uppercase font-weight-bold">Call Us Now</span>
									<span class="content text-color-light">800 123 4567</span>
								</div>
							</a>
						</div>
						<div class="col-lg-3">
							<a href="mailto:you@domain.com" class="custom-text-color-4 custom-hover-opacity text-decoration-none">
								<div class="custom-contact-item text-center">
									<i class="icon-envelope icons"></i>
									<span class="title text-uppercase font-weight-bold">Send An Email</span>
									<span class="content text-color-light">you@domain.com</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="custom-footer bg-color-light m-0">
				<div class="container py-4">
					<div class="row text-center text-lg-left pt-5 pb-4">
						<div class="col-md-3 mb-4 mb-lg-0">
							<a href="#" class="text-decoration-none">
								<img src="img/demos/finance/logo.png" width="100" height="45" class="img-fluid" alt>
							</a>
						</div>
						<div class="col-md-2 mb-4 mb-lg-0">
							<h5 class="text-color-dark font-weight-bold mb-1">Services</h5>
							<ul>
								<li>
									<a class="custom-text-color-1" href="tel:+8001234567" target="_blank" title="Call Us">
										800 123 4567
									</a>
								</li>
								<li>
									<a class="custom-text-color-1" href="demo-finance-contact-us.html" title="Contact Us">
										Contact Us
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-2 mb-4 mb-lg-0">
							<h5 class="text-color-dark font-weight-bold mb-1">Company</h5>
							<ul>
								<li>
									<a class="custom-text-color-1" href="demo-finance-company.html" title="About Us">
										About Us
									</a>
								</li>
								<li>
									<a class="custom-text-color-1" href="demo-finance-team.html" title="Team">
										Team
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-2 mb-4 mb-lg-0">
							<h5 class="text-color-dark font-weight-bold mb-1">Policies</h5>
							<ul>
								<li>
									<a class="custom-text-color-1" href="#" title="Privacy policy">
										Privacy policy
									</a>
								</li>
								<li>
									<a class="custom-text-color-1" href="#" title="Terms of Use">
										Terms of Use
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="social-icons custom-social-icons float-lg-right">
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
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" target="_blank" title="Instagram">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-17', ['key' => 'footer-copyright.footer-copyright-17'])
			</footer>
@endsection
