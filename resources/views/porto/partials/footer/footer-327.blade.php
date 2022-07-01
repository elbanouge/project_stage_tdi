<footer id="footer" class="mt-0">
				<div class="container my-4">
					<div class="row py-5">
						<div class="col-lg-2 align-self-center mb-5 mb-lg-0">
							<a href="demo-seo.html">
								<img src="img/logo-default-slim.png" class="img-fluid" alt="Demo SEO" width="100">
							</a>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Contact Details</h4>
							<ul class="list list-unstyled">
								<li class="d-flex align-items-baseline"><i class="far fa-dot-circle text-color-primary mr-3"></i><div><span class="text-color-light">Address:</span> 1234 Street Name, City Name, USA</div></li>
								<li class="d-flex align-items-baseline"><i class="fab fa-whatsapp text-color-primary mr-3"></i><div><span class="text-color-light">Phone:</span> (123) 456-7890</div></li>
								<li class="d-flex align-items-baseline"><i class="far fa-envelope text-color-primary mr-3"></i><div><span class="text-color-light">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a></div></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Navigations</h4>
							<ul class="list list-unstyled">
								<li class="mb-1">
									<a class="link-hover-style-1" href="demo-seo.html#home">Home</a>
								</li>
								<li class="mb-1">
									<a class="link-hover-style-1" href="demo-seo.html#about">About</a>
								</li>
								<li class="mb-1">
									<a class="link-hover-style-1" href="demo-seo.html#solutions">Solutions</a>
								</li>
								<li class="mb-1">
									<a class="link-hover-style-1" href="demo-seo.html#pricing">Pricing</a>
								</li>
								<li class="mb-1">
									<a class="link-hover-style-1" href="demo-seo.html#reviews">Reviews</a>
								</li>
								<li class="mb-1">
									<a class="link-hover-style-1 active" href="demo-seo.html#news">News</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-4">
							<h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Newsletter</h4>
							<p>Enter your email address and get our offers and plans in to your mail.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100">
								<div class="input-group">
									<input class="form-control form-control-sm text-color-light custom-bg-color-1 rounded-0 border-0 px-4 text-3" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-primary text-color-light text-2 rounded-0 py-3 px-4" type="submit"><strong>SUBSCRIBE</strong></button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-39', ['key' =&gt; 'footer-copyright.footer-copyright-39'])
			</footer>