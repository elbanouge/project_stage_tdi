@extends('porto.app')
@section('header')
@include('porto.partials.header.header-2')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-5')

				<div class="container-fluid">

					<div class="row">
						<div class="col">
							<div class="blog-posts">

								<div class="row px-3">

									<div class=porto.partialsol-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-12')
									</div>
porto.partials
									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-13')
									</div>porto.partials

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-14')
									</div>

									<div class=porto.partialsol-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-15')
									</div>
porto.partials
									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-16')
									</div>porto.partials

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-17')
									</div>

									<div class=porto.partialsol-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-18')
									</div>
porto.partials
									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-19')
									</div>porto.partials

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-20')
									</div>

									<div class=porto.partialsol-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-21')
									</div>
porto.partials
									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-22')
									</div>porto.partials

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-23')
									</div>

									<div class=porto.partialsol-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-24')
									</div>

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-25')
									</div>

									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5">
										@include('porto.partials.post.post-26')
									</div>

								</div>
	
								<div class="row px-3">
									<div class="col">porto.partials
										@include('porto.partials.pagination.pagination')
									</div>
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
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
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
