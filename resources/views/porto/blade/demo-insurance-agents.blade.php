@extends('porto.app')
@section('header')
@include('porto.partials.header.header-122')
@endsection

@section('main')
<div role="main" class="main">
				
			@include('porto.partials.page-header.page-header-152')

			<section class="section bg-color-light custom-padding-3 border-0 my-0">
				<div class="container">
					<div class="row text-center">
						<div class="col">
							<h2 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal appear-animation" data-appear-animation="fadeInUpShorter">MEET OUR TEAM</h2>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit magna, consectetur at suscipit eu.</p>
							<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit magna, consectetur at suscipit eu, dapibus vel odio. Mauris ac nulla at ligula interdum ullamcorper. Nunc mattis eros nec eros dictum, nec molestie metus auctor. Nulla placerat nunc velit, a dictum lectus finibus quis. Nunc leo mauris, cursus vel tempor eu, tempus sed turpis.</p>
						</div>
					</div>

					<div class="row mt-4 sort-destination">
						<div class="col-md-6 col-lg-4 mb-5 text-center appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1200">
							<a href="#">
								@include('porto.partials.thumb-info.thumb-info-169')
							</a>
							<h4 class="mt-3 mb-0">David Doe</h4>
							<p class="mb-0">Insurance Broker</p>
							<span class="thumb-info-social-icons mt-2 pb-0">
								<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
								<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
								<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
							
						</span></div>
						<div class="col-md-6 col-lg-4 mb-5 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
							<a href="#">
								@include('porto.partials.thumb-info.thumb-info-170')
							</a>
							<h4 class="mt-3 mb-0">Jeff Doe</h4>
							<p class="mb-0">Insurance Broker</p>
							<span class="thumb-info-social-icons mt-2 pb-0">
								<a href="mailto:mail@example.com"><i class="far fa-envelope"></i><span>Email</span></a>
								<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
							
						</span></div>
						<div class="col-md-6 col-lg-4 mb-5 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200">
							<a href="#">
								@include('porto.partials.thumb-info.thumb-info-171')
							</a>
							<h4 class="mt-3 mb-0">Amanda Doe</h4>
							<p class="mb-0">Insurance Broker</p>
							<span class="thumb-info-social-icons mt-2 pb-0">
								<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
								<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
								<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
							
						</span></div>
						<div class="col-md-6 col-lg-4 mb-5 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<a href="#">
								@include('porto.partials.thumb-info.thumb-info-172')
							</a>
							<h4 class="mt-3 mb-0">Alice Doe</h4>
							<p class="mb-0">Insurance Broker</p>
							<span class="thumb-info-social-icons mt-2 pb-0">
								<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
							
						</span></div>
						<div class="col-md-6 col-lg-4 mb-5 text-center appear-animation" data-appear-animation="fadeInUpShorter">
							<a href="#">
								@include('porto.partials.thumb-info.thumb-info-173')
							</a>
							<h4 class="mt-3 mb-0">Craig Doe</h4>
							<p class="mb-0">Insurance Broker</p>
							<span class="thumb-info-social-icons mt-2 pb-0">
								<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
								<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
								<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
							
						</span></div>
					</div>

				</div>
			</section>

			<footer id="footer" class="footer-reveal custom-bg-color-1 footer-reveal border-top-0 m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-lg-5">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">ABOUT US</h2>
							<p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer libero leo, convallis pharetra consectetur sed, posuere sed sapien. Nam tincidunt lacus vitae mattis malesuada. Integer lacinia quam mi, id condimentum ipsum commodo a. Nulla ullamcorper.</p>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">INSURANCE</h2>
							<ul class="list list-unstyled">
								<li><a href="#" class="text-decoration-none">Auto Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Life Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Business Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Travel Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Home Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Others</a></li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">QUICK LINKS</h2>
							<ul class="list list-unstyled">
								<li>
									<a href="demo-insurance.html">
										Home
									</a>
								</li>
								<li>
									<a href="demo-insurance-about-us.html">
										About Us
									</a>
								</li>
								<li>
									<a href="demo-insurance-insurances.html">
										Insurances
									</a>
								</li>
								<li>
									<a href="demo-insurance-agents.html">
										Agents
									</a>
								</li>
								<li>
									<a href="demo-insurance-blog.html">
										Blog
									</a>
								</li>
								<li>
									<a href="demo-insurance-contact.html">
										Contact
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-3">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">CONTACT US</h2>
							<p>Porto Insurance 123<br> Porto Blvd, Suite</p>
							<span class="d-block text-color-light custom-fontsize-5 mb-2">Call: <a href="tel:+1234567890" class="text-decoration-none text-color-light custom-fontsize-5">123-456-7890</a></span>
							<span class="d-block text-color-light custom-fontsize-5">Email: <a href="mailto:you@domain.com" class="text-decoration-none text-color-light custom-fontsize-5">info@porto.com</a></span>
							@include('porto.partials.header-social-icons.header-social-icons-10')
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-19', ['key' => 'footer-copyright.footer-copyright-19'])
			</footer>
		</div>
@endsection

@section('footer')
<footer id="footer" class="footer-reveal custom-bg-color-1 footer-reveal border-top-0 m-0">
				<div class="container">
					<div class="row pt-5 pb-4">
						<div class="col-lg-5">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">ABOUT US</h2>
							<p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer libero leo, convallis pharetra consectetur sed, posuere sed sapien. Nam tincidunt lacus vitae mattis malesuada. Integer lacinia quam mi, id condimentum ipsum commodo a. Nulla ullamcorper.</p>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">INSURANCE</h2>
							<ul class="list list-unstyled">
								<li><a href="#" class="text-decoration-none">Auto Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Life Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Business Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Travel Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Home Insurance</a></li>
								<li><a href="#" class="text-decoration-none">Others</a></li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">QUICK LINKS</h2>
							<ul class="list list-unstyled">
								<li>
									<a href="demo-insurance.html">
										Home
									</a>
								</li>
								<li>
									<a href="demo-insurance-about-us.html">
										About Us
									</a>
								</li>
								<li>
									<a href="demo-insurance-insurances.html">
										Insurances
									</a>
								</li>
								<li>
									<a href="demo-insurance-agents.html">
										Agents
									</a>
								</li>
								<li>
									<a href="demo-insurance-blog.html">
										Blog
									</a>
								</li>
								<li>
									<a href="demo-insurance-contact.html">
										Contact
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-3">
							<h2 class="custom-primary-font text-color-light custom-fontsize-6 mb-3">CONTACT US</h2>
							<p>Porto Insurance 123<br> Porto Blvd, Suite</p>
							<span class="d-block text-color-light custom-fontsize-5 mb-2">Call: <a href="tel:+1234567890" class="text-decoration-none text-color-light custom-fontsize-5">123-456-7890</a></span>
							<span class="d-block text-color-light custom-fontsize-5">Email: <a href="mailto:you@domain.com" class="text-decoration-none text-color-light custom-fontsize-5">info@porto.com</a></span>
							@include('porto.partials.header-social-icons.header-social-icons-10')
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-19', ['key' => 'footer-copyright.footer-copyright-19'])
			</footer>
@endsection
