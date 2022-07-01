@extends('porto.app')
@section('header')
@include('porto.partials.header.header-318')
@endsection

@section('main')
<div role="main" class="main">
				
				<section class="section border-0 m-0 py-3 py-lg-5">

					<div class="container py-md-4">

						<div class="row">
							<div class="col text-center pb-5">
								<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank">
									<img alt="Porto" class="img-fluid" src="img/blog/blog-ad-2.jpg">
								</a>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="blog-posts recent-posts">
									
									<div id="portfolioLoadMoreWrapper" class="row masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}" data-total-pages="3" data-ajax-url="ajax/index-blog-4-ajax-load-more-">


										<div class=porto.partialsault-style col-md-6">
											@include('porto.partials.post.post-168')
										</div>
porto.partials
										<div class="masonry-item no-default-style col-md-6">
											@include('porto.partials.post.post-169')
										</div>porto.partials

										<div class="masonry-item no-default-style col-md-6">
											@include('porto.partials.post.post-170')
										</div>

										<div class=porto.partialsault-style col-md-6">
											@include('porto.partials.post.post-171')
										</div>
porto.partials
										<div class="masonry-item no-default-style col-md-6">
											@include('porto.partials.post.post-172')
										</div>porto.partials

										<div class="masonry-item no-default-style col-md-6">
											@include('porto.partials.post.post-173')
										</div>

										<div class=porto.partialsault-style col-md-6">
											@include('porto.partials.post.post-174')
										</div>
porto.partials
										<div class="masonry-item no-default-style col-md-6">
											@include('porto.partials.post.post-175')
										</div>porto.partials

										<div class="masonry-item no-default-style col-md-6">
											@include('porto.partials.post.post-176')
										</div>

										<div class="masonry-item no-default-style col-md-6">
											@include('porto.partials.post.post-177')
										</div>

										<div class="masonry-item no-default-style col-md-6">
											@include('porto.partials.post.post-178')
										</div>

										<div class="masonry-item no-default-style col-md-6">
											@include('porto.partials.post.post-179')
										</div>


									</div>

									<div id="portfolioLoadMoreBtnWrapper" class="row">
										<div class="col text-center">

											<div id="portfolioLoadMoreLoader" class="portfolio-load-more-loader" style="min-height: 61px;">
												<div class="bounce-loader">
													<div class="bounce1"></div>
													<div class="bounce2"></div>
													<div class="bounce3"></div>
												</div>
											</div>

											<button id="portfolioLoadMore" class="btn btn-portfolio-infinite-scroll btn-primary font-weight-bold text-3 px-5 py-3">LOAD MORE...</button>
										</div>
									</div>

								</div>
							</div>

						</div>

						<div class="row">
							<div class="col text-center pt-5">
								<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank">
									<img alt="Porto" class="img-fluid" src="img/blog/blog-ad-3.jpg">
								</a>
							</div>
						</div>

					</div>

				</section>

			</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-543')
@endsection
