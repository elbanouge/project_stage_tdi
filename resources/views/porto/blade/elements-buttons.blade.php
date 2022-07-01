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
									<li class="active text-color-primary">Buttons</li>
								</ul>
								<h1 class="font-weight-bold text-10 text-xl-12 line-height-2 mb-3">Buttons</h1>
								<p class="font-weight-light opacity-7 pb-2 mb-4">Tons of button types for your website. From a simple colored button to a more advanced dropdown button.</p>
								<a href="#examples" data-hash data-hash-offset="100" class="btn btn-gradient-primary font-weight-semi-bold px-4 btn-py-2 text-3">View Examples <i class="fas fa-arrow-down ml-1"></i></a>
								<a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="btn btn-light btn-outline btn-outline-thin btn-outline-light-opacity-2 font-weight-semi-bold px-4 btn-py-2 text-3 text-color-light text-color-hover-dark ml-2" target="_blank">Buy Porto <i class="fas fa-external-link-alt ml-1"></i></a>
							</div>

						</div>
					</div>
				</section>

				<div id="examples" class="container py-2">

					<div class="row">
						<div class="col">

							<div class="row align-items-center">
								<div class="col-sm-3">

									<div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
										<h4 class="mb-2">Default</h4>
										<p class="m-0">These are the default button style, select between any color you want.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-primary mb-2">Primary</button>
									<button type="button" class="btn btn-secondary mb-2">Secondary</button>
									<button type="button" class="btn btn-tertiary mb-2">Tertiary</button>
									<button type="button" class="btn btn-quaternary mb-2">Quaternary</button>
									<button type="button" class="btn btn-success mb-2">Success</button>
									<button type="button" class="btn btn-danger mb-2">Danger</button>
									<button type="button" class="btn btn-warning mb-2">Warning</button>
									<button type="button" class="btn btn-info mb-2">Info</button>
									<button type="button" class="btn btn-light mb-2">Light</button>
									<button type="button" class="btn btn-dark mb-2">Dark</button>
									
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
										<h4 class="mb-2">Rounded</h4>
										<p class="m-0">Rounded button style using any color from skin.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-rounded btn-primary mb-2">Primary</button>
									<button type="button" class="btn btn-rounded btn-secondary mb-2">Secondary</button>
									<button type="button" class="btn btn-rounded btn-tertiary mb-2">Tertiary</button>
									<button type="button" class="btn btn-rounded btn-quaternary mb-2">Quaternary</button>
									<button type="button" class="btn btn-rounded btn-success mb-2">Success</button>
									<button type="button" class="btn btn-rounded btn-danger mb-2">Danger</button>
									<button type="button" class="btn btn-rounded btn-warning mb-2">Warning</button>
									<button type="button" class="btn btn-rounded btn-info mb-2">Info</button>
									<button type="button" class="btn btn-rounded btn-light mb-2">Light</button>
									<button type="button" class="btn btn-rounded btn-dark mb-2">Dark</button>
									
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
										<h4 class="mb-2">Square</h4>
										<p class="m-0">Square button style using any color from skin.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-primary rounded-0 mb-2">Primary</button>
									<button type="button" class="btn btn-secondary rounded-0 mb-2">Secondary</button>
									<button type="button" class="btn btn-tertiary rounded-0 mb-2">Tertiary</button>
									<button type="button" class="btn btn-quaternary rounded-0 mb-2">Quaternary</button>
									<button type="button" class="btn btn-success rounded-0 mb-2">Success</button>
									<button type="button" class="btn btn-danger rounded-0 mb-2">Danger</button>
									<button type="button" class="btn btn-warning rounded-0 mb-2">Warning</button>
									<button type="button" class="btn btn-info rounded-0 mb-2">Info</button>
									<button type="button" class="btn btn-light rounded-0 mb-2">Light</button>
									<button type="button" class="btn btn-dark rounded-0 mb-2">Dark</button>
									
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
										<h4 class="mb-2">Outline</h4>
										<p class="m-0">Outline button style using any color from skin.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-outline btn-primary mb-2">Primary</button>
									<button type="button" class="btn btn-outline btn-secondary mb-2">Secondary</button>
									<button type="button" class="btn btn-outline btn-tertiary mb-2">Tertiary</button>
									<button type="button" class="btn btn-outline btn-quaternary mb-2">Quaternary</button>
									<button type="button" class="btn btn-outline btn-success mb-2">Success</button>
									<button type="button" class="btn btn-outline btn-danger mb-2">Danger</button>
									<button type="button" class="btn btn-outline btn-warning mb-2">Warning</button>
									<button type="button" class="btn btn-outline btn-info mb-2">Info</button>
									<button type="button" class="btn btn-outline btn-light mb-2">Light</button>
									<button type="button" class="btn btn-outline btn-dark mb-2">Dark</button>
									
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
										<h4 class="mb-2">Outline Rounded</h4>
										<p class="m-0">Same as default outline but with rounded borders.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-outline btn-rounded btn-primary mb-2">Primary</button>
									<button type="button" class="btn btn-outline btn-rounded btn-secondary mb-2">Secondary</button>
									<button type="button" class="btn btn-outline btn-rounded btn-tertiary mb-2">Tertiary</button>
									<button type="button" class="btn btn-outline btn-rounded btn-quaternary mb-2">Quaternary</button>
									<button type="button" class="btn btn-outline btn-rounded btn-success mb-2">Success</button>
									<button type="button" class="btn btn-outline btn-rounded btn-danger mb-2">Danger</button>
									<button type="button" class="btn btn-outline btn-rounded btn-warning mb-2">Warning</button>
									<button type="button" class="btn btn-outline btn-rounded btn-info mb-2">Info</button>
									<button type="button" class="btn btn-outline btn-rounded btn-light mb-2">Light</button>
									<button type="button" class="btn btn-outline btn-rounded btn-dark mb-2">Dark</button>
									
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
										<h4 class="mb-2">Outline Square</h4>
										<p class="m-0">Same as default outline but with square borders.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-outline btn-primary rounded-0 mb-2">Primary</button>
									<button type="button" class="btn btn-outline btn-secondary rounded-0 mb-2">Secondary</button>
									<button type="button" class="btn btn-outline btn-tertiary rounded-0 mb-2">Tertiary</button>
									<button type="button" class="btn btn-outline btn-quaternary rounded-0 mb-2">Quaternary</button>
									<button type="button" class="btn btn-outline btn-success rounded-0 mb-2">Success</button>
									<button type="button" class="btn btn-outline btn-danger rounded-0 mb-2">Danger</button>
									<button type="button" class="btn btn-outline btn-warning rounded-0 mb-2">Warning</button>
									<button type="button" class="btn btn-outline btn-info rounded-0 mb-2">Info</button>
									<button type="button" class="btn btn-outline btn-light rounded-0 mb-2">Light</button>
									<button type="button" class="btn btn-outline btn-dark rounded-0 mb-2">Dark</button>
									
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
										<h4 class="mb-2">3D</h4>
										<p class="m-0">Alternative 3d style with any skin color.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-3d btn-primary mb-2">Primary</button>
									<button type="button" class="btn btn-3d btn-secondary mb-2">Secondary</button>
									<button type="button" class="btn btn-3d btn-tertiary mb-2">Tertiary</button>
									<button type="button" class="btn btn-3d btn-quaternary mb-2">Quaternary</button>
									<button type="button" class="btn btn-3d btn-success mb-2">Success</button>
									<button type="button" class="btn btn-3d btn-danger mb-2">Danger</button>
									<button type="button" class="btn btn-3d btn-warning mb-2">Warning</button>
									<button type="button" class="btn btn-3d btn-info mb-2">Info</button>
									<button type="button" class="btn btn-3d btn-light mb-2">Light</button>
									<button type="button" class="btn btn-3d btn-dark mb-2">Dark</button>
									
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
										<h4 class="mb-2">3D Rounded</h4>
										<p class="m-0">Same as default 3D but with rounded borders.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-rounded btn-3d btn-primary mb-2">Primary</button>
									<button type="button" class="btn btn-rounded btn-3d btn-secondary mb-2">Secondary</button>
									<button type="button" class="btn btn-rounded btn-3d btn-tertiary mb-2">Tertiary</button>
									<button type="button" class="btn btn-rounded btn-3d btn-quaternary mb-2">Quaternary</button>
									<button type="button" class="btn btn-rounded btn-3d btn-success mb-2">Success</button>
									<button type="button" class="btn btn-rounded btn-3d btn-danger mb-2">Danger</button>
									<button type="button" class="btn btn-rounded btn-3d btn-warning mb-2">Warning</button>
									<button type="button" class="btn btn-rounded btn-3d btn-info mb-2">Info</button>
									<button type="button" class="btn btn-rounded btn-3d btn-light mb-2">Light</button>
									<button type="button" class="btn btn-rounded btn-3d btn-dark mb-2">Dark</button>
									
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
										<h4 class="mb-2">3D Square</h4>
										<p class="m-0">Same as default 3D but with square borders.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-3d btn-primary rounded-0 mb-2">Primary</button>
									<button type="button" class="btn btn-3d btn-secondary rounded-0 mb-2">Secondary</button>
									<button type="button" class="btn btn-3d btn-tertiary rounded-0 mb-2">Tertiary</button>
									<button type="button" class="btn btn-3d btn-quaternary rounded-0 mb-2">Quaternary</button>
									<button type="button" class="btn btn-3d btn-success rounded-0 mb-2">Success</button>
									<button type="button" class="btn btn-3d btn-danger rounded-0 mb-2">Danger</button>
									<button type="button" class="btn btn-3d btn-warning rounded-0 mb-2">Warning</button>
									<button type="button" class="btn btn-3d btn-info rounded-0 mb-2">Info</button>
									<button type="button" class="btn btn-3d btn-light rounded-0 mb-2">Light</button>
									<button type="button" class="btn btn-3d btn-dark rounded-0 mb-2">Dark</button>
									
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
										<h4 class="mb-2">Modern</h4>
										<p class="m-0">Modern style alternative, with any skin color.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-modern btn-primary mb-2">Primary</button>
									<button type="button" class="btn btn-modern btn-secondary mb-2">Secondary</button>
									<button type="button" class="btn btn-modern btn-tertiary mb-2">Tertiary</button>
									<button type="button" class="btn btn-modern btn-quaternary mb-2">Quaternary</button>
									<button type="button" class="btn btn-modern btn-success mb-2">Success</button>
									<button type="button" class="btn btn-modern btn-danger mb-2">Danger</button>
									<button type="button" class="btn btn-modern btn-warning mb-2">Warning</button>
									<button type="button" class="btn btn-modern btn-info mb-2">Info</button>
									<button type="button" class="btn btn-modern btn-light mb-2">Light</button>
									<button type="button" class="btn btn-modern btn-dark mb-2">Dark</button>
									
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
										<h4 class="mb-2">Modern Rounded</h4>
										<p class="m-0">Same as default modern style but with rounded borders.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-modern btn-rounded btn-primary mb-2">Primary</button>
									<button type="button" class="btn btn-modern btn-rounded btn-secondary mb-2">Secondary</button>
									<button type="button" class="btn btn-modern btn-rounded btn-tertiary mb-2">Tertiary</button>
									<button type="button" class="btn btn-modern btn-rounded btn-quaternary mb-2">Quaternary</button>
									<button type="button" class="btn btn-modern btn-rounded btn-success mb-2">Success</button>
									<button type="button" class="btn btn-modern btn-rounded btn-danger mb-2">Danger</button>
									<button type="button" class="btn btn-modern btn-rounded btn-warning mb-2">Warning</button>
									<button type="button" class="btn btn-modern btn-rounded btn-info mb-2">Info</button>
									<button type="button" class="btn btn-modern btn-rounded btn-light mb-2">Light</button>
									<button type="button" class="btn btn-modern btn-rounded btn-dark mb-2">Dark</button>
									
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
										<h4 class="mb-2">Modern Square</h4>
										<p class="m-0">Same as default modern style but with square borders.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-modern btn-primary rounded-0 mb-2">Primary</button>
									<button type="button" class="btn btn-modern btn-secondary rounded-0 mb-2">Secondary</button>
									<button type="button" class="btn btn-modern btn-tertiary rounded-0 mb-2">Tertiary</button>
									<button type="button" class="btn btn-modern btn-quaternary rounded-0 mb-2">Quaternary</button>
									<button type="button" class="btn btn-modern btn-success rounded-0 mb-2">Success</button>
									<button type="button" class="btn btn-modern btn-danger rounded-0 mb-2">Danger</button>
									<button type="button" class="btn btn-modern btn-warning rounded-0 mb-2">Warning</button>
									<button type="button" class="btn btn-modern btn-info rounded-0 mb-2">Info</button>
									<button type="button" class="btn btn-modern btn-light rounded-0 mb-2">Light</button>
									<button type="button" class="btn btn-modern btn-dark rounded-0 mb-2">Dark</button>
									
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
										<h4 class="mb-2">Gradient</h4>
										<p class="m-0">Gradient style alternative, using the skin color.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-gradient mb-2">Primary</button>
									<button type="button" class="btn btn-rounded btn-gradient mb-2">Primary</button>
									<button type="button" class="btn rounded-0 btn-gradient mb-2">Primary</button>
									
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
										<h4 class="mb-2">Gradient Outline</h4>
										<p class="m-0">Same as default gradient style but with outline borders.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-outline btn-gradient mb-2">Primary</button>
									
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
										<h4 class="mb-2">Shadow</h4>
										<p class="m-0">Shadow style alternative, using the skin color.</p>
									</div>

								</div>
								<div class="col-sm-9">

									<button type="button" class="btn btn-rounded btn-primary box-shadow-2 mb-2">Primary</button>
									<button type="button" class="btn btn-rounded btn-secondary box-shadow-2 mb-2">Secondary</button>
									<button type="button" class="btn btn-rounded btn-tertiary box-shadow-2 mb-2">Tertiary</button>
									<button type="button" class="btn btn-rounded btn-quaternary box-shadow-2 mb-2">Quaternary</button>
									<button type="button" class="btn btn-rounded btn-success box-shadow-2 mb-2">Success</button>
									<button type="button" class="btn btn-rounded btn-danger box-shadow-2 mb-2">Danger</button>
									<button type="button" class="btn btn-rounded btn-warning box-shadow-2 mb-2">Warning</button>
									<button type="button" class="btn btn-rounded btn-info box-shadow-2 mb-2">Info</button>
									<button type="button" class="btn btn-rounded btn-light box-shadow-2 mb-2">Light</button>
									<button type="button" class="btn btn-rounded btn-dark box-shadow-2 mb-2">Dark</button>
									
								</div>
							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 mb-5 mb-lg-0">

									<h4>Disabled</h4>

									<button type="button" class="btn btn-primary mb-2" disabled>Primary</button>
									<button type="button" class="btn btn-secondary mb-2" disabled>Secondary</button>
									<button type="button" class="btn btn-tertiary mb-2" disabled>Tertiary</button>
									<button type="button" class="btn btn-quaternary mb-2" disabled>Quaternary</button>
									
								</div>
								<div class="col-lg-6">

									<h4>Block Buttons</h4>

									<button type="button" class="btn btn-primary btn-block mb-2">Primary</button>
									
								</div>
							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4 mb-5 mb-lg-0">

									<h4>Toggle States</h4>

									<button type="button" class="btn btn-primary mb-2" data-toggle="button" aria-pressed="false" autocomplete="off">Primary</button>
									<button type="button" class="btn btn-outline btn-primary mb-2" data-toggle="button" aria-pressed="false" autocomplete="off">Secondary</button>
									
								</div>
								<div class="col-lg-4 mb-5 mb-lg-0">

									<h4>Checkbox Buttons</h4>

									<div class="btn-group-toggle" data-toggle="buttons">
									  	<label class="btn btn-primary mb-2">
									    	<input type="checkbox" name="checkboxOptions" checked autocomplete="off"> Checkbox
									  	</label>
									  	<label class="btn btn-outline btn-primary mb-2">
									    	<input type="checkbox" name="checkboxOptions" autocomplete="off"> Checkbox
									  	</label>
									</div>
									
								</div>
								<div class="col-lg-4">

									<h4>Radio Buttons</h4>

									<div class="btn-group-toggle" data-toggle="buttons">
									  	<label class="btn btn-outline btn-primary active mb-2">
									    	<input type="radio" name="options" id="option1" autocomplete="off" checked> Radio
									  	</label>
									  	<label class="btn btn-outline btn-primary mb-2">
									    	<input type="radio" name="options" id="option1" autocomplete="off"> Radio
									  	</label>
									  	<label class="btn btn-outline btn-primary mb-2">
									    	<input type="radio" name="options" id="option1" autocomplete="off"> Radio
									  	</label>
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

									<h4>Dropdown Buttons</h4>

									<div class="btn-group" role="group">
									    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
									    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
									      	<a class="dropdown-item" href="#">Dropdown link</a>
									      	<a class="dropdown-item" href="#">Dropdown link</a>
									    </div>
									</div>

									<div class="btn-group" role="group">
									    <button id="btnGroupDrop2" type="button" class="btn btn-outline btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
									    <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
									      	<a class="dropdown-item" href="#">Dropdown link</a>
									      	<a class="dropdown-item" href="#">Dropdown link</a>
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
								<div class="col mb-5 mb-lg-0">

									<h4>Arrow Buttons</h4>

									<p>
										<button type="button" class="btn btn-primary btn-with-arrow mb-2" href="#">Primary<span><i class="fas fa-chevron-right"></i></span></button>

										<button type="button" class="btn btn-secondary btn-with-arrow mb-2" href="#">Secondary<span><i class="fas fa-chevron-right"></i></span></button>

										<button type="button" class="btn btn-tertiary btn-with-arrow mb-2" href="#">Tertiary<span><i class="fas fa-chevron-right"></i></span></button>

										<button type="button" class="btn btn-quaternary btn-with-arrow mb-2" href="#">Quartenary<span><i class="fas fa-chevron-right"></i></span></button>
										
										<button type="button" class="btn btn-dark btn-with-arrow mb-2" href="#">Dark<span><i class="fas fa-chevron-right"></i></span></button>
									</p>
									
								</div>
							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>

							<div class="row">
								<div class="col">

									<h4>Arrow Buttons Outline</h4>

									<p>
										<button type="button" class="btn btn-outline btn-rounded btn-primary  btn-with-arrow mb-2" href="#">Primary<span><i class="fas fa-chevron-right"></i></span></button>
										
										<button type="button" class="btn btn-outline btn-rounded btn-secondary  btn-with-arrow mb-2" href="#">Secondary<span><i class="fas fa-chevron-right"></i></span></button>

										<button type="button" class="btn btn-outline btn-rounded btn-tertiary  btn-with-arrow mb-2" href="#">Tertiary<span><i class="fas fa-chevron-right"></i></span></button>

										<button type="button" class="btn btn-outline btn-rounded btn-quaternary  btn-with-arrow mb-2" href="#">Quartenary<span><i class="fas fa-chevron-right"></i></span></button>

										<button type="button" class="btn btn-outline btn-rounded btn-dark  btn-with-arrow mb-2" href="#">Dark<span><i class="fas fa-chevron-right"></i></span></button>
									</p>
									
								</div>
							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>

							<div class="row">

								<div class="col">

									<h4>Sizes</h4>

									<p>
										<button type="button" class="btn btn-primary btn-xl mb-2">Extra Large Size</button>
										<button type="button" class="btn btn-outline btn-primary btn-xl mb-2">Extra Large Size</button>
										<button type="button" class="btn btn-3d btn-primary btn-xl mb-2">Extra Large Size</button>
									</p>

									<p>
										<button type="button" class="btn btn-primary btn-lg mb-2">Large Size</button>
										<button type="button" class="btn btn-outline btn-primary btn-lg mb-2">Large Size</button>
										<button type="button" class="btn btn-3d btn-primary btn-lg mb-2">Large Size</button>
									</p>
									<p>
										<button type="button" class="btn btn-primary mb-2">Default Size</button>
										<button type="button" class="btn btn-outline btn-primary mb-2">Default Size</button>
										<button type="button" class="btn btn-3d btn-primary mb-2">Default Size</button>
									</p>
									<p>
										<button type="button" class="btn btn-primary btn-sm mb-2">Small Size</button>
										<button type="button" class="btn btn-outline btn-primary btn-sm mb-2">Small Size</button>
										<button type="button" class="btn btn-3d btn-primary btn-sm mb-2">Small Size</button>
									</p>
									<p>
										<button type="button" class="btn btn-primary btn-xs mb-2">Extra Small Size</button>
										<button type="button" class="btn btn-outline btn-primary btn-xs mb-2">Extra Small Size</button>
										<button type="button" class="btn btn-3d btn-primary btn-xs mb-2">Extra Small Size</button>
									</p>
									
								</div>

							</div>
							
							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>

							<div class="row">
								<div class="col-lg-8">

									<h4>Buttons Icons</h4>

									<p>
										<button type="button" class="mb-1 mt-1 mr-1 btn btn-light"><i class="fas fa-sync"></i> Refresh</button>
										<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-cloud"></i> Cloud</button>
										<button type="button" class="mb-1 mt-1 mr-1 btn btn-info"><i class="fas fa-thumbs-up"></i> </button>
										<button type="button" class="mb-1 mt-1 mr-1 btn btn-outline btn-info"><i class="fas fa-thumbs-up"></i> </button>
										<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary">GET STARTED NOW <i class="fas fa-arrow-right ml-1"></i> </button>
									</p>

								</div>
								<div class="col-lg-4">

									<h4>Buttons With Badge</h4>

									<a class="btn btn-badge btn-modern btn-primary mb-2" href="#">Purchase <span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1">Only $16</span></a>

								</div>
							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>
							
							<div class="row">
								<div class="col">

									<h4>Play Buttons</h4>
