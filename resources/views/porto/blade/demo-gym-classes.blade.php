@extends('porto.app')
@section('header')
@include('porto.partials.header.header-104')
@endsection

@section('main')
<div role="main" class="main">
				
				<section class="section section-no-border section-light custom-padding-top-1 mb-0">
					<div class="container">
						<div class="row mt-4">
							<div class="col">
								<h1 class="font-weight-bold text-color-primary mb-0">Classes</h1>
								<h4 class="font-weight-bold text-color-quaternary">One is for you</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet laoreet lorem, a imperdiet sapien tincidunt at. Vivamus sed libero ut diam feugiat sagittis sit amet in justo.</p>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-quaternary section-center section-no-border m-0">
					<div class="container">
						<div class="row justify-content-center mb-4 mb-md-0 mb-lg-5">
							<div class="col-md-8 col-lg-4">
								@include('porto.partials.thumb-info.thumb-info-133')
							</div>
							<div class="col-md-8 col-lg-4 custom-sm-margin-2">
								@include('porto.partials.thumb-info.thumb-info-134')
							</div>
							<div class="col-md-8 col-lg-4 custom-sm-margin-2">
								@include('porto.partials.thumb-info.thumb-info-135')
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-8 col-lg-4 custom-sm-margin-2 custom-xs-margin-1" data-appear-animation-delay="600">
								@include('porto.partials.thumb-info.thumb-info-136')
							</div>
							<div class="col-md-8 col-lg-4 custom-sm-margin-2">
								@include('porto.partials.thumb-info.thumb-info-137')
							</div>
							<div class="col-md-8 col-lg-4 custom-sm-margin-2">
								@include('porto.partials.thumb-info.thumb-info-138')
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-155')
@endsection
