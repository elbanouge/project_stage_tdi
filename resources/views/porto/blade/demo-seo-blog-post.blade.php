@extends('porto.app')
@section('header')
@include('porto.partials.header.header-192')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-203')

				<div class="container py-4">

					<div class="row">
						<div class="col-lg-3 order-lg-2">
							@include('porto.partials.sidebar.sidebar-40')
						</div>
						<div class="col-lg-9 order-lg-1">
							<div class="blog-posts">

								<div class="row">
									<div class="col">
										<article class="border-bottom-0">
											@include('porto.partials.thumb-info.thumb-info-377')
											<h2 class="font-weight-semibold custom-fs-1 line-height-3 ls-0 mb-3 text-6"><a href="demo-seo-blog-post.html" class="text-color-dark text-6 text-decoration-none">You can now automatically set your browser history to be deleted</a></h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
											<p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
											<p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>
											<p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Curabitur nulla dui, fermentum sed dapibus at, adipiscing eget nisi. Aenean iaculis vehicula imperdiet. Donec suscipit leo sed metus vestibulum pulvinar. Phasellus bibendum magna nec tellus fringilla faucibus. Phasellus mollis scelerisque volutpat. Ut sed molestie turpis. Phasellus ultrices suscipit tellus, ac vehicula ligula condimentum et.</p>
											<p>Aenean metus nibh, molestie at consectetur nec, molestie sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec euismod urna. Donec gravida pharetra ipsum, non volutpat ipsum sagittis a. Phasellus ut convallis ipsum. Sed nec dui orci, nec hendrerit massa. Curabitur at risus suscipit massa varius accumsan. Proin eu nisi id velit ultrices viverra nec condimentum magna. Ut porta orci quis nulla aliquam at dictum mi viverra. Maecenas ultricies elit in tortor scelerisque facilisis. Mauris vehicula porttitor lacus, vel pretium est semper non. Ut accumsan rhoncus metus non pharetra. Quisque luctus blandit nisi, id tempus tellus pulvinar eu. Nam ornare laoreet mi a molestie. Donec sodales scelerisque congue. </p>

											<div class="post-block mt-5 post-share">
												<h4 class="mb-3">Share this Post</h4>

												<!-- AddThis Button BEGIN -->
												<div class="addthis_toolbox addthis_default_style ">
													<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
													<a class="addthis_button_tweet"></a>
													<a class="addthis_button_pinterest_pinit"></a>
													<a class="addthis_counter addthis_pill_style"></a>
												</div>
												<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
												<!-- AddThis Button END -->

											</div>

											<div class="post-block mt-4 pt-2 post-author">
												<h4 class="mb-3">Author</h4>
												<div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
													<a href="blog-post.html">
														<img src="img/avatars/avatar.jpg" alt="">
													</a>
												</div>
												<p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block">John Doe</a></strong></p>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
											</div>

											<div id="comments" class="post-block mt-5 post-comments">
												<h4 class="mb-3">Comments (3)</h4>

												<ul class="comments">
													<li>
														<div class="comment">
															<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
																<img class="avatar" alt="" src="img/avatars/avatar-2.jpg">
															</div>
															<div class="comment-block">
																<div class="comment-arrow"></div>
																<span class="comment-by">
																	<strong>John Doe</strong>
																	<span class="float-right">
																		<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																	</span>
																</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
																<span class="date float-right">January 12, 2021 at 1:38 pm</span>
															</div>
														</div>

														<ul class="comments reply">
															<li>
																<div class="comment">
																	<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
																		<img class="avatar" alt="" src="img/avatars/avatar-3.jpg">
																	</div>
																	<div class="comment-block">
																		<div class="comment-arrow"></div>
																		<span class="comment-by">
																			<strong>John Doe</strong>
																			<span class="float-right">
																				<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																			</span>
																		</span>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																		<span class="date float-right">January 12, 2021 at 1:38 pm</span>
																	</div>
																</div>
															</li>
															<li>
																<div class="comment">
																	<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
																		<img class="avatar" alt="" src="img/avatars/avatar-4.jpg">
																	</div>
																	<div class="comment-block">
																		<div class="comment-arrow"></div>
																		<span class="comment-by">
																			<strong>John Doe</strong>
																			<span class="float-right">
																				<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																			</span>
																		</span>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																		<span class="date float-right">January 12, 2021 at 1:38 pm</span>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li>
														<div class="comment">
															<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
																<img class="avatar" alt="" src="img/avatars/avatar.jpg">
															</div>
															<div class="comment-block">
																<div class="comment-arrow"></div>
																<span class="comment-by">
																	<strong>John Doe</strong>
																	<span class="float-right">
																		<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																	</span>
																</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<span class="date float-right">January 12, 2021 at 1:38 pm</span>
															</div>
														</div>
													</li>
													<li>
														<div class="comment">
															<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
																<img class="avatar" alt="" src="img/avatars/avatar.jpg">
															</div>
															<div class="comment-block">
																<div class="comment-arrow"></div>
																<span class="comment-by">
																	<strong>John Doe</strong>
																	<span class="float-right">
																		<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																	</span>
																</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<span class="date float-right">January 12, 2021 at 1:38 pm</span>
															</div>
														</div>
													</li>
												</ul>

											</div>

											<div class="post-block mt-5 post-leave-comment">
												<h4 class="mb-3">Leave a comment</h4>

												<form class="contact-form p-4 rounded bg-color-grey" action="php/contact-form.php" method="POST">			
													<div class="p-2">
														<div class="form-row">
															<div class="form-group col-lg-6">
																<label class="required font-weight-bold text-dark">Full Name</label>
																<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
															</div>
															<div class="form-group col-lg-6">
																<label class="required font-weight-bold text-dark">Email Address</label>
																<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
															</div>
														</div>
														<div class="form-row">
															<div class="form-group col">
																<label class="required font-weight-bold text-dark">Comment</label>
																<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
															</div>
														</div>
														<div class="form-row">
															<div class="form-group col mb-0">
																<input type="submit" value="Post Comment" class="btn btn-primary btn-modern" data-loading-text="Loading...">
															</div>
														</div>
													</div>
												</form>
											</div>
										</article>
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
				<div class="container my-4">
					<div class="row py-5">
						<div class="col-lg-2 align-self-center mb-5 mb-lg-0">
							<a href="demo-seo.html">
								<img src="img/logo-default-slim.png" class="img-fluid" alt="Demo SEO" width="100">
							</a>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Contact Details</h4>
							<ul class="list list-unstyled">
								<li class="d-flex align-items-baseline"><i class="far fa-dot-circle text-color-primary mr-3"></i><div><span class="text-color-light">Address:</span> 1234 Street Name, City Name, USA</div></li>
								<li class="d-flex align-items-baseline"><i class="fab fa-whatsapp text-color-primary mr-3"></i><div><span class="text-color-light">Phone:</span> (123) 456-7890</div></li>
								<li class="d-flex align-items-baseline"><i class="far fa-envelope text-color-primary mr-3"></i><div><span class="text-color-light">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a></div></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Navigations</h4>
							<ul class="list list-unstyled">
								<li class="mb-1">
									<a class="link-hover-style-1" href="demo-seo.html#home">Home</a>
								</li>
								<li class="mb-1">
									<a class="link-hover-style-1" href="demo-seo.html#about">About</a>
								</li>
								<li class="mb-1">
									<a class="link-hover-style-1" href="demo-seo.html#solutions">Solutions</a>
								</li>
								<li class="mb-1">
									<a class="link-hover-style-1" href="demo-seo.html#pricing">Pricing</a>
								</li>
								<li class="mb-1">
									<a class="link-hover-style-1" href="demo-seo.html#reviews">Reviews</a>
								</li>
								<li class="mb-1">
									<a class="link-hover-style-1 active" href="demo-seo.html#news">News</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-4">
							<h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Newsletter</h4>
							<p>Enter your email address and get our offers and plans in to your mail.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100">
								<div class="input-group">
									<input class="form-control form-control-sm text-color-light custom-bg-color-1 rounded-0 border-0 px-4 text-3" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-primary text-color-light text-2 rounded-0 py-3 px-4" type="submit"><strong>SUBSCRIBE</strong></button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-39', ['key' => 'footer-copyright.footer-copyright-39'])
			</footer>
@endsection
