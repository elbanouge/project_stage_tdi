@extends('porto.app')
@section('header')
@include('porto.partials.header.header-170')
@endsection

@section('main')
<div role="main" class="main" id="main">
				
					@include('porto.partials.page-header.page-header-183')

				<div class="container">

					<div class="row mt-4 pt-4 mb-4 pb-4">
						<div class="col-sm-4">
							@include('porto.partials.owl-carousel.owl-carousel-102')

							<h2 class="font-weight-bold mb-2 custom-font-size-1">Jessica Doe</h2>
							<h5 class="mb-4">photographer</h5>

							<div class="row mb-4">
								<div class="col-lg-6">
									<ul class="list list-icons list-icons-style-2 text-color-primary">
										<li><i class="fas fa-map-marker-alt"></i>New York - NY</li>
										<li><i class="fas fa-phone"></i>(123) 456-789</li>
										<li><a href="demo-photography-contact-me.html"><i class="far fa-envelope"></i>Contact Me</a></li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list list-icons list-icons-style-2 text-color-primary">
										<li><a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i>Facebook</a></li>
										<li><a target="_blank" href="http://www.facebook.com"><i class="fab fa-twitter"></i>Twitter</a></li>
										<li><a target="_blank" href="http://www.instagram.com"><i class="fab fa-instagram"></i>Instagram</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-8">

							<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad.</p>

							<img class="img-fluid float-sm-right ml-sm-4 mb-3" width="280" src="img/demos/photography/about/about-me-concept.jpg" alt="">

							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae nunc, viverra nisl eget, dictum eros. Maecenas sit amet iaculis massa. Sed dui tellus, pellentesque non enim eget, cursus sollicitudin tellus. Cras eget varius enim. Aenean ac libero finibus, varius nisi a, cursus magna. <strong>Vestibulum</strong> vitae massa purus. Etiam vulputate ullamcorper diam, a iaculis nulla placerat a. Aenean ac libero finibus, varius nisi a, cursus magna. Vestibulum vitae massa purus. Etiam vulputate ullamcorper diam, a iaculis nulla placerat a.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incept.</p>

							<h2 class="font-weight-normal mb-4 mt-4 pt-4">My History</h2>

							<ul class="list list-unstyled list-primary list-borders">
								<li class="pt-2 pb-2"><strong class="text-color-primary">2021 - </strong> History fact 1 lorem ipsum dolor ametorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium.</li>
								<li class="pt-2 pb-2"><strong class="text-color-primary">2014 - </strong> History fact 2 lorem ipsum dolor ametorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium lorem ipsum dolor ametorem ipsum dolor sit amet, consectetur addis.</li>
								<li class="pt-2 pb-2"><strong class="text-color-primary">2006 - </strong> History fact 3 lorem ipsum dolor sit.</li>
							</ul>

						</div>
					</div>

				</div>

				<section class="p-0 mb-0 mt-4">
					<div class="container-fluid p-0">
						@include('porto.partials.owl-carousel.owl-carousel-103')
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="light narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>
@endsection
