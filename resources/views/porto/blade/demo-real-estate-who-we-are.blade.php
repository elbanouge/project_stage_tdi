@extends('porto.app')
@section('header')
@include('porto.partials.header.header-176')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-193')

				<div class="container">

					<div class="row pb-5 pt-3">
						<div class="col-lg-9">
							
							<p class="lead mb-4">Founded in 1999 by John Doe, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

							<img width="400" class="img-fluid float-right ml-4 mb-4 mt-1" alt="" src="img/demos/real-estate/agency.jpg">

							<p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

							<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

							<div class="row">
								<div class="col-lg-4">
									<h4 class="mt-4 mb-3">Our Mission</h4>

									<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
								</div>
								<div class="col-lg-4">
									<h4 class="mt-4 mb-3">Our Vision</h4>

									<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
								</div>
								<div class="col-lg-4 mb-4 mb-lg-0">
									<h4 class="mt-4 mb-3">Our Values</h4>

									<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
								</div>
							</div>

						</div>
						<div class="col-lg-3">
							@include('porto.partials.sidebar.sidebar-38')
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
