@extends('porto.app')
@section('header')
@include('porto.partials.header.header-144')
@endsection

@section('main')
<div role="main" class="main">
				<div class="container">
					<div class="row pt-5">

						<div class="col-lg-9 mb-4 mb-lg-0">

							<h1 class="mb-0">Practice Areas</h1>
							<div class="divider divider-primary divider-small mb-4">
								<hr class="mr-auto">
							</div>

							<p class="lead mb-4 mt-4">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
							
							@include('porto.partials.feature-box.feature-box-85')
							@include('porto.partials.feature-box.feature-box-86')
							@include('porto.partials.feature-box.feature-box-87')
							@include('porto.partials.feature-box.feature-box-88')
							@include('porto.partials.feature-box.feature-box-89')
							@include('porto.partials.feature-box.feature-box-90')

						</div>

						<div class="col-lg-3">
							@include('porto.partials.sidebar.sidebar-29')
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
