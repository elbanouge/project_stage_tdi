@extends('porto.app')
@section('header')
@include('porto.partials.header.header-2')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-6')

				<div class="container-fluid p-0">

					<div class="row">
						<div class="col">
							<div class="blog-posts blog-posts-no-margins">

								<div class="row">

									<div class=porto.partialsol-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-27')
									</div>
porto.partials
									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-28')
									</div>porto.partials

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-29')
									</div>

									<div class=porto.partialsol-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-30')
									</div>
porto.partials
									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-31')
									</div>porto.partials

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-32')
									</div>

									<div class=porto.partialsol-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-33')
									</div>
porto.partials
									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-34')
									</div>porto.partials

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-35')
									</div>

									<div class=porto.partialsol-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-36')
									</div>
porto.partials
									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-37')
									</div>porto.partials

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-38')
									</div>

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-39')
									</div>

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-40')
									</div>

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 p-0">
										@include('porto.partials.post.post-41')porto.partials
									</div>

								</div>
	
							</div>
						</div>

					</div>

				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="mt-0">
				<div class="container">
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							<h5 class="text-3 mb-3">ABOUT THE BLOG</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna semper scelerisque.</p>
							<p class="mb-0">Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis ptent taciti sociosqu ad litora...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-3 mb-3">RECENT POSTS</h5>
							<ul class="list-unstyled mb-0">
								<li class="media mb-3 pb-1">
									<article class="d-flex">
										<a href="#">
											<img class="mr-3 rounded-circle" src="img/office/our-office-4-square.jpg" alt="" style="max-width: 70px;">
										</a>
										<div class="media-body">
											<a href="#">
												<h6 class="text-3 text-color-light opacity-8 ls-0 mb-1">Lorem ipsum dolor sit, consectetur adipiscing elit.</h6>
												<p class="text-2 mb-0">12:53 AM Dec 19th</p>
											</a>
										</div>
									</article>
								</li>
								<li class="media">
									<article class="d-flex">
										<a href="#">
											<img class="mr-3 rounded-circle" src="img/office/our-office-5-square.jpg" alt="" style="max-width: 70px;">
										</a>
										<div class="media-body">
											<a href="#">
												<h6 class="text-3 text-color-light opacity-8 ls-0 mb-1">Lorem ipsum dolor sit, consectetur adipiscing elit.</h6>
												<p class="text-2 mb-0">12:53 AM Dec 19th</p>
											</a>
										</div>
									</article>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-md-0">
							<h5 class="text-3 mb-3">RECENT COMMENTS</h5>
							<ul class="list-unstyled mb-0">
								<li class="mb-3 pb-1">
									<a href="#">
										<p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ml-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
										<p class="text-2 mb-0">12:55 AM Dec 19th</p>
									</a>
								</li>
								<li>
									<a href="#">
										<p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ml-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
										<p class="text-2 mb-0">12:55 AM Dec 19th</p>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3">CATEGORIES</h5>
							<p>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Gadgets</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Photography</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Lifestyle</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Fashion</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Recipes</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Travel</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Business</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Architecture</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Reviews</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Sports</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Videos</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Technology</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Design</span></a>
							</p>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-1', ['key' => 'footer-copyright.footer-copyright-1'])
			</footer>
@endsection
