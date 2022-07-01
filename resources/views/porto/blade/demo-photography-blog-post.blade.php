@extends('porto.app')
@section('header')
@include('porto.partials.header.header-171')
@endsection

@section('main')
<div role="main" class="main" id="main">
				
				@include('porto.partials.page-header.page-header-184')

				<div class="container">
					<div class="row mt-4 mb-4">
						<div class="col">
							<article class="our-blog-item blog-post mt-4">
								<span class="image-wrapper">
									<img src="img/demos/photography/blog/blog-post-1.jpg" alt="" class="img-fluid">
								</span>
								<span class="category text-uppercase bg-color-quaternary">
									Landscape
								</span>
								<div class="post-infos">
									<div class="share">
										<div class="share-icons bg-color-quaternary">
											<a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
											<a href="#" class="text-decoration-none" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
											<a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
											<i class="fas fa-share-alt"></i>
										</div>
									</div>
									<span class="post-date">
										31 NOV 2021
									</span>
									<h1 class="font-weight-normal mb-4">
										Incredible Places
									</h1>
									
									<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae nunc, viverra nisl eget, dictum eros. Maecenas sit amet iaculis massa.</p>

									<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae nunc, viverra nisl eget, dictum eros. Maecenas sit amet iaculis massa.</p>

									@include('porto.partials.owl-carousel.owl-carousel-105')
									@include('porto.partials.testimonial.testimonial-67')
								</div>
								<div class="author-info bg-color-primary">
									<div class="row">
										<div class="col-lg-2 col-lg-offset-1 text-center">										
											<img src="img/demos/photography/blog/blog-post-author-photo.jpg" alt="" class="img-fluid border-rounded mx-auto">
										</div>
										<div class="col-lg-8">
											<h3 class="text-color-light font-weight-bold mb-1 text-4">Jessica Doe</h3>
											<span class="designation">Photographer</span>
											<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur rid.</p>
										</div>
									</div>
								</div>
							</article>
							
						</div>	
					</div>
				</div>
				<section class="post-comments">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="text-primary font-weight-normal custom-font-size-1">Comments (3)</h2>
								<ul class="comments">
									<li>
										<div class="comment">
											<div class="img-thumbnail d-none d-sm-block">
												<img class="avatar" alt="" src="img/demos/photography/blog/blog-post-comment-author-1.jpg">
											</div>
											<div class="comment-block">
												<span class="comment-by">
													<strong>John Doe</strong>
													<span class="float-right">
														<span> <a href="#" class="btn btn-quaternary btn-outline text-uppercase font-weight-semibold">Reply</a></span>
													</span>
												</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
											</div>
										</div>

										<ul class="comments reply">
											<li>
												<div class="comment">
													<div class="img-thumbnail d-none d-sm-block">
														<img class="avatar" alt="" src="img/demos/photography/blog/blog-post-comment-author-2.jpg">
													</div>
													<div class="comment-block">
														<span class="comment-by">
															<strong>John Doe</strong>
															<span class="float-right">
																<span> <a href="#" class="btn btn-quaternary btn-outline text-uppercase font-weight-semibold">Reply</a></span>
															</span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="comment">
													<div class="img-thumbnail d-none d-sm-block">
														<img class="avatar" alt="" src="img/demos/photography/blog/blog-post-comment-author-3.jpg">
													</div>
													<div class="comment-block">
														<span class="comment-by">
															<strong>John Doe</strong>
															<span class="float-right">
																<span> <a href="#" class="btn btn-quaternary btn-outline text-uppercase font-weight-semibold">Reply</a></span>
															</span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="comment">
											<div class="img-thumbnail d-none d-sm-block">
												<img class="avatar" alt="" src="img/demos/photography/blog/blog-post-comment-author-2.jpg">
											</div>
											<div class="comment-block">
												<span class="comment-by">
													<strong>John Doe</strong>
													<span class="float-right">
														<span> <a href="#" class="btn btn-quaternary btn-outline text-uppercase font-weight-semibold">Reply</a></span>
													</span>
												</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</div>
									</li>
									<li>
										<div class="comment">
											<div class="img-thumbnail d-none d-sm-block">
												<img class="avatar" alt="" src="img/demos/photography/blog/blog-post-comment-author-1.jpg">
											</div>
											<div class="comment-block">
												<span class="comment-by">
													<strong>John Doe</strong>
													<span class="float-right">
														<span> <a href="#" class="btn btn-quaternary btn-outline text-uppercase font-weight-semibold">Reply</a></span>
													</span>
												</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="leave-comment bg-color-light">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="text-primary font-weight-normal custom-font-size-1">Leave a comment</h2>
								<form class="form" action="" method="post">
									<div class="form-row">
										<div class="form-group col-lg-6">
											<input type="text" value="" maxlength="100" class="form-control" name="name" placeholder="Name*">
										</div>
										<div class="form-group col-lg-6">
											<input type="email" value="" maxlength="100" class="form-control" name="email" placeholder="Email*">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment" placeholder="Comment*"></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="submit" value="Submit" class="btn btn-quaternary btn-outline btn-lg text-uppercase font-weight-semibold" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>

				<div id="photographyLightbox" class="mfp-hide">
					<div class="thumb-gallery">
						@include('porto.partials.owl-carousel.owl-carousel-106')
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="light narrow">
				@include('porto.partials.footer-copyright.footer-copyright-28', ['key' => 'footer-copyright.footer-copyright-28'])
			</footer>
@endsection
