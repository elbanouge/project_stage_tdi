@extends('porto.app')
@section('header')
@include('porto.partials.header.header-174')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-187')

				<div class="container shop py-3">
					<div class="row">
						<div class="col">
							<p class="mb-1">Returning customer? <a href="#" class="text-color-dark text-color-hover-primary text-uppercase text-decoration-none font-weight-bold" data-toggle="collapse" data-target=".login-form-wrapper">Login</a></p>
						</div>
					</div>

					<div class="row login-form-wrapper collapse mb-5">
						<div class="col">
							<div class="card border-width-3 border-radius-0 border-color-hover-dark">
								<div class="card-body">
									<form action="/" id="frmSignIn" method="post">
										<div class="form-row">
											<div class="form-group col">
												<label class="text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
												<input type="text" value="" class="form-control form-control-lg text-4" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<label class="text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
												<input type="password" value="" class="form-control form-control-lg text-4" required>
											</div>
										</div>
										<div class="form-row justify-content-between">
											<div class="form-group col-md-auto">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="rememberme">
													<label class="custom-control-label cur-pointer text-2" for="rememberme">Remember Me</label>
												</div>
											</div>
											<div class="form-group col-md-auto">
												<a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2" href="#">Forgot Password?</a>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
												<div class="divider">
													<span class="bg-light px-4 position-absolute left-50pct top-50pct transform3dxy-n50">or</span>
												</div>
												<a href="#" class="btn btn-primary-scale-2 btn-modern btn-block text-transform-none rounded-0 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3" data-loading-text="Loading..."><i class="fab fa-facebook text-5 mr-2"></i> Login With Facebook</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<p>Have a coupon? <a href="#" class="text-color-dark text-color-hover-primary text-uppercase text-decoration-none font-weight-bold" data-toggle="collapse" data-target=".coupon-form-wrapper">Enter your code</a></p>
						</div>
					</div>

					<div class="row coupon-form-wrapper collapse mb-5">
						<div class="col">
							<div class="card border-width-3 border-radius-0 border-color-hover-dark">
								<div class="card-body">
									<form role="form" method="post" action="">
										<div class="d-flex align-items-center">
											<input type="text" class="form-control h-auto border-radius-0 line-height-1 py-3" name="couponCode" placeholder="Coupon Code" required>
											<button type="submit" class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 ws-nowrap btn-px-4 py-3 ml-2">Apply Coupon</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<form role="form" class="needs-validation" method="post" action="">
						<div class="row">
							<div class="col-lg-7 mb-4 mb-lg-0">

								<h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Billing Details</h2>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>First Name <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="firstName" value="" required>
									</div>
									<div class="form-group col-md-6">
										<label>Last Name <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="lastName" value="" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Company Name</label>
										<input type="text" class="form-control h-auto py-2" name="companyName" value="">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Country/Region <span class="text-color-danger">*</span></label>
										<div class="custom-select-1">
											<select class="form-control h-auto py-2" name="country" required>
												<option value="" selected></option>
												<option value="usa">United States</option>
												<option value="spa">Spain</option>
												<option value="fra">France</option>
												<option value="uk">United Kingdon</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Street Address <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="address1" value="" placeholder="House number and street name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" class="form-control h-auto py-2" name="address2" value="" placeholder="Apartment, suite, unit, etc..." required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Town/City <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="city" value="" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>State <span class="text-color-danger">*</span></label>
										<div class="custom-select-1">
											<select class="form-control h-auto py-2" name="state" required>
												<option value="" selected></option>
												<option value="ny">Nova York</option>
												<option value="ca">California</option>
												<option value="tx">Texas</option>
												<option value="">Florida</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>ZIP <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="zip" value="" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Phone <span class="text-color-danger">*</span></label>
										<input type="number" class="form-control h-auto py-2" name="phone" value="" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Email Address <span class="text-color-danger">*</span></label>
										<input type="email" class="form-control h-auto py-2" name="email" value="" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<div class="custom-checkbox-1">
											<input id="createAccount" type="checkbox" name="createAccount" value="1">
											<label for="createAccount">Create an account ?</label>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<div class="custom-checkbox-1" data-toggle="collapse" data-target=".shipping-field-wrapper">
											<input id="shipAddress" type="checkbox" name="shipAddress" value="1">
											<label for="shipAddress">Shop to a different address ?</label>
										</div>
									</div>
								</div>
								<!-- Ship to a differente address fields -->
								<div class="shipping-field-wrapper collapse">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>First Name <span class="text-color-danger">*</span></label>
											<input type="text" class="form-control h-auto py-2" name="shippingFirstName" value="" required>
										</div>
										<div class="form-group col-md-6">
											<label>Last Name <span class="text-color-danger">*</span></label>
											<input type="text" class="form-control h-auto py-2" name="shippingLastName" value="" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Company Name</label>
											<input type="text" class="form-control h-auto py-2" name="shippingCompanyName" value="">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Country/Region <span class="text-color-danger">*</span></label>
											<div class="custom-select-1">
												<select class="form-control h-auto py-2" name="shippingCountry" required>
													<option value="" selected></option>
													<option value="usa">United States</option>
													<option value="spa">Spain</option>
													<option value="fra">France</option>
													<option value="uk">United Kingdon</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Street Address <span class="text-color-danger">*</span></label>
											<input type="text" class="form-control h-auto py-2" name="shippingAddress1" value="" placeholder="House number and street name" required>
										</div>
										<div class="form-group col">
											<input type="text" class="form-control h-auto py-2" name="shippingAddress2" value="" placeholder="Apartment, suite, unit, etc..." required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Town/City <span class="text-color-danger">*</span></label>
											<input type="text" class="form-control h-auto py-2" name="shippingCity" value="" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>State <span class="text-color-danger">*</span></label>
											<div class="custom-select-1">
												<select class="form-control h-auto py-2" name="shippingState" required>
													<option value="" selected></option>
													<option value="ny">Nova York</option>
													<option value="ca">California</option>
													<option value="tx">Texas</option>
													<option value="">Florida</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>ZIP <span class="text-color-danger">*</span></label>
											<input type="text" class="form-control h-auto py-2" name="shippingZip" value="" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Phone <span class="text-color-danger">*</span></label>
											<input type="number" class="form-control h-auto py-2" name="shippingPhone" value="" required>
										</div>
									</div>
									<!-- End of Ship to a differente address fields -->
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Order Notes</label>
										<textarea class="form-control h-auto py-2" name="orderNotes" rows="5" placeholder="Notes about you orderm e.g. special notes for delivery"></textarea>
									</div>
								</div>


							</div>
							<div class="col-lg-5">
								<div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
									<div class="card-body">
										<h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
										<table class="shop_table cart-totals mb-3">
											<tbody>
												<tr>
													<td colspan="2" class="border-top-0">
														<strong class="text-color-dark">Product</strong>
													</td>
												</tr>
												<tr>
													<td>
														<strong class="d-block text-color-dark line-height-1 font-weight-semibold">Porto Hedphone <span class="product-qty">x1</span></strong>
														<span class="text-1">COLOR BLACK</span>
													</td>
													<td class="text-right align-top">
														<span class="amount font-weight-medium text-color-grey">$350</span>
													</td>
												</tr>
												<tr class="cart-subtotal">
													<td class="border-top-0">
														<strong class="text-color-dark">Subtotal</strong>
													</td>
													<td class="border-top-0 text-right">
														<strong><span class="amount font-weight-medium">$350</span></strong>
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
												<tr class="payment-methods">
													<td colspan="2">
														<strong class="d-block text-color-dark mb-2">Payment Methods</strong>
														
														<div class="d-flex flex-column">
															<label class="d-flex align-items-center text-color-grey mb-0" for="payment_method1">
																<input id="payment_method1" type="radio" class="mr-2" name="payment_method" value="cash-on-delivery" checked>
																Cash On Delivery
															</label>
															<label class="d-flex align-items-center text-color-grey mb-0" for="payment_method2">
																<input id="payment_method2" type="radio" class="mr-2" name="payment_method" value="paypal">
																PayPal
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.
													</td>
												</tr>
											</tbody>
										</table>
										<button type="submit" class="btn btn-primary btn-modern btn-block text-uppercase text-3 py-3">Place Order <i class="fas fa-arrow-right ml-2"></i></button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-transparent border-0 mt-0">
				<div class="container py-5">
					<div class="row text-center text-lg-left pt-4">
						<div class="col-lg-5 col-xl-4 mb-4 mb-lg-0">
							<h4 class="font-weight-bold text-color-dark text-4-5 mb-3">CUSTOMER SERVICE</h4>
							<ul class="list list-unstyled d-flex flex-column flex-sm-row justify-content-sm-center justify-content-lg-start mb-0">
								<li class="line-height-3 mb-0">
									<a href="#" class="text-decoration-none text-color-hover-primary">Help &amp; FAQs</a>
								</li>
								<li class="line-height-3 border border-top-0 border-bottom-0 px-sm-3 mx-sm-3 mt-2 mt-sm-0 mb-0">
									<a href="#" class="text-decoration-none text-color-hover-primary">Order Tracking</a>
								</li>
								<li class="line-height-3 mt-2 mt-sm-0 mb-0">
									<a href="#" class="text-decoration-none text-color-hover-primary">Shipping &amp; Delivery</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-3 col-xl-2 offset-xl-2 mb-4 mb-lg-0">
							<h4 class="font-weight-bold text-color-dark text-4-5 mb-3">SOCIAL MEDIA</h4>
							<ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark mr-3 mb-0">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-4 col-xl-3 offset-xl-1">
							<h4 class="font-weight-bold text-color-dark text-4-5 mb-3">PAYMENT METHODS</h4>
							<div class="payment-cc payment-cc-no-hover-effect text-color-dark justify-content-center justify-content-lg-start">
								<i class="fab fa-cc-visa"></i>
								<i class="fab fa-cc-paypal"></i>
								<i class="fab fa-cc-stripe"></i>
								<i class="fab fa-cc-mastercard"></i>
								<i class="fab fa-cc-apple-pay"></i>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-29', ['key' => 'footer-copyright.footer-copyright-29'])
			</footer>
@endsection
