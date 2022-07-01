@extends('porto.app')
@section('header')
@include('porto.partials.header.header-399')
@endsection

@section('main')
<div role="main" class="main shop pt-4">

				<div class="container">

					<div class="row">
						<div class="col-lg-9">

							<div class="masonry-loader masonry-loader-showing">
								<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
									

									<div class="col-sm-6 col-lg-4">
										@include('porto.partials.product.product-20')
									</div>

									<div class="col-sm-6 col-lg-4">
										@include('porto.partials.product.product-21')
									</div>

									<div class="col-sm-6 col-lg-4">
										@include('porto.partials.product.product-22')
									</div>

									<div class="col-sm-6 col-lg-4">
										@include('porto.partials.product.product-23')
									</div>

									<div class="col-sm-6 col-lg-4">
										@include('porto.partials.product.product-24')
									</div>

									<div class="col-sm-6 col-lg-4">
										@include('porto.partials.product.product-25')
									</div>

									<div class="col-sm-6 col-lg-4">
										@include('porto.partials.product.product-26')
									</div>

									<div class="col-sm-6 col-lg-4">
										<div class="product mb-0">
											<div class="product-thumb-info border-0 mb-3">

												<div class="addtocart-btn-wrapper">
													<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
														<i class="icons icon-bag"></i>
													</a>
												</div>

												<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
													QUICK VIEW
												</a>
												<a href="shop-product-sidebar-left.html">
													<div class="product-thumb-info-image">
														<img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">

													</div>
												</a>
											</div>
											<div class="d-flex justify-content-between">
												<div>
													<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
													<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Adventurer Bag</a></h3>
												</div>
												<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
											</div>
											<div title="Rated 5 out of 5">
												<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
											</div>
											<p class=porto.partials
												<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
												<span class="amount">$79,00</span>
											</p>
										</div>
									</div>
porto.partials
									<div class="col-sm-6 col-lg-4">
										<div class="product mb-0">
											<div class="product-thumb-info border-0 mb-3">

												<div class="addtocart-btn-wrapper">
													<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
														<i class="icons icon-bag"></i>
													</a>
												</div>

												<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
													QUICK VIEW
												</a>
												<a href="shop-product-sidebar-left.html">
													<div class="product-thumb-info-image">
														<img alt="" class="img-fluid" src="img/products/product-grey-9.jpg">

													</div>
												</a>
											</div>
											<div class="d-flex justify-content-between">
												<div>
													<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
													<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Baseball Ball</a></h3>
												</div>
												<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
											</div>
											<div title="Rated 5 out of 5">
												<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
											</div>
											<p class="price text-5 mb-3">
												<span class="sale text-color-dark font-weight-semi-bold">$399,00</span>
												<span class="amount">$299,00</span>
											</p>
										</div>
									</div>


								</div>
								<div class="row mt-4">
									<div class="col">
										@include('porto.partials.pagination.pagination')
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							@include('porto.partials.sidebar.sidebar-66')
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
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">CUSTOMER SERVICE</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="contact-us-1.html">Help &amp; FAQs</a></li>
								<li class="mb-0"><a href="services.html">Order Tracking</a></li>
								<li class="mb-0"><a href="#">Shipping &amp; Delivery</a></li>
								<li class="mb-0"><a href="#">Orders History</a></li>
								<li class="mb-0"><a href="#">Advanced Search</a></li>
								<li class="mb-0"><a href="#">Login</a></li>
								<li class="mb-0"><a href="about-us-1.html">Careers</a></li>
								<li class="mb-0"><a href="#">About Us</a></li>
								<li class="mb-0"><a href="#">Corporate Sales</a></li>
							</ul>porto.partials
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-md-0">
							<h5 class="text-4 text-color-light mb-3">POPULAR TAGS</h5>
							<ul class="list list-unstyled list-inline mb-0">
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">jeans</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">shoes</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">bag</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">jeasn</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">classic</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">black</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">bag</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">white</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">bag</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">bag</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">shoes</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">bag</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">jeans</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">shoes</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">white</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">black</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">white</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">shoes</a></li>
							</ul>
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
					</div>
				</div>
				<div class="container">
					@include('porto.partials.footer-copyright.footer-copyright-51', ['key' => 'footer-copyright.footer-copyright-51'])
				</div>
			</footer>
@endsection
