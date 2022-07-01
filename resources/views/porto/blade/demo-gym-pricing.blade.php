@extends('porto.app')
@section('header')
@include('porto.partials.header.header-106')
@endsection

@section('main')
<div role="main" class="main">
				
				<section class="section section-no-border section-light custom-padding-top-1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h1 class="font-weight-bold text-color-primary mt-4 mb-0">Pricing</h1>
								<h4 class="font-weight-bold text-color-quaternary">The perfect plan for you</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet laoreet lorem, a imperdiet sapien tincidunt at. Vivamus sed libero ut diam feugiat sagittis sit amet in justo.</p>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-quaternary section-center section-no-border m-0">
					<div class="container">						
						<div class="row justify-content-center">
							<div class="col-sm-9 col-md-7 col-lg-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
								@include('porto.partials.thumb-info.thumb-info-139')
							</div>
							<div class="col-sm-9 col-md-7 col-lg-4 custom-sm-margin-1 custom-xs-margin-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000">
								@include('porto.partials.thumb-info.thumb-info-140')
							</div>
							<div class="col-sm-9 col-md-7 col-lg-4 custom-sm-margin-1 custom-xs-margin-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2000">
								@include('porto.partials.thumb-info.thumb-info-141')
							</div>
						</div>
					</div>
				</section>

				<section class="section section-center section-no-border section-light">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8 col-lg-4">
								<img src="img/demos/gym/icons/trainer-colored.png" class="mb-2" alt>
								<h2 class="font-weight-bold text-color-quaternary">Trainers</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit, felis nec gravida lobortis, est felis convallis lacus, vitae commodo metus ipsum.</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="demo-gym-staff.html" title="Meet The Staff">Meet the Staff</a>
							</div>
							<div class="col-md-8 col-lg-4 custom-sm-margin-1">
								<img src="img/demos/gym/icons/member-colored.png" class="mb-2" alt>
								<h2 class="font-weight-bold text-color-quaternary">Become a Member</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit, felis nec gravida lobortis, est felis convallis lacus, vitae commodo metus ipsum.</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="demo-gym-contact-us.html" title="Join Now">Join Now</a>
							</div>
							<div class="col-md-8 col-lg-4 custom-sm-margin-1">
								<img src="img/demos/gym/icons/group-fitness-colored.png" class="mb-2" alt>
								<h2 class="font-weight-bold text-color-quaternary">Group Fitness</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit, felis nec gravida lobortis, est felis convallis lacus, vitae commodo metus ipsum.</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="demo-gym-classes.html" title="Learn More">Learn More</a>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-155')
@endsection
