@extends('porto.app')
@section('header')
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-top">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
												</li>
												<li clasporto.partials-anim-icon d-none d-md-block">
													<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
												</li>
												<li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
													<a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<img src="img/blank.gif" class="flag flag-us" alt="English"> English
														<i class="fas fa-angle-down"></i>
													</a>
													<div class="dropdown-menu" aria-labelledby="dropdownLanguage">
														<a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-us" alt="English"> English</a>
														<a clporto.partialshref="#"><img src="img/blank.gif" class="flag flag-es" alt="English"> Español</a>
														<a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-fr" alt="English"> Française</a>
													</div>
												</li>
												<li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
													<span porto.partials class="fas fa-phone"></i> (123) 456-789</span>
												</li>porto.partialsporto.partials
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										@include('porto.partials.header-social-icons.header-social-icons-5')
									</div>
								</div>
							</div>
						</div>
					</div>porto.partials
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									@include('porto.partials.header-logo.header-logo-2')
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									@include('porto.partials.header-nav.header-nav-313')
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										@include('porto.partials.header-nav-feature.header-nav-feature')
										@include('porto.partials.header-nav-feature.header-nav-feature-1')
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-311')

				<div class="container py-4">

					<div class="row">
						<div class="col">

							<div id="revolutionSliderMediasContainer" class="rev_slider_wrapper mb-4" style="height: 724px;">
								<div id="revolutionSliderMedias" class="rev_slider" data-version="5.4.8">
									<ul>
										<li data-index="rs-105" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/vimeo-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Project Overview" data-param1="Vimeo Video" data-description="">
											<img src="img/blank.gif" alt="" data-lazyload="img/vimeo-1.jpg" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

											<div class="tp-caption tp-resizeme fullscreenvideo tp-videolayer" data-x="0" data-y="0" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="s:1000;e:Power1.easeInOut;" data-transform_out="s:1000;s:1000;" data-start="1150" data-responsive_offset="on" data-vimeoid="23598156" data-videoattributes="title=0&amp;byline=0&amp;portrait=0&amp;api=1" data-videowidth="100%" data-videoheight="100%" data-videoloop="none" data-forcecover="1" data-aspectratio="16:9" data-autoplay="off" data-nextslideatend="true" data-volume="100" data-forcerewind="on" style="z-index: 5;"> 
											</div>
										</li>
										<li data-index="rs-106" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="video/memory-of-a-woman.jpg" data-rotate="0" data-saveperformance="off" data-title="Landing Page" data-param1="HTML5 Video" data-description="">
											<img src="img/blank.gif" alt="" data-lazyload="video/memory-of-a-woman.jpg" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

											<div class="tp-caption tp-resizeme fullscreenvideo tp-videolayer" data-x="0" data-y="0" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-style_hover="cursor:pointer;" data-transform_in="s:1000;e:Power1.easeInOut;" data-transform_out="s:1000;s:1000;" data-start="1000" data-responsive_offset="on" data-videocontrols="none" data-videowidth="100%" data-videoheight="100%" data-videoposter="video/memory-of-a-woman.jpg" data-videomp4="video/memory-of-a-woman.mp4" data-posteronmobile="off" data-videopreload="auto" data-videoloop="none" data-forcecover="1" data-aspectratio="16:9" data-autoplay="on" data-nextslideatend="true" data-forcerewind="on" style="z-index: 5;">
											</div>
										</li>
										<li data-index="rs-107" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/youtube-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Presentation" data-param1="Youtube Video" data-description="">
											<img src="img/blank.gif" alt="" data-lazyload="img/youtube-1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

											<div class="tp-caption tp-resizeme fullscreenvideo tp-videolayer" id="slide-107-layer-3" data-x="0" data-y="0" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="s:1000;e:Power1.easeInOut;" data-transform_out="s:1000;s:1000;" data-start="1000" data-responsive_offset="on" data-ytid="oNBBijn4JuY" data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;volume=100&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0;;origin=http://server.local;" data-videorate="1" data-videowidth="100%" data-videoheight="100%" data-videocontrols="controls" data-videoloop="none" data-forcecover="1" data-aspectratio="16:9" data-autoplay="on" data-nextslideatend="true" data-volume="100" data-forcerewind="on" style="z-index: 5;"> 
											</div>
										</li>
										<li data-index="rs-110" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/projects/project-27.jpg" data-rotate="0" data-saveperformance="off" data-title="Project Screen" data-param1="Regular Image" data-description="">

											<img src="img/blank.gif" alt="" data-lazyload="img/projects/project-27-detail.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<div class="row pt-4 mt-2 mb-5">
						<div class="col-md-7 mb-4 mb-md-0">

							<div class="overflow-hidden mb-2">
								<h2 class="text-color-dark font-weight-normal text-5 mb-0 appear-animation" data-appear-animation="maskUp">Project <strong class="font-weight-extra-bold">Description</strong></h2>
							</div>

							<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>

							<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

							<hr class="solid my-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">

							<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
								<strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
								<ul class="social-icons">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
									<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>

						</div>
						<div class="col-md-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
							<h2 class="text-color-dark font-weight-normal text-5 mb-2">Project <strong class="font-weight-extra-bold">Details</strong></h2>
							<ul class="list list-icons list-primary list-borders text-2">
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Client:</strong> Okler Themes</li>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> January 2021</li>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">DESIGN</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">BRAND</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">WEBSITES</a></li>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Project URL:</strong> <a href="#" target="_blank" class="text-dark">http://www.okler.net</a></li>
							</ul>
						</div>
					</div>

				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="footer-texts-more-lighten mt-0">
				<div class="container">
					<div class="row py-4 my-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">CONTACT INFO</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span> 
									1234 Street Name, City, State, USA
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
									<a href="tel:+1234567890">Toll Free (123) 456-7890</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
									<a href="mailto:mail@example.com">mail@example.com</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">WORKING DAYS/HOURS </span>
									Mon - Sun / 9:00AM - 8:00PM
								</li>
							</ul>
							<ul class="social-icons social-icons-clean-with-border social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-2">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">USEFUL LINKS</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="contact-us-1.html">Help Center</a></li>
								<li class="mb-0"><a href="about-us.html">About Us</a></li>
								<li class="mb-0"><a href="contact-us.html">Contact Us</a></li>
								<li class="mb-0"><a href="page-careers.html">Careers</a></li>
								<li class="mb-0"><a href="blog-grid-4-columns.html">Blog</a></li>
								<li class="mb-0"><a href="#">Our Location</a></li>
								<li class="mb-0"><a href="#">Privacy Policy</a></li>
								<li class="mb-0"><a href="sitemap.html">Sitemap</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-4 mb-5 mb-md-0">
							<h5 class="text-4 text-color-light mb-3">RECENT NEWS</h5>
							<article class="mb-3">
								<a href="blog-post.html" class="text-color-light text-3-5">Why should I buy a Web Template?</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
							<article class="mb-3">
								<a href="blog-post.html" class="text-color-light text-3-5">Creating Amazing Website with Porto</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
							<article>
								<a href="blog-post.html" class="text-color-light text-3-5">Best Practices for Top UI Design</a>
								<p clasporto.partials0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
						</div>
						<div class="col-md-6 col-lg-3">
							<h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
							<p class="mb-2">Get all the latest information on events, sales and offers. Sign up for newsletter:</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" class="form-style-5 opacity-10" action="php/newsletter-subscribe.php" method="POST">
								<div class="form-row">
									<div class="form-group col">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<button class="btn btn-primary btn-rounded btn-px-4 btn-py-2 font-weight-bold" type="submit">SUBSCRIBE</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="container">
					@include('porto.partials.footer-copyright.footer-copyright', ['key' => 'footer-copyright.footer-copyright'])
				</div>
			</footer>
@endsection
