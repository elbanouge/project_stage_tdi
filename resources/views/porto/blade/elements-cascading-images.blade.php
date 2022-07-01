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
									<li class="active text-color-primary">Cascading Images</li>
								</ul>
								<h1 class="font-weight-bold text-10 text-xl-12 line-height-2 mb-3">Cascading Images</h1>
								<p class="font-weight-light opacity-7 pb-2 mb-4">With cascading images you can show your images with a beatifull design and effect.</p>
								<a href="#examples" data-hash data-hash-offset="100" class="btn btn-gradient-primary font-weight-semi-bold px-4 btn-py-2 text-3">View Examples <i class="fas fa-arrow-down ml-1"></i></a>
								<a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="btn btn-light btn-outline btn-outline-thin btn-outline-light-opacity-2 font-weight-semi-bold px-4 btn-py-2 text-3 text-color-light text-color-hover-dark ml-2" target="_blank">Buy Porto <i class="fas fa-external-link-alt ml-1"></i></a>
							</div>

						</div>
					</div>
				</section>

				<div id="examples" class="container py-2">

					<div class="row align-items-center">
						<div class="col-sm-9 col-md-7 mx-auto order-2 order-md-1">

							<div class="cascading-images-wrapper">
								<div class="cascading-images position-relative">
									<img src="img/blog/default/blog-9.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms">
									<div class="position-absolute w-100" style="top: 41%; left: -30%;">
										<img src="img/blog/default/blog-35.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms">
									</div>
									<div class="position-absolute w-100" style="top: 75%; left: 30%;">
										<img src="img/blog/default/blog-40.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms">
									</div>
								</div>
							</div>
							<div id="defaultCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;div class="cascading-images-wrapper"&gt;
	&lt;div class="cascading-images position-relative"&gt;
		&lt;img src="img/blog/default/blog-9.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" /&gt;
		&lt;div class="position-absolute w-100" style="top: 41%; left: -30%;"&gt;
			&lt;img src="img/blog/default/blog-35.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
		&lt;div class="position-absolute w-100" style="top: 75%; left: 30%;"&gt;
			&lt;img src="img/blog/default/blog-40.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
								</pre>
							</div>
							
						</div>
						<div class="col-md-4 py-lg-5 my-lg-5 mb-4 order-1 order-md-2">

							<div class="pr-3 pl-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-left-light border-sm-none">
								<h4 class="mb-2">Default</h4>
								<p class="mb-2">This is the default cascading image example.</p>
								<a href="#defaultCascadingImagesPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-md-4 py-lg-5 my-lg-5 mb-4">

							<div class="pr-3 pr-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-right-light border-sm-none">
								<h4 class="mb-2">Fade In Animation</h4>
								<p class="mb-2">This is a cascading image with Fade In animation.</p>
								<a href="#fadeInAnimationCascadingImagesPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9 col-md-7 mx-auto">

							<div class="cascading-images-wrapper">
								<div class="cascading-images position-relative">
									<img src="img/blog/default/blog-9.jpg" class="appear-animation" width="500" alt="" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="600ms" data-plugin-options="{'accY': -300}">
									<div class="position-absolute w-100" style="top: 41%; left: -30%;">
										<img src="img/blog/default/blog-35.jpg" class="appear-animation" width="500" alt="" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" data-appear-animation-duration="600ms" data-plugin-options="{'accY': -300}">
									</div>
									<div class="position-absolute w-100" style="top: 75%; left: 30%;">
										<img src="img/blog/default/blog-40.jpg" class="appear-animation" width="500" alt="" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600" data-appear-animation-duration="600ms" data-plugin-options="{'accY': -150}">
									</div>
								</div>
							</div>
							<div id="fadeInAnimationCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;div class="cascading-images-wrapper"&gt;
	&lt;div class="cascading-images position-relative"&gt;
		&lt;img src="img/blog/default/blog-9.jpg" class="appear-animation" width="500" alt="" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="600ms" data-plugin-options="{'accY': -300}" /&gt;
		&lt;div class="position-absolute w-100" style="top: 41%; left: -30%;"&gt;
			&lt;img src="img/blog/default/blog-35.jpg" class="appear-animation" width="500" alt="" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" data-appear-animation-duration="600ms" data-plugin-options="{'accY': -300}" /&gt;
		&lt;/div&gt;
		&lt;div class="position-absolute w-100" style="top: 75%; left: 30%;"&gt;
			&lt;img src="img/blog/default/blog-40.jpg" class="appear-animation" width="500" alt="" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600" data-appear-animation-duration="600ms" data-plugin-options="{'accY': -150}" /&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
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
						<div class="col-sm-9 col-md-7 mx-auto order-2 order-md-1">

							<div class="cascading-images-wrapper">
								<div class="cascading-images position-relative">
									<div class="overflow-hidden">
										<img src="img/blog/default/blog-9.jpg" class="appear-animation" width="500" alt="" data-appear-animation="maskUp" data-appear-animation-duration="600ms">
									</div>
									<div class="position-absolute overflow-hidden w-100" style="top: 41%; left: -30%;">
										<img src="img/blog/default/blog-35.jpg" class="appear-animation" width="500" alt="" data-appear-animation="maskRight" data-appear-animation-delay="300" data-appear-animation-duration="600ms">
									</div>
									<div class="position-absolute overflow-hidden w-100" style="top: 75%; left: 30%;">
										<img src="img/blog/default/blog-40.jpg" class="appear-animation" width="500" alt="" data-appear-animation="maskLeft" data-appear-animation-delay="600" data-appear-animation-duration="600ms">
									</div>
								</div>
							</div>
							<div id="maskAnimationCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;div class="cascading-images-wrapper"&gt;
	&lt;div class="cascading-images position-relative"&gt;
		&lt;div class="overflow-hidden"&gt;
			&lt;img src="img/blog/default/blog-9.jpg" class="appear-animation" width="500" alt="" data-appear-animation="maskUp" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
		&lt;div class="position-absolute overflow-hidden w-100" style="top: 41%; left: -30%;"&gt;
			&lt;img src="img/blog/default/blog-35.jpg" class="appear-animation" width="500" alt="" data-appear-animation="maskRight" data-appear-animation-delay="300" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
		&lt;div class="position-absolute overflow-hidden w-100" style="top: 75%; left: 30%;"&gt;
			&lt;img src="img/blog/default/blog-40.jpg" class="appear-animation" width="500" alt="" data-appear-animation="maskLeft" data-appear-animation-delay="600" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
								</pre>
							</div>
							
						</div>
						<div class="col-md-4 py-lg-5 my-lg-5 mb-4 order-1 order-md-2">

							<div class="pr-3 pl-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-left-light border-sm-none">
								<h4 class="mb-2">Mask Animation</h4>
								<p class="mb-2">This is a cascading images with mask animation.</p>
								<a href="#maskAnimationCascadingImagesPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-md-4 py-lg-5 my-lg-5 mb-4">

							<div class="pr-3 pr-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-right-light border-sm-none">
								<h4 class="mb-2">With Shadow</h4>
								<p class="mb-2">This is a cascading images with shadow.</p>
								<a href="#withShadowCascadingImagesPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9 col-md-7 mx-auto">

							<div class="cascading-images-wrapper">
								<div class="cascading-images position-relative">
									<img src="img/blog/default/blog-9.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms">
									<div class="position-absolute w-100" style="top: 41%; left: -30%;">
										<img src="img/blog/default/blog-35.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms">
									</div>
									<div class="position-absolute w-100" style="top: 75%; left: 30%;">
										<img src="img/blog/default/blog-40.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms">
									</div>
								</div>
							</div>
							<div id="withShadowCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;div class="cascading-images-wrapper"&gt;
	&lt;div class="cascading-images position-relative"&gt;
		&lt;img src="img/blog/default/blog-9.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" /&gt;
		&lt;div class="position-absolute w-100" style="top: 41%; left: -30%;"&gt;
			&lt;img src="img/blog/default/blog-35.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
		&lt;div class="position-absolute w-100" style="top: 75%; left: 30%;"&gt;
			&lt;img src="img/blog/default/blog-40.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
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
						<div class="col-sm-9 col-md-7 mx-auto order-2 order-md-1">

							<div class="cascading-images-wrapper">
								<div class="cascading-images position-relative">
									<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
										<img src="img/blog/default/blog-9.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms">
									</div>
									<div class="position-absolute w-100" style="top: 41%; left: -30%;">
										<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
											<img src="img/blog/default/blog-35.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms">
										</div>
									</div>
									<div class="position-absolute w-100" style="top: 75%; left: 30%;">
										<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.4, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
											<img src="img/blog/default/blog-40.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms">
										</div>
									</div>
								</div>
							</div>
							<div id="floatingEffectCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;div class="cascading-images-wrapper"&gt;
	&lt;div class="cascading-images position-relative"&gt;
		&lt;div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"&gt;
			&lt;img src="img/blog/default/blog-9.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
		&lt;div class="position-absolute w-100" style="top: 41%; left: -30%;"&gt;
			&lt;div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"&gt;
				&lt;img src="img/blog/default/blog-35.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" /&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="position-absolute w-100" style="top: 75%; left: 30%;"&gt;
			&lt;div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.4, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"&gt;
				&lt;img src="img/blog/default/blog-40.jpg" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" /&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
								</pre>
							</div>
							
						</div>
						<div class="col-md-4 py-lg-5 my-lg-5 mb-4 order-1 order-md-2">

							<div class="pr-3 pl-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-left-light border-sm-none">
								<h4 class="mb-2">Floating Effect</h4>
								<p class="mb-2">This is a cascading images with floating effect.</p>
								<a href="#floatingEffectCascadingImagesPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-md-4 py-lg-4 my-lg-4 mb-4">

							<div class="pr-3 pr-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-right-light border-sm-none">
								<h4 class="mb-2">Less Images</h4>
								<p class="mb-2">This is a cascading images with less images.</p>
								<a href="#lessImagesCascadingImagesPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9 col-md-7 mx-auto">

							<div class="cascading-images-wrapper pb-0">
								<div class="cascading-images position-relative">
									<img src="img/blog/default/blog-9.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms">
									<div class="position-absolute w-100" style="top: 25%; left: 10%;">
										<img src="img/blog/default/blog-40.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms">
									</div>
								</div>
							</div>
							<div id="lessImagesCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;div class="cascading-images-wrapper pb-0"&gt;
	&lt;div class="cascading-images position-relative"&gt;
		&lt;img src="img/blog/default/blog-9.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" /&gt;
		&lt;div class="position-absolute w-100" style="top: 25%; left: 10%;"&gt;
			&lt;img src="img/blog/default/blog-40.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
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
						<div class="col-sm-9 col-md-7 mx-auto order-2 order-md-1">

							<div class="cascading-images-wrapper pb-0">
								<div class="cascading-images position-relative">
									<div class="cascading-images-colored-bar bg-primary position-absolute top-0 right-0 bottom-0 left-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-duration="600ms"></div>
									<div class="position-relative" style="top: 40px; left: 40px;">
										<img src="img/blog/default/blog-9.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" data-appear-animation-duration="600ms">
									</div>
								</div>
							</div>
							<div id="coloredBarBehindCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;div class="cascading-images-wrapper pb-0"&gt;
	&lt;div class="cascading-images position-relative"&gt;
		&lt;div class="cascading-images-colored-bar bg-primary position-absolute top-0 right-0 bottom-0 left-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-duration="600ms"&gt;&lt;/div&gt;
		&lt;div class="position-relative" style="top: 40px; left: 40px;"&gt;
			&lt;img src="img/blog/default/blog-9.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
								</pre>
							</div>
							
						</div>
						<div class="col-md-4 py-lg-4 my-lg-4 mb-4 order-1 order-md-2">

							<div class="pr-3 pl-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-left-light border-sm-none">
								<h4 class="mb-2">Colored Bar Behind</h4>
								<p class="mb-2">This is a cascading images with colored bar behind.</p>
								<a href="#coloredBarBehindCascadingImagesPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col-md-4 py-lg-4 my-lg-4 mb-4">

							<div class="pr-3 pr-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-right-light border-sm-none">
								<h4 class="mb-2">Colored Bar Floating</h4>
								<p class="mb-2">This is a cascading images with colored bar floating.</p>
								<a href="#coloredBarFloatingCascadingImagesPopup" class="popup-with-zoom-anim">Show Code Example</a>
							</div>

						</div>
						<div class="col-sm-9 col-md-7 mx-auto">

							<div class="cascading-images-wrapper pb-0">
								<div class="cascading-images position-relative">
									<div class="position-absolute top-0 right-0 bottom-0 left-0" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'horizontal': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
										<div class="cascading-images-colored-bar bg-primary position-absolute top-0 right-0 bottom-0 left-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-duration="600ms"></div>
									</div>
									<div class="position-relative" style="top: 35px; left: 35px;">
										<img src="img/blog/default/blog-9.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="fadeIn" data-appear-animation-delay="500" data-appear-animation-duration="600ms">
									</div>
								</div>
							</div>
							<div id="coloredBarFloatingCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
								<pre class="rounded-0 mb-0" data-copy-to-clipboard>
&lt;div class="cascading-images-wrapper pb-0"&gt;
	&lt;div class="cascading-images position-relative"&gt;
		&lt;div class="position-absolute top-0 right-0 bottom-0 left-0" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'horizontal': true, 'transitionDuration': 1000, 'isInsideSVG': true}"&gt;
			&lt;div class="cascading-images-colored-bar bg-primary position-absolute top-0 right-0 bottom-0 left-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-duration="600ms"&gt;&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="position-relative" style="top: 35px; left: 35px;"&gt;
			&lt;img src="img/blog/default/blog-9.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="fadeIn" data-appear-animation-delay="500" data-appear-animation-duration="600ms" /&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
								</pre>
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
