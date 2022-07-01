@extends('porto.app')
@section('header')
@include('porto.partials.header.header-48')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-98')

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<article class="custom-post-event bg-color-light">
									<span class="custom-thumb-info-post-infos custom-blog-info">
										<ul>
											<li class="text-uppercase text-1">
												<i class="icon-calendar icons"></i>
												Oct 18
											</li>
										</ul>
									</span>
									<div class="post-event-content">
										<h2 class="font-weight-bold text-color-dark">Mauris ornare semeu lorem</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor dolor ac purus varius placerat. Quisque tortor purus, imperdiet eget feugiat vitae, sodales nec arcu. In porta nunc eget tellus congue consectetur. Donec fringilla, ligula et facilisis elementum, mi eros imperdiet arcu, et faucibus mauris eros ac nisl. Morbi libero nunc, mollis nec suscipit vel, laoreet posuere tortor. Ut egestas.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat, est a finibus lobortis, eros justo rutrum est, in fringilla arcu ligula ornare mauris. Donec efficitur mi eget eros suscipit rhoncus. Nulla aliquet faucibus est, a ornare neque pellentesque quis. Nunc id volutpat magna. Sed tincidunt convallis cursus. Quisque maximus nulla eget turpis condimentum congue. Lorem ipsum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat, est a finibus lobortis, eros justo rutrum est, in fringilla arcu ligula ornare mauris. Donec efficitur mi eget eros suscipit rhoncus. Nulla aliquet faucibus est, a ornare neque pellentesque quis. Nunc id volutpat magna. Sed tincidunt convallis cursus. Quisque maximus nulla eget turpis condimentum congue. Lorem ipsum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat, est a finibus lobortis, eros justo rutrum est, in fringilla arcu ligula ornare mauris. Donec efficitur mi eget eros suscipit rhoncus. Nulla aliquet faucibus est, a ornare neque pellentesque quis. Nunc id volutpat magna. Sed tincidunt convallis cursus. Quisque maximus nulla eget turpis condimentum congue. Lorem ipsum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat, est a finibus lobortis, eros justo rutrum est, in fringilla arcu ligula ornare mauris. Donec efficitur mi eget eros suscipit rhoncus. Nulla aliquet faucibus est, a ornare neque pellentesque quis. Nunc id volutpat magna. Sed tincidunt convallis cursus. Quisque maximus nulla eget turpis condimentum congue. Lorem ipsum.</p>
									</div>

									<div class="post-block post-author custom-xs-ml-0 mt-4 clearfix">
										<div class="img-thumbnail d-none d-sm-block custom-thumb-style-1 p-0">
											<a href="blog-post.html">
												<img src="img/demos/church/about-us/about-us-expect-1.jpg" alt class="img-fluid">
											</a>
										</div>
										<h4 class="text-color-dark text-uppercase custom-primary-font custom-line-height-1 text-1 mt-4 mb-0">
											<i class="icon-user icons font-weight-bold text-4 mr-1"></i>
											Author
										</h4>
										<p><strong class="name mb-3 text-color-dark">Joe Albert Doe</strong></p>
									</div>

									<div class="post-block post-comments custom-xs-ml-0 mt-1 clearfix">
										<h4 class="font-weight-bold text-color-dark custom-primary-font text-3 pt-2 mb-1">Comments <span class="comments-count">(3)</span>:</h4>

										<ul class="comments custom-comments-style">
											<li>
												<div class="comment">
													<div class="img-thumbnail d-none d-sm-block custom-thumb-style-1 p-0">
														<img class="avatar" alt="" src="img/demos/church/about-us/about-us-staff-2.jpg">
													</div>
													<div class="comment-block">
														<span class="comment-by">
															<strong class="text-uppercase text-color-dark">Henry Doe</strong>
															<span class="float-right">
																<span> <a class="text-1" href="#"><i class="fas fa-reply"></i> Reply</a></span>
															</span>
														</span>
														<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
														<span class="date float-right text-1 mb-4">October 12, 2021 at 1:38 pm</span>
													</div>
												</div>

												<ul class="comments reply">
													<li>
														<div class="comment">
															<div class="img-thumbnail d-none d-sm-block custom-thumb-style-1 p-0">
																<img class="avatar" alt="" src="img/demos/church/about-us/about-us-staff-3.jpg">
															</div>
															<div class="comment-block">
																<span class="comment-by">
																	<strong class="text-uppercase text-color-dark">Monica Doe</strong>
																	<span class="float-right">
																		<span> <a class="text-1" href="#"><i class="fas fa-reply"></i> Reply</a></span>
																	</span>
																</span>
																<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																<span class="date float-right text-1 mb-4">October 12, 2021 at 1:38 pm</span>
															</div>
														</div>
													</li>
													<li>
														<div class="comment">
															<div class="img-thumbnail d-none d-sm-block custom-thumb-style-1 p-0">
																<img class="avatar" alt="" src="img/demos/church/about-us/about-us-staff-4.jpg">
															</div>
															<div class="comment-block">
																<span class="comment-by">
																	<strong class="text-uppercase text-color-dark">Josie Doe</strong>
																	<span class="float-right">
																		<span> <a class="text-1" href="#"><i class="fas fa-reply"></i> Reply</a></span>
																	</span>
																</span>
																<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																<span class="date float-right text-1 mb-4">October 12, 2021 at 1:38 pm</span>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<div class="comment">
													<div class="img-thumbnail d-none d-sm-block custom-thumb-style-1 p-0">
														<img class="avatar" alt="" src="img/demos/church/about-us/about-us-staff-5.jpg">
													</div>
													<div class="comment-block">
														<span class="comment-by">
															<strong class="text-uppercase text-color-dark">Robert Doe</strong>
															<span class="float-right">
																<span> <a class="text-1" href="#"><i class="fas fa-reply"></i> Reply</a></span>
															</span>
														</span>
														<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														<span class="date float-right text-1 mb-4">October 12, 2021 at 1:38 pm</span>
													</div>
												</div>
											</li>
										</ul>

									</div>

									<div class="post-block post-leave-comment custom-xs-ml-0 pt-2">
										<h4 class="font-weight-bold text-color-dark custom-primary-font text-3 mt-3 pt-2 mb-2">Leave a comment:</h4>

										<form id="" action="" method="POST" class="custom-form-style-1">
											<div class="form-row">
												<div class="form-group col-lg-6">
													<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Your Name" required>
												</div>
												<div class="form-group col-lg-6">
													<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Your E-mail" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<textarea maxlength="5000" data-msg-required="Please enter your comment." rows="10" class="form-control" name="comment" id="message" placeholder="Your message" required></textarea>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<input type="submit" value="Post Comment" class="btn btn-primary custom-btn-style-1 text-uppercase float-right" data-loading-text="Loading...">
												</div>
											</div>
										</form>
									</div>
								</article>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-tertiary section-no-border m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-10">
								<span class="custom-secondary-font font-weight-bold custom-text-color-1 text-4">First time visitor</span>
								<h2 class="font-weight-bold custom-text-color-1 m-0">Find out more about the Church. <span class="font-weight-normal custom-secondary-font custom-font-italic">You belong here</span></h2>
							</div>
							<div class="col-lg-2 mt-4 mt-lg-0">
								<a href="demo-church-about-us.html" class="btn btn-primary custom-btn-style-1 text-uppercase">Visitors Guide</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border custom-position-relative custom-overflow-hidden p-0 m-0">
					<div class="custom-view-our-location text-center">
						<img src="img/demos/church/others/view-our-location.png" alt>
						<a href="#" onclick="initMapAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)" class="custom-view-location custom-secondary-font font-weight-bold text-color-light">View Our Location</a>
					</div>
					@include('porto.partials.google-map.google-map-9')
				</section>

			@include('porto.partials.footer.footer-92')
		</div>
@endsection

@section('footer')
@include('porto.partials.footer.footer-92')
@endsection
