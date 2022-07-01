@extends('porto.app')
@section('header')
@include('porto.partials.header.header-81')
@endsection

@section('main')
<div role="main" class="main">

				@include('porto.partials.page-header.page-header-128')

								<div class="container py-5 p-relative z-index-2">
									<div class="row">
										<div class="col-lg-9 pb-5">
											<article>

												<p class="text-uppercase text-1 mb-3 text-color-default"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>

												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
												<p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
												<p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>

												<!-- AddThis Button BEGIN -->
												<div class="addthis_toolbox addthis_default_style ">
													<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
													<a class="addthis_button_tweet"></a>
													<a class="addthis_button_pinterest_pinit"></a>
													<a class="addthis_counter addthis_pill_style"></a>
												</div>
												<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
												<!-- AddThis Button END -->

												<hr class="my-5">

												<div class="post-block post-author">
													<h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3">Author</h3>
													<div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
														<a href="#">
															<img src="img/avatars/avatar.jpg" class="rounded-circle" alt="">
														</a>
													</div>
													<p><strong class="name"><a href="#" class="text-4 text-dark pb-2 pt-2 d-block">John Doe</a></strong></p>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.</p>
												</div>

												<hr class="my-5">

												<div id="comments" class="post-block post-comments">
													<h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3">3 comments for "An Interview with John Doe"</h3>

													<ul class="comments">
														<li>
															<div class="comment">
																<div class="img-thumbnail img-thumbnail-no-borders bg-transparent d-none d-sm-block">
																	<img class="avatar rounded-circle" alt="" src="img/avatars/avatar-2.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong class="text-dark">John Doe</strong>
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
																			<img class="avatar rounded-circle" alt="" src="img/avatars/avatar-3.jpg">
																		</div>
																		<div class="comment-block">
																			<div class="comment-arrow"></div>
																			<span class="comment-by">
																				<strong class="text-dark">John Doe</strong>
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
																			<img class="avatar rounded-circle" alt="" src="img/avatars/avatar-4.jpg">
																		</div>
																		<div class="comment-block">
																			<div class="comment-arrow"></div>
																			<span class="comment-by">
																				<strong class="text-dark">John Doe</strong>
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
																	<img class="avatar rounded-circle" alt="" src="img/avatars/avatar.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong class="text-dark">John Doe</strong>
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
																	<img class="avatar rounded-circle" alt="" src="img/avatars/avatar.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong class="text-dark">John Doe</strong>
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

													<h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3 mt-5">Leave a Reply</h3>

													<form class="contact-form p-0" action="php/contact-form.php" method="POST">			
														<div class="p-2">
															<div class="form-row">
																<div class="form-group col-lg-6">
																	<label class="required mb-1 font-weight-bold text-dark">Full Name</label>
																	<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-color-quaternary bg-color-tertiary py-4 px-3 border-0 box-shadow-none" name="name" id="name" required>
																</div>
																<div class="form-group col-lg-6">
																	<label class="required mb-1 font-weight-bold text-dark">Email Address</label>
																	<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-color-quaternary bg-color-tertiary py-4 px-3 border-0 box-shadow-none" name="email" id="email" required>
																</div>
															</div>
															<div class="form-row">
																<div class="form-group col">
																	<label class="required mb-1 font-weight-bold text-dark">Comment</label>
																	<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-color-quaternary bg-color-tertiary px-3 border-0 box-shadow-none" name="message" id="message" required></textarea>
																</div>
															</div>
															<div class="form-row">
																<div class="form-group col mb-0">
																	<input type="submit" value="Post Comment" class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-dark custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-btn-with-arrow px-4 py-3" data-loading-text="Loading...">
																</div>
															</div>
														</div>
													</form>

												</div>
											</article>
										</div>
										<div class="col-lg-3 pt-4 pt-lg-0">
											@include('porto.partials.sidebar.sidebar-18')
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
