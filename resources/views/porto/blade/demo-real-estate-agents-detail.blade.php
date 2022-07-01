@extends('porto.app')
@section('header')
@include('porto.partials.header.header-176')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-188')

				<div class="container">

					<div class="row">
						<div class="col">
							<div class="agent-item agent-item-detail">
								<div class="row">
									<div class="col-lg-3">
										<img src="img/team/team-11.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-lg-5">
										<h2 class="mt-0 mb-1 font-weight-normal text-uppercase">Bruno Doe</h2>
										<h6 class="mb-1">Real Estate Broker</h6>
										<div class="text-4 mt-3 mb-3">
											<p>A successful real estate broker for over 20 years, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursu.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus.</p>
										</div>
									</div>
									<div class="col-lg-4">
										<ul class="list list-icons m-sm ml-5">
											<li>
												<a href="mailto:mail@domain.com">
													<i class="icon-envelope-open icons"></i> mail@domain.com
												</a>
											</li>
											<li>
												<a href="#">
													<i class="icon-call-out icons"></i> (800) 123-4567
												</a>
											</li>
											<li>
												<a href="#">
													<i class="icon-social-linkedin icons"></i> Lindekin
												</a>
											</li>
											<li>
												<a href="#">
													<i class="icon-social-facebook icons"></i> Facebook
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h4 class="mt-4">Contact Me</h4>

										<form class="contact-form" action="php/contact-form.php" method="POST">
											<div class="contact-form-success alert alert-success d-none mt-4">
												<strong>Success!</strong> Your message has been sent to us.
											</div>

											<div class="contact-form-error alert alert-danger d-none mt-4">
												<strong>Error!</strong> There was an error sending your message.
												<span class="mail-error-message text-1 d-block"></span>
											</div>
											<div class="form-row">
												<div class="form-group col-lg-4">
													<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
												</div>
												<div class="form-group col-lg-4">
													<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
												</div>
												<div class="form-group col-lg-4">
													<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" required></textarea>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<input type="submit" value="Send Message" class="btn btn-secondary" data-loading-text="Loading...">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<h4 class="mt-3 mb-0">Agent Properties</h4>
							<div class="row mb-5 properties-listing sort-destination p-0">
								<div class="col-lg-4 p-3 isotope-item">
									<div class="listing-item">
										<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
											@include('porto.partials.thumb-info.thumb-info-335')
										</a>
									</div>
								</div>
								<div class="col-lg-4 p-3 isotope-item">
									<div class="listing-item">
										<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
											@include('porto.partials.thumb-info.thumb-info-336')
										</a>
									</div>
								</div>
								<div class="col-lg-4 p-3 isotope-item">
									<div class="listing-item">
										<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
											@include('porto.partials.thumb-info.thumb-info-337')
										</a>
									</div>
								</div>
							</div>
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
