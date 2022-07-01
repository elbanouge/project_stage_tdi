@extends('porto.app')
@section('header')
@include('porto.partials.header.header-196')
@endsection

@section('mainporto.partials
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-254')

				<div class="container py-4 mb-5">

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Default</h4>
								<p class="mb-2">This is the default page loading effect.</p>
								<a href="#defaultLoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="default">SHOW EFFECT</a>
							</div>
							<div id="defaultLoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'default'}"&gt;
	&lt;div class="loading-overlay"&gt;
		&lt;div class="bounce-loader"&gt;
			&lt;div class="bounce1"&gt;&lt;/div&gt;
			&lt;div class="bounce2"&gt;&lt;/div&gt;
			&lt;div class="bounce3"&gt;&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Percentage Progress 1</h4>
								<p class="mb-2">This is the percentage progress 1 page loading effect.</p>
								<a href="#percentageProgress1LoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="percentageProgress1">SHOW EFFECT</a>
							</div>
							<div id="percentageProgress1LoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'percentageProgress1'}"&gt;
	&lt;div class="loading-overlay loading-overlay-percentage"&gt;
		&lt;div class="page-loader-progress-wrapper"&gt;
			&lt;span class="page-loader-progress"&gt;0&lt;/span&gt;
			&lt;span class="page-loader-progress-symbol"&gt;%&lt;/span&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Percentage Progress 2</h4>
								<p class="mb-2">This is the percentage progress 2 page loading effect.</p>
								<a href="#percentageProgress2LoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="percentageProgress2">SHOW EFFECT</a>
							</div>
							<div id="percentageProgress2LoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'percentageProgress2'}"&gt;
	&lt;div class="loading-overlay loading-overlay-percentage loading-overlay-percentage-effect-2"&gt;
		&lt;div class="loading-overlay-background-layer"&gt;&lt;/div&gt;
		&lt;div class="page-loader-progress-wrapper"&gt;
			&lt;span class="page-loader-progress"&gt;0&lt;/span&gt;
			&lt;span class="page-loader-progress-symbol"&gt;%&lt;/span&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Cubes</h4>
								<p class="mb-2">This is the cubes page loading effect.</p>
								<a href="#cubesLoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="cubes">SHOW EFFECT</a>
							</div>
							<div id="cubesLoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'cubes'}"&gt;
	&lt;div class="loading-overlay"&gt;
		&lt;div class="bounce-loader"&gt;
			&lt;div class="cssload-thecube"&gt;
				&lt;div class="cssload-cube cssload-c1"&gt;&lt;/div&gt;
				&lt;div class="cssload-cube cssload-c2"&gt;&lt;/div&gt;
				&lt;div class="cssload-cube cssload-c4"&gt;&lt;/div&gt;
				&lt;div class="cssload-cube cssload-c3"&gt;&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Cube Progress</h4>
								<p class="mb-2">This is the cube progress page loading effect.</p>
								<a href="#cubeProgressLoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="cubeProgress">SHOW EFFECT</a>
							</div>
							<div id="cubeProgressLoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'cubeProgress'}"&gt;
	&lt;div class="loading-overlay"&gt;
		&lt;div class="bounce-loader"&gt;
			&lt;span class="cssload-cube-progress"&gt;
				&lt;span class="cssload-cube-progress-inner"&gt;&lt;/span&gt;
			&lt;/span&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Float Rings</h4>
								<p class="mb-2">This is the float rings page loading effect.</p>
								<a href="#floatRingsLoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="floatRings">SHOW EFFECT</a>
							</div>
							<div id="floatRingsLoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'floatRings'}"&gt;
	&lt;div class="loading-overlay"&gt;
		&lt;div class="bounce-loader"&gt;
			&lt;div class="cssload-float-rings-loader"&gt;
				&lt;div class="cssload-float-rings-inner cssload-one"&gt;&lt;/div&gt;
				&lt;div class="cssload-float-rings-inner cssload-two"&gt;&lt;/div&gt;
				&lt;div class="cssload-float-rings-inner cssload-three"&gt;&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Float Bars</h4>
								<p class="mb-2">This is the float bars page loading effect.</p>
								<a href="#floatBarsLoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="floatBars">SHOW EFFECT</a>
							</div>
							<div id="floatBarsLoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'floatBars'}"&gt;
	&lt;div class="loading-overlay"&gt;
		&lt;div class="bounce-loader"&gt;
			&lt;div class="cssload-float-bars-container"&gt;
				&lt;ul class="cssload-float-bars-flex-container"&gt;
					&lt;li&gt;&lt;span class="cssload-float-bars-loading"&gt;&lt;/span&gt;&lt;/li&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Speeding Wheel</h4>
								<p class="mb-2">This is the speeding wheel page loading effect.</p>
								<a href="#speedingWheelLoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="speedingWheel">SHOW EFFECT</a>
							</div>
							<div id="speedingWheelLoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'speedingWheel'}"&gt;
	&lt;div class="loading-overlay"&gt;
		&lt;div class="bounce-loader"&gt;
			&lt;div class="cssload-speeding-wheel-container"&gt;
				&lt;div class="cssload-speeding-wheel"&gt;&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Zenith</h4>
								<p class="mb-2">This is the zenith page loading effect.</p>
								<a href="#zenithLoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="zenith">SHOW EFFECT</a>
							</div>
							<div id="zenithLoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'zenith'}"&gt;
	&lt;div class="loading-overlay"&gt;
		&lt;div class="bounce-loader"&gt;
			&lt;div class="cssload-zenith-container"&gt;
				&lt;div class="cssload-zenith"&gt;&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Spinning Square</h4>
								<p class="mb-2">This is the spinning square page loading effect.</p>
								<a href="#spinningSquareLoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="spinningSquare">SHOW EFFECT</a>
							</div>
							<div id="spinningSquareLoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'spinningSquare'}"&gt;
	&lt;div class="loading-overlay"&gt;
		&lt;div class="bounce-loader"&gt;
			&lt;div class="cssload-spinning-square-loading"&gt;&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Pulse</h4>
								<p class="mb-2">This is the pulse page loading effect.</p>
								<a href="#pulseLoaderPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="loading-overlay-button btn btn-primary btn-modern btn-px-3 btn-py-2" data-effect="pulse">SHOW EFFECT</a>
							</div>
							<div id="pulseLoaderPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'pulse'}"&gt;
	&lt;div class="loading-overlay"&gt;
		&lt;div class="bounce-loader"&gt;
			&lt;div class="wrapper-pulse"&gt;
				&lt;div class="cssload-pulse-loader"&gt;&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	...
	......
	...
	.......
								</pre>
							</div>
							
						</div>
					</div>

				</div>

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
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
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
					</div>porto.partials
				</div>
				<div class="container">
					@include('porto.partials.footer-copyright.footer-copyright', ['key' => 'footer-copyright.footer-copyright'])
				</div>
			</footer>
@endsection
