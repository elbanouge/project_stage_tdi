@extends('porto.app')
@section('header')
@include('porto.partials.header.header-178')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-191')

				<div class="container">

					<div class="row pb-5 pt-3">
						<div class="col-lg-9">
									
							<div class="row">
								<div class="col-lg-7">

									<span class="thumb-info-listing-type thumb-info-listing-type-detail bg-color-secondary text-uppercase text-color-light font-weight-semibold p-2 pl-3 pr-3">
										for sale
									</span>

									<div class="thumb-gallery">
										@include('porto.partials.lightbox.lightbox-55')

										@include('porto.partials.owl-carousel.owl-carousel-129')
									</div>

								</div>
								<div class="col-lg-5">
									
									@include('porto.partials.table.table-2')

								</div>
							</div>

							<div class="row">
								<div class="col">

									<h4 class="mt-3 mb-3">Description</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>

									<p>Ctrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac feugiat nibh adipiscing sit amet. In eu juiverra leo. Vestibulum ante ipsum primis in faucibus orci.</p>

									<hr class="solid my-5">

									<h4 class="mt-3 mb-3">Features</h4>

									<ul class="list list-icons list-secondary row m-0">
										<li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Air conditioning <a href="#" data-plugin-tooltip data-toggle="tooltip" data-placement="top" title="+ Central Heating"><i class="fas fa-info-circle"></i></a></li>
										<li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Home Theater</li>
										<li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Central Heating</li>
										<li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Laundry</li>
										<li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Balcony</li>
										<li class="col-sm-6 col-lg-4 custom-list-item-disabled"><i class="fas fa-check"></i> Storage</li>
										<li class="col-sm-6 col-lg-4 custom-list-item-disabled"><i class="fas fa-check"></i> Garage</li>
										<li class="col-sm-6 col-lg-4 custom-list-item-disabled"><i class="fas fa-check"></i> Yard</li>
										<li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Electric Water Heater</li>
										<li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Deck</li>
										<li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Gym</li>
										<li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Ocean View</li>
									</ul>

									<hr class="solid my-5">

									<h4 class="mt-3 mb-3" id="map">Map Location</h4>
									@include('porto.partials.google-map.google-map-25')

								</div>
							</div>

						</div>
						<div class="col-lg-3">
							@include('porto.partials.sidebar.sidebar-37')
						</div>
					</div>

				</div>

				<footer id="footer" class="m-0 custom-bg-color-1 py-4">
					<div class="container">
						<div class="row pt-5 pb-4">
							<div class="col-md-4 col-lg-3">
								<h4 class="mb-3">Porto Real Estate</h4>
								<p class="custom-color-2 mb-0">
									123 Porto Blvd, Suite 100<br>
									New York, NY<br>
									Phone : 123-456-7890<br>
									Email : <a class="text-color-secondary" href="mailto:mail@example.com">mail@example.com</a>
								</p>
							</div>
							<div class="col-md-2">
								<h4 class="mb-3">Properties</h4>
								<nav class="nav-footer">
									<ul class="custom-list-style-1 mb-0">
										<li>
											<a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none">
												For Sale
											</a>
										</li>
										<li>
											<a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none">
												For Rent
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-2">
								<h4 class="mb-3">Links</h4>
								<nav class="nav-footer">
									<ul class="custom-list-style-1 mb-0">
										<li>
											<a href="demo-real-estate-agents.html" class="custom-color-2 text-decoration-none">
												Agents
											</a>
										</li>
										<li>
											<a href="demo-real-estate-who-we-are.html" class="custom-color-2 text-decoration-none">
												Who We Are
											</a>
										</li>
										<li>
											<a href="demo-real-estate-contact.html" class="custom-color-2 text-decoration-none">
												Contact
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-4 col-lg-5">
								<h4 class="mb-3">Latest Tweet</h4>
								<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 1}">
									<p>Please wait...</p>
								</div>
							</div>
						</div>
					</div>
					@include('porto.partials.footer-copyright.footer-copyright-30', ['key' => 'footer-copyright.footer-copyright-30'])
				</footer>
			</div>
@endsection

@section('footer')
<footer id="footer" class="m-0 custom-bg-color-1 py-4">
					<div class="container">
						<div class="row pt-5 pb-4">
							<div class="col-md-4 col-lg-3">
								<h4 class="mb-3">Porto Real Estate</h4>
								<p class="custom-color-2 mb-0">
									123 Porto Blvd, Suite 100<br>
									New York, NY<br>
									Phone : 123-456-7890<br>
									Email : <a class="text-color-secondary" href="mailto:mail@example.com">mail@example.com</a>
								</p>
							</div>
							<div class="col-md-2">
								<h4 class="mb-3">Properties</h4>
								<nav class="nav-footer">
									<ul class="custom-list-style-1 mb-0">
										<li>
											<a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none">
												For Sale
											</a>
										</li>
										<li>
											<a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none">
												For Rent
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-2">
								<h4 class="mb-3">Links</h4>
								<nav class="nav-footer">
									<ul class="custom-list-style-1 mb-0">
										<li>
											<a href="demo-real-estate-agents.html" class="custom-color-2 text-decoration-none">
												Agents
											</a>
										</li>
										<li>
											<a href="demo-real-estate-who-we-are.html" class="custom-color-2 text-decoration-none">
												Who We Are
											</a>
										</li>
										<li>
											<a href="demo-real-estate-contact.html" class="custom-color-2 text-decoration-none">
												Contact
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-4 col-lg-5">
								<h4 class="mb-3">Latest Tweet</h4>
								<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 1}">
									<p>Please wait...</p>
								</div>
							</div>
						</div>
					</div>
					@include('porto.partials.footer-copyright.footer-copyright-30', ['key' => 'footer-copyright.footer-copyright-30'])
				</footer>
@endsection
