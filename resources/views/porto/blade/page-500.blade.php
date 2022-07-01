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
				<section class="http-error py-0">
					<div class="row justify-content-center py-3">
						<div class="col-6 text-center">
							<div class="http-error-main">
								<h2 class="mb-0">500!</h2>
								<span class="text-6 font-weight-bold text-color-dark">UNEXPECTED ERROR</span>
								<p class="text-3 my-4 line-height-8">An unexpected error has occured. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
							</div>
							<a href="index.html" class="btn btn-primary btn-rounded btn-xl font-weight-semibold text-2 px-4 py-3 mt-1 mb-4"><i class="fas fa-angle-left pr-3"></i>GO BACK TO HOME PAGE</a>
						</div>
					</div>
				</section>
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
