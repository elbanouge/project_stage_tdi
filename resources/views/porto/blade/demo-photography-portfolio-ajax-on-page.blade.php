@extends('porto.app')
@section('header')
@include('porto.partials.header.header-173')
@endsection

@section('main')
<div role="main" class="main" id="main">
				
				<div class="container-fluid">
					<div class="row">
						<div class="col px-0">
							<div id="porfolioDetailsAjaxBox" class="ajax-box ajax-box-init mb-4">

								<div class="bounce-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>

								<div class="ajax-box-content" id="porfolioDetailsAjaxBoxContent"></div>

							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<ul id="portfolioDetailLoadMoreWrapper" class="portfolioDetail-list row px-0" data-total-pages="2">
						<li class="col-md-6 col-lg-4 isotope-item">
							<div class="portfolio-detail-item">
								<span class="thumb-info-icons position-style-2 text-color-light">
									<span class="thumb-info-icon pictures bg-color-primary">
										6
										<i class="far fa-image"></i>
									</span>
								</span>
								@include('porto.partials.owl-carousel.owl-carousel-107')
							</div>
						</li>
						<li class="col-md-6 col-lg-4 isotope-item">
							<div class="portfolio-detail-item">
								<span class="thumb-info-icons position-style-2 text-color-light">
									<span class="thumb-info-icon pictures bg-color-primary">
										10
										<i class="far fa-image"></i>
									</span>
								</span>
								<a data-href="ajax/demo-photography-portfolio-ajax-on-page-slider.html" class="open-item" data-ajax-on-page>
									<div class="item-image-wrapper">
										<div class="item-image lazyload" data-bg-src="img/demos/photography/gallery/lifestyle/1-small.jpg"></div>
										<i class="fas fa-spinner fa-spin fa-fw"></i>
										<div class="sub-item-description">
											<h5 class="font-weight-light">On the Road</h5>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-4 isotope-item">
							<div class="portfolio-detail-item">
								<span class="thumb-info-icons position-style-2 text-color-light">
									<span class="thumb-info-icon pictures bg-color-primary">
										3
										<i class="far fa-image"></i>
									</span>
								</span>
								<a data-href="ajax/demo-photography-portfolio-ajax-on-page-slider.html" class="open-item" data-ajax-on-page>
									<div class="item-image-wrapper">
										<div class="item-image lazyload" data-bg-src="img/demos/photography/gallery/landscape/1-small.jpg"></div>
										<i class="fas fa-spinner fa-spin fa-fw"></i>
										<div class="sub-item-description">
											<h5 class="font-weight-light">Boats on River</h5>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-4 isotope-item">
							<div class="portfolio-detail-item">
								<span class="thumb-info-icons position-style-2 text-color-light">
									<span class="thumb-info-icon pictures bg-color-primary">
										5
										<i class="far fa-image"></i>
									</span>
								</span>
								<a data-href="ajax/demo-photography-portfolio-ajax-on-page-slider.html" class="open-item" data-ajax-on-page>
									<div class="item-image-wrapper">
										<div class="item-image lazyload" data-bg-src="img/demos/photography/gallery/travel/1-small.jpg"></div>
										<i class="fas fa-spinner fa-spin fa-fw"></i>
										<div class="sub-item-description">
											<h5 class="font-weight-light">Incredible Places</h5>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-4 isotope-item">
							<div class="portfolio-detail-item">
								<span class="thumb-info-icons position-style-2 text-color-light">
									<span class="thumb-info-icon pictures bg-color-primary">
										7
										<i class="far fa-image"></i>
									</span>
								</span>
								<a data-href="ajax/demo-photography-portfolio-ajax-on-page-slider.html" class="open-item" data-ajax-on-page>
									<div class="item-image-wrapper">
										<div class="item-image lazyload" data-bg-src="img/demos/photography/gallery/wedding/1-small.jpg"></div>
										<i class="fas fa-spinner fa-spin fa-fw"></i>
										<div class="sub-item-description">
											<h5 class="font-weight-light">The Wedding</h5>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-4 isotope-item">
							<div class="portfolio-detail-item">
								<span class="thumb-info-icons position-style-2 text-color-light">
									<span class="thumb-info-icon pictures bg-color-primary">
										6
										<i class="far fa-image"></i>
									</span>
								</span>
								<a data-href="ajax/demo-photography-portfolio-ajax-on-page-slider.html" class="open-item" data-ajax-on-page>
									<div class="item-image-wrapper">
										<div class="item-image lazyload" data-bg-src="img/demos/photography/gallery/family/3-small.jpg"></div>
										<i class="fas fa-spinner fa-spin fa-fw"></i>
										<div class="sub-item-description">
											<h5 class="font-weight-light">New Born</h5>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-4 isotope-item">
							<div class="portfolio-detail-item">
								<span class="thumb-info-icons position-style-2 text-color-light">
									<span class="thumb-info-icon pictures bg-color-primary">
										10
										<i class="far fa-image"></i>
									</span>
								</span>
								<a data-href="ajax/demo-photography-portfolio-ajax-on-page-slider.html" class="open-item" data-ajax-on-page>
									<div class="item-image-wrapper">
										<div class="item-image lazyload" data-bg-src="img/demos/photography/gallery/lifestyle/2-small.jpg"></div>
										<i class="fas fa-spinner fa-spin fa-fw"></i>
										<div class="sub-item-description">
											<h5 class="font-weight-light">The Cool Style</h5>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-4 isotope-item">
							<div class="portfolio-detail-item">
								<span class="thumb-info-icons position-style-2 text-color-light">
									<span class="thumb-info-icon pictures bg-color-primary">
										3
										<i class="far fa-image"></i>
									</span>
								</span>
								<a data-href="ajax/demo-photography-portfolio-ajax-on-page-slider.html" class="open-item" data-ajax-on-page>
									<div class="item-image-wrapper">
										<div class="item-image lazyload" data-bg-src="img/demos/photography/gallery/landscape/2-small.jpg"></div>
										<i class="fas fa-spinner fa-spin fa-fw"></i>
										<div class="sub-item-description">
											<h5 class="font-weight-light">Old Venice</h5>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-6 col-lg-4 isotope-item">
							<div class="portfolio-detail-item">
								<span class="thumb-info-icons position-style-2 text-color-light">
									<span class="thumb-info-icon pictures bg-color-primary">
										7
										<i class="far fa-image"></i>
									</span>
								</span>
								<a data-href="ajax/demo-photography-portfolio-ajax-on-page-slider.html" class="open-item" data-ajax-on-page>
									<div class="item-image-wrapper">
										<div class="item-image lazyload" data-bg-src="img/demos/photography/gallery/wedding/2-small.jpg"></div>
										<i class="fas fa-spinner fa-spin fa-fw"></i>
										<div class="sub-item-description">
											<h5 class="font-weight-light">The Day</h5>
										</div>
									</div>
								</a>
							</div>
						</li>
					</ul>
					<div id="portfolioDetailLoadMoreBtnWrapper" class="row">
						<div class="col text-center mb-3" style="min-height: 145px;">
							<div id="portfolioDetailLoadMoreLoader" class="portfolioDetail-load-more-loader load-more-loader">
								<div class="bounce-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>
							</div>

							<button id="portfolioDetailLoadMore" type="button" class="btn btn-quaternary btn-outline custom-border-radius font-weight-semibold text-uppercase mb-5">View More</button>
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="light narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>
@endsection
