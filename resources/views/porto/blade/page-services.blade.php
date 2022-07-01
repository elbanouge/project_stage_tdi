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
						</div>porto.partials
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									@include('porto.partials.header-logo.header-logo-2')
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									@include('porto.partials.header-nav.header-nav-310')
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
				@include('porto.partials.page-header.page-header-270')

				<div class="container pb-1">

					<div class="row pt-4">
						<div class="col">
							<div class="overflow-hidden mb-3">
								<h2 class="font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
									We Are Here To Help You
								</h2>
							</div>
						</div>porto.partials
					</div>

					<div class="roporto.partials
						<div class="col-lg-10">
							<div class="overflow-hidden">
								<p class="lporto.partialsation" data-appear-animation="maskUp" data-appear-animation-delay="200">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes.
								</p>
							</div>porto.partials
						</div>
						<div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
							<a href="#" porto.partialsn btn-dark mt-1">Get a Quote!</a>
						</div>
					</div>
porto.partials
					<div class="row">
						<div class="col py-3">
							<hr class="solid mt-5 mb-2">
						</div>
					</div>

					<div class="row">
						<div class="featured-boxes featured-boxes-style-2">
							<div class="row">
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
									@include('porto.partials.featured-box.featured-box-470', ['key' => 'featured-box.featured-box-470'])
								</div>
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900">
									@include('porto.partials.featured-box.featured-box-471', ['key' => 'featured-box.featured-box-471'])
								</div>
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100">
									@include('porto.partials.featured-box.featured-box-472', ['key' => 'featured-box.featured-box-472'])
								</div>
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1500">
									@include('porto.partials.featured-box.featured-box-473', ['key' => 'featured-box.featured-box-473'])
								</div>
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1300">
									@include('porto.partials.featured-box.featured-box-474', ['key' => 'featured-box.featured-box-474'])
								</div>
								<div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1100">
									@include('porto.partials.featured-box.featured-box-475', ['key' => 'featured-box.featured-box-475'])
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section bg-color-grey section-height-3 border-0 mt-5 mb-0">
					<div class="container">

						<div class="row">
							<div class="col">

								<div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
									<div class="col-md-4 mb-4 mb-md-0">
										<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="img/layout-styles.png" alt="layout styles">
									</div>
									<div class="col-md-8 pl-md-5">
										<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Layout</strong> Styles &amp; Variants</h2>
										<p class="text-4">There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template, navigate in our preview and see the header variations, the colors, and the page content types that you will be able to use.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
									</div>
								</div>

								<hr class="solid my-5">

								<div class="row align-items-center pt-5 pb-3 appear-animation" data-appear-animation="fadeInRightShorter">
									<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
										<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Exclusive</strong> Style Switcher</h2>
										<p class="text-4">With our exlusive Style Switcher you will be able to choose any color you want for your website, choose the layout style (wide / boxed), website type (one page / normal), then generate the css that will be compiled by a {less} proccessor.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
									</div>
									<div class="col-md-4 px-5 px-md-3">
										<img class="img-fluid scale-2 my-4" src="img/style-switcher.png" alt="style switcher">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>				

				<div class="container-fluid">
					<div class="row featured-boxes-full featured-boxes-full-scale">
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="far fa-life-ring"></i>
							<h4>Customer Support</h4>
							<p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
						</div>
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="fas fa-film"></i>
							<h4>Sliders</h4>
							<p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
						</div>
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="far fa-star"></i>
							<h4>Winner</h4>
							<p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. </p>
						</div>
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="far fa-edit"></i>
							<h4>Customizable</h4>
							<p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
						</div>
					</div>
				</div>

				<div class="container pt-4">
					<div class="row text-center pt-4 mt-5">
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

					<div class="row text-center mt-5 pb-5 mb-5">
						@include('porto.partials.owl-carousel.owl-carousel-17')
					</div>
				</div>

				@include('porto.partials.call-to-action.call-to-action-36')

			</div>
@endsection

@section('footer')
<footer id="footer" class="footer-texts-more-lighten">
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
