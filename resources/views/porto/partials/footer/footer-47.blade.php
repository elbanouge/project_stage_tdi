<footer id="footer" class="bg-color-light">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<h4 class="text-color-dark mb-0">Subscribe to our <strong>Newsletter</strong></h4>
							<p class="text-color-dark custom-font-secondary text-2 mb-0 mb-lg-4">Get notified of news and updates first.</p>
						</div>
						<div class="col-lg-6">
							<div class="newsletter custom-newsletter-style-1">
								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger d-none" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" novalidate="novalidate">
									<div class="input-group">
										<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-append">
											<button class="btn custom-btn-style-1 _size-1 text-color-light" type="submit">SUBSCRIBE</button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-2', ['key' =&gt; 'footer-copyright.footer-copyright-2'])
			</footer>