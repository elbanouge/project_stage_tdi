@extends('porto.app')
@section('header')
@include('porto.partials.header.header-126')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.owl-carousel.owl-carousel-75')

				<section class="section bg-color-light border-0 my-0">
					<div class="container">
						<div class="row appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1600">
							<div class="col">
								@include('porto.partials.owl-carousel.owl-carousel-76')
							</div>
						</div>
					</div>
				</section>
				<hr class="solid mt-0">
				<section class="section bg-color-light custom-padding-1 border-0 my-0">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
								@include('porto.partials.feature-box.feature-box-76')
							</div>
							<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
								@include('porto.partials.feature-box.feature-box-77')
							</div>
							<div class="col-md-6 col-lg-3 mb-5 mb-md-0">
								@include('porto.partials.feature-box.feature-box-78')
							</div>
							<div class="col-md-6 col-lg-3">
								@include('porto.partials.feature-box.feature-box-79')
							</div>
						</div>
						<div class="row mt-5">
							<div class="col text-center">
								<a href="demo-insurance-insurances.html" class="btn btn-outline btn-secondary font-weight-bold custom-btn-style-1 text-2">VIEW ALL</a>
							</div>
						</div>
					</div>
				</section>
				<section class="parallax section section-parallax custom-padding-3 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%'}" data-image-src="img/demos/insurance/parallax/parallax-1.jpg">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-md-9 col-lg-7 col-xl-6">
								<div class="card bg-color-light border-0 appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="card-body p-5">
										<h2 class="custom-primary-font font-weight-normal text-6 mb-3">FIND AN AGENT</h2>
										<p class="pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt neque at vestibulum volutpat. Phasellus facilisis.</p>
										<form action="" method="get">
											<div class="form-row">
												<div class="form-group col-md-6 pr-md-0">
													<div class="custom-select-1 custom-select-1-icon-position">
														<select class="form-control custom-left-rounded-form-control" required>
															<option value="0">INSURANCE</option>
															<option value="1">HOUSE INSURANCE</option>
															<option value="2">LIFE INSURANCE</option>
															<option value="3">TRAVEL INSURANCE</option>
															<option value="4">VEHICLE INSURANCE</option>
														</select>
													</div>
												</div>
												<div class="form-group col-md-6 pl-md-0">
													<input type="text" class="form-control custom-right-rounded-form-control" name="zip" value="" placeholder="ZIP CODE" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col mb-0">
													<input type="submit" value="FIND YOUR NEAREST AGENT" class="btn btn-secondary custom-btn-style-1 py-3 text-4 w-100">
												</div>
											</div>
										</form>
									</div>
									<div class="card-footer bg-color-primary border-0 custom-padding-2">
										<div class="row">
											<div class="col-md-6 mb-5 mb-md-0">
												@include('porto.partials.feature-box.feature-box-80')
											</div>
											<div class="col-md-6">
												@include('porto.partials.feature-box.feature-box-81')
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section bg-color-quaternary custom-padding-3 border-0 my-0">
					<div class="container">
						<div class="row mb-3">
							<div class="col">
								
								<h2 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal appear-animation" data-appear-animation="fadeInUpShorter">COMPANY HISTORY</h2>
								<div class="row align-items-center">
									<div class="col-lg-2 mb-4 mb-lg-0">
										@include('porto.partials.tabs.tabs-4')
									</div>
									<div class="col-lg-10">
										<div class="tab-pane tab-pane-navigation custom-tab-pane-navigation-1 active" id="tabsNavigation1">
											<div class="row align-items-center">
												<div class="col-lg-6 col-xl-5 mb-4 mb-lg-0">
													<img src="img/demos/insurance/history/history-1.jpg" class="img-fluid appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" alt="">
												</div>
												<div class="col-lg-6 col-xl-7 pl-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
													<h3 class="font-weight-semibold text-transform-none custom-fontsize-2">Lorem ipsum dolor sit amet, Vivamus enim dui, vestibulum at tortor.</h3>
													<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porttitor velit ut sem consectetur rhoncus. Nulla eu elementum magna. Donec diam neque, condimentum a massa ut, luctus molestie risus. Donec lobortis mauris ac faucibus ullamcorper. Sed imperdiet, ipsum sed efficitur volutpat, turpis risus ipsum, at faucibus est mauris ut.</p>
												</div>
											</div>
										</div>
										<div class="tab-pane tab-pane-navigation" id="tabsNavigation2">
											<div class="row align-items-center">
												<div class="col-lg-6 col-xl-5 mb-4 mb-lg-0">
													<img src="img/demos/insurance/history/history-2.jpg" class="img-fluid" alt="">
												</div>
												<div class="col-lg-6 col-xl-7 pl-lg-5">
													<h3 class="font-weight-semibold text-transform-none custom-fontsize-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus enim dui, vestibulum at tortor.</h3>
													<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porttitor velit ut sem honcus. Nulla eu elementum magna. Donec diam neque, condimentum a massa ut, luctus molestie risus. Donec lobortis mauris ac faucibus ullamcorper. Sed imperdiet, ipsum sed efficitur volutpat, turpis risus convallis ipsum, at faucibus est mauris ut.</p>
												</div>
											</div>
										</div>
										<div class="tab-pane tab-pane-navigation" id="tabsNavigation3">
											<div class="row align-items-center">
												<div class="col-lg-6 col-xl-5 mb-4 mb-lg-0">
													<img src="img/demos/insurance/history/history-3.jpg" class="img-fluid" alt="">
												</div>
												<div class="col-lg-6 col-xl-7 pl-lg-5">
													<h3 class="font-weight-semibold text-transform-none custom-fontsize-2">Lorem consectetur adipiscing elit. Vivamus enim dui, vestibulum at tortor.</h3>
													<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porttitor t sem consectetur rhoncus. Nulla eu elementum magna. Donec diam neque, condimentum a massa ut, luctus molestie risus. Donec lobortis mauris ac faucibus ullamcorper. Sed imperdiet, ipsum sed efficitur volutpat, turpis risus convallis ipsum, at faucibus est mauris ut.</p>
												</div>
											</div>
										</div>
										<div class="tab-pane tab-pane-navigation" id="tabsNavigation4">
											<div class="row align-items-center">
												<div class="col-lg-6 col-xl-5 mb-4 mb-lg-0">
													<img src="img/demos/insurance/history/history-4.jpg" class="img-fluid" alt="">
												</div>
												<div class="col-lg-6 col-xl-7 pl-lg-5">
													<h3 class="font-weight-semibold text-transform-none custom-fontsize-2">Lorem ipsum dolor sit amet, consectetur elit. Vivamus enim dui, vestibulum at tortor.</h3>
													<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porttitor velit ut sem . Nulla eu elementum magna. Donec diam neque, condimentum a massa ut, luctus molestie risus. Donec lobortis mauris ac faucibus ullamcorper. Sed imperdiet, ipsum sed efficitur volutpat, turpis risus convallis ipsum, at faucibus est mauris ut.</p>
												</div>
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</section>
				<section class="section bg-color-light custom-padding-3 border-0 my-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal mb-5 appear-animation" data-appear-animation="fadeInUpShorter">TESTIMONIALS</h2>
								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" fadeinupshorter>
									@include('porto.partials.owl-carousel.owl-carousel-77')
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section bg-color-quaternary custom-padding-3 border-0 my-0">
					<div class="container">
						<div class="row mb-4">
							<div class="col">
								<h2 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal mb-0 appear-animation" data-appear-animation="fadeInUpShorter">LATEST NEWS</h2>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
								@include('porto.partials.thumb-info.thumb-info-180')
							</div>
							<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
								@include('porto.partials.thumb-info.thumb-info-181')
							</div>
							<div class="col-md-6 col-lg-4">
								@include('porto.partials.thumb-info.thumb-info-182')
							</div>
						</div>
						<div class="row text-center mt-5">
							<div class="col">
								<a href="#" class="btn btn-outline btn-secondary font-weight-bold custom-btn-style-1 text-2">VIEW ALL</a>
							</div>
						</div>
					</div>
				</section>
				<section class="section bg-color-light custom-padding-3 border-0 my-0">
					<div class="container">
						<div class="row counters pb-2 mb-5">
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								@include('porto.partials.counter.counter-47')
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								@include('porto.partials.counter.counter-48')
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
								@include('porto.partials.counter.counter-49')
							</div>
							<div class="col-sm-6 col-lg-3">
								@include('porto.partials.counter.counter-50')
							</div>
						</div>
						<div class="row text-center">
							<div class="col">
								<a href="#" class="btn btn-secondary font-weight-semibold custom-btn-style-1 text-4 py-3 px-5">CHOOSE YOUR INSURANCE TODAY</a>
							</div>
						</div>
					</div>
				</section>

			<footer id="footer" class="footer-reveal custom-bg-color-1 footer-reveal border-top-0 m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-lg-5">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">ABOUT US</h2>
							<p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer libero leo, convallis pharetra consectetur sed, posuere sed sapien. Nam tincidunt lacus vitae mattis malesuada. Integer lacinia quam mi, id condimentum ipsum commodo a. Nulla ullamcorper.</p>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">INSURANCE</h2>
							<ul class="list list-unstyled">
								<li><a href="#" class="text-decoration-none">Auto Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Life Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Business Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Travel Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Home Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Others</a></li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">QUICK LINKS</h2>
							<ul class="list list-unstyled">
								<li>
									<a href="demo-insurance.html">
										Home
									</a>
								</li>
								<li>
									<a href="demo-insurance-about-us.html">
										About Us
									</a>
								</li>
								<li>
									<a href="demo-insurance-insurances.html">
										Insurances
									</a>
								</li>
								<li>
									<a href="demo-insurance-agents.html">
										Agents
									</a>
								</li>
								<li>
									<a href="demo-insurance-blog.html">
										Blog
									</a>
								</li>
								<li>
									<a href="demo-insurance-contact.html">
										Contact
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-3">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">CONTACT US</h2>
							<p>Porto Insurance 123<br> Porto Blvd, Suite</p>
							<span class="d-block text-color-light custom-fontsize-5 mb-2">Call: <a href="tel:+1234567890" class="text-decoration-none text-color-light custom-fontsize-5">123-456-7890</a></span>
							<span class="d-block text-color-light custom-fontsize-5">Email: <a href="mailto:you@domain.com" class="text-decoration-none text-color-light custom-fontsize-5">info@porto.com</a></span>
							@include('porto.partials.header-social-icons.header-social-icons-10')
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-19', ['key' => 'footer-copyright.footer-copyright-19'])
			</footer>
		</div>
