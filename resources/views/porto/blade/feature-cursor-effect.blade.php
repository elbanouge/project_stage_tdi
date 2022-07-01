@extends('porto.app')
@section('header')
@include('porto.partials.header.header-196')
@endsection

@section('mainporto.partials
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-213')

				<div class="container py-5 mb-5">

					<div class="row align-items-center">
						<div class="col-sm-3">

							<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
								<h4 class="mb-2">Hide Mouse Cursor</h4>
								<p class="mb-2">This is the hidde effect of cursor.</p>
								<a href="#hideMouseCursorPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="btn btn-primary btn-modern btn-px-3 btn-py-2" data-reinit-plugin="__cursorEffect" data-reinit-plugin-function="themePluginCursorEffect" data-reinit-plugin-element="body" data-reinit-plugin-options="{'hideMouseCursor': true}">HIDE CURSOR</a>
							</div>
							<div id="hideMouseCursorPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>&lt;body data-plugin-cursor-effect data-plugin-options="{'hideMouseCursor': true}"&gt;</pre>
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
								<h4 class="mb-2">Custom Cursor Color</h4>
								<p class="mb-2">Change cursor to your custom color.</p>
								<a href="#customCursorColorPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="btn btn-primary btn-modern btn-px-3 btn-py-2" data-reinit-plugin="__cursorEffect" data-reinit-plugin-function="themePluginCursorEffect" data-reinit-plugin-element="body" data-reinit-plugin-options="{'cursorOuterColor': '#10b130', 'cursorInnerColor': '#10b130'}">CHANGE COLOR</a>
							</div>

							<div id="customCursorColorPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>&lt;body data-plugin-cursor-effect data-plugin-options="{'cursorOuterColor': '#10b130', 'cursorInnerColor': '#10b130'}"&gt;</pre>
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
								<h4 class="mb-2">Pre-Defined Sizes</h4>
								<p class="mb-2">Change cursor with pre-defined sizes.</p>
								<a href="#preDefinedSizesPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="btn btn-primary btn-modern btn-px-3 btn-py-2" data-reinit-plugin="__cursorEffect" data-reinit-plugin-function="themePluginCursorEffect" data-reinit-plugin-element="body" data-reinit-plugin-options="{'size': 'small'}">SMALL</a>
								<a href="#" class="btn btn-primary btn-modern btn-px-3 btn-py-2 ml-2" data-reinit-plugin="__cursorEffect" data-reinit-plugin-function="themePluginCursorEffect" data-reinit-plugin-element="body" data-reinit-plugin-options="{'size': 'normal'}">NORMAL</a>
								<a href="#" class="btn btn-primary btn-modern btn-px-3 btn-py-2 ml-2" data-reinit-plugin="__cursorEffect" data-reinit-plugin-function="themePluginCursorEffect" data-reinit-plugin-element="body" data-reinit-plugin-options="{'size': 'big'}">BIG</a>
							</div>

							<div id="preDefinedSizesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;!-- Small --&gt;
&lt;body data-plugin-cursor-effect data-plugin-options="{'size': 'small'}"&gt;

&lt;!-- Normal --&gt;
&lt;body data-plugin-cursor-effect data-plugin-options="{'size': 'normal'}"&gt;

&lt;!-- Big --&gt;
&lt;body data-plugin-cursor-effect data-plugin-options="{'size': 'big'}"&gt;
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
								<h4 class="mb-2">Pre-Defined Styles</h4>
								<p class="mb-2">Change cursor with pre-defined styles.</p>
								<a href="#preDefinedStylesPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a href="#" class="btn btn-primary btn-modern btn-px-3 btn-py-2" data-reinit-plugin="__cursorEffect" data-reinit-plugin-function="themePluginCursorEffect" data-reinit-plugin-element="body" data-reinit-plugin-options="{'style': ''}">CIRCLE</a>
								<a href="#" class="btn btn-primary btn-modern btn-px-3 btn-py-2 ml-2" data-reinit-plugin="__cursorEffect" data-reinit-plugin-function="themePluginCursorEffect" data-reinit-plugin-element="body" data-reinit-plugin-options="{'style': 'cursor-effect-style-square'}">SQUARE</a>
							</div>

							<div id="preDefinedStylesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;!-- Circle --&gt;
&lt;body data-plugin-cursor-effect&gt;

&lt;!-- Square --&gt;
&lt;body data-plugin-cursor-effect data-plugin-options="{'style': 'square'}"&gt;
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

							<div class="pr-3 pr-sm-5 py-5 border-right-light">
								<h4 class="mb-2">Hover Effect and Color</h4>
								<p class="mb-2">The hover effect of cursor on elements.</p>
								<a href="#hoverEffectAndColorPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9">

							<div class="d-flex">
								<a class="btn btn-light btn-modern btn-px-3 btn-py-2" data-cursor-effect-hover="fit">FIT</a>
								<a class="btn btn-light btn-modern btn-px-3 btn-py-2 ml-2" data-cursor-effect-hover="plus">PLUS DEFAULT</a>
								<a class="btn btn-light btn-modern btn-px-3 btn-py-2 ml-2" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="dark">PLUS DARK</a>
								<a class="btn btn-primary btn-modern btn-px-3 btn-py-2 ml-2" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">PLUS LIGHT</a>
							</div>
							<div class="form-row mt-3">
								<div class="form-group col-6">
									<input type="text" class="form-control" value="" placeholder="Name" data-cursor-effect-hover="fit">
								</div>
								<div class="form-group col-6">
									<input type="email" class="form-control" value="" placeholder="E-mail" data-cursor-effect-hover="fit">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-4">
									<div class="d-flex align-items-center justify-content-center bg-color-light-scale-1 py-3" data-cursor-effect-hover="fit">
										Block
									</div>
								</div>
								<div class="col-4">
									<div class="d-flex align-items-center justify-content-center bg-color-light-scale-1 py-3" data-cursor-effect-hover="fit">
										Block
									</div>
								</div>
								<div class="col-4">
									<div class="d-flex align-items-center justify-content-center bg-color-light-scale-1 py-3" data-cursor-effect-hover="fit">
										Block
									</div>
								</div>
							</div>

							<div id="hoverEffectAndColorPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<p class="mb-3">The attribute <strong>data-cursor-effect-hover</strong> should be added to element that will be hovered. Example of usage:</p>
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;!-- Fit Effect --&gt;
&lt;a class="btn btn-primary btn-modern btn-px-3 btn-py-2" data-cursor-effect-hover="fit"&gt;HOVER ME&lt;/a&gt;

&lt;!-- Plus Effect + Default Color --&gt;
&lt;a class="btn btn-light btn-modern btn-px-3 btn-py-2" data-cursor-effect-hover="plus"&gt;HOVER ME&lt;/a&gt;

&lt;!-- Plus Effect + Dark Color --&gt;
&lt;a class="btn btn-primary btn-modern btn-px-3 btn-py-2" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="dark"&gt;HOVER ME&lt;/a&gt;

&lt;!-- Plus Effect + Light Color --&gt;
&lt;a class="btn btn-primary btn-modern btn-px-3 btn-py-2" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"&gt;HOVER ME&lt;/a&gt;

&lt;!-- Input + Fit Effect --&gt;
&lt;input type="text" class="form-control" value="" placeholder="Name" data-cursor-effect-hover="fit" /&gt;

&lt;!-- Custom Block + Fit Effect --&gt;
&lt;div class="d-flex align-items-center justify-content-center bg-color-light-scale-1 py-5" data-cursor-effect-hover="fit"&gt;
	Block
&lt;/div&gt;
								</pre>
							</div>
							
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
