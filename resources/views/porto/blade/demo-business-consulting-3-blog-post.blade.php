@extends('porto.app')
@section('header')
@include('porto.partials.header.header-33')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-77')

				<div class="container pt-4 pb-5 my-5">
					<div class="row">
						<div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">

							<article>
								<div class="card border-0">
									<div class="card-body z-index-1 p-0">
										<p class="text-uppercase text-1 mb-3 text-color-default"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>

										<div class="post-image pb-4">
											<img class="card-img-top custom-border-radius-1" src="img/demos/business-consulting-3/blog/blog-2.jpg" alt="Card Image">
										</div>

										<div class="card-body p-0">
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
												<h3 class="text-color-primary text-capitalize font-weight-bold text-5 m-0 mb-3">Author</h3>
												<div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
													<a href="blog-post.html">
														<img src="img/avatars/avatar.jpg" class="rounded-circle" alt="">
													</a>
												</div>
												<p><strong class="name"><a href="#" class="text-4 text-dark pb-2 pt-2 d-block">John Doe</a></strong></p>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.</p>
											</div>

											<hr class="my-5">

											<div id="comments" class="post-block post-comments">
												<h3 class="text-color-primary text-capitalize font-weight-bold text-5 m-0 mb-3">3 comments for "An Interview with John Doe"</h3>

												<ul class="comments">
													<li>
														<div class="comment">
															<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
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

												<h3 class="text-color-primary text-capitalize font-weight-bold text-5 m-0 mb-3 mt-5">Leave a Reply</h3>

												<form class="custom-form-simple-validation p-4 rounded bg-color-grey" action="/" method="POST">			
													<div class="p-2">
														<div class="form-row">
															<div class="form-group col-lg-6">
																<label class="required mb-1 font-weight-bold text-dark">Full Name</label>
																<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control py-4 px-3 border-0 box-shadow-none" name="name" id="name" required>
															</div>
															<div class="form-group col-lg-6">
																<label class="required mb-1 font-weight-bold text-dark">Email Address</label>
																<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control py-4 px-3 border-0 box-shadow-none" name="email" id="email" required>
															</div>
														</div>
														<div class="form-row">
															<div class="form-group col">
																<label class="required mb-1 font-weight-bold text-dark">Comment</label>
																<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control px-3 border-0 box-shadow-none" name="message" id="message" required></textarea>
															</div>
														</div>
														<div class="form-row">
															<div class="form-group col mb-0">
																<button type="submit" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-loading-text="Loading..." data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
																	<span>Post Comment</span>
																</button>
															</div>
														</div>
													</div>
												</form>

											</div>

										</div>
									</div>
								</div>
							</article>

						</div>
						<div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">
							@include('porto.partials.sidebar.sidebar-4')
						</div>
					</div>
				</div>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-top-0 m-0 lazyload" data-bg-src="img/demos/business-consulting-3/backgrounds/background-4.jpg" style="background-size: cover; background-position: center; background-repeat: no-repeat;">
				<div class="container pt-3">
					<div class="row justify-content-between align-items-center py-5 mb-3">
						<div class="col-auto mb-4 mb-lg-0">
							<h2 class="font-weight-semibold text-color-light text-10 ls-0 mb-0">Porto Business Consulting Group</h2>
						</div>
						<div class="col-auto">
							<a href="demo-business-consulting-3-contact.html" class="btn btn-primary custom-btn-style-1 font-weight-medium btn-px-4 btn-py-2 text-4" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
								<span class="text-color-light">Contact Us</span>
							</a>
						</div>
					</div>
					<hr class="bg-color-light opacity-1 my-0">
					<div class="row pt-3 mt-5">
						<div class="col-lg-3 mb-4 mb-lg-0">
							<a href="demo-business-consulting-3.html" class="text-decoration-none">
								<img src="img/demos/business-consulting-3/logo-footer.png" class="img-fluid mb-4" width="123" height="33" alt="">
							</a>
							<p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur fel. </p>
							<ul class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter mx-2"><a href="http://www.twitter.com/" target="_blank" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin" data-cursor-effect-hover="fit"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<ul class="list list-icons list-icons-lg">
								<li class="d-flex px-0 mb-1">
									<img width="25" src="img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}">
									<a href="tel:8001234567" class="text-color-light font-weight-semibold text-3-4 ml-2">(800) 123-4567</a>
								</li>
								<li class="d-flex px-0 my-3">
									<img width="25" src="img/demos/business-consulting-3/icons/email.svg" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}">
									<a href="mailto:porto@consulting.com" class="text-color-light font-weight-semibold text-3-4 ml-2">porto@consulting.com</a>
								</li>
								<li class="d-flex font-weight-semibold text-color-light px-0 mb-1">
									<img width="25" src="img/demos/business-consulting-3/icons/map-pin.svg" alt="Location" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light mr-2'}">
									1234 Street Name, New York, NY 10000, USA
								</li>
							</ul>
						</div>
						<div class="col-lg-4 mb-4 mb-lg-0">
							<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
							@include('porto.partials.google-map.google-map-5')
						</div>
						<div class="col-lg-2">
							<h4 class="font-weight-bold text-5">Useful Links</h4>
							<ul class="list list-icons list-icons-sm">
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="demo-business-consulting-3-contact.html" class="link-hover-style-1 ml-1"> Contact Us</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="demo-business-consulting-3-services.html" class="link-hover-style-1 ml-1"> Our Services</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> Payment Methods</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> Services Guide</a>
								</li>
								<li>
									<i class="fas fa-angle-right text-color-default"></i>
									<a href="#" class="link-hover-style-1 ml-1"> FAQs</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-9', ['key' => 'footer-copyright.footer-copyright-9'])
			</footer>
@endsection
