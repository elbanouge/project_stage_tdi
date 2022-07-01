@extends('porto.app')
@section('header')
@include('porto.partials.header.header-140')
@endsection

@section('main')
<div role="main" class="main">
				<div class="container">
					<div class="row pt-5">
						<div class="col-lg-7">
							<h1 class="mb-0">About Porto Law Firm</h1>
							<div class="divider divider-primary divider-small mb-4">
								<hr class="mr-auto">
							</div>
							<p class="lead mb-4 mt-4">Founded in 2001 by John Doe, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

							<img width="205" class="img-fluid float-left mr-4 mb-4 mt-1" alt="" src="img/office/our-office-8.jpg">

							<p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

							<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

							<h2 class="mt-5 mb-3">Expertise</h2>

							<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

						</div>
						<div class="col-lg-4 col-lg-offset-1">

							<h4 class="mt-5 mb-0">Our Commitment</h4>
							<div class="divider divider-primary divider-small mb-4">
								<hr class="mr-auto">
							</div>

							<div class="embed-responsive embed-responsive-16by9 mb-4">
								<iframe src="//player.vimeo.com/video/162724070?title=0&amp;byline=0&amp;portrait=0" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
							</div>

							<blockquote class="blockquote-secondary">
								<p class="text-4">"Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada."</p>
								<footer>John Doe <cite> - PARTNER</cite></footer>
							</blockquote>

							<h4 class="mt-5">Our History</h4>

							<div class="divider divider-primary divider-small mb-4">
								<hr class="mr-auto">
							</div>

							<ul class="list list-unstyled list-primary list-borders">
								<li class="pt-2 pb-2"><strong class="text-color-primary text-4">2021 - </strong> Moves its headquarters to a new building</li>
								<li class="pt-2 pb-2"><strong class="text-color-primary text-4">2014 - </strong> Porto creates its new brand</li>
								<li class="pt-2 pb-2"><strong class="text-color-primary text-4">2006 - </strong> Porto Office opens it doors in London</li>
								<li class="pt-2 pb-2"><strong class="text-color-primary text-4">2003 - </strong> Inauguration of the new office</li>
								<li class="pt-2 pb-2"><strong class="text-color-primary text-4">2001 - </strong> Porto goes into business</li>
							</ul>

						</div>
					</div>
				</div>
			</div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0">
				<div class="container py-4">
					<div class="row py-5">
						<div class="col-md-6 mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3 mb-3">
								<img alt="Porto Website Template" src="img/demos/law-firm/logo-law-firm-footer.png" class="opacity-7 top-auto bottom-10" height="32">
							</a>
							<p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">CONTACT US</h5>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
								<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h5 class="text-3 mb-3">FOLLOW US</h5>
							@include('porto.partials.header-social-icons.header-social-icons-13')
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-23', ['key' => 'footer-copyright.footer-copyright-23'])
			</footer>
@endsection
