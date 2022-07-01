@extends('porto.app')
@section('header')
@include('porto.partials.header.header-37')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-83')

				<div class="container pt-3 pb-5 mt-4 mb-5">
					<div class="row">
						<div class="col text-center">
							<h2 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">The best professionals for your business</h2>
							<p class="text-3-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Vestibulum luctus laoreet lacinia. Maecenas luctus arcu ut orci lacinia ultrices. </p>
						</div>
					</div>
					<div id="john" class="row mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
						<div class="col">
							<div class="d-flex flex-wrap bg-light box-shadow-4 custom-link-hover-effects">
								<div class="position-relative lazyload col-12 col-md-4" data-bg-src="img/demos/business-consulting-3/team/team-1.jpg" style="background-position: center; background-size: cover; min-height: 320px;">
									<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
										<div class="custom-crooked-line">
											<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
										</div>
									</div>
								</div>
								<div class="col-md-8 p-5">
									<div class="d-flex justify-content-between justify-content-md-start mb-4">
										<div>
											<h2 class="font-weight-semibold text-6 line-height-1 mb-0">John Doe</h2>
											<p class="text-3-5 mb-0">CEO and Founder</p>
										</div>
										<div class="bg-color-grey ml-4 mr-1 d-none d-md-block" style="width: 8px;"></div>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ml-lg-2">
											<li class="social-icons-instagram">
												<a href="http://www.instagram.com/" target="_blank" class="text-4" title="Instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" class="text-4" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" class="text-4" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
											</li>
										</ul>
									</div>
									<div class="custom-read-more-style-1" data-plugin-readmore data-plugin-options="{
											'buttonOpenLabel': 'View More &lt;i class=\'fas fa-chevron-down text-2 ml-1\'&gt;&lt;/i&gt;',
											'buttonCloseLabel': 'View Less &lt;i class=\'fas fa-chevron-up text-2 ml-1\'&gt;&lt;/i&gt;',
											'maxHeight': 160
										}">
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										@include('porto.partials.readmore-button-wrapper.readmore-button-wrapper-3')
									</div>

								</div>
							</div>
						</div>
					</div>
					<div id="robert" class="row mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
						<div class="col">
							<div class="d-flex flex-wrap bg-light box-shadow-4 custom-link-hover-effects">
								<div class="position-relative lazyload col-12 col-md-4" data-bg-src="img/demos/business-consulting-3/team/team-2.jpg" style="background-position: center; background-size: cover; min-height: 320px;">
									<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
										<div class="custom-crooked-line">
											<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
										</div>
									</div>
								</div>
								<div class="col-md-8 p-5">
									<div class="d-flex justify-content-between justify-content-md-start mb-4">
										<div>
											<h2 class="font-weight-semibold text-6 line-height-1 mb-0">Robert Doe</h2>
											<p class="text-3-5 mb-0">CEO and Founder</p>
										</div>
										<div class="bg-color-grey ml-4 mr-1 d-none d-md-block" style="width: 8px;"></div>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ml-lg-2">
											<li class="social-icons-instagram">
												<a href="http://www.instagram.com/" target="_blank" class="text-4" title="Instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" class="text-4" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" class="text-4" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
											</li>
										</ul>
									</div>
									<div class="custom-read-more-style-1" data-plugin-readmore data-plugin-options="{
											'buttonOpenLabel': 'View More &lt;i class=\'fas fa-chevron-down text-2 ml-1\'&gt;&lt;/i&gt;',
											'buttonCloseLabel': 'View Less &lt;i class=\'fas fa-chevron-up text-2 ml-1\'&gt;&lt;/i&gt;',
											'maxHeight': 160
										}">
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										@include('porto.partials.readmore-button-wrapper.readmore-button-wrapper-3')
									</div>

								</div>
							</div>
						</div>
					</div>
					<div id="jessica" class="row mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
						<div class="col">
							<div class="d-flex flex-wrap bg-light box-shadow-4 custom-link-hover-effects">
								<div class="position-relative lazyload col-12 col-md-4" data-bg-src="img/demos/business-consulting-3/team/team-3.jpg" style="background-position: center; background-size: cover; min-height: 320px;">
									<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
										<div class="custom-crooked-line">
											<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
										</div>
									</div>
								</div>
								<div class="col-md-8 p-5">
									<div class="d-flex justify-content-between justify-content-md-start mb-4">
										<div>
											<h2 class="font-weight-semibold text-6 line-height-1 mb-0">Jessica Doe</h2>
											<p class="text-3-5 mb-0">CEO and Founder</p>
										</div>
										<div class="bg-color-grey ml-4 mr-1 d-none d-md-block" style="width: 8px;"></div>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ml-lg-2">
											<li class="social-icons-instagram">
												<a href="http://www.instagram.com/" target="_blank" class="text-4" title="Instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" class="text-4" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" class="text-4" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
											</li>
										</ul>
									</div>
									<div class="custom-read-more-style-1" data-plugin-readmore data-plugin-options="{
											'buttonOpenLabel': 'View More &lt;i class=\'fas fa-chevron-down text-2 ml-1\'&gt;&lt;/i&gt;',
											'buttonCloseLabel': 'View Less &lt;i class=\'fas fa-chevron-up text-2 ml-1\'&gt;&lt;/i&gt;',
											'maxHeight': 160
										}">
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										@include('porto.partials.readmore-button-wrapper.readmore-button-wrapper-3')
									</div>

								</div>
							</div>
						</div>
					</div>
					<div id="monica" class="row mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
						<div class="col">
							<div class="d-flex flex-wrap bg-light box-shadow-4 custom-link-hover-effects">
								<div class="position-relative lazyload col-12 col-md-4" data-bg-src="img/demos/business-consulting-3/team/team-4.jpg" style="background-position: center; background-size: cover; min-height: 320px;">
									<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
										<div class="custom-crooked-line">
											<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
										</div>
									</div>
								</div>
								<div class="col-md-8 p-5">
									<div class="d-flex justify-content-between justify-content-md-start mb-4">
										<div>
											<h2 class="font-weight-semibold text-6 line-height-1 mb-0">Monica Doe</h2>
											<p class="text-3-5 mb-0">CEO and Founder</p>
										</div>
										<div class="bg-color-grey ml-4 mr-1 d-none d-md-block" style="width: 8px;"></div>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ml-lg-2">
											<li class="social-icons-instagram">
												<a href="http://www.instagram.com/" target="_blank" class="text-4" title="Instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" class="text-4" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" class="text-4" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
											</li>
										</ul>
									</div>
									<div class="custom-read-more-style-1" data-plugin-readmore data-plugin-options="{
											'buttonOpenLabel': 'View More &lt;i class=\'fas fa-chevron-down text-2 ml-1\'&gt;&lt;/i&gt;',
											'buttonCloseLabel': 'View Less &lt;i class=\'fas fa-chevron-up text-2 ml-1\'&gt;&lt;/i&gt;',
											'maxHeight': 160
										}">
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										@include('porto.partials.readmore-button-wrapper.readmore-button-wrapper-3')
									</div>

								</div>
							</div>
						</div>
					</div>
					<div id="chris" class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
						<div class="col">
							<div class="d-flex flex-wrap bg-light box-shadow-4 custom-link-hover-effects">
								<div class="position-relative lazyload col-12 col-md-4" data-bg-src="img/demos/business-consulting-3/team/team-5.jpg" style="background-position: center; background-size: cover; min-height: 320px;">
									<div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
										<div class="custom-crooked-line">
											<img width="154" height="26" src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;">
										</div>
									</div>
								</div>
								<div class="col-md-8 p-5">
									<div class="d-flex justify-content-between justify-content-md-start mb-4">
										<div>
											<h2 class="font-weight-semibold text-6 line-height-1 mb-0">Chris Doe</h2>
											<p class="text-3-5 mb-0">CEO and Founder</p>
										</div>
										<div class="bg-color-grey ml-4 mr-1 d-none d-md-block" style="width: 8px;"></div>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ml-lg-2">
											<li class="social-icons-instagram">
												<a href="http://www.instagram.com/" target="_blank" class="text-4" title="Instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" class="text-4" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" class="text-4" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
											</li>
										</ul>
									</div>
									<div class="custom-read-more-style-1" data-plugin-readmore data-plugin-options="{
											'buttonOpenLabel': 'View More &lt;i class=\'fas fa-chevron-down text-2 ml-1\'&gt;&lt;/i&gt;',
											'buttonCloseLabel': 'View Less &lt;i class=\'fas fa-chevron-up text-2 ml-1\'&gt;&lt;/i&gt;',
											'maxHeight': 160
										}">
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
										@include('porto.partials.readmore-button-wrapper.readmore-button-wrapper-3')
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0 m-0 lazyload" data-bg-src="img/demos/business-consulting-3/backgrounds/background-4.jpg" style="background-size: cover; background-position: center; background-repeat: no-repeat;">
				<div class="container pt-3">
					<div class="row justify-content-between align-items-center py-5 mb-3">
						<div class="col-auto mb-4 mb-lg-0">
							<h2 class="font-weight-semibold text-color-light text-10 ls-0 mb-0">Porto Business Consulting Group</h2>
						</div>
						<div class="col-auto">
							<a href="demo-business-consulting-3-contact.html" class="btn btn-primary custom-btn-style-1 font-weight-medium btn-px-4 btn-py-2 text-4" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
								<span class="text-color-light">Contact Us</span>
							</a>
						</div>
					</div>
					<hr class="bg-color-light opacity-1 my-0">
					<div class="row pt-3 mt-5">
						<div class="col-lg-3 mb-4 mb-lg-0">
							<a href="demo-business-consulting-3.html" class="text-decoration-none">
								<img src="img/demos/business-consulting-3/logo-footer.png" class="img-fluid mb-4" width="123" height="33" alt="">
							</a>
							<p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur fel. </p>
							<ul class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter mx-2"><a href="http://www.twitter.com/" target="_blank" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin" data-cursor-effect-hover="fit"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<ul class="list list-icons list-icons-lg">
								<li class="d-flex px-0 mb-1">
									<img width="25" src="img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}">
									<a href="tel:8001234567" class="text-color-light font-weight-semibold text-3-4 ml-2">(800) 123-4567</a>
								</li>
								<li class="d-flex px-0 my-3">
									<img width="25" src="img/demos/business-consulting-3/icons/email.svg" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}">
									<a href="mailto:porto@consulting.com" class="text-color-light font-weight-semibold text-3-4 ml-2">porto@consulting.com</a>
								</li>
								<li class="d-flex font-weight-semibold text-color-light px-0 mb-1">
									<img width="25" src="img/demos/business-consulting-3/icons/map-pin.svg" alt="Location" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light mr-2'}">
									1234 Street Name, New York, NY 10000, USA
								</li>
							</ul>
						</div>
						<div class="col-lg-4 mb-4 mb-lg-0">
							<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
							@include('porto.partials.google-map.google-map-5')
						</div>
						<div class="col-lg-2">
							<h4 class="font-weight-bold text-5">Useful Links</h4>
							<ul class="list list-icons list-icons-sm">
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="demo-business-consulting-3-contact.html" class="link-hover-style-1 ml-1"> Contact Us</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="demo-business-consulting-3-services.html" class="link-hover-style-1 ml-1"> Our Services</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> Payment Methods</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> Services Guide</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> FAQs</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-9', ['key' => 'footer-copyright.footer-copyright-9'])
			</footer>
@endsection
