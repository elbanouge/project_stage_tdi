@extends('porto.app')
@section('header')
@include('porto.partials.header.header-60')
@endsection

@section('main')
<div role="main" class="main">

				<section class="section bg-light border-0 m-0" id="news">
					<div class="container">
						<div class="row justify-content-center mb-4">
							<div class="col-md-9 col-lg-6 text-center">
								<div class="overflow-hidden mb-3">
									<h2 class="text-color-dark font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="maskUp">News &amp; Events</h2>
								</div>
								<div class="divider divider-primary divider-small">
									<hr class="mx-auto w-25 custom-h-1 appear-animation" data-appear-animation="dividerProgress25" data-appear-animation-delay="200">
								</div>
								<p class="text-4 line-height-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
							</div>
						</div>
						<div class="row">
							<div class="col pb-2">
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 order-lg-2">
								@include('porto.partials.sidebar.sidebar-7')
							</div>
							<div class="col-lg-9 order-lg-1">
								<div class="blog-posts">

									<div class="row">
										<div class="col">
											<article class="border-bottom-0 pb-0 mb-5">
												<h2 class="font-weight-semibold custom-fs-1 line-height-3 ls-0 pt-3 mb-3 text-5"><a href="demo-seo-blog-post.html" class="text-color-dark text-6 text-decoration-none">Amazing Things Are Coming</a></h2>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
												<p class="pb-4">Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>

												<div class="row pb-5">
													<div class="col-6 col-sm-3">
														@include('porto.partials.lightbox.lightbox-16')
													</div>
													<div class="col-6 col-sm-3">
														@include('porto.partials.lightbox.lightbox-17')
													</div>
													<div class="col-6 col-sm-3">
														@include('porto.partials.lightbox.lightbox-18')
													</div>
													<div class="col-6 col-sm-3">
														@include('porto.partials.lightbox.lightbox-19')
													</div>
												</div>

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
																	<input type="submit" value="Post Comment" class="btn btn-primary btn-outline font-weight-bold border-width-4 btn-px-4 py-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-loading-text="Loading...">
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
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="bg-dark pt-5 mt-0">
				<div class="container container pt-5">
					<div class="row mb-5 pb-4">
						<div class="col text-center">
							<a href="demo-coffee.html" class="text-decoration-none">
								<img src="img/demos/coffee/logo-light.png" class="img-fluid" width="195" height="132" alt="">
							</a>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-4 text-center mb-4 mb-md-0">
							<h4 class="font-weight-bold text-color-light text-5 mb-1">NEW YORK</h4>
							<p class="font-weight-light text-color-light line-height-4 opacity-6 mb-2 px-lg-5 mx-lg-4">123, New York Street, New York <a href="tel:0123456789" class="text-color-light">(123) 456-7890</a></p>
							<ul class="social-icons social-icons-clean social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-md-4 text-center mb-4 mb-md-0">
							<h4 class="font-weight-bold text-color-light text-5 mb-1">FRESNO</h4>
							<p class="font-weight-light text-color-light line-height-4 opacity-6 mb-2 px-lg-5 mx-lg-4">123, Fresno Street, Fresno <a href="tel:0123456789" class="text-color-light">(123) 456-7890</a></p>
							<ul class="social-icons social-icons-clean social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-md-4 text-center">
							<h4 class="font-weight-bold text-color-light text-5 mb-1">BIRMINGHAM</h4>
							<p class="font-weight-light text-color-light line-height-4 opacity-6 mb-2 px-lg-5 mx-lg-4">123, Birmingham Street, Birmingham <a href="tel:0123456789" class="text-color-light">(123) 456-7890</a></p>
							<ul class="social-icons social-icons-clean social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-11', ['key' => 'footer-copyright.footer-copyright-11'])
			</footer>
@endsection
