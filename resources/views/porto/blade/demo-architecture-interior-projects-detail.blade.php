@extends('porto.app')
@section('header')
@include('porto.partials.header.header-12')
@endsection

@section('main')
<div role="main" class="main">
				@include('porto.partials.page-header.page-header-54')

				<section class="section section-height-3 bg-light border-0 m-0">
					<div class="container container-xl-custom">
						<div class="row">
							<div class="col text-center">
								<p class="text-4 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nunc in enim laoreet ornare. Nullam tincidunt tempor ligula eu dignissim. Nam semper dui quis congue mollis.<br>Nam at tellus ultricies, tincidunt quam non, rhonus mauris. Nullam gravida molestie lorem, et euismod metus feugiat ac.</p>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">

								<div class="row">
									<div class="col">

										<div class="lightbox mt-0" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
											<div class="row portfolio-list">
												<div class="col-lg-12 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
													@include('porto.partials.portfolio-item.portfolio-item-27', ['key' => 'portfolio-item.portfolio-item-27'])
												</div>
												<div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
													@include('porto.partials.portfolio-item.portfolio-item-27', ['key' => 'portfolio-item.portfolio-item-28'])
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
							<div class="col-lg-6 mt-4 mt-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">

								@include('porto.partials.sidebar.sidebar-8')

							</div>

						</div>

					</div>
				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-57')
@endsection
