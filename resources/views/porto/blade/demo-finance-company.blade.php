@extends('porto.app')
@section('header')
@include('porto.partials.header.header-97')
@endsection

@section('main')
<div role="main" class="main">

			<section class="section section-parallax parallax custom-parallax-medium-padding m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/finance/parallax/parallax-5.jpg">
				<div class="container">
					<div class="row">
						<div class="col">
							<h1 class="text-uppercase text-color-light font-weight-bold text-center m-0">Company</h1>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border custom-section-spacement-1 bg-color-light m-0">
				<div class="container">
					<div class="row text-center">
						<div class="col">
							<h2 class="text-uppercase text-color-dark font-weight-bold">About us</h2>
							<p class="text-4 text-color-dark mb-5">Our History</p>
							<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, tempora assumenda esse eveniet. Dolor velit fuga nam sequi dicta iusto, fugiat in esse facilis pariatur architecto voluptatem reprehenderit hic ipsa sint nihil, ea quidem porro praesentium. Distinctio fugiat natus voluptatem sit dignissimos quia aliquam cumque perferendis doloremque quidem vero error ratione iste voluptas, nam adipisci nemo?</p>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border bg-color-light custom-section-spacement-2 m-0">
				<div class="container">
					<div class="row justify-content-center counters custom-counters counters-text-light">
						<div class="col-lg-3 mb-5 mb-lg-0">
							@include('porto.partials.counter.counter-41')
						</div>
						<div class="col-lg-3 mb-5 mb-lg-0">
							@include('porto.partials.counter.counter-42')
						</div>
						<div class="col-lg-3">
							@include('porto.partials.counter.counter-43')
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border section-primary custom-section-spacement-1 m-0">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 mb-4 mb-lg-0">
							@include('porto.partials.feature-box.feature-box-65')
							<p class="custom-text-color-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quas dicta exercitationem deleniti molestiae, voluptatum harum modi eius officia nulla quaerat ex asperiores ullam numquam amet provident incidunt sapiente, vero dolorum, sunt omnis deserunt ea dolores ratione suscipit. Veritatis.</p>
						</div>
						<div class="col-lg-6">
							@include('porto.partials.feature-box.feature-box-66')
							<p class="custom-text-color-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores nobis dolorum sint! Dolorem aperiam voluptatum doloribus nulla quo libero? At, asperiores, fuga! Minus quo ad nam cupiditate quis natus, ut tempore, culpa sunt?</p>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border custom-section-spacement-1 bg-color-light m-0">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 mb-4 mb-lg-0">
							<h2 class="text-uppercase text-color-dark font-weight-bold">Our History</h2>
							<p class="text-4 text-color-dark mb-4">Our Way of Success</p>
							<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium iste necessitatibus velit eum quis, dignissimos modi atque libero magni, explicabo nihil illo soluta accusantium suscipit, nobis maiores deleniti mollitia, quod id nam assumenda ducimus.</p>
							<div class="custom-timeline">
								<div class="custom-timeline-box">
									<span class="date font-weight-bold text-color-primary line-height-6">2001</span>
									<h4 class="text-color-dark font-weight-semibold">Company formed</h4>
									<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, rem labore facere. Veritatis enim laborum facilis minima, illo ratione?</p>
								</div>
								<div class="custom-timeline-box">
									<span class="date font-weight-bold text-color-primary line-height-6">2005</span>
									<h4 class="text-color-dark font-weight-semibold">Suspendisse tincidunt nibh.</h4>
									<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad cum eos quas, explicabo, possimus harum optio consequuntur quod veniam.</p>
								</div>
								<div class="custom-timeline-box">
									<span class="date font-weight-bold text-color-primary line-height-6">2021</span>
									<h4 class="text-color-dark font-weight-semibold">Awards and 300 empolyees</h4>
									<p class="custom-text-color-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, molestias numquam culpa, eligendi debitis dicta, hic delectus obcaecati accusantium quaerat magni explicabo et dolorem mollitia cumque sint deserunt. Labore vel magnam quasi.</p>
								</div>
								<div class="timeline-bar"></div>
							</div>
						</div>
						<div class="col-lg-6 text-center">
							<img src="img/demos/finance/others/our-history-1.jpg" alt class="img-fluid">
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border section-tertiary custom-section-spacement-1 m-0">
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
								@include('porto.partials.thumb-info.thumb-info-112')
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
								@include('porto.partials.thumb-info.thumb-info-113')
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
								@include('porto.partials.thumb-info.thumb-info-114')
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
								@include('porto.partials.thumb-info.thumb-info-115')
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
						<div class="col-lg-12 text-center">
							<a href="demo-finance-team.html" class="btn btn-outline btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-4">View More</a>
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
