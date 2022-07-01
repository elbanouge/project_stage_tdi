@extends('porto.app')
@section('header')
@include('porto.partials.header.header-135')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-165')

				<div class="container pt-4 pb-5 my-5">
					<div class="row">
						<div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">

							<article>
								<div class="card border-0">
									<div class="card-body z-index-1 p-0">
										<p class="text-uppercase text-1 mb-3 text-color-default"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>

										<div class="post-image pb-4">
											<img class="card-img-top custom-border-radius-1" src="img/demos/law-firm-2/blog/blog-2.jpg" alt="Card Image">
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
												<h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3">Author</h3>
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
												<h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3">3 comments for "An Interview with John Doe"</h3>

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

												<h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3 mt-5">Leave a Reply</h3>

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
																<input type="submit" value="Post Comment" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3" data-loading-text="Loading...">
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

				<section class="section section-height-3 bg-primary-darken border-0 m-0">
					<div class="container py-3">
						<div class="row align-items-center justify-content-between">
							<div class="col-lg-8 text-center text-lg-left mb-4 mb-lg-0">
								<h3 class="alternative-font-4 text-color-light font-weight-semibold text-4 opacity-9 mb-1">ARE YOU LOOKING FOR</h3>
								<h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-2">Experienced Attorneys?</h2>
								<p class="text-color-light text-3-5 opacity-8 mb-0">Get a free initial consultation right now</p>
							</div>
							<div class="col-lg-4 text-center text-lg-right">
								<a href="demo-law-firm-2-contact.html" data-hash data-hash-offset="100" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3">REQUEST CONSULTATION</a>
							</div>
						</div>
					</div>
				</section>

			</div>
@endsection

@section('footer')
<footer id="footer" class="border-0 pt-4 mt-0">
				<div class="container py-5">
					<div class="row py-4">
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">About Us</h5>
							<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
							<a href="demo-law-firm-2.html" class="text-decoration-none">
								<img src="img/demos/law-firm-2/logo-light.png" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Useful Links</h5>
							<ul class="list list-unstyled text-3-5 mb-0">
								<li class="mb-2"><a href="#">Features</a></li>
								<li class="mb-2"><a href="#">Pages</a></li>
								<li class="mb-2"><a href="#">Portfolio</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-about.html">About Us</a></li>
								<li class="mb-0"><a href="demo-law-firm-2-contact.html">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Practice Areas</h5>
							<ul class="list list-unstyled text-3-5 mb-0">
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Family Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Capital Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Business Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Accident &amp; Injury Law</a></li>
								<li class="mb-2"><a href="demo-law-firm-2-practice-areas-detail.html">Health Law</a></li>
							</ul>
							<a href="demo-law-firm-2-practice-areas.html" class="d-inline-flex custom-read-more-link justify-content-center align-items-center font-weight-medium text-color-primary svg-fill-color-primary svg-stroke-color-primary">
								VIEW ALL
								<svg class="ml-2" version="1.1" viewbox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
								</svg>
							</a>
						</div>
						<div class="col-lg-3">
							<h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Contact Us</h5>
							<ul class="list list-unstyled mb-4">
								<li>
									<i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 mr-2"></i>
									<a href="tel:0123456789" class="text-color-light font-weight-bold text-decoration-none text-5">(800) 123-4657</a>
								</li>
								<li class="mb-3">
									<i class="icons icon-envelope text-color-primary text-6 position-relative top-6 mr-2"></i>
									<a href="mailto:porto@consulting.com" class="text-color-light text-decoration-none text-4">porto@consulting.com</a>
								</li>
								<li class="text-color-light text-4">
									<i class="icons icon-calendar text-color-primary text-5 position-relative top-3 mr-2"></i>
									Mon - Fri 9am - 6pm
								</li>
							</ul>
							<ul class="custom-social-icons-style-1 social-icons social-icons-clean">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-4">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-22', ['key' => 'footer-copyright.footer-copyright-22'])
			</footer>
@endsection
