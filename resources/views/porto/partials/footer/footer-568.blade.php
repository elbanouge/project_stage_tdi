<footer id="footer" class="mt-0">
				<div class="container my-4">
					<div class="row py-5">
						<div class="col-md-5 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Contact Details</h5>
							<p class="text-4 mb-1">Porto Template 123</p>
							<p class="text-4 mb-4 pb-1">Porto Blvd, Suite</p>

							<p class="text-5 mb-1 pt-2">Call: 123-456-7890</p>
							<p class="text-5 mb-0">Email: <a href="mailto:info@porto.com">info@porto.com</a></p>
						</div>
						<div class="col-md-7 col-lg-5 mb-5 mb-lg-0">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
							<div class="row">
								<div class="col-6">
									<p class="mb-1"><a href="elements-call-to-action.html" class="text-4 link-hover-style-1">Call to Action</a></p>
									<p class="mb-1"><a href="elements-pricing-tables.html" class="text-4 link-hover-style-1">Pricing Tables</a></p>
									<p class="mb-1"><a href="elements-word-rotator.html" class="text-4 link-hover-style-1">Word Rotator</a></p>
									<p class="mb-1"><a href="elements-tooltips-popovers.html" class="text-4 link-hover-style-1">Tooltips &amp; Popovers</a></p>
									<p class="mb-1"><a href="elements-sticky-elements.html" class="text-4 link-hover-style-1">Sticky Elements</a></p>
								</div>
								<div class="col-6">
									<p class="mb-1"><a href="elements-progressbars.html" class="text-4 link-hover-style-1">Progress Bars</a></p>
									<p class="mb-1"><a href="elements-sections-parallax.html" class="text-4 link-hover-style-1">Sections &amp; Parallax</a></p>
									<p class="mb-1"><a href="elements-lists.html" class="text-4 link-hover-style-1">Lists</a></p>
									<p class="mb-1"><a href="elements-image-frames.html" class="text-4 link-hover-style-1">Image Frames</a></p>
									<p class="mb-1"><a href="elements-testimonials.html" class="text-4 link-hover-style-1">Testimonials</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5>
							<p class="text-4 mb-1">Get all the latest informationon Sales and Offers.</p>
							<p class="text-4">Sign up for newsletter today.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-primary text-color-light text-2 py-3 px-4" type="submit"><strong>SUBSCRIBE!</strong></button>
									</span>
								</div>
							</form>
						</div>porto.partials
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-55', ['key' =&gt; 'footer-copyright.footer-copyright-55'])
			</footer>