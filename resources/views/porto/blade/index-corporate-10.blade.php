@extends('porto.app')
@section('header')
@include('porto.partials.header.header-326')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section section-with-shape-divider border-0 py-0 m-0">
					<div class="shape-divider shape-divider-bottom z-index-3" style="height: 136px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1920 136" preserveaspectratio="xMinYMin">
							<path d="M 0 0.11 L 0 136 L 1920 136 L 1920 1.9 C 1650.0482 79.0955 1327.0648 134 980 134 C 615.6218 134 277.7878 84.5059 0 0.11 Z" fill="#ffffff"></path>
						</svg>
					</div>
					<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-primary nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 3000}" style="height: 100vh;">
						<div class="owl-stage-outer">
							<div class=porto.partials
					
								<!-- Carousel Slide 1 -->
								@include('porto.partials.owl-item.owl-item-34')

								<!-- Carousel Slide 2 -->
								@include('porto.partials.owl-item.owl-item-35')
							
							</div>
						</div>
						<div class="owl-nav">
							<button type="button" role="presentation" class="owl-prev"></button>
							<button type="button" role="presentation" class="owl-next"></button>
						</div>
						<div class="owl-dots mb-5">
							<button role="button" class="owl-dot active"><span></span></button>
							<button role="button" class="owl-dot"><span></span></button>
						</div>
					</div>
				</section>
				
				<div class="container container-xl-custom py-4">
					<div class="row py-lg-5 my-5">
						<div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
							<h2 class="font-weight-bold mb-4">Hello, we are Porto</h2>
							<p class="text-color-dark text-6 line-height-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus blandit massa enim.</p>
							<p class="line-height-9 text-4 pr-lg-5 mr-lg-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
							<a href="#" class="learn-more text-primary font-weight-semibold text-2">VIEW MORE <i class="fas fa-chevron-right text-3 ml-2"></i></a>
						</div>
						<div class="col-md-10 col-lg-5">
							<div class="row">
								<div class="col-6 mb-4">
									<div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
										<span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">01</span>
										<h4 class="font-weight-bold text-5 pl-1 mb-2">Strategy</h4>
										<p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
								<div class="col-6 mb-4">
									<div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
										<span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">02</span>
										<h4 class="font-weight-bold text-5 pl-1 mb-2">Plan</h4>
										<p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6 mb-4 mb-sm-0">
									<div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1000">
										<span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">03</span>
										<h4 class="font-weight-bold text-5 pl-1 mb-2">Work</h4>
										<p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
								<div class="col-6">
									<div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1400">
										<span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">04</span>
										<h4 class="font-weight-bold text-5 pl-1 mb-2">Quality</h4>
										<p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
					<div class="container container-xl-custom py-3">
						<div class="row">
							<div class="col text-center">
								<h2 class="font-weight-normal mb-5">Our <strong class="font-weight-extra-bold">Portfolio</strong></h2>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col">
								
								<div class="oporto.partialse nav-style-1 stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}}, 'margin': 3, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
									<div class="m-3">
										<div class="hover-effect-3d">
											@include('porto.partials.thumb-info.thumb-info-478')
										</div>
									</div>porto.partials
									<div class="m-3">
										<div class="hover-effect-3d">
											@include('porto.partials.thumb-info.thumb-info-479')
										</div>
									</div>porto.partials
									<div class="m-3">
										<div class="hover-effect-3d">
											@include('porto.partials.thumb-info.thumb-info-480')
										</div>
									</div>porto.partials
									<div class="m-3">
										<div class="hover-effect-3d">
											@include('porto.partials.thumb-info.thumb-info-481')
										</div>
									</div>porto.partials
									<div class="m-3">
										<div class="hover-effect-3d">
											@include('porto.partials.thumb-info.thumb-info-478')
										</div>
									</div>porto.partials
									<div class="m-3">
										<div class="hover-effect-3d">
											@include('porto.partials.thumb-info.thumb-info-479')
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<a href="#" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2">VIEW MORE</a>
							</div>
						</div>
					</div>
				</section>

				<div class="container container-xl-custom">
					<div class="row text-center py-4 my-5">
						<div class="owl-carousel owl-theme carousel-center-active-item mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'margin': 50, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
							<div>
								<img class="img-fluid" src="img/logos/logo-1.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-2.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-3.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-5.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-6.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-2.png" alt="">
							</div>
						</div>
					</div>
				</div>

				<hr>

				<div class="cporto.partialsl-custom">
					<div class="row justify-content-center featured-boxes featured-boxes-style-4 pb-3 mb-4">
						<div class="col-md-4">
							@include('porto.partials.featured-box.featured-box-444', ['key' => 'featured-box.featured-box-444'])
						</div>
						<div class="col-md-4">
							@include('porto.partials.featured-box.featured-box-445', ['key' => 'featured-box.featured-box-445'])
						</div>
						<div class="col-md-4">
							@include('porto.partials.featured-box.featured-box-446', ['key' => 'featured-box.featured-box-446'])
						</div>
					</div>
				</div>

				<hr>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-color-light border-0 pt-5 mt-0">
				<div class="container pb-5 mb-5">
					<div class="row justify-content-center">
						<div class="col-md-9 col-lg-6">
							<h2 class="font-weight-normal text-color-dark text-center text-8 mb-4"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
							<p class="text-4 opacity-8 text-center mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum</p>
							<form class="contact-form form-style-3" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none">
									Message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none">
									Error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								
								<input type="hidden" value="Contact Form" name="subject" id="subject">
								<div class="form-row">
									<div class="form-group col-md-6 pr-md-2">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control h-auto py-2" placeholder="Your Name..." name="name" id="name" required>
									</div>
									<div class="form-group col-md-6 pl-md-2">
										<input type="text" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control h-auto py-2" placeholder="Your Phone..." name="phone" id="phone" required>
									</div>
								</div>
								<div class="form-group">
									<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control h-auto py-2" placeholder="Your Email Address..." name="email" id="email" required>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" placeholder="Your Message..." name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col text-center">
										<input type="submit" value="SUBMIT" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>porto.partials
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-68', ['key' => 'footer-copyright.footer-copyright-68'])
			</footer>
@endsection
