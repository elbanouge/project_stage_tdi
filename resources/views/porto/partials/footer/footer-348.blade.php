<footer id="footer" class="bg-color-secondary border-top-0">
				<div class="container py-4">
					<div class="row py-5">
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3 opacity-7">NEWSLETTER</h5>
							<p class="pr-1 text-color-light">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mr-4 mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
									</span>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3 opacity-7">LATEST TWEETS</h5>
							<div id="tweet" class="twitter twitter-light" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
								<p class="text-color-light">Please wait...</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<h5 class="text-3 mb-3 opacity-7">CONTACT US</h5>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-light"></i><p class="m-0 text-color-light">234 Street Name, City Name</p></li>
								<li class="mb-1"><i class="fab fa-whatsapp text-color-light"></i><p class="m-0"><a class="text-color-light" href="tel:8001234567">(800) 123-4567</a></p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-light"></i><p class="m-0"><a class="text-color-light" href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>porto.partials
						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3 opacity-7">FOLLOW US</h5>
							@includporto.partialsals.header-social-icons.header-social-icons-13')
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-45', ['key' =&gt; 'footer-copyright.footer-copyright-45'])
			</footer>