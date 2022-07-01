@extends('porto.app')
@section('header')
@include('porto.partials.header.header-68')
@endsection

@section('main')
<div role="main" class="main">
				<section class="section section-tertiary section-no-border pb-3 mt-0">
					<div class="container">
						<div class="row justify-content-end mt-4">
							<div class="col-lg-10 pt-4 mt-4 text-right">
								<h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Company</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row pt-2">
						<div class="col-lg-3">
							@include('porto.partials.sidebar.sidebar-11')
						</div>
						<div class="col-lg-9">

							<section id="who-we-are" class="mb-4">
								@include('porto.partials.owl-carousel.owl-carousel-50')

								<h2 class="mb-0 text-color-dark">Who We Are</h2>
								<p class="lead mb-4 mt-4">Founded in 2001 by John Doe, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

								<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
							</section>

							<hr class="solid my-5">

							<section id="history" class="mb-4">
								<h2 class="mb-0 text-color-dark">History</h2>

								<div class="row">
									<div class="col-lg-7">
										<img class="float-left img-fluid mr-4 mb-3 mt-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" width="200" src="img/demos/construction/office/office-1.jpg" alt="">
										<p class="mt-4">Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
										<p class="mt-4">Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
									</div>
									<div class="col-lg-4">
										<ul class="list list-unstyled list-primary list-borders">
											<li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><strong class="text-color-primary text-4">2021 - </strong> Moves its headquarters to a new building</li>
											<li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100"><strong class="text-color-primary text-4">2014 - </strong> Porto creates its new brand</li>
											<li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200"><strong class="text-color-primary text-4">2006 - </strong> Porto opens it doors in London</li>
											<li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><strong class="text-color-primary text-4">2003 - </strong> Inauguration of the new office</li>
											<li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><strong class="text-color-primary text-4">2001 - </strong> Porto goes into business</li>
										</ul>
									</div>
								</div>
							</section>

							<hr class="solid my-5">

							<section id="mission-vision" class="mb-4">

								<div class="row mt-4">
									<div class="col-sm-6 text-center">
										@include('porto.partials.feature-box.feature-box-39')
									</div>
									<div class="col-sm-6 text-center">
										@include('porto.partials.feature-box.feature-box-40')
									</div>
								</div>

							</section>

							<hr class="solid my-5">

							<section id="leadership" class="mb-4">
								<h2 class="mb-0 text-color-dark">Leadership</h2>

								<div class="row mt-4">

									<div class="col-md-6">
										@include('porto.partials.thumb-info.thumb-info-79')

									</div>
									<div class="col-md-6">
										@include('porto.partials.thumb-info.thumb-info-80')

									</div>

								</div>

							</section>

							<hr class="solid my-5">

							<section id="partners" class="mb-4">
								<h2 class="mb-0 text-color-dark">Partners</h2>

								<div class="row mt-4">
									<div class="content-grid content-grid-dashed col mt-4 mb-4">
										<div class="row content-grid-row">
											<div class="content-grid-item col-sm-4 text-center">
												<div class="p-4">
													<img class="img-fluid" src="img/logos/logo-1.png" alt="">
												</div>
											</div>
											<div class="content-grid-item col-sm-4 text-center">
												<div class="p-4">
													<img class="img-fluid" src="img/logos/logo-2.png" alt="">
												</div>
											</div>
											<div class="content-grid-item col-sm-4 text-center">
												<div class="p-4">
													<img class="img-fluid" src="img/logos/logo-3.png" alt="">
												</div>
											</div>
										</div>
										<div class="row content-grid-row">
											<div class="content-grid-item col-sm-4 text-center">
												<div class="p-4">
													<img class="img-fluid" src="img/logos/logo-4.png" alt="">
												</div>
											</div>
											<div class="content-grid-item col-sm-4 text-center">
												<div class="p-4">
													<img class="img-fluid" src="img/logos/logo-4.png" alt="">
												</div>
											</div>
											<div class="content-grid-item col-sm-4 text-center">
												<div class="p-4">
													<img class="img-fluid" src="img/logos/logo-6.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

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
