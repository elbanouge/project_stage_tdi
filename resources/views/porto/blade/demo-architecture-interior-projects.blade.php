@extends('porto.app')
@section('header')
@include('porto.partials.header.header-12')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.page-header.page-header-55')

				<section class="section section-height-3 bg-light border-0 m-0">
					<div class="container container-xl-custom">
						<div class="row">
							<div class="col text-center">
								<p class="text-4 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nunc in enim laoreet ornare. Nullam tincidunt tempor ligula eu dignissim. Nam semper dui quis congue mollis.<br>Nam at tellus ultricies, tincidunt quam non, rhonus mauris. Nullam gravida molestie lorem, et euismod metus feugiat ac.</p>
							</div>
						</div>

						<div class="row portfolio-list sort-destination mb-3" data-sort-id="portfolio">
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-29', ['key' => 'portfolio-item.portfolio-item-29'])
							</div>
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-29', ['key' => 'portfolio-item.portfolio-item-30'])
							</div>
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-31', ['key' => 'portfolio-item.portfolio-item-31'])
							</div>
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-29', ['key' => 'portfolio-item.portfolio-item-32'])
							</div>
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-29', ['key' => 'portfolio-item.portfolio-item-33'])
							</div>
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-31', ['key' => 'portfolio-item.portfolio-item-34'])
							</div>
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-29', ['key' => 'portfolio-item.portfolio-item-35'])
							</div>
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-29', ['key' => 'portfolio-item.portfolio-item-36'])
							</div>
							<div class="col-lg-4 isotope-item">
								@include('porto.partials.portfolio-item.portfolio-item-31', ['key' => 'portfolio-item.portfolio-item-37'])
							</div>

						</div>

					</div>
				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-57')
@endsection
