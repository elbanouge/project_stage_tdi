@extends('porto.app')
@section('header')
@include('porto.partials.header.header-196')
@endsection

@section('mainporto.partials
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-208')
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="alert alert-info alert-admin">
								<div class="row">
									<div class="col-lg-8">
										<h4>Admin Extension</h4>
										<p><strong class="warning"><i class="fas fa-exclamation-triangle"></i> Warning!</strong> This page is part of the admin extension and is <strong>NOT</strong> included on Porto - Responsive HTML5 Template, to get all features, purchase both templates: <a target="_blank" href="http://www.themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">Porto ($16)</a> + <a target="_blank" href="http://www.themeforest.net/item/porto-admin-responsive-html5-template/8539472?ref=Okler">Porto Admin ($16)</a>: <strong>$32 Total.</strong></p>
										<p>
											<a class="btn btn-lg btn-sm btn-primary" target="_blank" href="http://www.themeforest.net/item/porto-admin-responsive-html5-template/8539472?ref=Okler">View Porto Admin!</a>
										</p>
									</div>
									<div class="col-lg-4 visible-md visible-lg">
										<img class="appear-animation float-right" src="img/admin-banner.png" data-appear-animation="fadeIn">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin form-wizard" id="w1">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Form Wizard</h2>
								</header>
								<div class="card-body card-body-nopadding">
									<div class="wizard-tabs">
										<ul class="nav wizard-steps">
											<li class="nav-item active">
												<a href="#w1-account" data-toggle="tab" class="nav-link text-center">
													<span class="badge">1</span>
													Account
												</a>
											</li>
											<li class="nav-item">
												<a href="#w1-profile" data-toggle="tab" class="nav-link text-center">
													<span class="badge">2</span>
													Profile
												</a>
											</li>
											<li class="nav-item">
												<a href="#w1-confirm" data-toggle="tab" class="nav-link text-center">
													<span class="badge">3</span>
													Confirm
												</a>
											</li>
										</ul>
									</div>
									<form class="form-horizontal" novalidate="novalidate">
										<div class="tab-content">
											<div id="w1-account" class="tab-pane p-3 active">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w1-username">Username</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="username" id="w1-username" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w1-password">Password</label>
													<div class="col-sm-8">
														<input type="password" class="form-control" name="password" id="w1-password" minlength="6" required>
													</div>
												</div>
											</div>
											<div id="w1-profile" class="tab-pane p-3">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w1-first-name">First Name</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="first-name" id="w1-first-name" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w1-last-name">Last Name</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="last-name" id="w1-last-name" required>
													</div>
												</div>
											</div>
											<div id="w1-confirm" class="tab-pane p-3">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w1-email">Email</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="email" id="w1-email" required>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-2"></div>
													<div class="col-sm-10">
														<div class="checkbox-custom">
															<input type="checkbox" name="terms" id="w1-terms" required>
															<label for="w1-terms">I agree to the terms of service</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="card-footer">
									<ul class="pager">
										<li class="previous disabled">
											<a><i class="fas fa-angle-left"></i> Previous</a>
										</li>
										<li class="finish hidden float-right">
											<a>Finish</a>
										</li>
										<li class="next">
											<a>Next <i class="fas fa-angle-right"></i></a>
										</li>
									</ul>
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin form-wizard" id="w2">
								@include('porto.partials.tabs.tabs-26')
								<div class="card-footer">
									<ul class="pager">
										<li class="previous disabled">
											<a><i class="fas fa-angle-left"></i> Previous</a>
										</li>
										<li class="finish hidden float-right">
											<a>Finish</a>
										</li>
										<li class="next">
											<a>Next <i class="fas fa-angle-right"></i></a>
										</li>
									</ul>
								</div>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<section class="card card-admin form-wizard" id="w4">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Form Wizard</h2>
								</header>
								<div class="card-body">
									<div class="wizard-progress wizard-progress-lg">
										<div class="steps-progress">
											<div class="progress-indicator"></div>
										</div>
										<ul class="nav wizard-steps">
											<li class="nav-item active">
												<a class="nav-link" href="#w4-account" data-toggle="tab"><span>1</span>Account Info</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#w4-profile" data-toggle="tab"><span>2</span>Profile Info</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#w4-billing" data-toggle="tab"><span>3</span>Billing Info</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#w4-confirm" data-toggle="tab"><span>4</span>Confirmation</a>
											</li>
										</ul>
									</div>

									<form class="form-horizontal p-3" novalidate="novalidate">
										<div class="tab-content">
											<div id="w4-account" class="tab-pane active">
												<div class="form-group row">
													<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-username">Username</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="username" id="w4-username" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-password">Password</label>
													<div class="col-sm-9">
														<input type="password" class="form-control" name="password" id="w4-password" required minlength="6">
													</div>
												</div>
											</div>
											<div id="w4-profile" class="tab-pane">
												<div class="form-group row">
													<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-first-name">First Name</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="first-name" id="w4-first-name" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Last Name</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="last-name" id="w4-last-name" required>
													</div>
												</div>
											</div>
											<div id="w4-billing" class="tab-pane">
												<div class="form-group row">
													<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-cc">Card Number</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="cc-number" id="w4-cc" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 control-label text-sm-right pt-1" for="inputSuccess">Expiration</label>
													<div class="col-sm-5">
														<select class="form-control" name="exp-month" required>
															<option>January</option>
															<option>February</option>
															<option>March</option>
															<option>April</option>
															<option>May</option>
															<option>June</option>
															<option>July</option>
															<option>August</option>
															<option>September</option>
															<option>October</option>
															<option>November</option>
															<option>December</option>
														</select>
													</div>
													<div class="col-sm-4">
														<select class="form-control" name="exp-year" required>
															<option>2014</option>
															<option>2015</option>
															<option>2017</option>
															<option>2017</option>
															<option>2018</option>
															<option>2019</option>
															<option>2020</option>
															<option>2021</option>
															<option>2022</option>
														</select>
													</div>
												</div>
											</div>
											<div id="w4-confirm" class="tab-pane">
												<div class="form-group row">
													<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-email">Email</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="email" id="w4-email" required>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-3"></div>
													<div class="col-sm-9">
														<div class="checkbox-custom">
															<input type="checkbox" name="terms" id="w4-terms" required>
															<label for="w4-terms">I agree to the terms of service</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="card-footer">
									<ul class="pager">
										<li class="previous disabled">
											<a><i class="fas fa-angle-left"></i> Previous</a>
										</li>
										<li class="finish hidden float-right">
											<a>Finish</a>
										</li>
										<li class="next">
											<a>Next <i class="fas fa-angle-right"></i></a>
										</li>
									</ul>
								</div>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<section class="card card-admin form-wizard" id="w3">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Form Wizard</h2>
								</header>
								<div class="card-body">
									<div class="wizard-progress">
										<div class="steps-progress">
											<div class="progress-indicator"></div>
										</div>
										<ul class="nav">
											<li class="nav-item active">
												<a class="nav-link" href="#w3-account" data-toggle="tab"><span>1</span>Account Info</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#w3-profile" data-toggle="tab"><span>2</span>Profile Info</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#w3-billing" data-toggle="tab"><span>3</span>Billing Info</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#w3-confirm" data-toggle="tab"><span>4</span>Confirmation</a>
											</li>
										</ul>
									</div>
									<form class="form-horizontal p-3" novalidate="novalidate">
										<div class="tab-content">
											<div id="w3-account" class="tab-pane active">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-username">Username</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="username" id="w3-username" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-password">Password</label>
													<div class="col-sm-8">
														<input type="password" class="form-control" name="password" id="w3-password" minlength="6" required>
													</div>
												</div>
											</div>
											<div id="w3-profile" class="tab-pane">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-first-name">First Name</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="first-name" id="w3-first-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-last-name">Last Name</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="last-name" id="w3-last-name">
													</div>
												</div>
											</div>
											<div id="w3-billing" class="tab-pane">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-cc">Card Number</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="cc-number" id="w3-cc" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="inputSuccess">Expiration</label>
													<div class="col-sm-4">
														<select class="form-control" name="exp-month" required>
															<option>January</option>
															<option>February</option>
															<option>March</option>
															<option>April</option>
															<option>May</option>
															<option>June</option>
															<option>July</option>
															<option>August</option>
															<option>September</option>
															<option>October</option>
															<option>November</option>
															<option>December</option>
														</select>
													</div>
													<div class="col-sm-4">
														<select class="form-control" name="exp-year" required>
															<option>2014</option>
															<option>2015</option>
															<option>2017</option>
															<option>2017</option>
															<option>2018</option>
															<option>2019</option>
															<option>2020</option>
															<option>2021</option>
															<option>2022</option>
														</select>
													</div>
												</div>
											</div>
											<div id="w3-confirm" class="tab-pane">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-email">Email</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="email" id="w3-email" required>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-3"></div>
													<div class="col-sm-9">
														<div class="checkbox-custom">
															<input type="checkbox" name="terms" id="w3-terms" required>
															<label for="w3-terms">I agree to the terms of service</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="card-footer">
									<ul class="pager">
										<li class="previous disabled">
											<a><i class="fas fa-angle-left"></i> Previous</a>
										</li>
										<li class="finish hidden float-right">
											<a>Finish</a>
										</li>
										<li class="next">
											<a>Next <i class="fas fa-angle-right"></i></a>
										</li>
									</ul>
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card card-admin form-wizard" id="w5">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Form Wizard</h2>
								</header>
								<div class="card-body">
									<div class="wizard-tabs" style="visibility: hidden; position: absolute;">
										<ul class="nav wizard-steps">
											<li class="nav-item active">
												<a class="nav-link" href="#w5-account" data-toggle="tab"><span class="badge">1</span>Account Info</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#w5-profile" data-toggle="tab"><span class="badge">2</span>Profile Info</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#w5-billing" data-toggle="tab"><span class="badge">3</span>Billing Info</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#w5-confirm" data-toggle="tab"><span class="badge">4</span>Confirmation</a>
											</li>
										</ul>
									</div>
									@include('porto.partials.progress.progress-64')
									<form class="form-horizontal p-3" novalidate="novalidate">
										<div class="tab-content">
											<div id="w5-account" class="tab-pane active">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w5-username">Username</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="username" id="w5-username" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w5-password">Password</label>
													<div class="col-sm-8">
														<input type="password" class="form-control" name="password" id="w5-password" minlength="2" required>
													</div>
												</div>
											</div>
											<div id="w5-profile" class="tab-pane">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w5-first-name">First Name</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="first-name" id="w5-first-name" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w5-last-name">Last Name</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="last-name" id="w5-last-name" required>
													</div>
												</div>
											</div>
											<div id="w5-billing" class="tab-pane">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w5-cc">Card Number</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="cc-number" id="w5-cc" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="inputSuccess">Expiration</label>
													<div class="col-sm-4">
														<select class="form-control" name="exp-month" required>
															<option>January</option>
															<option>February</option>
															<option>March</option>
															<option>April</option>
															<option>May</option>
															<option>June</option>
															<option>July</option>
															<option>August</option>
															<option>September</option>
															<option>October</option>
															<option>November</option>
															<option>December</option>
														</select>
													</div>
													<div class="col-sm-4">
														<select class="form-control" name="exp-year" required>
															<option>2014</option>
															<option>2015</option>
															<option>2017</option>
															<option>2017</option>
															<option>2018</option>
															<option>2019</option>
															<option>2020</option>
															<option>2021</option>
															<option>2022</option>
														</select>
													</div>
												</div>
											</div>
											<div id="w5-confirm" class="tab-pane">
												<div class="form-group row">
													<label class="col-sm-4 control-label text-sm-right pt-1" for="w5-email">Email</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="email" id="w5-email" required>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-3"></div>
													<div class="col-sm-9">
														<div class="checkbox-custom">
															<input type="checkbox" name="terms" id="w5-terms" required>
															<label for="w5-terms">I agree to the terms of service</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="card-footer">
									<ul class="pager">
										<li class="previous disabled">
											<a><i class="fas fa-angle-left"></i> Previous</a>
										</li>
										<li class="finish hidden float-right">
											<a>Finish</a>
										</li>
										<li class="next">
											<a>Next <i class="fas fa-angle-right"></i></a>
										</li>
									</ul>
								</div>
							</section>
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