@endsection

@section('footer')
<footer id="footer" class="footer-reveal custom-bg-color-1 footer-reveal border-top-0 m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-lg-5">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">ABOUT US</h2>
							<p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer libero leo, convallis pharetra consectetur sed, posuere sed sapien. Nam tincidunt lacus vitae mattis malesuada. Integer lacinia quam mi, id condimentum ipsum commodo a. Nulla ullamcorper.</p>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">INSURANCE</h2>
							<ul class="list list-unstyled">
								<li><a href="#" class="text-decoration-none">Auto Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Life Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Business Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Travel Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Home Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Others</a></li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">QUICK LINKS</h2>
							<ul class="list list-unstyled">
								<li>
									<a href="demo-insurance.html">
										Home
									</a>
								</li>
								<li>
									<a href="demo-insurance-about-us.html">
										About Us
									</a>
								</li>
								<li>
									<a href="demo-insurance-insurances.html">
										Insurances
									</a>
								</li>
								<li>
									<a href="demo-insurance-agents.html">
										Agents
									</a>
								</li>
								<li>
									<a href="demo-insurance-blog.html">
										Blog
									</a>
								</li>
								<li>
									<a href="demo-insurance-contact.html">
										Contact
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-3">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">CONTACT US</h2>
							<p>Porto Insurance 123<br> Porto Blvd, Suite</p>
							<span class="d-block text-color-light custom-fontsize-5 mb-2">Call: <a href="tel:+1234567890" class="text-decoration-none text-color-light custom-fontsize-5">123-456-7890</a></span>
							<span class="d-block text-color-light custom-fontsize-5">Email: <a href="mailto:you@domain.com" class="text-decoration-none text-color-light custom-fontsize-5">info@porto.com</a></span>
							@include('porto.partials.header-social-icons.header-social-icons-10')
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-19', ['key' => 'footer-copyright.footer-copyright-19'])
			</footer>
@endsection
