@extends('porto.app')
@section('header')
@include('porto.partials.header.header-22')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-67')

				<div class="container container-lg-custom pb-5 pt-2">
					<div class="custom-tour-wrapper custom-tour-wrapper-static border custom-border-color-1 border-0 mb-0">
						<div class="custom-tour-stage">
							<div class="custom-tour-item row align-items-center py-2 mx-0">
								<div class="col-md-4">
									<span class="text-color-primary font-weight-bold d-block">DATE/TIME</span>
								</div>
								<div class="col-md-4">
									<span class="text-color-primary font-weight-bold d-block">PLACE</span>
								</div>
								<div class="col-md-4">
									<span class="text-color-primary font-weight-bold d-block">LOCATION</span>
								</div>
							</div>
						</div>
					</div>
					<div class="custom-tour-wrapper custom-tour-wrapper-static border custom-border-color-1 border-left-0 border-right-0 mb-5">
						<div class="custom-tour-stage">
							<div class="custom-tour-item row align-items-center py-4 mx-0">
								<div class="col-lg-4">
									<h3 class="font-weight-bold mb-0">TUE, MAR 12 - 2021</h3>
									<span class="d-block text-color-light line-height-4 opacity-7">11:00 pm</span>
								</div>
								<div class="col-lg-4">
									<span class="text-color-light opacity-7 text-5">Eventim Apollo</span>
								</div>
								<div class="col-lg-4 mb-4 mb-lg-0">
									<span class="text-color-light opacity-7 text-5">London, UK</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<img class="img-fluid mb-3" src="img/demos/band/blog/blog-1.jpg" alt="">
							<img class="img-fluid mb-3" src="img/demos/band/blog/blog-2.jpg" alt="">
						</div>
						<div class="col-md-8">
							<p class="font-weight-bold line-height-9 text-4 mb-4 pb-2 pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id ex ac metus interdum commodo. Mauris cursus finibus elit, ut venenatis augue pharetra id. Donec condimentum porta posuere. Suspendisse sed erat venenatis, lobortis magna at, vehicula mauris. </p>
							<p class="line-height-9 mb-4 pb-2">Aenean elit ipsum, congue lacinia purus et, eleifend tempor lectus. Vivamus sed magna sed magna congue vehicula et ac mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec nec cursus orci, hendrerit tempor libero. Quisque scelerisque est eros, sit amet tempor dui scelerisque vitae. Sed placerat nibh vel tristique malesuada. </p>
							<p class="line-height-9 mb-0">Aenean elit ipsum, congue lacinia purus et, eleifend tempor lectus. Vivamus sed magna sed magna congue vehicula et ac mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec nec cursus orci, hendrerit tempor libero. Quisque scelerisque est eros, sit amet tempor dui scelerisque vitae. Sed placerat nibh vel tristique malesuada. Aenean elit ipsum, congue lacinia purus et, eleifend tempor lectus. Vivamus sed magna sed magna congue vehicula et ac mi. Lorem ipsum dolor sit amet. </p>
						</div>
					</div>
					<div class="row mt-4 pt-2">
						<div class="col">
							<div class="custom-tour-wrapper-static border custom-border-color-1 border-left-0 border-right-0 border-bottom-0">
								<div class="row">
									<div class="col-md-4 py-4">
										<span class="text-color-light font-weight-bold d-block">PARTNERS</span>

										@include('porto.partials.owl-carousel.owl-carousel-16')

									</div>
									<div class="col-md-5 py-4">
										<span class="text-color-light font-weight-bold d-block">TICKETS AND MORE</span>
										<a href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-px-5 py-3 mt-4"><span class="position-relative top-1">BUY TICKETS</span></a>
										<a href="#" class="btn btn-secondary btn-rounded font-weight-semibold btn-px-5 py-3 mt-4"><span class="position-relative top-1">VENUE ADDRESS</span></a>
										<a href="#" class="btn btn-secondary btn-rounded font-weight-semibold btn-px-5 py-3 mt-4"><span class="position-relative top-1">VENUE LINK</span></a>
									</div>
									<div class="col-md-3 py-4 text-right">
										<span class="text-color-light font-weight-bold d-block">SHARE THIS EVENT</span>

										<div class="mt-4 float-right">
											<!-- AddThis Button BEGIN -->
											<div class="addthis_toolbox addthis_default_style ">
												<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
												<a class="addthis_counter addthis_pill_style"></a>
											</div>
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
											<!-- AddThis Button END -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-secondary border-0 mt-0">
				<div class="container-fluid py-4 px-5">
					<div class="row justify-content-center justify-content-md-between align-items-center py-5">
						<div class="col-auto mb-4 mb-md-0">
							<a href="demo-band.html">
								<img src="img/demos/band/logo.png" class="img-fluid" alt="" width="112" height="30">
							</a>
						</div>
						<div class="col-auto">
							<ul class="list list-inline list-unstyled text-center text-md-left mb-0">
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#home" class="text-color-light font-weight-bold">HOME</a></li>
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#tour" class="text-color-light font-weight-bold">TOUR</a></li>
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#about" class="text-color-light font-weight-bold">ABOUT</a></li>
								<li class="list-inline-item px-2 mx-3 mb-0"><a data-hash data-hash-offset="70" href="#news" class="text-color-light font-weight-bold">NEWS</a></li>
								<li class="list-inline-item pl-2 ml-3 mb-0"><a href="#hiddenContactForm" data-toggle="collapse" aria-controls="hiddenContactForm" onclick="scrollAndFocus(this, '#contact', '#name', 70, true);" class="text-color-light font-weight-bold">CONTACT</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="contact" class="footer-contact-form">
					<div id="hiddenContactForm" class="collapse">
						<div class="container container-lg-custom">
							<div class="row my-5">
								<div class="col text-center">
									<svg class="mb-4" width="20" height="72" viewbox="0 0 10 40">
										<line x1="5" x2="5" y1="0" y2="40" stroke="#909294" stroke-width="1" class="appear-animation" data-appear-animation="customSVGLineAnim"></line>
									</svg>
									<div class="overflow-hidden">
										<span class="d-block text-color-light font-weight-bold d-block appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">GET IN TOUCH</span>
									</div>
									<div class="overflow-hidden mb-3">
										<h2 class="font-weight-bold text-9 pb-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Contact Us</h2>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="font-weight-bold text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col">
									<form class="contact-form form-style-4 form-errors-light appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block"></span>
										</div>
										
										<div class="form-row">
											<div class="form-group col-md-4">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name" required>
											</div>
											<div class="form-group col-md-4">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="E-mail" required>
											</div>
											<div class="form-group col-md-4">
												<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" placeholder="Subject" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-6', ['key' => 'footer-copyright.footer-copyright-6'])
			</footer>
@endsection