porto.partials
									<div class="row">
										<div class="col-lg-4 mb-4 mb-lg-0">
											<div class="featured-boxes featured-boxes-modern-style-1">
												@include('porto.partials.featured-box.featured-box-70', ['key' => 'featured-box.featured-box-70'])
											</div>
										</div>
										<div class="col-lg-4 mb-4 mb-lg-0">
											<div class="card p-3">
												<div class="card-body p-4 my-4">
													<p>Lorem ipsum dolor sit a met. Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
													@include('porto.partials.lightbox.lightbox-58')
												</div>
											</div>porto.partials
										</div>
										<div class="col-lg-4">
											<div class="featured-boxes featured-boxes-modern-style-1">
												@include('porto.partials.featured-box.featured-box-71', ['key' => 'featured-box.featured-box-71'])
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
							
							<div class="row mb-3">
								<div class="col">

									<h4>Share Buttons</h4>

									<h5 class="text-uppercase mb-3">Default</h5>
									<ul class="social-icons">
										<!-- Facebook -->
										<li>
											<a href="http://www.facebook.com/sharer.php?u=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Facebook">
												<i class="text-dark fab fa-facebook-f"></i>
											</a>
										</li>
										<!-- Google+ -->
										<li>
											<a href="https://plus.google.com/share?url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Google+">
												<i class="text-dark fab fa-google-plus-g"></i>
											</a>
										</li>
										<!-- LinkedIn -->
										<li>
											<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On LinkedIn">
												<i class="text-dark fab fa-linkedin-in"></i>
											</a>
										</li>
										<!-- Pinterest -->
										<li>
											<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" data-toggle="tooltip" data-placement="top" title="Share On Pinterest">
												<i class="text-dark fab fa-pinterest-p"></i>
											</a>
										</li>
										<!-- Print -->
										<li>
											<a href="javascript:;" onclick="window.print()" data-toggle="tooltip" data-placement="top" title="Print">
												<i class="text-dark fas fa-print"></i>
											</a>
										</li>
										<!-- Reddit -->
										<li>
											<a href="http://reddit.com/submit?url=https://www.okler.net&amp;title=Share%20This%20Page" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Reddit">
												<i class="text-dark fab fa-reddit-alien"></i>
											</a>
										</li>
										<!-- StumbleUpon-->
										<li>
											<a href="http://www.stumbleupon.com/submit?url=https://www.okler.net&amp;title=Share%20This%20Page" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On StumbleUpon">
												<i class="text-dark fab fa-stumbleupon"></i>
											</a>
										</li>
										<!-- Tumblr-->
										<li>
											<a href="http://www.tumblr.com/share/link?url=https://www.okler.net&amp;title=Share%20This%20Page" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Tumblr">
												<i class="text-dark fab fa-tumblr"></i>
											</a>
										</li>
										<!-- Twitter -->
										<li>
											<a href="https://twitter.com/share?url=https://www.okler.net&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Twitter">
												<i class="text-dark fab fa-twitter"></i>
											</a>
										</li>
										<!-- VK -->
										<li>
											<a href="http://vkontakte.ru/share.php?url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On VK">
												<i class="text-dark fab fa-vk"></i>
											</a>
										</li>
										<!-- Digg -->
										<li>
											<a href="http://www.digg.com/submit?url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Digg">
												<i class="text-dark fab fa-digg"></i>
											</a>
										</li>
										<!-- Email -->
										<li>
											<a href="mailto:?Subject=Share%20This%20Page&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20%20https://www.okler.net" data-toggle="tooltip" data-placement="top" title="Share By Email">
												<i class="text-dark far fa-envelope"></i>
											</a>
										</li>
									</ul>

									<h5 class="text-uppercase mb-3 mt-4">Large</h5>
									<ul class="social-icons social-icons-big mt-2">
										<!-- Facebook -->
										<li>
											<a href="http://www.facebook.com/sharer.php?u=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Facebook">
												<i class="text-dark fab fa-facebook-f"></i>
											</a>
										</li>
										<!-- Google+ -->
										<li>
											<a href="https://plus.google.com/share?url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Google+">
												<i class="text-dark fab fa-google-plus-g"></i>
											</a>
										</li>
										<!-- LinkedIn -->
										<li>
											<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On LinkedIn">
												<i class="text-dark fab fa-linkedin-in"></i>
											</a>
										</li>
										<!-- Pinterest -->
										<li>
											<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" data-toggle="tooltip" data-placement="top" title="Share On Pinterest">
												<i class="text-dark fab fa-pinterest-p"></i>
											</a>
										</li>
										<!-- Print -->
										<li>
											<a href="javascript:;" onclick="window.print()" data-toggle="tooltip" data-placement="top" title="Print">
												<i class="text-dark fas fa-print"></i>
											</a>
										</li>
										<!-- Reddit -->
										<li>
											<a href="http://reddit.com/submit?url=https://www.okler.net&amp;title=Share%20This%20Page" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Reddit">
												<i class="text-dark fab fa-reddit-alien"></i>
											</a>
										</li>
										<!-- StumbleUpon-->
										<li>
											<a href="http://www.stumbleupon.com/submit?url=https://www.okler.net&amp;title=Share%20This%20Page" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On StumbleUpon">
												<i class="text-dark fab fa-stumbleupon"></i>
											</a>
										</li>
										<!-- Tumblr-->
										<li>
											<a href="http://www.tumblr.com/share/link?url=https://www.okler.net&amp;title=Share%20This%20Page" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Tumblr">
												<i class="text-dark fab fa-tumblr"></i>
											</a>
										</li>
										<!-- Twitter -->
										<li>
											<a href="https://twitter.com/share?url=https://www.okler.net&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Twitter">
												<i class="text-dark fab fa-twitter"></i>
											</a>
										</li>
										<!-- VK -->
										<li>
											<a href="http://vkontakte.ru/share.php?url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On VK">
												<i class="text-dark fab fa-vk"></i>
											</a>
										</li>
										<!-- Digg -->
										<li>
											<a href="http://www.digg.com/submit?url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Digg">
												<i class="text-dark fab fa-digg"></i>
											</a>
										</li>
										<!-- Email -->
										<li>
											<a href="mailto:?Subject=Share%20This%20Page&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20%20https://www.okler.net" data-toggle="tooltip" data-placement="top" title="Share By Email">
												<i class="text-dark far fa-envelope"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>
							
							<div class="row mb-3">
								<div class="col">

									<h4>Pagination</h4>
