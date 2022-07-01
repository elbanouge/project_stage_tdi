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
									<li class="active text-color-primary">Forms</li>
								</ul>
								<h1 class="font-weight-bold text-10 text-xl-12 line-height-2 mb-3">Forms</h1>
								<p class="font-weight-light opacity-7 pb-2 mb-4">From a simple contact form to a more advanced with Google reCaptcha enabled. Easy to configure trough the template files.</p>
								<a href="#examples" data-hash data-hash-offset="100" class="btn btn-gradient-primary font-weight-semi-bold px-4 btn-py-2 text-3">View Examples <i class="fas fa-arrow-down ml-1"></i></a>
								<a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="btn btn-light btn-outline btn-outline-thin btn-outline-light-opacity-2 font-weight-semi-bold px-4 btn-py-2 text-3 text-color-light text-color-hover-dark ml-2" target="_blank">Buy Porto <i class="fas fa-external-link-alt ml-1"></i></a>
							</div>

						</div>
					</div>
				</section>

				<div id="examples" class="container py-2">

					<div class="porto.partialsporto.partialsporto.partials
						<div class="col-lg-3 order-2 order-lg-1">


							@include('porto.partials.sidebar.sidebar-51')
							@include('porto.partials.sidebar.sidebar-52')
							@include('porto.partials.sidebar.sidebar-53')
						</div>
						<div class="col-lg-9 order-1 order-lg-2">

							<div class="tab-pane tab-pane-navigation active" id="formsStyleDefault">


								<h4 class="mb-3">Default</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Full Name</label>
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
														</div>
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Email Address</label>
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label>City</label>
															<div class="custom-select-1">
													      		<select class="form-control h-auto" data-msg-required="Please select a city." name="city" required>
													        		<option value="">Choose...</option>
													        		<option value="1">1</option>
													        		<option value="2">2</option>
													        		<option value="3">3</option>
													      		</select>
													      	</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Subject</label>
															<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Message</label>
															<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent9Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContent9Checkbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsStyleWithoutBorders">								
								<h4 class="mb-3">Without Borders</h4>
								<div class="card bg-color-light-scale-1 mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form form-style-2" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Full Name</label>
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
														</div>
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Email Address</label>
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label>City</label>
															<div class="custom-select-1">
													      		<select class="form-control h-auto" data-msg-required="Please select a city." name="city" required>
													        		<option value="">Choose...</option>
													        		<option value="1">1</option>
													        		<option value="2">2</option>
													        		<option value="3">3</option>
													      		</select>
													      	</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Subject</label>
															<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent10Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent10Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent10Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Message</label>
															<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent10Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContent10Checkbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsStyleColors">								
								<h4 class="mb-3">Colored Background - Grey</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form form-style-3" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Full Name</label>
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
														</div>
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Email Address</label>
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label>City</label>
															<div class="custom-select-1">
													      		<select class="form-control h-auto" data-msg-required="Please select a city." name="city" required>
													        		<option value="">Choose...</option>
													        		<option value="1">1</option>
													        		<option value="2">2</option>
													        		<option value="3">3</option>
													      		</select>
													      	</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Subject</label>
															<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent11Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent11Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent11Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Message</label>
															<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent11Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContent11Checkbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Colored Background - Primary</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form form-style-3" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Full Name</label>
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control bg-color-primary text-3 h-auto py-2" name="name" required>
														</div>
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Email Address</label>
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control bg-color-primary text-3 h-auto py-2" name="email" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label>City</label>
															<div class="custom-select-1">
													      		<select class="form-control bg-color-primary h-auto" data-msg-required="Please select a city." name="city" required>
													        		<option value="">Choose...</option>
													        		<option value="1">1</option>
													        		<option value="2">2</option>
													        		<option value="3">3</option>
													      		</select>
													      	</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Subject</label>
															<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control bg-color-primary text-3 h-auto py-2" name="subject" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent12Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent12Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent12Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Message</label>
															<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control bg-color-primary text-3 h-auto py-2" name="message" required></textarea>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent12Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContent12Checkbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsStyleWithIcons">								
								<h4 class="mb-3">With Icons</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form form-with-icons" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Full Name</label>
															<div class="position-relative">
																<i class="icons icon-user text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
																<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
															</div>
														</div>
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Email Address</label>
															<div class="position-relative">
																<i class="icons icon-envelope text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
																<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label>City</label>
															<div class="position-relative">
																<i class="icons icon-location-pin text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50 z-index-1"></i>
																<div class="custom-select-1">
														      		<select class="form-control h-auto" data-msg-required="Please select a city." name="city" required>
														        		<option value="">Choose...</option>
														        		<option value="1">1</option>
														        		<option value="2">2</option>
														        		<option value="3">3</option>
														      		</select>
														      	</div>
														    </div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Subject</label>
															<div class="position-relative">
																<i class="icons icon-note text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
																<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent13Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent13Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent13Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Message</label>
															<div class="position-relative">
																<i class="icons icon-bubble text-color-primary text-3 position-absolute left-15 top-15"></i>
																<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
															</div>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent13Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContent13Checkbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">With Icons - Bottom Line</h4>
								<div class="card bg-dark mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form form-style-4 form-style-4-border-light form-with-icons form-errors-light" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<div class="position-relative">
																<i class="icons icon-user text-color-light text-3 position-absolute left-5 top-50pct transform3dy-n50"></i>
																<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" placeholder="Full Name" required>
															</div>
														</div>
														<div class="form-group col-lg-6">
															<div class="position-relative">
																<i class="icons icon-envelope text-color-light text-3 position-absolute left-5 top-50pct transform3dy-n50"></i>
																<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" placeholder="Email Address" required>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="position-relative">
																<i class="icons icon-location-pin text-color-light text-3 position-absolute left-5 top-50pct transform3dy-n50 z-index-1"></i>
																<div class="custom-select-1 custom-select-1-icon-light">
														      		<select class="form-control h-auto" data-msg-required="Please select a city." name="city" required>
														        		<option value="" disabled>Choose...</option>
														        		<option value="1">1</option>
														        		<option value="2">2</option>
														        		<option value="3">3</option>
														      		</select>
														      	</div>
														    </div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="position-relative">
																<i class="icons icon-note text-color-light text-3 position-absolute left-5 top-50pct transform3dy-n50"></i>
																<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" placeholder="Subject" required>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent14Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent14Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent14Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="position-relative">
																<i class="icons icon-bubble text-color-light text-3 position-absolute left-5 top-15"></i>
																<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" placeholder="Message" required></textarea>
															</div>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent14Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContent14Checkbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-light" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsStyleRoundedBorders">								
								<h4 class="mb-3">Rounded Borders</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form form-fields-rounded" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Full Name</label>
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
														</div>
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Email Address</label>
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label>City</label>
															<div class="custom-select-1">
													      		<select class="form-control h-auto" data-msg-required="Please select a city." name="city" required>
													        		<option value="">Choose...</option>
													        		<option value="1">1</option>
													        		<option value="2">2</option>
													        		<option value="3">3</option>
													      		</select>
													      	</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Subject</label>
															<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent15Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent15Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent15Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Message</label>
															<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent15Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContent15Checkbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Rounded Borders - Grey Background</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form form-style-3 form-fields-rounded" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Full Name</label>
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
														</div>
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Email Address</label>
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label>City</label>
															<div class="custom-select-1">
													      		<select class="form-control h-auto" data-msg-required="Please select a city." name="city" required>
													        		<option value="">Choose...</option>
													        		<option value="1">1</option>
													        		<option value="2">2</option>
													        		<option value="3">3</option>
													      		</select>
													      	</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Subject</label>
															<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent16Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent16Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent16Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Message</label>
															<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent16Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContent16Checkbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsStyleBottomLine">
								<h4 class="mb-3">Bottom Line</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form form-style-4 form-style-4-text-dark" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" placeholder="Full Name" required>
														</div>
														<div class="form-group col-lg-6">
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" placeholder="Email Address" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="custom-select-1">
													      		<select class="form-control h-auto" data-msg-required="Please select a city." name="city" required>
													        		<option value="">Select a City...</option>
													        		<option value="1">1</option>
													        		<option value="2">2</option>
													        		<option value="3">3</option>
													      		</select>
													      	</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" placeholder="Subject" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent17Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent17Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent17Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" placeholder="Message" required></textarea>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent17Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContent17Checkbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsStyleWithShadow">								
								<h4 class="mb-3">With Shadow</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form form-style-2 form-with-shadow" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" placeholder="Full Name" required>
														</div>
														<div class="form-group col-lg-6">
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" placeholder="Email Address" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="custom-select-1">
													      		<select class="form-control h-auto" data-msg-required="Please select a city." name="city" required>
													        		<option value="">Select a City...</option>
													        		<option value="1">1</option>
													        		<option value="2">2</option>
													        		<option value="3">3</option>
													      		</select>
													      	</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" placeholder="Subject" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent18Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent18Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent18Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" placeholder="Message" required></textarea>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent18Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContent18Checkbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsStyleSquaredBorders">
								<h4 class="mb-3">Squared Borders</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="contact-form form-squared-borders" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Full Name</label>
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
														</div>
														<div class="form-group col-lg-6">
															<label class="mb-1 text-2">Email Address</label>
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label>City</label>
															<div class="custom-select-1">
													      		<select class="form-control h-auto" data-msg-required="Please select a city." name="city" required>
													        		<option value="">Choose...</option>
													        		<option value="1">1</option>
													        		<option value="2">2</option>
													        		<option value="3">3</option>
													      		</select>
													      	</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Subject</label>
															<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent19Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent19Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent19Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="mb-1 text-2">Message</label>
															<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
														</div>
													</div>
													<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent19Checkbox" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="tabContentCheckbox">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsExamplesFormControl">
								<h4 class="mb-3">Sizing</h4>
								<div class="card mb-4">
									<div class="card-body">
										<input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
										<input class="form-control mb-3" type="text" placeholder="Default input" aria-label="default input example">
										<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
									</div>
								</div>
								<h4 class="mb-3">Colors</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<input class="form-control border-color-primary mb-3" type="text" placeholder="Default color input" aria-label="default color input example">
											</div>
											<div class="col-lg-6">
												<input class="form-control border-color-secondary mb-3" type="text" placeholder="Default color input" aria-label="default color input example">
											</div>
											<div class="col-lg-6">
												<input class="form-control border-color-tertiary mb-3" type="text" placeholder="Default color input" aria-label="default color input example">
											</div>
											<div class="col-lg-6">
												<input class="form-control border-color-quaernary mb-3" type="text" placeholder="Default color input" aria-label="default color input example">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<input class="form-control bg-primary mb-3" type="text" placeholder="Default color input" aria-label="default color input example">
											</div>
											<div class="col-lg-6">
												<input class="form-control bg-secondary mb-3" type="text" placeholder="Default color input" aria-label="default color input example">
											</div>
											<div class="col-lg-6">
												<input class="form-control bg-tertiary mb-3" type="text" placeholder="Default color input" aria-label="default color input example">
											</div>
											<div class="col-lg-6">
												<input class="form-control bg-quaernary mb-3" type="text" placeholder="Default color input" aria-label="default color input example">
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Readonly</h4>
								<div class="card mb-4">
									<div class="card-body">
										<input class="form-control mb-3" type="text" placeholder="Readonly input here..." readonly>
										<input type="text" readonly class="form-control-plaintext text-3" value="email@example.com">
									</div>
								</div>
								<h4 class="mb-3">Disabled</h4>
								<div class="card mb-4">
									<div class="card-body">
										<input class="form-control" type="text" placeholder="Disabled input" aria-label="disabled input" disabled>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsExamplesSelect">								
								<h4 class="mb-3">Sizing</h4>
								<div class="card mb-4">
									<div class="card-body">
										<select class="form-control form-control-lg mb-3">
										  	<option>Large select</option>
										</select>
										<select class="form-control mb-3">
										  	<option>Default select</option>
										</select>
										<select class="form-control form-control-sm">
										  	<option>Small select</option>
										</select>
									</div>
								</div>
								<h4 class="mb-3">Colors</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<select class="form-control border-color-primary mb-3">
												  	<option>Default select</option>
												</select>
											</div>
											<div class="col-lg-6">
												<select class="form-control border-color-secondary mb-3">
												  	<option>Default select</option>
												</select>
											</div>
											<div class="col-lg-6">
												<select class="form-control border-color-tertiary mb-3">
												  	<option>Default select</option>
												</select>
											</div>
											<div class="col-lg-6">
												<select class="form-control border-color-quaternary mb-3">
												  	<option>Default select</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<select class="form-control bg-primary mb-3">
												  	<option>Default select</option>
												</select>
											</div>
											<div class="col-lg-6">
												<select class="form-control bg-secondary mb-3">
												  	<option>Default select</option>
												</select>
											</div>
											<div class="col-lg-6">
												<select class="form-control bg-tertiary mb-3">
												  	<option>Default select</option>
												</select>
											</div>
											<div class="col-lg-6">
												<select class="form-control bg-quaternary mb-3">
												  	<option>Default select</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Custom</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="custom-select-1 mb-3">
											<select name="size" class="form-control h-auto py-2">
												<option value="">PLEASE CHOOSE</option>
												<option value="blue">Small</option>
												<option value="red">Normal</option>
												<option value="green">Big</option>
											</select>
										</div>
										<select class="custom-select">
									        <option selected disabled value="">Choose...</option>
									        <option>...</option>
									     </select>
									</div>
								</div>
								<h4 class="mb-3">Multiple</h4>
								<div class="card mb-4">
									<div class="card-body">
										<select multiple class="form-control" id="exampleFormControlSelect2">
									      	<option>1</option>
									      	<option>2</option>
									      	<option>3</option>
									      	<option>4</option>
									      	<option>5</option>
									    </select>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsExamplesChecksRadios">								
								<h4 class="mb-3">Default</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-check">
												  	<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
												  	<label class="form-check-label" for="defaultCheck1">
												    	Default checkbox
												  	</label>
												</div>
												<div class="form-check">
												  	<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
												  	<label class="form-check-label" for="defaultCheck2">
												    	Disabled checkbox
												  	</label>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-check">
												  	<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
												  	<label class="form-check-label" for="exampleRadios1">
												    	Default radio
												  	</label>
												</div>
												<div class="form-check">
												  	<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
												  	<label class="form-check-label" for="exampleRadios2">
												    	Second default radio
												  	</label>
												</div>
												<div class="form-check">
												  	<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
												  	<label class="form-check-label" for="exampleRadios3">
												    	Disabled radio
												  	</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Inline</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-check form-check-inline">
												  	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
												  	<label class="form-check-label" for="inlineCheckbox1">1</label>
												</div>
												<div class="form-check form-check-inline">
												  	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
												  	<label class="form-check-label" for="inlineCheckbox2">2</label>
												</div>
												<div class="form-check form-check-inline">
												  	<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
												  	<label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-check form-check-inline">
												  	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
												  	<label class="form-check-label" for="inlineRadio1">1</label>
												</div>
												<div class="form-check form-check-inline">
												  	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
												  	<label class="form-check-label" for="inlineRadio2">2</label>
												</div>
												<div class="form-check form-check-inline">
												  	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
												  	<label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Custom</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<div class="custom-checkbox ml-4 mb-1">
													<input type="checkbox" class="custom-control-input" id="rememberMeCheck">
													<label class="custom-control-label" for="rememberMeCheck">Remember Me</label>
												</div>
												<div class="custom-checkbox-1">
													<input id="createAccount" type="checkbox" name="createAccount" value="1">
													<label for="createAccount">Create an account ?</label>
												</div>
												<div class="bg-primary p-3">
													<div class="custom-checkbox-1 checkbox-custom-transparent">
														<input id="createAccount2" type="checkbox" name="createAccount2" value="1">
														<label for="createAccount2" class="text-color-light">Create an account ?</label>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="custom-control custom-radio">
												  	<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
												  	<label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
												</div>
												<div class="custom-control custom-radio">
												  	<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
												  	<label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
												</div>

											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Switches</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<input type="checkbox" name="cookies_consent[]" class="gdpr-input custom-checkbox-switch mb-1" value="youtube">
												<div class="custom-control custom-switch">
												  	<input type="checkbox" class="custom-control-input" id="customSwitch1">
												  	<label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
												</div>
												<div class="custom-control custom-switch">
												  	<input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
												  	<label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsExamplesRange">								
								<h4 class="mb-3">Default</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<input type="range" class="form-control-range mb-3">

												<p class="mb-1">Min and Max:</p>
												<input type="range" min="0" max="3" class="form-control-range mb-3">

												<p class="mb-1">Step (0.5):</p>
												<input type="range" min="0" max="5" step="0.5" class="form-control-range">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsExamplesInputGroup">								
								<h4 class="mb-3">Default</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<span class="input-group-text text-3" id="basic-addon1">@</span>
												  	</div>
												  	<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
												</div>

												<div class="input-group mb-3">
												  	<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
												  	<div class="input-group-append">
												    	<span class="input-group-text text-3" id="basic-addon2">@example.com</span>
												  	</div>
												</div>

												<label for="basic-url">Your vanity URL</label>
												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<span class="input-group-text text-3" id="basic-addon3">https://example.com/users/</span>
												  	</div>
												  	<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
												</div>

												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<span class="input-group-text text-3">$</span>
												  	</div>
												  	<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
												  	<div class="input-group-append">
												    	<span class="input-group-text text-3">.00</span>
												  	</div>
												</div>

												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<span class="input-group-text text-3">With textarea</span>
												  	</div>
												  	<textarea class="form-control" aria-label="With textarea"></textarea>
												</div>

												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<div class="input-group-text">
												      		<input type="checkbox" aria-label="Checkbox for following text input">
												    	</div>
												  	</div>
												  	<input type="text" class="form-control" aria-label="Text input with checkbox">
												</div>

												<div class="input-group">
												  	<div class="input-group-prepend">
												    	<div class="input-group-text">
												      		<input type="radio" aria-label="Radio button for following text input">
												    	</div>
												  	</div>
												  	<input type="text" class="form-control" aria-label="Text input with radio button">
												</div>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Colors</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<span class="input-group-text text-3 bg-primary text-color-light" id="basic-addon1">@</span>
												  	</div>
												  	<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
												</div>

												<div class="input-group mb-3">
												  	<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
												  	<div class="input-group-append">
												    	<span class="input-group-text text-3 bg-primary text-color-light" id="basic-addon2">@example.com</span>
												  	</div>
												</div>

												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<div class="input-group-text bg-primary">
												      		<input type="checkbox" aria-label="Checkbox for following text input">
												    	</div>
												  	</div>
												  	<input type="text" class="form-control" aria-label="Text input with checkbox">
												</div>

												<div class="input-group">
												  	<div class="input-group-prepend">
												    	<div class="input-group-text bg-primary">
												      		<input type="radio" aria-label="Radio button for following text input">
												    	</div>
												  	</div>
												  	<input type="text" class="form-control" aria-label="Text input with radio button">
												</div>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Sizing</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="input-group input-group-sm mb-3">
												  	<div class="input-group-prepend">
												    	<span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
												  	</div>
												  	<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
												</div>

												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<span class="input-group-text" id="inputGroup-sizing-default">Default</span>
												  	</div>
												  	<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
												</div>

												<div class="input-group input-group-lg">
												  	<div class="input-group-prepend">
												    	<span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
												  	</div>
												  	<input type="text" class="form-control h-auto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
												</div>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Multiple</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<span class="input-group-text text-3">First and last name</span>
												  	</div>
												  	<input type="text" aria-label="First name" class="form-control">
												  	<input type="text" aria-label="Last name" class="form-control">
												</div>

												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<span class="input-group-text text-3">$</span>
												    	<span class="input-group-text text-3">0.00</span>
												  	</div>
												  	<input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
												</div>

												<div class="input-group">
												  	<input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
												  	<div class="input-group-append">
												    	<span class="input-group-text text-3">$</span>
												    	<span class="input-group-text text-3">0.00</span>
												 	</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Buttons / Dropdowns</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
												  	</div>
												  	<input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
												</div>

												<div class="input-group mb-3">
												  	<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
												  	<div class="input-group-append">
												    	<button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
												  	</div>
												</div>

												<div class="input-group mb-3">
												  	<div class="input-group-prepend" id="button-addon3">
												    	<button class="btn btn-outline-secondary" type="button">Button</button>
												    	<button class="btn btn-outline-secondary" type="button">Button</button>
												  	</div>
												  	<input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons" aria-describedby="button-addon3">
												</div>

												<div class="input-group mb-3">
												  	<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
												  	<div class="input-group-append" id="button-addon4">
												    	<button class="btn btn-outline-secondary" type="button">Button</button>
												    	<button class="btn btn-outline-secondary" type="button">Button</button>
												  	</div>
												</div>

												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
												    	<div class="dropdown-menu">
												     	 	<a class="dropdown-item" href="#">Action</a>
												      		<a class="dropdown-item" href="#">Another action</a>
												      		<a class="dropdown-item" href="#">Something else here</a>
													      	<div role="separator" class="dropdown-divider"></div>
													      	<a class="dropdown-item" href="#">Separated link</a>
													    </div>
													  </div>
												  	<input type="text" class="form-control" aria-label="Text input with dropdown button">
												</div>

												<div class="input-group mb-3">
												  	<input type="text" class="form-control" aria-label="Text input with dropdown button">
												  	<div class="input-group-append">
												    	<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
												    	<div class="dropdown-menu">
												     		<a class="dropdown-item" href="#">Action</a>
												      		<a class="dropdown-item" href="#">Another action</a>
												      		<a class="dropdown-item" href="#">Something else here</a>
												      		<div role="separator" class="dropdown-divider"></div>
												      		<a class="dropdown-item" href="#">Separated link</a>
												    	</div>
												  	</div>
												</div>

												<div class="input-group mb-3">
												  	<div class="input-group-prepend">
												    	<button type="button" class="btn btn-outline-secondary">Action</button>
												    	<button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												     		<span class="sr-only">Toggle Dropdown</span>
												    	</button>
												    	<div class="dropdown-menu">
												      		<a class="dropdown-item" href="#">Action</a>
												      		<a class="dropdown-item" href="#">Another action</a>
												      		<a class="dropdown-item" href="#">Something else here</a>
												      		<div role="separator" class="dropdown-divider"></div>
												      		<a class="dropdown-item" href="#">Separated link</a>
												    	</div>
												  	</div>
												  	<input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
												</div>

												<div class="input-group">
												  	<input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
												  	<div class="input-group-append">
													    <button type="button" class="btn btn-outline-secondary">Action</button>
													    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												      		<span class="sr-only">Toggle Dropdown</span>
												    	</button>
												    	<div class="dropdown-menu">
												      		<a class="dropdown-item" href="#">Action</a>
												      		<a class="dropdown-item" href="#">Another action</a>
												      		<a class="dropdown-item" href="#">Something else here</a>
												      		<div role="separator" class="dropdown-divider"></div>
												      		<a class="dropdown-item" href="#">Separated link</a>
												    	</div>
												  	</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsExamplesFloatingLabels">								
								<h4 class="mb-3">Default</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<p class="mb-2">Fill the fields below to see the example working</p>
											  	<div class="form-label-group">
											    	<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
											    	<label for="inputEmail">Email address</label>
											  	</div>

											  	<div class="form-label-group">
											    	<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
											    	<label for="inputPassword">Password</label>
											  	</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsExamplesLayout">								
								<h4 class="mb-3">Column Sizing</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form>
												  	<div class="form-row">
												    	<div class="col-7">
												     		<input type="text" class="form-control" placeholder="City">
												    	</div>
												    	<div class="col">
												      		<input type="text" class="form-control" placeholder="State">
												    	</div>
												    	<div class="col">
												      		<input type="text" class="form-control" placeholder="Zip">
												    	</div>
												  	</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Auto Sizing</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form>
												  	<div class="form-row align-items-center">
												    	<div class="col-auto">
												      		<label class="sr-only" for="inlineFormInput">Name</label>
												      		<input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
												    	</div>
												    	<div class="col-auto">
												      		<label class="sr-only" for="inlineFormInputGroup">Username</label>
												      		<div class="input-group mb-2">
												        		<div class="input-group-prepend">
												          			<div class="input-group-text">@</div>
												        		</div>
												        		<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
												      		</div>
												    	</div>
												    	<div class="col-auto">
												      		<div class="form-check mb-2">
												        		<input class="form-check-input" type="checkbox" id="autoSizingCheck">
												        		<label class="form-check-label" for="autoSizingCheck">
												          			Remember me
												        		</label>
												      		</div>
												    	</div>
												    	<div class="col-auto">
												      		<button type="submit" class="btn btn-primary mb-2">Submit</button>
												    	</div>
												  	</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Full Example - Default</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form>
												  	<div class="form-row">
												    	<div class="form-group col-md-6">
												      		<label for="inputEmail4">Email</label>
												      		<input type="email" class="form-control" id="inputEmail4">
												    	</div>
												    	<div class="form-group col-md-6">
												      		<label for="inputPassword4">Password</label>
												      		<input type="password" class="form-control" id="inputPassword4">
												    	</div>
												  	</div>
												  	<div class="form-group">
												    	<label for="inputAddress">Address</label>
												    	<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
												 	</div>
												  	<div class="form-group">
												    	<label for="inputAddress2">Address 2</label>
												    	<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
												  	</div>
												  	<div class="form-row">
												    	<div class="form-group col-md-6">
												      		<label for="inputCity">City</label>
												      		<input type="text" class="form-control" id="inputCity">
												    	</div>
												    	<div class="form-group col-md-4">
												      		<label for="inputState">State</label>
												      		<select id="inputState" class="form-control">
												        		<option selected>Choose...</option>
												        		<option>...</option>
												      		</select>
												    	</div>
												    	<div class="form-group col-md-2">
												      		<label for="inputZip">Zip</label>
												      		<input type="text" class="form-control" id="inputZip">
												    	</div>
												  	</div>
												  	<div class="form-group">
												    	<div class="form-check">
												      		<input class="form-check-input" type="checkbox" id="gridCheck">
												      		<label class="form-check-label" for="gridCheck">
												        		Check me out
												      		</label>
												    	</div>
												  	</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Full Example - Horizontal</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form>
												  	<div class="form-group row">
												    	<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
												    	<div class="col-sm-10">
												      		<input type="email" class="form-control" id="inputEmail3">
												    	</div>
												  	</div>
												  	<div class="form-group row">
												    	<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
												    	<div class="col-sm-10">
												      		<input type="password" class="form-control" id="inputPassword3">
												    	</div>
												  	</div>
												  	<fieldset class="form-group">
												    	<div class="row">
												      		<legend class="col-form-label col-sm-2 pt-0">Radios</legend>
												      		<div class="col-sm-10">
												        		<div class="form-check">
												          			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
											          				<label class="form-check-label" for="gridRadios1">
											            				First radio
											          				</label>
												        		</div>
												        		<div class="form-check">
														          	<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
														          	<label class="form-check-label" for="gridRadios2">
														            	Second radio
														          	</label>
												       			</div>
												        		<div class="form-check disabled">
														          	<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
														          	<label class="form-check-label" for="gridRadios3">
														            	Third disabled radio
														          	</label>
												        		</div>
												      		</div>
												    	</div>
												  	</fieldset>
												  	<div class="form-group row">
												    	<div class="col-sm-2">Checkbox</div>
											    		<div class="col-sm-10">
											      			<div class="form-check">
														        <input class="form-check-input" type="checkbox" id="gridCheck1">
														        <label class="form-check-label" for="gridCheck1">
														          	Example checkbox
														        </label>
											      			</div>
											    		</div>
											  		</div>
												  	<div class="form-group row">
												    	<div class="col-sm-10">
												      		<button type="submit" class="btn btn-primary">Sign in</button>
												    	</div>
												  	</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane tab-pane-navigation" id="formsExamplesValidation">								
								<h4 class="mb-3">Default Browser Validation</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form>
												  	<div class="form-row">
												    	<div class="col-md-6 mb-3">
												      		<label for="validationDefault01">First name</label>
												      		<input type="text" class="form-control" id="validationDefault01" value="Mark" required>
												    	</div>
												    	<div class="col-md-6 mb-3">
												      		<label for="validationDefault02">Last name</label>
												      		<input type="text" class="form-control" id="validationDefault02" value="Otto" required>
												    	</div>
												  	</div>
												  	<div class="form-row">
												    	<div class="col-md-6 mb-3">
												      		<label for="validationDefault03">City</label>
												      		<input type="text" class="form-control" id="validationDefault03" required>
												    	</div>
												    	<div class="col-md-3 mb-3">
												      		<label for="validationDefault04">State</label>
												      		<select class="custom-select" id="validationDefault04" required>
												        		<option selected disabled value="">Choose...</option>
												        		<option>...</option>
												      		</select>
												    	</div>
												    	<div class="col-md-3 mb-3">
												      		<label for="validationDefault05">Zip</label>
												      		<input type="text" class="form-control" id="validationDefault05" required>
												    	</div>
												  	</div>
												  	<div class="form-group">
												    	<div class="form-check">
												      		<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
												      		<label class="form-check-label" for="invalidCheck2">
												        		Agree to terms and conditions
												      		</label>
												    	</div>
												  	</div>
												  	<button class="btn btn-primary" type="submit">Submit form</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Bootstrap Validation</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="needs-validation" novalidate>
												  	<div class="form-row">
												    	<div class="col-md-6 mb-3">
												      		<label for="validationCustom01">First name</label>
												      		<input type="text" class="form-control" id="validationCustom01" value="Mark" required>
												      		<div class="valid-feedback">
												        		Looks good!
												      		</div>
												    	</div>
												   		<div class="col-md-6 mb-3">
												      		<label for="validationCustom02">Last name</label>
												      		<input type="text" class="form-control" id="validationCustom02" value="Otto" required>
												      		<div class="valid-feedback">
												        		Looks good!
												      		</div>
												    	</div>
												  	</div>
												  	<div class="form-row">
												    	<div class="col-md-6 mb-3">
												      		<label for="validationCustom03">City</label>
												      		<input type="text" class="form-control" id="validationCustom03" required>
													      	<div class="invalid-feedback">
													        	Please provide a valid city.
													      	</div>
											    		</div>
												    	<div class="col-md-3 mb-3">
												      		<label for="validationCustom04">State</label>
												      		<select class="custom-select" id="validationCustom04" required>
												        		<option selected disabled value="">Choose...</option>
												        		<option>...</option>
												      		</select>
												      		<div class="invalid-feedback">
												        		Please select a valid state.
												      		</div>
												    	</div>
												    	<div class="col-md-3 mb-3">
												      		<label for="validationCustom05">Zip</label>
												      		<input type="text" class="form-control" id="validationCustom05" required>
												      		<div class="invalid-feedback">
												        		Please provide a valid zip.
												      		</div>
												    	</div>
												  	</div>
												  	<div class="form-group">
												    	<div class="form-check">
												      		<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
												      		<label class="form-check-label" for="invalidCheck">
												        		Agree to terms and conditions
												      		</label>
												      		<div class="invalid-feedback">
												        		You must agree before submitting.
												      		</div>
												   		</div>
												  	</div>
												  	<button class="btn btn-primary" type="submit">Submit form</button>
												</form>

												<script>
												// Example starter JavaScript for disabling form submissions if there are invalid fields
												(function() {
												  	'use strict';
												  	window.addEventListener('load', function() {
													    // Fetch all the forms we want to apply custom Bootstrap validation styles to
													    var forms = document.getElementsByClassName('needs-validation');
													    // Loop over them and prevent submission
													    var validation = Array.prototype.filter.call(forms, function(form) {
													      	form.addEventListener('submit', function(event) {
													        	if (form.checkValidity() === false) {
													          		event.preventDefault();
													          		event.stopPropagation();
													        	}
													        	form.classList.add('was-validated');
													      	}, false);
													    });
												  	}, false);
												})();
												</script>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">Bootstrap Validation - Tooltips</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
											  	<form class="needs-validation" novalidate>
												  	<div class="form-row">
												    	<div class="col-md-6 mb-3">
												      		<label for="validationTooltip01">First name</label>
													      	<input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
													      	<div class="valid-tooltip">
													        	Looks good!
													      	</div>
												    	</div>
												    	<div class="col-md-6 mb-3">
												      		<label for="validationTooltip02">Last name</label>
												      		<input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
												      		<div class="valid-tooltip">
												        		Looks good!
												      		</div>
												    	</div>
												  	</div>
												  	<div class="form-row">
												    	<div class="col-md-6 mb-3">
												      		<label for="validationTooltip03">City</label>
												      		<input type="text" class="form-control" id="validationTooltip03" required>
												      		<div class="invalid-tooltip">
												        		Please provide a valid city.
												      		</div>
												    	</div>
												    	<div class="col-md-3 mb-3">
												      		<label for="validationTooltip04">State</label>
												      		<select class="custom-select" id="validationTooltip04" required>
												        		<option selected disabled value="">Choose...</option>
												        		<option>...</option>
												      		</select>
												      		<div class="invalid-tooltip">
												        		Please select a valid state.
												      		</div>
												    	</div>
												    	<div class="col-md-3 mb-3">
												      		<label for="validationTooltip05">Zip</label>
												      		<input type="text" class="form-control" id="validationTooltip05" required>
												      		<div class="invalid-tooltip">
												        		Please provide a valid zip.
												      		</div>
											    		</div>
											  		</div>
												  	<button class="btn btn-primary" type="submit">Submit form</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-3">jQuery Validation</h4>
								<div class="card mb-4">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<p class="mb-2">Must include the following scripts on the page:</p>
											  	<pre class="mb-2">
							&lt;script src="vendor/jquery.validation/jquery.validate.min.js"&gt;&lt;/script&gt;
							&lt;script src="js/views/view.contact.js"&gt;&lt;/script&gt;</pre>
												<hr>
											  	<form class="contact-form">
												  	<div class="form-row">
												    	<div class="form-group col-md-6 mb-3">
												      		<label>First name</label>
													      	<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
												    	</div>
												    	<div class="form-group col-md-6 mb-3">
												      		<label>Last name</label>
												      		<input type="text" value="" data-msg-required="Please enter your last name." maxlength="100" class="form-control text-3 h-auto py-2" name="lastname" required>
												    	</div>
												  	</div>
												  	<div class="form-row">
												    	<div class="form-group col-md-6 mb-3">
												      		<label>City</label>
												      		<input type="text" value="" data-msg-required="Please provide a validy city." maxlength="100" class="form-control text-3 h-auto py-2" name="city" required>
												    	</div>
												    	<div class="form-group col-md-3 mb-3">
												      		<label>State</label>
												      		<select class="custom-select" data-msg-required="Please select a state." name="state" required>
												        		<option value="">Choose...</option>
												        		<option value="1">1</option>
												        		<option value="2">2</option>
												        		<option value="3">3</option>
												      		</select>
												    	</div>
												    	<div class="form-group col-md-3 mb-3">
												      		<label>Zip</label>
												      		<input type="text" value="" data-msg-required="Please provide a validy zip." maxlength="100" class="form-control text-3 h-auto py-2" name="zip" required>
											    		</div>
											  		</div>
											  		<div class="form-row">
												  		<div class="form-group col">
													    	<div class="form-check">
													      		<input class="form-check-input" type="checkbox" value="" name="agree" id="invalidCheck3" data-msg-required="You must agree before submiting." required>
													      		<label class="form-check-label" for="invalidCheck3">
													        		Agree to terms and conditions
													      		</label>
													   		</div>
													  	</div>
											  		</div>
												  	<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
												</form>
											</div>
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
							<div class="porto.partials
								<h2 class="font-weight-bold mb-0">Porto Elements</h2>
								<p class="lead text-4 pt-2 font-weight-normal">Porto comes with several elements options, it's easy to customize<br> and create the content of your website's pages.</p>
							</div>
						</div>
						<div class="rporto.partialsenter">

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-26', ['key' => 'featured-box.featured-box-26'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-27', ['key' => 'featured-box.featured-box-27'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-28', ['key' => 'featured-box.featured-box-28'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-29', ['key' => 'featured-box.featured-box-29'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-30', ['key' => 'featured-box.featured-box-30'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-31', ['key' => 'featured-box.featured-box-31'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-32', ['key' => 'featured-box.featured-box-32'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-33', ['key' => 'featured-box.featured-box-33'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-34', ['key' => 'featured-box.featured-box-34'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-35', ['key' => 'featured-box.featured-box-35'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-36', ['key' => 'featured-box.featured-box-36'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-37', ['key' => 'featured-box.featured-box-37'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-38', ['key' => 'featured-box.featured-box-38'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-39', ['key' => 'featured-box.featured-box-39'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-40', ['key' => 'featured-box.featured-box-40'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-41', ['key' => 'featured-box.featured-box-41'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-42', ['key' => 'featured-box.featured-box-42'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-43', ['key' => 'featured-box.featured-box-43'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-44', ['key' => 'featured-box.featured-box-44'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-45', ['key' => 'featured-box.featured-box-45'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-46', ['key' => 'featured-box.featured-box-46'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-47', ['key' => 'featured-box.featured-box-47'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-48', ['key' => 'featured-box.featured-box-48'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-49', ['key' => 'featured-box.featured-box-49'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-50', ['key' => 'featured-box.featured-box-50'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-51', ['key' => 'featured-box.featured-box-51'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-52', ['key' => 'featured-box.featured-box-52'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-53', ['key' => 'featured-box.featured-box-53'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-54', ['key' => 'featured-box.featured-box-54'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-55', ['key' => 'featured-box.featured-box-55'])
								</div>
							</div>porto.partials

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-56', ['key' => 'featured-box.featured-box-56'])
								</div>porto.partials
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-57', ['key' => 'featured-box.featured-box-57'])
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class=porto.partialsured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-58', ['key' => 'featured-box.featured-box-58'])
								</div>
							</div>

							<div class="porto.partialsg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-59', ['key' => 'featured-box.featured-box-59'])
								</div>
							</div>
porto.partials
							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									@include('porto.partials.featured-box.featured-box-60', ['key' => 'featured-box.featured-box-60'])
								</div>
							</div>porto.partials

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
