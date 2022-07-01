@extends('porto.app')
@section('header')
@include('porto.partials.header.header-123')
@endsection

@section('main')
<div role="main" class="main">
				
			@include('porto.partials.page-header.page-header-153')

			<section class="section bg-color-quaternary custom-padding-3 border-0 my-0">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 col-lg-4 mb-5">
							@include('porto.partials.thumb-info.thumb-info-174')
						</div>
						<div class="col-md-6 col-lg-4 mb-5">
							@include('porto.partials.thumb-info.thumb-info-175')
						</div>
						<div class="col-md-6 col-lg-4 mb-5">
							@include('porto.partials.thumb-info.thumb-info-176')
						</div>
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							@include('porto.partials.thumb-info.thumb-info-177')
						</div>
						<div class="col-md-6 col-lg-4 mb-5 mb-md-0">
							@include('porto.partials.thumb-info.thumb-info-178')
						</div>
						<div class="col-md-6 col-lg-4">
							@include('porto.partials.thumb-info.thumb-info-179')
						</div>
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
