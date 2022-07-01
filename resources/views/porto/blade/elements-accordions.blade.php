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
									<li class="active text-color-primary">Accordions</li>
								</ul>
								<h1 class="font-weight-bold text-10 text-xl-12 line-height-2 mb-3">Accordions</h1>
								<p class="font-weight-light opacity-7 pb-2 mb-4">The collapse accordions plugin is used to show and hide content. Buttons or anchors are used as triggers.</p>
								<a href="#examples" data-hash data-hash-offset="100" class="btn btn-gradient-primary font-weight-semi-bold px-4 btn-py-2 text-3">View Examples <i class="fas fa-arrow-down ml-1"></i></a>
								<a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="btn btn-light btn-outline btn-outline-thin btn-outline-light-opacity-2 font-weight-semi-bold px-4 btn-py-2 text-3 text-color-light text-color-hover-dark ml-2" target="_blank">Buy Porto <i class="fas fa-external-link-alt ml-1"></i></a>
							</div>

						</div>
					</div>
				</section>

				<div id="examples" class="container py-2">

					<div class="row">
						
						<div class="col-lg-6 mb-4 mb-lg-0">
							<h4>Default</h4>

							<div class="accordion" id="accordion1">
								<div class="card card-default">
									<div class="card-header" id="collapse1HeadingOne">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-target="#collapse1One" aria-expanded="true" aria-controls="collapse1One">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse1One" class="collapse show" aria-labelledby="collapse1HeadingOne">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse1HeadingTwo">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-target="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse1Two" class="collapse" aria-labelledby="collapse1HeadingTwo">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse1HeadingThree">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-target="#collapse1Three" aria-expanded="false" aria-controls="collapse1Three">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse1Three" class="collapse" aria-labelledby="collapse1HeadingThree">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mb-4 mb-lg-0">
							<h4>One Open At A Time</h4>

							<div class="accordion" id="accordion12">
								<div class="card card-default">
									<div class="card-header" id="collapse12HeadingOne">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-target="#collapse12One" aria-expanded="true" aria-controls="collapse12One">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse12One" class="collapse show" aria-labelledby="collapse12HeadingOne" data-parent="#accordion12">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse12HeadingTwo">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-target="#collapse12Two" aria-expanded="false" aria-controls="collapse12Two">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse12Two" class="collapse" aria-labelledby="collapse12HeadingTwo" data-parent="#accordion12">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse12HeadingThree">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-target="#collapse12Three" aria-expanded="false" aria-controls="collapse12Three">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse12Three" class="collapse" aria-labelledby="collapse12HeadingThree" data-parent="#accordion12">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
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
						
						<div class="col-lg-4 mb-4 mb-lg-0">

							<h4>Modern With Icons</h4>
							<div class="accordion accordion-modern" id="accordion9">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion9" href="#collapse9One">
												<i class="fas fa-users"></i> Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse9One" class="collapse show">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion9" href="#collapse9Two">
												<i class="fas fa-film"></i> Accordion Title 2
											</a>
										</h4>
									</div>
									<div id="collapse9Two" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion9" href="#collapse9Three">
												<i class="fas fa-bars"></i> Accordion Title 3
											</a>
										</h4>
									</div>
									<div id="collapse9Three" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 mb-4 mb-lg-0">

							<h4>Modern Dark text</h4>
							<div class="accordion accordion-modern" id="accordion10">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion10" href="#collapse10One">
												<i class="fas fa-users text-color-primary"></i> Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse10One" class="collapse show">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion10" href="#collapse10Two">
												<i class="fas fa-film text-color-primary"></i> Accordion Title 2
											</a>
										</h4>
									</div>
									<div id="collapse10Two" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion10" href="#collapse10Three">
												<i class="fas fa-bars text-color-primary"></i> Accordion Title 3
											</a>
										</h4>
									</div>
									<div id="collapse10Three" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
							
						</div>

						<div class="col-lg-4 mb-4 mb-lg-0">

							<h4>Modern Without Background</h4>
							<div class="accordion accordion-modern without-bg" id="accordion11">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion11" href="#collapse11One">
												<i class="fas fa-users"></i> Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse11One" class="collapse show">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion11" href="#collapse11Two">
												<i class="fas fa-film"></i> Accordion Title 2
											</a>
										</h4>
									</div>
									<div id="collapse11Two" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion11" href="#collapse11Three">
												<i class="fas fa-bars"></i> Accordion Title 3
											</a>
										</h4>
									</div>
									<div id="collapse11Three" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>

						</div>					

					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">

							<h4>Colors</h4>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-3 mb-4 mb-lg-0">							
							<div class="accordion" id="accordionPrimary">
								<div class="card card-default">
									<div class="card-header bg-color-primary" id="collapsePrimaryHeadingOne">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapsePrimaryOne" aria-expanded="true" aria-controls="collapsePrimaryOne">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapsePrimaryOne" class="collapse show" aria-labelledby="collapsePrimaryHeadingOne" data-parent="#accordionPrimary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header bg-color-primary" id="collapsePrimaryHeadingTwo">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapsePrimaryTwo" aria-expanded="false" aria-controls="collapsePrimaryTwo">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapsePrimaryTwo" class="collapse" aria-labelledby="collapsePrimaryHeadingTwo" data-parent="#accordionPrimary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header bg-color-primary" id="collapsePrimaryHeadingThree">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapsePrimaryThree" aria-expanded="false" aria-controls="collapsePrimaryThree">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapsePrimaryThree" class="collapse" aria-labelledby="collapsePrimaryHeadingThree" data-parent="#accordionPrimary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<div class="accordion" id="accordionSecondary">
								<div class="card card-default">
									<div class="card-header bg-color-secondary" id="collapseSecondaryHeadingOne">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapseSecondaryOne" aria-expanded="true" aria-controls="collapseSecondaryOne">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapseSecondaryOne" class="collapse show" aria-labelledby="collapseSecondaryHeadingOne" data-parent="#accordionSecondary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header bg-color-secondary" id="collapseSecondaryHeadingTwo">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapseSecondaryTwo" aria-expanded="false" aria-controls="collapseSecondaryTwo">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapseSecondaryTwo" class="collapse" aria-labelledby="collapseSecondaryHeadingTwo" data-parent="#accordionSecondary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header bg-color-secondary" id="collapseSecondaryHeadingThree">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapseSecondaryThree" aria-expanded="false" aria-controls="collapseSecondaryThree">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapseSecondaryThree" class="collapse" aria-labelledby="collapseSecondaryHeadingThree" data-parent="#accordionSecondary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<div class="accordion" id="accordionTertiary">
								<div class="card card-default">
									<div class="card-header bg-color-tertiary" id="collapseTertiaryHeadingOne">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapseTertiaryOne" aria-expanded="true" aria-controls="collapseTertiaryOne">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapseTertiaryOne" class="collapse show" aria-labelledby="collapseTertiaryHeadingOne" data-parent="#accordionTertiary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header bg-color-tertiary" id="collapseTertiaryHeadingTwo">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapseTertiaryTwo" aria-expanded="false" aria-controls="collapseTertiaryTwo">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapseTertiaryTwo" class="collapse" aria-labelledby="collapseTertiaryHeadingTwo" data-parent="#accordionTertiary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header bg-color-tertiary" id="collapseTertiaryHeadingThree">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapseTertiaryThree" aria-expanded="false" aria-controls="collapseTertiaryThree">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapseTertiaryThree" class="collapse" aria-labelledby="collapseTertiaryHeadingThree" data-parent="#accordionTertiary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="accordion" id="accordionQuaternary">
								<div class="card card-default">
									<div class="card-header bg-color-quaternary" id="collapseQuaternaryHeadingOne">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapseQuaternaryOne" aria-expanded="true" aria-controls="collapseQuaternaryOne">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapseQuaternaryOne" class="collapse show" aria-labelledby="collapseQuaternaryHeadingOne" data-parent="#accordionQuaternary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header bg-color-quaternary" id="collapseQuaternaryHeadingTwo">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapseQuaternaryTwo" aria-expanded="false" aria-controls="collapseQuaternaryTwo">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapseQuaternaryTwo" class="collapse" aria-labelledby="collapseQuaternaryHeadingTwo" data-parent="#accordionQuaternary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header bg-color-quaternary" id="collapseQuaternaryHeadingThree">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-light" data-toggle="collapse" data-target="#collapseQuaternaryThree" aria-expanded="false" aria-controls="collapseQuaternaryThree">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapseQuaternaryThree" class="collapse" aria-labelledby="collapseQuaternaryHeadingThree" data-parent="#accordionQuaternary">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
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
						
						<div class="col-lg-3 mb-4 mb-lg-0">

							<h4>Small</h4>
							<div class="accordion accordion-sm" id="accordion3">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse3One">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse3One" class="collapse show">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse3Two">
												Accordion Title 2
											</a>
										</h4>
									</div>
									<div id="collapse3Two" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse3Three">
												Accordion Title 3
											</a>
										</h4>
									</div>
									<div id="collapse3Three" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 mb-4 mb-lg-0">

							<h4>Default</h4>
							<div class="accordion" id="accordion4">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse4One">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse4One" class="collapse show">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse4Two">
												Accordion Title 2
											</a>
										</h4>
									</div>
									<div id="collapse4Two" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse4Three">
												Accordion Title 3
											</a>
										</h4>
									</div>
									<div id="collapse4Three" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6">

							<h4>Large</h4>
							<div class="accordion accordion-lg" id="accordion5">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapse5One">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse5One" class="collapse show">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
											<img class="float-left" width="150" height="106" src="img/device.png" alt="">
											<p>Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapse5Two">
												Accordion Title 2
											</a>
										</h4>
									</div>
									<div id="collapse5Two" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapse5Three">
												Accordion Title 3
											</a>
										</h4>
									</div>
									<div id="collapse5Three" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
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
						
						<div class="col-lg-4 mb-4 mb-lg-0">

							<h4>With Icons</h4>
							<div class="accordion" id="accordion6">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion6" href="#collapse6One">
												<i class="fas fa-users"></i> Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse6One" class="collapse show">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion6" href="#collapse6Two">
												<i class="fas fa-film"></i> Accordion Title 2
											</a>
										</h4>
									</div>
									<div id="collapse6Two" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion6" href="#collapse6Three">
												<i class="fas fa-bars"></i> Accordion Title 3
											</a>
										</h4>
									</div>
									<div id="collapse6Three" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 mb-4 mb-lg-0">

							<h4>Without Background</h4>
							<div class="accordion without-bg" id="accordion7">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7" href="#collapse7One">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse7One" class="collapse show">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Two">
												Accordion Title 2
											</a>
										</h4>
									</div>
									<div id="collapse7Two" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Three">
												Accordion Title 3
											</a>
										</h4>
									</div>
									<div id="collapse7Three" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4">

							<h4>Without Borders and Background</h4>
							<div class="accordion without-bg without-borders" id="accordion8">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One">
												Accordion Title 1
											</a>
										</h4>
									</div>
									<div id="collapse8One" class="collapse show">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8Two">
												Accordion Title 2
											</a>
										</h4>
									</div>
									<div id="collapse8Two" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion8" href="#collapse8Three">
												Accordion Title 3
											</a>
										</h4>
									</div>
									<div id="collapse8Three" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
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