porto.partials
									<div class="row">
										<div class="col-lg-5">
											<h5 class="text-uppercase mb-3">Large</h5>
											@include('porto.partials.pagination.pagination-8')
										</div>
										<div class="col-lg-4">
											<h5 class="text-uppercase mb-3">Default</h5>
											@include('porto.partials.pagination.pagination-9')
										</div>
										<div class="col-lg-3">
											<h5 class="text-uppercase mb-3">Small</h5>
											@include('porto.partials.pagination.pagination-10')
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
									@include('porto.partials.featured-box.featured-box-26', ['key' => 'featured-box.featured-box-72'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-27', ['key' => 'featured-box.featured-box-73'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-28', ['key' => 'featured-box.featured-box-74'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-29', ['key' => 'featured-box.featured-box-75'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-30', ['key' => 'featured-box.featured-box-76'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-31', ['key' => 'featured-box.featured-box-77'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-32', ['key' => 'featured-box.featured-box-78'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-33', ['key' => 'featured-box.featured-box-79'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-34', ['key' => 'featured-box.featured-box-80'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-35', ['key' => 'featured-box.featured-box-81'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-36', ['key' => 'featured-box.featured-box-82'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-37', ['key' => 'featured-box.featured-box-83'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-38', ['key' => 'featured-box.featured-box-84'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-39', ['key' => 'featured-box.featured-box-85'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-40', ['key' => 'featured-box.featured-box-86'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-41', ['key' => 'featured-box.featured-box-87'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-42', ['key' => 'featured-box.featured-box-88'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-43', ['key' => 'featured-box.featured-box-89'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-44', ['key' => 'featured-box.featured-box-90'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-45', ['key' => 'featured-box.featured-box-91'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-46', ['key' => 'featured-box.featured-box-92'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-47', ['key' => 'featured-box.featured-box-93'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-48', ['key' => 'featured-box.featured-box-94'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-49', ['key' => 'featured-box.featured-box-95'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-50', ['key' => 'featured-box.featured-box-96'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-51', ['key' => 'featured-box.featured-box-97'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-52', ['key' => 'featured-box.featured-box-98'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-53', ['key' => 'featured-box.featured-box-99'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-54', ['key' => 'featured-box.featured-box-100'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-55', ['key' => 'featured-box.featured-box-101'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-56', ['key' => 'featured-box.featured-box-102'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-57', ['key' => 'featured-box.featured-box-103'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-58', ['key' => 'featured-box.featured-box-104'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-59', ['key' => 'featured-box.featured-box-105'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-60', ['key' => 'featured-box.featured-box-106'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-61', ['key' => 'featured-box.featured-box-107'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-62', ['key' => 'featured-box.featured-box-108'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-63', ['key' => 'featured-box.featured-box-109'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-64', ['key' => 'featured-box.featured-box-110'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-65', ['key' => 'featured-box.featured-box-111'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-66', ['key' => 'featured-box.featured-box-112'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-67', ['key' => 'featured-box.featured-box-113'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-68', ['key' => 'featured-box.featured-box-114'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-69', ['key' => 'featured-box.featured-box-115'])
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
