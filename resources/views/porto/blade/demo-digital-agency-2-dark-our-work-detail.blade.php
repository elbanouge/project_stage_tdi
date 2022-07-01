@extends('porto.app')
@section('header')
@include('porto.partials.header.header-79')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-126')

								<div class="container py-5 mb-xl-5 p-relative z-index-2">
									<div class="row">
										<div class="col-xl-4">
											<div class="project-details pb-5">
												<h4 class="text-color-primary custom-text-8 font-weight-bolder mb-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Project Details</h4>
												<ul class="list-unstyled pl-0 pb-0 mb-0">
													<li class="mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
														<span class="text-color-quaternary custom-text-4"><strong class="text-color-light">Client: </strong>Okler Themes</span>
													</li>
													<li class="mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
														<span class="text-color-quaternary custom-text-4"><strong class="text-color-light">Year: </strong>2021</span>
													</li>
													<li class="mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
														<span class="text-color-quaternary custom-text-4"><strong class="text-color-light">Timeframe: </strong>6 months</span>
													</li>
													<li class="mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
														<span class="text-color-quaternary custom-text-4"><strong class="text-color-light">Main Service: </strong>UI Design, Web Development</span>
													</li>
													<li class="mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
														<span class="text-color-quaternary custom-text-4"><strong class="text-color-light">Return Over Investiment: </strong>90%</span>
													</li>
												</ul>
											</div>
											@include('porto.partials.sidebar.sidebar-15')
										</div>
										<div class="col-xl-8">
											<p class="custom-font-tertiary custom-text-7 line-height-6 mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut tellus ante. Nam suscipit urna risus.
											</p>
											<p class="custom-text-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at massa quam. Maecenas et sem accumsan, dictum arcu eu, consectetur eros. Nulla tortor est, lobortis vestibulum turpis sed, mollis commodo orci.
											</p>
											<p class="custom-text-4 mb-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
												Sed elementum cursus ante in suscipit. Etiam a arcu consequat, vehicula nisi in, efficitur lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In eu lectus ultricies, pellentesque libero vitae, dictum erat. 
											</p>
											<div class="row justify-content-center">
												<div class="col-md-6 col-lg-5 col-xl-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
													<img src="img/demos/digital-agency-2/gallery/gallery-our-work-1.jpg" class="img-fluid">
												</div>
												<div class="col-md-6 col-lg-5 col-xl-6 pt-4 mt-1 pt-md-0 mt-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
													<img src="img/demos/digital-agency-2/gallery/gallery-our-work-2.jpg" class="img-fluid">
												</div>
												<div class="col-lg-10 col-xl-12 pt-4 mt-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
													<img src="img/demos/digital-agency-2/gallery/gallery-our-work-3.jpg" class="img-fluid">
												</div>
											</div>
										</div>
									</div>
								</div>

				<section class="get-in-touch bg-color-after-secondary p-relative overflow-hidden">
					<span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
					<span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Let’s Get in Touch</p>
								<h4 class="text-color-light font-weight-bolder custom-text-10 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
									We’re interested in talking<br>
									about your business.
								</h4>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
								<a herf="#" class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">Let’s Talk!</a>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-123')
@endsection
