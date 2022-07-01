@extends('porto.app')
@section('header')
@include('porto.partials.header.header-71')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section section-tertiary section-no-border pb-3 mt-0">
					<div class="container">
						<div class="row justify-content-end mt-4">
							<div class="col-lg-10 pt-4 mt-4 text-right">
								<h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Services</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row pt-2 mb-4">
						<div class="col-lg-3">
							@include('porto.partials.sidebar.sidebar-12')

						</div>
						<div class="col-lg-9">

							<h2 class="mb-2">General Construction</h2>

							<img class="img-fluid float-right ml-5 mb-4 mt-4" src="img/demos/construction/icons/construction.png" alt="">

							<p class="lead mb-4 mt-4">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittisem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbiacumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

							<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

							<div class="row">
								<div class="col-lg-5">
									<p class="pb-4">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat. Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare.</p>
								</div>
								<div class="col-lg-7">
									@include('porto.partials.owl-carousel.owl-carousel-52')
								</div>
							</div>

							<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

							<h4 class="mt-4 mb-3">Our Process</h4>

							<ul class="list list-icons list-primary mt-4 mb-4">
								<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
								<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Amet orci quis arcu vestibulum vestibulum.</li>
								<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Orci quis arcu vestibulum vestibulum.</li>
								<li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fas fa-check"></i> Fuscesit amet orci quis arcu vestibulum vestibulum.</li>
							</ul>

						</div>
					</div>

				</div>
			</div>
@endsection

@section('footer')
<footer id="footer">
				<div class="container">
					<div class="row pt-4 pb-5 text-center text-md-left">
						<div class="col-md-3">
							<a href="demo-construction.html">
								<img alt="Porto" class="img-fluid logo" width="110" src="img/demos/construction/logo-construction-small.png">
							</a>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-lg-6 mb-2">
									<h4>Navigation</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-6 mb-0">
									<ul class="list list-footer-nav">
										<li>
											<a href="demo-construction.html">
												Home
											</a>
										</li>
										<li>
											<a href="demo-construction-company.html">
												Company
											</a>
										</li>
										<li>
											<a href="demo-construction-services.html">
												Services
											</a>
										</li>
									</ul>
								</div>
								<div class="col-6">
									<ul class="list list-footer-nav">
										<li>
											<a href="demo-construction-projects.html">
												Projects
											</a>
										</li>
										<li>
											<a href="demo-construction-blog.html">
												Blog
											</a>
										</li>
										<li>
											<a href="demo-construction-contact.html">
												Contact
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<h4>Newsletter</h4>

							<div class="newsletter">

								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger d-none" id="newsletterError"></div>

								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-append">
											<button class="btn btn-light" type="submit"><i class="icon-paper-plane icons"></i></button>
										</span>
									</div>
								</form>

							</div>

							<p><i class="fas fa-phone"></i> (123) 456-789 <i class="far fa-envelope ml-2"></i> <a href="mailto:mail@example.com">mail@example.com</a></p>

						</div>
					</div>

					@include('porto.partials.footer-copyright.footer-copyright-13', ['key' => 'footer-copyright.footer-copyright-13'])

				</div>
			</footer>
@endsection
