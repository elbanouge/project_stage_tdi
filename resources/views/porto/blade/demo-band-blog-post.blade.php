@extends('porto.app')
@section('header')
@include('porto.partials.header.header-21')
@endsection

@section('main')
<div role="main" class="main">
				
				@include('porto.partials.page-header.page-header-65')

				<div class="container container-lg-custom">
					<div class="row">
						<div class="col-lg-3 order-lg-2">
							@include('porto.partials.sidebar.sidebar-7')
						</div>
						<div class="col-lg-9 order-lg-1">
							<div class="blog-posts">

								<div class="row">
									<div class="col">
										<article class="border-bottom-0 pb-0 mb-5 pt-4">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
											<p class="pb-4">Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>

											<div class="row pb-5">
												<div class="col-sm-4">
													@include('porto.partials.lightbox.lightbox-10')
												</div>
												<div class="col-sm-4">
													@include('porto.partials.lightbox.lightbox-11')
												</div>
												<div class="col-sm-4">
													@include('porto.partials.lightbox.lightbox-12')
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

												<form class="contact-form" action="php/contact-form.php" method="POST">			
													<div>
														<div class="form-row">
															<div class="form-group col-lg-6">
																<label class="required">Full Name</label>
																<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
															</div>
															<div class="form-group col-lg-6">
																<label class="required">Email Address</label>
																<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
															</div>
														</div>
														<div class="form-row">
															<div class="form-group col">
																<label class="required">Comment</label>
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
<footer id="footer" class="bg-secondary border-0 mt-0">
				<div class="container-fluid py-4 px-5">
					<div class="row justify-content-center justify-content-md-between align-items-center py-5">
						<div class="col-auto mb-4 mb-md-0">
							<a href="demo-band.html">
								<img src="img/demos/band/logo.png" class="img-fluid" alt="" width="112" height="30">
							</a>
						</div>
						<div class="col-auto">
							<ul class="list list-inline list-unstyled text-center text-md-left mb-0">
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#home" class="text-color-light font-weight-bold">HOME</a></li>
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#tour" class="text-color-light font-weight-bold">TOUR</a></li>
								<li class="list-inline-item px-2 mx-3 mb-3 mb-sm-0"><a data-hash data-hash-offset="70" href="#about" class="text-color-light font-weight-bold">ABOUT</a></li>
								<li class="list-inline-item px-2 mx-3 mb-0"><a data-hash data-hash-offset="70" href="#news" class="text-color-light font-weight-bold">NEWS</a></li>
								<li class="list-inline-item pl-2 ml-3 mb-0"><a href="#hiddenContactForm" data-toggle="collapse" aria-controls="hiddenContactForm" onclick="scrollAndFocus(this, '#contact', '#name', 70, true);" class="text-color-light font-weight-bold">CONTACT</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="contact" class="footer-contact-form">
					<div id="hiddenContactForm" class="collapse">
						<div class="container container-lg-custom">
							<div class="row my-5">
								<div class="col text-center">
									<svg class="mb-4" width="20" height="72" viewbox="0 0 10 40">
										<line x1="5" x2="5" y1="0" y2="40" stroke="#909294" stroke-width="1" class="appear-animation" data-appear-animation="customSVGLineAnim"></line>
									</svg>
									<div class="overflow-hidden">
										<span class="d-block text-color-light font-weight-bold d-block appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">GET IN TOUCH</span>
									</div>
									<div class="overflow-hidden mb-3">
										<h2 class="font-weight-bold text-9 pb-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Contact Us</h2>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="font-weight-bold text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col">
									<form class="contact-form form-style-4 form-errors-light appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block"></span>
										</div>
										
										<div class="form-row">
											<div class="form-group col-md-4">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name" required>
											</div>
											<div class="form-group col-md-4">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="E-mail" required>
											</div>
											<div class="form-group col-md-4">
												<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" placeholder="Subject" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('porto.partials.footer-copyright.footer-copyright-6', ['key' => 'footer-copyright.footer-copyright-6'])
			</footer>
@endsection
