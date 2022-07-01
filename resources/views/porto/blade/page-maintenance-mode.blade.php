@extends('porto.app')
@section('header')
@include('porto.partials.header.header-352')
@endsection

@section('main')
<div role="main" class="main" style="min-height: calc(100vh - 393px);">
				<div class="container">
					<div class="row mt-5">
						<div class="col text-center">
							<div class="logo">
								<a href="index.html">
									<img width="100" height="48" src="img/logo-default-slim.png" alt="Porto">
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>
					<div class="row">
						<div class="col text-center">
							<div class="overflow-hidden mb-2">
								<h2 class="font-weight-normal text-7 mb-0 appear-animation" data-appear-animation="maskUp"><strong class="font-weight-extra-bold">Maintenance Mode</strong></h2>
							</div>
							<div class="overflow-hidden mb-1">
								<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">The website is undergoing some scheduled maintenance.<br>Please come back later.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
									@include('porto.partials.feature-box.feature-box-304')
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
									@include('porto.partials.feature-box.feature-box-305')
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
									@include('porto.partials.feature-box.feature-box-306')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection

@section('footer')
<footer id="footer">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3 pl-3 pl-md-0">
								<img alt="Porto Website Template" src="img/logo-footer.png" height="32">
							</a>
						</div>
						<div class="col-md-8 d-flex justify-content-center justify-content-md-end mb-4 mb-lg-0">
							<div class="row">
								<div class="col-md-6 mb-3 mb-md-0">
									<div class="ml-3 text-center text-md-right">
										<h5 class="text-3 mb-0 text-color-light">NEW YORK</h5>
										<p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="pl-1">(123) 465-7890</span></p>            
									</div>
								</div>
								<div class="col-md-6">
									<div class="ml-3 text-center text-md-right">
										<h5 class="text-3 mb-0 text-color-light">LOS ANGELES</h5>
										<p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="pl-1">(123) 465-7890</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-14', ['key' => 'footer-copyright.footer-copyright-14'])
			</footer>
@endsection
