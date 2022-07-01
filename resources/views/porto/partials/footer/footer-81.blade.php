<footer id="footer" class="m-0 border-0 bg-color-quaternary overflow-hidden">
				<div class="container">
					<div class="row py-5 custom-row-footer">
						<div class="col-12 col-sm-12 col-lg-3 d-flex align-items-start flex-column footer-column custom-footer-column-logo">
							<img width="123" height="32" src="img/demos/business-consulting-2/logos/porto.png" alt="Logo Footer">
							<p class="d-block m-0 text-color-default">Lorem ipsum dolor sit amet, conse adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor.</p>
						</div>
						<div class="col-12 col-sm-12 col-lg-9 footer-column">
							<div class="d-flex align-items-start align-sm-items-end justify-content-between flex-column h-100 mt-4 mt-sm-0">
								<div class="d-flex flex-nowrap flex-lg-wrap justify-content-start justify-content-lg-end align-items-start align-items-lg-center w-100 flex-column flex-lg-row mt-4 mt-lg-0 custom-container-info-socials">
									@include('porto.partials.nav-pills.nav-pills-1')
									<ul class="social-icons custom-social-icons">
										<li class="social-icons-instagram">
											<a class="custom-bg-color-light-grey" href="http://www.instagram.com/" target="_blank" title="Instagram">
												<i class="fab fa-instagram text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-twitter">
											<a class="custom-bg-color-light-grey" href="http://www.twitter.com/" target="_blank" title="Twitter">
												<i class="fab fa-twitter text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-facebook">
											<a class="custom-bg-color-light-grey" href="http://www.facebook.com/" target="_blank" title="Facebook">
												<i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
									</ul>
								</div>
								<nav class="nav-footer w-100 d-none d-lg-block">
									@include('porto.partials.nav-pills.nav-pills-2')
								</nav>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-8', ['key' =&gt; 'footer-copyright.footer-copyright-8'])
			</footer>