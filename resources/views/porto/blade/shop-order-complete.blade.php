@extends('porto.app')
@section('header')
@include('porto.partials.header.header-399')
@endsection

@section('main')
<div role="main" class="main shop pb-4">

				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-8">
							<ul class="breadcrumb breadcrumb-dividers-no-opacity font-weight-bold text-6 justify-content-center my-5">
								<li class="text-transform-none mr-2">
									<a href="shop-cart.html" class="text-decoration-none text-color-dark text-color-hover-primary">Shopping Cart</a>
								</li>
								<li class="text-transform-none text-color-dark mr-2">
									<a href="shop-checkout.html" class="text-decoration-none text-color-dark text-color-hover-primary">Checkout</a>
								</li>
								<li class="text-transform-none text-color-dark">
									<a href="shop-order-complete.html" class="text-decoration-none text-color-primary">Order Complete</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="card border-width-3 border-radius-0 border-color-success">
								<div class="card-body text-center">
									<p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-success mr-1"></i> Thank You. Your Order has been received.</p>
								</div>
							</div>
							<div class="d-flex flex-column flex-md-row justify-content-between py-3 px-4 my-4">
								<div class="text-center">
									<span>
										Order Number <br>
										<strong class="text-color-dark">31891</strong>
									</span>
								</div>
								<div class="text-center mt-4 mt-md-0">
									<span>
										Date <br>
										<strong class="text-color-dark">June 17, 2020</strong>
									</span>
								</div>
								<div class="text-center mt-4 mt-md-0">
									<span>
										Email <br>
										<strong class="text-color-dark">abc@abc.com</strong>
									</span>
								</div>
								<div class="text-center mt-4 mt-md-0">
									<span>
										Total <br>
										<strong class="text-color-dark">$30</strong>
									</span>
								</div>
								<div class="text-center mt-4 mt-md-0">
									<span>
										Payment Method <br>
										<strong class="text-color-dark">Cash on Delivery</strong>
									</span>
								</div>
							</div>
							<div class="card border-width-3 border-radius-0 border-color-hover-dark mb-4">
								<div class="card-body">
									<h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
									<table class="shop_table cart-totals mb-0">
										<tbody>
											<tr>
												<td colspan="2" class="border-top-0">
													<strong class="text-color-dark">Product</strong>
												</td>
											</tr>
											<tr>
												<td>
													<strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong>
													<span class="text-1">COLOR BLACK</span>
												</td>
												<td class="text-right align-top">
													<span class="amount font-weight-medium text-color-grey">$15</span>
												</td>
											</tr>
											<tr>
												<td class="border-top-0 pt-0">
													<strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong>
													<span class="text-1">COLOR BLACK</span>
												</td>
												<td class="border-top-0 text-right align-top pt-0">
													<span class="amount font-weight-medium text-color-grey">$15</span>
												</td>
											</tr>
											<tr class="cart-subtotal">
												<td class="border-top-0">
													<strong class="text-color-dark">Subtotal</strong>
												</td>
												<td class="border-top-0 text-right">
													<strong><span class="amount font-weight-medium">$431</span></strong>
												</td>
											</tr>
											<tr class="shipping">
												<td class="border-top-0">
													<strong class="text-color-dark">Shipping</strong>
												</td>
												<td class="border-top-0 text-right">
													<strong><span class="amount font-weight-medium">Free Shipping</span></strong>
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
								</div>
							</div>
							<div class="row pt-3">
								<div class="col-lg-6 mb-4 mb-lg-0">
									<h2 class="text-color-dark font-weight-bold text-5-5 mb-1">Billing Address</h2>
									<ul class="list list-unstyled text-2 mb-0">
										<li class="mb-0">John Doe Junior</li>
										<li class="mb-0">Street Name, City</li>
										<li class="mb-0">State AL 85001</li>
										<li class="mb-0">123 456 7890</li>
										<li class="mt-3 mb-0">abc@abc.com</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<h2 class="text-color-dark font-weight-bold text-5-5 mb-1">Shipping Address</h2>
									<ul class="list list-unstyled text-2 mb-0">
										<li class="mb-0">John Doe Junior</li>
										<li class="mb-0">Street Name, City</li>
										<li class="mb-0">State AL 85001</li>
										<li class="mb-0">123 456 7890</li>
										<li class="mt-3 mb-0">abc@abc.com</li>
									</ul>
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
								<li class="mb-0"><a href="#">Orders History</a></li>
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
