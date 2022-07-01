@extends('porto.app')
@section('header')
@include('porto.partials.header.header-258')
@endsection

@section('main')
<div role="main" class="main position-relative z-index-2 z-index-mobile-0">

				<div class="m-0 p-0">
					<div class="row">
						
						<div class="col-sm-6 col-lg-4 p-0 m-0">
							@include('porto.partials.portfolio-item.portfolio-item-89', ['key' => 'portfolio-item.portfolio-item-89'])
						</div>

						<div class="col-sm-6 col-lg-4 p-0 m-0">
							@include('porto.partials.portfolio-item.portfolio-item-90', ['key' => 'portfolio-item.portfolio-item-90'])
						</div>

						<div class="col-sm-6 col-lg-4 p-0 m-0">
							@include('porto.partials.portfolio-item.portfolio-item-90', ['key' => 'portfolio-item.portfolio-item-91'])
						</div>

						<div class="col-sm-6 col-lg-4 p-0 m-0">
							@include('porto.partials.portfolio-item.portfolio-item-90', ['key' => 'portfolio-item.portfolio-item-92'])
						</div>									

						<div class="col-sm-6 col-lg-4 p-0 m-0">
							@include('porto.partials.portfolio-item.portfolio-item-90', ['key' => 'portfolio-item.portfolio-item-93'])
						</div>

						<div class="col-sm-6 col-lg-4 p-0 m-0">
							@include('porto.partials.portfolio-item.portfolio-item-90', ['key' => 'portfolio-item.portfolio-item-94'])
						</div>

						<div class="col-sm-6 col-lg-4 p-0 m-0">
							@include('porto.partials.portfolio-item.portfolio-item-90', ['key' => 'portfolio-item.portfolio-item-95'])
						</div>

						<div class="col-sm-6 col-lg-4 p-0 m-0">
							@include('porto.partials.portfolio-item.portfolio-item-90', ['key' => 'portfolio-item.portfolio-item-96'])
						</div>

						<div class="col-sm-6 col-lg-4 p-0 m-0">
							@include('porto.partials.portfolio-item.portfolio-item-89', ['key' => 'portfolio-item.portfolio-item-97'])
						</div>

					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="m-0">
				<div class="container">
					<div class="row justify-content-center py-5">
						<div class="col-lg-8 text-center py-4">
							<div class="py-5">
								<h2 class="text-8 line-height-4 text-lg-10 line-height-lg-1 font-weight-semibold mt-5">Create your new website now!</h2>
								<p class="text-4 font-weight-normal px-3 mb-3">Porto Admin Integration - 100% Fully Responsive - Retina Ready - Google Fonts - Super Fast Top-Level Support - Customizable - RTL Support - SEO Friendly</p>
								<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-primary btn-rounded px-5 py-3 font-weight-semibold text-color-light mt-3 mb-5">PURCHASE PORTO</a>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-49', ['key' => 'footer-copyright.footer-copyright-49'])
			</footer>
@endsection
