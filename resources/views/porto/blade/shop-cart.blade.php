@extends('porto.app')
@section('header')
@include('porto.partials.header.header-399')
@endsection

@section('main')
<div role="main" class="main shop pb-4">

				<div class="container">

					<div class="row">
						<div class="col">
							<ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
								<li class="text-transform-none mr-2">
									<a href="shop-cart.html" class="text-decoration-none text-color-primary">Shopping Cart</a>
								</li>
								<li class="text-transform-none text-color-grey-lighten mr-2">
									<a href="shop-checkout.html" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Checkout</a>
								</li>
								<li class="text-transform-none text-color-grey-lighten">
									<a href="shop-order-complete.html" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Order Complete</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="row pb-4 mb-5">
						<div class="col-lg-8 mb-5 mb-lg-0">
							<form method="post" action="">
								<div class="table-responsive">
									<table class="shop_table cart">
										<thead>
											<tr class="text-color-dark">
												<th class="product-thumbnail" width="15%">
													 
												</th>
												<th class="product-name text-uppercase" width="30%">
													Product
												</th>
												<th class="product-price text-uppercase" width="15%">
													Price
												</th>
												<th class="product-quantity text-uppercase" width="20%">
													Quantity
												</th>
												<th class="product-subtotal text-uppercase text-right" width="20%">
													Subtotal
												</th>
											</tr>
										</thead>
										<tbody>

											<tr class="cart_table_item">
												<td class="product-thumbnail">
													<div class="product-thumbnail-wrapper">
														<a href="#" class="product-thumbnail-remove" title="Remove Product">
															<i class="fas fa-times"></i>
														</a>
														<a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Photo Camera">
															<img width="90" height="90" alt="" class="img-fluid" src="img/products/product-grey-1.jpg">
														</a>
													</div>
												</td>
												<td class="product-name">
													<a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Photo Camera</a>
												</td>
												<td class="product-price">
													<span class="amount font-weight-medium text-color-grey">$59</span>
												</td>
												<td class="product-quantity">
													<div class="quantity float-none m-0">
														<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
														<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
														<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
													</div>
												</td>
												<td class="product-subtotal text-right">
													<span class="amount text-color-dark font-weight-bold text-4">$59</span>
												</td>
											</tr>

											<tr class="cart_table_item">
												<td class="product-thumbnail">
													<div class="product-thumbnail-wrapper">
														<a href="#" class="product-thumbnail-remove" title="Remove Product">
															<i class="fas fa-times"></i>
														</a>
														<a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Porto Headphone">
															<img width="90" height="90" alt="" class="img-fluid" src="img/products/product-grey-7.jpg">
														</a>
													</div>
												</td>
												<td class="product-name">
													<a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Porto Headphone</a>
												</td>
												<td class="product-price">
													<span class="amount font-weight-medium text-color-grey">$99</span>
												</td>
												<td class="product-quantity">
													<div class="quantity float-none m-0">
														<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
														<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
														<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
													</div>
												</td>
												<td class="product-subtotal text-right">
													<span class="amount text-color-dark font-weight-bold text-4">$99</span>
												</td>
											</tr>

											<tr class="cart_table_item">
												<td class="product-thumbnail">
													<div class="product-thumbnail-wrapper">
														<a href="#" class="product-thumbnail-remove" title="Remove Product">
															<i class="fas fa-times"></i>
														</a>
														<a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Golf Bag">
															<img width="90" height="90" alt="" class="img-fluid" src="img/products/product-grey-2.jpg">
														</a>
													</div>
												</td>
												<td class="product-name">
													<a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Golf Bag</a>
												</td>
												<td class="product-price">
													<span class="amount font-weight-medium text-color-grey">$19</span>
												</td>
												<td class="product-quantity">
													<div class="quantity float-none m-0">
														<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
														<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
														<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
													</div>
												</td>
												<td class="product-subtotal text-right">
													<span class="amount text-color-dark font-weight-bold text-4">$19</span>
												</td>
											</tr>

											<tr class="cart_table_item">
												<td class="product-thumbnail">
													<div class="product-thumbnail-wrapper">
														<a href="#" class="product-thumbnail-remove" title="Remove Product">
															<i class="fas fa-times"></i>
														</a>
														<a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Workout">
															<img width="90" height="90" alt="" class="img-fluid" src="img/products/product-grey-3.jpg">
														</a>
													</div>
												</td>
												<td class="product-name">
													<a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Workout</a>
												</td>
												<td class="product-price">
													<span class="amount font-weight-medium text-color-grey">$30</span>
												</td>
												<td class="product-quantity">
													<div class="quantity float-none m-0">
														<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
														<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
														<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
													</div>
												</td>
												<td class="product-subtotal text-right">
													<span class="amount text-color-dark font-weight-bold text-4">$30</span>
												</td>
											</tr>

											<tr class="cart_table_item">
												<td class="product-thumbnail">
													<div class="product-thumbnail-wrapper">
														<a href="#" class="product-thumbnail-remove" title="Remove Product">
															<i class="fas fa-times"></i>
														</a>
														<a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Luxury Bag">
															<img width="90" height="90" alt="" class="img-fluid" src="img/products/product-grey-4.jpg">
														</a>
													</div>
												</td>
												<td class="product-name">
													<a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Luxury Bag</a>
												</td>
												<td class="product-price">
													<span class="amount font-weight-medium text-color-grey">$79</span>
												</td>
												<td class="product-quantity">
													<div class="quantity float-none m-0">
														<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
														<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
														<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
													</div>
												</td>
												<td class="product-subtotal text-right">
													<span class="amount text-color-dark font-weight-bold text-4">$79</span>
												</td>
											</tr>

											<tr>
												<td colspan="5">
													<div class="row justify-content-between mx-0">
														<div class="col-md-auto px-0 mb-3 mb-md-0">
															<div class="d-flex align-items-center">
																<input type="text" class="form-control h-auto border-radius-0 line-height-1 py-3" name="couponCode" placeholder="Coupon Code">
																<button type="submit" class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 ws-nowrap btn-px-4 py-3 ml-2">Apply Coupon</button>
															</div>
														</div>
														<div class="col-md-auto px-0">
															<button type="submit" class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 btn-px-4 py-3">Update Cart</button>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</form>
						</div>
						<div class="col-lg-4">
							<div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
								<div class="card-body">
									<h4 class="font-weight-bold text-uppercase text-4 mb-3">Cart Totals</h4>
									<table class="shop_table cart-totals mb-4">
										<tbody>
											<tr class="cart-subtotal">
												<td class="border-top-0">
													<strong class="text-color-dark">Subtotal</strong>
												</td>
												<td class="border-top-0 text-right">
													<strong><span class="amount font-weight-medium">$431</span></strong>
												</td>
											</tr>
											<tr class="shipping">
												<td colspan="2">
													<strong class="d-block text-color-dark mb-2">Shipping</strong>
													
													<div class="d-flex flex-column">
														<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method1">
															<input id="shipping_method1" type="radio" class="mr-2" name="shipping_method" value="free" checked>
															Free Shipping
														</label>
														<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method2">
															<input id="shipping_method2" type="radio" class="mr-2" name="shipping_method" value="local-pickup">
															Local Pickup
														</label>
														<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method3">
															<input id="shipping_method3" type="radio" class="mr-2" name="shipping_method" value="flat-rate">
															Flat Rate: $5.00
														</label>
													</div>
												</td>
											</tr>
											<tr class="total">
												<td>
													<strong class="text-color-dark text-3-5">Total</strong>
												</td>
												<td class="text-right">
													<strong class="text-color-dark"><span class="amount text-color-dark text-5">$431</span></strong>
												</td>
											</tr>
										</tbody>
									</table>
									<a href="shop-checkout.html" class="btn btn-dark btn-modern btn-block text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Proceed to Checkout <i class="fas fa-arrow-right ml-2"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<h4 class="font-weight-semibold text-4 mb-3">PEOPLE ALSO BOUGHT</h4>
							<hr class="mt-0">
							<div class="products row">
								<div class="col">
									@include('porto.partials.owl-carousel.owl-carousel-364')
								</div>
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
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">CUSTOMER SERVICE</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="contact-us-1.html">Help &amp; FAQs</a></li>
								<li class="mb-0"><a href="services.html">Order Tracking</a></li>
								<li class="mb-0"><a href="#">Shipping &amp; Delivery</a></li>
								<li claporto.partials">Orders History</a></li>
								<li class="mb-0"><a href="#">Advanced Search</a></li>
								<li class="mb-0"><a href="#">Login</a></li>
								<li class="mb-0"><a href="about-us-1.html">Careers</a></li>
								<li class="mb-0"><a href="#">About Us</a></li>
								<li class="mb-0"><a href="#">Corporate Sales</a></li>
							</ul>
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
