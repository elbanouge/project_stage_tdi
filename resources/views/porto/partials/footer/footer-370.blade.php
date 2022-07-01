<footer id="footer">
				<div class="container">
					<div class="row justify-content-center py-4 text-center">
						<div class="col">
							<a class="text-uppercase font-weight-bold text-3 text-color-light icon-aria-expanded-change" data-toggle="collapse" href="#hiddenMap" role="button" aria-expanded="false" aria-controls="hiddenMap">View Our Location <i class="ml-1 fas fa-chevron-down"></i><i class="ml-1 fas fa-chevron-up"></i></a>
						</div>
					</div>
				</div>
				<div class="collapse" id="hiddenMap">
					@include('porto.partials.google-map.google-map-41')
				</div>
				<div class="footer-bg-color-2 footer-bottom-light-border">
					<div class="container">
						<div class="row justify-content-center text-center">
							<div class="col py-5">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" src="img/logo-footer.png" height="64">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bg-color-2 footer-bottom-light-border">
					<div class="container">
						<div class="row justify-content-center text-center py-5">
							<div class="col-md-4 text-center mb-4 mb-md-0">
								<i class="fas fa-map-marker-alt text-9 text-color-light mb-3 mt-2"></i>
								<p class="mb-0">
									<strong class="text-color-light text-uppercase">Porto Address</strong>
									<span class="d-block text-2 p-relative bottom-3">123 Street Name, City, ST</span>
								</p>
							</div>
							<div class="col-md-4 text-center mb-4 mb-md-0">
								<i class="far fa-clock text-9 text-color-light mb-3 mt-2"></i>
								<p class="mb-0">
									<strong class="text-color-light text-uppercase">Business Hours</strong>
									<span class="d-block text-2 p-relative bottom-3">Mon - Sun / 9:00AM - 8:00PM</span>
								</p>
							</div>
							<div class="col-md-4 text-center">
								<i class="fas fa-phone-volume text-9 text-color-light mb-3 mt-2"></i>
								<p class="mb-0">
									<strong class="text-color-light text-uppercase">Call Us Now</strong>
									<span class="d-block text-2 p-relative bottom-3">(800) 123-4567</span>
								</p>
							</div>porto.partials
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-58', ['key' =&gt; 'footer-copyright.footer-copyright-58'])
			</footer>