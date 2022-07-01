@extends('porto.app')
@section('header')
@include('porto.partials.header.header-12')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.page-header.page-header-53')

				<section class="section section-height-3 bg-light border-0 m-0">
					<div class="container container-xl-custom">
						<div class="row portfolio-list sort-destination pb-2">

							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-24', ['key' => 'portfolio-item.portfolio-item-18'])
							</div>
							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-24', ['key' => 'portfolio-item.portfolio-item-19'])
							</div>
							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-24', ['key' => 'portfolio-item.portfolio-item-20'])
							</div>
							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-24', ['key' => 'portfolio-item.portfolio-item-18'])
							</div>
							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-24', ['key' => 'portfolio-item.portfolio-item-19'])
							</div>
							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-24', ['key' => 'portfolio-item.portfolio-item-20'])
							</div>
							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-24', ['key' => 'portfolio-item.portfolio-item-18'])
							</div>
							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-24', ['key' => 'portfolio-item.portfolio-item-19'])
							</div>
							<div class="col-lg-4 isotope-item text-left">
								@include('porto.partials.portfolio-item.portfolio-item-24', ['key' => 'portfolio-item.portfolio-item-20'])
							</div>

						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-57')
@endsection
