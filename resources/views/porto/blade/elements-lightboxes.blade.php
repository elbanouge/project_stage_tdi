@extends('porto.app')
@section('header')
@include('porto.partials.header.header-195')
@endsection

@section('main')
<div role="main" class="main">

				<section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" style="background-image: url(img/landing/header_bg.jpg); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards; min-height: 645px;">
					<div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-light" style="padding: 8rem 0;"></div>
					<div class="container pt-lg-5 mt-5">
						<div class="row pt-3 pb-lg-0 pb-xl-0">
							<div class="col-lg-6 pt-4 mb-5 mb-lg-0">
								<ul class="breadcrumb font-weight-semibold text-4 negative-ls-1">
									<li><a href="index.html">Home</a></li>
									<li class="text-color-primary"><a href="elements.html">Elements</a></li>
									<li class="active text-color-primary">Lightboxes</li>
								</ul>
								<h1 class="font-weight-bold text-10 text-xl-12 line-height-2 mb-3">Lightboxes</h1>
								<p class="font-weight-light opacity-7 pb-2 mb-4">A lot of ways to show hidden content on popups trough a interative way. Play with the plugin options and ready examples.</p>
								<a href="#examples" data-hash data-hash-offset="100" class="btn btn-gradient-primary font-weight-semi-bold px-4 btn-py-2 text-3">View Examples <i class="fas fa-arrow-down ml-1"></i></a>
								<a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="btn btn-light btn-outline btn-outline-thin btn-outline-light-opacity-2 font-weight-semi-bold px-4 btn-py-2 text-3 text-color-light text-color-hover-dark ml-2" target="_blank">Buy Porto <i class="fas fa-external-link-alt ml-1"></i></a>
							</div>

						</div>
					</div>
				</section>

				<div id="examples" class="container py-2">

					<div class="row">
						<div class="col">

							<div class="row">
								<div class="col">

									<h4 class="mb-0">Single Image</h4>
									<p>Simple popups with different styles.</p>

									<div class="row">
										<div class="col-lg-3">
											<h5 class="text-uppercase mt-4">Default</h5>
											@include('porto.partials.lightbox.lightbox-59')
										</div>
										<div class="col-lg-3">
											<h5 class="text-uppercase mt-4">Default with Border</h5>
											@include('porto.partials.lightbox.lightbox-60')
										</div>
										<div class="col-lg-3">
											<h5 class="text-uppercase mt-4">With Icon</h5>
											@include('porto.partials.lightbox.lightbox-61')
										</div>
										<div class="col-lg-3">
											<h5 class="text-uppercase mt-4">Hover Effect</h5>
											@include('porto.partials.lightbox.lightbox-62')
										</div>
									</div>

								</div>
							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-6">

									<h4 class="mb-0">Simple Image Gallery</h4>
									<p>Image gallery in the same group.</p>

									@include('porto.partials.lightbox.lightbox-63')

								</div>
								<div class="col-lg-6">

									<h4 class="mb-0">Zoom Image Gallery</h4>
									<p>Image gallery in the same group.</p>

									@include('porto.partials.lightbox.lightbox-64')

								</div>
							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>

							<div class="row">
								<div class="col">

									<h4>Zoom Image Gallery + Carousel</h4>

									@include('porto.partials.lightbox.lightbox-65')
								</div>

							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>
							
							<div class="row">
								<div class="col">

									<h4 class="mb-0">Dialog with CSS animation</h4>
									<p>Animations are added with simple CSS transitions, you can make them look however you wish.</p>

									<a class="mt-1 mb-1 mr-1 popup-with-zoom-anim btn btn-modern btn-primary" href="#small-dialog">Open with fade-zoom animation</a>
									<a class="mt-1 mb-1 popup-with-move-anim btn btn-modern btn-primary" href="#small-dialog">Open with fade-slide animation</a>

									<!-- Dialog -->
									<div id="small-dialog" class="dialog dialog-sm zoom-anim-dialog mfp-hide">
										<h3 class="font-weight-semi-bold">Dialog example</h3>
										<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.</p>
									</div>

								</div>

							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>
							
							<div class="row">
								<div class="col">

									<h4 class="mb-0">Popup with video or map</h4>
									<p>In this example lightboxes are automatically disabled on small screen size and default behavior of link is triggered.</p>

									<div class="row">
										<div class="col-lg-4">
											<a class="mt-1 mb-1 mr-1 popup-youtube btn btn-modern btn-primary" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube Video</a>
										</div>
										<div class="col-lg-4">
											<a class="mt-1 mb-1 mr-1 popup-vimeo btn btn-modern btn-primary" href="https://vimeo.com/45830194">Open Vimeo Video</a>
										</div>
										<div class="col-lg-4">
											<a class="mt-1 mb-1 popup-gmaps btn btn-modern btn-primary" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-lg-4">
											<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube Video</a>
										</div>
										<div class="col-lg-4">
											<a class="popup-vimeo" href="https://vimeo.com/45830194">Open Vimeo Video</a>
										</div>
										<div class="col-lg-4">
											<a class="popup-gmaps" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>
										</div>
									</div>
								
								</div>

							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>
							
							<div class="row pb-4">
								<div class="col-lg-6">

									<h4 class="mb-0">Ajax</h4>
									<p>You have full control of what is displayed in popup, align it to any side via CSS, enable or disable scroll on right side of window.</p>

									<a class="simple-ajax-popup btn btn-modern btn-primary mb-4" href="elements-lightboxes-ajax.html">Load Ajax Content</a>

								</div>
								<div class="col-lg-6">

									<h4 class="mb-0">Form</h4>
									<p>Entered data is not lost if you open and close the popup or if you go to another page and then press back browser button.</p>

									<a class="popup-with-form btn btn-modern btn-primary" href="#demo-form">Open Form</a>

									<!-- Form -->
									<form id="demo-form" class="white-popup-block mfp-hide">
										<div class="form-row mt-2">
											<div class="col-sm-12">
												<h4>Basic Form</h4>
												<p class="mb-4">Entered data is not lost if you open and close the popup or if you go to another page and then press back browser button.</p>
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-lg-6">
												<label>Your name *</label>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
											</div>
											<div class="form-group col-lg-6">
												<label>Your email address *</label>
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<label>Subject</label>
												<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<label>Message *</label>
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" required></textarea>
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col">
												<button class="btn btn-modern btn-primary">Submit</button>
												<button type="reset" class="btn btn-modern btn-primary">Reset</button>
											</div>
										</div>

									</form>

								</div>
							</div>

						</div>
					</div>

				</div>

				<section id="elements" class="section section-height-2 border-0 mt-5 mb-0 pt-5">

					<div class="container py-2">
						<div class="row mt-3 pb-4">
							<div class="col text-center">
								<h2 class="font-weight-bold mb-0">Porto Elements</h2>
								<p class="lead text-4 pt-2 font-weight-normal">Porto comes with several elements options, it's easy to customize<br> and create the content of your website's pages.</p>
							</div>
						</div>porto.partials
						<div class="row justify-content-center">

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-26', ['key' => 'featured-box.featured-box-26'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-27', ['key' => 'featured-box.featured-box-27'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-28', ['key' => 'featured-box.featured-box-28'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-29', ['key' => 'featured-box.featured-box-29'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-30', ['key' => 'featured-box.featured-box-30'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-31', ['key' => 'featured-box.featured-box-31'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-32', ['key' => 'featured-box.featured-box-32'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-33', ['key' => 'featured-box.featured-box-33'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-34', ['key' => 'featured-box.featured-box-34'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-35', ['key' => 'featured-box.featured-box-35'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-36', ['key' => 'featured-box.featured-box-36'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-37', ['key' => 'featured-box.featured-box-37'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-38', ['key' => 'featured-box.featured-box-38'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-39', ['key' => 'featured-box.featured-box-39'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-40', ['key' => 'featured-box.featured-box-40'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-41', ['key' => 'featured-box.featured-box-41'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-42', ['key' => 'featured-box.featured-box-42'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-43', ['key' => 'featured-box.featured-box-43'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-44', ['key' => 'featured-box.featured-box-44'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-45', ['key' => 'featured-box.featured-box-45'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-46', ['key' => 'featured-box.featured-box-46'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-47', ['key' => 'featured-box.featured-box-47'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-48', ['key' => 'featured-box.featured-box-48'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-49', ['key' => 'featured-box.featured-box-49'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-50', ['key' => 'featured-box.featured-box-50'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-51', ['key' => 'featured-box.featured-box-51'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-52', ['key' => 'featured-box.featured-box-52'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-53', ['key' => 'featured-box.featured-box-53'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-54', ['key' => 'featured-box.featured-box-54'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-55', ['key' => 'featured-box.featured-box-55'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-56', ['key' => 'featured-box.featured-box-56'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-57', ['key' => 'featured-box.featured-box-57'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-58', ['key' => 'featured-box.featured-box-58'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-59', ['key' => 'featured-box.featured-box-59'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-60', ['key' => 'featured-box.featured-box-60'])
								</div>porto.partials
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
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472?s_rank=2" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">ADMIN HTML</a></li>
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
@include('porto.partials.footer.footer-330')
@endsection
