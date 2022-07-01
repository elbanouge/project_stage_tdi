@extends('porto.app')
@section('header')
@include('porto.partials.header.header-107')
@endsection

@section('main')
<div role="main" class="main">
				
				<section class="section section-no-border section-light custom-padding-top-1 mb-0">
					<div class="container">
						<div class="row mt-4">
							<div class="col">
								<h1 class="font-weight-bold text-color-primary mb-0">Staff</h1>
								<h4 class="font-weight-bold text-color-quaternary">Real Pros</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet laoreet lorem, a imperdiet sapien tincidunt at. Vivamus sed libero ut diam feugiat sagittis sit amet in justo.</p>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-quaternary section-center section-no-border m-0">
					<div class="container">
						<div class="row justify-content-center mb-4 mb-md-0 mb-lg-5">
							<div class="col-md-6 col-lg-3">
								@include('porto.partials.thumb-info.thumb-info-142')
							</div>
							<div class="col-md-6 col-lg-3 custom-xs-margin-2">
								@include('porto.partials.thumb-info.thumb-info-143')
							</div>
							<div class="col-md-6 col-lg-3 custom-sm-margin-2">
								@include('porto.partials.thumb-info.thumb-info-144')
							</div>
							<div class="col-md-6 col-lg-3 custom-sm-margin-2">
								@include('porto.partials.thumb-info.thumb-info-145')
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-6 col-lg-3 custom-sm-margin-2 custom-xs-margin-1">
								@include('porto.partials.thumb-info.thumb-info-146')
							</div>
							<div class="col-md-6 col-lg-3 custom-sm-margin-2">
								@include('porto.partials.thumb-info.thumb-info-147')
							</div>
							<div class="col-md-6 col-lg-3 custom-sm-margin-2">
								@include('porto.partials.thumb-info.thumb-info-148')
							</div>
							<div class="col-md-6 col-lg-3 custom-sm-margin-2">
								@include('porto.partials.thumb-info.thumb-info-149')
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-155')
@endsection
