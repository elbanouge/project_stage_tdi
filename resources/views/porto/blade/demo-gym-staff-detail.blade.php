@extends('porto.app')
@section('header')
@include('porto.partials.header.header-107')
@endsection

@section('main')
<div role="main" class="main">
				
				<section class="section section-no-border section-light custom-padding-top-1 mb-0">
					<div class="container">
						<div class="row mt-4">
							<div class="col-md-8 col-lg-9">
								<div class="pr-4">
									<h1 class="font-weight-bold text-color-primary mb-0">Jessica Doe</h1>
									<h4 class="font-weight-bold text-color-quaternary">Personal Trainer</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet laoreet lorem, a imperdiet sapien tincidunt at. Vivamus sed libero ut diam feugiat sagittis sit amet in justo. Nam quis massa nec lorem tempus egestas at quis eros.</p>
									<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet laoreet lorem, a imperdiet sapien tincidunt at. Vivamus sed libero ut diam feugiat sagittis sit amet in justo. Nam quis massa nec lorem tempus egestas at quis eros. Morbi non augue vel tortor feugiat commodo vitae sed dolor. Maecenas a nisi euismod, bibendum arcu quis, posuere massa. Morbi mattis dui sem. Phasellus vel rhoncus ligula.</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-3">
								@include('porto.partials.owl-carousel.owl-carousel-66')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-quaternary section-text-light m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h4 class="font-weight-bold text-color-light">Skills</h4>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-3">
								<ul class="list list-icons list-light text-color-light">
									<li><i class="fas fa-check"></i> Fitness Consultation</li>
									<li><i class="fas fa-check"></i> Professionals</li>
									<li><i class="fas fa-check"></i> Full Cardio</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul class="list list-icons list-light text-color-light">
									<li><i class="fas fa-check"></i> Conditioning</li>
									<li><i class="fas fa-check"></i> Sports</li>
									<li><i class="fas fa-check"></i> Consultation</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul class="list list-icons list-light text-color-light">
									<li><i class="fas fa-check"></i> Zumba</li>
									<li><i class="fas fa-check"></i> Nutrition</li>
									<li><i class="fas fa-check"></i> Spin</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul class="list list-icons list-light text-color-light">
									<li><i class="fas fa-check"></i> TRX</li>
									<li><i class="fas fa-check"></i> Fitness Consultation</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-center section-no-border section-light">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<h2 class="font-weight-bold text-color-quaternary appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><span class="text-color-primary">Get Up!</span> Challenge yourself today</h2>
								<p class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="150">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed sem ipsum. Proin efficitur dolor accumsan purus varius tempus nec a nulla. Aliquam id vulputate massa, a rhoncus justo. Nunc luctus non ipsum a cursus. Donec laoreet iaculis egestas. Nulla finibus sed ipsum a pretium. Mauris ut nisl nec metus.</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium text-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" href="demo-gym-about-us.html">About the Gym</a>
							</div>
						</div>
					</div>
				</section>
			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-155')
@endsection
