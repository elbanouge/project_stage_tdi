@extends('porto.app')
@section('header')
@include('porto.partials.header.header-399')
@endsection

@section('main')
<div role="main" class="main shop pt-4">

				<div class="container">

					<div class="row">
						<div class="col">
							<ul class="breadcrumb breadcrumb-style-2 d-block text-4 mb-4">
								<li><a href="#" class="text-color-default text-color-hover-primary text-decoration-none">Home</a></li>
								<li><a href="#" class="text-color-default text-color-hover-primary text-decoration-none">Electronics</a></li>
								<li>SMARTWATCHES</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 mb-5 mb-md-0">

							<div class="thumb-gallery-wrapper">
								@include('porto.partials.owl-carousel.owl-carousel-365')
								@include('porto.partials.owl-carousel.owl-carousel-366')
							</div>

						</div>

						<div class="col-md-7">

							<div class="summary entry-summary position-relative">

								<div class="position-absolute top-0 right-0">
									<div class="products-navigation d-flex">
										<a href="#" class="prev text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Red Ladies Handbag"><i class="fas fa-chevron-left"></i></a>
										<a href="#" class="next text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Green Ladies Handbag"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div>

								<h1 class="mb-0 font-weight-bold text-7">Porto Headphone</h1>

								<div class="pb-0 clearfix d-flex align-items-center">
									<div title="Rated 3 out of 5" class="float-left">
										<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
									</div>

									<div class="review-num">
										<a href="#description" class="text-decoration-none text-color-default text-color-hover-primary" data-hash data-hash-offset="75" data-hash-trigger-click=".nav-link-reviews" data-hash-trigger-click-delay="1000">
											<span class="count text-color-inherit" itemprop="ratingCount">(2</span> reviews)
										</a>
									</div>
								</div>

								<div class="divider divider-small">
									<hr class="bg-color-grey-scale-4">
								</div>

								<p class="price mb-3">
									<span class="sale text-color-dark">$15,00</span>
									<span class="amount">$22,00</span>
								</p>

								<p class="text-3-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet.</p>

								<ul class="list list-unstyled text-2">
									<li class="mb-0">AVAILABILITY: <strong class="text-color-dark">AVAILABLE</strong></li>
									<li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong></li>
								</ul>


								<form enctype="multipart/form-data" method="post" class="cart" action="shop-cart.html">
									@include('porto.partials.table.table-16')
									<hr>
									<div class="quantity quantity-lg">
										<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
										<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
										<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
									</div>
									<button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Add to cart</button>
									<hr>
								</form>

								<div class="d-flex align-items-center">
									<ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark mr-3 mb-0">
										<!-- Facebook -->
										<li class="social-icons-facebook">
											<a href="http://www.facebook.com/sharer.php?u=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Facebook">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<!-- Google+ -->
										<li class="social-icons-googleplus">
											<a href="https://plus.google.com/share?url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Google+">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
										<!-- Twitter -->
										<li class="social-icons-twitter">
											<a href="https://twitter.com/share?url=https://www.okler.net&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Twitter">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<!-- Email -->
										<li class="social-icons-email">
											<a href="mailto:?Subject=Share%20This%20Page&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20%20https://www.okler.net" data-toggle="tooltip" data-placement="top" title="Share By Email">
												<i class="far fa-envelope"></i>
											</a>
										</li>
									</ul>
									<a href="#" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2">
										<i class="far fa-heart mr-1"></i> SAVE TO WISHLIST
									</a>
								</div>

							</div>

						</div>
					</div>

					<div class="row mb-4">
						<div class="col">
							@include('porto.partials.tabs.tabs-29')
						</div>
					</div>

					<div class="row">
						<div class="col">
							<h4 class="font-weight-semibold text-4 mb-3">RELATED PRODUCTS</h4>
							<hr class="mt-0">
							<div class="products row">
								<div class="col">
									@include('porto.partials.owl-carousel.owl-carousel-367')
								</div>
							</div>
						</div>
					</div>

					<hr class="my-5">
					
					<div class="products row">
						<div class="col-md-6 col-lg-3">
							<h4 class="font-weight-semibold text-4 mb-3">FEATURED PRODUCTS</h4>

							@include('porto.partials.product.product-40')

							@include('porto.partials.product.product-41')

							@include('porto.partials.product.product-42')

						</div>
						<div class="col-md-6 col-lg-3">
							<h4 class="font-weight-semibold text-4 mb-3">BEST SELLING PRODUCTS</h4>

							@include('porto.partials.product.product-43')

							@include('porto.partials.product.product-44')

							@include('porto.partials.product.product-45')

						</div>
						<div class="col-md-6 col-lg-3">
							<h4 class="font-weight-semibold text-4 mb-3">LATEST PRODUCTS</h4>

							@include('porto.partials.product.product-46')

							@include('porto.partials.product.product-47')

							@include('porto.partials.product.product-48')

						</div>
						<div class="col-md-6 col-lg-3">
							<h4 class="font-weight-semibold text-4 mb-3">TOP RATED PRODUCTS</h4>

							@include('porto.partials.product.product-40')

							@include('porto.partials.product.product-41')

							@include('porto.partials.product.product-42')

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
							<ul clasporto.partialsal-icons-clean-with-border social-icons-medium">
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
